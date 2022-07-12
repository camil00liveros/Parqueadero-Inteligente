<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","id17727959_usuario","#AEHXo>2[bU}_v[S","id17727959_usuarios");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

  require("home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

