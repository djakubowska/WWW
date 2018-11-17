<html>
	<body>
		Ten dokument służy do wyświetlania danych przesłanych formularzem<br/><br/>
		Nazwa: <?php echo $_GET["Name"]; ?><br>
		email: <?php echo $_GET["Email"]; ?><br>
		informacja: <?php echo $_GET["Message"]; ?><br>
		<a href="index.html">Powrót</a>
		<?php phpinfo(); ?>
	</body>
</html>