const express = require('express')
const app = express()
const path = require('node:path')

// Incluir Archivos Estaticos
app.use(express.static('asset/'))

//Ruta para html
app.get('/', function(request, response){
    response.sendFile(path.join(__dirname, '/vistas/index.html'));
})

//Puerto donde se escuchara la aplicacion
app.listen(3000, function(){
    console.log("servidor escuchando en el puerto 3000")
});
