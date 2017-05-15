<?php

global $tableRemboursement;
$tableRemboursement =$pdo->getRembousementById($_SESSION['idVisiteur']);
function getTableRefuse(){
	$toReturn='';
	$toReturn=$toReturn+'<table>';
		$toReturn=$toReturn+'<tr>';
			$toReturn=$toReturn+'<th>';
				$toReturn=$toReturn+'ID';
			$toReturn=$toReturn+'</th>';
			$toReturn=$toReturn+'<th>';
				$toReturn=$toReturn+'mois';
			$toReturn=$toReturn+'</th>';
			$toReturn=$toReturn+'<th>';
				$toReturn=$toReturn+'Somme';
			$toReturn=$toReturn+'</th>';
		$toReturn=$toReturn+'</tr>';
	foreach($tableRemboursement as $ligne){
		if ($tableRemboursement['idRemboursement']==2){



			$toReturn=$toReturn+'<tr>';
				$toReturn=$toReturn+'<td>';
					$toReturn= $toReturn+$tableRemboursement['idRemboursement'];
				$toReturn=$toReturn+'</td>';
				$toReturn=$toReturn+'<td>';
					$toReturn= $toReturn+$tableRemboursement['mois'];
				$toReturn=$toReturn+'</td>';
				$toReturn=$toReturn+'<td>';
					$toReturn= $toReturn+$tableRemboursement['sommeValide'];
				$toReturn=$toReturn+'</td>';
		 	$toReturn=$toReturn+'</tr>';
		}
	}
	
	$toReturn=$toReturn+'</table>';
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