<?php
include("../configuration/class_connection.php");
?>
<html>
 <head>
  <link rel="stylesheet" href="../style/classForm.css">
 </head>
  <body>
   <div class="container">
    <form action="" method="post">
    <label for="classNo">Class Number</label><br>
    <input type="number" name="class_id" placeholder="enter the number of class" required><br>
    <label for="className">Class Name</label><br>
    <input type="text" name="class_name" placeholder="enter the name of the class" required><br>
    <button type="submit" name="registerClass">Create Class</button>

    </form>
   </div>
  </body>
 
</html>