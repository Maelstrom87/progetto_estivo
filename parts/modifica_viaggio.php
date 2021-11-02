<?php
include('connect.php');
$idd = $_POST['id'];

$sql2='UPDATE viaggi SET destinazione=:destinazione, partenza=:partenza, ritorno=:ritorno , tipo=:tipo , foto=:foto,prezzo=:prezzo, offerta=:offerta WHERE id='.$idd;

$destinazione = $_POST["destinazione"];
$partenza = $_POST["partenza"];
$ritorno =$_POST["ritorno"];
$tipo = $_POST["tipo"];
$foto = $_POST["foto"];
$prezzo = $_POST["prezzo"];
$offerta = $_POST["offerta"];

$query = $db->prepare($sql2);
$query->bindParam(':destinazione', $destinazione, PDO::PARAM_STR);
$query->bindParam(':partenza', $partenza, PDO::PARAM_STR);
$query->bindParam(':ritorno', $ritorno, PDO::PARAM_STR);
$query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
$query->bindParam(':foto', $foto, PDO::PARAM_STR);
$query->bindParam(':prezzo', $prezzo, PDO::PARAM_STR);
$query->bindParam(':offerta', $offerta, PDO::PARAM_STR);


if($query->execute()){
    header('Location: ../#section4');

}else{
    print_r($query->errorInfo());
}
?>
