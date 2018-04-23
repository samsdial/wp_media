<nav class="navbar navbar-expand-md">
    <div class="container">
        <a href="<?= esc_url(home_url('/')); ?>" class="navbar-brand text-black"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler text-black" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']);
            endif;
            ?>

            <!--<ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>-->
        </div>
    </div>
</nav>


<header class="banner">
  <div class="container">
    <a class="brand" href=""></a>
    <nav class="nav-primary">

    </nav>
  </div>
</header>
<!--
<div class="logo_lenovo_dv hidden  visible-lg"><img src="<?php /*bloginfo('template_directory') */?>/dist/images/lenovo_v.svg" alt="" class="img-responsive"></div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="barra_logo">

            <div class="i_block">
                <div class="t_cell  hidden-lg va_t"><a href="<?/*= esc_url(home_url('/landing/'));*/?>"><img src="<?php /*bloginfo('template_directory') */?>/dist/images/lenovo_h.svg" alt="<?php /*bloginfo('name'); */?>" class="logo_lenovo_dh img-responsive2" /></a></div>
                <div class="t_cell va_m"><a href="<?/*= esc_url(home_url('/landing/'));*/?>"><img src="<?php /*bloginfo('template_directory') */?>/dist/images/super_logo.svg" alt="<?php /*bloginfo('name'); */?>" class="super_logo_main img-responsive2" /></a></div>
            </div>


        </div>


        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">

            <?php
/*            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            */?>
        </div>

    </div>

</nav>
<!--<ul class="nav navbar-nav navbar-right hidden">
        <li class=""><a href="#">inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="#">como ganar</a></li>
        <li><a href="#">trivia game</a></li>
        <li><a href="#">analista deportivo</a></li>
        <li><a href="#">the best mayorista</a></li>
        <li><a href="#">value proposition</a></li>
    </ul>-->
