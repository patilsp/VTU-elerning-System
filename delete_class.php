<?php
include('admin/connect.php');
$get_id=$_GET['id'];

mysql_query("delete from class where classs_id='$get_id'")or die(mysql_error());
header('location:teacher_class.php');

?>
