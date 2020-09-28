<?php
function dbcon()
{
	$con = mysqli_connect();
	return $con;
}
function makePage($pageID)
{
	$con=dbcon();
	$sql = " SELECT 
	pages.id,
	pages.strName,
	pages.strMainContent,
	pages.strMainPhoto,
	pages.strGroupOfPhotoA,
	pages.strGroupOfPhotoB,
	pages.strGroupOfPhotoC,
	pages.strIntroTitleA,
	pages.strIntroTextA,
	pages.strIntroTitleB,
	pages.strIntroTextB,
	pages.strIntroTitleC,
	pages.strIntroTextC,
	templates.fileName AS templateFileName
	FROM pages
	LEFT JOIN templates ON templates.id=pages.nTemplatesID
	WHERE pages.id = '".$_GET['pageID']."'
	";

	$result = mysqli_query($con, $sql);
	$pageData = mysqli_fetch_assoc($result);


	include("templates/".$pageData["templateFileName"]);
}
function createNav($nameOfGroup)
{
	$con=dbcon();
	$sql = "
	SELECT pages.id,
	pages.strName 
	FROM groupsofnav 
	LEFT JOIN navgrouppage ON navgrouppage.NGroupOfNavID = groupsofnav.Id 
	LEFT JOIN pages ON pages.Id = navgrouppage.nPageID 
	WHERE groupsofnav.strGroupName = '".$nameOfGroup."'
	ORDER BY nOrder
	";

	$results = mysqli_query($con,$sql);
	while ($navs = mysqli_fetch_assoc($results)) {
		$selected = ($navs['id'] == $_GET['pageID'])?"active":"";
		echo '<div class="nav '.$selected.'"><a href="index.php?pageID='.$navs['id'].'">'.$navs['strName'].'</a></div>';
	}
}

