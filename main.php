<?php

require_once("require.php");

	// MAIN
	
	// dismenu();
	function	main($argv)
	{

		$time_start_all = microtime(true);
		$save = getcwd();
		$argument_list = get_args($argv);
		//print_r($argument_list);
		if ($argument_list == 0)
			return 0;
		if (isset($argument_list['argv']['clean']))
		{
			if (chdir($_SERVER['TMPDIR']) == TRUE)
				{
					if (file_exists($_SERVER['TMPDIR'].'no_x'))
						{
							system("rm -R no_x");
							echo 'Succès de la suppression', "\n";
						}
					else
						echo 'Echec de la suppression. Le dossier n\'éxiste peut être pas ?' . "\n";
				}
			else
				echo 'Echec de la suppression des fichiers temporaires' . "\n";
			return 0;
		}
		$exist = false;
		chdir($_SERVER['TMPDIR']);
		if (!file_exists($_SERVER['TMPDIR'].'no_x'))
			{
				mkdir($_SERVER['TMPDIR'].'no_x');
			}
		chdir($_SERVER['TMPDIR'].'no_x/'); 
		if (!is_writable('~'.$argument_list['cible'].'_'.$argument_list['source']) || !isset($argument_list['argv']['fast']))
		{
			chdir($save);
			$list_dico = get_dico_array($time_start_message, $time_end_message, $argument_list['source']);
			$messages = get_message_array_and_display($sort_time_start, $sort_time_end, $time_end_all, $result, $time_start, $time_end, $time_start_display, $time_end_display, $argument_list['cible'], $list_dico);
			$time_end_all = microtime(true);
			$time = $time_end - $time_start;
			$time_all = $time_end_all - $time_start_all;
			$time_message = $time_end_message - $time_start_message;
			$time_display = $time_end_display - $time_start_display;
			$sort_time = $sort_time_end - $sort_time_start;
			result($sort_time, $time, $time_all, $time_message, $time_display);
			echo count($list_dico), ' valeurs trouve dans le dictionnaire.', "\n";
			echo $messages;
			cache_generator ("~".$argument_list['cible'].'_'.$argument_list['source'], $result);
		}
		else
		{

			chdir($_SERVER['TMPDIR']);
			if (!file_exists($_SERVER['TMPDIR'].'no_x'))
				mkdir($_SERVER['TMPDIR'].'no_x');
			chdir($_SERVER['TMPDIR'].'no_x/');
			cache_receiver ('~'.$argument_list['cible'].'_'.$argument_list['source'], $select_time, $display_time);
			$time_end_all = microtime(true);
			$time_all = $time_end_all - $time_start_all;
			result_cache($select_time, $display_time, $time_all);
		}
	}

		   // PROGRAMM LAUNCH
		system("clear");
		main($argv);

  ?>