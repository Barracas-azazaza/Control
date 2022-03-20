<!DOCTYPE html>
<html>
  <?php
    require("archivos/head.inc");
  ?>
<body>   
   <?php
    require("archivos/header.inc");
    require ("archivos/nav.inc");
  ?>
    
        
    <section style="text-align:center">
        <form name="form1" method="post" action="controler.php" style="max-width:500px;margin:auto">
              <div >
                <img src="/recursos/images/ingresar.png" alt="Avatar" class="avatar">
              </div> <br/>    
                  <label for="usuario" name="lblUsuario" class="contenidoSec" >Usuario:</label>
                  <div class="input-container">
                  <i class="material-icons icon">person</i>
                  <input class="input-field" type="input" name="usuario" placeholder="correo electrónico"  name="usuario" >
                </div>
                  <label for="pass" name="lblUsuario" class="contenidoSec">Contraseña:</label>
                  <div class="input-container">
                  <i class="material-icons icon">vpn_key</i>
                  <input class="input-field" type="password" name="pass" placeholder="Contraseña" name="psw">
                </div>
              <div class="div-back">
                 <button type="submit" class="boton" name="submit">Enviar Formulario</button>
                 <button type="reset" class="boton">Limpiar Formulario</button></div>               
              </div>
        </form> 
         
            
    </section>
    <?php
    require("archivos/footer.inc");    
    ?>
   
</body>
</html>
