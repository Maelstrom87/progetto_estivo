<?php
include_once('connect.php');
?>
<script>
           
        
        
        
        var res = fetch('http://epicode.test/progetto_estivo/parts/json_viaggio.php')
        res.then(response => response.text())
        .then(text => console.log(text))

        // .then(response => console.log(reponse[0].tipo))
        // .then(response=>(response[0].tipo==volo)?fullpage_api.moveTo('section1', 0): fullpage_api.moveTo('section1', 2))
        // .then(response => response.forEach(el=>{
        //     var titolo = document.getElementById('titolo')
        //     titolo.innerHTML="<h1>"+el.destinazione+"</h1>"
        // }))
        // .catch(error => console.log(error))
        

</script>