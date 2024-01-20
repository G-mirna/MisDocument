 
 // SE UTILIZA COMO IF SIMPLIFICADO
 /*
 const age = 19
 
 age > 18 
    ? console.log('Es mayor de edad') 
    : console.log('Es menor de edad')
    */ 
/*
const canVote = age > 18 ? 'Puede votar' : 'No puede votar';
console.log(canVote);
*/

///EJEMPLO FOR IN
/*
const colors = ['rojo','azul','verde','amarillo','negro'];

for (const index in colors){
    console.log(colors[index]);
}
*/
 
//PARA UN OBJETO
/*
const colorObject={
    color1: "Blanco",
    color2: "Azul",
    color3: "Morado"

}

for(const key in colorObject){
    console.log(colorObject[key]) //key es la variable que me va recorrer el objeto se puede llamar como sea
}
*/



const employees=[
    {id:1, fullname: "Juan Perez", email:"juanperez@gmail.com", age: 20},
    {id:2, fullname: "Oscar Fuentes", email:"oscarfuentes@gmail.com", age: 20},
    {id:3, fullname: "Sofia Reyes", email:"sofiareyes@gmail.com", age: 25},
    {id:4, fullname: "Daniela Funes", email:"danyfunes@gmail.com", age: 25},
    {id:5, fullname: "Orlando Contreras", email:"orlandcontre@gmail.com", age: 22},
    {id:6, fullname: "Mirna Rivas", email:"mirnarivas@gmail.com", age: 25},
];

/*
const empleadoAreglo = employees.map(nombre => nombre.fullname);
console.log(empleadoAreglo)
*/

const employeesObject = employees.map(objectnuevo => {
    return{
        name: objectnuevo.fullname,
        categoria: objectnuevo.email
    }

});

console.log(employeesObject)