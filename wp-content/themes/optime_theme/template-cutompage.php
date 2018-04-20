<?php
/**
 * Template Name: Custom Template
 */
get_template_part('templates/header-inter');
?>
<?php while (have_posts()) : the_post(); ?>
    <section class="banner_d">
        <div class="container-fluid">
            <div class="row">
                <div class="overlay_default"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 header_form"><?php get_template_part('templates/page', 'header'); ?></div>
                        <div class="col-sm-12 ">
                            <div>
                                <?php get_template_part('templates/content', 'page'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
