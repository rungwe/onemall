<?php
ini_set('display_errors',true);
define('HOST','p:sessiondb.chujykwc6ihz.us-west-2.rds.amazonaws.com');
define('USER','root');
define('DBNAME','sessionDB');
define('PSWD','project123');
class CustomSessionHandler
{
   public $status;
   public function _construct(){
        
   }
   public function getStatus(){
       if($this->status==TRUE){
            return True;
        }
        else{
            return False;
        }
   }
   public function open($savePath, $sessionName)
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        // Check connection
        if ($db->connect_error) {
            //die("Connection failed: " . $db->connect_error);
            return FALSE;
        } 
        else{
        
        return TRUE;
        }
    }

    public function close()
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        $read_stmt = $db->prepare("UPDATE session set username=? where session_id=?");
        $read_stmt->bind_param("ss",$_SESSION["email"],session_id());
        $read_stmt->execute();
        return TRUE;
    }
    public function read($sid)
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        $read_stmt = $db->prepare("SELECT session_data FROM session where session_id =?");
        $read_stmt->bind_param("s",$sid);
        $read_stmt->execute();
        $result=$read_stmt->get_result();
        $row =$result->fetch_assoc();

        $num_rows=$result->num_rows;
        if($num_rows>0){
            
            return $row["session_data"];
        }

        else{
            return "";
        }

        
    } 
           
    public function write($sid, $data)
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        $read_stmt = $db->prepare("INSERT INTO session (username,session_id, session_data,session_lastaccesstime) VALUES(?,?,?,CURRENT_TIMESTAMP) ON DUPLICATE KEY UPDATE session_data =?, session_lastaccesstime=CURRENT_TIMESTAMP");
        $read_stmt->bind_param("ssss",$_SESSION["email"],$sid,$data,$data);
        

        if($read_stmt->execute()){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }        
    public function destroy($sid)
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        $read_stmt = $db->prepare("Delete FROM session where session_id =?");
        $read_stmt->bind_param("s",$sid);

        if($read_stmt->execute()){
            setcookie(session_name(), "", time() - 3600);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    public function gc($expire)
    {
        $db = new mysqli(HOST, USER, PSWD,DBNAME);
        $read_stmt = $db->prepare("Delete FROM session WHERE session_lastaccesstime < DATE_SUB(NOW(), INTERVAL ? SECOND)");
        $read_stmt->bind_param("s",$expire);

        if($read_stmt->execute()){
            setcookie(session_name(), "", time() - 3600);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

   
}

//$handler = new SessionHandler();
//$handler->write("ID Stored","This is the session data");
//session_set_save_handler($handler, true);
   
 //$handler = new SessionHandler();
//$handler->open("xxxxxx testing","hello");   

?>


