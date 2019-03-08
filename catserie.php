<?php session_start();
 $_SESSION['categoria'] = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BreakHead - Categoria Series</title>
	<link rel="stylesheet" href="catseriescss.css">
	<link rel="shortcut icon" href="_Imagem/LOGOC.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body">
<a href="HomeResponse.php">
	<ul class="opa">
		<li>
			<img src="_Imagem/Back.png">
			<img src="_Imagem/Home.png">
		</li>
	</ul>
</a>
	<section class="envol">
		<figure class="o">
			<article class="p">
				<article class="p2">
					<form action="base.php">
						<input type="hidden" name="idqb" value="0">
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="0">Easy</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="1">Medium</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="2">Hard</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="3">Insane</p>
						<input type="submit" name="jogar" value="jogar" class="poxa">
					</form>
				</article>
			</article>
		</figure>
		<figure class="o2">
			<article class="p">
				<article class="p2">
					<form action="base.php">
						<input type="hidden" name="idqb" value="1">
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="0">Easy</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="1">Medium</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="2">Hard</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="3">Insane</p>
						<input type="submit" name="jogar" value="jogar" class="poxa">
					</form>
				</article>
			</article>
		</figure>
		<figure class="o3">
			<article class="p">
				<article class="p2">
					<form action="base.php">
						<input type="hidden" name="idqb" value="2">
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="0">Easy</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="1">Medium</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="2">Hard</p>
						<p class="i"><input type="radio" name="selecao" class="formatacao" value="3">Insane</p>
						<input type="submit" name="jogar" value="jogar" class="poxa">
					</form>
				</article>
			</article>
		</figure>
	</section>
</body>
</html>