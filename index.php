<html>
<body>
<h1>Zeno v0.2.1.0</h1>
<p>running with a 120 second timeout.</p>
<form method="POST" action="zeno.php">
<textarea name="src">
<?= file_get_contents('Example.hs') ?>
</textarea>
<input type="submit" value="Prove with Zeno"/>
</form>
</body>
</html>