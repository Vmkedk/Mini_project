<?php
include('connection.php');
$email=$_POST['Email'];
$password=$_POST['Password'];
if($email=="admin@gmail.com" && $password=="admin"){
	header('location:aindex.php');
}
$f=0;
$res1=mysqli_query($con, "select * from uregister where email='$email' and password='$password'");
while ($row=mysqli_fetch_array($res1))
{
$f=1;
}
$res2=mysqli_query($con, "select * from dregister where email='$email' and password='$password'");
while ($row=mysqli_fetch_array($res2))
{
$f=2;
}
if($f==1){
	header('location:uindex.php');
	break;
}
elseif($f==2){
	header('location:dindex.php');
	break;
}
else
{
	?>
	<script>alert('UERNAME AND PASSWORD DOESNT MATCH');window.location='ulog.php';</script>
	<?php
}
?>