<?php
$username = "jaimint53";
$password = "thakur8679607999";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("blissitsolution_db",$dbhandle)
  or die("Could not select examples");

?> 
