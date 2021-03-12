<?php
@extract($_REQUEST);


if(isset($p)){
    $p = $p;
}else{
	$p="inicio";
}
?>
<HTML>
<HEAD>

<meta charset="utf-8"/>
 <TITLE>Piero Ernesto</TITLE>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <link href="include/estilos/div.css"
      rel="stylesheet" type="text/css">
   <link rel="StyleSheet" href="include/estilos/calculadora.css" type="text/css">
  
   <script src="include/js/javascript.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$(document).keydown(function(event){
			var unicode = event.which;
			switch (unicode) {
			case 112:
				$("#parrafo").html("Aqui aparecerá el texto de ayuda que has pedido");
				break;
				case 113:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 114:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 115:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 116:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 117:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 118:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 119:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 120:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 121:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 122:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
				case 123:
				$("#parrafo").html("Si quieres ayuda presiona F1");
				break;
			default:
			$("#parrafo").html("");
				break;
		}
		}); 
	  
	});
	</script>
</HEAD>
<BODY ondblclick="alert('Usted ha cliclado en el fondo')">

 <div id="cabecera">
 <p id="contadorvisitas"></p>
 <div style="color:white" id="parrafo"></div>
	<div id="nombre">
	<a id="titulo">Diseño de Interfaces WEB + Despliegue de Aplicaciones WEb + Desarrollo Web Entorno Cliente</a><br>
	<a id="subtitulo">Piero Ernesto Velasco Ruiz</a>
	
	</div>
	
	
	
	<div id="logopequeno"><img src="mmedia/fotos/logopequeño.png" width="100" height="100"></div>
	<!--<div id="menubocadillo">Menú normal</div>!-->
	<div id="logogrande"><img src="mmedia/fotos/logogrande.png" width="400" height="140" ></div>
	<div id="header">
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="?p=inicio">Inicio</a></li>
				<li><a href="?p=perfilprofesional">Perfil Profesional</a></li>
				<li><a href="?p=portafolio">Portafolio</a></li>
				<li><a href="?p=formulariocontacto">Contacto</a></li>
				
			</ul>
			
		</nav>
		 
	</div>
	
	<div id="bocadillo">
	
    <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
    <label id="boton" for="abrir-cerrar">&#9776; <span class="abrir"></span><span class="cerrar"></span></label>
    <div id="sidebar" class="sidebar">
        <ul class="menu">
            <li><a href="?p=inicio">Inicio</a></li>
			<li><a href="?p=perfilprofesional">Perfil Profesional</a></li>
            <li><a href="?p=portafolio">Portafolio</a></li>
			<li><a href="?p=formulariocontacto">Contacto</a></li>
			
            
        </ul>
		
    </div>


 
 </div>
 

 </div>
 <div id="cajavacia">
 </div>
 
  <div id="contenido">
 
  <?php
        if(file_exists("modulos/".$p.".php")){
			?>
			<div >
            <?php
			include "modulos/".$p.".php";
			?>
			</div>
            <?php
        }else{
            echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
        }
		
    ?>
  </div>

<!--<div id="footer">
	<div id="piedepagina">
<p><strong>Piero Velasco Ruiz</strong></p>
<p><strong>Desarrollador Web<strong></p>

<p><a  href="mailto:piero071198@gmail.com">piero071198@gmail.com</a></p>
<p>612454461</p>
</div>

</div>!-->

</BODY>
</HTML>
