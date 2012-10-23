<?php
  $options = get_option('plugin_options');
  header( "HTTP/1.1 301 Moved Permanently" );
  header( "Location: " . $options['url'] );
?>