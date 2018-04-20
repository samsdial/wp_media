<?php
/**
 * Template Name: landing
 */
    get_template_part('templates/header-inter');
?>
<?php while (have_posts()) : the_post(); ?>

    <section class="banner_d landing_b">
        <div class="container-fluid">
            <div class="row">
                <div class="overlay_default hidden"></div>
                <div class="text-center col-sm-offset-4 col-sm-8 col-md-6 col-md-offset-6 m_b30">
                    <div class="bold_txt s30">¡Bienvenidos a Súper <span class="fux_txt">Copa</span> Lenovo!</div>

                    <div class="box_dark up_linea m_t20">

                        La promoción de ventas que te ayudará a incrementar tus beneficios y reconocer tu esfuerzo individual y el de tu empresa dándote la oportunidad de ganar muchos premios.
                        <br>
                        <br>
                        Enfoca tus ventas en productos Lenovo PCSD con Windows 10 Pro e Intel® (Laptops, Desktops, Workstation, Tabletas, Accesorios y Servicios)
                        para pequeñas y medianas empresas.
                        <br>
                        <br>
                        <span class="blue_txt semi_txt">¡Contamos con tu activa  participación en esta promoción!</span>

                    </div>
                    <div class="col-sm-12">
                        <div class="prizes"><img src="<?php bloginfo('template_directory') ?>/dist/images/prizes.png" width="762" height="349" alt="" class="img-responsive"></div>
                    </div>
                    <div class="row mini_boxes hidden">

                        <div class="col-sm-4 col-xs-4">

                            <div class="mini_box_dark">
                                <div class="prize_txt">25 TV’s</div>

                                <div class="prize_img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/images/tv.png" width="234" height="194" alt="" class="img-responsive2" /> </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <div class="mini_box_dark">
                                <div class="prize_txt">	<div class="m_b5">125 tarjetas de $60</div>
                                    25 tarjetas de $200</div>


                                <div  class="prize_img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/images/lenovo_card.png" width="234" height="194" alt="" class="img-responsive2" /> </div>


                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <div class="mini_box_dark">
                                <div class="prize_txt">Viaje a Russia</div>
                                <div  class="prize_img">
                                    <img src="<?php bloginfo('template_directory') ?>/dist/images/plane.png" width="234" height="194" alt="" class="img-responsive2" /> </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xs-4 text-center m_b40 ">

                    <div class="icon_cir calendar"></div>
                    <div class="">Participa desde hoy <br>
                        hasta julio de 2018</div>
                </div>

                <div class="col-xs-4 text-center m_b40 ">
                    <div class="icon_cir prize_150"></div>
                    <div>Todos los vendedores de nuestros asociados de negocios, podrán ganar uno de los <br><span class="semi_txt fux_txt upper">150 premios disponibles</span>  </div>
                </div>
                <div class="col-xs-4 text-center m_b40 ">
                    <div class="icon_cir travel"></div>
                    <div>Si eres el gerente de nuestros asociados de negocios, tendrás la  <span class="semi_txt fux_txt upper">oportunidad  <br>de viajar a Moscú </span>  </div>
                </div>


            </div>

        </div>


    </section>
    <style>
        .logo_lenovo_v{
            display: none;
        }
    </style>


<?php endwhile; ?>