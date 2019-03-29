<?php
$file = 'lawNOrderX100.txt';
$handle = fopen("lawNOrder.txt", "r");
if ($handle) {
	while (($line = fgets($handle)) !== false) {
		for ($x = 0; $x <= 99; $x++) {
			$current = substr($line, 0, -1) . sprintf("%02d", $x) . "\n";
			$current .= file_get_contents($file);
			file_put_contents($file, $current);			
		}
	}
	fclose($handle);
} 
?>