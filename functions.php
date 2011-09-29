<?php

  /* Adapted from: http://moonpixel.com/wordpress-theme-settings-page/ */

  /* TODO: Verify input is a validly formed URL */

  function options_page_fn() {
   echo '<div class="wrap">';
      echo '<div class="icon32" id="icon-themes"></div>';
      echo '<h2>Redirect Setting</h2>';
			$path = get_template_directory_uri();
 			echo '<table width="100%" border="0" cellspacing="10" cellpadding="0">';
      echo '<tr><td valign="top">';
      echo '<form method="post" action="options.php" enctype="multipart/form-data">';
         settings_fields('plugin_options');
         do_settings_sections(__FILE__);
         echo '<p class="submit">';
            echo '<input name="Submit" type="submit" class="button-primary" value="Save Changes" />';
            echo '</p></form></td></tr></table></div>';
  }  
  
  function create_theme_options_page() {
	 add_theme_page(__('Theme Settings'), __('Theme Settings'), 'edit_themes', basename(__FILE__), 'options_page_fn');
  }
 
  add_action('admin_menu', 'create_theme_options_page');

  function prepare_fields() {
    register_setting('plugin_options', 'plugin_options');
    add_settings_section('main_section', 'Theme Settings', 'section_cb', __FILE__);
    add_settings_field('url', 'Redirect URL:', 'url_setting', __FILE__, 'main_section');
  }
 
  add_action('admin_init', 'prepare_fields');

  function section_cb() {
    echo '<hr />';
  }
  
  function url_setting() {
    $options = get_option('plugin_options');
    echo '<input name="plugin_options[url]" size="25">' . $options['url'] . '</input>';
  }
?>
