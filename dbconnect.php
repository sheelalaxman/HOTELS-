 <?php
  $conn=new mysqli("localhost","root","","hotels");

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

?>