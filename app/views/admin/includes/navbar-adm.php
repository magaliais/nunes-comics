<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<title>Painel Administrativo</title>
		<link rel="stylesheet" href="../../../public/css/navbar-adm.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Bangers&display=swap" rel="stylesheet">

	</head>

	<body>
		
		<input type="checkbox" id="check">
 
 		<!--header-->
		<header>
			
			<label for="check">
				<i class="fas fa-bars" id="sidebar_bnt"></i>
			</label>
			<div class="area-esquerda">
				<h3>Nunes' Comics</h3>
			</div>

			<div class="area-direita">
				<a href="#" class="logout_bnt" title="Logout"><i class="fas fa-sign-out-alt"></i></a>
			</div>

		</header>

		<!--sidebar-->
		<div class="sidebar">
			<center>
				<img class="profile-pic" src="../../../public/assets/logo.png" alt="Logo da Marca">
			</center>

			<a href="#"><i class="fab fa-product-hunt"></i><span>Produtos</span></a>

			<a href="#"><i class="fas fa-th"></i><span>Categorias</span></a>

			<a href="#"><i class="fas fa-users"></i><span>Usuários</span></a>
		</div>

		<div class="content"></div>
	</body>
</html>