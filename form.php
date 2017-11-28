<!DOCTYPE html>
<html>
<head>
	<title>
		Formulaire
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		form{
			text-align:center;
		}
	</style>
</head>
<body>

	<header>
	<nav class="navbar navbar-default">

		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> LOGO </a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav navbar-right">
			<li> <a href="index.html" > Accueil </a></li>
			<li> <a href="form.php" > Contact </a></li>
			<li> <a href="#" > A propos </a></li>
			</ul>
			</div>
		</div>
	</nav>
	</header>

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