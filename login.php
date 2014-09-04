<?php
session_start();
include('config.php');

if(isset($_SESSION['user'])){
header("location: admin.php");
}
if(isset($_POST['submit'])){
$user = mysql_escape_string($_POST['username']);
$pass = mysql_escape_string($_POST['password']);

$result = mysql_query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");

if(mysql_num_rows($result) >= 1){
$_SESSION['user'] = $user;
header("location: admin.php");
}
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Evaluation - Admin Login</title>
<meta name="viewport" content="width=800">
<link rel="icon" href="favicon.ico" type="image/x-icon"> 
<meta name="author" content="Ralph Chan">
<meta name="copyright" content="© Copyrighted by Ralph Chan">
<style type="text/css">
body{margin:0;padding:0;}
.Artistic-Body-P
{
    margin:0.0px 0.0px 0.0px 0.0px; text-align:left; font-weight:400;
}
.Artistic-Body-C
{
    font-family:"Verdana", sans-serif; font-size:24.0px; line-height:1.22em;
}
.Button1,.Button1:link,.Button1:visited{background-image:url('wpimages/wp47a8adb9_06.png');background-position:0px 0px;text-decoration:none;display:block;position:absolute;}
.Button1:focus{outline-style:none;}
.Button1:hover{background-position:0px -100px;}
.Button1:active{background-position:0px -50px;}
.Button1 span,.Button1:link span,.Button1:visited span{color:#000000;font-family:Arial,sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:2px;top:14px;width:107px;height:18px;font-size:14px;display:block;position:absolute;cursor:pointer;}
</style>

</head>

<body text="#000000" style="background:transparent url('wpimages/wp4c44f453_06.jpg') repeat-x scroll top center; height:458px;">
<div style="background-color:transparent;margin-left:auto;margin-right:auto;position:relative;width:800px;height:458px;">
<div style="position:absolute;left:23px;top:32px;width:741px;height:390px;background: transparent url('wpimages/wpcdb674f8_06.png') no-repeat top left;">
    <img src="wpimages/wpe9469cac_06.png" border="0" width="588" height="63" title="" alt="IAcademy Online Evaluation&#10;" style="position:absolute;left:106px;top:29px;">
    <div style="position:absolute;left:22px;top:109px;width:679px;height:253px;background: transparent url('wpimages/wp2596a427_06.png') no-repeat top left;">
        <form name="pasx" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div style="position:absolute;left:36px;top:52px;width:133px;height:29px;white-space:nowrap;">
            <div class="Artistic-Body-P">
                <span class="Artistic-Body-C">Username:</span></div>
        </div>
        <input type="text" name="username" value="" style="position:absolute; left:180px; top:56px; width:450px;">
        <div style="position:absolute;left:44px;top:88px;width:124px;height:29px;white-space:nowrap;">
            <div class="Artistic-Body-P">
                <span class="Artistic-Body-C">Password:</span></div>
        </div>
        <input type="password" name="password" value="" style="position:absolute; left:179px; top:92px; width:450px;">
        <input type="submit" name="submit" id="submit" class="Button1" style="position:absolute;left:518px;top:131px;width:115px;height:50px;" value="Login"/>
    </form>
	</div>
    <img src="wpimages/wpaa043115_06.png" border="0" width="75" height="75" alt="" style="position:absolute;left:22px;top:19px;">
</div>
</div>
</body>
</html>