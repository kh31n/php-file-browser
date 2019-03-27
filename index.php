<html>
<head>
  <title>ファイルブラウザ</title>
</head>
<body>
  <?php
    function scan($target) {
      $files = scandir($target);
      print "<ul>";
      foreach($files as $file) {
        if(preg_match('/^\./', $file))
          continue;
        print "<li>";
        print $file;
        if(is_dir($target . "/" . $file))
          scan($target . "/" . $file);
        print "</li>";
      }
      print "</ul>";
    }
    $path = "Your File Path";
    scan($path);
   ?>
</body>
</html>
