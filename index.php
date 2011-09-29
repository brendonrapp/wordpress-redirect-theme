<?php
  $options = get_options('plugin_options')
  header( "HTTP/1.1 301 Moved Permanently" ); 
  header( "Location: " . $options['url'] ); 
?> 
