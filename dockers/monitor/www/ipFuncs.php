<?php
	function getMyIp()
	{	
		$ipsc = shell_exec('ifconfig eth0 | grep \'inet addr:\' | cut -d: -f2 | awk \'{print $1}\'' . ' 2>&1');
		return $ipsc;
	}
	
	function getSerfNodes()
	{
		$ip = getMyIp();
		$cmd = 'arp-scan -I eth0 ' . trim($ip) . '/24';
		$output = shell_exec($cmd . ' 2>&1');
		echo "<pre>$output</pre>";
	}
	
	function getIfConfig()
	{
		$cmd = 'ifconfig';
		$output = shell_exec($cmd . ' 2>&1');
		echo "<pre>$output</pre>";
	}
?>








