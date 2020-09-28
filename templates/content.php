<?php
include("header.php");
?>
			<div class="navgroups lit" id="menu">
				<img class="mobver" id="close" src="templates/imgs/iconsclose.png" alt="icon"/>
			<?php
			createNav("main");
			?>
			</div>		
		<div class="handle midcontbreak">
			<img src="admin/assets/<?=$pageData['strMainPhoto']?>" class="fixedsize" alt="dogs rescue">
			<div class="mainContent contentp">
				<div class="textMain rever siton">
					<h3><?=$pageData['strIntroTitleA']?></h3>
					<p>
<?=$pageData['strMainContent']?></p>					
				</div>
			</div>

			<img class="elementimg fie" src="templates/imgs/element.png" alt="dogs"/>

			
			<div class="mainContent contentp flex">
				<img src="admin/assets/<?=$pageData['strGroupOfPhotoA']?>" class="fixedsize blo" alt="dogs rescue">
				<div class="textMain siton " >
					<h3><?=$pageData['strIntroTitleB']?></h3>
					<p>
<?=$pageData['strIntroTextB']?></p>				
				</div>
			</div>
		</div>

<?php 
include("footer.php");
?>

