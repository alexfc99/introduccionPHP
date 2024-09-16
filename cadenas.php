<?php
    $nombre =  $_GET['nombre']??'';

    $nombre = trim($nombre, '/');

    $nomMayusc = strtoupper($nombre);

    $nomMinusc = strtolower($nombre);

    echo "Nombre: " . ($nombre ); 
    
    echo "<br> Longitud del nombre: " . (strlen($nombre));

    echo "<br> Nombre en mayúsculas: " . ($nomMayusc);

    echo "<br> Nombre en minúsculas: " . ($nomMinusc);

     $prefijo = $_GET['prefijo']??'';

        if (strpos($nombre, $prefijo) === 0) {
            echo "<br> El nombre comienza con el prefijo '" . ($prefijo) . "'.";
        } else {
            echo "<br> El nombre NO comienza con el prefijo '" . ($prefijo) . "'.";
        }
    

    $numLetra = substr_count($nomMinusc, 'a');
    echo "<br> Número de A que hay en el nombre: " . ($numLetra);
    
    $posicion = stripos($nombre, 'a');

    if($posicion === false){
        echo "<br> No hay letra a.";
    }else {
        echo "<br> La letra a está en la posición: " . ($posicion);
    }

    echo "<br> Nombre remplazando las o por 0: " . (str_ireplace('o','0',$nombre));

    $url = 'http://username:password@hostname:9090/path?arg=value';

    $partesUrl = parse_url($url);

    echo "<br> Protocolo: " . ($partesUrl['scheme']);
    echo "<br> Nombre de usuario: " . ($partesUrl['user']);
    echo "<br> Path: " . ($partesUrl['path']);
    echo "<br> Querystring: " . ($partesUrl['query']);
?>
