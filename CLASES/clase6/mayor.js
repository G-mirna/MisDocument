const numbers = [2, 5, 8, 1, 10, 6, 17, -3, 10];
let nummayor = numbers[0];

for(let i = 0; i < numbers.length; i++){

    if (nummayor < numbers[i]){
        nummayor = numbers[i];
    }
}

console.log('El numero menos es: ${nummayor}');