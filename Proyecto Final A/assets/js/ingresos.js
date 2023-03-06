//todo dentro de una funcion llamada iniciar
function iniciar(){

//2 filtro para poder seleccionar los las cuentas  tipo income(ingreso) 
//ya que hasta aqui se muestran todas y solo queremos las income
    const type = "income";
    const cuentas = getCuentas();

    const cuentasGastos = cuentas.filter(function(cuenta, index, cuentas){
        if(cuenta.type === type){
            return true;
        }
        return false;
    })

    const listadoGastos = document.querySelector('#listado-tipos');
//3 aqui se muestra el resultado del filtro manipulando el DOM
    for (let i=0; i < cuentasGastos.length; i++) {
        const cuenta = cuentasGastos[i];
       listadoGastos.innerHTML = listadoGastos.innerHTML +
       `
        <option value="${cuenta.name}">${cuenta.name}</option>
       `;     
    }
}

//creamos la funcion salvar
function salvar(event) {
    event.preventDefault();
    const cuentaSeleccionada = event.target.elements["cuenta"].value
    const cuenta = getCuentas().find(function(cuenta){
        if(cuenta.name === cuentaSeleccionada){
            return true;
        }
        return false;
    })
    const transaccion ={
        amount: event.target.elements["amount"].value,
        fecha_registro: event.target.elements["fecha"].value,
        cuenta: cuenta,
        notas: event.target.elements["notas"].value
    }

    salvarTransaccion(transaccion)
}

window.addEventListener('load', function(event) {
    iniciar();
//mi-form es el ID del formulario de documento html ingreso y con el evento addEvenlistener 
//escuchamos el evento submit del formulario para salvar los valores ingresados en los input html
    document.getElementById("mi-form").addEventListener("submit", salvar)
})



//almacen_local