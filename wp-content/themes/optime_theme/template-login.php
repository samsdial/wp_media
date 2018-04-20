<?php
/**
 * Template Name: Custom page
 */
get_template_part('templates/header-inter');
?>
<?php while (have_posts()) : the_post(); ?>
    <section class="default_banner reg_banner">
        <div class="container-fluid">
            <div class="row default_row" >
                <div class="col-sm-12 m_t50">
                    <?php get_template_part('templates/page', 'header'); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 m_t50" style="">
                    <div >
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
