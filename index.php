<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
	<body>
		<h1>EXPLIQUE SIMPLEMENT</h1>
		<table>
			<form name="ext" action="form.php" method="post">
			<fieldset>
				<h1>Se connecter</h1>
				<label>Pseudo :</label>
				<input type="email" name="email">
				<label>password :</label>
				<input type="password" name="password">
				<input type="submit" name="connection">
			</fieldset>
		</table>
		<form name="mot" action="form.php" method="post">
		<h1>CREER UN COMPTE</h1>
		<P>
			<label>Pseudo :</label>
			<input type="text" name="pseudo">
		</P>
		<p>
			<label>password :</label>
			<input type="password" name="password">
		</p>
		<p>
			<label>confirmer :</label>
			<input type="password" name="password">
		</p>
		<p>
			<label>email :</label>
			<input type="email" name="email">
		</p>
		<p>
			<label>sexe :</label>
			<select>
				<option value="m">M</option>
				<option value="f">F</option>
			</select>
		</p>
		<input type="submit" name="Creer">
	</form>

	</body>
</html>