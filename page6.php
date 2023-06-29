 
 
 <?php
 session_start();
//  var_dump( $_SESSION['login']);
 
 ?>
 <!DOCTYPE html>
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
 				<div class="list" id="list">
 					<a href="">Свадебные платья</a>
 					<a href="">Мужские костюмы</a>
 					<a href="">Аксессуары</a>
 				</div>
 			</div>
 			<div class="menu_a"><a href="">Аксессуары</a></div>
 			<div class="menu_a"><a href="">Услуги</a></div>
 			<div class="menu_a"><a href="">Отзывы</a></div>
 			<div class="menu_a"><a href="">Контакты</a></div>
 			<div class="menu_man" id="login-btn"></div>
 			<div class="burger_block" id="burger_block">
		 		<div id="bline1"></div>
			 	<div id="bline2"></div>
			 	<div id="bline3"></div>
	 		</div>
 		</div>
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

						<input type="submit" value="войти"> <br>
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
				<!-- <div class="reg_submit"><input type="submit" value="Зарегестрироваться"></div> -->
				<input type="submit" name="voiti" value="Зарегестрироваться"> 
			</form>
		</div>
	</div>
	<script src="scriptLogin.js"></script>
	
	<div class="account">
		<div class="account_inner" id="inner">
			<div class="account_img"></div>
			<div class="account_info">
				<div class="account_name">Соколова Виктория</div>
				<div class="account_mail">sokolova192@mail.ru</div>
				<div class="account_tel">+7-999-276-22-99</div>
				<button id="edit_btn">Редактировать</button>
			</div>
		</div>
		<form action="#" id="form">
			<button class="photo">
				Загрузите файл
			</button>
			<div class="data">
				<div class="data_item"><span>Введите фамилию и имя</span><input type="text"></div>
				<div class="data_item"><span>Почта</span><input type="mail"></div>
				<div class="data_item"><span>Номер телефона</span><input type="tel"></div>
				<input type="submit" value="Изменить" id="chng_btn">
			</div>
		</form>
	</div>
	<script src="account.js"></script>


 	<div class="footer">
 		<div class="footer_item footer_logo">
 			
 		</div>
 		<div class="footer_item">
 			<div class="footer_text"><a href="">Свадебные платья</a></div>
 			<div class="footer_text"><a href="">Аксессуары</a></div>
 			<div class="footer_text"><a href="">Услуги</a></div>
 		</div>
 		<div class="footer_item">
 			<div class="footer_text"><a href="">Контакты</a></div>
 			<div class="footer_text"><a href="">Отзывы</a></div>
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