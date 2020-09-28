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
			<div class="listthings">

		<?php
		$con = dbcon();
		$sql = "
		SELECT 
				adoption.id,
				adoption.strName,
				adoption.strPhoto,
				adoption.nAge,
				adoption.bio,
				gender.gender AS gender
				FROM `adoption`
				LEFT JOIN gender ON gender.id = adoption.nGender
		";
		$results = mysqli_query($con,$sql);
		while ($pet = mysqli_fetch_assoc($results)) {?>
				<div class="mainContent">
					<div class="listing">
						<a class="effect" href="#"><div class="eachitem pageplst">
							<img src="admin/assets/<?=$pet['strPhoto']?>" alt="adopt">
							<div class="cover">
								<div class="covertext avc">
									<div class="blo">
										<h3>Name:</h3><p><?=$pet['strName']?></p>
									</div>
									<div class="blo">
										<h3>Gender:</h3><p><?=$pet['gender']?></p>
									</div>
									<div class="blo">
										<h3>Age:</h3><p><?=$pet['nAge']?></p>
									</div>
									<div class="blo">
										<h3>Bio:</h3><p><?=$pet['bio']?></p>
									</div>
								</div>
							</div>
						</div></a>
					</div>
				</div>
					<?php
				}
				?>
				</div> <!-- *3 -->
		
				
			
		</div>

<?php 
include("footer.php");
?>