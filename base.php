<?php session_start();
//  Recebe o ID da página categoria
//  que está armazenado em: $_SESSION['categoia']
 $cat = [
         filme => ['qb/filme/bastardos.jpg',
 	                'qb/filme/senhor.jpg',
                    'qb/filme/vinga.jpg'],

         jogo => ['qb/jogo/lol.jpg',
                    'qb/jogo/ow.jpg',
                    'qb/jogo/skr.jpg'],

         serie => ['qb/series/got.jpg',
                     'qb/series/himym.jpg',
                     'qb/series/tbbt.jpg']
 ];
           

 
 $_SESSION['teste'] = $cat;

 function dificuldade ($dif){
	if ($_GET['selecao']=='0') {
	 		$a = range(0, 8);
	 }elseif ($_GET['selecao']=='1') {
	 	$a = range(0, 24);
	 }elseif ($_GET['selecao']=='2') {
	 	$a = range(0, 63);
	 }else{
	 	$a = range(0, 99);
	 }
	 return $a;
 }
 $_SESSION['indice'] = intval($_GET['idqb']); //recebe o ID da pagina que redirecionar para ela
 $_SESSION['mix'] = $_GET['selecao'];
 $dif = dificuldade($_GET['selecao']);
 $raiz = sqrt(sizeof($dif));
 $_SESSION['bloco'] = $dif;
 $_SESSION['opa'] = intval($raiz);
 $_SESSION['comp'] = $dif;
 shuffle ($_SESSION['bloco']);

 $_SESSION['contbloco'];
 $_SESSION['id1'] = -1;
 $_SESSION['id2'] = -1;
 $_SESSION['conttroca'] = 0;

 header('Location: jogar.php');
 ?>
