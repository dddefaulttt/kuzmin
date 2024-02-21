let modal = document.querySelector('.modalMenu');
let burgerButton = document.querySelector('.headerNameBlock');
let arrow = document.querySelector('.arrowBurger');
let closeB = document.querySelector('.closeBurger');
let background = document.querySelector('.modalWrapper');
let openProfile = document.querySelector('.openProfile');
let profile = document.querySelector('.profile');
let modalProfile = document.querySelector('.modalProfile');
let closeModal = document.querySelectorAll('.closeModal');
let modalEditMail = document.querySelector('.modalEditMail');
let editPassword = document.querySelector('.editPassword');
let modalProfileNone = document.querySelector('.modalProfile--none');
let modalEditPassword = document.querySelector('.modalEditPassword');
let editMail = document.querySelector('.editMail');
let backProfile = document.querySelectorAll('.backProfile');
let filterZ = document.getElementById('filter');

function allwindowClose() {
    modal.classList.remove('modalMenu--show');
    background.classList.remove('modalWrapper--show');
    arrow.classList.remove('arrowBurger--rotate');
    background.removeEventListener('click', allwindowClose); 
}/// функция для закрытия модального окна "Профиль"

burgerButton.addEventListener('click',function(){
    modal.classList.toggle('modalMenu--show');
    background.classList.toggle('modalWrapper--show');
    arrow.classList.toggle('arrowBurger--rotate');
    
    
    
    filterZ.style.display = none;


    
    background.addEventListener('click',allwindowClose)
}) /// открытие бургер меню, с созданием события для его скрытия

openProfile.addEventListener('click',function(){
    profile.classList.toggle('profile--show');
    modal.classList.remove('modalMenu--show');
    background.classList.remove('modalWrapper--show');
}) /// кнопка открытия модального окна "Профиль"

for (let i = 0; i < closeModal.length; i++) {
    closeModal[i].addEventListener('click',function(){
        profile.classList.remove('profile--show');
        modalProfile.classList.remove('modalProfile--none');
        modalEditMail.classList.remove('modalEditMail--show');
        modalEditPassword.classList.remove('modalEditPassword--show');
    })
} /// Закрытие всех модальных окон

editMail.addEventListener('click',function(){
    modalProfile.classList.add('modalProfile--none');
    modalEditMail.classList.add('modalEditMail--show');
}) /// кнопка открытия модального окна "Редактирование почты"

editPassword.addEventListener('click',function(){
    modalProfile.classList.add('modalProfile--none');
    modalEditPassword.classList.add('modalEditPassword--show');
}) /// кнопка открытия модального окна "Редактирование пароля"


for (let i = 0; i < backProfile.length; i++) {
    backProfile[i].addEventListener('click',function(){
        modalProfile.classList.remove('modalProfile--none');
        modalEditMail.classList.remove('modalEditMail--show');
        modalEditPassword.classList.remove('modalEditPassword--show');
    })
} /// Кнопка "Назад" для модальных окон "Редактирование почты" и "Редактирование пароля"



document.addEventListener('mouseup', function(e) {;
    if (!modalProfile.contains(e.target) && !modalProfile.classList.contains('modalProfile--none')) {
        profile.classList.remove('profile--show');
    }
    if (!modalEditMail.contains(e.target) && modalEditMail.classList.contains('modalEditMail--show')) {
        profile.classList.remove('profile--show');
        modalProfile.classList.remove('modalProfile--none');
        modalEditMail.classList.remove('modalEditMail--show');
    } 
    if (!modalEditPassword.contains(e.target) && modalEditPassword.classList.contains('modalEditPassword--show')) {
        profile.classList.remove('profile--show');
        modalProfile.classList.remove('modalProfile--none');
        modalEditPassword.classList.remove('modalEditPassword--show');
    } 
}); /// Закрытие модальных окон, при клике вне модального окна





