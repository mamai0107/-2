<?php
include "connect.php";
session_start();
 var_dump( $_SESSION['login']);
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="style.css"> <!--ссылка на стили-->
 	<title>Mamaeva Atelier</title> <!--заголовок файлла-->
 </head>

 <body>
 
 	<div class="menu"> <!--rкласс меню-->
 		<a class="logo" href="index.php"></a> <!--ссылка на главную-->
 		<div class="menu_links">
 			<div class="menu_a"><a id="list_btn">Свадебные платья</a> <!--создание выпадающего менню-->
 				<div class="list" id="#">
 					<a href="dresses.php">Свадебные платья</a> <!--ссылка на свадебные платья -->
 					<a href="costumes.php">Мужские костюмы</a> <!--ссылка на мужские костюмы-->
 					<a href="accessories.php">Аксессуары</a> <!--ссылка на аксессуары-->
 				</div>
 			</div>
 			<!--ссылки-->
 			<div class="menu_a"><a href="accessories.php">Аксессуары</a></div>
 			<div class="menu_a"><a href="services.php">Услуги</a></div>
 			<div class="menu_a"><a href="reviews.php">Отзывы</a></div>
 			<div class="menu_a"><a href="contacts.php">Контакты</a></div>
 			<div class="menu_man" id="login-btn"></div>
 			<div class="burger_block" id="burger_block">
 				<div id="bline1"></div>
 				<div id="bline2"></div>
 				<div id="bline3"></div>
 			</div>
 		</div>
 	</div>
 	<!--создание авторизации-->
 	<form class="auth_form" action="php-handlier/auth.php" method="post">
 	<div class="login_wrapper" id="login">
 		<div class="login" id="login-block">
 			<span id="close" class="close">&times;</span>
 			<div class="auto">
 				<form action="#">
 					<div class="auto_h">АВТОРИЗАЦИЯ</div>

 					<div class="auto_login"> 
 						Логин <br>
 						<input type="text" name="login"> 
 					</div>

 					<div class="login_password">
 						Пароль <br>
 						<input type="password" name="password">
 					</div>

 					<div class="auto_forget">
						<input type="submit" name="voiti" value="Отправить"> 
 						<!-- <a href="page6.php" id="submit1">Войти</a><br> //убрать -->
 						<span>Забыли пароль?</span>
 					</div>
 				</form>
 			</div>
			<div class="message">
				<?php
				if (isset($_SESSION['message'])) {
					echo '<p class="msg">' . $_SESSION['message'] . '</p';
				} else {
					echo ' ';
				}
				unset($_SESSION['message']);
				
				?>
			</div>
 			<div class="first">
 				<div class="first_text">Впервые на сайте?</div>
 				<button id="reg-btn">зарегестрироваться</button>
 			</div>
 		</div>
		
 		</form>
 		<!--создание регистрации-->
 		<div class="reg" id="reg-block">
		 <form class="auth_form" action="php-handlier/reg.php" method="post">
 				<div class="reg_h">РЕГИСТРАЦИЯ</div>
 				<div class="reg_item">
 					Имя <br>
 					<input type="text" name="name">
 				</div>
 				<div class="reg_item">
 					Фамилия <br>
 					<input type="text" name="surname">
 				</div>
 				<div class="reg_item">
 					Почта <br>
 					<input type="text" name="email">
 				</div>
 				<div class="reg_item">
 					Пароль <br>
 					<input type="text" name="password">
 				</div>
 				<div class="reg_item">
 					Повторите пароль <br>
 					<input type="text" name="conpassword">
 				</div>
 				<!-- <div class="reg_submit"><a href="page6.php" id="submit2">Зарегестрироваться</a></div> ссылка при нажатии на кнопку на другую страницу -->
				 <input type="submit" name="voiti" value="Зарегестрироваться"> 
 			</form>
 		</div>
 	</div>
 	<script src="scriptLogin.js"></script> <!--ссылка на JS-->
 	<script type="text/javascript" src="burger.js"></script> <!--ссылка на JS-->

 	<!-- 
	<div class="conteyner" id=conteyner>
		<div class="slider">
			<div class="slider-line">
				<img id="img1" src="img/wedding/img/dresses/1.jpg" alt="">
				<img id="img2" src="img/dress9.png" alt="">
				<img id="img3" src="img/dress3.png" alt="">
			</div>
		</div>
		<div class="slider-btns"><button class="slider-prev">←</button>
		<button class="slider-next">→</button></div>
		<div class="right_pics">
			<div id="pic1" class="pic"></div>
			<div id="pic2" class="pic"></div>
		</div>
		<div class="slider_text">
			<button id="end">← назад в каталог</button>
			<div class="dress_h" id="dress_h">Свадебное платье Ariel</div>
			<div class="dress_info">
				<div class="info_h">Метки:</div>
				<div class="info_text">Со съемными рукавами, разрез на ноге, с открытым верхом</div>
			</div>
			<div class="dress_info">
				<div class="info_h">Цена:</div>
				<div class="info_text" id="price">56000 р.</div>
			</div>
		</div>
	</div> -->
 	<h1>Свадебные аксессуары</h1> <!--заголовок-->
 	<div class="catalog catalog_ac" id="catalog">
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Свадебный серьги</div> <!--название аксессуара-->
 			<div class="catalog_price">3500 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Свадебные серьги с жемчугом</div>
 			<div class="catalog_price">3000 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Свадебные серьги с жемчугом</div>
 			<div class="catalog_price">5000 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Гребень и серьги </div>
 			<div class="catalog_price">7000 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Тонкий серебряный ободок</div>
 			<div class="catalog_price">4000 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Тонкий ободок с жемчугом</div>
 			<div class="catalog_price">5500 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Тонкий золотистый ободок</div>
 			<div class="catalog_price">3500 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Мужской кожаный ремень синий</div>
 			<div class="catalog_price">5000 р.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img_1"></div>
 			<div class="catalog_name">Мужской кожаный ремень черный</div>
 			<div class="catalog_price">5000 р.</div>
 		</div>
 	</div>
 	<script src="script.js"></script>
 	<!--футер-->
 	<div class="footer">
 		<div class="footer_item footer_logo">

 		</div>
 		<div class="footer_item">
 			<div class="footer_text"><a href="dresses.php">Свадебные платья</a></div>
 			<div class="footer_text"><a href="accessories.php">Аксессуары</a></div>
 			<div class="footer_text"><a href="services.php">Услуги</a></div>
 		</div>
 		<div class="footer_item">
 			<div class="footer_text"><a href="contacts.php">Контакты</a></div>
 			<div class="footer_text"><a href="reviews.php">Отзывы</a></div>
 		</div>
 		<div class="footer_item">
 			<a class="footer_text vk" href=""></a>
 			<a class="footer_text inst" href=""></a>
 			<a class="footer_text tg" href=""></a>
 		</div>
 		<div class="footer_item">
 			<div class="footer_text"><span class="metro"></span>Славянский бульвар/ Парк победы</div>
 			<div class="footer_text"><span class="gps"></span>г.Москва, ул Нежинская д 7</div>
 			<div class="footer_text"><span class="tel"></span>+7-925-601-29-11</div>
 		</div>
 	</div>
 </body>

 </html>