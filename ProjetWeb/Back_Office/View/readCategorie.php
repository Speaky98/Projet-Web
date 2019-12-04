<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM table_Categorie WHERE Categorie like '" . $_POST["keyword"] . "%' ORDER BY Categorie LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="Categorie-list">
<?php
foreach($result as $table_Categorie) {
?>
<li onClick="selectCategorie('<?php echo $table_Categorie["Categorie"]; ?>');"><?php echo $table_Categorie["Categorie"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>