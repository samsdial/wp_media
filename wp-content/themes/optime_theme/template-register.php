<?php
/*
Template Name: Register
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="default_banner reg_banner">
  <div class="container-fluid">
    <div class="row default_row" >
      <div class="overlay_default"></div>
      <div class="col-sm-12 text">
          <a href="<?= esc_url(home_url('/'));?>"><img src="<?php bloginfo('template_directory') ?>/dist/images/super_logo.svg" alt="" class="img-responsive2 super_logo2" /></a></div>
      <div class="col-sm-12">
          <?php get_template_part('templates/page', 'header'); ?>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <p class="p_t25 p_b15">Por favor, sigue los siguientes pasos para registrarte en la promoción de ventas <span class="bold_txt w_space">Súper <span class="fux_txt">Copa</span> Lenovo</span></p>
            </div>
        </div>
    </div>
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 header_form">Información General</div>
      <div class="col-sm-12" style="">
        <div >
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

    <style type="text/css">
        .header_form{
            padding: 22px 0px 12px 15px;
            margin: 0px 15px;
            width: 97.5%;
        }

        .um-row{
            background: rgba(41,44,49,1.00);
            padding: 5px 15px 0px 15px;
        }

        .clear-umcol{
            display: block;
            height: 72px;
            width: 103%;
            background: rgba(30,32,36,1.00);
            position: relative;
            margin-left: -16px;
            border-bottom: rgba(58,141,222,1.00) solid 4px;
        }
        .clear-umcol .um-field-divider{
            font-family: 'gotham_htfbold' !important;
            display: inline-block;
            position: absolute;
            padding: 41px 0px 0px 15px;
        }
        .um-col-121{
            margin-bottom: 5px;
        }
        .um-row._um_row_4{
            border-bottom: rgba(58,141,222,1.00) solid 4px;
            font-family: 'gotham_htfbold' !important;
        }
        .um-row._um_row_5{
            padding-top: 15px;
            padding-bottom: 35px;
        }
        .um-row._um_row_4,
        .um-row._um_row_6,
        .clear-umcoltwo{
            background: rgba(30,32,36,1.00);
        }
        .um-row._um_row_1{
            padding-top: 15px;
        }
        .um-row._um_row_3{
            padding-bottom: 35px;
            margin-bottom: 15px !important;
        }
        .clear-umcoltwo  .um-field-checkbox, .clear-umcoltwo .um-field-radio{
            padding-left: 15px;
        }
        .select2.select2-container .select2-selection{
            border: 1px solid rgba(65,70,79,1.00) !important;
            outline: none;
            background: none !important;
        }
        .select2-results li.select2-results__option.select2-results__option--highlighted{
            background: rgba(58,141,222,1.00) !important;
            color: white !important;
            margin: 0px !important;
            padding: 10px 20px !important;
            border-bottom: rgba(41,44,49,1.00) solid 1px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            color: white;
        }
        .select2-container--default .select2-results__option[aria-selected=true]{
            background: black !important;
        }
        .select2-container.select2-container--open .select2-dropdown{
            border: rgba(41,44,49,1.00) solid 1px !important;
        }
        .select2-dropdown{
            background: #41464f !important;
            border-bottom: rgba(41,44,49,1.00) solid 1px;
        }
        .select2-results li{
            color: white !important;
            margin: 0px !important;
            padding: 10px 20px !important;
            border-bottom: rgba(41,44,49,1.00) solid 1px;
        }
        .select2-search--dropdown{
            display: none;
        }
        .um-25.um input[type=submit].um-button{
            text-transform: uppercase;
        }
        .select2.select2-container .select2-selection .select2-selection__arrow:before{
            content: ""!important;
            /* font-size: 27px!important; */
            /* font-family: Ionicons!important; */
            width: 0!important;
            display: block;
            height: 0;
            line-height: 0;
            /* color: rgba(237,62,133,1.00); */
            border-left: 6px solid transparent;
            position: absolute;
            top: 46%;
            right: 12px;
            border-right: 6px solid transparent;
            border-top: 5px solid rgba(237,62,133,1.00);
        }
        .um-field{
            padding-top: 5px;
        }
        /*ajuste de columnas password*/
        .um-field-password{
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }
        .um-col-1 > .um-field-password:last-child{
            float: right;
        }

        .um-col-121 .um-fiel {
            display: inline-block;
            width: 25%;
        }
        .um-col-121{
            display: table;
        }
        .um-col-121 .um-field.um-field-phone_country, .um-col-121 .um-field.um-field-phone_area, .um-col-121 .um-field.um-field-phone_numbers, .um-col-121 .um-field.um-field-phone_number {
            display: table-cell;
        }

        .um-col-121 .um-field.um-field-phone_country,
        .um-col-121 .um-field.um-field-phone_area {
            width: 20%;
            padding-right: 15px;
        }
        .um-field-label label {
            font-size: 13.5px !important;
        }
    </style>
<?php endwhile; ?>