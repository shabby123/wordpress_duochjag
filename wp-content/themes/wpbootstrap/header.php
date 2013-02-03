  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', 1, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body>

  <!-- Facebook like page -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=270442449684221";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class="container-narrow">

    <!-- Logo -->
    <div class="pagetitle">
      <p><a class="notextdecoration" href="<?php  echo site_url(); ?>">duochjagochpensionärerna</a></p>
    </div>

    <!-- Menu -->   
    <div class="row-fluid">
      <div class="span12">
        <p class="pagemenu">
          <a href="mailto:contact@duochjagochpensionarerna.se" title="Contact us">email</a>
          &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://twitter.com/ochpanshisarna" target="_new" title="Link to du och jag och pensionärerna twitter account">twitter</a>
          &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="http://localhost:8888/wordpress_duochjag/?page_id=40">blog</a>
        </p>
      </div>
    </div>

    <hr>