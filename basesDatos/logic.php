<?php
$usuario=$_POST['username'];
$pass=$_POST['password'];
echo 'hola mundo';
echo $usuario;
if($usuario!=NULL and $pass!=NULL){
	//session_start();
	//$_SESSION['usuario']=$_POST['login-username'];
	//$_SESSION['pass']=$_POST['login-password'];
	echo 'exito al entrar';
}else{
	echo 'datos erroneos';
	//echo '<a href=''"login.php"''>regresar</a>';
}
?>
