<?php

function listmachines()
{
	echo "Config";
	$cmd = 'ifconfig';
	$output = shell_exec($cmd . ' 2>&1');
	echo "<pre>$output</pre>";
	
	echo "<br>";
	echo "<br>";
    $ipsc = shell_exec('ifconfig eth0 | grep \'inet addr:\' | cut -d: -f2 | awk \'{print $1}\'' . ' 2>&1');
	echo "<pre>$ipsc</pre>";
	
	echo "<br>";
	echo ">";
	echo "<br>";
	echo ">";
	echo "<br>";
    echo "Serf Nodes";
    echo "<br>";
    
	$cmd = 'arp-scan -I eth0 ' . trim($ipsc) . '/24';
	echo "$cmd";
	$output = shell_exec($cmd . ' 2>&1');
	echo "<pre>$output</pre>";
 }

?>








