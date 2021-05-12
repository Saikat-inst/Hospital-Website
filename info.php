<?php
include "dbcon.php";
$s="SELECT * FROM `info` WHERE `id`='1' ";
$r=mysqli_query($connect,$s);
$info=mysqli_fetch_assoc($r);
?>