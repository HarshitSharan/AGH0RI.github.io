<?php 
	$UserName=$_POST['UserName'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","customer");
	$qry=mysqli_query($con,"select * from logindetails");
	while($row=mysqli_fetch_assoc($qry))
	{
		$username=$row['USERNAME'];
		$password=$row['PASSWORD'];
		if($UserName==$username && $pass==$password)
			{
				$n=1;
				break;
			}
	}
	if ($n==1)
	echo  "hello ".$row['NAME'];
	else
		echo "Invalid User";
 ?>