<?php 
 session_start();
 header('Content-type: text/css'); ?>

/*Jogo Css*/
*{
margin:0px;
padding:0px;
}
body{
	height: 100vh;
	background-color: #FFFFFF;
	background-image: url("CSS/FUNDOZ.jpg");
	background-size: 100%;
	background-repeat-x: repeat;
	background-repeat-y: repeat;
}
ul{
	position: relative;

}
 ul li{
 	position: relative;
	float:left;
	width: 300px;
	height: 120px;
	overflow: hidden;
	margin-right: 20px;
	top: 0px;
	left:20px;

}
 ul li:last-child{
 	position: relative;
	margin-right: 0px;
}
 ul li img:first-child{
	transition: 1s;
	position: relative;
}
 ul li:hover img:first-child{
 	position: relative;
	margin:-120px 0 0;
	transform: rotate(145deg);
}
/*botao de voltar*/

/*Menu*/
table{
	position: :relative;
	margin-left: 6px;
	margin-top: 6px;
	margin-right:5px;
	line-height: 0;
}
#menu{
	position: absolute;
	width: 445px;
	height: 580px;
	left: 60px;
	top:150px;
	background-color: #3e3e3e;
	border-radius: 50px;
	box-shadow: 3px 3px 100px;
}
.i{
	position: absolute;
	left: -10px;
	margin-top: -10px;
	z-index: 2;

}
.A{
	position: absolute;
	background-color: #a9a9a9;
	width: 425px;
	height: 260px;
	top: 20px;
	left:10px;
	border-radius: 50px;
	box-shadow: 3px 3px 100px;
}
.B{
	position: absolute;
	background-color: #a9a9a9;
	width: 340px;
	height: 260px;
	top: 300px;
	left:50px;
	border-radius: 50px;
	box-shadow: 3px 3px 100px;
}
.envolvimento{
	width:1280px; 
	height:720px;
	margin-left: 550px;
	margin-top: 100px;	
	z-index: 1;
	border:10px outset #FFFFFF;
	border-radius: 10px;
	box-shadow: 10px 0 100px #000;
}

<?php
 $img = getimagesize($_SESSION['teste'][0]);

 $cont = 0;
 $x = 0;
 $y = 0;

 for ($i=0; $i < $_SESSION['opa']; $i++) :
 	$x = 0;
  for ($j=0; $j < $_SESSION['opa']; $j++) : ?>
    #a<?=$cont?>{
			background:url("<?= $_SESSION['teste'][$_SESSION['indice']]?>") <?=$x?>px <?=$y?>px;
		}
      <?php
			// $a[$cont] = $cont;
      $cont++;
      $x = $x - ($img[0]/$_SESSION['opa']);
  endfor;
  $y = $y - ($img[1]/$_SESSION['opa']);
 endfor;
 ?>

.teste{
  width: <?=$img[0]/$_SESSION['opa']?>px;
  height: <?=$img[1]/$_SESSION['opa']?>px;
  margin: -3px;
  border: #000 solid 1px;
}