burger_block = document.getElementById("burger_block");//получает элемент на странице с id "burger_block" и сохраняет его в переменную burger_block
burger_menu = document.getElementById("burger_menu");//получает элемент на странице с id "burger_menu" и сохраняет его в переменную burger_menu
bline1 = document.getElementById("bline1");//получает элемент на странице с id "bline1" и сохраняет его в переменную bline1
bline2 = document.getElementById("bline2");//получает элемент на странице с id "bline2" и сохраняет его в переменную bline2
bline3 = document.getElementById("bline3");//получает элемент на странице с id "bline3" и сохраняет его в переменную bline3
let l = false

burger_block.addEventListener("click", function(){
	if (!l) {
		l = true;
		burger_menu.style.right = "0";
		bline2.style.display = "none";
		bline3.style.marginTop = "-3px";
		bline3.style.transform = "rotate(-45deg)";
		bline1.style.transform = "rotate(45deg)";
	} else {
		l = false;
		burger_menu.style.right = "-33%";
		bline2.style.display = "block";
		bline3.style.marginTop = "0";
		bline3.style.transform = "rotate(0deg)";
		bline1.style.transform = "rotate(0deg)";
	}
});//Затем добавляется событие "click" на элемент с id "burger_block", 
//и при клике на элемент происходит функция, проверяющая, открыто ли уже меню. 
//С помощью переменной l определяется текущее состояние меню (открыто или закрыто), 
//и в зависимости от этого состояния меняются свойства CSS элементов на странице для отображения 
//анимации раскрытия меню или его скрытия

let flag = false;
list = document.getElementsByClassName("list")[0];
list_btn = document.getElementById("list_btn");
list_btn.addEventListener("click", function(){
	if (flag) {
		list.style.display = "none";
		flag = false;
	}
	else {
		list.style.display = "flex";
		flag = true;
	}
});
//Далее, определяется логическая переменная flag, 
//которая используется для проверки состояния выпадающего меню на маленьких 
//устройствах. Также добавляется событие "click" на элемент с id "list_btn", и при клике 
//на элемент меню на маленьких устройствах отображается или скрывается в зависимости от текущего 
//состояния флага flag