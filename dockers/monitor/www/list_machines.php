<?php

function listmachines()
{	
	echo "<br>";
    $ipsc = shell_exec('ifconfig eth0 | grep \'inet addr:\' | cut -d: -f2 | awk \'{print $1}\'' . ' 2>&1');
	echo "Monitor IP :  <pre>$ipsc</pre>";
    
    echo "<br>";
    echo "Serf Nodes";
	$cmd = 'arp-scan -I eth0 ' . trim($ipsc) . '/24';
	// echo "$cmd";
	$output = shell_exec($cmd . ' 2>&1');
	echo "<pre>$output</pre>";
	
	echo "<br>";
	echo "Config";
	$cmd = 'ifconfig';
	$output = shell_exec($cmd . ' 2>&1');
	echo "<pre>$output</pre>";
 }

?>








