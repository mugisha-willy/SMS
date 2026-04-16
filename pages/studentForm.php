<?php
include("../configuration/student_connection.php");
?>
<html>
 <head>
  
 </head>
 <body>
  
  <div class="container">
   <h1>Student Registration form</h1>
   <div class="box">
   <form  method="post">
    <label for="names">Names:</label><br>
    <input type="text" name="st_fullname" placeholder="Enter student's full name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" name="st_email" placeholder="eneter student's email" required><br>
    <label for="class">class No</label><br>
    <input type="number" name="class_id" placeholder="Enter the number of student's class" required><br>
    <label for="father">Father's Name:</label><br>
    <input type="text" name="fatherName" placeholder="Enter the name of the father of the student"><br>
    <label for="father">Mother's Name:</label><br>
    <input type="text" name="motherName" placeholder="Enter the name of the mother of the student"><br>
    <label for="father">Guardian's Name:</label><br>
    <input type="text" name="guardianName" placeholder="Enter the name of the guardian of the student"><br>
    <button name="registerStudent">Reister</button>
    </div>
   </form>
  </div>
 </body>
</html>
