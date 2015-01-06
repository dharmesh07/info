<?php
include('db_conn.php');
$flag = $_GET['flag'];
$event_name= $_GET['event_name'];
$sub_cat = $_GET['sub_cat'];
$description = $_GET['description'];

if($flag == 0){
		try{
			$sql="UPDATE `details` SET `description`='$description' WHERE event_name='$event_name' AND sub_cat='$sub_cat'";
			if(mysql_query($sql))
				echo "updated successfully new record";
			else
				echo "error in updating old record";
		}
		catch(Exception $e){
			echo $e;
		}
}
else
{
		try{
		$sql="INSERT INTO details (`event_name`,`sub_cat`,`description`) VALUES ('$event_name','$sub_cat','$description')";
		if(mysql_query($sql))
			echo "updated successfully";
		else
			echo "error in updating";
		}
		catch(Exception $e){
			echo $e;
		}
}
?>
