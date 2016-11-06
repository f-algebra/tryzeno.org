<?php
$haskell_src = $_REQUEST['src'];
$file = tmpfile();

// Gotta get the file-name for the temp file
$meta_data = stream_get_meta_data($file);
$filename = $meta_data['uri'];

fwrite($file, $haskell_src);
fclose($file);
echo shell_exec('zeno --tryzeno ' . $filename);
?>
