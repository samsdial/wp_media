<?php
/**
 * Template Name: Perfil de usuario
 */
get_template_part('templates/header-inter');
?>
<?php while (have_posts()) : the_post(); ?>
    <section class="default_banner reg_banner">
        <div class="container-fluid">
            <div class="row default_row" >
                <div class="col-sm-12 m_t50">
                    Perfil de Usuario
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 header_form"><?php the_title(); ?></div>
                <div class="col-sm-12" style="">
                    <div >
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .logo_lenovo_v{
            display: none;
        }
        .um-field-divider-text span{
            font-weight: 900;
        }
        .um-profile .um-profile-body{
            max-width: 100% !important;
            padding-top: 0;
        }
        .um-profile .um-profile-body .um-row._um_row_2 {
            background: rgba(41,44,49,1.00);
            padding: 17px;
            margin-bottom: 45px !important;
            border-top: rgba(58,141,222,1.00) solid 4px;
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
            padding-right: 11px;
        }
        .um-center {
            margin-top: 55px;
        }
        .select2.select2-container .select2-selection {
            background: transparent !important;
            border: none !important;
            border-bottom: 2px solid rgba(105, 105, 105, 0.2)!important;
            color: silver;
            padding: 0px !important;
            cursor: not-allowed;
        }

        .select2.select2-container .select2-selection .select2-selection__arrow {
            display: none !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: silver;
        }

        .um .um-form input[type=text], .um .um-form input[type=tel], .um .um-form input[type=number], .um .um-form input[type=password], .um .um-form textarea, .um .upload-progress, .select2-container .select2-choice, .select2-drop, .select2-container-multi .select2-choices, .select2-drop-active, .select2-drop.select2-drop-above {
            border: none !important;
            border-bottom: 2px solid rgba(105, 105, 105, 0.2)!important;
            border-radius: 0px !important;
        }
    </style>
<?php endwhile; ?>
