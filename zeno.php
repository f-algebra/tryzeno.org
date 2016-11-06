<?php
$haskell_src = $_POST['src'];
echo $haskell_src;

$file = tmpfile();

// Gotta get the file-name for the temp file
$meta_data = stream_get_meta_data($file);
$filename = $meta_data['uri'];

echo $filename;

fwrite($file, $haskell_src);
fclose($file);
echo shell_exec('zeno ' . $filename);
?>
