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
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic&subset=latin,latin-ext" rel="stylesheet" type="text/css"/>

		<?php tha_head_bottom(); ?>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">
        <link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="<?php bloginfo('template_url') ?>/css/phpsp.css" rel="stylesheet" type="text/css"/>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	
    <body <?php body_class(); ?>>

        <header class="header-container">
            <section class="header-section wrapper clearfix">
              <h1 class="title"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></h1>
              <div class="blogingo">Grupo de Desenvolvedores PHP de São Paulo</div>
              <form class="form-search" action="" method="post" accept-charset="utf-8">
                <input type="text" name="searc" value="" placeholder="Buscar no PHPSP">
                <button type="button">OK</button>
              </form>
            </section>
            <nav class="clearfix nav">
              <div class="clearfix nav-topo">
                <ul id="menu-principal" class="wrapper menu">
                  <li id="menu-item-367" class="menu-item current-menu-item current_page_item menu-item-367">
                    <a title="Página inicial" href="http://infosign.net.br">Artigos</a>
                  </li>
                  <li id="menu-item-868" class="menu-item menu-item-868">
                    <a href="http://infosign.net.br/topico/envelopamento-de-carros/">Envelopamento</a>
                  </li>
                </ul>                
              </div>
            </nav>
        </header>

<?php
/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */
