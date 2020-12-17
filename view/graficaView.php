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
   <div class="container">
      <div class="row">        
         <div class="col-md-12">
            <h3><?php echo $title; ?></h3>
            <form action="index.php?controller=Grafica&action=crearGrafica" enctype='multipart/form-data' method="post">
                <div class="form-row">

                    <!-- Planta -->
                    <div class="form-group col-md-6">
                        <label for="Planta">Planta</label>
                        <select class="form-control" name="idPlanta" required>
                            <option value=""></option>
                                <?php
                                    if (is_array($planta)) {
                                        foreach ($planta as $valor) {
                                            if ($valor[10] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                        </select>
                    </div>
                    <!-- ./col-md-6 -->

                    <!-- Tipo de Estandar -->
                    <div class="form-group col-md-6">
                        <label for="Tipo de Estandar">Datos Maestros</label>
                        <select class="form-control" name="tablas" id="idTabla" required>
                            <option value=""></option>
                            <option value="revision">Revisión Actual</option>
                            <option value="responsableeje">Responsable de Ejecución</option>
                            <option value="frecuenciaacti">Frecuencia de la Actividad</option>
                            <option value="pilar">Pilar</option>
                            <option value="tipoestandar">Tipo de Estandar</option>
                            <option value="impacto">Impacto</option>
                            <option value="maquina">Maquina</option>
                            <option value="maquinaseccion">Sección</option>
                            <option value="proyecto">Proyecto</option>
                            <option value="departamento">Departamento</option>
                        </select>
                    </div> 
                    <!-- ./col-md-12 -->

                    <!-- Tipo de Estandar -->
                    <div class="form-group col-md-6">
                        <label for="Tipo de Estandar">Complementos del dato maestro</label>
                        <select class="form-control" name="valorTablas" id="valortablas" required>
                            <option value=""></option>
                            
                        </select>
                    </div> 
                    <!-- ./col-md-12 -->

                    <!--Fecha de Inicio-->
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Fecha Inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio"  required>
                    </div>

                    <!--Fecha de Fin-->
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Fecha Fin</label>
                        <input type="date" class="form-control" name="fecha_fin"  required>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Crear Grafica</button>
            </form>
         </div>
         <!-- .\col-md-12 -->
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

<!-- Table JS -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $("#idTabla").change(function () {
        var tabla = $("#idTabla").val();
        var campos_tabla = "*";
        $("#valortablas").empty();
            $.ajax({
                data: {campo: tabla},
                type: "POST",
                url: 'controller/json_session_subClave.php',
                success: function (data) {
                // console.log(data);
                if (data != 0) {
                    let array = JSON.parse(data);
                    var cont = 1;
                    console.log(array);
                        for (let i = 0; i < array.length; i++) {
                            $("#valortablas").append('<option value=' + cont + '>' + array[i].nombre + '</option>');
                            cont++;
                        }
                        $("#valortablas").append('<option value='+campos_tabla+'>Todos los campos</option>');
                    }
                },
                error: function (data) {
                    alert(data);
                }
            });
    });
</script>

</html>