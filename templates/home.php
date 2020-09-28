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
			<div class="slideshow">
				<div class="keyhole">
					<div class="strip">
						<?php
						$con = dbcon();
						$sql = "
						SELECT * FROM slideshow
						";

						$results = mysqli_query($con,$sql);
						$slide = mysqli_fetch_assoc($results);

						echo "<div class='photo'><img src='admin/assets/".$slide['slidesAFileName']."' alt='rescue shelter'></div>";
						echo "<div class='photo'><img src='admin/assets/".$slide['slidesBFileName']."' alt='rescue shelter'></div>";
						echo "<div class='photo'><img src='admin/assets/".$slide['slidesCFileName']."' alt='rescue shelter'></div>";
						echo "<div class='photo'><img src='admin/assets/".$slide['slidesDFileName']."' alt='rescue shelter'></div>";
						echo "<div class='photo'><img src='admin/assets/".$slide['slidesEFileName']."' alt='rescue shelter'></div>";

						?>
					</div>
				</div><!--end of keyhole-->
			</div>

			<div class="mainTitle">
			<h2>this is what DO do</h2>
			<img class="elementimg" src="templates/imgs/element.png" alt="dogs"/>
			</div>

			<div class="mainContent stack">
				<div class="textMain">
					<p><?=$pageData['strMainContent']?></p>

					
				</div>
				<div class="btnc">
						<a href="index.php?pageID=3" class="btnstyle"><span>learn more</span></a>
					</div>
				<img id="contentImg" src="admin/assets/<?=$pageData['strMainPhoto']?>" alt="group of dog"/>
			</div>

			<div class="mainTitle treate">
			<h2>how you can help</h2>
			<img class="elementimg" src="templates/imgs/element.png" alt="dogs"/>
			</div>
			<div class=" listthings">
				<div class="mainContent">
					<div class="listing">
						<a class="effect" href="#"><div class="eachitem">
							<img src="admin/assets/<?=$pageData['strGroupOfPhotoA']?>" alt="adopt">
							<div class="cover">
								<div class="covertext">
									<h3><?=$pageData['strIntroTitleA']?></h3>
									<p><?=$pageData['strIntroTextA']?></p>
								</div>
							</div>
						</div></a>
					</div>
				</div> <!-- *3 -->
				<div class="mainContent">
					<div class="listing">
						<a class="effect" href="#"><div class="eachitem">
							<img id="val" src="admin/assets/<?=$pageData['strGroupOfPhotoB']?>" alt="VOLUNTEER">
							<div class="cover">
								<div class="covertext">
									<h3><?=$pageData['strIntroTitleB']?></h3>
									<p><?=$pageData['strIntroTextB']?></p>
								</div>
							</div>
						</div></a>
					</div>
				</div> <!-- *3 -->
				<div class="mainContent">
					<div class="listing">
						<a class="effect" href="#"><div class="eachitem">
							<img src="admin/assets/<?=$pageData['strGroupOfPhotoC']?>" alt="">
							<div class="cover">
								<div class="covertext">
									<h3><?=$pageData['strIntroTitleC']?></h3>
									<p><?=$pageData['strIntroTextC']?></p>
								</div>
							</div>
						</div></a>
					</div>
				</div> <!-- *3 -->
			</div>
		</div>

<?php 
include("footer.php");
?>