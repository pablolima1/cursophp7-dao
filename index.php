<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

//Carrega um usuàrio
/*
$root = new Usuario();

$root->loadById(3);

echo $root;*/

// carrega uma lista de usuarios
/*
$lista = Usuario::getList();

echo json_encode($lista);*/

// carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("jose", "1234567890");

echo $usuario;

 ?>