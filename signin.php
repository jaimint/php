<?php
//include data base file//
include('config.php');
//select the data form database///

$sql=mysql_query("select * from signup where email='$_POST[email]'AND password='$_POST[password]'" );
$num=mysql_num_rows($sql);
//if else statement if num greater then 0 //
if ($num>0){
	
	$row=array("status" => 1, "msg" => "successfully signin!");
	

   $row['userdata']=mysql_fetch_assoc($sql);

    echo  json_encode ($row);
						
}
else{
	$row = array("status" => 0, "msg" => "Please Check Username And Password");
	echo json_encode ($row);
	
	}

//echo json_encode ($row);

?>
