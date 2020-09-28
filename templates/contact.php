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



			<form id="form" method="post" action="MessageSave.php">
				<img class="topic" src="templates/imgs/contactpic.png" alt="DOG CONTACT">
				<div class="container">			
					<div class="errMsg">*Please fill all the required field</div>
					<div class="fieldset" data-required="true">
						<label>*FirstName</label>
						<input type="text"  value="" name="FirstName">
					</div>
					<div class="fieldset" data-required="true">
						<label>*LastName</label>
						<input type="text"  value="" name="LastName">
					</div>
					<div class="fieldset" data-required="true">
						<label>*E-mail</label>
						<input type="text"   value="" name="email">
					</div>
					<div class="fieldset">
						<label>Phone</label>
						<input type="text" name="FirstName">
					</div>
					<div class="fieldset ">
						<label id="mess">message</label>
						<textarea></textarea>
					</div>

					<input type="submit" value="submit">
				</div>
			</form>

		</div>

<?php 
include("footer.php");
?>