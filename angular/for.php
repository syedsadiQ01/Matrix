<?php
$user="localhost";
$server="root";
$passward="";
$database="aisu";
$con=mysqli_connect($user,$server,$passward,$database);
if($con){
	echo "success"."<br>";
}
else{
	echo "failed ";
}
$name=$_GET['name'];
$email=$_GET['email'];
$course=$_GET['course'];

/*

$create="CREATE TABLE `contact`(`name` varchar(20),`email` varchar(20),`message` varchar(20))";
$result=mysqli_query($con,$create);
if($result){
	echo "table created";
}
else{
	echo "error accoured";
}*/

$insert="INSERT INTO `student_details` VALUES('$name','$email','$course')";
$result1=mysqli_query($con,$insert);
if($result1){
	echo "Your message successfully sent";

}
else{
	echo "failed to insert";
}



?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>	

</head>
<body style="background: snow;">
<br>
<h5 style="text-align: center;">
<a href="index.html" style="color:red;"><input type="button" value="Go to home"></a></h5><br>


</body>

</html>
?>

