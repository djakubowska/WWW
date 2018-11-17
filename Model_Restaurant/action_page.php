<html>
	<body>
		Ten dokument służy do wyświetlania danych przesłanych formularzem<br/><br/>
		Nazwa: <?php echo $_GET["Name"]; ?><br>
		People: <?php echo $_GET["People"]; ?><br>
		Date and time: <?php echo $_GET["date"]; ?><br>
		Komentarz: <?php echo $_GET["Message"]; ?><br>
		<a href="index.html">Powrót</a>
		<?php phpinfo(); ?>
	</body>
</html>