<?php include('parts/connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css" integrity="sha512-TD/aL30dNLN0VaHVoh9voFlNi7ZuWQYtV4bkIJv2ulZ8mEEkZJ7IyGvDthMKvIUwzLmPONnjQlAi55HTERVXpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css\index.css">
    <link rel="stylesheet" href="css\main.css">

    
  
</head>
<body>
    
    <?php include('parts/header.php')?>
    <div id="fullPage">
        
        <div class="section s1">
            <div class="slide l">
                <h1>Contatti</h1>
            </div>
            <div class="slide c">
                <h1>Scegli la tua vacanza con Goblin Travels!</h1>
                <div class="container">
                    <div class="opac"></div>
                    <div class="banner">
                        <h2>benvenuto in "Goblin Travel"</h2>
                        <h3>scegli una delle nostre promo</h3>
                        <h3><a href=""><i class="fas fa-ship"></i>o clicca qui per vedere tutte le noestre offerte!<i class="fas fa-plane"></i></a></h3>
                        <p class="mini">può darsi pure che riesci a tornare!</p>
                    </div>
                </div>
                <?php include('parts/dev.php')?>

            </div>
            <div class="slide r">
                <h1>Commenti</h1>
                <div class="area">

                    <?php include('parts/commenti.php')?>
                        
                </div>
            </div>
            <div class=""></div>
        </div>
        <div class="section s2">
            
            <!-- <div class="container">
              <div class="opac"></div>
                <div class="banner">
                    
                    <h3>scegli una delle nostre promo o prenota la tua vacanza!</h3>
                    <p class="mini">può darsi pure che riesci a tornare!</p>
                </div>
            </div> -->
            <div class="cards">
                <?php include ('parts/allCards.php') ?>
            </div>
            
            <!-- <div class="shadowToBot"></div> -->
        </div>
        <div class="section s3">
            <div class="shadowToTop"></div>
            <div class="offer">
                <?php include ('parts/clone.php') ?>
            </div>
           
            
        </div>
        <div class="section dev" >
            <?php include('parts/dev_page.php')?>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    
    
    
    
    
    
    <!-- JAVASCRIPT -->
    <script type="module">
        import {qSelect, crea, prendiId, showPage, random} from './js/modules.js'

        var arrows = crea('div')
        arrows.classList.add('arrows')
        var cuccuCubetto=""
        var numCommenti = crea('span')
        var cuccuSette =[]
        var currentIndex = 0
        new fullpage('#fullPage',{
            autoScrolling:true,
            navigation:true,
            anchors:['section1' , 'section2' , 'section3','section4'],
            navigationTooltips: ['Home','City','Beach','Dev'],
            showActiveTooltip:true,
            controlArrows: false,
            slidesNavigation:true
        })
        fullpage_api.silentMoveTo('section1',1);
        var open = false
        var refs = document.querySelectorAll('.rect')
        refs.forEach(element => {
            element.addEventListener('click',function(e){
                e.preventDefault()
                fullpage_api.moveTo('section3', 0);
                var getPromo = element.getAttribute('data-id')

                //promo cards

                var cards = fetch('http://epicode.test/progetto_estivo/parts/read_viaggi.php')
                cards.then(response => response.json())
                
                .then(response => response.forEach((el,i)=>{
                    if(el.id==getPromo){
 
                        var offerta = qSelect('.offer',0)
                        if(open){
                            var bubbu = document.querySelectorAll('.cuccu')
                            offerta.removeChild(bubbu[0])
                            arrows.innerHTML=""

                        }
                        var doc = qSelect('.s3',0)
                        doc.style.background="url("+el.foto+")"
                        offerta.style.display="block"
                        var city = qSelect('.nomeCitta',0)
                        city.innerText=el.destinazione
                        var dest = qSelect('.dest',0)
                        dest.innerText=el.destinazione
                        var partenza =qSelect('.andata',0)
                        partenza.innerHTML="Data di partenza: "+el.partenza
                        var ritorno =qSelect('.ritorno',0)
                        ritorno.innerHTML="Data di ritorno: "+el.ritorno
                        var prezzo =qSelect('.prezzo',0)
                        prezzo.innerText="Prezzo iniziale: "+el.prezzo+"€"
                        var actual =qSelect('.actual',0)
                        actual.innerText="Prezzo finale!: "+el.prezzo*0.75+"€"
                        var areaCom =qSelect('.commenti',0)
                        var buy =qSelect('.buy',0)
                        buy.addEventListener('click',()=>{
                            alert('grazie...e ora sparisci!')
                            fullpage_api.moveTo('section1', 1);
                        })

                         //area commenti
                        var coms = fetch('http://epicode.test/progetto_estivo/parts/json_commenti.php')
                        var cubetto = el.destinazione

                        cuccuSette=[]
                        coms.then(response => response.json())
                        
                        .then(response => response.forEach((el,i)=>{
                            if(el.citta == cubetto){
                                cuccuSette.push(el)
                            }
                        }))
                        .then(response=>{

                            open = true
                            var cuccu = document.createElement('div')
                            cuccu.classList.add('cuccu')
                            cuccuCubetto = crea('div')
                            cuccuCubetto.classList.add('cuccuCubetto','pimpi')
                            currentIndex = cuccuSette.length-1
                            showPage(currentIndex,cuccuCubetto,cuccuSette,numCommenti)
                            cuccu.appendChild(cuccuCubetto)
                            offerta.appendChild(cuccu)

                            // avanti e indietro

                            
                            var prev = crea('button')
                            prev.innerText="<<"
                            prev.addEventListener('click',()=>{
        
                                currentIndex--
                                if(currentIndex<0){
                                    currentIndex=cuccuSette.length-1
                                }
                                showPage(currentIndex,cuccuCubetto,cuccuSette,numCommenti)
                            })
                            arrows.appendChild(prev)
                            
                            numCommenti.innerText=(currentIndex+1)+' / ' + (cuccuSette.length) 
                            arrows.appendChild(numCommenti)
                            var next = crea('button')
                            next.innerText=">>"
                            next.addEventListener('click',()=>{
                                currentIndex++ 
                                if(currentIndex>cuccuSette.length-1){
                                    currentIndex = 0
                                }
                                
                                showPage(currentIndex,cuccuCubetto,cuccuSette,numCommenti)
                            })
                            arrows.appendChild(next)
                            offerta.appendChild(arrows)

                            //commento random

                            var randomCont = crea('div')
                            randomCont.classList.add('rCont')
                            randomCont.innerText="Commento a caso!"
                            var randomCom = crea('div')
                            randomCom.classList.add('rCom','pimpi')
                            cuccu.appendChild(randomCont).appendChild(randomCom)
                            random(randomCom,cuccuSette)
                            setInterval(() => {

                                random(randomCom,cuccuSette)
                            }, 4000);
                        })


                    }
                }))
                // .then(response=>response.forEach(el=>{
                //     var s2 = qSelect('s2',0)
                //     var city = qSelect('.nomeCitta',0)
                //     city.innerText=el.destinazione
                //     var dest = qSelect('.dest',0)
                //     dest.innerText=el.destinazione
                //     var partenza =qSelect('.andata',0)
                //     partenza.innerHTML="Data di partenza: "+el.partenza
                //     var ritorno =qSelect('.ritorno',0)
                //     ritorno.innerHTML="Data di ritorno: "+el.ritorno
                //     var prezzo =qSelect('.prezzo',0)
                //     prezzo.innerText="Prezzo iniziale: "+el.prezzo+"€"
                //     var actual =qSelect('.actual',0)
                //     actual.innerText="Prezzo finale!: "+el.prezzo*0.75+"€"
                //     s2.appendChild()
                // }))
                .catch(error => console.log(error))

            })
                    
        });
        //



        //pagina dell'admin
        var jsonViaggi = fetch('http://epicode.test/progetto_estivo/parts/read_viaggi.php')
            var devTab = prendiId('devTab')
            var tabella = crea('div')
            jsonViaggi.then(response => response.json())
            .then(response => response.forEach(element => {
                var riga = crea('form')
                riga.setAttribute('action',"parts/controlla_viaggio.php")
                riga.setAttribute('method',"post")
                // var tab = false
                // for(var oggetto in element){
                //     if(!tab){
                        
                //         var nome = crea('span')
                //         nome.innerText=oggetto
                //         riga.appendChild(nome)
                //     }
                    
                // }
                // tab = true
                for(var oggetto in element){

                    var ogg = crea('input')
                    if(typeof oggetto == 'string') ogg.setAttribute('type','text')
                    if(oggetto == 'partenza' || oggetto == 'ritorno') ogg.setAttribute('type','date')
                    if(oggetto == 'id') ogg.setAttribute('disabled','true')
                    ogg.value=element[oggetto]
                    ogg.setAttribute('name',oggetto)
                    riga.appendChild(ogg)

                }  
                var mod = crea('button')
                mod.setAttribute('type','submit')
                mod.value='modifica'
                mod.innerText='modifica'
                riga.appendChild(mod)
                tabella.appendChild(riga)
            }))
            devTab.appendChild(tabella)

   </script>
    
    
</body>

</html>