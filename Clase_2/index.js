/**
 Incluimos la libreria Prompt para usarla en nuestro codigo
 */

const prompt = require('prompt');

//inicializo la libreria para poder usarla

prompt.start();

//solicitar valores al usuario
console.log('Dime tu nombreAle');
prompt.get(['nombre'], function (err, result) {
  
    console.log('Tu nombre es: ' + result.nombre);
});



