<?php
include("libs/functions.php");
$con = dbcon();

move_uploaded_file($_FILES["slidesAFileName"]["tmp_name"], "assets/".$_FILES["slidesAFileName"]["name"]);
move_uploaded_file($_FILES["slidesBFileName"]["tmp_name"], "assets/".$_FILES["slidesBFileName"]["name"]);
move_uploaded_file($_FILES["slidesCFileName"]["tmp_name"], "assets/".$_FILES["slidesCFileName"]["name"]);
move_uploaded_file($_FILES["slidesDFileName"]["tmp_name"], "assets/".$_FILES["slidesDFileName"]["name"]);
move_uploaded_file($_FILES["slidesEFileName"]["tmp_name"], "assets/".$_FILES["slidesEFileName"]["name"]);

$_POST['slidesAFileName'] = $_FILES["slidesAFileName"]["name"];
$_POST['slidesBFileName'] = $_FILES["slidesBFileName"]["name"];
$_POST['slidesCFileName'] = $_FILES["slidesCFileName"]["name"];
$_POST['slidesDFileName'] = $_FILES["slidesDFileName"]["name"];
$_POST['slidesEFileName'] = $_FILES["slidesEFileName"]["name"];

if ($_POST["slideID"]) {

	$sql ="
	UPDATE `slideshow` 
	SET 
	`slidesAFileName` = '".$_POST['slidesAFileName']."',
	`slidesBFileName` = '".$_POST['slidesBFileName']."',	
	`slidesCFileName` = '".$_POST['slidesCFileName']."', 	
	`slidesDFileName` = '".$_POST['slidesDFileName']."',
	`slidesEFileName` = '".$_POST['slidesEFileName']."'

	WHERE slideshow.id = '".$_POST["slideID"]."'
	";
}

mysqli_query($con,$sql);
 // print_r($sql);
 // die;
header("location: slideshow.php?success=true");
?>