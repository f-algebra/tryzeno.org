<?php
$haskell_src = $_REQUEST['src'];
$filename = uniqid() . ".hs";

try {
	$file = fopen("hs/" . $filename, "w");
	fwrite($file, $haskell_src);
	fclose($file);

	echo shell_exec("cd hs && timeout 120s zeno --tryzeno $filename 2>&1");
} finally {
	unlink($filename);
}
?>
