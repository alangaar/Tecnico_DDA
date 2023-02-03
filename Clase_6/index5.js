// Funciones CallBack

function primera(segunda){
    setTimeout(function(){
    console.log("primera")  
    segunda();  
    },3000)

}

function segunda(){
console.log("segunda")    
}

primera(segunda);
