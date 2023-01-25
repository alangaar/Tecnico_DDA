// Operadores logicos
// operadores de comparacion

const prompt = require('prompt');
prompt.start();

prompt.get(['edad'], function (err, result){

    let edad = result.edad;

    if (edad > 18 && edad < 30){
        console.log('Se trata de un joven adulto')
    }
    if (edad > 30 && edad < 35){
        console.log('Se trata de un adulto joven')
    }
    else if (edad > 35 && edad < 65){
        console.log('Se trata de un adulto maduro')
    }
});
