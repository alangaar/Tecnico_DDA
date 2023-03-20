<?php
    //2
    $rango="";
    //1
    if($_POST) {
        $rango = array();
        $n1 = $_POST['primer_numero'];
        $n2 = $_POST['segundo_numero'];

        $mayor = 0;
        $menor = 0;

        if($n1 > $n2){
            $mayor = $n1;
            $menor = $n2;
        }else{
            $mayor = $n2;
            $menor = $n1;    
        } 
        //3
        for($x = $menor+1; $x < $mayor; $x++){
            $rango[] = $x;
        }
        //4
        $rango = implode(" - ",$rango);//funcion php que convierte un array en una cadena de texto
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<h3>DIGITAR 2 NUMERO Y MOSTRAR LOS NUMEROS QUE ESTAN EN EL RANGO DE LOS VALORES DIGITADOS EN PHP</h3>
    <form action="ejercicio2.php" method="post">
        <input value="<?php echo $n1; ?>" require type="number" name="primer_numero" placeholder="primer numero"> <br>
        <br>
        <input value="<?php echo $n2 ; ?>" require type="number" name = "segundo_numero" placeholder="segundo numero"><br>
        <br>
        <button type="submit">Calcular</button>
        <button onclick="nuevo();" type="button">Limpiar</button>
   <hr>
        <div>
            <!--5-->
            <?php echo $rango; ?>
        </div>
    </form>
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