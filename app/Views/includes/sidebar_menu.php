<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url() ?>">
                <i class="bi bi-grid"></i>
                <span>Panel principal</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Menu desplegable</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Opcion de menu 1</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Opcion de menu 2</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Opcion de menu 3</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-heading">Otras opciones</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['clientes']) ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>Clientes</span>
            </a>
        </li><!-- End Clientes Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['proyectos']) ?>">
                <i class="bi bi-bar-chart-steps"></i>
                <span>Proyectos</span>
            </a>
        </li><!-- End Proyectos Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['usuarios']) ?>">
                <i class="bi bi-people"></i>
                <span>Usuarios</span>
            </a>
        </li><!-- End Usuarios Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['servicios']) ?>">
                <i class="bi bi-server"></i>
                <span>Servicios</span>
            </a>
        </li><!-- End Servicios Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['planes']) ?>">
                <i class="bi bi-columns"></i>
                <span>Planes</span>
            </a>
        </li><!-- End Planes Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['consultas']) ?>">
                <i class="bi bi-question-diamond"></i>
                <span>Consultas</span>
            </a>
        </li><!-- End Consultas Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['productos']) ?>">
                <i class="bi bi-cast"></i>
                <span>Productos</span>
            </a>
        </li><!-- End Productos Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url(['personal']) ?>">
                <i class="bi bi-file-person"></i>
                <span>Personal</span>
            </a>
        </li><!-- End Personal Page Nav -->

    </ul>
</aside><!-- End Sidebar-->