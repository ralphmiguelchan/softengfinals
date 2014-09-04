<?php
include('config.php');

$name = mysql_escape_string($_GET['name']);
$prof = mysql_escape_string($_GET['prof']);
$result = mysql_query("SELECT * FROM students WHERE fullname='$name' AND prof='$prof'");

$rows = array();
while($r = mysql_fetch_assoc($result)){
$rows[] = $r;
}
echo json_encode($rows);
?>