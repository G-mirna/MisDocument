function Calcular_area(a, b, c){
    
    let semi = ( a + b + c)/2; // ENCONTRAMOS EL SEMIPERIMENTRO PARA PODER CALCULAR EL AREA

    let area = Math.sqrt(semi * (semi - a) * (semi -b) * (semi-c));
    return area;
}

let punto_a = parseFloat(prompt("Ingrese el lado a:"));
let punto_b = parseFloat(prompt("Ingrese el lado b:"));
let punto_c = parseFloat(prompt("Ingrese el lado b:"));

//CALCULAMOS EL AREA

let area_triangulo = Calcular_area(punto_a, punto_b, punto_c)

console.log(`El area del triangulo es de: ${Math.ceil(area_triangulo)}`)

