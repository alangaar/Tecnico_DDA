<?php
$suma = '##';
$n1 = '';
$n2 = '';

if($_POST){
    $n1 = $_POST['primer_numero'];
    $n2 = $_POST['segundo_numero'];
    $suma = $n1+$n2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 1</title>

</head>
<body>

    <h3>CALCULAR LA SUMA DE 2 NUMEROS EN PHP</h3>
    <form action="ejercicio1.php" method="post">
        <input value="<?php echo $n1; ?>" require type="number" name="primer_numero" placeholder="primer numero"> <br>
        <br>
        <input value="<?php echo $n2 ; ?>" require type="number" name = "segundo_numero" placeholder="segundo numero"><br>
        <br>
        <button type="submit">Calcular</button>
        <button onclick="nuevo();" type="button">Limpiar</button>
   <hr>
        resultado: <label><?php echo $suma?></label>
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