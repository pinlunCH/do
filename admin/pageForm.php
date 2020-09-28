<?php
include("header.php");
if(isset($_GET['id']))
{
	$eachPageContent = ifHadPageContent($_GET['id']);
}

if (!isset($eachPageContent)) {
	$eachPageContent = array("id"=>"","strName"=>"",  "strMainContent"=>"", "strMainPhoto"=>"","strGroupOfPhotoA"=>"","strGroupOfPhotoB"=>"","strGroupOfPhotoC"=>"","strIntroTitleA"=>"","strIntroTextA"=>"","strIntroTitleB"=>"","strIntroTextB"=>"","strIntroTitleC"=>"","strIntroTextC"=>"","nTemplatesID"=>"","nGSlideShowID"=>"");
}

?>
<div class="contentbox">
	<h2>Pages</h2>

<?php
if(isset($_GET['id'])){?>
<div class="pt">
	<p class="bold"> Now You're Editing the page</p>
</div>
<?php
}else{	?>
	<div class="pt">
	<p class="bold"> Now You're create a new page</p>
</div>
<?php
}?>
<div class="line"></div>
<div class="callback"><a href="page.php">< Back</a></div>

<form method="post" class="wrapperForm"action="pageSave.php" enctype="multipart/form-data">
	<input type="hidden" name="pageID" value="<?=$eachPageContent['id']?>">
	<div class="formstyle">
		<label>Page Name</label>
		<input type="text" name="strName" value="<?=$eachPageContent['strName']?>">
	</div>
	<div class="formstyle">
		<label>Templates</label>
		<select name="nTemplatesID">
			<option>Choose a Template for page</option>
			<?php
			$con = dbcon();
			$sql = "SELECT * FROM templates";
			$results = mysqli_query($con, $sql);
			while ($templates = mysqli_fetch_assoc($results)) {
				$selected = ($eachPageContent["nTemplatesID"] == $templates["id"])? "SELECTED":"";
				?>
				<option <?=$selected?> value="<?=$templates['id']?>"><?=$templates['name']?></option>
			<?php
			}
			?>
				
		</select>
	</div>
		<div class="photo" id="modala" ><img class="thumb" src="imgs/pagereviews_home.png" ></div>
			<div class="photo" id="modalb" ><img class="thumb" src="imgs/pagereviews_content.png"></div>
		</div>

		<div class="bigVer" id="modal">
			<div class="content">
				<img src="" id="modalimg" alt=""/>
				<a href="#" id="closeModal">X</a>
			</div>
		</div>
	<div class="formstyle">
		<label>Main Content</label>
		<textarea name="strMainContent"><?=$eachPageContent['strMainContent']?></textarea>
	</div>
	<div class="formstyle">
		<label>Primary Image</label>
		<input type="file" id="ex" name="strMainPhoto" value="<?=$eachPageContent['strMainPhoto']?>">
	</div>
	<div class="preview">
		<?php
		if($eachPageContent['strMainPhoto']){?>
			<img src="assets/<?=$eachPageContent["strMainPhoto"]?>"/>
		<?php
		}
		?>
	</div>
	<div class="formstyle">
		<label>Groups Of Photo(First)</label>
		<input type="file" name="strGroupOfPhotoA" value="<?=$eachPageContent['strGroupOfPhotoA']?>">
	</div>
		<div class="preview">
		<?php
		if($eachPageContent['strGroupOfPhotoA']){?>
			<img src="assets/<?=$eachPageContent["strGroupOfPhotoA"]?>"/>
		<?php
		}
		?>

		<div class="formstyle">
		<label>Photo Title(First)</label>
		<input type="text" name="strIntroTitleA" value="<?=$eachPageContent['strIntroTitleA']?>">
	</div>
	<div class="formstyle">
		<label>Photo Text(First)</label>
		<input type="text" name="strIntroTextA" value="<?=$eachPageContent['strIntroTextA']?>">
	</div>

		<div class="formstyle">
		<label>Groups Of Photo(Second)</label>
		<input type="file" name="strGroupOfPhotoB" value="<?=$eachPageContent['strGroupOfPhotoB']?>">
	</div>
	<div class="preview">
			<?php
		if($eachPageContent['strGroupOfPhotoB']){?>
			<img src="assets/<?=$eachPageContent["strGroupOfPhotoB"]?>"/>
		<?php
		}
		?>
	</div>
		<div class="formstyle">
		<label>Photo Title(Second)</label>
		<input type="text" name="strIntroTitleB" value="<?=$eachPageContent['strIntroTitleB']?>">
	</div>
		<div class="formstyle">
		<label>Photo Text(Second)</label>
		<input type="text" name="strIntroTextB" value="<?=$eachPageContent['strIntroTextB']?>">
	</div>

		<div class="formstyle">
		<label>Groups Of Photo(Third)</label>
		<input type="file" name="strGroupOfPhotoC" value="<?=$eachPageContent['strGroupOfPhotoC']?>">
	</div>
	<div class="preview">
				<?php
		if($eachPageContent['strGroupOfPhotoC']){?>
			<img src="assets/<?=$eachPageContent["strGroupOfPhotoC"]?>"/>
		<?php
		}
		?>
	</div>
		<div class="formstyle">
		<label>Photo Title(Third)</label>
		<input type="text" name="strIntroTitleC" value="<?=$eachPageContent['strIntroTitleC']?>">
	</div>
		<div class="formstyle">
		<label>Photo Text(Third)</label>
		<input type="text" name="strIntroTextC" value="<?=$eachPageContent['strIntroTextC']?>">
	</div>

		
		<div class="formstyle">
		<input type="submit" class="button" value="Save">
	</div>
</form>

	</div><!--end of wrapper-->	
</div><!--end of outter-->	
<script src="libs/showMenu.js"></script>
<script src="libs/modal.js"></script>
</body>
</html>