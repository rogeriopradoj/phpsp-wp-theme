<?php

/**
 * Adds a new submenu page in Theme's section to configure the home banner.
 * PHPSP_Menu::getBanner();
 */

class PHPSP_Menu {
    public function __construct() {
	add_action('admin_menu', array(&$this, 'addMenu'));
	add_action('admin_init', array(&$this, 'registerSettings'));
	add_action('admin_notices', array(&$this, 'adminNotices'));
    }


    public function addMenu() {
        add_theme_page(
                'PHPSP Banner',   // Menu name
                'PHPSP Home Banner Config',  // Title
		'edit_theme_options',   // Capability
                'phpsp-home-banner',
                array(&$this, 'renderPage')
            );
    }

    public function adminNotices() {
	settings_errors('phpsperrors');
    }

    public function renderPage() {
	    $options = get_option('phpsp-theme-options');
	    ?>
        <div id="theme-options-wrap">
            <div class="icon32" id="icon-tools"><br /></div>
        <h2>PHPSP Home Banner</h2>
        <p>Selecione uma imagem para o banner da home e o link para o qual ele &eacute; apontado.</p>
        <form method="post" action="options.php">
            <p class="submit">
		<?php settings_fields('phpsp-theme-options'); ?>
		<?php do_settings_sections('phpsp-home-banner'); ?>
                <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
	    </p>
	    </form>
	<hr />
	<h2>Preview</h2>
	<?php
	    if (!empty($options['banner_img_slug'])) {
		echo "<img src='" . esc_url($options['banner_img_slug']) . "' />\r\n";
		echo "<p>Link: " . esc_url($options['banner_url']) . "</p>\r\n";
	    } else {
		echo "<p>There is no image to show</p>\r\n";
	    }
	?>
	</div>
<?php
    }
    
    public function registerSettings() {
        register_setting('phpsp-theme-options', 'phpsp-theme-options', array(&$this, 'validate'));

	add_settings_section('phpsp-main', 'Main Settings', function() {
	    echo "<p>Configura&ccedil;&atilde;o do banner</p>";	
	}, 'phpsp-home-banner');

	add_settings_field('phpsp-banner-url', 'Banner URL', function() {
            $options = get_option('phpsp-theme-options');
	    echo "<input id='phpsp-banner-url' name='phpsp-theme-options[banner_url]' value='{$options['banner_url']}' />\r\n";
	}, 'phpsp-home-banner', 'phpsp-main');

	add_settings_field('phpsp-banner-img-slug', 'Media Slug', function () {
            $options = get_option('phpsp-theme-options');
	    echo "<input id='phpsp-banner-img-slug' name='phpsp-theme-options[banner_img_slug]' value='{$options['banner_img_slug']}' />\r\n";
	}, 'phpsp-home-banner', 'phpsp-main');
    }

    public function validate($settings) {
	    $options = get_option('phpsp-theme-options');
	    $banner_url = $options['banner_url'];
	    $banner_img_slug = $options['banner_img_slug'];

	    if (isset($_POST['phpsp-theme-options']['banner_url'])) {
                $banner_url = $_POST['phpsp-theme-options']['banner_url'];
	    }
	    if (isset($_POST['phpsp-theme-options']['banner_img_slug'])) {
                $banner_img_slug = $_POST['phpsp-theme-options']['banner_img_slug'];
	    }
	    if (empty($banner_url) && empty($banner_img_slug)) {
		return $newSettings = array('banner_img'=>'', 'banner_img_slug'=>'');
	    }

            $newSettings = array();
	    if (filter_var($banner_url, FILTER_VALIDATE_URL)) {
	    	$newSettings['banner_url'] = $banner_url;
	    } else {
		$newSettings['banner_url'] = $options['banner_url'];
	        add_settings_error('phpsperrors', 'invalid-url', 'You have entered an invalid URL' );
	    }
	    if (filter_var($banner_img_slug, FILTER_VALIDATE_URL)) {
		// TODO test if the slug exists in the media library
	        $newSettings['banner_img_slug'] = $_POST['phpsp-theme-options']['banner_img_slug'];
	    } else {
		$newSettings['banner_img_slug'] = $options['banner_img_slug'];
	        add_settings_error('phpsperrors', 'invalid-img-slug', 'You have entered an invalid media slug' );
	    }
	    return $newSettings;

    }

    public static function getBanner() {
	$options = get_option('phpsp-theme-options');
	return "<a href='" . esc_url($options['banner_url']) . "'><img src='" . esc_url($options['banner_img_slug']) . "' /></a>\r\n";
    }

}

$phpspmenu = new PHPSP_Menu();
