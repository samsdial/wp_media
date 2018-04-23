<head>
    <?php echo seo_wp_bravo(); 

    $current_user = wp_get_current_user();
    ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/dist/images/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>