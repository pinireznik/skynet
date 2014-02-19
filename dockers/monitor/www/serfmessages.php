<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("header.html");?>
	</head>
	<body>

		<H1>Serf Agents</H1>

<div class="serflist">
		<?php 
		 include("serf_agent.php");
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