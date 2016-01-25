<?php
include "mail_ini.php";

$vip = array('A8','A9','B8','B9','C8','C9');


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$selected = $request->select;
$name = $request->user_name;
$email = $request->user_email;

include "mysql_ini.php";



$result=$db->query("SELECT * FROM reserved WHERE seat_pos = '$selected'");


if($result->num_rows > 0)    {
	echo 3;
	die();
	exit();
}




	else {

			$stmt = $db->prepare("INSERT INTO reserved (user_name, user_email, seat_pos)
				VALUES (?,?,?)");
			$stmt->bind_param("sss", $user_name, $user_email, $seat_pos);

			$user_name=$name;
			$user_email=$email;
			$seat_pos=$selected;
			$stmt->execute();
		    $stmt->close();

				// $mg->sendMessage($domain, array('from'    => 'dian@tangdian.ca', 
    //                             'to'      => $email, 
    //                             'subject' => 'Congratulations!  '.$name.',you have successfully reserved a seat!', 
    //                             'text'    => 'Hi!'.$name.",\n This is a confirmation that you have reserved a seat at postion:".$seat_pos." at EST  ".date('Y-m-d H:i:s')."\n  Please go to SLC 2034 to claim your ticket."));

			}
			
		


	


		




?>





