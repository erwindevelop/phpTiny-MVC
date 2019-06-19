require('./bootstrap');

const main = document.querySelector('#body');
const menubutton = document.querySelector('#togglebutton');
const menu = document.querySelector('#menu');
const menubrand = document.querySelector('#menu-brand');
const menunav = document.querySelector('#menu-nav');
const menuitems = document.querySelectorAll('.menu-nav-item');

menubutton.addEventListener('click', toggleMenu);

let showmenu = false;

function toggleMenu()
{
    if(!showmenu)
    {
        menubutton.classList.add('close');
        menu.classList.add('show');
        menunav.classList.add('show');
        menubrand.classList.add('show');
        menuitems.forEach(item => item.classList.add('show'));
    
        showmenu = true;
    }

    else

    {
        menubutton.classList.remove('close');
        menu.classList.remove('show');
        menunav.classList.remove('show');
        menubrand.classList.remove('show');
        menuitems.forEach(item => item.classList.remove('show'));

        showmenu = false;
    }
}