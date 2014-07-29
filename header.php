<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LMMS &bull; <?php echo get_page_name(); ?></title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- FIXME per Bootstrap, these should be placed at the end of the document (footer.php) so the pages load faster -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </head>

    <body role="document">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img class="logo-sm" src="img/logo_sm.png" />LMMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php
                           menu_item("Home", "/index.php");
                           menu_item("Download");
                           menu_item("Screenshots");
                           menu_item("Tracks");
                           menu_item("Documentation");
                           menu_item("Community");
                           menu_item("Share", "/lsp/");
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container theme-showcase" role="main">
<?php


/*
 * Returns the current page name, i.e. "Home", etc
 */
function get_page_name() {
   $uri = str_replace('/', '', $_SERVER[REQUEST_URI]);
   switch($uri) {
      case 'header.php':
      case '':
      case 'index.php':
      case 'home.php':
         return 'Home';
      default:
         return preg_replace('/\.[^.]*$/', '', ucfirst($uri));
   }
}

/*
 * Creates a simple tag <li><a href="menu_item.php">Menu Item</a></li>
 * Taking into consideration the "active" status/style
 */
function menu_item($text, $url) {
   // Determine the "Active Tab
   if ($text == get_page_name()) {
      $active = ' class="active"';
   } else {
      $active = '';
   }

   if (is_null($url)) {
      $url = '/' . strtolower($text) . '.php';
   }

   echo '<li' . $active . '><a href="' . $url . '">' . $text . '</a></li>';
}

?>