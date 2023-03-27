<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen de datos en archivo</title>
     <!-- CDN de Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container">
        <h3>Datos Personales</h3>

        <div class="row">
            <div class="col col-sd-6">
                <form action="guardar.php" method="post">
                    <div class="mb-3">
                        <span class="form-label">Nombres:</span>
                        <input type="text" name="nombre" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                        <span class="form-label">Apellidos:</span>
                        <input type="text" name="apellido" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                        <span class="form-label">Sexo:</span>
                        <input type="radio" name="sexo" id="" value = "Hombre" class="form-check-input">
                        <label for="" class ="form-check-label ">
                            Hombre
                        </label>
                        <input type="radio" name="sexo" id="" value = "Mujer" class="form-check-input">
                        <label for="" class ="form-check-label ">
                            Mujer
                        </label>
                    </div>

                    <div class="mb-3">
                        <span class="form-label">Cedula:</span>
                        <input type="text" name="cedula" class="form-control" id="">
                    </div>
                    
                    <div class="mb-3">
                        <span class="form-label">Direccion:</span>
                        <textarea name="direccion" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <span class="form-label">Fecha de Nacimiento:</span>
                        <input type="date" name="fechaNac" class="form-control" id="">
                    </div>

                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <button type="submit" class = "btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

            <h3>Datos Almacenados</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Cedula</th>
                        <th>Direccion</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $archivos = scandir("Datos");
                        foreach($archivos as $arch) {
                            $ruta = "Datos/{$arch}";
                            if(is_file($ruta)){
                                $info = unserialize(file_get_contents($ruta));
                                echo " <tr>
                                            <td>{$info['nombre']}</td>
                                            <td>{$info['apellido']}</td>
                                            <td>{$info['sexo']}</td>
                                            <td>{$info['cedula']}</td>
                                            <td>{$info['direccion']}</td>
                                            <td>{$info['fechaNac']}</td>
                                
                                       </tr>
                                
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>