<?php

require_once("config.php");

//select simples
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//Carrega um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carregando usuario pelo login e senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;

//INSERT
$aluno = new Usuario("aluno","@luno");

$aluno->insert();
echo $aluno;

//UPDATE
//$usuario = new Usuario("aluno","@luno");

//$usuario->loadById(7);
//$usuario->update("professor","1234567");

//echo $usuario;



