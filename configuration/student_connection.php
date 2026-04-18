<?php
$connect=new mysqli("localhost","root","","school");
if($connect->connect_error){
 die("connection failed".$connect->connect_error);
}
if(isset($_POST['registerStudent'])){
 $fullname=$_POST['st_fullname'];
 $email=$_POST['st_email'];
 $class=$_POST['class_id'];
 $father=$_POST['fatherName'];
 $mother=$_POST['motherName'];
 $guardian=$_POST['guardianName'];

 $insert=$connect->query("INSERT INTO student(st_fullname	,st_email	,class_id	,fatherName,	motherName	,guardianName) VALUES('$fullname','$email','$class','$father','$mother','$guardian')");
 
 if($insert){
 echo "<script>  alert('student registered succefully') </script>";
 header("location:table.php");
 }else{
  echo "<script>  alert('failed to register student') </script>";
 }
};
  ?>