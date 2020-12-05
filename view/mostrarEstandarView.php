<?php
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
    <!--./ container -->

   <!-- BODY MAIN -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Control</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Maquina</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Ver Archivo...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (is_array($datos)) {
                            $cont = 1;
                            foreach ($datos as $valor) {
                                echo "<tr>";
                                echo "<th>" . strtoupper($valor[0]) . "</th>";
                                echo "<th>" . strtoupper($valor[1]) . "</th>";
                                echo "<th>" . strtoupper($valor[5]) . "</th>";
                                echo "<th>" . strtoupper($valor[6]) . "</th>";
                                echo "<th>" . $valor[2] . "</th>";
                                echo "<th><a href='view/docs/estandar/".$valor[1].".pdf' target='_blank'>Abrir ".$valor[1].".pdf</a></th>";
                                echo "</tr>";
                                $cont++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- .\container-->
    <!-- .\ BODY MAIN-->
    <div class="bor"></div>

</body>

<?php
/**HERADER DEL PROYECTO */ 
    require_once("footer.php");
?>
<!-- Table JS -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready( function () {
      $('#myTable').DataTable();
   } );
</script>
</html>