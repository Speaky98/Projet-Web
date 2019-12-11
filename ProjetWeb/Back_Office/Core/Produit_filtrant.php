<?php
include '../Entities/produit.php';
$min = 100;
$max = 300;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 5000,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

<style>
    body, html {
  height: 100%;
  margin: 0;
}
.bg-5edma {
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);
font-family: Arial;
position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 550px;
  padding: 20px;
  text-align: center;
}
.bg-image {
 
  background-image: url(../images/Back.png);
  
  filter: blur(6px);
  -webkit-filter: blur(6px);
 
  height: 100%; 
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.form-price-range-filter {
	text-align: center;
}

.tutorial-table {
    width: 100%;
    font-size: 13px;
    border-top: #e5e5e5 1px solid;
    border-spacing: initial;
    margin: 20px 0px;
    word-break: break-word;
}

.tutorial-table th {
    background-color: #f5f5f5;
	padding: 10px 20px;
	text-align: left;
}

.tutorial-table td {
    border-bottom: #f0f0f0 1px solid;
    background-color: #ffffff;
	padding: 10px 20px;
}

.text-right {
	text-align: right;
}

th.text-right {
	text-align: right;
}

.btn-submit {
    margin-top: 20px;
    padding: 10px 20px;
    background: #4a1f1f73;
    border: #0000 1px solid;
    border-radius: 4px;
    color: #f7f7f7;
    margin: 20px 0px;
}

#min {
	float: left;
    width: 30px;
    padding: 5px 10px;
    margin-right: 14px;
    background: #ffe4c421;
    border: #00000073;
    color: white;
}

#slider-range {
	width: 75%;
	float: left;
	margin: 5px 0px 5px 0px;
}

#max {
	float: right;
    width: 30px;
    padding: 5px 10px;
    background: #ffe4c421;
    border: #00000073;
    color: white;
}

.no-result {
    padding: 20px;
    background: #b7bbbb26;
    text-align: center;
    border-top: #6a695540 1px solid;
    color: #fffdfd;
}

.product-thumb {
	width: 50px;
	height: 50px;
	margin-right: 15px;
	border-radius: 50%;
	vertical-align: middle;
}
</style>
</head>

<body>
<div class="bg-image"></div>
<div class="bg-5edma">
    <div class="form-price-range-filter">
        <form method="post" action="">
            <div>
                <input type="" id="min" name="min_price"
                    value="<?php echo $min; ?>">
                <div id="slider-range"></div>
                <input type="" id="max" name="max_price"
                    value="<?php echo $max; ?>">
            </div>
            <div>
                <input type="submit" name="submit_range"
                    value="Filter Product" class="btn-submit">
            </div>
        </form>
    </div>
    
<?php

$conn = mysqli_connect("localhost", "root", "", "prodigy");

$result = mysqli_query($conn, "select * from table_produits where Prix BETWEEN '$min' AND '$max'");

$count = mysqli_num_rows($result);
if ($count > 0) {
    ?>
<hr>
    <div class="container">
        <table class="tutorial-table" cellspacing="1px" width="100%">
            <tr>
                <th>Nom de produit</th>
                <th>Identifiant</th>
                <th class="text-right">Prix en Dt</th>
            </tr>
     <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>
    
        <tr>
                <td><img class="product-thumb" src="<?php echo $row['Prod_File']; ?>" /><?php echo $row['Nom']; ?></td>
                <td><?php echo $row['Identifiant']; ?></td>
                <td class='text-right'><?php echo $row['Prix']; ?></td>
            </tr>
<?php
    } 
} else {
    ?>
<div class="no-result">Pas de résultat</div>
<?php
}
mysqli_free_result($result);

mysqli_close($conn);
?>
<div style="
    MARGIN-TOP: 5%;
">
<a href="../index.php" style="text-align: right;font-size: .99rem;color: #fffdfd;margin-left: 92%;">Retour</a>
</div>
</table>
    </div>
    </div>
</body>
</html>