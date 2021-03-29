<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

    <style>
        body {
            font-family: Arial;
            background: #B5CDE6;
            font-size: 2em;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
        <?php
        $frutas = array ("platano", "manzana", "fresa", "uvas");

        print_r($frutas);

        echo "<br>";
        echo "<br>";
        echo $frutas [2]; // nos entrega el valor de la posicion 2

        echo "<br>";
        echo "<br>";
        echo count ($frutas) . " elementos"; // nos dice cuantos elementos tiene el array

        echo "<br>";
        for ($i= 0; $i< count($frutas); $i++) { // recorre el array y nos imprime los elementos
            echo "<br>";
            echo $frutas [$i];
        }

        $edades = array ("Bruno" => 35, "Nachopilot" => 54, "Bernardino" => 105);
        
        echo "<br>";
        echo "<br>";
        print_r($edades);

        echo "<br>";
        echo "<br>";
        echo $edades ['Bruno'];

        echo "<br>";
        echo "<br>";

        foreach ($edades as $key => $value) {
            echo $key . " tiene el valor de " . $value . "<br />";
        }
        ?>
</body>
</html>