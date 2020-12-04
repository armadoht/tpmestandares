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

   <!-- BODY ESTANDAR MAIN -->
   <div class="container">
        <div class="row">        
            <div class="col-md-12">
                <form action="index.php?controller=estandar&action=createEstandar" enctype='multipart/form-data' method="post">
                    <div class="form-row">

                        <!-- Titulo del estandar -->
                        <div class="form-group col-md-12">
                            <label for="Titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" placeholder="Titulo del estandar" required>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Revisión Actual -->
                        <div class="form-group col-md-6">
                            <label for="RevisionActual">Revisión Actual</label>
                            <select class="form-control" name="idRevision" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($revision)) {
                                        foreach ($revision as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Responsable -->
                        <div class="form-group col-md-6">
                            <label for="Responsable de Ejecución">Responsable de Ejecución</label>
                            <select class="form-control" name="idResponsableEje" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($responsableEjec)) {
                                        foreach ($responsableEjec as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Tiempo Minutos -->
                        <div class="form-group col-md-6">
                            <label for="Responsable">Tiempo Minutos</label>
                            <input type="text" class="form-control" name="time" required>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Frecuencia -->
                        <div class="form-group col-md-6">
                            <label for="Responsable">Frecuencia de la Actividad</label>
                            <select class="form-control" name="idFrecuenciaActi" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($frecuenciaActi)) {
                                        foreach ($frecuenciaActi as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->


                        <!-- Pilar -->
                        <div class="form-group col-md-6">
                        <label for="Pilar">Pilar</label>
                            <select class="form-control" name="idPilar" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($pilar)) {
                                        foreach ($pilar as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Tipo de Estandar -->
                        <div class="form-group col-md-6">
                        <label for="Tipo de Estandar">Tipo de Estandar</label>
                            <select class="form-control" name="idTipoEstandar" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($tipoEstandar)) {
                                        foreach ($tipoEstandar as $valor) {
                                            if ($valor[3] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div> 
                        <!-- ./col-md-12 -->

                        <!-- Impacto -->
                        <div class="form-group col-md-6">
                        <label for="Impacto">Impacto</label>
                            <select class="form-control" name="idImpacto" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($impacto)) {
                                        foreach ($impacto as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Maquina -->
                        <div class="form-group col-md-6">
                        <label for="Maquina">Maquina</label>
                            <select class="form-control" name="idMaquina" id="maquinaSelect" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($maquina)) {
                                        foreach ($maquina as $valor) {
                                            if ($valor[3] != 0) {
                                                echo "<option value='" . $valor[0] . "-" . $valor[2] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Sección -->
                        <div class="form-group col-md-6">
                        <label for="Sección">Sección</label>
                            <select class="form-control" name="idSeccion" id="idseccion" required>
                                <option value=""></option>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->


                        <!-- Proyecto -->
                        <div class="form-group col-md-6">
                        <label for="Proyecto">Proyecto</label>
                            <select class="form-control" name="idProyecto" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($proyecto)) {
                                        foreach ($proyecto as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Departamento -->
                        <div class="form-group col-md-6">
                        <label for="Departamento">Departamento</label>
                            <select class="form-control" name="idDepartamento" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($departamento)) {
                                        foreach ($departamento as $valor) {
                                            if ($valor[2] != 0) {
                                                echo "<option value='" . $valor[0] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->

                        <!-- Planta -->
                        <div class="form-group col-md-6">
                        <label for="Planta">Planta</label>
                            <select class="form-control" name="idPlanta" required>
                                <option value=""></option>
                                <?php
                                    if (is_array($planta)) {
                                        foreach ($planta as $valor) {
                                            if ($valor[10] != 0) {
                                                echo "<option value='" . $valor[0] . "-" . $valor[9] . "'>" . strtoupper($valor[1]) . "</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- ./col-md-12 -->


                        <!-- Clave del Estandar -->
                        <div class="form-group col-md-12">
                            <label for="Clave">Clave</label>
                            <input class="form-control mr-sm-2" type="text" name="noControl" id="clave-codigo" required>
                        </div>
                        <!-- ./col-md-12 -->


                        <!--Quien Elaboro.... -->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Elaboró</label>
                            <input class="form-control mr-sm-2 numEmpleado ui-autocomplete-input" type="text" name="elaboro"  placeholder="Numero de Empleado" aria-label="Search" required>
                        </div>
                            
                        <!--Fecha de Elaboración-->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Fecha de Elaboración</label>
                            <input type="date" class="form-control" name="fechaElaboracion"  required>
                        </div>
                            
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="textElaboro" readonly> 
                        </div>
                            
                        <div class="form-group col-md-2">
                            <button type="button" id="nombreElaboro" class="btn btn-primary">Buscar</button>
                        </div>

                        <!--Quien Revisión.... -->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Revisó</label>
                            <input class="form-control mr-sm-2 numEmpleado" type="text" name="revision"  placeholder="Número de Empleado" aria-label="Search" required>
                        </div>

                        <!--Fecha de Revisión-->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Fecha de Revisión</label>
                            <input type="date" class="form-control"  name="fechaRevision"  required>
                        </div>
                            
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="textReviso" readonly> 
                        </div>
                            
                        <div class="form-group col-md-2">
                            <button type="button" id="nombreReviso" class="btn btn-primary">Buscar</button>
                        </div>

                        <!--Quien Aprobó.... -->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Aprobó</label>
                            <input class="form-control mr-sm-2 numEmpleado" type="text" name="aprobo" placeholder="Numero de Empleado" aria-label="Search" required>
                        </div>

                        <!--Fecha de Aprobación-->
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Fecha de Aprobación</label>
                            <input type="date" class="form-control"  name="fechaAprobo"  required>
                        </div>
                            
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="textAprobo" readonly> 
                        </div>
                            
                        <div class="form-group col-md-2">
                            <button type="button" id="nombreAprobo" class="btn btn-primary">Buscar</button>
                        </div>

                        <!-- Cargar Archivo PDF....-->
                        <div class="form-group col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" accept=".pdf" required>
                                <label class="custom-file-label">Selecciona un archivo PDF...</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">  
                            <div id="ruta_archivo"></div>
                        </div>

                    </div>
                     <!-- ./form-row -->
                     <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <!-- ./form -->
            </div>
            <!-- ./col-md-12 -->
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

<script type="text/javascript">
    $("#maquinaSelect").change(function () {
        var str = $("#maquinaSelect").val().split("-");
        var idmaquina = str[0];
        $("#idseccion").empty();
            $.ajax({
                data: {idMaquina: idmaquina},
                type: "POST",
                url: 'controller/json_session_maquina.php',
                success: function (data) {
                console.log(data);
                if (data != 0) {
                    let array = JSON.parse(data);
                        for (let i = 0; i < array.length; i++) {
                            $("#idseccion").append('<option value=' + array[i].idMaquinaSeccion + '>' + array[i].nombre + '</option>');
                        }
                    }
                },
                error: function (data) {
                    alert(data);
                }
            });
    });
</script>

<!-- Query de los trabajadores-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $(function () {
        let availableTags;
        let acti = "acti";
        let arreglo = new Array();

        $.ajax({
            data: {idActividad: acti},
            type: "POST",
            url: 'controller/json_numeroEmpleado.php',
            success: function (data) {
                if (data != 0) {
                    let availableTags = JSON.parse(data);
                for (let i = 0; i < availableTags.length; i++) {
                        arreglo.push(availableTags[i].numeroEmpleado);
                    }
                }
            },
            error: function (data) {
                alert(data);
            }
        });
                
        console.log(arreglo);
        $(".numEmpleado").autocomplete({
            source: arreglo
        });

    });
</script>

<!--Quien elaboro la lup -->
<script type="text/javascript">
    $("#nombreElaboro").click(function () {
        let numero = $("input[name=elaboro]").val();
        let idActividad = "buscarNum";
         $.ajax({
            data: {idActividad: idActividad, numero:numero},
            type: "POST",
            url: 'controller/json_numeroEmpleado.php',
             success: function (data) {
                if (data != 0) {
                        let availableTags = JSON.parse(data);
                        let nombre = availableTags[0].nombreCompleto;
                    $("#textElaboro").val(nombre);
                }else{
                    $("#textElaboro").val("No se encontro el numero de trabajador");
                }
            },
            error: function (data) {
                alert(data);
            }
        });
    });
 </script>


<!--Quien Reviso -->
<script type="text/javascript">
    $("#nombreReviso").click(function () {
        let numero = $("input[name=revision]").val();
        let idActividad = "buscarNum";
        $.ajax({
            data: {idActividad: idActividad, numero:numero},
            type: "POST",
            url: 'controller/json_numeroEmpleado.php',
            success: function (data) {
                if (data != 0) {
                    let availableTags = JSON.parse(data);
                    let nombre = availableTags[0].nombreCompleto;
                    $("#textReviso").val(nombre);
                }else{
                    $("#textReviso").val("No se encontro el numero de trabajador");
                }
            },
            error: function (data) {
                alert(data);
            }
        });
    });
</script>

<!--Quien Aprobo -->
<script type="text/javascript">
    $("#nombreAprobo").click(function () {
        let numero = $("input[name=aprobo]").val();
        let idActividad = "buscarNum";
        $.ajax({
            data: {idActividad: idActividad, numero:numero},
            type: "POST",
            url: 'controller/json_numeroEmpleado.php',
            success: function (data) {
                if (data != 0) {
                    let availableTags = JSON.parse(data);
                    let nombre = availableTags[0].nombreCompleto;
                    $("#textAprobo").val(nombre);
                }else{
                    $("#textAprobo").val("No se encontro el numero de trabajador");
                }
            },
             error: function (data) {
                alert(data);
            }
        });
     });
</script>

<script type="text/javascript">
    $("#validatedCustomFile").change(function (){
        $("#ruta_archivo").html("<h2>La ruta del archivo es:"+ $("#validatedCustomFile").val() +"</h2>");
    });
</script>


</html>