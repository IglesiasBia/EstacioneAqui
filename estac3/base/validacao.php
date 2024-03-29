<?php
include "mensagens.php";
// Verifica se houve POST e se o usuário ou a senha estão vazios
if (!empty($_POST) and (empty($_POST['usuario']) or empty($_POST['senha']))) {
	header("Location: ./index.php"); exit;
}

// Tenta se conectar ao servidor MySQL e ao DB
$con = mysqli_connect('localhost', 'root', '', 'sistema_ge') or trigger_error(mysqli_error($con));

// Faz com que caracteres especiais sejam válidos na query do SQL
$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

// Validação do usuário/senha digitados
// $sql  = "select id, nome, nivel from usuarios where (usuario = '". $usuario ."') ";
// $sql .= "and (senha = '". $senha ."') and (ativo = 1) limit 1";

$sql = "select funcionario.id_func, func_usu.func_usu, funcionario.nivel_func 
from funcionario 
join func_usu
on funcionario.id_func = func_usu.id_func 
where func_usu.func_usu = '$usuario' and func_usu.senha_func='$senha' and funcionario.status_func='1';";

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	// header('Content-Type: text/html; charset=utf-8');
	// echo "Login invalido!"; 
	// echo $sql;
	// header("Location: /estacione/estac3/index.php?msg=2");
	header('Location: /estacione/estac3/index.php?msg=12');
	exit;
} else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysqli_fetch_assoc($query);
	
////// 4.0 - Salvando os dados na sessão do PHP ////////

	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id_func'];
	$_SESSION['Usuario'] = $resultado['func_usu'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel_func'];

	header("Location: ./pages/dash.php"); exit;
	// Redireciona o visitante
	// switch($_SESSION['UsuarioNivel']){
	// 	case 1: header("Location: ../restrito1.php"); exit;break;
	// 	case 2: header("Location: ../restrito2.php"); exit;break;

	// }
}

?>