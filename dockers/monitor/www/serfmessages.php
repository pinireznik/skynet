<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("header.html");?>
</head>
<body>

<H1>Serf listen</H1>

<?php 
	echo "Listening on IP " . $_POST["ip"]; 
?>

<?php 
 include("serf_agent.php");
 run($_POST["ip"]); 
?>



<br>
<br>
>
<?php include("footer.html");?>

</body>
</html>