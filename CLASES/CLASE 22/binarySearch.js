function binarySearch(arr, start, end, value){
    if(start > end){
        false;
    }

    let middleIndex = Math.floor((start + end)/2); // Math.floor nos sirve para redondear en este caso el resultado de esta operacion

    if(arr[middleIndex]=== value){
        return true;
    }

    if (arr[middleIndex] > value){
        return binarySearch(arr, start, middleIndex - 1, value);
    }else{
        return binarySearch(arr, middleIndex + 1, end, value);
    }
}

const students = ['Araujo','Campos','Hernandez','Martinez','Perez','Zelaya'];

if (binarySearch(students, 0, students.length - 1, 'Campos'))
    console.log("Estudiante encontrado");
else console.log("Estudiante no encontrado");
