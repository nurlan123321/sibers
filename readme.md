Sibers Testwork

Для Back-end использовал Laravel 5, MySQL

Для Front-end использовал Bootstrap

git clone https://github.com/nurlan123321/sibers.git

Фреймворк Laravel 5.4 требует:

PHP >= 5.6.4
Файл для БД - дамп

	DATABASE.sql

Файл конфиг .env :

	DB_CONNECTION=mysql

	DB_HOST=127.0.0.1

	DB_PORT=3306

	DB_DATABASE=DATABASE NAME (Укажите здесь если не указано имя БД)

	DB_USERNAME=USERNAME (Укажите здесь если не указано имя пользователя)

	DB_PASSWORD=PASSWORD (Укажите здесь если есть пароль)
		
Роутинг

	routes/web.php
	
Контроллеры находятся:

	app/Http/Controllers
	
Модели находятся

	app/
	   Register.php

Виды находятся

	resources/views/
