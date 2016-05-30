


<?php
include('config.php');
   //trigger button click

 $search=$_POST['search'];
 //echo "SELECT * FROM `signup` WHERE `username` LIKE '%".$search."%' ";

  $query=mysql_query("SELECT * FROM `signup` WHERE `username` LIKE '%".$search."%' ");

			if (mysql_num_rows($query) > 0) {
				$i=1;
				
			 while($row = mysql_fetch_assoc($query)) {
				// echo"<pre>";   print_r($row);
				 unset($row['password']);
				 unset($row['token']);
		/*//echo $i;
		//echo "<pre>"; print_r($row);
				$hhh[$i]['id']=$row['id'];
				$hhh[$i]['username']=$row['username'];
				$hhh[$i]['email']=$row['email'];
			$i++;*/
			// echo"<pre>";   print_r($row);
				$hhh[]=$row;
				
			  }
			  
			//echo"<pre>";   print_r($hhh);
			$json = array("status" => 1, "msg" => "successfully search  !" ,"userdata" => $hhh);
			  echo json_encode ($json);
			}
			
		else{
			$hhh=array("status" => 0, "msg" => "No search found !");
			//echo "no user found <br><br>";
		  }


		
		
				


?>
