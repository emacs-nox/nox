<?php 

require_once("require.php");	


// GET CONTENT //
	function	get_dico_array(&$time_start_dico, &$time_end_dico, $dico_name)
	{
		$dico_size = filesize($dico_name);
		$i = -1;

		$time_start_dico = microtime(true);
		$handle = fopen($dico_name, 'r');
		$content = fread($handle, $dico_size);
		fclose($handle);
		preg_match_all("/\S+/", $content, $contents);
		$contents = $contents[0];
		foreach ($contents as $value) {
		 	$i = 0;
		 	if (isset($list[$value][0]))
		 	{
		 		while (isset($list[$value][$i]))
		 			++$i;
				$list[$value][$i] = '';
		 	}
		 	else
		 		$list[$value][$i] = '';
		 }
		$time_end_dico = microtime(true);
		return ($list);
	}
 ?>