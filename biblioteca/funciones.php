<?PHP
     
    /**
     * Esta función elimina palabras de un párrafo.
     * @param string $texto Este es el párrafo a reducir.
     * @param int $cantidad Esta es la cantidad de palabras a extraer.
     * 
     * @return string La cantidad de palabras solicitada con un elipsis(...) concatenado al final.
     */
    function acortar_palabras(string $texto, int $cantidad = 0):string{
        $array = explode(" ", $texto);
        if (count($array)<=$cantidad){
            $resultado = $texto;
        }else{
            array_splice($array, $cantidad);
            $resultado = implode(" ", $array)." ";
        }
        return  $resultado;
    }

?>

  

