<?php

$mysqli = new mysqli("localhost", "hardshell", "d0ntgue55m3", "hardshell");
if( $mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}  
// if( !isset($_POST['query']) ) { $_POST['query'] = 'CMSC'; }
if( !isset($_POST['query']) ) { return; }
$stmt = $mysqli->prepare("SELECT name FROM course_info WHERE name LIKE CONCAT(?, '%')");
$param = $_POST['query'];
$stmt->bind_param('s', $param);
$stmt->execute();
$stmt->bind_result($name);

$list = Array();
while($stmt->fetch() ) {
  $list[] = $name;
}

echo json_encode($list);
?>
