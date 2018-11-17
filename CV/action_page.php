<html>
	<body>
		Ten dokument służy do wyświetlania danych przesłanych formularzem<br/><br/>
		Nazwa: <?php echo $_GET["Name"]; ?><br>
		email: <?php echo $_GET["Email"]; ?><br>
		temat: <?php echo $_GET["Subject"]; ?><br>
		Komentarz: <?php echo $_GET["Comment"]; ?>
		<?php phpinfo(); ?>
	</body>
</html>