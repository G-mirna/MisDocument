
/*
function factorial(number){

    if(number === 0 || number === 1)
    return 1;

    return number * factorial(number-1);


}

console.log(factorial(5));
*/


/*
function sum(number){
    if(number === 1)
    return number;

return number + sum(number-1);

}

console.log(sum(5));
*/


//OBJETOS

/*
const person = {
    firstName: "Juan",
    lastName: "Perez",
    address:{
        street: "Calle Principal",
        city:"San Miguel",
        Country: "El Salvador"
    },
    Hobbies: ['Leer', 'Correr']

}

console.log(person.address.city);
console.log(person.Hobbies[1]);

*/

const employees=[
    {id:1, fullname: "Juan Perez", email:"juanperez@gmail.com", age: 20},
    {id:2, fullname: "Oscar Fuentes", email:"oscarfuentes@gmail.com", age: 20},
    {id:3, fullname: "Sofia Reyes", email:"sofiareyes@gmail.com", age: 25},
    {id:4, fullname: "Daniela Funes", email:"danyfunes@gmail.com", age: 25},
    {id:5, fullname: "Orlando Contreras", email:"orlandcontre@gmail.com", age: 22},
    {id:6, fullname: "Mirna Rivas", email:"mirnarivas@gmail.com", age: 25},
];

const filteremployeed = employees.filter(employee => employee.age >= 25);

console.log(filteremployeed)
