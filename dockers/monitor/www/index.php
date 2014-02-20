<!DOCTYPE html>
<html lang="en">
	
	<?php include("header.html");?>
	<?php include("ipFuncs.php");?>
	
<body>

	<H1>Serf Messaging monitor</H1>

	<br>
	<br>

	<H2>Ugly Duckling Serf Message monitor</H2>
	Hit the button to start to start listening to Serf message (port 7946)
	<br>

	<form action="serfmessages.php" method="post">
	IP: <input type="text" name="ip"><br>
	<input type="submit" value="Start Monitoring">
	</form>

    <br>
	<br>
	
	<H2>Network info</H2>
	Monotor IP = <?php echo getMyIp(); ?>
   	
   	<br>   
	<br>
	Serf Nodes:
	<div class="boxstdout">
		<?php 
			 getSerfNodes(); 
		?>
	</div>
		
	<br>   
	<br>
	General Network info:
	<div class="boxstdout">
		<?php 
			 getIfConfig(); 
		?>
	</div>
		
	<?php include("footer.html");?>
</body>
</html>




