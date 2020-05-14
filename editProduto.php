<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio PHP</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <link rel="stylesheet" href="css/style.css">
    <form id="form-usuario">
		<label>
            Nome do produto:
            <input type="text" name="Nome do Produto" id="nomeDoProduto" placeholder="Digite o nome do produto">
        </label>
		<label>
            Descricao do produto:
            <input type="text" name="Descrição do produto" id="descricao" placeholder="Descreva o produto">
        </label>
		<label>
            Preço:
            <input type="numero" name="Preço" id="preco" placeholder="Digite o preço">
        </label>
		
		<label>
            <img src="../img/no-image.png" id="foto-carregada">
            <div>Clique para selecionar sua foto</div>
            <input type="file" name="foto" id="foto">
        </label>

        <div class="controles">
            <button type="reset" class="secondary">Resetar</button>
            <button type="submit" class="primary">Cadastrar-se!</button>
        </div>
    
</body>
</html>