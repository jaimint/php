<?php
include('config.php');



	$email = $_POST["email"];
	
	
$query = mysql_query("SELECT * FROM signup WHERE email='$email'");
if(mysql_num_rows($query) != 0)
{
	
	
	$row = array("status" => 0, "msg" => "email already exists!");
	echo json_encode ($row);
    
    // redirect back to form and populate with 
    // data that has already been entered by the user
}else{
	
	
	//echo "INSERT INTO signup (username, email, password)VALUES('$_POST[name]','$_POST[email]','$_POST[pass]')" ;
$sql=mysql_query("INSERT INTO signup (username, email, password)
VALUES('$_POST[name]','$_POST[email]','$_POST[password]')");
$lastid=mysql_insert_id();
 
 if(!$sql){
$row = array("status" => 0, "msg" => "Error adding user!");
echo json_encode ($json);
}


else{
	
	
	
	$sql=mysql_query("select * from signup where id='".$lastid." '");
	
	$row=array("status" => 1, "msg" => "successfully signup!");
	

   $row['userdata']=mysql_fetch_assoc($sql);


}

	
echo json_encode ($row);

	}



?>
