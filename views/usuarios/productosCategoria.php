<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Productos</h1></center>
<a href="producto_agregar.php"><input  class="btn btn-primary" type="button" value="Agregar producto"></a>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Código</th>
<th>Nombre</th>
<th>Marca</th>
<th>Color</th>
<th>Material</th>
<th>Serie</th>
<th>Estado</th>
<th>Usuario Responsable</th>
<th>No. Etiqueta</th>
<th>Ubicación</th>
<th>Acciones</th>


</tr>

</thead>

<tbody>

<?php
$categoria = $_GET['categoria'];
extract($_POST);
$sql = "SELECT * FROM productos WHERE categorias = '$categoria'";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $row ){

// ...

?>
<style>
      .problema{
        background-color: <?php echo $color?>;
        color: #000000;
    }
</style>

<tr>
<td <?php echo  'class="'.$row['categorias'] .'"'; ?>><?php echo $row['id']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['marca']; ?></td>
<td><?php echo $row['color']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['serie']; ?></td>
<td><?php echo $row['estado']; ?></td>
<td><?php echo $row['usuario_responsable']; ?></td>
<td><?php echo $row['no_etiqueta']; ?></td>
<td><?php echo $row['categorias']; ?></td>

<td>
  <a href="producto_editar.php?id=<?php echo $row['id']?>">
    <div">
      Editar
    </div>
  </a>
  <a>|</a>
  <a href="producto_eliminar.php?id=<?php echo $row['id']?>">
    <div">
    Eliminar
    </div>
  </a>
</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html>