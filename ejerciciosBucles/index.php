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
        <label >introduzca el num de inicio</label><br>
        <input type="number" name="num1" required><br>
        <label >Introduzca el num de fin</label><br>
        <input type="number" name="num2" requiere>
        <button>convertir</button>
    </form>
    <?php
        if (isset($_POST["num1"])&&isset($_POST["num2"])) {
            $numInicio=(int)$_POST["num1"];
            $numFin=(int)$_POST["num2"];
            if ($numInicio==abs($numInicio)&&$numFin==abs($numFin)) {
                if ($numInicio==$numFin) {
                    echo "<h2>Ambos numeros son iguales, por favor introduzca otros numeros.</h2>";
                }
                else if($numInicio>$numFin){
                    # code...
                    echo $numInicio." (inicio) es mayor al ".$numFin." (fin) no es posible ejecutar la logica.";
                }
                else{
                    for ($i=$numInicio; $i <=$numFin ; $i++) { 
                        //echo $i."<br>";
                        if ($i%2==0) {
                            # code...
                            echo "El num ".$i." es Par"."<br>";
                        }
                        else {
                            # code...
                            echo "El num ".$i." es Impar"."<br>";
                        }
                    }
                }   
            }
        }
    ?>
    <br>
    <form method="post">
        <label >2. Escriba un programa que pida un número entero mayor que cero y que escriba sus divisores.</label><br>
        <input type="number" name="div">
        <button>Sacar divisores</button>
    </form>
    <?php
        if (isset($_POST["div"])) {
            # code...
            $dividir=(float) $_POST["div"];
            if ($dividir==abs($dividir)&&$dividir>0) {
                # code...
                $cont=1;
                $residuo=0;
                while ($cont<=$dividir) {
                    if ($dividir%$cont==0) {
                        $residuo=$dividir/$cont;
                        echo $residuo."<br>";
                        //echo $cont=$dividir/$cont;
                    }
                    $cont++;
                }
            }
            else{
                echo "Introduzca un numero positivo mayor a cero";
            }
        }
    ?>
    
</body>
</html>