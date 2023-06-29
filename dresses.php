 <!DOCTYPE html> <!--ТОЖЕ САМОЕ ЧТО И В ACCESSORIES и добавление слайдера-->
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="style.css">
 	<title>Mamaeva Atelier</title>
 </head>
 <body>
 	<div class="menu">
 		<a class="logo" href="index.php"></a>
 		<div class="menu_links">
 			<div class="menu_a"><a id="list_btn">Свадебные платья</a>
 				<div class="list" id="#">
 					<a href="dresses.php">Свадебные платья</a>
 					<a href="costumes.php">Мужские костюмы</a>
 					<a href="accessories.php">Аксессуары</a>
 				</div>
 			</div>
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
 	<div class="burger_menu" id="burger_menu">
 		<a href="dresses.php">Свадебные платья</a>
 		<a href="costumes.php">Мужские костюмы</a>
 		<a href="accessories.php">Аксессуары</a>
	 	<a href="services.php">Услуги</a>
	 	<a href="reviews.php">Отзывы</a>
	 	<a href="contacts.php">Контакты</a>
 	</div>
 	<div class="login_wrapper" id="login">
	 	<div class="login" id="login-block">
	 		<span id="close" class="close">&times;</span>
			<div class="auto">
			<form class="auth_form" action="php-handlier/auth.php" method="post">
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
						<!-- <a href="page6.php" id="submit1">Войти</a><br> -->
						<input type="submit" name="voiti" value="Отправить">
						<span>Забыли пароль?</span>
					</div>
				</form>
			</div>
			<div class="first">
				<div class="first_text">Впервые на сайте?</div>
				<button id="reg-btn">зарегестрироваться</button>
			</div>
		</div>
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
				<!-- <div class="reg_submit"><a href="page6.php" id="submit2">Зарегестрироваться</a></div> -->
				<input type="submit" name="voiti" value="Зарегестрироваться"> 
			</form>
		</div>
	</div>
	<script src="scriptLogin.js"></script>
	<script type="text/javascript" src="burger.js"></script>


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
		<!--создание класса со слайдером-->
		<div class="slider_text">
			<button id="end">← назад в каталог</button> <!--кнопка-->
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
	</div>
	<h1>Свадебные платья</h1>
 	<div class="catalog" id="catalog">
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье Ariel</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье Marina</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье Vesta</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье ROMANS</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье AMBRA</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье SELIN</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье ELZA</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье ALFA</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 		<div class="catalog_item">
 			<div class="catalog_img"></div>
 			<div class="catalog_name">Свадебное платье MOLOKO</div>
 			<div class="catalog_price">43000 руб.</div>
 		</div>
 	</div>
 	<script src="script.js"></script>

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