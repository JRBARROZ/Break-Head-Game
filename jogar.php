<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Jogo.php">
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="_Imagem/LOGOC.png">
		<title>Break Head Play</title>
	</head>
	<body>
		<nav id="menu">
			<section class="A">
				<figure class="i">
					<figcaption>
						<img src="_Imagem/LOGOT.png">
					</figcaption>
				</figure>
			</section>
				<article class="B">
					<ul>
						<li>
							<?php
								echo "<a href='base.php?selecao=".$_SESSION['mix']."&idqb=".$_SESSION['indice']."'>";
							?>
								<img src="_Imagem/Mix.png">
								<img src="_Imagem/Pieces.png">
							</a>
							
						</li>
					</ul>
						<ul>
							<li>
								<a href="HomeResponse.php">
									<img src="_Imagem/Back.png">
									<img src="_Imagem/Home.png">
								</a>		
							</li>
						</ul>
					</a>
				</article>
			</section>	
		</nav>
			<section class="duvida">
				<a href="duvidain.php" target="_blank"><font color="white"><p>?</p></font></a>
			</section>
			<section>
				<article class="envolvimento">
								<table>
								<?php
									 if ($_SESSION['bloco']==$_SESSION['comp']) {
									 	header(win.php);
									 }
 								   $_SESSION['cont'] = 0;
 								   for ($i=0; $i < $_SESSION['opa']; $i++) { ?>
 								       <tr>
 								<?php  for ($j=0; $j < $_SESSION['opa']; $j++) { ?>
 								           <td>
 								               <a href='val.php?id=<?=$_SESSION['cont']?>'> <div class ='teste' id='a<?=$_SESSION['bloco'][$_SESSION['cont']]?>'></div></a>
 								            </td>
 								<?php      $_SESSION['cont']++;
 								        } ?>
 								       </tr>
 								<?php   } ?>
 								       </table>
				</article>
			</section>
	</body>
</html>	