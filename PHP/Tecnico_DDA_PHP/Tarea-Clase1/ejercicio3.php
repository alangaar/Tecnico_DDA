<!--5-->
<?php
    //6
    $frase = "";
    //8
    
    $final = "";
    //9
    if($_POST){
        $frase = $_POST['frase'];
        //10
        $cantidadLetras = strlen($frase);
        $final .= "<li>La Cantidad de caracteres que hay en la frase es: {$cantidadLetras}</li>";
        //11    
        $palabras = explode(" ", $frase);
        $cantidadPalabras = count($palabras);
        $final .= "<li>La Cantidad de palabras que hay en la frase es: {$cantidadPalabras}</li>";
        //12
        $cantidadVocales = 0;
        $cantidadConsonantes = 0;
        //18    
        $formato = "";
        //19
        $mayuscula = true;
        //22
        $inverso = "";
        //13
        for($x=0; $x < strlen($frase); $x++){
            $letra = $frase[$x];
            if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
                $cantidadVocales++;
            }else if($letra != ' ') {
                $cantidadConsonantes++;
            }
            //20
            if($mayuscula){
                $formato.= strtoupper($letra);
            }else{
                $formato.= strtolower($letra);
            }

            $mayuscula = !$mayuscula;
            //23
            $inverso = $letra . $inverso;
        }

            //14
            $final .= "<li>La Cantidad de vocales que hay en la frase es: {$cantidadVocales}</li>";
            $final .= "<li>La Cantidad de consonantes que hay en la frase es: {$cantidadConsonantes}</li>";
            //15
            $esto = array('a','e','i','o','u');
            $aquello = array('4','3','1','0','7');
            //16
            $frase2 = str_replace($esto,$aquello,strtolower($frase));
            //17
            $final .= "<li>{$frase2}</li>"; 
            //21
            $final .= "<li>{$formato}</li>";
            //24
            $final .= "<li>{$inverso}</li>";


    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <!--1-->
<h3>DIGITAR UNA FRASE Y MOSTRAR LOS RESULTADOS SIGUIENTES EN PHP</h3>
    <!--2-->    
<form action="ejercicio3.php" method="post">
    <!--3-->               <!--7-->               
    <textarea name="frase"><?php echo $frase;?></textarea>
    <br>
        <button type="submit">Procesar</button>
        <button onclick="nuevo();" type="button">Limpiar</button>

    </form>

    <hr>
    <ol>
    <?php echo $final; ?>
    </ol>    
    <hr>
    <a href="index.php">Menu Principal</a>
    <script>
        function nuevo(){
            if(confirm("Seguro que desea limpiar ?")) {
                window.location=window.location
            }
        }
    </script>
</body>
</html>