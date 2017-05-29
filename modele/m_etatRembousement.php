<?php

global $tableRemboursement;

$tableRemboursement =$pdo->getRembousementById($_SESSION['idVisiteur']);
function getTable($indice, $annee){
	global $tableRemboursement;
	$etat=["","remboursée", "refusée"];
	$toReturn='';
	$toReturn=$toReturn.'<table class="listeLegere">';
		$toReturn=$toReturn.'<tr>';
			$toReturn=$toReturn.'<th>';
				$toReturn=$toReturn.'Numéro';
			$toReturn=$toReturn.'</th>';
			$toReturn=$toReturn.'<th>';
				$toReturn=$toReturn.'Date ' ;
			$toReturn=$toReturn.'</th>';
			$toReturn=$toReturn.'<th>';
				$toReturn=$toReturn.'Somme '.$etat[$indice];
			$toReturn=$toReturn.'</th>';
		$toReturn=$toReturn.'</tr>';
	foreach($tableRemboursement as $ligne){
		$numAnnee =substr( $ligne['mois'],0,4);
		if ($ligne['status']==$indice and $numAnnee==$annee){
			$moisNb= $ligne['mois'][4].$ligne['mois'][5];
			$mois = ["Janvier", "Février","Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre" , "Décembre"];

			$toReturn=$toReturn.'<tr>';
				$toReturn=$toReturn.'<td>';
					$toReturn= $toReturn.$ligne['idRemboursement'];
				$toReturn=$toReturn.'</td>';
				$toReturn=$toReturn.'<td>';
					$toReturn= $toReturn.$mois[$moisNb-1]. " ".$ligne['mois'][0].$ligne['mois'][1].$ligne['mois'][2].$ligne['mois'][3] ;
				$toReturn=$toReturn.'</td>';
				$toReturn=$toReturn.'<td>';
					$toReturn= $toReturn.$ligne['sommeValide'];
				$toReturn=$toReturn.'</td>';
		 	$toReturn=$toReturn.'</tr>';
		}
	}
	
	$toReturn=$toReturn.'</table>';
	
	echo $toReturn;
}
function getTableEnCours(){
	$toReturn='';

	echo $toReturn;
}
function getTableEffectue(){
	$toReturn='';

	echo $toReturn;
}
?>