<?php
  require_once "biblioteca/funciones.php";
  
  $secciones_validas = [
        "home" => [
            "titulo" => "Bienvenidos"
        ],
        "quienes_somos" => [
            "titulo" => "¿Quienes Somos?"
        ],
        "articulos" => [
            "titulo" => "Catálogo por genero"
        ],
        "producto" => [
          "titulo" => "Detalle de producto"
        ],
        "catalogo" => [
        "titulo" => "Nuestro Catálogo"
        ],
        "contacto" => [
        "titulo" => "Contactanos"
        ],
        "marca" => [
        "titulo" => "Catálogo por marca"
        ],
        "perfil" => [
        "titulo" => "Mi Perfil"
        ]
  ];

    //TERNARIO: Si con esta definido y no es NULL es la superglobal, se le asigna a $seccion, sino, asigna home.
    //$seccion = isset($_GET['con']) ? $_GET['con'] : "home" ;
    
    //null coalesce. Unicamente en PHP7+
    $seccion = $_GET['con'] ?? "home";

    if(array_key_exists($seccion,$secciones_validas)){
        $ver = $seccion;
        $titulo = $secciones_validas[$seccion]['titulo'];
    }else{
        $ver = "404";
        $titulo = "404 - Página no encontrada";
    }
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEOMA | <?= $titulo ?></title>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon/keoma.png">
    <!-- BOOSTRAP5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body id="catalogo">

<div class="container">

    <!-- NAVEGADOR -->
    <section class="row">
        <div class="container sticky-top bg-dark" id="navbg">
                <div class="container text-center">
                    
                        <nav class="navbar navbar-dark navbar-expand-md">

                            <a class="nav-link active" href="index.php?con=home">
                            <img class="img-logo" src="img/nav/logo.png" width="94" alt="logo de keoma">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraNavegacion" aria-controls="barraNavegacion" aria-expanded="false" aria-label="Despliega navegación">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="barraNavegacion">
                                <ul class="navbar-nav justify-content-center">

                                    <div class="dropdown" id="li">
                                    <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Marca
                                    </button>
                                
                                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                        <li id="espaciado">
                                            <a class="dropdown-item bg-dark text-center" href="index.php?con=marca&pro=nk" id="li" ><img src="img/logo/nike.png" width="94" alt="logo de Nike"></a>
                                        </li>
                                        
                                        <li class="espaciado">
                                            <a class="dropdown-item bg-dark text-center" href="index.php?con=marca&pro=ad" id="li" ><img src="img/logo/adidas.png" width="94" alt="logo de Adidas"></a>
                                        </li>
                                        
                                        <li class="espaciado">
                                            <a class="dropdown-item bg-dark text-center" href="index.php?con=marca&pro=nb" id="li" ><img src="img/logo/newb.png" width="94" alt="logo de New Balance"></a>
                                        </li>
                                        
                                        <li class="espaciado">
                                            <a class="dropdown-item bg-dark text-center" href="index.php?con=marca&pro=jr" id="li" ><img src="img/logo/jordan.png" width="94" alt="logo de Jordan"></a>
                                        </li>
                                        
                                        <li class="espaciado">
                                            <a class="dropdown-item bg-dark text-center" href="index.php?con=marca&pro=as" id="li" ><img src="img/logo/asics.png" width="94" alt="logo de asics"></a>
                                        </li>
                                    </ul>                           
                                    </div>

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=catalogo" id="li">Catálogo</a>
                                    </li>

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=articulos&pro=hombres">Hombre</a>
                                    </li>

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=articulos&pro=mujeres">Mujer</a>
                                    </li>

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=articulos&pro=chicos">Niños</a>
                                    </li>    

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=quienes_somos">Empresa</a>
                                    </li>

                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=contacto">Contacto</a>
                                    </li>
                                    
                                    <li class="nav-item espaciado" id="li">
                                        <a class="nav-link active" href="index.php?con=perfil" id="li">Perfil</a>
                                    </li>
                                    
                                </ul>
                            </div>
                
                        </nav> 
                    
                </div>
        </div>
    </section>   

    <?php

    //Comprobamos que el archivo existe.
    require_once file_exists("vistas/$ver.php") ? "vistas/$ver.php" : "vistas/404.php";

    ?>

    <!-- FOOTER -->
    <footer>
      <p class="text-center bg-dark mw-100 text-light">© Alexis Lezcano | 2023</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>