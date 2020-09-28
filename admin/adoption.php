<?php
include("header.php")
?>

<div class="contentbox">
			<h2>Adopt information</h2>
			<div class="pt">
				<p>This a list of adopt detail that your adopt page had</p>
				<p>Click add new to create a new pet information</p>
				<p>You can edit or delete pet's information on each page by click on edit or delete icon</p>
			</div>
			<div class="line"></div>

			<?php
			if(isset($_GET['success'])){?>
			<h3 class="mesbox yougotit"><span>Yes! New pet's infotmation is saved!</span></h3>
			<?php
			}
			?>
			<?php
			if(isset($_GET['successdelete'])){?>
			<h3 class="mesbox yougotit"><span>The pet's infotmation was deleted</span></h3>
			<?php
			}
			?>

			<div class="buts">
				<a href="adoptionForm.php" class="button">Add New</a>
			</div>
			<div class="listing">
				<div class="listheader">
					<div class="header">
						<span>Name</span>
					</div>
					<div class="header">
						<span>Gender</span>
					</div>
					<div class="header">
						<span>Age</span>
					</div>		
					<div class="header">
						<span>Bio</span>
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
				adoption.id,
				adoption.strName,
				adoption.nAge,
				adoption.bio,
				gender.gender AS gender
				FROM `adoption`
				LEFT JOIN gender ON gender.id = adoption.nGender
				";
				$results = mysqli_query($con, $sql);

				while ($adopt = mysqli_fetch_assoc($results)) {?>
				
				<div class="listrow">
					<div class="data" id="radiusa">
						<a href="#"><?=$adopt['strName']?></a>
					</div>
					<div class="data">
						<?=$adopt['gender']?>
					</div>
										<div class="data">
						<?=$adopt['nAge']?>
					</div>
										<div class="data">
						<?=$adopt['bio']?>
					</div>
					<div class="data">
						<a href="adoptionForm.php?id=<?=$adopt["id"]?>"><img src="imgs/editicon.png" alt="edit"></a>
					</div>
					<div class="data" id="radiusb">
						<a href="adoptionDelete.php?id=<?=$adopt["id"]?>" onClick="return confirm('Are you sure you want to delete the page?')"><img src="imgs/deleteicon.png" alt="delete"></a>
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