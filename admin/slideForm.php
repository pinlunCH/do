<?php
include("header.php");
if(isset($_GET['id']))
{
	$eachslide = ifHadslide($_GET['id']);

}
?>
<div class="contentbox">
	<h2>Slide</h2>

<?php
if(isset($_GET['id']))
{
?>
<div class="pt">
	<p class="bold"> Now You're Editing the photo of slide show</p>
</div>
<?php
}
?>

<div class="line"></div>
<div class="callback"><a href="slideshow.php">< Back</a></div>

<form method="post" class="wrapperForm"action="slideSave.php" enctype="multipart/form-data">
	<input type="hidden" name="slideID" value="<?=$eachslide['id']?>">
	<div class="formstyle">

		<?php
		$con = dbcon();
		$sql=" SELECT * FROM templates";
		$results = mysqli_query($con,$sql);
		$tem = mysqli_fetch_assoc($results);
		
		echo '<label>Template</label>';
		echo '<input type="text" name="template" value="'.$tem["name"].'" readonly>';
		?>

	</div>
	<div class="formstyle">
		<label>First Photo</label>
		<input type="file" name="slidesAFileName" value="<?=$eachslide['slidesAFileName']?>">
	</div>
	<div class="preview">
	<?php
		if($eachslide['slidesAFileName'])
		{
	?>
			<img src="assets/<?=$eachslide["slidesAFileName"]?>"/>
	<?php
		}
	?>
	</div>
	<div class="formstyle">
		<label>Second Photo</label>
		<input type="file" name="slidesBFileName" value="<?=$eachslide['slidesBFileName']?>">
	</div>	
	<div class="preview">
	<?php
		if($eachslide['slidesBFileName'])
		{
	?>
			<img src="assets/<?=$eachslide["slidesBFileName"]?>"/>
	<?php
		}
	?>	
	</div>
	<div class="formstyle">
		<label>Third Photo</label>
		<input type="file" name="slidesCFileName" value="<?=$eachslide['slidesCFileName']?>">
	</div>
	<div class="preview">
	<?php
		if($eachslide['slidesCFileName'])
		{
	?>
			<img src="assets/<?=$eachslide["slidesCFileName"]?>"/>
	<?php
		}
	?>
	</div>
		<div class="formstyle">
		<label>Tourth Photo</label>
		<input type="file" name="slidesDFileName" value="<?=$eachslide['slidesDFileName']?>">
	</div>
	<div class="preview">
	<?php
		if($eachslide['slidesDFileName'])
		{
	?>
			<img src="assets/<?=$eachslide["slidesDFileName"]?>"/>
	<?php
		}
	?>
	</div>
		<div class="formstyle">
		<label>Fifth Photo</label>
		<input type="file" name="slidesEFileName" value="<?=$eachslide['slidesEFileName']?>">
	</div>
	<div class="preview">
	<?php
		if($eachslide['slidesEFileName'])
		{
	?>
			<img src="assets/<?=$eachslide["slidesEFileName"]?>"/>
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