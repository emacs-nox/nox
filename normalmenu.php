<?php 

require_once("require.php");

// ERROR MANAGEMENT //
	function	get_args($argv)
	{
		decoascii();
		$i = 1;

			if (isset($argv[$i]))
			{
				$tab['cible'] = $argv[$i];
				if ($argv[$i] == '--man')
				{
					echo "			 ┌───────────────────║┤ \e\0334\033[31mCommandes disponibles \033[0m\e ├║───────────────────┐\n";
					echo "			 ♣ '--cache' : Effectue une recherche rapide.                      │\n";
					echo "			 ♣ '--what' : Cherche la definition du terme voulu.	           │\n";                                 
					echo "			 ♣ '--tri : Trie les mots trouvés par ordre alphabétique.          |\n";
					echo "			 └─────────────────────────────────────────────────────────────────┘\n\n\n\n";

					return 0;
				}
			}
			else
			{	
				echo "ERREUR : Le fichier cible n'est pas renseigné. \n";
				return 0;
			}
			if (isset($argv[$i + 1]))
				$tab["source"] = $argv[$i + 1];
			else
			{
				echo "ERREUR : Le fichier source n'est pas renseigné. \n";
				return 0;
			}
			if (isset($argv[$i + 2]))
			{
				if ($argv[$i + 2] == '--cache')
					$tab["argv"]['fast'] = "hypppppppper vittttttessssse";
				if ($argv[$i + 2] == '-c')
					$tab["argv"]['clean'] = "clean";
			}

		return ($tab);
	}

 ?>