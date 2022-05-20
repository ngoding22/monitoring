<?php 
 $konek = mysqli_connect("localhost", "root","","sleepmonitoring");

 	//check connection

 	if (mysqli_connect_errno()){
 		echo "Failed to connect to Mysql: " . mysqli_connect_error();
 		exit();
 	}
?>