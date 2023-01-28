const button = document.querySelector('.bt-loged');
const ham_settings = document.querySelector('.ham-settings');

button.addEventListener("click", () => {
    ham_settings.classList.toggle("active");
})