<?php 
include("../configuration/student_connection.php");

$select=$connect->query("SELECT student.st_id,student.st_fullname,student.st_email,classes.class_name 
FROM student
JOIN classes
ON student.class_id=classes.class_id
");
?>
<html>
  <head>
    <link rel="stylesheet" href="../style/table.css">
  </head>
<body>
  
 <table class="table">
  <tr>
   <th>id</th>
   <th>full name</th>
   <th>email</th>
   <th>class Name</th>
   <th>Actions</th>
  </tr>
  <?php
   
   while($result=$select->fetch_assoc()){
    ?>
  <tr>
   <td><?php echo $result['st_id'];?></td>
   <td><?php echo $result['st_fullname'];?></td>
   <td><?php echo $result['st_email'];?></td>
   <td><?php echo $result['class_name'];?></td>
   <td>
    <div class="edit"> <a href="#">EDIT</a></div>
    <div class="delete"><a href="#">DELETE</a></div>
   </td>
  </tr>
  <?php }?>
 </table>
 <button><a href="../pages/studentForm.php">➕Register new student</a></button>
</body>
</html>