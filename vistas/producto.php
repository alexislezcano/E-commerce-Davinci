<?PHP

    require_once "biblioteca/productos.php";

    $idProducto = $_GET['id'] ?? FALSE;

    $articulo = producto_id($idProducto);
   
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- DETALLE DE PRODUCTO -->
<div class="d-inline-flex justify-content-center">
    <div>
    

            <?PHP if(!empty($idProducto)){ ?>

            <div class="row p-3 margin bg-dark"> 

                        <div class="mt-3 col-12 col-lg-6">

                            <div class="card mb-3 justify-content-center box-sizing-inherit">
                                    <img src="img/imgp/<?= $articulo['imagen'] ?>" alt=" Portada de <?= $articulo['modelo'] ?> " class="card-img-top">
                            </div>
                            
                        </div>

                        <div class="col-12 col-lg-6 bg-dark text-light centrar-arriba">
                            <p class="fs-6 mb-10 fw-normal text-light"><?= $articulo['envio'] ?></p>
                            <h3 class="card-title tpre"><?= $articulo['modelo'] ?></h3>
                            <p class="card-text mt tpre"><?=($articulo['descripcion']) ?></p>
                        
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-light bg-dark"><span class="fw-normal">Color  </span> <?= $articulo['color'] ?></li>
                                <li class="list-group-item text-light bg-dark"><span class="fw-normal">Talle  </span> <?= $articulo['talle'] ?></li>
                            </ul>
                        
                            <div class="fs-5 mb-3 mt-3 fw-normal text-center text-light">
                                <hr>
                                <span class="fw-normal">$</span> <?= $articulo['precio'] ?>
                            </div>
                        
                        </div>

                        
            
            </div>


            <?PHP } else { ?>
                <div class="col-12 text-danger">No se encontrado el producto buscado</div>
            <?PHP } ?>

        
    </div>

</div>

<hr class="text-light">

<!-- GALLERIA DE FOTOS -->
    <h2 class="text-center text-light mt-5">Nueva colección</h2>

    <section class="row">
            <div class="grid-container" id="gallery">
                <div
                class="grid-item tall"
                style="background-image: url(img/galery/offwhite.png)"
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/nikemx.png);
                "
                ></div>
        
                <div
                class="grid-item wide"
                style="
                    background-image: url(img/galery/nikebb.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/asic.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/balance.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/jordan1.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/jordankd.png);
                "
                ></div>
                <div
                class="grid-item"
                style="background-image: url(img/galery/new.png)"
                ></div>
                <div
                class="grid-item tall wide"
                style="
                    background-image: url(img/galery/newb.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/nikedunk.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/nikeforce.png);
                "
                ></div>
                <div
                class="grid-item"
                style="
                    background-image: url(img/galery/newbb.png);
                "
                ></div>
            </div>
    </section>