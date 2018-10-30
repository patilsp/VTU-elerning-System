<?php
include('admin/connect.php');
$get_id=$_GET['id'];

mysql_query("delete from teacher_suject where subject_id='$get_id'")or die(mysql_error());
header('location:teacher_subject.php');

?>
