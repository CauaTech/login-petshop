<?php 
$int = 0;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Login</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="Bem-vindo ao site da nossa empresa de criação de sites! Somos especializados em oferecer soluções web personalizadas e de alta qualidade para atender às necessidades específicas de cada um de nossos clientes.">
	
	<meta name="robots" content="all">
	<meta name="author" content="M0rx">

	<meta name="keywords" content="Stack, StackStore, Comprar site, preciso de um site, criador de site, programador">

	<link rel="canonical" href="https://stackstore.com.br"/>
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body class="background-login">

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->

<div class="login-body">
	<div class="container">
		<center>
			<div class="card card-login">
				<div class="card-body">
					<img width="60%" src="<?php echo $flow ?>assents/img/logo/logo-texto.png">
					<div class="title-card">
						Faça seu login
					</div>
					<div class="subtitle-card">
						Para divulgar ou adotar um animalzinho,<br>você precisa ter um cadastro
					</div>
					<div class="inputs-card">
						<div class="form-group">
							<label class="title-form">E-mail</label>
							<input type="text" class="form-control form-login" name="">
						</div>
						<div class="form-group">
							<label class="title-form">Senha</label>
							<input type="text" class="form-control form-login" name="">
						</div>
						<div class="form-group">
							<button class="btn btn-login">Entrar</button>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<button class="btn btn-facebook">Entrar com o Facebook</button>
					</div>
					<div class="form-group">
						<button class="btn btn-google">Entrar com o Google</button>
					</div>
					<hr>
					<a href="#" class="link-login">Não sou cadastrado</a><br>
					<a href="#" class="link-login">Esqueceu sua senha?</a>
				</div>
			</div>
		</center>
	</div>
</div>

<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>