<!-- Nav Administrador-->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark rounded">
    <a class="navbar-brand" href="">TPM || Administrador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <!--.\ li -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seguimiento
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?controller=Estandar&action=index">Crear estandar</a>
                    <a class="dropdown-item" href="index.php?controller=Estandar&action=mostrarEstandar">Mostrar estandar</a>
                </div>
            </li>
            <!--.\ li -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Complementos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?controller=TipoEstandar&action=index">Tipo de Estandar</a>
                    <a class="dropdown-item" href="index.php?controller=Impacto&action=index">Impacto</a>
                    <a class="dropdown-item" href="index.php?controller=Revision&action=index">Revisión Actual</a>
                    <a class="dropdown-item" href="index.php?controller=ResponsableEje&action=index">Responsable de Ejecución</a>
                    <a class="dropdown-item" href="index.php?controller=FrecuenciaActi&action=index">Frecuencia de la Actividad</a>
                </div>
            </li>
            <!--.\ li -->
            
            <!--.\ 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registros del Administrador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">Responsable</a>
                </div>
            </li>
            li -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Graficas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?controller=Grafica&action=tipoEstandar">Grafica Maestra</a>
                </div>
            </li>
            <!--.\ li -->

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=login&action=salir">Salir</a>
            </li>
            <!--.\ li -->

        </ul>
        <!-- .\ ul -->
    </div>
</nav>
<!--.\ Nav Bar -->