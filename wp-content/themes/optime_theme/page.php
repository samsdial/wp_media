<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/header-inter'); ?>
<section>
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 header_form"><?php the_title(); ?></div>
      <div class="col-sm-12" style="">
        <div>

            <?php get_template_part('templates/content', 'page'); ?>
            
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>