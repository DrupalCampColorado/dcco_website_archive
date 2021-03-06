<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php
    if (theme_get_setting('toggle_favicon')) {
      $favicon = theme_get_setting('favicon');
    }
    else {
      $favicon = "/sites/all/themes/center/images/favicon.ico";
    }
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php print $favicon; ?>" />
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript" src="//use.typekit.net/tpk4uum.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php
    print $page_top;
    print $page;
    print $page_bottom;
  ?>
</body>
</html>
