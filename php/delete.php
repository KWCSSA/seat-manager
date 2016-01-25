<?php
include "mysql_ini.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$id = $request -> id;




if($db->query("DELETE FROM reserved WHERE id = '$id'")===TRUE){
	
	echo "success";

}
	else echo "fail";

?>