const loginBtn = document.getElementById("login-btn"); //содержит ссылку на элемент с идентификатором "login-btn"
const regBtn = document.getElementById("reg-btn"); //regBtn содержит ссылку на элемент с идентификатором "reg-btn".
const loginModal = document.getElementById("login"); //содержит ссылку на элемент с идентификатором "login".
const closeBtn = document.getElementsByClassName("close")[0];//содержит ссылку на первый элемент с классом "close"
const loginBlock = document.getElementById("login-block");//содержит ссылку на элемент с идентификатором "login-block"
const regBlock = document.getElementById("reg-block");//содержит ссылку на элемент с идентификатором "reg-block"


loginBtn.onclick = function() {
  loginModal.style.display = "flex";
} //установка обработчика события "click" на кнопку loginBtn, которая открывает модальное окно.

closeBtn.onclick = function() {
  loginModal.style.display = "none";
  loginBlock.style.display = "flex";
  regBlock.style.display = "none";
}//установка обработчика события "click" на кнопку closeBtn, которая закрывает модальное окно и показывает блок loginBlock и скрывает блок regBlock

regBtn.onclick = function() {
  loginBlock.style.display = "none";
  regBlock.style.display = "flex";
}//установка обработчика события "click" на кнопку regBtn, которая показывает блок regBlock и скрывает блок loginBlock

window.onclick = function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
    loginBlock.style.display = "flex";
    regBlock.style.display = "none";
  }
}//установка обработчика события "click" на окно, который закрывает модальное окно и показывает блок loginBlock и скрывает блок regBlock, когда пользователь нажимает в любом месте за его пределами

submit1 = document.getElementById("submit1");
submit2 = document.getElementById("submit2");

submit1.addEventListener("click", function() {
  window.location.href = "page6.php";
});//установка обработчика события "click" на кнопку submit1, который перенаправляет пользователя на страницу page6.php
