<?php 

require_once("require.php");

	// TMP_MANAGEMENT
	function	cache_receiver($name, &$select_time, &$display_time)
	{
		echo '├─────║┤ Résultats ├║─────┤', "\n";
		$select_time_start = microtime(true);
			$handle = fopen($name, 'r');
			$content = fread($handle, filesize($name));
			
		$select_time_end = microtime(true);
		$display_time_start = microtime(true);
			
			echo $content;
		
		$display_time_end = microtime(true);
		$select_time = $select_time_end - $select_time_start;
		$display_time = $display_time_end - $display_time_start;
		fclose($handle);
	}

 ?>