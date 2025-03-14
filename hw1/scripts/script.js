let burgerButtonOpen = document.getElementById('infoBurgButton');
let burgerButtonClose = document.getElementById('infoCloseBurgButton');
let menu = document.getElementById('infoBurgLinks')


burgerButtonClose.addEventListener('click', returner);
burgerButtonOpen.addEventListener('click', burgerMenu);

function burgerMenu(){

    burgerButtonClose.classList.remove('hidden')
    burgerButtonOpen.classList.add('hidden')
    menu.classList.remove('hidden')
}
function returner(){
    burgerButtonClose.classList.add('hidden')
    burgerButtonOpen.classList.remove('hidden')
    menu.classList.add('hidden')
}