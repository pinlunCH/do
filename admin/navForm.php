<?php
include("header.php");
if(isset($_GET['id']))
{
	$eachNavContent = ifHadNavContent($_GET['id']);
}

?>
<div class="contentbox">
	<h2>Pages</h2>

<?php
if(isset($_GET['id'])){?>
<div class="pt">
	<p class="bold"> Now You're Editing the navigation group: <?=$eachNavContent['strGroupName']?></p>
	<p class="bold">Notice: Group Name can't be change</p>
</div>
<?php
}
?>
<div class="line"></div>
<div class="callback"><a href="nav.php">< Back</a></div>

<form method="post" class="wrapperForm"action="navSave.php" enctype="multipart/form-data">
	<input type="hidden" name="navgroupID" value="<?=$eachNavContent['id']?>">
	<div class="formstyle">
		<label>Group Name</label>
		<input type="text" name="strGroupName" value="<?=$eachNavContent['strGroupName']?>" readonly>
	</div>
	<div class="formstyle">
		<label>Navigations:</label>
		<?php
		$con = dbcon();
		$sql = "SELECT * FROM pages";
		$results = mysqli_query($con, $sql);

		while($page = mysqli_fetch_assoc($results))
		{
			$sql = "SELECT * FROM navgrouppage WHERE nGroupOfNavID = '".$eachNavContent['id']."' AND
			nPageID = '".$page['id']."'
			";

			$fkresult = mysqli_query($con, $sql);
			$thisResults = mysqli_fetch_assoc($fkresult);
			$checked = ($thisResults)?"checked":"";

			?>
			<div class="rad">
				<input type="checkbox"	<?=$checked?> name="nPageID[]" value="<?=$page['id']?>"> <?=$page['strName']?>
			</div>
		<?php
		}

		?>
		
	</div>
	
		<div class="formstyle">
		<input type="submit" class="button" value="Save">
	</div>
</form>

	</div><!--end of wrapper-->	
</div><!--end of outter-->	
<script src="libs/showMenu.js"></script>
</body>
</html>