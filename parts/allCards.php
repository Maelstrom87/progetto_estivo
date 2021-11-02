<?php
#section1/2?id='.$el['id'].'#section1/2?id='.$el['id'].'
require('connect.php');

$sql = 'SELECT * FROM viaggi';



$query = $db->prepare($sql);
if($query->execute()){
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    $icon = '<i class="fas fa-plane"></i>';
    $cont=0;

    foreach($rows as $el){
        if($el['tipo']!='volo') {

            $icon = '<i class="fas fa-ship"></i>';
        }

            // echo '<div class="row">';
            // echo '<div class="rect" data-id="'.$el['id'].'"><div><img class="cardImg" src ="'.$el['foto'].'"></div><div class="desc"><div>'.$el['destinazione'].'</div><div>'.$el['prezzo'].'</div><div><a class="ref" href="">Vai alla promo!'.$icon.'</a></div></div></div>';
            ?>
            <div class="rect" data-id="<?php echo $el['id'] ?>">
                <div class="desc">
                    <div><?php echo $el['destinazione'] ?></div>
                    <div class="img_con">
                        <img class="cardImg" src =" <?php echo $el['foto'] ?>">
                    </div>
                    <div><?php echo $el['partenza'] ?></div>
                    <div><?php echo $el['ritorno'] ?></div>
                    <?php 
                        if($el['offerta']==0)
                            echo '<div>'.$el['prezzo'].'</div>';
 
                        else {
                            echo '<div ><span class="dash">' .$el['prezzo']. '€</span><span>' .$el['prezzo']*0.75. ' €</span></div>';
 
                        }?>
                    
                    <div>
                        <button id="buy" class="ref" href="">Prenota subito!<?php echo $icon ?></button>
                    </div>
                </div>
            </div>
            <?php


    }

   
}else{
    print_r($query->errorInfo());
}
?>