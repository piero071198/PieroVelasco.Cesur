<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="include/estilos/contacto.css" type="text/css">

  
</head>


<body>  
  

  <div class="contact_form">

    <div class="formulario">      
      <h1>Formulario de contacto</h1>
        <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


          <form action="javascript:alert('El formulario se ha enviado correctamente En breve nos pondremos en contacto con usted'); window.location.href='index.php'" method="post">       

            
                

              
                
                
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                  <span class="obligatorio">*</span>
                  </label>
                  
                    <input type="text" name="introducir_nombre" id="nomreformulario" placeholder="Escribe tu Nombre">
                </p>  
                <p>
                  <label for="email" class="colocar_email">Email
                  <span class="obligatorio">*</span>
                  </label>
                  
                    <input type="text" name="introducir_email" id="email" placeholder="Escribe tu email">
                </p>  
                

                <p>
                  <label for="telefone" class="colocar_telefono">Teléfono
                  </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    
              
              
                <p>
                  <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu mensaje..."></textarea> 
                                </p>                    
              
                <button onclick="" type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
            
          </form>
    </div>  
  </div>

</body>
</html>





