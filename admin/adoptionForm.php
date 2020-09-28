<?php
include("header.php");
if(isset($_GET['id']))
{
	$eachadoContent = ifHadadoContent($_GET['id']);

}

if (!isset($eachadoContent)) {
	$eachadoContent = array("id"=>"","strName"=>"",  "strPhoto"=>"", "bio"=>"","nAge"=>"","gender"=>"");
}

?>
<div class="contentbox">
	<h2>adopt</h2>

<?php
if(isset($_GET['id'])){?>
<div class="pt">
	<p class="bold"> Now You're Editing the information</p>
</div>
<?php
}else{	?>
	<div class="pt">
	<p class="bold"> Now You're create a new information</p>
</div>
<?php
}?>
<div class="line"></div>
<div class="callback"><a href="adoption.php">< Back</a></div>

<form method="post" class="wrapperForm"action="adoptionSave.php" enctype="multipart/form-data">
	<input type="hidden" name="pageID" value="<?=$eachadoContent['id']?>">
	<div class="formstyle">
		<label>Pet Name</label>
		<input type="text" name="strName" value="<?=$eachadoContent['strName']?>">
	</div>
	<div class="formstyle">
		<label>Gender</label>
		<input type="text" name="nGender" value="<?=$eachadoContent['nGender']?>">
	</div>

	<div class="formstyle">
		<label>age</label>
		<input type="text" name="nAge" value="<?=$eachadoContent['nAge']?>">
	</div>		
	<div class="formstyle">
		<label>Photo</label>
		<input type="file" name="strPhoto" value="<?=$eachadoContent['strPhoto']?>">
	</div>
	<div class="preview">
	<?php
		if($eachadoContent['strPhoto']){?>
			<img src="assets/<?=$eachadoContent["strPhoto"]?>"/>
		<?php
		}
		?>
	</div>
	<div class="formstyle">
		<label>Bio</label>
		<textarea name="bio"><?=$eachadoContent['bio']?></textarea>
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