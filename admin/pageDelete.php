<?php
include ("libs/functions.php");

$con = dbcon();

$sql = "DELETE FROM pages WHERE id = '".$_GET["id"]."'";
mysqli_query($con,$sql);

header("location: page.php?successdelete=true");
?>