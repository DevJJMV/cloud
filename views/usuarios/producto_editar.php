<?php

$id = $_GET['id'];
require_once("../../includes/_db.php");

$consulta = "SELECT * FROM productos WHERE id = ?";
$params = array($id);
$query = sqlsrv_query($conexion, $consulta, $params);

$productos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

if(!$productos) {
    die("Error al recuperar el producto.");
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" value="<?php echo $productos ['descripcion']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" value="<?php echo $productos ['color']; ?>"  class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="number"  id="precio" name="precio"  value="<?php echo $productos ['precio']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad"  value="<?php echo $productos ['cantidad']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">

<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad minima *</label>
<input type="number"  id="cantidamin" name="cantidadmin" value="<?php echo $productos ['cantidad']; ?>" class="form-control" required>
</div>


</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
<option value="Fuentes de poder">Fuentes de poder</option>
    <option value="CPU">CPU</option>
    <option value="Tarjetas madre">Tarjetas madre</option>
    <option value="Tarjetas RAM">Tarjetas RAM</option>
    <option value="Almacenamiento">Almacenamiento</option>
    <option value="GPU">GPU</option>
    <option value="Chasis">Chasis</option>
    <option value="Disipadores">Disipadores</option>
  </select>
    </div>   
</div>
</div>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file"  name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="editar_producto">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>