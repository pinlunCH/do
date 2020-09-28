<?php
include("header.php");
?>
		<div class="contentbox">
			<h2>Navigation</h2>
			<div class="pt">
				<p>List of navigation group</p>
				<p>By clicking edit icon you can choose what page you like to include in each navigation group.</p>
			</div>
			<div class="line"></div>

			<?php
			if(isset($_GET['success'])){?>

			<div class="message yougotit"><span>Yes! Navigation is saved!</span></div>

			<?php
			}
			?>
			<div class="listing">
				<div class="listheader">
					<div class="header">
						<span>Navigation Group</span>
					</div>
					<div class="header">
						<span>Edit</span>
					</div>

				</div>

				<?php
				$con = dbcon();
				$sql = "SELECT * FROM groupsofnav";
				$results = mysqli_query($con,$sql);

				while($group = mysqli_fetch_assoc($results))
				{
				?>
				<div class="listrow">
					<div class="data" id="radiusa">
						<a href="navForm.php?id=<?=$group["id"]?>"><?=$group['strGroupName']?></a>
					</div>
					<div class="data">
						<a href="navForm.php?id=<?=$group['id']?>"><img src="imgs/editicon.png" alt="edit"></a>
					</div>
				</div>
				<div class="edage"></div>
				<?php
			}
			?>
			</div>
		</div>
	</div><!--end of wrapper-->	
</div><!--end of outter-->	
<script src="libs/showMenu.js"></script>
</body>
</html>