const hamburger = document.querySelector(".hamburger");
const nav_menu = document.querySelector("#header-nav");
const content = document.querySelector('#content');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav_menu.classList.toggle("active");
    content.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener(
"click", () => {
    hamburger.classList.remove("active");
    nav_menu.classList.remove("active");
    content.classList.remove("active");
}))