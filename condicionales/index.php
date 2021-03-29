<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial;
            background: #BDE85F
        }

        div {
            background: white;
            padding: 20px;
            margin: 20px auto;
            width: 350px;
        }

        h1 {
            font-size: 28px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
            <?php
                $hora = 17; // Condicional para saludar en funcion de la hora

                if ($hora > 6 && $hora < 12) {
                        echo "<h1>Hola! Buenos dias</h1>";
                } else if ($hora >= 12 && $hora < 19) {
                    echo "<h1>Hola! Buenas tardes</h1>";
                } else {
                    echo "<h1>Hola! Buenas noches</h1>";
                }
            ?>
    </div>
</body>
</html>