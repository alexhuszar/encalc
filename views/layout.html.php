<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $metadata['title'] ?> - Adventurer Sports</title>

  <meta name="description" content="<?php echo $metadata['description'] ?>" />

  <!--Import Google Icon Font-->
  <link href="<?php echo url_for('/') ?>fonts/material/material-icons.css" rel="stylesheet" />

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo url_for('/') ?>css/style.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript" src="<?php echo url_for('/') ?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo url_for('/') ?>bower_components/local-storage-js/storage.min.js"></script>
  <script type="text/javascript" src="<?php echo url_for('/') ?>bower_components/materialize/dist/js/materialize.min.js"></script>

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url_for('/') ?>assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo url_for('/') ?>assets/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo url_for('/') ?>assets/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo url_for('/') ?>assets/manifest.json">
  <link rel="mask-icon" href="<?php echo url_for('/') ?>assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#c73624">
</head>    
<body>
    <?= partial('partials/header.html.php'); ?>
     <div class="container"><?php echo $content ?></div>
    <?= partial('partials/footer.html.php'); ?>
</body>
</html>