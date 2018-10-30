<?php
include('admin/connect.php');
$get_id=$_GET['id'];

mysql_query("delete from teacher_student where student_id='$get_id'")or die(mysql_error());
header('location:students.php');

?>
