<?php

function listen($ip)
{
	stop();

	ob_implicit_flush(true);ob_end_flush();

	$descriptorspec = array(
	   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
	   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
	   2 => array("pipe", "w") // stderr is a file to write to
	);
	flush();

	$cwd = '/tmp';

	$process = proc_open('serf agent -role=monitor -join ' . $ip , $descriptorspec, $pipes, $cwd, array());
	echo "<pre>";
	if (is_resource($process)) {
		while ($s = fgets($pipes[1])) {
			print $s;
			flush();
			}
	}
	echo "</pre>";
 }
 
function listagents($ip)
{
	stop();
	shell_exec('serf agent -role=monitor -join ' . $ip .' > /dev/null 2>/dev/null &');
	$output = shell_exec('serf members 2>&1');
	echo "<pre>$output</pre>";
 }
 
 function stop()
 {
	$output = shell_exec('serf leave 2>&1');
	// echo "<pre>$output</pre>";
 }
?>








