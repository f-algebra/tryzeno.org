<html>
<body>
<h2>Zeno v0.2 - An automated theorem prover for Haskell programs.</h2>
<h3>Developed at Imperial College London by William Sonnex, Sophia Drossopoulou and Susan Eisenbach.</h3>
<p><a href="http://www.haskell.org/haskellwiki/Zeno">http://www.haskell.org/haskellwiki/Zeno</a></p>
<p>(running with a 120 second timeout)</p>
<form method="POST" action="zeno.php">
<textarea rows="30" cols="80" name="src">
<?= file_get_contents('Example.hs') ?>
</textarea>
<br/>
<input type="submit" value="Prove with Zeno"/>
</form>
</body>
</html>
