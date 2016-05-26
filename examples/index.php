<?php

$action = $_REQUEST['action'];
$foo = "A";
if ($action == Null){
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Examples Index</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
  Lapiz Ajax Examples
  <ul>
    <?php
      $htmlFiles = glob('*.html');
      foreach($htmlFiles as $file){
        print("<li><a href='$file' target='_blank'>$file</a></li>");
      }
    ?>
  </ul>
  </body>
</html>
  <?php
} else {
  call_user_func($action);
}

function foo(){
  print "foo";
}

?>