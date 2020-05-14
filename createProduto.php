<?php 

    $nomeOk = true;

    if($_POST){

        if($_POST['nomeDoProduto'] == ''){
            $nomeDoProdutoOk = false;
        }
        if($_POST['descricaoDoProduto'] == ''){
            $descricaoDoProdutoOk = false;
        }
        if($_POST['preco'] == ''){
            $precoOk = false;
        
        }
    }
?>

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
            <input id="caixa1" type="text" name="Nome do Produto" id="nomeDoProduto" placeholder="Digite o nome do produto">
        </label>

		<label>
            Descricao do produto:
            <input id="caixa1" type="text" name="Descrição do produto" id="descricao" placeholder="Descreva o produto">
        </label>

		<label>
            Preço:
            <input id="caixa2" type="numero" name="Preço" id="preco" placeholder="Digite o preço">  
        </label>
        
		<label>
            <img src=" " >
            <div class="texto4">Clique para selecionar sua foto</div><br>
        </label>
    
        <div id="botao">
            <input  type="file" name="foto"> 

            <button  type="reset" >Resetar</button> 

            <button  type="submit" >Cadastrar-se!</button>
        </div>
    </form>
</body>
</html>