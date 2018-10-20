<?php
require 'jwt.php';

$jwt = new JWT();

$token = $jwt->create(array("id_user"=>123, "nome"=>"Erivan Cledson"));

echo "TOKEN: ".$token;


//testando o token http://localhost/jwt_validar/validar.php?jwt=(adiciona o token aqui)
//ex: http://localhost/jwt_validar/validar.php?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF91c2VyIjoxMjMsIm5vbWUiOiJFcml2YW4gQ2xlZHNvbiJ9.r8vCfC95FevyE1q_9hvE-leONQljQDjfuXiptbSbYp0