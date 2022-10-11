<?php 
session_start();
session_unset();
session_destroy();
// echo"<a href='login.php?'>go back</a>";
header("location:index2.php");
// echo  'thh'
?>