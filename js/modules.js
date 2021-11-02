 //funzioni
 export function qSelect(cosa,index){
    return document.querySelectorAll(cosa)[index]
}

export function crea(cosa){
     return document.createElement(cosa)

}
export function prendiId(cosa){
    return  document.getElementById(cosa)

}
export function showPage(index,cosa,array,dove){
    cosa.innerHTML =`

                            ${array[index].testo}
                            </br>
                            <blockquote> ${array[index].utente} </blockquote>`
    if(dove)
    dove.innerText=(index+1)+' / ' + (array.length) 
}
export function random(cosa,array){
    var numero = (Math.floor(Math.random()*array.length))
    showPage(numero,cosa,array,false)

}

