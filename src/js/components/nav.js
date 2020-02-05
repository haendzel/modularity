const burger = document.querySelector('.burger');
const navMobile = document.querySelector('.nav-mobile');
let click = 0;

const openNav = () => {
    if (click % 2 == 0) {
        navMobile.style = 'display: block';
        burger.classList.add('menu-visible');
    } else {
        navMobile.style = 'display: none;';
        burger.classList.remove('menu-visible');
    }
    click++;
}

burger.addEventListener('click', openNav);