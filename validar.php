<?php
require 'jwt.php';
$jwt = new JWT();

//se tiver preenchido ele entra
if(!empty($_GET['jwt'])) {

	//recebe o jwt
	$token = $_GET['jwt'];
      
	$info = $jwt->validate($token);

	if($info) {
		//nome da pessoa e id do usuario
		echo "Meu nome: ".$info->nome." - ".$info->id_user. " token é valido";
	} else {
		echo "Token Inválido!";
	}

} else {
	//não receber o $jwt
	echo "Token não enviado!";
}