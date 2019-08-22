<?php 
$nome = $_GET['nome'];

 	echo "$nome";
 
 if($nome == true) {
	echo "<script>location.href='jogo.php'</script>";
}
 if($nome == null) {
	echo "Non existe";
}


?>
