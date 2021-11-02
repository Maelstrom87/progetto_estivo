<?php

include('connect.php');

$sql = "INSERT INTO viaggi(destinazione, partenza, ritorno, tipo, foto ,prezzo,offerta) VALUES(:dest,:part,:rit,:tipo,:foto, :prezzo, :offerta)";

$query = $db->prepare($sql);
$dest= $_POST["destinazione"];
$part = strtotime($_POST["partenza"]);
$rit =strtotime($_POST["ritorno"]);
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];
$prezzo = $_POST["prezzo"];
$offerta = $_POST["offerta"];

// $time = strtotime('10/16/2003');

// $newformat = date('Y-m-d',$time);
$partenza = date('Y-m-d',$part);
$ritorno = date('Y-m-d',$rit);
echo $partenza;
echo $ritorno;




$query->bindParam(':dest', $dest, PDO::PARAM_STR);
$query->bindParam(':part', $partenza, PDO::PARAM_STR);
$query->bindParam(':rit', $ritorno, PDO::PARAM_STR);
$query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
$query->bindParam(':foto', $foto, PDO::PARAM_STR);
$query->bindParam(':prezzo', $prezzo, PDO::PARAM_INT);
$query->bindParam(':offerta', $offerta, PDO::PARAM_STR);


if($query->execute()){?>

<script>
    window.history.back()
</script>
<?php 
}else{
    print_r($query->errorInfo());
}

?>