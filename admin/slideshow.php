<?php
include("header.php")
?>

<div class="contentbox">
			<h2>Slide Show</h2>
			<div class="pt">
				<p>You can upload the picture you like for slide show in home page</p>
			</div>
			<div class="line"></div>

			<?php
			if(isset($_GET['success'])){?>
			<h3 class="mesbox yougotit"><span>Yes! Photos updated.</span></h3>
			<?php
			}
			?>

<!-- 			<div class="buts">
				<a href="adoptionForm.php" class="button">Add New</a>
			</div> -->
			<div class="listing">
				<div class="listheader">
					<div class="header">
						<span>Templates</span>
					</div>
					<div class="header">
						<span>Slideshow</span>
					</div>								
					<div class="header">
						<span>Edit</span>
					</div>
				</div>

				<?php
				$con = dbcon();
				$sql = "SELECT
						slidpages.id,
						templates.name AS templates,
						slideshow.id AS slide
						FROM slidpages
						LEFT JOIN templates ON templates.id = slidpages.nTemplatesID
						LEFT JOIN slideshow ON slideshow.id = slidpages.nSlideshowID
				";
				$results = mysqli_query($con, $sql);

				while ($slide = mysqli_fetch_assoc($results)) {?>
				
				<div class="listrow">
					<div class="data" id="radiusa">
						<a href="#"><?=$slide['templates']?></a>
					</div>
					<div class="data">
						<?=$slide['slide']?>
					</div>
					<div class="data">
						<a href="slideForm.php?id=<?=$slide["slide"]?>"><img src="imgs/editicon.png" alt="edit"></a>
					</div>
				</div>	
				<div class="edage"></div>
				<?php		
			}
			?>
				<div class="edage"></div>
			</div>
		</div>
	</div><!--end of wrapper-->	
</div><!--end of outter-->	
<script src="libs/showMenu.js"></script>
</body>
</html>