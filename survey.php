<?php
session_start();
include('config.php');
if(!empty($_SESSION['name']) && !empty($_SESSION['num'])){
}else{
echo '<script language="javascript">';
echo 'alert("One of the given information is not valid.")';
echo '</script>';
echo '<script language="javascript">';
echo "window.location.href='index.php';";
echo '</script>';
}

if(isset($_POST['submit'])){
$name = mysql_escape_string($_SESSION['name']);
$num = mysql_escape_string($_SESSION['num']);
$prof = mysql_escape_string($_POST['profcomb']);
$xml = new DOMDocument("1.0");

$root = $xml->createElement("data");
$xml->appendChild($root);
$i = 0;

$comments = $xml->createElement("comments");
$comtext = $xml->createTextNode(mysql_escape_string($_POST['comments']));
$comments->appendChild($comtext);
for($i = 0; $i < 8; $i++){

$id   = $xml->createElement("id");

$idText = $xml->createTextNode(mysql_escape_string($i + 1));
$id->appendChild($idText);

$title   = $xml->createElement("choice");
$titleText = $xml->createTextNode(mysql_escape_string($_POST['q'.($i + 1)]));
$title->appendChild($titleText);


$book = $xml->createElement("survey");
$book->appendChild($id);
$book->appendChild($title);

$root->appendChild($book);
}


$root->appendChild($comments);
$xml->formatOutput = true;

$xmlhere = $xml->saveXML();

$result = mysql_query("INSERT into students(fullname,studid,xml,prof)VALUES('$name','$num','$xmlhere','$prof')");

	if($result){
		header("location: thanks.php");
	}
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Evaluation - Survey</title>
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
.Artistic-Body-C-C0
{
    font-family:"Lithos Pro Regular", serif; font-size:40.0px; line-height:1.18em;
}
.Button1,.Button1:link,.Button1:visited{background-image:url('wpimages/wp99867ba9_06.png');background-position:0px 0px;text-decoration:none;display:block;position:absolute;}
.Button1:focus{outline-style:none;}
.Button1:hover{background-position:0px -176px;}
.Button1:active{background-position:0px -88px;}
.Button1 span,.Button1:link span,.Button1:visited span{color:#000000;font-family:Arial,sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:3px;top:25px;width:305px;height:32px;font-size:25px;display:block;position:absolute;cursor:pointer;}
</style>
<link rel="stylesheet" href="wpscripts/wpstyles.css" type="text/css"></head>

<body text="#000000" style="background:transparent url('wpimages/wp4c44f453_06.jpg') repeat-x scroll top center; height:780px;">
<div style="background-color:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:780px;">
<div style="position:absolute;left:23px;top:32px;width:915px;height:709px;background: transparent url('wpimages/wp20c6d627_06.png') no-repeat top left;">
    <img src="wpimages/wpe9469cac_06.png" border="0" width="588" height="63" title="" alt="IAcademy Online Evaluation&#10;" style="position:absolute;left:106px;top:29px;">
    <div style="position:absolute;left:22px;top:109px;width:872px;height:556px;background: transparent url('wpimages/wp003f25dd_06.png') no-repeat top left;">
        <form name="surv" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<img src="wpimages/wp567b61b7_06.png" border="0" width="232" height="28" title="" alt="Please choose a professor:&#10;" style="position:absolute;left:20px;top:22px;">
        <select name="profcomb" size="1" style="position:absolute; left:21px; top:56px;">
            <option value="">&lt;choose&nbsp;a&nbsp;professor&gt;</option>
            <option value="Joseph Stalin">Joseph&nbsp;Stalin</option>
            <option value="Kc Arabit">Kc&nbsp;Arabit</option>
            <option value="Fernando Ocampo">Fernando&nbsp;Ocampo</option>
        </select>
        <div style="position:absolute;left:19px;top:132px;width:387px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">1. Create warm relationship with the students <br></span>
                <span class="Artistic-Body-C">&nbsp;&nbsp;&nbsp;&nbsp;and approachable.</span></div>
        </div>
        <input type="radio" name="q1" VALUE="always" style="position:absolute; left:543px; top:129px;">
        <div style="position:absolute;left:565px;top:129px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <img src="wpimages/wp356cd699_06.png" border="0" width="1" height="556" alt="" style="position:absolute;left:496px;top:0px;">
        <div style="position:absolute;left:616px;top:26px;width:164px;height:47px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">choices</span></div>
        </div>
        <input type="radio" name="q1" VALUE="sometimes" style="position:absolute; left:632px; top:129px;">
        <div style="position:absolute;left:654px;top:129px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q1" VALUE="never" style="position:absolute; left:759px; top:129px;">
        <div style="position:absolute;left:781px;top:129px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:175px;width:377px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">2. maintains a firm but friendly environment. </span></div>
        </div>
        <input type="radio" name="q2" VALUE="always" style="position:absolute; left:542px; top:173px;">
        <div style="position:absolute;left:564px;top:172px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q2" VALUE="sometimes" style="position:absolute; left:631px; top:172px;">
        <div style="position:absolute;left:653px;top:172px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q2" VALUE="never" style="position:absolute; left:758px; top:172px;">
        <div style="position:absolute;left:780px;top:172px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:206px;width:381px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">3. Demonstrates ability to communicate ideas<br></span>
                <span class="Artistic-Body-C"> &nbsp;&nbsp;&nbsp;effectively.</span></div>
        </div>
        <input type="radio" name="q3" VALUE="always" style="position:absolute; left:543px; top:204px;">
        <div style="position:absolute;left:565px;top:204px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q3" VALUE="sometimes" style="position:absolute; left:632px; top:204px;">
        <div style="position:absolute;left:654px;top:204px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q3" VALUE="never" style="position:absolute; left:758px; top:204px;">
        <div style="position:absolute;left:780px;top:204px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:245px;width:320px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">4. Is able to answers questions clearly</span></div>
        </div>
        <input type="radio" name="q4" VALUE="always" style="position:absolute; left:542px; top:243px;">
        <div style="position:absolute;left:564px;top:242px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q4" VALUE="sometimes" style="position:absolute; left:631px; top:242px;">
        <div style="position:absolute;left:653px;top:242px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q4" VALUE="never" style="position:absolute; left:758px; top:242px;">
        <div style="position:absolute;left:780px;top:242px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:274px;width:340px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">5. Is able to challenge student’s thinking</span></div>
        </div>
        <input type="radio" name="q5" VALUE="always" style="position:absolute; left:542px; top:272px;">
        <div style="position:absolute;left:564px;top:271px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q5" VALUE="sometimes" style="position:absolute; left:631px; top:271px;">
        <div style="position:absolute;left:653px;top:271px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q5" VALUE="never" style="position:absolute; left:758px; top:271px;">
        <div style="position:absolute;left:780px;top:271px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:304px;width:433px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">6. Demonstrates positive attitude towards teaching.</span></div>
        </div>
        <input type="radio" name="q6" VALUE="always" style="position:absolute; left:542px; top:302px;">
        <div style="position:absolute;left:564px;top:301px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q6" VALUE="sometimes" style="position:absolute; left:631px; top:301px;">
        <div style="position:absolute;left:653px;top:301px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q6" VALUE="never" style="position:absolute; left:758px; top:301px;">
        <div style="position:absolute;left:780px;top:301px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:330px;width:413px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">7. Provides a good professional role model overall<br></span>
                <span class="Artistic-Body-C"> &nbsp;&nbsp;&nbsp;Effectiveness as a teacher.</span></div>
        </div>
        <input type="radio" name="q7" VALUE="always" style="position:absolute; left:542px; top:328px;">
        <div style="position:absolute;left:564px;top:327px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q7" VALUE="sometimes" style="position:absolute; left:631px; top:327px;">
        <div style="position:absolute;left:653px;top:327px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q7" VALUE="never" style="position:absolute; left:758px; top:327px;">
        <div style="position:absolute;left:780px;top:327px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:18px;top:372px;width:427px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">8. Observes and objectively comments on student’s<br></span>
                <span class="Artistic-Body-C"> &nbsp;&nbsp;&nbsp;professional skills.</span></div>
        </div>
        <input type="radio" name="q8" VALUE="always" style="position:absolute; left:542px; top:370px;">
        <div style="position:absolute;left:564px;top:369px;width:57px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Always</span></div>
        </div>
        <input type="radio" name="q8" VALUE="sometimes" style="position:absolute; left:631px; top:369px;">
        <div style="position:absolute;left:653px;top:369px;width:91px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Sometimes</span></div>
        </div>
        <input type="radio" name="q8" VALUE="never" style="position:absolute; left:758px; top:369px;">
        <div style="position:absolute;left:780px;top:369px;width:47px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Never<br></span>
                <span class="Artistic-Body-C"></span></div>
        </div>
        <div style="position:absolute;left:17px;top:428px;width:94px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Comments:</span></div>
        </div>
        <textarea name="comments" rows="4" cols="54" style="position:absolute; left:17px; top:446px; width:457px; height:70px;"></textarea>
        <input type="submit" id="submit" name="submit" class="Button1" style="position:absolute;left:540px;top:441px;width:320px;height:88px;" />
    </div>
    <img src="wpimages/wpaa043115_06.png" border="0" width="75" height="75" alt="" style="position:absolute;left:22px;top:19px;">
</div>
<img src="wpimages/wpcf6d10db_06.png" border="0" width="872" height="1" alt="" style="position:absolute;left:44px;top:238px;">
</div>
</body>
</html>