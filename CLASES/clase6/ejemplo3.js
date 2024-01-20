
/////para obtener el numero menor

const numbers = [2, 5, 8, 1, 10, 6, 17, -3, 10];
let smallestNumber = numbers[0];
let nummayor = numbers[0];

for(let i = 0; i < numbers.length; i++){
    if (smallestNumber > numbers[i]){
        smallestNumber = numbers[i];
    }

    if (nummayor < numbers[i]){
        nummayor = numbers[i];
    }
}

document.write(`El numero menor es ${smallestNumber}`)
document.write(`El numero mayor es ${nummayor}`)




