<?PHP

/**
 * Devuelve el catálogo completo
 * @return array - Un array con el catálogo completo de productos en stock. 
 */
function catalogo_completo(): array


{
    $catalogoJSON = file_get_contents('datos/productos.json');
    $resultado = json_decode($catalogoJSON, TRUE);

    return $resultado;
}


 /**
 * Devuelve los datos de un producto en particular.
 * @param int $idProducto el ID único del producto a mostrar.
 * @param string $genero representa el genero que se devulve en el catálogo de artículos.
 * @var mixed $z (zapas) Un string con el nombre de las zapatillas a buscar.
 * @var array $articulo es un array que contiene información sobre los productos del catálogo. 
 * @return mixed Un array con los datos datos del producto encontrado o null en caso de que no se encuentre nada.
 */
 function catalogo_genero(string $genero):array{

    $resultado = [];
    $articulo  = catalogo_completo();

    foreach ($articulo as $z) {
        if($z['genero'] == $genero){
            $resultado[] = $z;
        }      
    }

    return $resultado;

}


/**
 * @param string $name representa e indica el nombre que se desea buscar en el catálogo de artículos.
 * @param string $z (zapas) Un string con el nombre de las zapatillas a buscar.
 */
function catalogo_name(string $name):array{

    $resultado = [];
    $articulo  = catalogo_completo();

    foreach ($articulo as $z) {
        if($z['name'] == $name){
            $resultado[] = $z;
        }      
    }

    return $resultado;

}

/**
 * @param int $idProducto representa al ID del producto en el catálogo.
 * @param string $z (zapas) Un string con el nombre de las zapatillas a buscar.
 * @param string $catalogo representa el catálogo que recorre idProducto.
 */
function producto_id(int $idProducto):mixed{

   $catalogo  = catalogo_completo();

   foreach ($catalogo as $z) {
       if($z['id'] == $idProducto){
           return $z;
       }      
   }

   return null;
}



