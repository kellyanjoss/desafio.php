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
<main>
		<h1><?= $produto['nome'] ?></h1>
		<h2 >R$ <?= $produto['preco'] ?></h2>
		<img src="<?= $produto['img'] ?>" alt="<?= $produto['nome'] ?>">
		<div>Descrição: <?= implode(", ", $produto["descrição"])  ?></div>
		<button>+ Add</button>
		<a href="#" class="prev">&lt;</a>
		<a href="#" class="next">&gt;</a>
	</main>
</body>
</html>