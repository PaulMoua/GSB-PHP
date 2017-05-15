<div id="contenu"> Hello ! v_etatRembousement.php !
<?php include("modele/m_etatRembousement.php");
?>


	<h3 style='color:red'> Remboursements refusé</h3>
	<?php getTableRefuse(); ?>
	<table  >
	    <tr >
				<th > a1</th>
				<th > b1</th>
		</tr>
			<tr >
				<td > a1</td>
				<td > b1</td>
		</tr>
		<tr >
				<td > a2</td>
				<td > b2</td>
		</tr>
	</table>
	<h3 style='color:green'> Mes Remboursements en Cours</h3>
	<h3 style='color:blue'> Mes Remboursements effectué</h3>
</div>