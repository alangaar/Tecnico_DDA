    window.addEventListener('load',function(event){

        const tipos = [
            {name:"Seleccione el tipo de Ingreso", type:"texto"},
            {name:"Quincena", type:"ingreso"},
            {name:"Dieta Quincenal", type:"ingreso"},
            {name:"Otros", type:"ingreso"}
        ]

    const listadoIngresos = document.querySelector('#listado-tipos');

    for (let i = 0; i < tipos.length; i++){

        const tipo = tipos[i];
        listadoIngresos.innerHTML = listadoIngresos.innerHTML +

    `
        <option value="">${tipo.name}</option>

    `;

    }

    })