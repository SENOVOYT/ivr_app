<?php
// Get the list of files in the current directory
$files = scandir('./');

// Remove "." and ".." from the list
$files = array_diff($files, array('.', '..'));

foreach ($files as $file) {
  // Get the first letter of the file name
  $initial = strtoupper(substr($file, 0, 1));

  // Create a directory with the letter as its name if it doesn't already exist
  if (!is_dir($initial)) {
    mkdir($initial);
  }

  // Move the file into the directory
  rename($file, $initial . '/' . $file);
}