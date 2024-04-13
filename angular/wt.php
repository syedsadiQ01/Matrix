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



/*$create="CREATE TABLE `st_info`(`name` varchar(20),`email` varchar(20),`course` varchar(20))";
$result=mysqli_query($con,$create);
if($result){
	echo "table created";
}
else{
	echo "error accoured";
}*/
$insert="INSERT INTO `st_info` VALUES('$name','$email','$course')";
$result1=mysqli_query($con,$insert);
if($result1){
	echo "Student Name:".$name."<br>";
echo "Student Email:".$email."<br>";
echo "Student Enrolled Course:".$course."<br>"; 

echo "The student ".$name." having Email id ".$email." has successfully Enrolled the course ".$course." which includes 6 months live projects."; 

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
<body style="background:skyblue;">
<br>
<h5 style="text-align: center;">
<a href="index.html" class="btn btn-primary">Go to home</a><br>
</h5>

</body>

</html>

