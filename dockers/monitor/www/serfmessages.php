<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("header.html");?>
</head>
<body>

<H1>Serf Agents</H1>

<?php 
 include("serf_agent.php");
 listagents($_POST["ip"]); 
?>

<H1>Serf listen</H1>

<?php 
	echo "Listening on IP " . $_POST["ip"]; 
?>

<?php 
 listen($_POST["ip"]); 
?>

<br>
<br>
>
<?php include("footer.html");?>

</body>
</html>