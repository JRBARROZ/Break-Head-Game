<?php session_start();
 
 $filme = ['qb/filme/bastardos.jpg',
 		  'qb/filme/senhor.jpg',
 		  'qb/filme/vinga.jpg'];
 $_SESSION['teste'] = $filme;

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
 $_SESSION['indice'] = intval($_GET['idfilme']);
 $_SESSION['mix'] = $_GET['selecao'];
 $dif = dificuldade($_GET['selecao']);
 $raiz = sqrt(sizeof($dif));
 $_SESSION['bloco'] = $dif;
 $_SESSION['opa'] = intval($raiz);
 shuffle ($_SESSION['bloco']);
 $_SESSION['contbloco'] = "";
 $_SESSION['tb'] = 4;
 $_SESSION['c']=0;
 $_SESSION['id1'] = -1;
 $_SESSION['id2'] = -1;
 $_SESSION['conttroca'] = 0;
 //var_dump($_SESSION['indice']);

header('Location: Filme_Alrai.php');
 ?>
