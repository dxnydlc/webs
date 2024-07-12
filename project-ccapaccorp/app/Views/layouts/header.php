


<header class=" <?= $this->renderSection('header-class') ?> " >
    <nav class="main-menu main-menu-with-bg">
        <div class="container">
            <div class="main-menu__logo"  style="padding: 10px 0;max-width: 40%;" >
                <div class="row">
                    <div class="col-lg-12 col-10 " >
                        <a href="/">
                            <img src="<?= esc($APP_URL) ?>2024/logo-11.png" class=" img-fluid " alt="Eduact">
                        </a>
                    </div>
                </div>
            </div><!-- /.main-menu__logo -->
            <div class="main-menu__nav">
                <ul class="main-menu__list">
                    <!-- ................................................. -->
                    <li class=" dropdown1 megamenu"  >
                        <a href="/">Inicio</a>
                    </li>
                    <!-- ................................................. -->
                    <!-- <li class=" dropdown1 megamenu"  >
                        <a href="/nosotros" >Nosotros</a>
                    </li> -->
                    <!-- ................................................. -->
                    <li class="dropdown">
                        <a href="#" style="text-transform: none;" >Seminarios</a>
                        <ul style="top: 55%" >
                            <li>
                                <a href="/seminario/laboral" >Laboral</a>
                            </li>
                            <li>
                                <a href="/seminario/tributario" >Tributario</a>
                            </li>
                            <li>
                                <a href="/seminario/contable" >Contable</a>
                            </li>
                        </ul>
                    </li>
                    <!-- ................................................. -->
                    <li class="dropdown">
                        <a href="#">Capacitación In Company</a>
                        <ul style="top: 55%" >
                            <li>
                                <a href="/capacitacion-in-company/laboral">Laboral</a>
                            </li>
                            <li>
                                <a href="/capacitacion-in-company/tributario" >Tributario</a>
                            </li>
                            <li>
                                <a href="/capacitacion-in-company/contable">Contable</a>
                            </li>
                        </ul>
                    </li>
                    <!-- ................................................. -->
                    <li>
                        <a href="/contacto">Contacto</a>
                    </li>
                    <!-- ................................................. -->
                    <!-- ................................................. -->
                    <!-- ................................................. -->
                    <!-- ................................................. -->
                    <!-- ................................................. -->
                    <!-- ................................................. -->
                    
                </ul>
            </div><!-- /.main-menu__nav -->
            <div class="main-menu__right">
                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-bars"></i>
                </a><!-- /.mobile menu btn -->
            </div><!-- /.main-menu__right -->
            <!-- /.main-menu__right -->
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header>
<!-- /.main-header -->