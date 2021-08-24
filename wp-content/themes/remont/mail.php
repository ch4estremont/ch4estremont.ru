<?
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = 'Сообщение с Формы обратной связи';
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$sub) {$error .= 'Укажите тему обращения. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$address = "remont-mw-client@mendow.ru"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
		$mes = "Имя: ".$name."\n\nТема: " .$sub."\n\nСообщение: ".$message."\n\nТелефон: ".$tel."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo '<h1>Сообщение отправлено</h1><a href="/">Вернуться на главную</a>';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>