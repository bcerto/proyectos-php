<!-- STRINGS -->

<?php
    
    //funciones para strings
    $mensaje = "Hoy voy a aprender mucho";
    echo $mensaje . "<br>";

    // Longitud
    echo strlen ($mensaje) . "<br>"; // longitud de caracteres de mi mensaje

    // Numero de palabras
    echo str_word_count ($mensaje) . "<br>"; // cantidad de palabras que tiene mi mensaje

    // Reversa
    echo strrev ($mensaje) . "<br>"; // da vuelta el mensaje y lo muestra al reves

    // Encontrar texto
    echo strpos ($mensaje, "aprender") . "<br>"; // busca una palabra y nos devuelve la posicion en la que arranca

    // Reemplazar texto
    echo str_replace ("aprender", "nadar", $mensaje) . "<br>"; // 1er palabra a reemplazar, 2do palabra que reemplaza la anterior, 3ero cadena

    // Convertir a minusculas
    echo strtolower ($mensaje) . "<br>"; // transforma todo a minusculas

    // Convertir a Mayusculas
    echo strtoupper ($mensaje) . "<br>"; // transforma todo el mensaje en mayusculas

    // Comparar cadenas
    echo strcmp ("hola", "adios") . "<br>"; // devuelve un numero, 0 si son iguales, 1 si no lo son

    // Substraer cadena
    echo substr ($mensaje, 14) . "<br>"; // introducimos la $cadena y la posicion desde donde queremos que extraiga

    // Remover espacios en blanco
    echo trim ("              holus        soy       Carlo") . "<br>"; // elimina los espacios en blanco que no son necesarios

?>