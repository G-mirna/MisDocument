function distancia_digitos(numero1, numero2){

    //convertir a string para poder iterar cada digito
    const str_num1 = numero1.toString()
    const str_num2 = numero2.toString()

    if (str_num1.length != str_num2.length){
        console.log("Los numeros ingresados no coiciden en longitud")
    }

    let distancia= 0
    console.log(str_num1, str_num2)

    for (let i = 0; i < str_num1.length; i++) {

        //Usamos Math.abs() para calcular la distancia entre dos nuemeros sin tener en cuenta su dirección en la recta numérica.
        distancia += Math.abs(parseInt(str_num1[i]) - parseInt(str_num2[i])) 
          
    }
    console.log(`La distancia entre ${numero1} y ${numero2} es: ${distancia}`)
}

let num_1 = parseInt(prompt("Ingrese el primer numero:"))
let num_2 = parseInt(prompt("Ingrese el segundo numero:"))

if (isNaN(num_1) || isNaN(num_2)){
    console.log("Debe ingresar un numero valido")

}else{

    distancia_digitos(num_1, num_2)
    
}