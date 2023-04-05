<?php
$frase = "";
$final = "";


if ($_POST){
    $frase = $_POST['frase'];
    $cantidadLetras = strlen($frase);
    $final .= "<li>La cantidad de Caracteres es : {$cantidadLetras} </li>";
    
    $palabras = explode(" ",$frase);
    $cantidadPalabras = count($palabras);
    $final .= "<li>La cantidad de palabras es : {$cantidadPalabras} </li>";
    
    $cantidadVocales = 0;
    $cantidadConsonantes = 0;

    $formato = "";
    $mayuscula = true;
    $inverso = "";

    for($x=0; $x < strlen($frase); $x++){
        $letra = $frase[$x];
        if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u' ){
            $cantidadVocales++;
        }else if($letra != ' '){
            $cantidadConsonantes++;
        }
        if($mayuscula) {
            $formato.= strtoupper($letra);
        }else{
            $formato.= strtolower($letra);
        }

        $mayuscula = !$mayuscula;
        $inverso = $letra . $inverso;

    }

    $final .= "<li>La cantidad de vocales es : {$cantidadVocales} </li>";
    $final .= "<li>La cantidad de consonantes es : {$cantidadConsonantes} </li>";

    $esto = array('a','e','i','o','u');
    $aquello = array('4','3','1','0','7');

    $frase2 = str_replace($esto,$aquello,strtolower($frase));
    $final .= "<li>{$frase2}</li>";
    
    $final .= "<li>{$formato}</li>";
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

<h3>DIGITAR UNA FRASE Y MOSTRAR LOS RESULTADOS SIGUIENTES EN PHP</h3>
  
<form action="ejercicio3.php" method="post">
                  
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