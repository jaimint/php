<?php 
include('config.php');
error_reporting(0);
$email=$_POST['email'];

$query="select * from signup where email='$email' ";
	$result=mysql_query($query) or die(error);
	if(mysql_num_rows($result))
	{
		$row=mysql_fetch_array($result);
	//print_r ($row);	

	$password=$row["password"]; 
	//print_r($password);
	$email=$row["email"]; 
	$subject="Password Request"; 
	$header="From: 	jaimint53@gmail.com"; 
	$content="Your password is ".$password; 
	mail($email, $subject, $content, $header);
	//echo "User exist";
       $row=array("status" => 1, "msg" => "An email containing the password has been sent to you!");
	
          echo json_encode ($row);

	    } 
		 

else
	{
$row=array("status" => 0, "msg" => "no such login in the system. please try again.!");
	      echo json_encode ($row);

	}

?>
