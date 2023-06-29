let offset = 0;//cоздание новой переменной с именем "offset" и присвоением значения 0
const sliderLine = document.querySelector('.slider-line');//получение ссылки на элемент HTML с классом "slider-line" и сохранение ее в переменной "sliderLine"
let lvl = 27;

document.querySelector('.slider-next').addEventListener('click', function () {
	offset = offset - lvl;
	if (offset <= -lvl*3) {
		offset = 0 ;
	}
	sliderLine.style.left = offset + 'vw';
});//добавление слушателя события "click" на элемент HTML с классом "slider-next", который вызывает функцию при каждом клике на этот элемент

document.querySelector('.slider-prev').addEventListener('click', function () {
	offset = offset + lvl;
	if (offset > 0) {
		offset = -2*lvl;
	}
	sliderLine.style.left = offset + 'vw';
});

end = document.getElementById("end");
dress_h = document.getElementById("dress_h");
price = document.getElementById("price");
catalog = document.getElementById("catalog");
conteyner = document.getElementById("conteyner");
pic1 = document.getElementById("pic1");
pic2 = document.getElementById("pic2");
img1 = document.getElementById("img1");
img2 = document.getElementById("img2");
img3 = document.getElementById("img3");
h1 = document.getElementsByTagName("h1")[0];

end.addEventListener("click", function(){
	catalog.style.display = "flex";
	conteyner.style.display = "none";
	h1.style.display = "block";
});

dress = document.getElementsByClassName("catalog_item");
console.log(dress);
document.addEventListener("DOMContentLoaded", () => {//добавление слушателя события "DOMContentLoaded" на объект "document", который вызывает функцию при полной загрузке HTML страницы и всех внешних ресурсов (картинок, стилей и т.д.)
    for(let i = 0; i < dress.length; i++) {//начало цикла, который повторяется столько раз, сколько элементов в массиве "dress"
		dress[i].addEventListener("click", function(){
			console.log(this);
			h = this.getElementsByClassName("catalog_name")[0].innerHTML;
			money = this.getElementsByClassName("catalog_price")[0].innerHTML;
			dress_h.innerHTML = h;
			price.innerHTML = money;
			conteyner.style.display = "flex";
			catalog.style.display = "none";
			pic1.style.backgroundImage = 'url("img/wedding/img/dresses/' + (i+1).toString() + '.1.jpg")';
			pic2.style.backgroundImage = 'url("img/wedding/img/dresses/' + (i+1).toString() + '.1.1.jpg")';
			img1.src = 'img/wedding/img/dresses/' + (i+1).toString() + '.jpg';
			img2.src = 'img/wedding/img/dresses/' + (i+1).toString() + '.1.jpg';
			img3.src = 'img/wedding/img/dresses/' + (i+1).toString() + '.1.1.jpg';
			h1.style.display = "none";
		});
	}
 });
