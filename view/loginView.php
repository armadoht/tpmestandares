<!DOCTYPE html>
<html lang="en">

<?php
/**HERADER DEL PROYECTO */ 
    require_once("header.php");
?>

<body>
    <!-- My Header Start-->
    <header>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
            <!-- Logo Grupak -->
               <a href="index.php"><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
            </div>

            <div class="col-md-4 offset-md-4">
               <div class="list">
                  <!--Telefono-->
                  <div class="phone">
                     <i class="fa fa-phone"></i> 777 100 7200 ext.7242
                  </div>
                  <hr/>
                  <!--Email-->
                  <div class="email">
                     <i class="fas fa-envelope"></i> tpm.cuernavaca@grupak.com.mx
                  </div>
                  <hr/>
                  <!--Direccion-->
                  <div class="address">
                     <i class="fa fa-home"></i> Av. Atlacomulco  117 – A, Col. Chapultepec, C.P. 62450, Cuernavaca, Morelos, México.
                  </div>
               </div>
               <!-- ./ list -->         
            </div>
            <!-- ./ col-md-4 offset-md-4 -->
         </div>
         <!-- ./ row -->
        
      </div>
      <!-- ./ container -->
   </header>
   <!-- .\ HEADER-->

    <!-- BODY MAIN -->        
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="index.php?controller=Login&action=validarLogin" method="post">
                    <div class="form-group">
                        <label for="usuario"><strong>Usuario</strong></label>
                        <input name="user" type="text" class="form-control" id=""  placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong>Contraseña</strong></label>
                        <input name="pass" type="password" class="form-control" id="" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <?php print_r($error); ?>
                    </div>
                    <button type="submit" class="btn btn-grupak-primary">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
    <!-- .\ BODY MAIN-->
    <div class="bor"></div>

</body>

<?php
/**HERADER DEL PROYECTO */ 
    require_once("footer.php");
?>
</html>