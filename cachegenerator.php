<?php 

require_once("require.php");

	// TMP_MANAGEMENT 
	function	cache_generator($name, $result)
	{
		chdir($_SERVER['TMPDIR']);
			if (!file_exists($_SERVER['TMPDIR'].'no_x'))
				{
					mkdir($_SERVER['TMPDIR'].'no_x');
				}
			chdir($_SERVER['TMPDIR'].'no_x/');
		$filename = $name;
		$content = '';
		foreach ($result as $value) {
			$content .= "\t".$value;
			$content .= "\n";	
		}
		echo filesize($name);
		$handle = fopen($filename, 'w+');
		fwrite($handle, $content);
		fclose($handle);
	}

 ?>