<?php
	$servername ="localhost";
	$dbusername="root";
	$dbpassword="programmer";
	$dbname="records";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
	
	//$conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
	//if(!$conn)
		
	if($conn->connect_error)
	{
	  die("Connection failed.. ".mysqli_connect_error());
	}
	$sql="INSERT INTO login(username,password)".
	"VALUES('$username',md5('$password'))";

	if($conn->query($sql)===TRUE)
	//if (mysqli_query($conn,$sql))
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
