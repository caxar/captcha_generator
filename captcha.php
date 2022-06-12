<?php
	session_start();

	header('Content-Type: image/png');
	// функция генерации шифрования md5 
	$md5_hash = md5(rand(0, 500));
	// Возвращение строки от 0 до 5 
	$captcha = substr($md5_hash, 0, 5);

	// Создание сессии и гооврим что сессия будем иметь случайное значение 
	$_SESSION['captcha'] = $captcha;

	// Создание изображение width, height 
	$image = imagecreate(200, 50);
	// Создание цвета  
	$bg_color = imagecolorallocate($image, 0, 0, 0);
	$text_color = imagecolorallocate($image, 255,255,255);
	// Создание заголовка изображения
	imagestring($image, 5, 70,  rand(1, 15), $captcha, $text_color);

	imagepng($image); // Отправка изображения 
	// Уничтожение изображения
	imagedestroy($image);
	
?>