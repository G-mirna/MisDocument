
// FILTROS EN UN AREGLO
/*
const array = [1,2,3,4,5,6,7,8,9,10];
const evenarray = array.filter((arr) => arr % 2 === 0) // indicamos que muestre los numero que tienen un divisor de 2
console.log(evenarray)
*/

//PODEMOS OBTENER EL MISMO RESULTADO USANDO UN FOREACH
/*
const numbers = [1,2,3,4,5,6,7,8,9,10];

const evenNumbers = [];
numbers.forEach((number) => {
  if (number % 2 === 0) {
    evenNumbers.push(number);
  }
});

console.log(evenNumbers); // [2, 4, 6, 8, 10]
*/


// EJEMPLO UN POCO MAS COMPLEJO

const companies = [
    { name: 'Company One', category: 'Finance', start: 1981, end: 2004 },
    { name: 'Company Two', category: 'Retail', start: 1992, end: 2008 },
    { name: 'Company Three', category: 'Auto', start: 1999, end: 2007 },
    { name: 'Company Four', category: 'Retail', start: 1989, end: 2010 },
    { name: 'Company Five', category: 'Technology', start: 2009, end: 2014 },
    { name: 'Company Six', category: 'Finance', start: 1987, end: 2010 },
    { name: 'Company Seven', category: 'Auto', start: 1986, end: 1996 },
    { name: 'Company Eight', category: 'Technology', start: 2011, end: 2016 },
    { name: 'Company Nine', category: 'Retail', start: 1981, end: 1989 },
  ];

  /*
  const company = companies.filter((comp) => comp.category === "Retail");
  console.log(company);
  */

  /*
  const año = companies.filter((años) => años.start >= 1980 && años.end <= 2005)

  console.log(año)
  */

  const tiempoDuracion = companies.filter((tiempo) => tiempo.end - tiempo.start >= 10)
  console.log(tiempoDuracion)
  
 