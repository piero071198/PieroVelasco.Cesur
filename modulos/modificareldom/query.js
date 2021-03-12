/*$(document).ready(function(){
    
    $('.contenido').html('Hola que tal');

});

$(document).ready(function(){
    $("#escribe").keydown(function(){
         $("#parrafo").text("Tecla pulsada");
 }); 
 $("#escribe").keyup(function(){
         $("#parrafo").text("Tecla soltada");
 }); 
});*/

$(document).ready(function(){
	$(document).keydown(function(event){
        
        contenido=$('.contenido2').html();
        texto="nro";
        numero=String.fromCharCode(event.which);
        
        if(numero>=0 && numero<=4){
            $('.contenido2').text(numero+contenido);
            $('.contenido2').css('display','flex');
        }else if(numero>=5 && numero<=9){
            $('.contenido2').text(contenido+numero);
            $('.contenido2').css('display','flex');
        } else{
            alert("Has intoductido un valor que no esta dentro de los parametros");
        }
        
        

	}); 
});
