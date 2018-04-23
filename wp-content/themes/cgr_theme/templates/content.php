<!-- <article  <?php // post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php // the_permalink(); ?>"><?php // the_title(); ?></a></h2>
    <?php // get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php // the_excerpt(); ?>
  </div>
</article> -->
    <!-- Slider CGR HOME UNO -->
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
                              <p><?php the_sub_field( 'subtitulo' ); ?></p>
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
                              <p><?php the_sub_field( 'subtitulo' ); ?></p>
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
<!-- FIN -->
    <main class="middle pd_top--x50 pd_bottom--x100">
      <section id="welcome">
        <div class="box_content">
          <div class="title mg_bottom--x30 txt_size--x35 txt_upper txt_center cl--gray">
            <h2><?php the_field('title_intro', 'option') ; ?></h2>
          </div>
          <div class="subtitle mg_bottom--x20 txt_center cl--blue">
            <p><b><?php the_field('subtitle_blue','option') ; ?></b></p>
          </div>
          <div class="paragraf txt_center">
            <p><?php the_field('description_intro','option') ; ?></p>
          </div>
        </div>
      </section>
    </main>
    <main class="full bgc--gainsboro pd_top--x100 pd_bottom--x50">
      <div class="container">
        <div class="row">
          <div class="column column-min txt_center pd_box--x20 bdrBlue_left_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-mision"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>misión</h2>
            </div>
            <div class="content">
              <p><?php the_field('mision', 'option')?></p>
            </div>
          </div>
          <div class="column column-min txt_center pd_box--x20 bdrBlue_left_sm--x1 bdrBlue_right_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-view"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>visión</h2>
            </div>
            <div class="content">
              <p><?php the_field('vision', 'option')?></p>
            </div>
          </div>
          <div class="column column-min txt_center pd_box--x20 bdrBlue_right_sm--x1 pd_bottom--x50">
            <div class="box_icon mg_bottom--x20 txt_size--x50 cl--blue"><span class="icon-theme"></span></div>
            <div class="title mg_bottom--x20 txt_capital txt_size--x35 cl--blue">
              <h2>Equipo</h2>
            </div>
            <div class="content">
              <p><?php the_field('team', 'option')?></p>
            </div>
          </div>
        </div>
      </div>
    </main>
