<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Serf Messaging monitor</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	
	<link href="uglyduckling.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	
	<script type="text/javascript" language="javascript">
	
	</script>
</head>
<body>

	<H1>Serf Messaging monitor</H1>

	<br>
	<br>

	<H2>Ugly Duckling Serf Message monitor</H2>
	Hit the button to start to start listening to Serf message (port 7946)
	<br>

	<form action="serfmessages.php" method="post">
	IP: <input type="text" name="ip"><br>
	<input type="submit">
	</form>

    <br>
	<br>
	
	<?php include("list_machines.php");?>
    <?php listmachines(); ?>
	<br>
	<br>
	
	
	<?php include("footer.html");?>
</body>
</html>




