<?php
   session_start();
    if(!isset($_SESSION['usuario'])){
         header("Location:index.php?controller=index&action=index");
    }
?>
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

   <!-- .\ BODY MAIN-->
   <div class="bor"></div>

   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php require_once("menuAdmin.php"); ?>
            </div>
            <!--./ col-md-12 -->
        </div>
        <!--./ row -->
    </div>
    <!--./ container-fluid -->

   <!-- BODY MAIN -->
   <div class="container">
      <div class="row">        
        <div class="col-md-12">
            <img style="width:70%" class="mx-auto d-block" src="view/img/construction.jpg" alt="Página en Construcción" >
        </div>
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