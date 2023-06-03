<?PHP
    require_once "biblioteca/productos.php";

    $productoSeleccionado = $_GET['pro'] ?? FALSE;

    $articulo = catalogo_name($productoSeleccionado);


?>



<!DOCTYPE html>
<html lang="es">
<head>
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>


<!-- CATÁLOGO -->
<div class="d-flex justify-content-center" id="catalogo">
    <div>
        <h1 class="text-center text-light">Nuestro Catálogo</h1>
        <div class="container">
            

            <?PHP if(!empty($articulo)){ ?>
             <div class="row">   
                <?PHP foreach ($articulo as $shoes){ ?>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 justify-content-center box-sizing-inherit">
                        <img src="img/imgp/<?= $shoes['imagen'] ?>" alt=" Portada de <?= $shoes['modelo'] ?> " class="card-img-top">

                        <div class="card-body">
                            <p class="fs-6 m-0 fw-bold tpre"><?= $shoes['envio'] ?></p>
                            <h3 class="card-title"><?= $shoes['modelo'] ?></h3>
                            <p class="card-text"><?= acortar_palabras($shoes['descripcion']) ?>
                            </p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold fs-5">Color</span> <?= $shoes['color'] ?></li>
                            <li class="list-group-item"><span class="fw-bold fs-5">Talle</span> <?= $shoes['talle'] ?></li>
                        </ul>
                        <div class="card-body">
                            <div class="fs-5 mb-3 fw-bold text-center tpre"><span class="fw-bold">$</span> <?= $shoes['precio'] ?></div>
                            <a href="index.php?con=producto&id=<?= $shoes['id']?>" class="color btn btn- w-100 fw-bold" id="estilo-b">VER MÁS</a>
                        </div>
                    </div>
                </div>
                <?PHP } ?>
            
            </div>
            <?PHP } else { ?>
                <div class="col-12 text-danger">No se encontraron zapatillas</div>
            <?PHP } ?>
        </div>
    </div>

</div>