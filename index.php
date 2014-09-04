<?php
session_start();
if(!empty($_SESSION['name'])){
header("location: survey.php");
}

if(isset($_POST['submit'])){
$_SESSION['name'] = $_POST['fullname'];
$_SESSION['num'] = $_POST['studnum'];

header('location: survey.php?name=' .$_SESSION['name']. '&stid=' .$_SESSION['num']);
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Evaluation - Home</title>
<meta name="viewport" content="width=960">
<meta name="author" content="Ralph Chan">
<link rel="icon" href="favicon.ico" type="image/x-icon"> 
<meta name="copyright" content="© Copyrighted by Ralph Chan">
<style type="text/css">
body{margin:0;padding:0;}
.Artistic-Body-C
{
    font-family:"Verdana", sans-serif; font-size:16.0px; line-height:1.13em;
}
.Button1,.Button1:link,.Button1:visited{background-image:url('wpimages/wp3d10ea7b_06.png');background-position:0px 0px;text-decoration:none;display:block;position:absolute;}
.Button1:focus{outline-style:none;}
.Button1:hover{background-position:0px -128px;}
.Button1:active{background-position:0px -64px;}
.Button1 span,.Button1:link span,.Button1:visited span{color:#ffffff;font-family:Arial,sans-serif;font-weight:normal;text-decoration:none;text-align:left;text-transform:none;font-style:normal;left:17px;top:20px;width:135px;height:25px;font-size:20px;display:block;position:absolute;cursor:pointer;}
</style>
<link rel="stylesheet" href="wpscripts/wpstyles.css" type="text/css"></head>

<body text="#000000" style="background:transparent url('wpimages/wp4c44f453_06.jpg') repeat-x scroll top center; height:591px;">
<div style="background-color:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:591px;">
<div style="position:absolute;left:23px;top:32px;width:915px;height:529px;background: transparent url('wpimages/wpf667bce4_06.png') no-repeat top left;">
    <img src="wpimages/wpa651966f_06.png" border="0" width="601" height="62" title="" alt="iAcademy Online Evaluation&#10;" style="position:absolute;left:106px;top:29px;">
    <div style="position:absolute;left:22px;top:109px;width:872px;height:378px;background: transparent url('wpimages/wpac17c33f_06.png') no-repeat top left;">
        <img src="wpimages/wpa9fd08e6_06.png" border="0" width="835" height="273" alt="" style="position:absolute;left:20px;top:22px;">
		<form name="pasx" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" id="submit" name='submit' class="Button1" style="position:absolute;left:631px;top:294px;width:217px;height:64px;" />
        <input type="text" name="fullname" value="" style="position:absolute; left:115px; top:310px; width:220px;">
        <div style="position:absolute;left:28px;top:312px;width:87px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Full name:</span></div>
        </div>
        <div style="position:absolute;left:340px;top:310px;width:138px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Student number:</span></div>
        </div>
        <input type="text" name="studnum" value="" style="position:absolute; left:478px; top:310px; width:131px;">
		</form>
        <div style="position:absolute;left:28px;top:343px;width:532px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Note: please be sure that the given information above is correct</span></div>
        </div>
    </div>
    <img src="wpimages/wpaa043115_06.png" border="0" width="75" height="75" alt="" style="position:absolute;left:22px;top:19px;">
</div>
</div>
</body>
</html>