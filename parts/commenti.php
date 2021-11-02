<?php
require('connect.php');


$sql = 'SELECT destinazione FROM viaggi';


?>
<form id="comForm" action="parts/crea_commento.php" method="post"> 
    <div class="datiCom">
        <input name="user" id="user" type="text"  required placeholder="inserisci il tuo nome">
        <select name="destination" id="destination">

            <option required value="">--seleziona un luogo da te visitato--</option>
<?php
$query = $db->prepare($sql);
if($query->execute()){
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
        ?>
        <option value="<?php echo $row['destinazione']?>"><?php echo $row['destinazione']?></option>
       
        <?php
    }
    ?>
        </select>
    </div>
    <div class="lasciaCom">

        <textarea name="textarea" value="text" id="txt" cols="30" rows="10"  required ></textarea>
    </div>
   
        <input id="subCom"type="submit" value="lascia il tuo commento">
    </form>


    <?php
   
}else{
    print_r($query->errorInfo());
}

?>
