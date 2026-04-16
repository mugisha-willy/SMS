<?php
$connect=new mysqli("localhost","root","","school");
if($connect->connect_error){
 die("connection failed".$connect->connect_error);
}
if(isset($_POST['registerTeacher'])){
 $names=$_POST['names'];
 $class=$_POST['class_id'];
 $email=$_POST['email'];
 $phone=$_POST['phoneNo'];
 $save=$connect->query("INSERT INTO teacher(names,class_id,email,phoneNo) VALUES('$names','$class','$email','$phone')") ;
 if($save){
  echo "<script> alert('teacher is registered successfully') </script>";
 }else{
  echo "<script> alert('failed to register teacher') </script>";
 }
}