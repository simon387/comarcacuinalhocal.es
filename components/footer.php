<?php
$f = fopen("changelog.txt", 'r');
$version = fgets($f);
fclose($f);
?>
<footer class="footer text-faded text-center py-5">
	<div class="container">
		<p class="m-0 small">Copyright &copy; 2022 <a target="_blank" href="https:\\www.simonecelia.it">www.simonecelia.it</a></p>
		<p class="m-0 small"><?php echo $version ?></p>
	</div>
</footer>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>