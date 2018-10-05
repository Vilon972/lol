<?php
  if (isset($_SERVER['PHP_AUTH_USER'] != "zaz") || isset($_SERVER['PHP_AUTH_PW']) != "jaimelespetitsponeys")
  {
    header('WWW-Authenticate: Basic realm='Espace membre'');
    header('HTTP/1.0 401 Unauthorized');
    echo <html><body>Cette zone est accessible uniquement aux membres du site</body></html>;
  }
  else {
    $base = base64_decode(file_get_contents('../img/42.png'));
    echo "<html><body>\n";
    echo "Bonjour Zaz<br />\n";
    echo "<img src='data:image/png;base64,$base>\n";
    echo "</body></html>\n";
  }
 ?>
