<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
		<style>
			body {
				font-family: 'RocknRoll One', sans-serif; 
			}
		</style>
        <title>Sistema de Login</title>
    </head>
    <body>
	
		<section class="container">
			<div class="row">
					<h3>Sistema de Login</h3>
					<?php 
					if(isset($_SESSION['nao_autenticado'])):
					?>
					<div class="card-panel col s6 m6 center red accent-2">
						<p class="white-text">Usuário ou senha inválidos</p>
					</div>
					<?php
					endif;
					unset($_SESSION['nao_autenticado']);
					?>
					<form  class="col s12" action="login.php" method="POST">
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input type="text" id="icon_user_prefix" name="usuario">
								<label for="icon_user_prefix">Nome de usuário</label>
							</div>
						</div>
						
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">fingerprint</i>
								<input type="password" id="icon_password_prefix" name="senha">
								<label for="icon_password_prefix">Senha</label>
							</div>
						</div>
						<button type="submit" class="waves-effect waves-light btn">Entrar</button>
					</form>	
			</div>
		</section>
		
		

		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>