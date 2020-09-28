<?php
include("libs/functions.php");
$user = logining($_POST['strUsername'],$_POST['strPassword']);

if(!$user)
{
	header("location: index.php?error=true");
}else{
	$_SESSION["userid"] = $user["id"];
	header("location: dashboard.php");
}

?>