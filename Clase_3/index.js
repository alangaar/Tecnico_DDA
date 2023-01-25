// invocar la libreria prompt para ser utilizada en el programa

const prompt = require ('prompt');


// declarar una variable para usar

let nombre = '';

// inicializar libreria prompt

prompt.start();

// instrucciones para ingresar datos

console.log('Ingresa tu nombre')

prompt.get(['nombre'], function(err, result){
    console.log('Tu nombre es: ' + result.nombre);
});

