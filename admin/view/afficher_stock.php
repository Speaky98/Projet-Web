
<?PHP
include 'C:\wamp64\www\projet\core\stock.php';

$stock1C=new stockC();
?>
<table border="1" align="center"  cellpadding="20" cellspacing="5" style="border-color: #478bf9" style="background: #478bf9">
<tr>
<td>id_produit</td>
<td>qte</td>
<td>des_prd</td>
<td>id_fourni</td>
<td>qte_maj</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
$listestock=$stock1C->afficherstocks($stock1C);
foreach($listestock as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_produit'];  ?></td>
	<td><?PHP echo $row['qte'];  ?></td>
	<td><?PHP echo $row['des_prd']; ?></td>
	<td><?PHP echo $row['id_fourni']; ?></td>
	<td><?PHP echo $row['qte_maj'];    ?></td>
	

	<td><form method="POST" action="supprimer_stock.php">
	<input style="background-color:#478bf9" id_fourni="submit" name="supprimer" value="supprimer">
	<input  id_fourni="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id_produit">
	</form>
	</td>
	<td><a  style="background-color:#478bf9 " style="color:#fff"  href="modifier_stock.php?id_produit=<?PHP echo $row['id_produit']; ?>">
	Modifier </a></td>
	</tr>
	<?PHP
	
	
}
?>