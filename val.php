<?php session_start();
if (isset($_GET['id'])) {
	if ($_SESSION['conttroca'] == 0) {
		$img1 = $_SESSION['bloco'][$_GET['id']];
		$_SESSION['conttroca']++;
		$_SESSION['id1'] = $_GET['id'];
		header("location: jogar.php");
	} else {
		$img2 = $_SESSION['bloco'][$_GET['id']];
		$_SESSION['id2'] = $_GET['id'];
		$_SESSION['conttroca'] = 0;
		$temp = $_SESSION['bloco'][$_SESSION['id1']];
		$_SESSION['bloco'][$_SESSION['id1']] = $_SESSION['bloco'][$_SESSION['id2']];
		$_SESSION['bloco'][$_SESSION['id2']] = $temp;
	}
}
header('Location: jogar.php');
?>
