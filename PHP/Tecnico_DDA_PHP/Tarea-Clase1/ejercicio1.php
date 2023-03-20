<?php
$suma = '##';
$n1 = '';
$n2 = '';

if($_POST){
    $n1 = $_POST['txtN1'];
    $n2 = $_POST['txtN2'];
    $suma = $n1+$n2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        input {margin:5px}
    </style>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input value="<?php echo $n1;?>" type="number" placeholder="Numero 1" name="txtN1"><br>
        <input value="<?php echo $n2;?>" type="number" placeholder="Numero 2" name="txtN2"><br>
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