<?php
session_start();
function dbcon()
{
		$con = mysqli_connect();
	return $con;
}
function logining($username,$password)
{
	$con = dbcon();
	$sql = "SELECT * FROM users WHERE strUsername = '".$username."'AND strPassword = '".$password."'";

	$results = mysqli_query($con,$sql);
	$user = mysqli_fetch_assoc($results);

	return $user;
}
function ifLoginin()
{
	$con = dbcon();
	$sql = "SELECT * FROM users WHERE id='".$_SESSION["userid"]."'";

	$results = mysqli_query($con,$sql);
	$user = mysqli_fetch_assoc($results);

	if(!$user)
	{
		header("location: index.php?error=true");
	}else{
		return $user;
	}
}
function ifHadPageContent($id)
{
	$con = dbcon();
	$sql = "SELECT * FROM pages WHERE id = '".$id."'";

	$results = mysqli_query($con, $sql);
	$page = mysqli_fetch_assoc($results);

	return $page;
}
function ifHadNavContent($id)
{
	$con = dbcon();
	$sql = "SELECT * FROM groupsofnav WHERE id = '".$id."'";

	$results = mysqli_query($con, $sql);
	$navs = mysqli_fetch_assoc($results);

	return $navs;
}
function ifHadadoContent($id)
{
	$con = dbcon();
	$sql = "SELECT 
* FROM adoption
				WHERE id = '".$id."'
				";

	$results = mysqli_query($con, $sql);
	$adopt = mysqli_fetch_assoc($results);

	return $adopt;
}
function ifHadslide($id)
{
	$con = dbcon();
	$sql = "SELECT 
* FROM slideshow
				WHERE id = '".$id."'
				";

	$results = mysqli_query($con, $sql);
	$slideshow = mysqli_fetch_assoc($results);

	return $slideshow;
}