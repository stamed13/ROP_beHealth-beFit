const buttonC = document.querySelector('.bt-logedC');
const ham_settingsC = document.querySelector('.profile-menuC');
const buttonM = document.querySelector('.bt-logedM');
const ham_settingsM = document.querySelector('.profile-menuM');

buttonC.addEventListener("click", () => {
    ham_settingsC.classList.toggle("active");
})

buttonM.addEventListener("click", () => {
    ham_settingsM.classList.toggle("active");
})