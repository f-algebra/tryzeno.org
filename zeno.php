<?php
$haskell_src = $_REQUEST['src'];
$filename = "hs/" . uniqid() . ".hs";

try {
	$file = fopen($filename, "w");
	fwrite($file, $haskell_src);
	fclose($file);

	echo shell_exec("timeout 120s zeno --tryzeno $filename 2>&1");
} finally {
	unlink($filename);
}
?>
