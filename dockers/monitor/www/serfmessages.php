<!DOCTYPE html>
<html lang="en">

	<?php include("header.html"); ?>
	<?php include("serfFuncs.php"); ?>
<body>
	<H1>Serf Agents</H1>

	<div class="boxstdout">
		<?php 
			listagents($_POST["ip"]); 
		?>
	</div>

	<H1>Serf listen</H1>

	<?php 
		echo "Listening on IP " . $_POST["ip"]; 
	?>

		<div class="serfmsg">
		<?php 
			listen($_POST["ip"]); 
		?>
	</div>
	<br>
	<br>

	<?php include("footer.html");?>
</body>
</html>