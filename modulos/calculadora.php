
<html lang="es">
<head>
  <title>Tarea: CSS Externo</title>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="include/estilos/calculadora.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script src="include/js/calculadora.js"></script>
</head>

<body>
<div style="margin-left:28px;">
<a onclick="moverArriba()"><img src="https://img.icons8.com/ios-filled/50/000000/circled-up.png"/></a>

</div>
<div>
<a onclick="moverIzquierda()"><img src="https://img.icons8.com/ios-filled/50/000000/circled-left.png"/></a>
<a onclick="moverDerecha()"><img src="https://img.icons8.com/ios-filled/50/000000/circled-right.png"/></a>
</div>
<div style="margin-left:28px;">
<a onclick="moverAbajo()"><img src="https://img.icons8.com/ios-filled/50/000000/circled-down.png"/></a>
</div>
<div id="cajagrande">
<div class="centrar" id="pantallita"></div>
<div id="inputs">
<input type="button" class="centrar" value="7" onclick="numero('7')"/>
<input type="button" class="centrar" value="8" onclick="numero('8')"/>
<input type="button" class="centrar" value="9" onclick="numero('9')"/>
<input type="button" class="centrar" id="borrar" value="C" onclick="borrartodo()" />
<input type="button" class="centrar" value="4" onclick="numero('4')"/>
<input type="button" class="centrar" value="5" onclick="numero('5')"/>
<input type="button" class="centrar" value="6" onclick="numero('6')"/>
<input type="button" class="centrar" value="+" onclick="operar('+')"/>
<input type="button" class="centrar" value="1" onclick="numero('1')"/>
<input type="button" class="centrar" value="2" onclick="numero('2')"/>
<input type="button" class="centrar" value="3" onclick="numero('3')"/>
<input type="button" class="centrar" value="-" onclick="operar('-')"/>

<input type="button" class="centrar" value="/" onclick="operar('/')"/>
<input type="button" class="centrar" value="0" onclick="numero('0')"/>
<input type="button" class="centrar" value="x" onclick="operar('*')"/>

<input type="button" class="centrar" value="=" onclick="igualar()" />
<div>


</div>


</div>

</body>
</html>