//funcion normal
/*
function sum(a, b) {
  return a + b;
}

mt= sum(1, 2); // 3

console.log(mt)
*/

//FUNCION ESCRITA EN FORMA DE FLECHA
/*
const sum = (a, b) => {
    return a + b;
  };
  
  mt = sum(1, 2); // 3
  console.log(mt)
  */

  // VOLVERLAS IMPLICITAS
/*
const sum = (a, b) => a + b;

mt=sum(1, 5); // 3
console.log(mt)
*/

//ATAJOS DE ARGUMENTO SIMPLES
/*
const add10 = a => a + 10;

mt=add10(1); // 11
console.log(mt)
*/

// FUNCIONES ANONIMAS

//primero creamos el areglo
/*
const numbers = [1,2,3,4,5,6];

numbers.forEach(function (num){

console.log(num)
})
*/

// o puede ser asi
const numbers = [1,2,3,4,5,6];
numbers.forEach((number) => console.log(number));

