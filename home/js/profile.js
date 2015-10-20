

function set_profile_personal1(){
    clear_err();
    var firstname = document.getElementById("firstname").value.trim();
    var lastname = document.getElementById("surname").value.trim();
    var midlename = document.getElementById("middlename").value.trim();
    var data = { fname: firstname, lname: lastname};
    var data_json = JSON.stringify(data); 

    var xmlhttp;

    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest(); 
    }

    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status==204) {
            //alert(xmlhttp.status)
            response_msg("profile_error1","operation successfull", true);
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status != 204) {
            
            response_msg("profile_error1","operation not successfull, please try again, make sure only alphabetical letters are used", false);
        }
    }

    xmlhttp.open("PUT",URI+"customer/edit-profile",true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
    xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xmlhttp.send(data_json);
}


function set_profile_personal2(){
    clear_err();
    var dob = document.getElementById("dob").value.trim();
    if (dob.length!=10){
        response_msg("profile_error2","incorrect date format", false);
        return;
    }
    var gender = $('input[name=sex]:checked').val();
    //alert(gender);
    if(gender=="male" || gender=="female"){
        gender = $('input[name=gender]:checked').val();
      }
     else{
          response_msg("profile_error2","gender not selected", false);
          return;
      }
      var data = { date_of_birth: dob, gender: gender };
    var data_json = JSON.stringify(data); 

    var xmlhttp;

    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest(); 
    }

    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status==204) {
            //alert(xmlhttp.status)
            response_msg("profile_error2","operation successfull", true);
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status != 204) {
            
            response_msg("profile_error2","operation not successfull, please try again, make sure only alphabetical letters are used", false);
        }
    }

    xmlhttp.open("PUT",URI+"customer/edit-profile",true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
    xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xmlhttp.send(data_json);
}

function clear_err(){
    document.getElementById("profile_error1").innerHTML = "";
    document.getElementById("profile_error2").innerHTML = "";
}

function response_msg(loc,msg,status){
    if (status) {
        //alert("testing")
        document.getElementById(loc).style.color = "green";
        document.getElementById(loc).innerHTML = msg;
    }
    else{
        document.getElementById(loc).style.color = "red";
        document.getElementById(loc).innerHTML = msg;
    }
}