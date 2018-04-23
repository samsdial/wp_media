<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
<main class="full">
    <div class="slider">
        <?php if( have_rows('slider', 'option') ) : ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('slider', 'option') ) : the_row();?>
                <?php if ($i = 0 ) : ?>
                    <div class="slick_slide--img" style="background-image: url('<?php echo get_sub_field( 'image' )['url']; ?>');">
                        <div class="info">
                            <div class="title txt_size--x50 txt_upper cl--white">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                            </div>
                            <div class="bdr_solid bdr_color--white bdr_width--x2 mg_top--x10"></div>
                            <div class="subtitle txt_capital cl--white">
                                <p><?php the_sub_field( 'link' ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="slick_slide--img" style="background-image: url('<?php echo get_sub_field( 'image' )['url']; ?>');">
                        <div class="info">
                            <div class="title txt_size--x50 txt_upper cl--white">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                            </div>
                            <div class="bdr_solid bdr_color--white bdr_width--x2 mg_top--x10"></div>
                            <div class="subtitle txt_capital cl--white">
                                <p><?php the_sub_field( 'link' ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endwhile; ?>
        <?php endif?>
    </div>
    <div class="box_gradient"></div>
</main>