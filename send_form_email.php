<?php

$name = $_POST[ 'name' ]; // required
$telephone = $_POST[ 'telephone' ]; // not required
$message = $_POST[ 'message' ]; // required

$mail = "Name: $name\nPhone: $telephone\nMessage: $message";

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );
if ( mail( "albka1986@gmail.com", "AnimalStyle: Order", $mail, "Content-type:text/html;charset=utf-8" ) ) {
	echo "Заявка отправлена. Нажмите назад, чтобы вернуться на предыдущую страницу";
	exit;

} else {
	echo "error";
}
?>