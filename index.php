<?php
  $options = get_option('plugin_options');
  try {                                                 // Setting up a try-catch block.
    if (!headers_sent()) {                              // If headers have not yet been sent:
      header('HTTP/1.1 301 Moved Permanently');         // Do a PHP redirect.
      header('Location: ' . $options['url']);
      header('Connection: close');                      // Optional workaround for an IE bug.
    } else throw new Exception();
  } catch(Exception $ex) {                              // If headers are sent, then use this catch block with JS and HTML meta fallbacks.
    echo
    "<html>
      <head><title>Redirecting...</title>
        <script type=\"text/javascript\">
          window.location = \"$options['url']\";
        </script>
        <meta http-equiv=\"Refresh\" content=\"0;url=$options['url']\" />
      </head>
      <body onload=\"location.replace('$options['url']')\">
        You should be redirected to this URL:<br />
        <a href=\"$options['url']\">$options['url']</a><br /><br />
        If you are not, please click on the link above.<br />
      </body>
    </html>";
  }
}?>
