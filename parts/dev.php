<?php
#section1/2?id='.$el['id'].'#section1/2?id='.$el['id'].'
require('connect.php');

$sql = 'SELECT id,destinazione, foto, prezzo,tipo FROM viaggi LIMIT 4';



$query = $db->prepare($sql);
if($query->execute()){
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    $icon = '<i class="fas fa-plane"></i>';
    $cont=0;
    echo '<div class="promos">' ;
    foreach($rows as $el){
        if($el['tipo']!='volo') {

            $icon = '<i class="fas fa-ship"></i>';
        }
        if($cont%2==0){
            echo '<div class="row">';
            echo '<div class="rect" data-id="'.$el['id'].'"><div><img class="cardImg" src ="'.$el['foto'].'"></div><div class="desc"><div>'.$el['destinazione'].'</div><div>'.$el['prezzo'].'</div><div><a class="ref" href="">Vai alla promo!'.$icon.'</a></div></div></div>';
            $cont++;
        }else{
            echo '<div class="rect" data-id="'.$el['id'].'"><div><img class="cardImg" src ="'.$el['foto'].'"></div><div class="desc"><div>'.$el['destinazione'].'</div><div>'.$el['prezzo'].'</div><div><a class="ref" href="">Vai alla promo!'.$icon.'</a></div></div></div>';
            echo '</div>';
            $cont++;
        }
        
    }
    echo '</div>';
   
}else{
    print_r($query->errorInfo());
}
?>
