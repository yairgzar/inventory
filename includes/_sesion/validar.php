<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../_db.php");
$matricula=$_POST['matricula'];
$password=$_POST['password'];
session_start();
$_SESSION['matricula']=$matricula;


$conexion=mysqli_connect("localhost","root","","inventory");
$consulta="SELECT*FROM user where matricula='$matricula' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../../views/usuarios/index.php');


}else{
    
    header('location: ../../index.php');
    session_destroy();
}
?>
  
  <?php

  /**
   * Parte de registro de usuarios
   */
 if(isset ($_POST['registrar'])){
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['matricula']) >= 1 && strlen($_POST['password']) >= 1) {
      $nombre = trim($_POST['nombre']);
      $correo = trim($_POST['matricula']);
      $password = trim($_POST['password']);

      $consulta = "INSERT INTO user (nombre, matricula, password)
      VALUES ('$nombre', '$matricula', '$password')";

     mysqli_query($conexion, $consulta);
     mysqli_close($conexion);

 }
}
?>







