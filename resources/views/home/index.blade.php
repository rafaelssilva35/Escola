<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="POST" action="gestor" enctype="multipart/form-data">
	    {{ csrf_field() }}
		<input type="file" name="excel">
		<input type="submit" name="enviar">
	</form>
</body>
</html>