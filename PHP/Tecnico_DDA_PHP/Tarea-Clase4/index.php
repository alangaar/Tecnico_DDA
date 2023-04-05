<?php

    include("libreria/conexion.php");

    $con = conectarDB();

    if($_POST){

        $voto = $_POST['rdPartidos'];
        $correo = $_POST['txtEmail'];

        if($voto > 0){

            $sql = "insert into votos (correo, voto) values
            ('{$correo}','{$voto}')";
    
            mysqli_query($con, $sql);
    
            if(mysqli_error($con)){
                echo "{$correo} <script>alert('ya usted voto!!!')</script>";
            }     

        }
        else{

           echo "<script>alert('Debe elegir un partido para votar')</script>";
        
        }



    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
    <title>Tarea-Clase4</title>
</head>
<body>
    <form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col col-sm-6">
            <h3>Votos por Partidos</h3><br>
                <table>
                    <tr>
                        <td width="70%">
                            <?php
                                $sql = "select p. *, 
                                (select count(*) from votos where voto =p.id) as cantidad
                                from partidos p";
                                $rs = mysqli_query($con, $sql);

                                while($fila = mysqli_fetch_assoc($rs)){
                                    echo"
                                        <div>
                                          <label>
                                             <input value='{$fila['id']}' type='radio' name='rdPartidos'/>
                                             {$fila['nombre']}({$fila['sigla']})
                                             {$fila['cantidad']}
                                          </label>
                                        </div>
                                    ";
                                }; 
                            ?>
                        </td>
                        <td>
                            <img class="img-responsive" src="jpg.jpg" alt="" >    
                        </td>
                    </tr>
                </table>
                    <div class="mb-3">
                         <span class="form-label" >Correo:</span>
                         <input title="Debe ingresar su correro para votar!!!" required type="email" name="txtEmail" class="form-control">
                    </div>
                    <div class="mb-3  d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                
                
            </div>
        </div>
    </div>
    </form>
</body>
</html>