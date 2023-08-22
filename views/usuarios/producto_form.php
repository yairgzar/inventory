
<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form method="POST" id="Form"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Marca *</label>
<input type="text"  id="marca" name="marca" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Material *</label>
<input type="text"  id="material" name="material" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Serie *</label>
<input type="text"  id="serie" name="serie" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Estado *</label>
<input type="text"  id="estado" name="estado" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Usuario Responsable *</label>
<input type="text"  id="usuario_responsable" name="usuario_responsable" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">No. Etiqueta *</label>
<input type="text"  id="no_etiqueta" name="no_etiqueta" class="form-control" required> 
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="direccion">Dirección</option>
    <option value="lab1">Laboratorio 1</option>
    <option value="lab2">Laboratorio 2</option>
    <option value="lab3">Laboratorio 3</option>
    <option value="lab4">Laboratorio 4</option>
    <option value="lab5">Laboratorio 5</option>
    <option value="labMAC">Laboratorio MAC</option>
    <option value="aula124">Aula 124</option>
    <option value="aula124">Aula 125</option>

  </select>
    </div>   
</div>
</div>

<div class="mb-3">
<a href="index.php"><button type = "button" id="btnSubmit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
