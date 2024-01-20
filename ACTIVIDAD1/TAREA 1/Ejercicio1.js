console.log("CALCULAR EL INTERES COMPUESTO")

let cap_inicial = parseFloat(prompt("Ingrese el capital inicial: "));
let tas_interes = parseFloat(prompt("Ingrese la tasa de interes: "));
tas_interes = tas_interes / 100
let n_tiempo = parseInt(prompt("Ingrese el periodo de tiempo a evaluar: "));

let Cap_resultante = cap_inicial * Math.pow(1 + tas_interes, n_tiempo);

console.log(`El interes compuesto es de: $${Cap_resultante.toFixed(3)}`)