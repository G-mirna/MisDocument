function binarySearch(arr, value){

    let start = 0;
    let end = arr.length - 1;

    while (start <= end){
        let middleIndex = Math.floor((start + end)/2);

        if (arr[middleIndex]=== value){
            return true
        }

        if (arr[middleIndex]> value){
            end = middleIndex-1;
        }else{
            star = middleIndex +1;
        }
    }
    return false
}

const students = ['Araujo','Campos','Hernandez','Martinez','Perez','Zelaya'];

if (binarySearch(students, 'campos'))
    console.log("Estudiantes encontrado");
else console.log("Estudiantes no encontrado");
