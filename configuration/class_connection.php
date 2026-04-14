<?php
$connection=new mysqli("localhost","root","","school");
if($connection->connect_error){
 die("connection failed".$connection->connect_error);
}

?>