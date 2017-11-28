<!DOCTYPE html>
<html>
<head>
	<title>
		Formulaire
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>


	<form method="post">
		<label> Pseudo </label>
		<input type="text" id="pseudo" name="pseudo">
		<label> Mot de passe </label>
		<input type="password" id="password" name="password">
		<br>
		<label> Confirmation Mot de Passe</label>
		<input type="password" id="passwordconfirm" name="passwordconfirm">
		<input type="submit" class="btn btn-default" id="inscription" name="inscription">
	</form>



</body>
</html>