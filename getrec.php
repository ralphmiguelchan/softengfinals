<?php
include('config.php');

$result = mysql_query("SELECT fullname FROM students");
$rows = array();

while($r = mysql_fetch_assoc($result)){
$rows[] = $r;
}

echo json_encode($rows);
?>