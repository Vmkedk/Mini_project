<?php
session_start();


	// mysqli_connect("localhost","root","");
	// mysqli_select_db("pneumoniadetection");
    $con=mysqli_connect('localhost','root','','pneumoniadetection');
	$d_id=$_GET['d_id'];
	if($res=mysqli_query($con,"update dregister set approve='1' where d_id='$d_id'"))
	   {
		//echo $res;
		   ?>
		   <script>alert("Approved");window.location.href="mpulmonologists.php";</script><?php
		
	   }
	