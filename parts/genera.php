<?php 

include('connect.php');
header('Content-Type: application/json');

$nomi=['diego','luca','paolo','francesco','elia','sara','lucia','marta'];
$cognomi=['pini','rossi','bianchi','verdi','gomez','lee','pippo'];
$mails=['@gmail.com','@hotmail.com','@yahoo.com'] ;
$citta=['Roma','Milano','Parigi','NewYork','Berlino','Barcellona'];
$utenti=[];

// var_dump($_POST['num']);
function genera(&$x,&$names,&$surnames,&$mails,&$citta,&$db) {
    for($i=0 ;$i <$x;$i++ ){

     
        $name = $names[mt_rand(0,(count($names)-1))];
        $surname = $surnames[mt_rand(0,(count($surnames)-1))];
        $city = $citta[mt_rand(0,(count($citta)-1))];
        $mail = $name.$surname.$i.$mails[mt_rand(0,(count($mails)-1))];
        
        include_once('connect.php');
        $sql = "INSERT INTO utenti(nome, cognome,email,citta ) VALUES(:nome,:cognome,:email,:citta)";//definisco l'istruzione SQL
        
        $query = $db->prepare($sql);
        
        
        $query->bindParam(':nome', $name, PDO::PARAM_STR);
        $query->bindParam(':cognome', $surname, PDO::PARAM_STR);
        $query->bindParam(':citta', $city, PDO::PARAM_STR);
        $query->bindParam(':email', $mail, PDO::PARAM_STR);
        
        
        
        if($query->execute()){
        
        }else{
            print_r($query->errorInfo());
        }
    }
    
}

$d = $_POST['num'];
if(isset($_POST['num'])){
    genera($d,$nomi,$cognomi,$mails,$citta,$db);
    $sql2 = 'SELECT * FROM utenti';



    $query2 = $db->prepare($sql2);
    if($query2->execute()){
    //echo 'dati ottenuti<br>';
    }else{
        print_r($query2->errorInfo());
    }

$totale = $query2->rowCount();

$rows = $query2->fetchAll(PDO::FETCH_ASSOC);
//PDO::FETCH_ASSOC specifica che i dati devono essere riportati sotto forma di array

echo json_encode($rows);
}

?>