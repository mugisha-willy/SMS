<?php
$connection=new mysqli("localhost","root","","school");
if($connection->connect_error){
 die("connection failed".$connection->connect_error);
}
if(isset($_POST['registerClass'])){
 $classNo=$_POST['class_id'];
 $className=$_POST['class_name'];
 $classSaved=$connection->query("INSERT INTO classes(class_id,class_name) VALUES('$classNo','$className')");
 if($classSaved){
 echo "<script>  alert('class registered succefully') </script>";
 }else{
  echo "<script>  alert('failed to register class') </script>";
 }
}
?>