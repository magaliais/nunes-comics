<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<!--icons -->
	<script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

	<!-- css -->
	<link rel="stylesheet" href="../../../public/css/global.css">
	<!-- <link rel="stylesheet" href="../../../public/css/adm-produtos-add.css"> -->
	<link rel="stylesheet" href="../../../public/css/admin-add-produtos.css">

	<title>Admin | Nunes' Comics</title>

	<!--javascript -->
	<script src="../../../public/js/funcoes.js" type="text/javascript">
	</script>

</head>

<body>
	<header>

	</header>

	<main>
		<div class="container">
			<form method="POST" action="/admin/products/<?= $action; ?>">
				<fieldset>
					<legend><?= $title ?></legend>
					<div class="form-item">
						<label for="product-name">Nome:</label>
						<div class="input-container">
							<input 
								id="nome" 
								type="text" 
								name="nome" 
								value="<?= $product ? $product->nome : "" ?>"
								<?= !$editable ? "readonly" : "" ?>
							>
						</div>
					</div>

					<div class="form-item">
						<label>Preço:</label>
						<div class="input-container">
							<input id="preco" type="text" name="preco" value="<?= $product->preco ?>" onkeyup="formatarMoeda();">
						</div>
					</div>

					<div class="form-item">
						<label for="description">Descrição:</label>
						<textarea id="description" name="description"></textarea>
					</div>

					<div class="form-item">
						<label for="category">Categoria: </label>
						<select id="category" name="category">
							<option value="">Marvel Comics</option>
							<option value="">DC Comics</option>
						</select>
					</div>

					<div class="form-item">
						<label>Foto:</label>
						<label id="file-button" for="product-image">Selecionar uma imagem &#187;</label>
						<input id="product-image" type="file" name="product-image" onchange="handleSelectImage(event)">
					</div>

					<div id="image-container" class="form-item"></div>

					<div class="form-item form-buttons">
							<button type="submit" class="button" name="con-enviar" id="con-enviar">
								<span class="font-contact">Salvar</span>
							</button>
						<button type="reset" value="reset">Resetar</button>
					</div>
				</fieldset>
			</form>
		</div>
	</main>

	<div class="halftone bottom">
		<img src="../img/halftone-effect.svg" alt="">
	</div>
	<div class="halftone top">
		<img src="../img/halftone-effect.svg" alt="">
	</div>
</body>

</html>