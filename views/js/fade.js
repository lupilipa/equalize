const fade = document.querySelector('.fade')
const menuHamb = document.querySelector('#menuHambId')

window.addEventListener('click', (event) => {
    if (event.target === fade) {
        menuHamb.checked = false;
    }
});