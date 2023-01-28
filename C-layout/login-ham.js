const buttonC = document.querySelector('.bt-logedC');
const ham_settingsC = document.querySelector('.ham-settingsC');
const buttonM = document.querySelector('.bt-logedM');
const ham_settingsM = document.querySelector('.ham-settingsM');

buttonC.addEventListener("click", () => {
    ham_settingsC.classList.toggle("active");
})

buttonM.addEventListener("click", () => {
    ham_settingsM.classList.toggle("active");
})