<?php
require('connect.php');
header('Content-Type: application/json');

$sql = 'SELECT * FROM viaggi';



$query = $db->prepare($sql);
if($query->execute()){
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
   
}else{
    print_r($query->errorInfo());
}

?>