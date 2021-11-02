<?php
    var_dump($_POST) ;
include('connect.php');

?>
<script>
    var subCom = document.getElementById('subCom')
    var destination = document.getElementById('destination')
    var txtArea = document.getElementById('txt')
    var userArea = document.getElementById('user')
    subCom.addEventListener('submit',function(e){
        
        if(destination.nodeValue=='' || txtArea.nodeValue=="" || userArea.innerHTML==""){
            alert('tutti i campi devono essere riempiti')
            e.preventDefault()
        }else{
            alert('grazie')
        }

    })
</script>
<?php

$valid=true;
foreach ($_POST as $key => $value) {
    if(empty($value)) {

        $valid=false;
    }
}

if ($valid){

    $sql = "INSERT INTO commenti(testo, citta, utente) VALUES(:testo, :citta, :utente)";
    
    $query = $db->prepare($sql);
    $text= $_POST["textarea"];
    $ct= $_POST["destination"];
    $user= $_POST["user"];

    
    // $partenza = date('Y-m-d',$part);
    // $ritorno = date('Y-m-d',$rit);
    // echo $partenza;
    // echo $ritorno;
    
    
    
    
    $query->bindParam(':testo', $text, PDO::PARAM_STR);
    $query->bindParam(':citta', $ct, PDO::PARAM_STR);
    $query->bindParam(':utente', $user, PDO::PARAM_STR);
    // $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    // $query->bindParam(':foto', $foto, PDO::PARAM_STR);
    // $query->bindParam(':prezzo', $prezzo, PDO::PARAM_INT);
    if($query->execute()){

        header('Location: ../#section1/1?com=1');

    }else{
         print_r($query->errorInfo());
     }
}
    


?>