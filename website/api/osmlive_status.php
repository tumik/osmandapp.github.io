<?php

$file = fopen(".proc_timestamp.txt","r");
if (!$fp) {
    echo 'Could not open file somefile.txt';
}
$date = fgets($file);
echo $date;
echo "test";
fclose($file);

/*$latest_ctime = 0;
if (is_link($path)) {
  echo "is symlink";
}

$files = scandir($path);

foreach($files as $file) 
{
  $fullpath = "{$path}/{$file}";
  if (is_file($fullpath) && filemtime($fullpath) > $latest_ctime) {
    $latest_ctime = filemtime($fullpath);
  }
}
echo date('Y-m-d H:i:s', $latest_ctime);*/
?>
