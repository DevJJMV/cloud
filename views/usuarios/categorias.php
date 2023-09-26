<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'Fuentes de poder'?>">
Fuentes de poder (PSU)
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'CPU'?>">
CPU (Procesadores)
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'Tarjetas madre'?>">
Tarjetas madre (Motherboards)
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'Tarjetas RAM'?>">
Memoria RAM
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'Almacenamiento'?>">
Almacenamiento 
</a>
</div>
<div class="col-sm-4">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'GPU'?>">
GPU (Tarjetas de video)
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'Chasis'?>">
Chasis
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'Disipadores'?>">
Disipadores
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>