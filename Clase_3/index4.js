const prompt = require('prompt');
prompt.start();

prompt.get(['fruta'], function (err, result){
    let fruta = result.fruta;

    switch (fruta){

            case 'uvas' :
                console.log(' 🍇 precio 150 pesos la libra');
                break;
            case 'limones' :
                console.log('🍋 precio 50 pesos la libra');  
                break; 
            case 'kiwis' :
                console.log(' 🥝 precio 220 pesos la libra');
                break;
            case 'papas' :
                console.log('🥔 precio 45 pesos la libra');  
                break; 
            case 'zanahoria' :
                console.log(' 🥕 precio 25 pesos la libra');
                break;
            case 'brocoli' :
                console.log('🥦 precio 70 pesos la libra');  
                break; 
             default :
                console.log('No se encontro ningun precio');
                break;                                       

    }

});