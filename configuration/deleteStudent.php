<?php
include("../configuration/student_connection.php");
$id=$_GET['st_id'];
$delete=$connect->query("DELETE FROM student WHERE st_id='$id'");
if($delete){
    header("location:../pages/table.php");
}
?>