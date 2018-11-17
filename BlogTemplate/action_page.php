<html>
	<body>
		Ten dokument służy do wyświetlania danych przesłanych formularzem<br/><br/>
		Nazwa: <?php echo $_GET["Name"];?><br>
		Liczba osób: <?php echo $_GET["People"];?><br>
		Data: <?php echo $_GET["date"]; ?><br>
		Informacje dodatkowe: <?php echo $_GET["Message"];?>
		<?php phpinfo(); ?>
	</body>
</html>