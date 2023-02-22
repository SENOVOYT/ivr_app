<?php
$dir = "./"; // Replace with your directory path

if (is_dir($dir)) {
  if ($dh = opendir($dir)) {
    while (($file = readdir($dh)) !== false) {
      if (!is_dir($dir.$file)) {
        $newfilename = ucfirst(strtolower($file));
        rename($dir.$file, $dir.$newfilename);
      }
    }
    closedir($dh);
  }
}
?>