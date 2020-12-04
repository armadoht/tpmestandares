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
               <a href=""><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
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

         <div class="col-md-12">
            <div class="hero">
               <h1><span>Sistema de Estandares</span></h1>
                  <div class="bor"></div>
            </div>
            <!-- .\ HERO-->
         </div>
         <!-- .\ col-md-12 -->

         <div class="col-md-6">
            <h4>TPM | Sistema de Estandares</h4>
            <p>Un estándar establece y/o describe el método de trabajo y define el estado ideal del proceso; 
            es la única forma de realizar las actividades, mismo que debe ser respetado por el personal involucrado en la actividad.</p>
            <a href="index.php?controller=Login&action=index" class="btn btn-grupak-primary">Iniciar Sessión</a>
         </div>
         <!-- .\col-6-md-->
         <div class="col-md-6 text-center">
            <img class="rounded" src="view/img/tpm.png">
         </div>
         <!-- .\col-6-md-->
      </div>
      <!-- .\row-->
  </div>
  <!-- .\ container -->
  <!-- .\ BODY MAIN-->
  <div class="bor"></div>

</body>

<?php
/**HERADER DEL PROYECTO */ 
    require_once("footer.php");
?>
</html>