var commentSection = document.getElementById('commentSection')

commentSection.addEventListener('click',(e)=>{
    e.preventDefault()
    console.log('clap');
    fullpage_api.moveTo('section1', 2);
})
var home = document.getElementById('home')
home.addEventListener('click',(e)=>{
    e.preventDefault()
    fullpage_api.moveTo('section1', 1);
})
var contatti = document.getElementById('contatti')
contatti.addEventListener('click',(e)=>{
    e.preventDefault()
    fullpage_api.moveTo('section1', 0);
})
var toHell = document.querySelector('.toHell')
toHell.addEventListener('click',(e)=>{
    e.preventDefault()
    fullpage_api.moveTo('section4', 0);
})
