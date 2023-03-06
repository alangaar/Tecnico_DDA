//aqui guardamos la transaccion en el almacenamiento del navegador llamado localstorage
function salvarTransaccion(transaccion){
    let transacciones = getTransacciones();//busco mi transaccion
    transacciones.push(transaccion)//le agrego una nueva
    localStorage.setItem("transacciones", JSON.stringify(transacciones))//la guardo en el almacenamiento localstorage
}
//con esto retornamos lo que guardamos
function getTransacciones(){
    const transacciones = JSON.parse(localStorage.getItem("transacciones"))
    
    if(transacciones){
        return transacciones;
    }else{
        return[];
    }
}



//ingreso.js