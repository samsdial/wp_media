<?php
/*
Template Name: Trivia
*/
    get_template_part('templates/header-inter');
    $current_user = wp_get_current_user();
?>





<section class="trivia_cont banner_d">


    <video loop muted autoplay poster="<?php bloginfo('template_directory') ?>/dist/video/trivia_video.jpg" class="fullscreen-bg__video">
        <source src="<?php bloginfo('template_directory') ?>/dist/video/trivia_video.webm" type="video/webm">
        <source src="<?php bloginfo('template_directory') ?>/dist/video/trivia_video.mp4" type="video/mp4">
        <source src="<?php bloginfo('template_directory') ?>/dist/video/trivia_video.ogv" type="video/ogg">
    </video>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 vcenter">



                <img src="<?php bloginfo('template_directory') ?>/dist/images/lds.png" width="1397" height="620" alt="" class="img-responsive2" />

                <div class="trivia_btn_cont">

                    <a href="https://www.myoptimeqbuilder.com/pages/display.php?s=Vmtaa2QxRnJNVUpRVkRBOStQ&lang=es&email=<?php echo $current_user->user_email; ?>" target="_blank" class="btn btn-blue m_b10 btn-trivia"><div>¡JUEGA AHORA!</div></a>
                </div>


            </div><!--
	    --><div class="col-md-5 vcenter text-center col-sm-12">
                <div class="s38 semi_txt m_b20 ">¿Estás listo para ganar con “La Defensa Semanal”?

                </div>
                <div class="s26  m_b35">Participa semanalmente en la Trivia y gana fabulosos premios.

                </div>
            </div>

        </div>
    </div>

</section>



<section class="m_t40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 m_b30">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">

                            <a data-toggle="collapse" data-parent="#accordion" href="#ob1" aria-expanded="true"><span class="plus"></span><span class="header_txt">¿Quienes participan?</span></a>


                        </div>
                        <div id="ob1" class="panel-collapse collapse in">
                            <div class="panel-body">Promoción válida sólo para los <span class="white_txt regular_txt">vendedores del Mayorista y Reseller</span> autorizados de Lenovo en los países participantes de la <span class="semi_txt white_txt">Súper <span class="fux_txt">Copa</span> Lenovo</span>.


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <a data-toggle="collapse" data-parent="#accordion" href="#ob2" aria-expanded="true"><span class="plus"></span><span class="header_txt">¿Cómo Participar?</span></a>


                        </div>
                        <div id="ob2" class="panel-collapse collapse">
                            <div class="panel-body">Responde semanalmente las 2 preguntas de la Trivia combinando conocimientos tecnológicos del portafolio de Lenovo con Windows 10 pro e Intel y de fútbol y enfréntate simultáneamente a otros jugadores. Todos los lunes recibirás las 2 preguntas y tienes hasta el jueves para responderlas.


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading ">

                            <a data-toggle="collapse" data-parent="#accordion" href="#ob3" aria-expanded="true"><span class="plus"></span><span class="header_txt">Período Válido del la Promoción</span></a>


                        </div>
                        <div id="ob3" class="panel-collapse collapse">
                            <div class="panel-body">La temporada de la Trivia <span class="white_txt">“La defensa Semanal”</span> será desde el <span class="regular_txt white_txt">11 de diciembre 2017 hasta el 1 de junio de 2018</span>.


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <a data-toggle="collapse" data-parent="#accordion" href="#ob4" aria-expanded="true"><span class="plus"></span><span class="header_txt">Premios</span></a>


                        </div>
                        <div id="ob4" class="panel-collapse collapse">
                            <div class="panel-body">

                                <div class="table-responsive m_b15">

                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                        <thead>
                                        <tr>
                                            <th width="19%">Participantes</th>
                                            <th width="15%">Periocidad</th>

                                            <th width="17%">Ganadores por país</th>
                                            <th width="14%">Premios</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="3" class="bg_cell white_txt">Vendedores del Mayorista y del Reseller</td>
                                            <td>Semanal</td>

                                            <td>1 ganador</td>
                                            <td><span class="semi_txt white_txt">$60 USD </span></td>
                                        </tr>
                                        <tr>
                                            <td>Trimestre 1</td>


                                            <td>5 ganadores</td>
                                            <td><span class="semi_txt white_txt">$200 USD</span></td>
                                        </tr>
                                        <tr>
                                            <td>Trimestre 2</td>

                                            <td>1 ganador</td>
                                            <td><span class="semi_txt white_txt">TV Inteligente de 55&quot;</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section>
<style>
    .logo_lenovo_v{
        display: none;
    }
</style>
