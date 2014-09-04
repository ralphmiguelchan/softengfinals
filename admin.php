<?php
session_start();

if(!isset($_SESSION['user'])){
header("location: login.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Evaluation - Admin Home</title>
<meta name="viewport" content="width=1021">
<meta name="author" content="Ralph Chan">
<link rel="icon" href="favicon.ico" type="image/x-icon"> 
<meta name="copyright" content="© Copyrighted by Ralph Chan">
<style type="text/css">
body{margin:0;padding:0;}
.Artistic-Body-C
{
    font-family:"Verdana", sans-serif; font-size:24.0px; line-height:1.21em;
}
.Artistic-Body-C-C0
{
    font-family:"Verdana", sans-serif; font-size:16.0px; line-height:1.13em;
}
.Artistic-Body-C-C1
{
    font-family:"Lithos Pro Regular", serif; font-size:24.0px; line-height:1.17em;
}
.Artistic-Body-C-C2
{
    font-family:"Arial Black", sans-serif; font-size:19.0px; line-height:1.42em;
}
</style>
<link rel="stylesheet" href="wpscripts/wpstyles.css" type="text/css">
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(document).ready(function(){
$.get("getrec.php",function(data,status){
var bam = jQuery.parseJSON(data);
	$.each(bam,function(i,item){
	$("#stud").append(new Option(item.fullname,item.fullname));
	});
});
$("#stud").change(function(){
$("#q1").html("none");
$("#q2").html("none");
$("#q3").html("none");
$("#q4").html("none");
$("#q5").html("none");
$("#q6").html("none");
$("#q7").html("none");
$("#q8").html("none");
var nm = $("#prof").val();
var st = $("#stud").val();
$.get("getp.php",{name: st, prof:nm},function(data,status){
var box = jQuery.parseJSON(data);
var hex = 0;
$.each(box,function(i,item){
var xml = item.xml, 
xmlDoc = $.parseXML( xml ), 
$xml = $( xmlDoc ), 
$title = $xml.find("choice");
$.each($title,function(i,item){
hex = hex + 1;
$("#q" + hex).html(item);
});
});
});
});

$("#prof").change(function(){
$("#q1").html("none");
$("#q2").html("none");
$("#q3").html("none");
$("#q4").html("none");
$("#q5").html("none");
$("#q6").html("none");
$("#q7").html("none");
$("#q8").html("none");
var nm = $("#prof").val();
var st = $("#stud").val();
$.get("getp.php",{name: st, prof:nm},function(data,status){
var box = jQuery.parseJSON(data);
var hex = 0;
$.each(box,function(i,item){
var xml = item.xml, 
xmlDoc = $.parseXML( xml ), 
$xml = $( xmlDoc ), 
$title = $xml.find("choice");
$.each($title,function(i,item){
hex = hex + 1;
$("#q" + hex).html(item);
});
});
});
});
});

function showmas(){
var nm = $("#prof").val();
var st = $("#stud").val();
$.get("getp.php",{name: st, prof:nm},function(data,status){
var box = jQuery.parseJSON(data);
var hex = 0;
$.each(box,function(i,item){
var xml = item.xml, 
xmlDoc = $.parseXML( xml ), 
$xml = $( xmlDoc ), 
$title = $xml.find("comments");
alert($title.text());
});
});
}
</script>
</head>

<body text="#000000" style="background:transparent url('wpimages/wp4c44f453_06.jpg') repeat-x scroll top center; height:619px;">
<div style="background-color:transparent;margin-left:auto;margin-right:auto;position:relative;width:1021px;height:619px;">
<div style="position:absolute;left:23px;top:32px;width:970px;height:553px;background: transparent url('wpimages/wp0d707a86_06.png') no-repeat top left;">
    <img src="wpimages/wpe9469cac_06.png" border="0" width="588" height="63" title="" alt="IAcademy Online Evaluation&#10;" style="position:absolute;left:106px;top:29px;">
    <div style="position:absolute;left:22px;top:109px;width:911px;height:406px;background: transparent url('wpimages/wp6d1a87a5_06.png') no-repeat top left;">
        <select name="prof" id="prof" size="1" style="position:absolute; left:158px; top:50px;">
            <option value="">&lt;choose&nbsp;a&nbsp;professor&gt;</option>
            <option value="Joseph Stalin">Joseph&nbsp;Stalin</option>
            <option value="Fernando Ocampo">Fernando&nbsp;Ocampo</option>
            <option value="Kc Arabit">Kc&nbsp;Arabit</option>
        </select>
        <div style="position:absolute;left:27px;top:43px;width:123px;height:29px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Professor:</span></div>
        </div>
        <div style="position:absolute;left:333px;top:46px;width:104px;height:29px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C">Student:</span></div>
        </div>
        <select name="stud" id="stud" size="1" style="position:absolute; left:449px; top:51px;">
            <option value="">&lt;choose&nbsp;a&nbsp;student&gt;</option>
        </select>
        <div style="position:absolute;left:40px;top:102px;width:387px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">1. Create warm relationship with the students <br></span>
                <span class="Artistic-Body-C-C0">&nbsp;&nbsp;&nbsp;&nbsp;and approachable.</span></div>
        </div>
        <div style="position:absolute;left:39px;top:146px;width:377px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">2. maintains a firm but friendly environment. </span></div>
        </div>
        <div style="position:absolute;left:40px;top:177px;width:381px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">3. Demonstrates ability to communicate ideas<br></span>
                <span class="Artistic-Body-C-C0"> &nbsp;&nbsp;&nbsp;effectively.</span></div>
        </div>
        <div style="position:absolute;left:39px;top:215px;width:320px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">4. Is able to answers questions clearly</span></div>
        </div>
        <div style="position:absolute;left:39px;top:244px;width:340px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">5. Is able to challenge student’s thinking</span></div>
        </div>
        <div style="position:absolute;left:39px;top:274px;width:433px;height:18px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">6. Demonstrates positive attitude towards teaching.</span></div>
        </div>
        <div style="position:absolute;left:39px;top:300px;width:413px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">7. Provides a good professional role model overall<br></span>
                <span class="Artistic-Body-C-C0"> &nbsp;&nbsp;&nbsp;Effectiveness as a teacher.</span></div>
        </div>
        <div style="position:absolute;left:39px;top:342px;width:427px;height:36px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C0">8. Observes and objectively comments on student’s<br></span>
                <span class="Artistic-Body-C-C0"> &nbsp;&nbsp;&nbsp;professional skills.</span></div>
        </div>
        <img src="wpimages/wp5b07ffb8_06.png" border="0" width="1" height="406" alt="" style="position:absolute;left:611px;top:0px;">
        <div style="position:absolute;left:712px;top:31px;width:106px;height:28px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C1">RESULTS</span></div>
        </div>
        <img src="wpimages/wp0def10ae_06.png" border="0" width="911" height="1" alt="" style="position:absolute;left:0px;top:88px;">
        <div style="position:absolute;left:715px;top:104px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q1">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:136px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q2">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:169px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q3">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:203px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q4">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:238px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q5">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:269px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q6">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:299px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q7">none</span></div>
        </div>
        <div style="position:absolute;left:715px;top:335px;width:91px;height:27px;white-space:nowrap;">
            <div class="Wp-Artistic-Body-P">
                <span class="Artistic-Body-C-C2" id="q8">none</span></div>
				 <input type="button" id="comments" value="comments" onclick="showmas()" />
				 <input type="button" id="logout" value="log out" onclick="window.location.href='log.php'" />
        </div>
    </div>
    <img src="wpimages/wpaa043115_06.png" border="0" width="75" height="75" alt="" style="position:absolute;left:22px;top:19px;">
</div>
</div>
</body>
</html>