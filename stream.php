<?php
include_once("php_includes/check_login_status.php");
?>
<html>
    <head>
        <script src="//cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css" />
        <link rel="icon" type="image/png" href="favicon.png">
        <title>
            Skrolr
        </title>
        <style type="text/css">
            .navllink {
                width:100%;
                padding:0px;
                border-bottom:1px solid #ccc;
            }
            .navllink table {
                width:100%;
                padding:10;
            }
            .navllink:hover {
                background:#eeeeee; 
            }
            body {
                background-color:#2196f3;
                background-image: url("bg.png");
                background-repeat: repeat-x;
                margin:0px;
                padding:0px;
            }
            #navigation {
                background-color:#2196f3;
                width:100%;
                height:64px;
                position: fixed;
                top:0px;
                left:0px;
            }
            #navigation table {
                padding:0px;
                margin:0px;
                border:0px;
                width:90%;
                height:64px;
            }
            #sidenav {
                position: fixed;
                width:260px;
                top:80px;
            }
            #sidenav table {
                width:90%;   
            }
            .navlink:hover {
                width:100%; 
                color:#bdbdbd;
                background:#000;
                font-family:Open Sans;
            }
            #see {
                width:100%;
            }
            #see td {
                padding:5px;
                color:#bdbdbd;
                font-family:Open Sans;
            }
            .navlink {
                width:100%; 
                color:#bdbdbd;
                font-family:Open Sans;
            }
            .navlink table {
                color:#bdbdbd;
                width:98%;
                
            }
            #morestuff {
                position: fixed;
                width:260px;
                height:400px;
            }
            #content {
                margin-top:76px;
                margin-bottom:76px;
                min-width:500px;
            }
            .cardpost {
                -webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                -moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                background:#FFFFFF;
                padding:0px;
                width:100%;
                margin-top:10px;
            }
            .card {
                -webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                -moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                background:#FFFFFF;
                padding:0px;
            }
            input {
                font:14pt Open Sans;
                width:100%;
                color:#757575 ;
                padding:15px;
                border:0px;
            }
            #loginform {
                width:400px;   
            }
            #logincontent {
                width:390px;
                margin-top:5px;
                color:#fff;
            }
            a {
                color:#fff;
                text-decoration:none;
            }
            a:hover {
                text-decoration: underline;
            }
            .btn,.btn-large,.btn-floating,.dropdown-content,.collapsible,ul.side-nav{
                -webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                -moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
            }
            .btn:hover,.btn-large:hover,.btn-floating:hover {
                -webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
                -moz-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
                box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
            }
            .btn,.toast .btn-large,.toast .btn-flat {
                margin:0;
            }
            .btn,.btn-large,.btn-flat {
                display:inline-block;
                height:36px;
                margin-bottom:15px;
                padding:0 2rem;
                -webkit-border-radius:2px;
                -moz-border-radius:2px;
                border-radius:2px;
                background-clip:padding-box;
                line-height:36px;
                text-transform:uppercase;
                border:none;
                outline:0;
                -webkit-tap-highlight-color:transparent
            }
            .btn.disabled,.disabled.btn-large,.btn-floating.disabled,.btn-large.disabled,.btn:disabled,.btn-large:disabled,.btn-large:disabled,.btn-floating:disabled {
                background-color:#DFDFDF;
                box-shadow:none;
                color:#9F9F9F;
                cursor:default;
            }.btn.disabled:hover,.disabled.btn-large:hover,.btn-floating.disabled:hover,.btn-large.disabled:hover,.btn:disabled:hover,.btn-large:disabled:hover,.btn-large:disabled:hover,.btn-floating:disabled:hover {
                background-color:#DFDFDF;color:#9F9F9F
            }
            .btn i,.btn-large i,.btn-floating i,.btn-large i,.btn-flat i
            { 
                font-size:1.3rem;
                line-height:inherit
            }
            .btn,.btn-large {
                text-decoration:none;
                color:#2196f3;
                background-color:#ffffff;
                text-align:center;
                letter-spacing:0.5px;
                -webkit-transition:0.2s ease-out;
                -moz-transition:0.2s ease-out;
                -o-transition:0.2s ease-out;
                -ms-transition:0.2s ease-out;
                transition:0.2s ease-out;
                cursor:pointer
            }
            .btn:hover,.btn-large:hover {
                background-color:#fafafa;
            }
            .btn-floating {
                display:inline-block;
                color:#FFF;
                position:relative;
                z-index:1;
                width:37px;
                height:37px;
                line-height:37px;
                padding:0;
                background-color:#26a69a;
                -webkit-border-radius:50%;
                -moz-border-radius:50%;
                border-radius:50%;
                background-clip:padding-box;
                -webkit-transition:0.3s;
                -moz-transition:0.3s;
                -o-transition:0.3s;
                -ms-transition:0.3s;
                transition:0.3s;
                cursor:pointer;
            }
            .pl {
                font-size:20pt;
                font-align:left;
                height:70px;
                padding-top:5px;
            }
            .pl:hover {
                text-decoration: none;
            }
            .tl:hover {
                border-bottom:3px solid #fff;
                text-decoration: none;   
            }
            .uull {
             padding-left:-10px;
                padding-right:40px;
                padding-top:20px;
                padding-bottom:20px;   
            }
            .tl {
                height:62px;
                border-bottom:3px solid #2196f3;
            }
            .btn-floating i {
                width:inherit;
                display:inline-block;
                text-align:center;
                color:#FFF;
                font-size:1.6rem;
                line-height:37px;
            }
            .btn-floating.btn-large {
                width:55.5px;
                height:55.5px;
            }
            .btn-floating.btn-large i {
                line-height:55.5px;
            }
            .fixed-action-btn {
                position:fixed;
                right:23px;
                bottom:23px;
                padding-top:15px;
                margin-bottom:0;
                z-index:1000;
            }
            .fixed-action-btn ul {
                left:0;
                right:0;
                text-align:center;
                position:absolute;
                bottom:64px;
            }
            .fixed-action-btn ul li {
                margin-bottom:15px;
            }
            .fixed-action-btn ul a.btn-floating {
                -ms-filter:"progid:DXImageTransform@mixin Microsoft@mixin Alpha(Opacity=${iefactor})";
                filter:"alpha(opacity=(${iefactor}))";
                -moz-opacity:0;
                -khtml-opacity:0;
                opacity:0;
            }
            .btn-flat {
                box-shadow:none;
                background-color:transparent;
                color:#343434;
                cursor:pointer;
            }
            .btn-flat.disabled {
                color:#b3b3b3;
                cursor:default;
            }
            .btn-large {
                height:54px;
                line-height:56px;}
            .btn-large i {
                font-size:1.6rem;
            }
            .dropdown-content {
                display:none;
                position:absolute;
                background-color:#FFFFFF;
                margin:0px;
                min-width:100px;
                z-index:1000;
                max-height:70%;
                opacity:0;
                overflow-y:hidden;
                will-change:width,height;
            }
            .dropdown-content li {
                cursor:pointer;
                font-size:1.2rem;
                color:rgba(0,0,0,0.87);
                line-height:1.5rem;
            }
            .dropdown-content li:hover,.dropdown-content li.active {
                background-color:rgba(0,0,0,0.06);
            }
            button:focus {
                outline:none;
                background-color:#fafafa;
            }
            button {
                overflow:visible;
            } 
            button,select {
                text-transform:none;
            }
            button,html input[type="button"],input[type="reset"],input[type="submit"] {
                -webkit-appearance:button;
                cursor:pointer;
            }
            button[disabled],html input[disabled] {
                cursor:default;
            } button::-moz-focus-inner,input::-moz-focus-inner {
                border:0;
                padding:0
            }
            .backlink {
                padding-top:14px;
                padding-bottom:14px;
            }
            .backlink:hover {
                padding-top:14px;
                padding-bottom:12px;
                border-bottom: 3px solid #fff;
            }
            .posttable {
                margin:0px;
                padding:0px;
            }
            .posttable tr td {
                padding-right:5px;
            }
            .posttable tr td img {
                padding-left:5px;   
            }
            .tblink:hover {
                background:#e0e0e0;
                cursor:pointer;
            }
        </style>
        <script src="js/main.js"></script>
        <script src="js/ajax.js"></script>
        <script>
            function emptyElement(x){
	           _(x).innerHTML = "";
            }
            function login(){
	           var e = _("username").value;
	           var p = _("password").value;
	           if(e == "" || p == ""){
		          _("status").innerHTML = "umm, forget something?";
	           } else {
		          _("loginbtn").style.display = "none";
		          _("status").innerHTML = '<table style="min-height:42px;"><tr><td><font style="align:right;color:#333333;">Spinning up the hamster...</font></td></tr></table>';
		          var ajax = ajaxObj("POST", "login.php");
                  ajax.onreadystatechange = function() {
	               if(ajaxReturn(ajax) == true) {
	               if(ajax.responseText == "login_failed"){
					_("status").innerHTML = "sorry, come again?";
					_("loginbtn").style.display = "block";
				} else {
					window.location = "http://k.keegantek.com/sky/stream.php";
				}
	        }
        }
        ajax.send("e="+e+"&p="+p);
	           }
            }
        </script>

    </head>
    <body>
        <!-- Navigation/Header --->
        <div id="navigation">
            <center>
                <table width="90%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="260px">
                            <font style="margin-left:35px;color:#fff;font-size:15pt;">
                                @<?php echo $log_username; ?>
                            </font>
                        </td>
                        <td style="min-width:500px;">
                            <center>
                                <a href="stream.php"><img src="center.png" height="45px"></a>
                            </center>
                        </td>
                        <td width="260px">
                            <center>
                                <table cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <center>
                                                <a href="" style="height:100%;width:100%;"><div class="backlink"><img src="notifications.png" height="35px"></div></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="" style="height:100%;width:100%;"><div class="backlink"><img src="messages.png" height="35px"></div></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="logout.php" style="height:100%;width:100%;"><div class="backlink"><img style="padding-left:7px;" src="logout.png" height="35px"></div></a>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <center>
            <table width="90%" border="0" cellpadding="3"><tr><td width="260px">
                <div class="card" id="sidenav">
                    <a href="">
                    <div class="navllink">
                        <table><tr><td width="50px"><img src="profile.png" width="40px"></td><td>Me</td></tr></table>
                    </div>
                    </a><a href="stream.php" >
                    <div class="navllink">
                        <table><tr><td width="50px"><img src="circle.png" width="40px"></td><td>See Something</td></tr></table>
                    </div>
                    </a><a href="stream.php">
                    <div class="navllink">
                        <table><tr><td width="50px"><img src="say.png" width="40px"></td><td>Say Something</td></tr></table>
                    </div>
                    </a><a href="">
                    <div class="navllink">
                        <table><tr><td width="50px"><img src="do.png" width="40px"></td><td>Do Something</td></tr></table>
                    </div>
                    </a><a href="">
                    <div class="navllink">
                        <table><tr><td width="50px"><img src="need.png" width="40px"></td><td>Need Something</td></tr></table>
                    </div>
                    </a><a href="">
                    <div class="navllink" style="border-bottom:0px;">
                        <table><tr><td width="50px"><img src="settings.png" width="40px"></td><td>Settings</td></tr></table>
                    </div>
                    </a>
                </div>
                </td>
                <td>
                    <div id="content">
                         <?php 
