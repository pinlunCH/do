<?php
include("libs/functions.php");

$con = dbcon();
$sql = "DELETE FROM navgrouppage WHERE nGroupOfNavID = '".$_POST['navgroupID']."'";
mysqli_query($con, $sql);

foreach ($_POST['nPageID'] as $pageID) {
	$sql = "INSERT INTO navgrouppage(nGroupOfNavID, nPageID, nOrder) VALUES ('".$_POST['navgroupID']."','".$pageID."','0')";

	mysqli_query($con, $sql);
}

header("location: nav.php?success=true");


?>