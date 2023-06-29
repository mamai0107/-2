inner = document.getElementById("inner"); //получение элемента с идентификатором Inner который находится в документе html
form = document.getElementById("form"); //получение элемента с идентификатором form который находится в документе html

edit_btn = document.getElementById("edit_btn"); //получение элемента с идентификатором edit_btn из html и сохранение его в переменную edit_btn
chng_btn = document.getElementById("chng_btn"); //получение элемента с идентификатором chng_btn из html и сохранение его в переменную edit_btn

edit_btn.addEventListener("click", function() {
	inner.style.display = "none";
	form.style.display = "flex";
});

chng_btn.addEventListener("click", function() {
	inner.style.display = "flex";
	form.style.display = "none";
});