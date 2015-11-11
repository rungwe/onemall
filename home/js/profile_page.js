
function init_company(){
    drawer_init();
    close_drawer_onload(1000);
    pull_broadcasts(6);
    pull_suggestions(3);
    social_media_init();
}

function social_media_init() {
    $(document).ready(function () {
        $(".social-media").click(function () {
            var icon = $(this);
            
            if (icon.hasClass("fbk")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("fb");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("fb");
                }
            }

            else if (icon.hasClass("twt")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("twitter");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("twitter");
                }
            }

            else if (icon.hasClass("inst")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("instagram");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("instagram");
                }
            }

            else if (icon.hasClass("ggp")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("google");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("google");
                }
            }

            else if (icon.hasClass("lnkd")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("linkdn");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("linkdn");
                }
            }

        });
    });
}