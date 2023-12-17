<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css');


	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
	}
	.bg-stack{
		background-color: #5182ED;
	}
	.bg-stack-grad{
		background-image: linear-gradient(to right, #7351ed, #6b66f1, #6878f2, #6a88f1, #7396ee, #7499ec, #769ceb, #789fe9, #6e98ea, #6491ec, #5a89ec, #5182ed);
	}
	.fluter{
		transform: translateY(0px);
		animation: float 3s ease-in-out infinite;
	}
	@keyframes float{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(-30px);
		}
		100%{
			transform: translateY(0px);
		}
	}

	.background-login{
		background-image: url("<?php echo $flow ?>assents/img/background_login.png");
		background-size: cover;
		background-repeat: no-repeat;
	    width: 100%;
	}
	.login-body{
		margin-top: 15vh;
	}
	.card-login{
		max-width: 500px;
		border: 0;
		border-radius: 5px;
	}
	.title-card{
		color: black;
		font-weight: 600;
		font-size: 18px;
	}
	.subtitle-card{
		margin-top: 10px;
		font-size: 12.9px;
	}
	.form-login{
		border: 0;
		background-color: #F6F6F6;
		border-radius: 0;
	}
	.title-form{
		margin-top: 25px;
		font-size: 14px;
		float: left;
	}
	.btn-login{
		border: 0;
		color: #fff;
		background-color: #FF81E7;
		margin-top: 25px;
		width: 100%;
		border-radius: 0;
	}
	.btn-facebook{
		border: 0;
		color: #fff;
		margin-top: 5px;
		background-color: #69A0F3;
		width: 100%;
		border-radius: 0;
	}
	.btn-google{
		border: 0;
		color: #fff;
		margin-top: 5px;
		background-color: #327FD6;
		width: 100%;
		border-radius: 0;
	}
	.link-login{
		color: black;
		text-decoration: none;
	}
	.link-login:hover{
		transition: 150ms;
		color: #212121;
	}
</style>