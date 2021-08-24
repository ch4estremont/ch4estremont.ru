<?
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name2'];
	$sub = 'Сообщение с формы Заказать звонок';
	$tel = $_POST['tel2'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите свой телефон. ';}
	if(!$sub) {$error .= 'Укажите тему обращения. ';}
	if(!$error) {
		$address = "remont-mw-client@mendow.ru"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
		$mes = "Имя: ".$name."\n\nТема: " .$sub."\n\nСообщение: Заказан звонок \n\nТелефон: ".$tel."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\n");
		if($send) {echo '<h1>Сообщение отправлено</h1><a href="/">Вернуться на главную</a>';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>