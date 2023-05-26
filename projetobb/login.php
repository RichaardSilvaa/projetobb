<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	
</head>
<body>
	<div class="container">
		<h2>Tela de Login </h2>
		<form id="login-form" action="validacao.php">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email"  placeholder="fulano@mail.com" required="required" name="email" required><br>
			
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
    		<input type="password"  placeholder="***********" required="required" name="senha" required><br>
			</div>
			<div class="form-group">
				<button type="submit">Entrar</button>
			</div>



	</body>

	</html>