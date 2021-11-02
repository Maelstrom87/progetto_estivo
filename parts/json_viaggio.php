<?php
require('connect.php');
header('Content-Type: application/json');
$travel = $_GET['id'];
if(!empty($travel)){
    echo 'pupu';
    $sql = 'SELECT * FROM viaggi WHERE id='.$travel;
    $query = $db->prepare($sql);
    
    if($query->execute()){
        $rows = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
        
    }else{
        print_r($query->errorInfo());
    }
}else{
    echo 'cacca'
}

?>