<?php
include("libs/functions.php");
$con = dbcon();

move_uploaded_file($_FILES["strPhoto"]["tmp_name"], "assets/".$_FILES["strPhoto"]["name"]);

$_POST['strPhoto'] = $_FILES["strPhoto"]["name"];

if (!$_POST["pageID"]) {

	$sql = "
	INSERT INTO 
	adoption(strName, nGender, nAge, strPhoto,bio)
	VALUES('".$_POST['strName']."', '".$_POST['nGender']."', '".$_POST['nAge']."','".$_POST['strPhoto']."','".$_POST['bio']."')
	";
	

}else{
	$sql ="
	UPDATE `adoption` 
	SET 
	`strName` = '".$_POST['strName']."', 	
	`nGender` = '".$_POST['nGender']."',
	`nAge` = '".$_POST['nAge']."',	
	`strPhoto` = '".$_POST['strPhoto']."', 	
	`bio` = '".$_POST['bio']."'

	WHERE adoption.id = '".$_POST["pageID"]."'
	";

}	
mysqli_query($con,$sql);
 // print_r($sql);
 // die;


header("location: adoption.php?success=true");


?>