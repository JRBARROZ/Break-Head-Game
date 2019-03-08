<?php session_start();
			header('Content-type: text/css'); ?>
/*Jogo Css*/
*{
margin:0px;
padding:0px;
}
body{
	height: 100vh;
	background-color: #FFFFFF;
	background-image: url("FUNDOZ.jpg");
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
	top: 310px;
	left: 70px;

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
	left: 121px;
	top:40px;
	background-color: #3e3e3e;
	border-radius: 50px;
	box-shadow: 3px 3px 100px;
}
.i{
	position: absolute;
	left: 120px;
	margin-top: 50px;
	z-index: 1;

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
#k{
	width:<?= $img[0]/3?>px;
	height:<?= $img[1]/3?>px;
	margin-left:500px;
	background-color:#000;
}
<?php
$img = getimagesize("gato.jpg");

$cont = 0;
$x = 0;
$y = 0;

for ($i=0; $i < 3; $i++) :
  for ($j=0; $j < 3; $j++) : ?>
    #a<?=$cont?>{
			background:url("gato.jpg") <?=$x?>px <?=$y?>px;
			position:relative;
		}
      <?php
			$a[$cont] = $cont;
      $cont++;
      $x = $x - ($img[0]/3);
  endfor;
  $y = $y - ($img[1]/3);
endfor;
?>

.teste{
	width: <?=$img[0]/3?>px;
	height: <?=$img[1]/3?>px;
	margin: -3px;
	border: #000 solid 1px;
}
