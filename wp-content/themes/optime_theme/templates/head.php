<head>
    <?php echo seo_wp_bravo(); 

    $current_user = wp_get_current_user();
    ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/dist/images/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79682701-11"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-79682701-11');

    gtag('set', {'user_id': <?php echo $current_user->user_id; ?> });
  </script>
</head>