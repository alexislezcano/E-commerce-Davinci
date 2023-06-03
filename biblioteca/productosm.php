<?PHP

/**
 * Devuelve el catálogo completo
 * @return array - Un array con el catálogo completo de productos en stock. 
 */
function catalogo_completo(): array

    // $resultado = [
    //     [
    //         "id" => 1,
    //         "marca" => "NIKE",
    //         "color" => "Cream",
    //         "precio" => 967,
    //         "modelo" => "Nike Air Jordan Retro 4 Off-White",
    //         "genero" => "hombres",
    //         "imagen" => "jordanoff.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Virgil Abloh regresa con una nueva creación: una versión deconstruida del icónico Air Jordan 4. El calzado presenta cuero de plena flor, malla de rejilla y un textil transparente que le da un toque moderno. Los cordones y la amortiguación Air tienen texto en negrita y mayúsculas, y se observan letras que detallan los orígenes del calzado. La espuma expuesta en el cuello y el exclusivo precinto Off-White™ completan esta obra maestra monocromática."

    //     ],
    //     [
    //         "id" => 2,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Harbor Grey",
    //         "precio" => 300,
    //         "modelo" => "NEW BALANCE 1906D PROTECTION PACK",
    //         "genero" => "hombres",
    //         "imagen" => "nbharbor.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Los paneles superiores del zapato presentan cortes dentados que le dan un aspecto inacabado, con una capa gruesa de gamuza peluda gris oscuro cubriendo una gamuza más clara y fina debajo. La base es una malla gris oscuro finamente tejida que proporciona soporte y estabilidad. La marca 'N' en la pared lateral y la entresuela tienen elementos de estilo desgastado con contornos descoloridos. Todo ello forma parte de la arquitectura y la vivienda de los elementos sutiles de la zapatilla 1906D."  
    //     ],
    //     [
    //         "id" => 3,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Grey",
    //         "precio" => 322,
    //         "modelo" => "NEW BALANCE M990GL6",
    //         "genero" => "hombres",
    //         "imagen" => "nbm9.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "La sexta versión del icónico New Balance 990 ha llegado, buscando modernizar y audazmente reinventar este clásico corredor. Con una entresuela ENCAP gruesa y una parte superior minimalista de malla y gamuza, la V6 destaca las características principales del modelo 990 con un enfoque exagerado y solo lo esencial en la ecuación. La marca New Balance se encuentra en la copa del talón y el número 990 en el lado lateral del zapato. El color inaugural es un tono gris dulce característico de la marca."  
    //     ],
    //     [
    //         "id" => 4,
    //         "marca" => "NIKE",
    //         "color" => "White Light",
    //         "precio" => 707,
    //         "modelo" => "NIKE DUNK LOW NEXT NATURE WHITE LIGHT OREWOOD BROWN",
    //         "genero" => "hombres",
    //         "imagen" => "ndnature.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Si eres un gran fan de las zapatillas 'Triple White' pero aprecias un toque de color en tus calzas, entonces la Nike Dunk Low Next Nature White Light Orewood Brown W es esencial para la rotación. Tomando el zapato de baloncesto muy popular de la compañía basada en Beaverton, definitivamente no quieres perderte estos."  
    //     ],
    //     [
    //         "id" => 5,
    //         "marca" => "ASICS",
    //         "color" => "Smoke Grey",
    //         "precio" => 130,
    //         "modelo" => "ASICS NOVABLAST 2 SPS",
    //         "genero" => "hombres",
    //         "imagen" => "asicssps.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Si eres un gran fan de las zapatillas 'Triple White' pero aprecias un toque de color en tus calzas, entonces la Nike Dunk Low Next Nature White Light Orewood Brown W es esencial para la rotación. Tomando el zapato de baloncesto muy popular de la compañía basada en Beaverton, definitivamente no quieres perderte estos."  
    //     ],
    //     [
    //         "id" => 6,
    //         "marca" => "NIKE",
    //         "color" => "Blanco",
    //         "precio" => 200,
    //         "modelo" => "NIKE AIR FORCE 1 '07 LOW",
    //         "genero" => "hombres",
    //         "imagen" => "force1.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "La leyenda sigue viva en las Nike Air Force 1 '07, una versión moderna de las icónicas AF1, que combina estilo clásico y detalles modernos. El diseño bajo ofrece una adherencia óptima al suelo y un aspecto clásico. Esta versión de las Nike Air Force 1 cuenta con bordes de piel ondulados para una línea más limpia, delgada y detalles más refinados. La parte superior de piel y tela cuenta con capas externas posicionadas en puntos estratégicos para una durabilidad y soporte de por vida. Las inserciones perforadas favorecen la transpirabilidad para mantener el pie siempre fresco y seco."  
    //     ],
    //     [
    //         "id" => 7,
    //         "marca" => "NIKE",
    //         "color" => "Cream",
    //         "precio" => 230,
    //         "modelo" => "NIKE AIR FORCE 1 DÍA DE LOS MUERTOS - SIEMPRE FAMILIA",
    //         "genero" => "hombres",
    //         "imagen" => "nfamilia.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "En honor al Día de Muertos y la cultura mexicana, este Air Force 1 especial celebra con un estilo tradicional. Las superposiciones en relieve y grabadas con láser destacan gráficos únicos, mientras que un Swoosh bordado recuerda el uso de pigmentos coloridos en el arte mexicano. Los gráficos de Siempre Familia en la plantilla actúan como un recuerdo para los seres queridos, uniendo todos los elementos de esta edición especial."

    //     ],
    //     [
    //         "id" => 8,
    //         "marca" => "NIKE",
    //         "color" => "Rosa",
    //         "precio" => 350,
    //         "modelo" => "NIKE DUNK LOW ROSE WHISPER",
    //         "genero" => "mujeres",
    //         "imagen" => "ndrose.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Las Nike Dunk debutó en 1985 encabezado en la campaña 'Be True To Your School', pero ha visto un seguimiento masivo desde su lanzamiento inicial. Desde ediciones limitadas, hasta colaboraciones y Nike SB, el Nike Dunk se ha convertido en mucho más que un modelo de zapatos."  
    //     ],
    //     [
    //         "id" => 9,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Blanco",
    //         "precio" => 200,
    //         "modelo" => "NEW BALANCE BB550LWT",
    //         "genero" => "mujeres",
    //         "imagen" => "nb550.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Las zapatillas New Balance BB550LWT son un modelo para realizar diversas actividades, hechas de cuero sintético con una entresuela de espuma EVA para mayor soporte y amortiguación. Tienen un diseño moderno en blanco, azul y rojo, con una suela de goma duradera que proporciona tracción y estabilidad. Son adecuadas para diversas actividades deportivas y se espera que sean resistentes y cómodas."  
    //     ],
    //     [
    //         "id" => 10,
    //         "marca" => "ADIDAS",
    //         "color" => "Azul",
    //         "precio" => 160,
    //         "modelo" => "BAD BUNNY CAMPUS",
    //         "genero" => "mujeres",
    //         "imagen" => "acampus.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Las zapatillas Forum Bad Bunny de Adidas son una combinación perfecta de estilo y comodidad. Diseñadas en colaboración con el cantante Bad Bunny, destacan por su estilo urbano y vanguardista. Con un diseño llamativo y alta calidad de construcción, son ideales para entrenamiento o uso casual. Su suela de goma ofrece excelente tracción y durabilidad para uso diario."  
    //     ],
    //     [
    //         "id" => 11,
    //         "marca" => "ASICS",
    //         "color" => "Blanco",
    //         "precio" => 140,
    //         "modelo" => "ASICS GEL-CUMULUS 25",
    //         "genero" => "mujeres",
    //         "imagen" => "asics25.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Experimenta una sensación más suave bajo los pies con el zapato GEL-CUMULUS‍ 25. Este entrenador diario neutro es una opción versátil para varios entrenamientos de running y distancias.Hemos actualizado la entresuela con nuestra nueva tecnología PureGEL y amortiguación FF BLAST PLUS. Estos materiales ayudan a crear aterrizajes más suaves y un dedo del pie más energizado durante su entrenamiento."  
    //     ],
    //     [
    //         "id" => 12,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Seta",
    //         "precio" => 150,
    //         "modelo" => "NEW BALANCE 9060",
    //         "genero" => "mujeres",
    //         "imagen" => "nb9060.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "9060 es una nueva expresión del estilo refinado y diseño innovador de la serie 99X de New Balance. Reinterpreta elementos clásicos con una estética futurista inspirada en la tecnología visible de la era y2k. Las barras oscilantes del 990 se expanden en toda la parte superior, mientras que las líneas onduladas y una entresuela de vaina esculpida resaltan las plataformas de amortiguación ABZORB y SBS con un énfasis exagerado en proporciones ampliadas."  
    //     ],
    //     [
    //         "id" => 13,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Gris Mate",
    //         "precio" => 100,
    //         "modelo" => "NEW BALANCE 530",
    //         "genero" => "hombres",
    //         "imagen" => "nb530.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Las New Balance 530 son un must-have para los amantes de la moda, con un estilo retro y carácter inconformista inspirado en los primeros modelos de zapatillas de correr. Combinan un estilo clásico con la tecnología moderna de New Balance para brindar comodidad duradera en el uso diario."

    //     ],
    //     [
    //         "id" => 14,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Gris Plata",
    //         "precio" => 70,
    //         "modelo" => "NEW BALANCE 990v6",
    //         "genero" => "chicos",
    //         "imagen" => "nbv6.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Los diseñadores originales del icónico New Balance 990 crearon una zapatilla de running excepcional en 1982, con un diseño elegante y discreto en color gris y un precio alto para la época. Desde entonces, ha habido actualizaciones en el diseño y más opciones de color, pero el aura de calidad y estatus del 990 ha perdurado. El nuevo 990v3 para bebés lleva esa excelencia a los pies más pequeños."  
    //     ],
    //     [
    //         "id" => 15,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Gris Plata",
    //         "precio" => 90,
    //         "modelo" => "NEW BALANCE 990v6 HOOK AND LOOP",
    //         "genero" => "chicos",
    //         "imagen" => "nbhook.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "El New Balance 990, creado por los diseñadores originales como la mejor zapatilla de running del mercado, debutó en 1982 con un elegante color gris y un precio alto. Ha sido una marca de calidad y estatus aspiracional para corredores y amantes de la moda. Aunque ha habido actualizaciones en el diseño y más opciones de color, el aura del 990 nunca ha cambiado. El nuevo 990v6 para bebés brinda esa excelencia a los pies pequeños."  
    //     ],
    //     [
    //         "id" => 16,
    //         "marca" => "NEWBALANCE",
    //         "color" => "Blanco",
    //         "precio" => 80,
    //         "modelo" => "NEW BALANCE 550 BUNGEE LACE WITH TOP STRAP",
    //         "genero" => "chicos",
    //         "imagen" => "nbstrap.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "El clásico New Balance 550 Bungee Lace con correa superior es ideal para los pies en crecimiento de los niños. El 550 original se lanzó en 1989 y se destacó en las canchas de baloncesto. Después de ser archivado, fue reintroducido en ediciones limitadas en 2020 y regresó a la alineación completa en 2021, convirtiéndose en un favorito global. Su silueta aerodinámica y baja ofrece un diseño retro de los años 80, con una construcción superior de cuero sintético confiable y atemporal."  
    //     ],
    //     [
    //         "id" => 17,
    //         "marca" => "NIKE",
    //         "color" => "Tiza Coral",
    //         "precio" => 60,
    //         "modelo" => "NIKE AIR JORDAN 1 MID",
    //         "genero" => "chicos",
    //         "imagen" => "jordanmid.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Esta mini versión del J combina un diseño icónico con nuevos colores frescos. Suaves y flexibles en la planta del pie, son fáciles de poner y cómodos de usar todo el día, para que tu pequeño pueda jugar, jugar y jugar."  
    //     ],
    //     [
    //         "id" => 18,
    //         "marca" => "NIKE",
    //         "color" => "Piedra Fósil",
    //         "precio" => 65,
    //         "modelo" => "NIKE AIR JORDAN 1 MID SE CRAFT",
    //         "genero" => "chicos",
    //         "imagen" => "jordancraft.jpg",
    //         "talle" => 10,
    //         "envio" => "ENVIO GRATIS",
    //         "descripcion" => "Inicia a tus pequeños con un verdadero ícono con las zapatillas AJ, con parte superior de tela y gamuza, y suela de espuma suave y flexible. Fácil de poner y quitar, tus pequeños harán piruetas hasta la hora de la siesta."  
    //     ]
    // ];
{
    $catalogoJSON = file_get_contents('datos/productos.json');
    $resultado = json_decode($catalogoJSON, TRUE);

    return $resultado;
}

/**
 * Devuelve el catalogo de prodcutos de una marca en partiduclar
 * @param string $z (zapas) Un string con el nombre de las zapatillas a buscar.
 * 
 * @return array Un array con todas las zapatillas de esa sección en stock.
 */

 /**
 * Devuelve los datos de un producto en particular
 * @param int $idProducto el ID único del producto a mostrar.
 * @return mixed Un array con los datos datos del producto encontrado o null en caso de que no se encuentre nada.
 */


// function catalogo_name(string $name):array{

//     $resultado = [];
//     $producto  = catalogo_completo();

//     foreach ($producto as $m) {
//         if($m['name'] == $name){
//             $resultado[] = $m;
//         }      
//     }

//     return $resultado;

// }




