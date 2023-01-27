const button = document.querySelector('.bt-loged');
const ham_settings = document.querySelector('.ham-settings');

hamburger.addEventListener("click", () => {
    button.classList.toggle("active");
    ham_settings.classList.toggle("active");
})