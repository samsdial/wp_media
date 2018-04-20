<?php
/**
 * Template Name: Login
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <section class="login">
        <div class="container-fluid">
            <div class="row login_row" >
                <div class="overlay_login"></div>
                <div class="col-sm-12 text">
                    <img src="<?php bloginfo('template_directory') ?>/dist/images/super_logo.svg" alt="" class="img-responsive2 super_logo" /> </div>

                <div class="col-md-5 col-lg-4 col-sm-5 vcenter col-xs-12">
                    <div class="white_txt semi_txt s30">Transforma tu esfuerzo y pasión en premios</div>
                    <hr>
                    <div class="calendar_p">Participa desde hoy hasta julio de 2018 </div>

                    <?php if (is_user_logged_in()) {
                        // Contenido visible únicamente para usuarios conectados
                        echo "
        
                            <a href=\"/copalenovo/landing/\" class=\"btn btn-primary btn-fux w100 m_t20 m_b10\">participa ahora</a>
                            <div class=\"m_b40\"></div>
                            
                            <div class=\"m_t40\">Enfoca tus ventas en productos Lenovo PCSD con Windows 10 Pro e Intel® <span class=\"op70\">(Laptops, Desktops, Workstation, Tabletas, Accesorios y Servicios)</span> para pequeñas y medianas empresas y vive la emoción de la&nbsp; <span class=\"bold_txt w_space\">Súper <span class=\"fux_txt\">Copa</span> Lenovo</span>.
                                <div class=\"m_t20 op70\">Intel Inside®, para una productividad poderosa.</div>
                            </div>
                            </div>
                         ";
                    } else {
                        // Contenido para el resto de visitas (o usuarios no conectados)
                        echo "
                            <a href=\"/copalenovo/register/\" class=\"btn btn-primary btn-fux w100 m_t20 m_b10\">Regístrate ya</a>
                            <hr>
                            <div class=\"m_b5\">Ingresa tus credenciales</div>
                        ";
                        echo "<div class=\"m_b30\">";
                            get_template_part('templates/content', 'page');
                        echo "</div>
                            </div><!--
                              --><div class=\"vbottom col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 \">
                                            <div class=\"m_t40\">Enfoca tus ventas en productos Lenovo PCSD con Windows 10 Pro e Intel® <span class=\"op70\">(Laptops, Desktops, Workstation, Tabletas, Accesorios y Servicios)</span> para pequeñas y medianas empresas y vive la emoción de la&nbsp; <span class=\"bold_txt w_space\">Súper <span class=\"fux_txt\">Copa</span> Lenovo</span>.
                                                <div class=\"m_t20 op70\">Intel Inside®, para una productividad poderosa.</div>
                                            </div>
                                        </div>

                            ";
                    }
                    ?>
            </div>
        </div>
        </div>
    </section>
    <style type="text/css">
        .um-6.um .um-form input[type=text], .um-6.um .um-form input[type=tel], .um-6.um .um-form input[type=password], .um-6.um .um-form textarea{
            background-color: rgba(255,255,255,0) !important;
            border: 1px solid rgba(255,255,255,0.6) !important;
        }
        .um-6.um .um-form input[type=text]:hover,
        .um-6.um .um-form input[type=tel]:hover,
        .um-6.um .um-form input[type=password]:hover,
        .um-6.um .um-form textarea:hover{
            background-color: rgba(255,255,255,0) !important;
            border: 1px solid rgba(255,255,255,1) !important;
        }
        .um-6.um .um-button{
            text-transform: uppercase;
            border: rgba(58,141,222,1.00) solid 1px !important;

        }
        .um-row._um_row_1{
            margin-bottom: 35px !important;
        }
    </style>


<?php endwhile; ?>