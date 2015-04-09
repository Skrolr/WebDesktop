<?php
include_once("php_includes/check_login_status.php");
if($user_ok == true){
	?>
<?php

?>
<html>
<?php include('jobs.php'); ?>
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
                <!---position: fixed;-->
                width:260px;
                margin-top:76px;
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
            .cardpost a {
                color:#2196f3;
                text-decoration:none;
            }
            .cardpost a:hover {
                text-decoration:underline;
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
            .inputsmall {
                font:10pt Open Sans;
                width:100%;
                color:#757575 ;
                padding:10px;
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
            .tblinkselected {
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
    <?php include_once("analyticstracking.php") ?>
        <!-- Navigation/Header --->
        <?php include('navigation.php'); ?>
        <center>
            <table width="90%" border="0" cellpadding="3"><tr><td width="260px" valign="top">
                <?php include('nav.php'); ?>
                </td>
                <td>
                    <div id="content">
                         <?php 
    function twitterify($post) {
  $post = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2", $post);
  $post = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2", $post);
  $post = preg_replace("/@(\w+)/", "<a href=\"https://skrolr.com/user/\\1\">@\\1</a>", $post);
  $post = preg_replace("/#(\w+)/", "<a href=\"http://skrolr.com/search?ht=\\1\" target=\"_blank\">#\\1</a>", $post);
return $post;
}
    
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
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">
                            <table style="padding:10px;">
                                ';
                                  if ($repost == 1) {      
                                     echo' 
                                         <tr>
                                    <td style="background:#fafafa;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr>
                                          ';  
                                  }
                                echo '<tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                                        
                            echo '
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
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "omg") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "clab") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
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
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">
                            <table style="padding:10px;">
                                ';
                                  if ($repost == 1) {      
                                     echo' 
                                         <tr>
                                    <td style="background:#fafafa;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr>
                                          ';  
                                  }
                                echo '<tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                            echo '
                            
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
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                <td class="'; if ($type_remove === "omg") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "clab") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
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
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">
                            <table style="padding:10px;">
                                ';
                                  if ($repost == 1) {      
                                     echo' 
                                         <tr>
                                    <td style="background:#fafafa;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr>
                                          ';  
                                  }
                                echo '<tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                                        
                            echo '
                            
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
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "omg") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "clab") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
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
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">
                            <table style="padding:10px;">
                                ';
                                  if ($repost == 1) {      
                                     echo' 
                                         <tr>
                                    <td style="background:#fafafa;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr>
                                          ';  
                                  }
                                echo '<tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                                        
                            echo '
                            
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
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "omg") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "clab") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
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
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">
                            <table style="padding:10px;">
                                ';
                                  if ($repost == 1) {      
                                     echo' 
                                         <tr>
                                    <td style="background:#fafafa;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr>
                                          ';  
                                  }
                                echo '<tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                                        
                            echo '
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
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="omg" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <img src="OMG.png" width="30px">
                                                            </td>
                                                            <td>
                                                                &nbsp '.$omg.'
                                                            </td>
                                                        </tr>
                                                    </table></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="clab" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
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
                                            <a href=""><img src="circle.png" width="95" style="padding-right:1px;"></a>
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
                                    $i2 = "";
                                    $user = $row["user_id"];
                                    $time = $row["timestamp"];
                                    $post = $row["post"];
                                    $poahf = $row["poahf"];
                                    $lol = $row["lol"];
                                    $omg = $row["omg"];
                                    $clab = $row["clab"];
                                    $day = $row["day"];
                                    $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                    $date = nicetime($time);
                                    $photo = $row["photo"];
                                    
                                   $repost = $row["repost"];
                                    $repost_of = $row["repost_of"];
                                    
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                        
                                        if ($repost == 1) {
                                        $i2 = $user;
                                        $u2 = $username;
                                        $sql2 = "SELECT * FROM posts WHERE post_id='$repost_of'";
                                        $post_query2 = mysqli_query($db_conx, $sql2);
                                        while ($row2 = mysqli_fetch_array($post_query2, MYSQLI_ASSOC)) {
                                            $id = $row2["post_id"];
                                            $user = $row2["user_id"];
                                            $time = $row2["timestamp"];
                                            $post = $row2["post"];
                                            $poahf = $row2["poahf"];
                                            $lol = $row2["lol"];
                                            $omg = $row2["omg"];
                                            $clab = $row2["clab"];
                                            $day = $row2["day"];
                                            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]#postid".$id;
                                            $date = nicetime($time);
                                            $photo = $row2["photo"];
                                        
                                        }
                                    
                                    $sql_post_user = "SELECT * FROM users WHERE id='$user' AND activated='1' LIMIT 1";
                                    $user_post_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_post_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        }
                                        
                                        $already_sql = "SELECT * FROM likes WHERE `user_id`='$log_id' AND `post_id`='$id'";
                                        $already_query = mysqli_query($db_conx, $already_sql);
                                        //figure out what one needs to be removed
                                        while ($already_row = mysqli_fetch_array($already_query, MYSQLI_ASSOC)) {
                                            $type_remove = $already_row['type_of_like'];
                                        }
                                        //remove already existing like of post
                                        $numrows = mysqli_num_rows($already_query);
                                        if($numrows < 1) {
	                                       $type_remove = "not";
                                        }
                                        
                                        $zap_sql = "SELECT * FROM friends WHERE user_id='$log_id' AND friend='$user' AND accepted='1'";
                                        $zap_query = mysqli_query($db_conx, $zap_sql);
                                        $numrows = mysqli_num_rows($zap_query);
                                        if($numrows > 0 || $username === $log_username){
                                        
                                        echo '<div id="postid'.$id.'" style="position:relative;top:-62px;"></div><div class="cardpost">';
                                  if ($repost == 1) {      
                                     echo' 
                                         <table width="100%" cellpadding="0" cellspacing="0" style="background:#fafafa;color:#ccc;"><tr>
                                    <td style="padding:10px;">@'.$u2.' ReZapped @'.$username.'\'s  thought</td>
                                </tr></table>
                                          ';  
                                  } 
                                            echo '
                            <table style="padding:10px;">
                                
                                <tr>
                                    <td>
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <font style="font-size:10pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:14pt;">
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
                                            '.twitterify($post).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                            ';
                                        
                                        if ($photo == 1) {
                                            $photo_sql = "SELECT * FROM photo WHERE post_id='$id'";
                                            $photo_query = mysqli_query($db_conx, $photo_sql);
                                            while ($rowp = mysqli_fetch_array($photo_query, MYSQLI_ASSOC)) {
                                                $url = $rowp["url"];
                                                echo '<img src="images/'.$url.'" width="100%">';
                                            }
                                        }
                                        
                            echo '
                            <br />
                            <table cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;width:100%;">
                                <tr>
                                    <td align="right">
                                        '; if ($user != $log_id && $i2 != $log_id) { echo '<a href="share.php?post_id='.$id.'">'; } echo '<table cellpadding="0" cellspacing="0" style="cursor:pointer;"><tr><td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:4px;padding-left:4px;">
                                                    <img src="share.png" height="36px">
                                                </td>
                                            </tr>
                                        </table>'; if ($user != $log_id && $i2 != $log_id) { echo '</a>'; } echo '</td>
<td><table style="background:#fafafa;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="tblink" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <img src="comment.png" height="22px" width="26px" style="padding-top:3px;">
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "poahf") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=poahf&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "lol") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=lol&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "omg") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=omg&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            <td><table style="background:#eeeeee;" cellpading="0" cellspacing="0">
                                            <tr>
                                                <td class="'; if ($type_remove === "clab") { echo 'tblinkselected'; } else { echo 'tblink'; } echo '" style="padding-top:2px;height:44px;padding-right:9px;padding-left:9px;">
                                                    <a href="like.php?type=clab&post_id='.$id.'&link='.$link.'">
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
                                                    </a>
                                                </td>
                                            </tr>
                                        </table></td>
                                            
                                            </tr></table>
                                        </td></tr></table><br />
                        <div width="100%" style="background:#fafafa;">
                        ';
                            $comment_sql = "SELECT * FROM comment WHERE post_id='$id' ORDER BY `timestamp`";
                                        $comment_query = mysqli_query($db_conx, $comment_sql);
                                        $numrows = mysqli_num_rows($comment_query);
                                        if($numrows > 0) {
                                            while ($comment_row = mysqli_fetch_array($comment_query, MYSQLI_ASSOC)) {
                                            $comment = $comment_row["content"];
                                            $time = $comment_row["timestamp"];
                                            $user_comment_id = $comment_row["user_id"];
                                            
                                            $sql_post_user = "SELECT * FROM users WHERE id='$user_comment_id' AND activated='1' LIMIT 1";
                                    $user_comment_query = mysqli_query($db_conx, $sql_post_user);
                                    
                                    while ($row_user = mysqli_fetch_array($user_comment_query, MYSQLI_ASSOC)) {
                                        $first = $row_user["first_name"];
                                        $last = $row_user["last_name"];
                                        $username = $row_user["username"];
                                        $log_name = $row_user["avatar"];
                                        if ($log_name != "") { 
                                            $avatar = '../images/'.$log_name;
                                        } else { 
                                            $avatar = "profiledemoman.png";
                                        }
                                    }
                                        
                                                echo '<center>
                            <table style="padding-top:6px;" width="90%">    
                                <tr>
                                    <td width="40px">
                                        <img src="'.$avatar.'" style="border-radius:55px;" width="40px" height="40px">
                                    </td>
                                    <td width="80px">
                                        <font style="font-size:8pt;color:#616161;">
                                            <a href="/user/'.$username.'" style="color:#1e88e5;font-size:12pt;">
                                                @'.$username.'
                                            </a>
                                            <br /> '.nicetime($time).'
                                        </font>
                                    </td>
                                    <td>
                                        <font style="font-size:11pt;color:#424242;">
                                            '.twitterify($comment).'
                                        </font>
                                    </td>
                                </tr>
                            </table>
                        </center>
                                                
                                                ';
                                                
                                            }
                                        }
                        echo '
                        <form method="POST" action="comment.php?post_id='.$id.'">
                            <center><table width="90%"><tr><td><input type="text" class="inputsmall" name="content"></td><td width="60px"><input type="submit" value="comment" class="btn" style="margin-top:13px;"></tr></table></center>
                        </form>
                        </div></div>';
                                        }
                                    }
                                }
                                
                                ?>
                        
                        <?php } ?>
                    </div>
                </td>
                <td width="260px">
                    <div id="morestuff">
                        <div class="cardpost">
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        </div><br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
                    </div>
                </td>
                </tr>
            </table>
        </center>
    </body>
