// import './style.css'

var navBtn = document.querySelector('#nav-open');
var menu = document.querySelector('#nav-opened');
var closeNav = document.querySelector('#close_nav');
navBtn.onclick = () => {
  menu.hidden = !menu.hidden;
  navBtn.ariaHidden = !navBtn.ariaHidden;
  navBtn.ariaExpanded = !navBtn.ariaExpanded;
}

closeNav.onclick = () => {
    menu.hidden = !menu.hidden;
    navBtn.ariaHidden = !navBtn.ariaHidden;
    navBtn.ariaExpanded = !navBtn.ariaExpanded;
}
