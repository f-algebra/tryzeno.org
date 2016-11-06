<html>
<body>
<?php
$haskell_src = $_REQUEST['src'];
$filename = uniqid() . ".hs";

try {
	$file = fopen("hs/" . $filename, "w");
	fwrite($file, $haskell_src);
	fclose($file);

	$proofs = shell_exec("cd hs && timeout 120s zeno --tryzeno $filename 2>&1");
	echo nl2br($proofs);
} catch (Exception $e) {
	echo "Exception: " . $e->getMessage();
} finally {
	unlink($filename);
}
?>
</body>
</html>
