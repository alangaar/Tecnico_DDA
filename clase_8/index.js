//1
const express = require('express')
const app = express()
//5
const path = require('path')
//8
//Agregar Archivos estaticos
app.use(express.static('assets'))
//2
//ruta absoluta
app.get('/', function(req,res){
    res.send("Hola Mundo")
})

//4
//Creacion de Ruta que retorna una vista index.html
app.get('/index', function(req,res){
     res.sendFile(path.join(__dirname, 'vistas/index.html'))
})

//6
//Creacion de Ruta que retorna una vista tarjeta.html
app.get('/tarjeta', function(req,res){
    res.sendFile(path.join(__dirname, 'vistas/tarjeta.html'))
})

//3
//puerto en el cual se escucha la aplicacion web
app.listen(3000)
console.log("Aplicacion Corriendo en el puerto 3000")

//7
//despues del paso 6 se crea la carpeta assets y luego dentro de esta
//el archivo style.css
//luego agregar los archivos estaticos al servidor