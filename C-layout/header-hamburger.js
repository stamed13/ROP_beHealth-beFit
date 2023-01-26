const hamburger = document.querySelector(".hamburger");
const nav_menu = document.querySelector("#header-nav");
const body = document.querySelector('body');
const bt_loged = document.querySelector('.bt-loged');
const ham_settings = document.querySelector('.ham-settings');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav_menu.classList.toggle("active");
    body.classList.toggle("active");
})

hamburger.addEventListener("click", () => {
    bt_loged.classList.toggle("login");
    ham_settings.classList.toggle("login");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener(
"click", () => {
    hamburger.classList.remove("active");
    nav_menu.classList.remove("active");
    body.classList.remove("active");
}))

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener(
    "click", () => {
        bt_loged.classList.remove("login");
        ham_settings.classList.remove("login");
    }))