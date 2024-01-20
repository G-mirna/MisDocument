function saludar(name)

{
    console.log(' HOLA ' + name)
}

saludar('Juan Perez');

// crear una funcion que sume dos numeros


function sumar ( num1 , num2)
{
    return num1 + num2;
}
console.log(sumar(3,4));



// funcion multiplicar

function multiplicacion(...numeros) {

let multiplicar = 1;

    for (const numero of numeros) {
        multiplicar *= numero;
    }

    return multiplicar;
}

console.log(multiplicacion(1, 2, 3, 4, 5, 6));

