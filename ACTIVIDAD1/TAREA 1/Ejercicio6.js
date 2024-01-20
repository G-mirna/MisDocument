let numero = prompt("Escribe un número");
    
if(( numero % 3) === 0 && ( numero % 7) === 0 ){
    console.log('el número: '+ numero + ', es multiplo de 3 y 7');
}else{
    console.log('el número: '+ numero + ', no es multiplo de 3 y 7');
}