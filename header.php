<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
        <title><?php wp_title( '&laquo;', true, 'right' ); ?></title>

		<?php tha_head_bottom(); ?>
        <?php wp_head(); ?>

        <!-- styles -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic&subset=latin,latin-ext" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/phpsp.css" />

        <!-- scripts -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	
    <body <?php body_class(); ?>>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=263822843721947";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <header class="header-container">
            <section class="header-section container clearfix">
              <h1 class="title"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></h1>
              <div class="blogingo">Grupo de Desenvolvedores PHP de São Paulo</div>
              <form class="form-search" action="" method="post" accept-charset="utf-8">
                <input type="text" name="searc" value="" placeholder="Buscar no PHPSP">
                <button type="button">OK</button>
              </form>
            </section>
            <nav class="clearfix nav">
              <div class="clearfix nav-topo">
                <ul id="menu-principal" class="container menu">
                  <li id="menu-item-367" class="menu-item current-menu-item current_page_item menu-item-367">
                    <a title="Página inicial" href="#">Artigos</a>
                  </li>
                  <li id="menu-item-868" class="menu-item menu-item-868">
                    <a href="#">Envelopamento</a>
                  </li>
                </ul>                
              </div>
            </nav>
        </header>

<?php
/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */
