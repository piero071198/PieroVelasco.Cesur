/* 
estructuras secuenciales javascript
alumno:
fecha:
*/
window.onload = function(){
	pantalla=document.getElementById("pantallita");
	contador();
}


function contador(){    
	if(typeof(Storage) !== "undefined") {
	if (sessionStorage.contadorclics) {
	  sessionStorage.contadorclics = Number(sessionStorage.contadorclics)+1;
	} else {
	  sessionStorage.contadorclics = 1;
	}
	visitas= sessionStorage.contadorclics;
  
	document.getElementById("contadorvisitas").innerHTML=visitas;  
  } else {
	alert("Su navegador no soporta web storage...");
  
  }
  
  }
  
  
  
  
x="0";
y=1;
z=0;
f="no";
 function numero(valor){
	 if(x=="0" || y==1){
		 pantalla.innerHTML+=valor;
		 x=valor;
		 
	 }else{
		 pantalla.innerHTML+=valor;
		 x+=valor;
	 }
	y=0;
		 
 }
 function operar(operacion){
	 igualar();
	 z=x;
	 f=operacion;
	 pantalla.innerHTML+=operacion;
	 y=1;
 }
 
 function igualar(){
	 if(f=="no"){
		 pantalla.innerHTML=x;
	 }else{
		 resultado=z+f+x;
		 solucion = eval(resultado);
		 
		pantalla.innerHTML=resultado+"="+solucion;
		x=solucion;
		f="no";
		y=1;
		 
		 
	 }		 
 }
 function borrartodo(){
	 pantalla.innerHTML=" ";
	 x="0";
	y=1;
	z=0;
	f="no";
 }
 
  velocidad = 100;
  mTop = 0;
  mLeft = 0;
 document.addEventListener("keydown",function(e){
	 if(e.keyCode == "39"){
		 moverDerecha();
	 }
	 if(e.keyCode == "37"){
		 moverIzquierda();
	 }
	 if(e.keyCode == "40"){
		 moverAbajo();
	 }
	 if(e.keyCode == "38"){
		 moverArriba();
	 }
	 
	 
 })
 
 function moverDerecha(){
	 mLeft += velocidad;
	 margin=mLeft+"px";
	 document.getElementById("cajagrande").style.marginLeft = margin;	 
 }

 function moverIzquierda(){
	 mLeft -= velocidad;
	 margin=mLeft+"px";
	 document.getElementById("cajagrande").style.marginLeft = margin;	 
 }
 function moverArriba(){
	 mTop -= velocidad;
	 margin=mTop+"px";
	 document.getElementById("cajagrande").style.marginTop = margin;	 
 }

 function moverAbajo(){
	 mTop += velocidad;
	 margin=mTop+"px";
	 document.getElementById("cajagrande").style.marginTop = margin;	 
 }
 
 function holamundo(){
	 alert("Hola mundo ejercicio 2 unidad1");
 }
 function definirx(){
	 var variable="Ejercicio 1 unidad 2";
	 alert(variable);
 }
 function operar(){
	 var numero1=20;
	 var numero2=10;
	 var suma = numero1+numero2;
	 var resta=numero1-numero2;
	 var multiplicacion=numero1*numero2;
	 var dividir=numero1/numero2;
	 var resultado="De los numero "+numero1 +" y "+numero2
	 +" : "+ " la suma es: "+suma
	 + " la resta es: "+resta
	 + " la multiplicacion es: "+multiplicacion
	 + " la dividir es: "+dividir;
	 alert(resultado);
	
	}
	function edadespaña(){
		alert("Ejercicio 2 unidad 4 . años de jubilacion: 65 años");
	}
	

