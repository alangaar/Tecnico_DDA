//llamamos a la libreria para poder usarla
const express = require('express')
const app = express()

//ruta y funcion respuesta
app.get('/',function(req,res){
    res.send("Hola Mundo")


})

console.log("aplicacion se escucha en el puerto 3000")

//puerto que estara por donde se estara escuchando la aplicacion
app.listen(3000)