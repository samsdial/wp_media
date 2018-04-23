<?php
  /**
   * CGR 'Header'
   *
   * @package WordPress
   * @subpackage CGR
   * @since CGR 1.0
   */
    //if(// !empty ( get_field('logo', 'option') ) ) :
      //$image = get_field('logo', 'option')['url'];
    //else:
      //$image = 'https://s18.postimg.org/88wfjwyh5/logo.png';
    //endif;
?>
<header class="bgc--blue bdr_top_red--x5">
  <div class="container">
    <div class="column-brand" style="position: relative;">
      <h1 class="hidden">cgr</h1><span class="logo logo_cgr_blue--min"></span>
      <a class="btn_ghost" href="<?php echo( get_home_url());?>"></a>
    </div>
    <div class="column-menu">
      <div class="contact pd_right--x10 txt_right cl--white va_m">
        <ul class="contact-list list_style--none">
          <li style="position: relative;">
              <a class="btn_ghost" href="<?php the_field('maps', 'option'); ?>"" title="Lugar"></a>
              <span class="icon-marker icon_size--x10 mg_right--x10"></span>
              <span class="info"><?php the_field('ubication', 'option');?></span>
          </li>
          <li style="position: relative;">
          <a class="btn_ghost" href="tel:+<?php the_field('phone_one', 'option'); ?>"></a>
          <span class="icon-phone icon_size--x10 mg_right--x10"></span>
          <span class="info"> <?php the_field('phone_one', 'option'); ?> / <?php the_field('phone_two', 'option'); ?></span></li>
        </ul>
      </div>
      <div class="social bdr_left--solid pd_left--x10 bdr_color--white bdr_width--x1 txt_center cl--white va_m"><span class="title">Siguenos en:</span>
        <ul class="list--inline">
          <li><a class="btn_ghost" href="<?php the_field('instagram', 'option'); ?>"></a><span class="icon-face icon_size--x15"></span></li>
          <li><a class="btn_ghost" href="<?php the_field('facebook', 'option'); ?>"></a><span class="icon-face icon-instagram icon_size--x15"></span></li>
        </ul>
      </div><a class="nav_trigger cl--white" href="#0">Menu<span></span></a>
      <nav class="nav mg_top--x10">
        <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-site']);
            endif;
          ?>
      </nav>
    </div>
  </div>
</header>
