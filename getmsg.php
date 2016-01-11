<?php 

require_once("require.php");
$old = ini_set('memory_limit', '8192M'); 
function quick_sort($array)
{
	if (count($array) <= 1)
		return $array;
	else
	{
		$pivot = $array[0];
		$left = $right = array();
		for($i = 1; $i < count($array); $i++)
		{
			if ($array[$i] < $pivot)
				array_push($left, $array[$i]);
			else
				array_push($right, $array[$i]);
		}
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}


	// DISPLAY
	function	get_message_array_and_display(&$sort_time_start, &$sort_time_end, &$time_end_all, &$result, &$time_start, &$time_end, &$time_start_display, &$time_end_display, $message_name, $list_dico)
	{
		$handle = fopen($message_name, "r");
		$content = fread($handle, filesize($message_name));
		
		preg_match_all("/\S+/", $content, $contents);
		$contents = $contents[0];
		$j = -1;
		$message = "\n".'           -> '.count($contents).' mots du dictionnaire chargés.'."\n\n\n";
		echo $message;
		$time_start = microtime(true);
		foreach ($contents as $value) {
			if (isset($list_dico[$value]))
				$result[++$j] = ' ♫ '.$value;
		}
		$time_end = microtime(true);
		$sort_time_start = microtime(true);
		$result = quick_sort($result);
		$sort_time_end = microtime(true);
		$counter = count($result);
		$i = -1;
		$j = 0;
		$time_start_display = microtime(true);
		echo '├─────║┤ Résultats ├║─────┤', "\n";
		
		for ($value = 0; isset($result[$value]); ++$value) {
			echo "\t", $result[$value], "\n";
		}
		$time_end_display = microtime(true);
		echo "\n";
		fclose($handle);
		return count($contents).' mots du dictionnaire chargés'."\n".$counter.' mots du dictionnaire trouvés dans le message '."\n";
	}

 ?>