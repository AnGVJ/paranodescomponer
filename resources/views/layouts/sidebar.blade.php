<div class="sidebar d-flex flex-column position-fixed pl-0 pt-0" style="width: 250px; ">
    <ul class="nav nav-pills flex-column mt-3">
        <!-- Encabezado de navegación -->
        <li class="nav-item">
            <a href="#" class="nav-link d-flex align-items-center" style="font-weight: bold;">
                <img src="images/hogar.png" alt="Inicio" style="width: 25px; height: 25px; margin-right: 10px;">
                <span>Inicio</span>

            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link">
                <img src="images/proyectos.png" alt="Proyectos" style="width: 25px; height: 25px; margin-right: 10px;">
                Proyectos
                <x-dropdown-link :href="route('Inicio.inici')"></x-dropdown-link>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('materiales.index') }}" class="nav-link">
                <img src="images/herramientas.png" alt="Materiales"
                    style="width: 25px; height: 25px; margin-right: 10px;">

                Materiales

            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="images/herramienta.png" alt="Herramientas"
                    style="width: 25px; height: 25px; margin-right: 10px;">
                Herramientas
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="images/petreo.png" alt="Material Petreo"
                    style="width: 25px; height: 25px; margin-right: 10px;">
                Material Petreo
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="images/manodeobra.png" alt="Mano de Obra"
                    style="width: 25px; height: 25px; margin-right: 10px;">
                Mano de Obra
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="images/reportes.png" alt="Reportes" style="width: 25px; height: 25px; margin-right: 10px;">
                Reportes
            </a>
        </li>

        <!-- Encabezado de soporte -->
        <li class="nav-item mt-4">
            <span class="text-muted" style="padding-left: 10px; font-size: 0.9em;">Soporte</span>
        </li>



        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="images/ajuste.png" alt="Ajustes" style="width: 20px; height: 25px; margin-right: 25px;">
                Ajustes
            </a>
        </li>
    </ul>
</div>