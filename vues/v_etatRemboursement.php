<div id="contenu"> Choisissez une année pour consulter vos remboursements :
<?php include("modele/m_etatRembousement.php");
if (isset($_POST['annee'])){
	$annee=$_POST['annee'];

}else{
	$annee=2017;
}

?>
<form action="index.php?uc=etatRemboursement" method="post">
  <select name="annee">
    <option value="2017">2017</option>
    <option value="2016">2016</option>

  </select>
  <br><br>
  <input type="submit">
</form>
<?php
echo "Voici vos remboursements pour l'année ". $annee . " :";
?>
	<h3 style='color:red'> Remboursements refusé</h3>
	<?php getTable(2, $annee); ?>

	<h3 style='color:green'> Mes Remboursements en Cours</h3>
		<?php getTable(0, $annee); ?>
	<h3 style='color:blue'> Mes Remboursements effectués</h3>
		<?php getTable(1,$annee); ?>
</div>