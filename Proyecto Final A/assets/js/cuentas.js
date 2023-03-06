//1 creamos las cuentas de ingreso(income) y outcome(gastos) 
function getCuentas(){
    return[
        
        { name: "Transporte", type:"outcome"},
        { name: "Supermercado", type:"outcome"},
        { name: "Tarjeta de Credito", type:"outcome"},
        { name: "Gasolina", type:"outcome"},
        { name: "comunicacion", type:"outcome"},
        { name: "Pago Nomina", type:"income"},
        { name: "Quincena", type:"income"},
        { name: "Otros", type:"income"},
    ]
}

//2 vamos a ingreso.js