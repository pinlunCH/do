<?php
include ("libs/functions.php");

$con = dbcon();

$sql = "DELETE FROM adoption WHERE id = '".$_GET["id"]."'";
mysqli_query($con,$sql);

header("location: adoption.php?successdelete=true");
?>