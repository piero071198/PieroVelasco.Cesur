function primos(){
     numero = document.getElementById("numb").value;
    if (document.getElementById("numb").validity.rangeOverflow) {
        text = "Valor muy largo";
      } else {
        if(esPrimo(numero)==true){
            text="Es primo";
        }else{
            text="No es primo";
        }
      }   
    document.getElementById("demo").innerHTML = text;

    
    
}

    function esPrimo(numero){
  
        if (numero == 0 || numero == 1 || numero == 4) return false;
        for (let x = 2; x < numero / 2; x++) {
            if (numero % x == 0) 
            return false;
        }

        return true;
    }






  


