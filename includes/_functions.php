<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_producto':
            eliminar_producto();

        break;        
        case 'editar_producto':
        editar_producto();

        break;

        case 'insertar_productos':
        insertar_productos();

        break;    
    }

}

function insertar_productos(){

    global $conexion;
    extract($_POST);



                


    $consulta="INSERT INTO productos (nombre, marca, color, material, serie, estado, usuario_responsable, no_etiqueta, categorias)
    VALUES ('$nombre', '$marca', '$color', $material, $serie, $estado, $usuario_responsable ,$no_etiqueta, '$categorias');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");

}
function editar_producto(){

    global $conexion;
    extract($_POST);

   
    $consulta="UPDATE productos SET nombre = '$nombre', marca = '$marca', color = '$color', material = '$material', serie = '$serie', estado = '$estado', usuario_responsable = '$usuario_responsable', no_etiqueta = '$no_etiqueta', categorias = '$categorias' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
?>