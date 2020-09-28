<?php
include("header.php")
?>
		<div class="contentbox">
			<h2>Pages</h2>
			<div class="pt">
				<p>This a list of pages that your website had</p>
				<p>Click add new page to create a new page</p>
				<p>You can edit or delete page on each page by click on edit or delete icon</p>
			</div>
			<div class="line"></div>

			<?php
			if(isset($_GET['success'])){?>
			<h3 class="mesbox yougotit"><span>Yes! Page saved!</span></h3>
			<?php
			}
			?>
			<?php
			if(isset($_GET['successdelete'])){?>
			<h3 class="mesbox yougotit"><span>The page was deleted</span></h3>
			<?php
			}
			?>

			<div class="buts">
				<a href="pageForm.php" class="button">Add New Page</a>
			</div>
			<div class="listing">
				<div class="listheader">
					<div class="header">
						<span>Name</span>
					</div>
					<div class="header">
						<span>Template</span>
					</div>
					<div class="header">
						<span>Edit</span>
					</div>
					<div class="header">
						<span>Delete</span>
					</div>
				</div>

				<?php
				$con = dbcon();
				$sql = "SELECT 
				pages.id,
				pages.strName,
				templates.name AS template
				FROM pages
				LEFT JOIN templates ON templates.id = pages.nTemplatesID
				";
				$results = mysqli_query($con, $sql);

				while ($page = mysqli_fetch_assoc($results)) {?>
				
				<div class="listrow">
					<div class="data" id="radiusa">
						<a href="pageForm.php?id=<?=$page['id']?>"><?=$page['strName']?></a>
					</div>
					<div class="data">
						<?=$page['template']?>
					</div>
					<div class="data">
						<a href="pageForm.php?id=<?=$page["id"]?>"><img src="imgs/editicon.png" alt="edit"></a>
					</div>
					<div class="data" id="radiusb">
						<a href="pageDelete.php?id=<?=$page["id"]?>" onClick="return confirm('Are you sure you want to delete the page?')"><img src="imgs/deleteicon.png" alt="delete"></a>
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