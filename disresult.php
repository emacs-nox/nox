<?php 

require_once("require.php");

	// DISPLAY
	function	result($sort_time = 0, $time = 0, $time_all, $time_message = 0, $time_display = 0)
	{
			echo "┌────────────────────────────║┤ Detail des opérations ├║─────────────────────────────────┐\n";
			echo "│\033[7m\033[37m                                                                                        \033[0m│\n";
			if (round($time_message, 5) == 0)
				echo "│\033[7m\033[37m\033[43m\033[1m\tChargement des dictionnaires en \033[42m\t -> \t\t0 seconde \t\t \033[0m│\n";
			else
				echo "│\033[7m\033[37m\033[43m\033[1m\tChargement des dictionnaires en \033[42m\t -> \t\t".(round($time_message, 5))." secondes. \t \033[0m│\n";
			if (round($time, 5) != 0)
				echo "│\033[7m\033[37m\033[43m\033[1m\tRecherche des occurences en \033[42m\t\t -> \t\t".(round($time, 5))." secondes. \t \033[0m│\n";
			else
				echo "│\033[7m\033[37m\033[43m\033[1m\tRecherche des occurences en \033[42m\t\t -> \t\t".(round($time, 5))." seconde. \t\t \033[0m│\n";
			if (round($time_display, 5) != 0)
				echo "│\033[7m\033[37m\033[43m\033[1m\tAffichage des occurences \033[42m\t\t -> \t\t".(round($time_display, 5))." secondes.\t \033[0m│\n";
			else
				echo "│\033[7m\033[37m\033[43m\033[1m\tAffichage des occurences \033[42m\t\t -> \t\t0 seconde.\t\t \033[0m│\n";
			echo "│\033[7m\033[37m\033[43m\033[1m\tTemps de tri: \033[42m\t\t\t\t -> \t\t".(round($sort_time, 5))." secondes.\t \033[0m│\n";
			echo "│\033[7m\033[37m\033[43m\033[1m\tTemps total : \033[42m\t\t\t\t -> \t\t".(round($time_all, 6))." secondes. \t \033[0m│\n";
			echo "│\033[7m\033[37m                                                                                        \033[0m│\n";
			echo "└────────────────────────────────────────────────────────────────────────────────────────┘\n\n\n\n";
	}

	function	result_cache($cache_select, $cache_display, $time_all)
	{
		echo "┌────────────────────────────║┤ Detail des opérations ├║─────────────────────────────────┐\n";
		echo "│\033[7m\033[37m                                                                                        \033[0m│\n";
		if (round($cache_select, 5) != 0)
			echo "│\033[7m\033[37m\033[43m\033[1m\tSelection et chargement du cache \033[42m\t -> \t".(round($cache_select, 5))." secondes. \t\t \033[0m│\n";
		else
			echo "│\033[7m\033[37m\033[43m\033[1m\tSelection et chargement du cache \033[42m\t -> \t\t0 seconde. \t\t \033[0m│\n";
		if (round($cache_display, 5) != 0)
			echo "│\033[7m\033[37m\033[43m\033[1m\tAffichage du cache \033[42m\t\t\t -> \t".(round($cache_display, 5))." secondes. \t\t \033[0m│\n";
		else
			echo "│\033[7m\033[37m\033[43m\033[1m\tAffichage du cache \033[42m\t\t\t -> \t\t0 seconde. \t\t \033[0m│\n";
		if (round($time_all, 5) != 0)
			echo "│\033[7m\033[37m\033[43m\033[1m\tTemps total \033[42m\t\t\t\t -> \t".(round($time_all, 5))." secondes. \t\t \033[0m│\n";
		else
			echo "│\033[7m\033[37m\033[43m\033[1m\tTemps total \033[42m\t\t\t\t -> \t\t0 seconde. \t\t \033[0m│\n";	
		echo "│\033[7m\033[37m                                                                                        \033[0m│\n";
		echo "└────────────────────────────────────────────────────────────────────────────────────────┘\n\n\n\n";
	}

 ?>