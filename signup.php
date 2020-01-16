<?php 
	$name=$_POST['name'];
	$n=0;
	$add=$_POST['address'];
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$img=$_FILES['image'];
	$imgname=$img['name'];
	$imgtmp=$img['tmp_name'];
	$pic="allpics/".$imgname;
	$dir=move_uploaded_file($imgtmp,$pic);
	$con=mysqli_connect("localhost","root","","customer");
	$sql=mysqli_query($con,"select * from logindetails");
	while($row=mysqli_fetch_assoc($sql))
		$n=$row['SERIAL'];
	$n=$n+1;
	$inc=mysqli_query($con,"ALTER TABLE logindetails auto_increment = $n");
	$qry=mysqli_query($con,"insert into logindetails(NAME,PRIMARYADDRESS,USERNAME,PASSWORD,IMAGE) values('$name','$add','$user','$pass','$pic')") or die(mysqli_error($con));
if($qry)
	echo "Successfully Signed Up";
else
	echo "TRY AGAIN";
header('location:logininput.php');
	
 ?>