function nicetime($date)
{
    if(empty($date)) {
        return "No date provided";
    }
    
    $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths         = array("60","60","24","7","4.35","12","10");
    
    $now             = time();
    $unix_date         = strtotime($date);
    
       // check validity of date
    if(empty($unix_date)) {    
        return "Bad date";
    }

    // is it future date or past date
    if($now > $unix_date) {    
        $difference     = $now - $unix_date;
        $tense         = "ago";
        
    } else {
        $difference     = $unix_date - $now;
        $tense         = "from now";
    }
    
    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }
    
    $difference = round($difference);
    
    if($difference != 1) {
        $periods[$j].= "s";
    }
    
    return "$difference $periods[$j] {$tense}";
}

$date = "2009-03-04 17:45";
$result = nicetime($date); // 2 days ago

                            if (isset($_GET['POAHF']) === true) {
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `day` DESC, `poahf` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                            } else if (isset($_GET['LOL']) === true) {
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `day` DESC, `lol` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                            } else if (isset($_GET['OMG']) === true) {
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `day` DESC, `omg` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                            } else if (isset($_GET['CLAB']) === true) {
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `day` DESC, `clab` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                            } else if (isset($_GET['SKROL']) === true) {
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `timestamp` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                            } else {
                        ?><div class="cardpost">
                            <table id="see" cellpadding="0" style="padding-top:15px;padding-bottom:15px;margin:0px;" cellspacing="0">
                                <tr>
                                    <td>
                                        <center>
                                            <a href="?POAHF"><img src="POAHF.png"></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="?LOL"><img src="LOL.png"></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="?SKROL"><img src="circle.png" width="95" style="padding-right:1px;"></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="?OMG"><img src="OMG.png"></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="?CLAB"><img src="CLAB.png"></a>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <form method="POST" autocomplete="off" action="post.php" style="padding:0px;margin:0px;">
                        <div class="cardpost">
                            <input autocomplete="off" name="saypost" type="text" value="Say Something" onFocus="if (this.value == 'Say Something') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Say Something';}"><input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
                        </div>
                        </form>
                        
                        <?php
                                include ('php_includes/db_conx.php');
                                $sql = "SELECT * FROM posts WHERE allowed='1' ORDER BY `timestamp` DESC";
                                $post_query = mysqli_query($db_conx, $sql);
                                while ($row = mysqli_fetch_array($post_query, MYSQLI_ASSOC)) {
                                    $id = $row["post_id"];
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    
                                    $date = nicetime($time);
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                    
                                        echo '<div class="cardpost">
                            <table style="padding:10px;">
                                <tr>
                                    <td>
                                        <img src="http://k.keegantek.com/materialize/profile.jpg" style="border-radius:55px;" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="" style="color:#1e88e5;font-size:14pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.$date.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <table style="padding:10px;padding-left:63px;padding-right:43px;">
                                <tr>
                                    <td>
                                        <font style="font-size:13pt;color:#424242;">
                                            '.$post.'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        <table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table></td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="POAHF.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$poahf.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="LOL.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$lol.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="CLAB.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$clab.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        </div>';
                                    }
                                }
                                ?>
                        <div class="cardpost">
                            <br /><br /><br /><br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br /><br /><br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br /><br /><br /><br /><br /><br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br /><br /><br /><br /><br /><br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <div class="cardpost">
                            <br /><br />
                        </div>
                        <?php } ?>
                    </div>
                </td>
                <td width="260px">
                    <div id="morestuff">
                        <br />
                    </div>
                </td>
                </tr>
            </table>
        </center>
    </body>
</html>
<!---
<table style="background:#eeeeee;padding-top:2px;">
                                            <tr>
                                                <td>
                                                    <table class="posttable">
                                                        <tr>
                                                            <td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="POAHF.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="LOL.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td><td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="OMG.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td><td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="CLAB.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td></tr></table></td></tr></table>

<td><table style="background:#eeeeee;padding-top:2px;">
                                            <tr>
                                                <td>
                                                    <table class="posttable">
                                                        <tr>
                                                            <td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="POAHF.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="LOL.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td><td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="OMG.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td><td class="tblink">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <img src="CLAB.png" width="30px">
                                                                        </td>
                                                                        <td>
                                                                            0
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td></tr></table></td></tr></table></td>

--->