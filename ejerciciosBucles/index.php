<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles ejercicios</title>
</head>

<body>
    <h1>Ejerciciios Bucles</h1>
    <form method="post">
        <label>1. Escriba un programa que pida dos números enteros y escriba qué números son pares y cuáles impares desde el primero hasta el segundo</label>
        <br>
        <label>introduzca el num de inicio</label><br>
        <input type="number" name="num1" required><br>
        <label>Introduzca el num de fin</label><br>
        <input type="number" name="num2" requiere>
        <button>convertir</button>
    </form>
    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        $numInicio = (int)$_POST["num1"];
        $numFin = (int)$_POST["num2"];
        if ($numInicio == abs($numInicio) && $numFin == abs($numFin)) {
            if ($numInicio == $numFin) {
                echo "<h2>Ambos numeros son iguales, por favor introduzca otros numeros.</h2>";
            } else if ($numInicio > $numFin) {
                # code...
                echo $numInicio . " (inicio) es mayor al " . $numFin . " (fin) no es posible ejecutar la logica.";
            } else {
                for ($i = $numInicio; $i <= $numFin; $i++) {
                    //echo $i."<br>";
                    if ($i % 2 == 0) {
                        # code...
                        echo "El num " . $i . " es Par" . "<br>";
                    } else {
                        # code...
                        echo "El num " . $i . " es Impar" . "<br>";
                    }
                }
            }
        }
    }
    ?>
    <br>
    <form method="post">
        <label>2. Escriba un programa que pida un número entero mayor que cero y que escriba sus divisores.</label><br>
        <input type="number" name="div">
        <button>Sacar divisores</button>
    </form>
    <?php
    if (isset($_POST["div"])) {
        # code...
        $dividir = (float) $_POST["div"];
        if ($dividir == abs($dividir) && $dividir > 0) {
            # code...
            $cont = 1;
            $residuo = 0;
            while ($cont <= $dividir) {
                if ($dividir % $cont == 0) {
                    $residuo = $dividir / $cont;
                    echo $residuo . "<br>";
                    //echo $cont=$dividir/$cont;
                }
                $cont++;
            }
        } else {
            echo "Introduzca un numero positivo mayor a cero";
        }
    }
    ?>
    <p>3. Valide dos numeros y despues haga, multiplicacion, div, suma y resta</p>
    <?php
    $valor1 = 2;
    $valor2 = 9;
    do {
        $valor1++;
        $valor2++;
    } while ($valor1 <= 7 && $valor2 <= 15);
    echo $sum = $valor1 + $valor2 . "<br>";
    echo $rest = $valor1 - $valor2 . "<br>";
    echo $mult = $valor1 * $valor2 . "<br>";
    echo $division = $valor1 / $valor2 . "<br>";
    echo $modulo = $valor1 % $valor2 . "<br>";
    ?>
    <form method="post">
        <label>4. Escriba un programa que pregunte cuántos números se van a introducir, pida esos números, y muestre un mensaje cada vez que un número no sea mayor que el primero.</label><br>
        <input type="number" name="num">
        <button>Enviar</button>
    </form>
    <?php
    if (isset($_POST["num"])) {
        # code...
        $numIteraciones = (int)$_POST["num"];
        $name = "valorImprimir";
        $metodoHttp = "method=" . '"post"';
        $a = 0;
        if ($numIteraciones > 0) {
            # code...
            echo "introduzca un numero: ";
            do {
                $a++;
                echo '<form method="post">
        <input type="number" name="valorImprimir">
        <button>Enviar</button>
    </form>';
            } while ($a < $numIteraciones);
        }
    }
    ?>
    <?php
    if (isset($_POST["valorImprimir"])) {
        # code...
        $numImprimir = (int)$_POST["valorImprimir"];
        echo $numImprimir;
    }
    ?>
    <p>5. primo con for, while y do-while</p>
    <?php

    //primo 9

    $primo = 5;

    //$contador;

    $contador = 1;

    $s = 1;

    while ($s <= $primo) {

        if ($primo % $s == 0) {

            //global $contador;

            $contador++;

            //echo $primo;

        }

        $s++;
    }

    for ($i = 1; $i <= $primo; $i++) {

        //$contador = 0;

        if ($primo % $i == 0) {

            //global $contador;

            $contador++;

            //echo $primo;

        }
    }

    $b = 1;

    do {

        $b++;

        if ($primo % $b == 0) {

            //global $contador;

            $contador++;

            //echo $primo;

        }

        //$b++;

    } while ($b <= $primo);

    echo $contador;

    if ($contador == 2) {

        # code...

        echo "<h2>El num es primo</h2>" . "<br>";
    } else {

        echo "<h2>el num no es primo</h2" . "<br>";
    }

    ?>
    <?php

    echo "<h1>EJERCICIOS FOR</h1>";

    // 1. Mostrar números del 1 al 10
    echo "<h3>1. Numeros del 1 al 10</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    // 2. Mostrar números del 10 al 1
    echo "<h3>2. Numeros del 10 al 1</h3>";
    for ($i = 10; $i >= 1; $i--) {
        echo $i . "<br>";
    }

    // 3. Mostrar números pares del 1 al 50
    echo "<h3>3. Numeros pares</h3>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

    // 4. Tabla de multiplicar del 6
    echo "<h3>4. Tabla del 6</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "6 x $i = " . (6 * $i) . "<br>";
    }

    // 5. Sumar números del 1 al 20
    echo "<h3>5. Suma del 1 al 20</h3>";
    $suma = 0;
    for ($i = 1; $i <= 20; $i++) {
        $suma += $i;
    }
    echo "Suma: " . $suma;



    echo "<hr>";
    echo "<h1>EJERCICIOS WHILE</h1>";

    // 1. Mostrar números del 1 al 10
    echo "<h3>1. Numeros del 1 al 10</h3>";
    $i = 1;
    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }

    // 2. Mostrar números del 10 al 1
    echo "<h3>2. Numeros del 10 al 1</h3>";
    $i = 10;
    while ($i >= 1) {
        echo $i . "<br>";
        $i--;
    }

    // 3. Mostrar múltiplos de 5 hasta 100
    echo "<h3>3. Multiplos de 5</h3>";
    $i = 1;
    while ($i <= 100) {
        if ($i % 5 == 0) {
            echo $i . "<br>";
        }
        $i++;
    }

    // 4. Contar divisores de 12
    echo "<h3>4. Divisores de 12</h3>";
    $num = 12;
    $i = 1;
    while ($i <= $num) {
        if ($num % $i == 0) {
            echo $i . "<br>";
        }
        $i++;
    }

    // 5. Factorial de 5
    echo "<h3>5. Factorial de 5</h3>";
    $num = 5;
    $i = 1;
    $factorial = 1;

    while ($i <= $num) {
        $factorial *= $i;
        $i++;
    }

    echo "Factorial: " . $factorial;



    echo "<hr>";
    echo "<h1>EJERCICIOS DO WHILE</h1>";

    // 1. Mostrar números del 1 al 10
    echo "<h3>1. Numeros del 1 al 10</h3>";
    $i = 1;
    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 10);

    // 2. Mostrar números impares hasta 20
    echo "<h3>2. Numeros impares</h3>";
    $i = 1;
    do {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
        $i++;
    } while ($i <= 20);

    // 3. Tabla del 7
    echo "<h3>3. Tabla del 7</h3>";
    $i = 1;
    do {
        echo "7 x $i = " . (7 * $i) . "<br>";
        $i++;
    } while ($i <= 10);

    // 4. Suma del 1 al 50
    echo "<h3>4. Suma del 1 al 50</h3>";
    $i = 1;
    $suma = 0;

    do {
        $suma += $i;
        $i++;
    } while ($i <= 50);

    echo "Suma: " . $suma;

    // 5. Verificar si 9 es primo
    echo "<h3>5. Numero primo</h3>";

    $num = 9;
    $i = 1;
    $contador = 0;

    do {
        if ($num % $i == 0) {
            $contador++;
        }
        $i++;
    } while ($i <= $num);

    if ($contador == 2) {
        echo "Es primo";
    } else {
        echo "No es primo";
    }

    ?>


</body>

</html>