</html>
<?php
} else {
    ?>
<html>
    <?php include('jobs.php'); ?>
<head>
    <title>Skrolr</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <style type="text/css">
        body {
            margin:0px;
            padding:0px;
            background:#fafafa;
            font-family: Roboto Slab;
        }
        #bigblue a {
            color:#fff;
            text-decoration:none;
            padding:15px;
        }
        #bigblue a:hover {
            text-decoration: underline;
        }
        #bigblue {
            background:#42a5f5;
            height:665px;
            <?php 
            $rand = rand(1,20);
            if ($rand == 1) {
                echo "background-image:url('hope.png');background-size: 100% 100%;";
            } else if ($rand == 2) {
                echo "background-image:url('hope2.jpg');background-size: 100% 100%;";
            } else if ($rand == 3) {
                echo "background-image:url('hope3.jpg');background-size: 100% auto;background-position: 0px -180px;";
            } else if ($rand == 4) {
                echo "background-image:url('hope4.jpeg');background-size: 100% 100%;";
            } else if ($rand == 5) {
                echo "background-image:url('hope5.jpg');background-size: 100% 100%;";
            } else if ($rand == 6) {
                echo "background-image:url('hope6.jpg');background-size: 100% 100%;";
            } else if ($rand == 7) {
                echo "background-image:url('hope7.jpg');background-size: 100% 100%;";
            } else if ($rand == 8) {
                echo "background-image:url('hope8.jpg');background-size: 100% 100%;";
            } else if ($rand == 9) {
                echo "background-image:url('noah1.JPG');background-size: 100% 100%;";
            } else if ($rand == 10) {
                echo "background-image:url('noah2.JPG');background-size: 100% auto;background-position: 0px -180px;";
            } else if ($rand == 11) {
                echo "background-image:url('noah3.JPG');background-size: 100% 100%;";
            } else if ($rand == 12) {
                echo "background-image:url('noah4.JPG');background-size: 100% 100%;";
            } else if ($rand == 13) {
                echo "background-image:url('noah5.JPG');background-size: 100% 100%;";
            } else if ($rand == 14) {
                echo "background-image:url('noah6.JPG');background-size: 100% 100%;";
            } else if ($rand == 15) {
                echo "background-image:url('noah7.JPG');background-size: 100% 100%;";
            } else if ($rand == 16) {
                echo "background-image:url('noah8.JPG');background-size: 100% 100%;";
            } else if ($rand == 17) {
                echo "background-image:url('noah9.JPG');background-size: 100% auto;background-position: 0px -180px;";
            } else if ($rand == 18) {
                echo "background-image:url('noah10.JPG');background-size: 100% 100%;";
            } else if ($rand == 19) {
                echo "background-image:url('noah11.JPG');background-size: 100% 100%;";
            } else if ($rand == 20) {
                echo "background-image:url('noah12.JPG');background-size: 100% 100%;";
            }
            
            //background-image:url('hope.png');
            //background-image:url('hope2.jpg')
            //background-image:url('hope4.jpeg');
            //background-image:url('hope5.jpg');
            //background-image:url('hope6.jpg');
            //background-image:url('hope7.jpg');
            ?>
            
        }
        #content {
            
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
                background-color:#2196f3;color:#fff
            }
            .btn i,.btn-large i,.btn-floating i,.btn-large i,.btn-flat i
            { 
                font-size:1.3rem;
                line-height:inherit
            }
            .btn,.btn-large {
                text-decoration:none;
                color:#2196f3;
                background-color:#fff;
                text-align:center;
                letter-spacing:0.5px;
                font-size:12pt;
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
        .card {
                -webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                -moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                background:#FFFFFF;
                padding:0px;
            }
            .textinput {
                font:14pt Open Sans;
                width:100%;
                color:#757575 ;
                padding:15px;
                border:0px;
            }
        textarea:focus, input:focus{
    outline: 0;
}
    
    </style>
    
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100&subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="bigblue">
        <center>
            <table width="100%"><td><img src="homepagelogo.png" height="50px" style="margin-top:-5px;margin-left:5px;"></td><td align="right"><table><tr><td><a href="/about">about</a></td><td><a href="/features">features</a></td><td><A href="/login"><button class="btn waves-effect waves-light" style="margin-top:15px;">sign in</button></A></td></tr></table></td></table>
            <table width="90%" style="padding-top:120px;"><tr><td><table><tr><td width="150px"><!---<img src="circleinverted.png" width="250px">--></td><td><table style="margin:0px;padding:0px;padding-left:20px;padding-top:60px;" cellpadding="0" cellspacing="0"><tr><td><div style="font:100pt Open Sans;color:#fff;padding:0px;positon:relative;top:280px;"><div class="card"><form method="POST" style="padding:0px;margin:0px;" action="request.php"><table cellpadding="0" cellspacing="0" border="0"><tr><td width="750px"><input class="textinput" name="email" type="email" width="400px" value="example@example.com" onFocus="if (this.value == 'example@example.com') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'example@example.com';}"></td><td width="35px" style="max-width:30px;"><input type="image" width="20px" height="20px" src="pointer.png" border="0" alt="Submit" style="margin-right:0px;position:relative;"/></td></tr></table></form></div></div></td></tr><tr><td><div style="padding-left:20px;padding-top:5px;font:40pt Roboto Slab;color:#fff;">become something</div></td></tr></table></td><td></td></tr></table></td></tr></table>
        <br /><br />
        </center>
    </div>
    <div id="content">
        <center>
            <div id="about">
            <table width="80%">
                <tr>
                    <td>
                        <div style="padding-top:25px;padding-left:20px;padding-bottom:30px;font:20pt Open Sans;color:#5e5e5e;border-bottom:0px solid #bdbdbd;">
                            What is Skrolr?
                        </div>
                        <div style="color:#757575;padding:30px;padding-top:5px;font-size:14pt;">      
Skrolr is todays most exciting and new crowd sourced media conglomerate. Through an exciting new system of rating you can explore what is popular on the web, trending music, and your daily dose of current events. Never feel left behind in any social situation. When you Skrol you can find out all that you need to be the highlight of any conversation.   
                        </div>
                    </td>
                </tr>
            </table>
                </div>
        </center>
            </div>
            
</body>
</html>
<?php
}

?>
