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
         </div>
         <!-- .\col-md-12 -->

         <div class="col-md-12">
         <canvas id="myChart" width="600" height="400"></canvas>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        
        
        
<script type="text/javascript">
    /**Estraer los datos de la consulta */
    var layout = <?php echo json_encode($layout)?>;
    var array_datos = <?php echo json_encode($datos) ?>;
    var idDinamico = <?php echo json_encode($idDinamico); ?>;

    //BASE DE LA GRAFICA
    var datos = [];
    for(let i=0; i < layout.length; i++){
        datos.push(layout[i].nombre);
    }

    if(array_datos == null){
       
        var datos_grafica = new Array(datos.length);
        datos_grafica.fill(0);
        var cont=0; 

    }else {
        
        //DATOS A GRAFICAR
        var valores = [];
        for(let i=0; i< array_datos.length; i++){
            valores.push(array_datos[i][idDinamico]);
        }

        var datos_grafica = new Array(datos.length);
        datos_grafica.fill(0);
        var cont=0;

        //Array del layout
        datos.forEach(function( valor_datos, indice_valores, array_valores){
            //console.log("En el indice "+ indice_valores+" Valor "+valor_datos);
            var compara = indice_valores + 1;
            console.log("Valor a comparar "+ compara);
            //array de valores
            valores.forEach(function (valor_valores, indice_valores, array_valores){
                //console.log("En el indice "+ indice_valores + " valor_valores " + valor);
                if (valor_valores == compara){
                    datos_grafica[cont]=datos_grafica[cont]+1;
                    console.log(datos_grafica[cont]);
                }else{
                    datos_grafica[cont]=datos_grafica[cont]+0;
                    console.log(datos_grafica[cont]);
                }
            });
            cont++;
        });

    }

    
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: datos,
            datasets: [{
                label: 'Grafica General de Estandares',
                data:datos_grafica,
                backgroundColor: [
                    'rgba(105, 92, 166, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(105, 92, 166, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
              
</html>