const hamburger = document.querySelector(".hamburger");
const nav_menu = document.querySelector("#header-nav");
const body = document.querySelector('body');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav_menu.classList.toggle("active");
    body.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener(
"click", () => {
    hamburger.classList.remove("active");
    nav_menu.classList.remove("active");
    body.classList.remove("active");
}))