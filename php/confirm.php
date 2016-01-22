<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id = $request->id;
include "mysql_ini.php";

if($db->query("UPDATE reserved SET getTkt=1 WHERE id = '$id'") ===TRUE) {
	echo "success";
}
else echo "fail";



?>
