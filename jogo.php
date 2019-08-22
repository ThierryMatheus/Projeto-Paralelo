<?php 
include 'dados.php';
?>


 <!DOCTYPE html>

<html>
<head>
	<title>Adedonha</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet"></head>
	<link rel="stylesheet" href="cssgame.css">
<body>
<h1>		
	 <strong>
		ADEDONHA!	 	
	 </strong>  
</h1>
	<form>
	<table>
		<tr>
			<th>
				<label for="nice">Nome</label><br>
				<input type="text"  placeholder="nome" name="nice">
			</th>
			<th>
				<label for="lugar">Lugar</label><br>
				<input type="text" placeholder="lugar"  name="lugar">
			</th>
		</th>
		</tr>
		<tr>
			<th>
				<label for="fruta">Fruta</label><br>
				<input type="text"  placeholder="fruta" name="fruta">
			</th>
			<th>
				<label for="aniamal">Animal</label><br>
				<input type="text"  name="aniamal" placeholder="Animal" >
			</tr>
		<tr>
			<th>
				<label for="profissao">Profissão</label><br>
				<input type="text"  name="profissao" placeholder="Profissão" >
			</th>
			<th>
				<label for="filme">Filme/Série</label><br>
				<input type="text"  name="serie" placeholder="filme/series" >
			</th>
		</tr>
			<th>
				<label for="objeto">Objeto</label><br>
				<input type="text"  name="objeto" placeholder="objeto" >
			</th>
			<th>
				<label for="carro">Carro</label><br>
				<input type="text"  name="carro" placeholder="carro" >
			</th>
		</tr>
	</table>
	<input type="submit" name="enviar" value="enviar">
</form>
</body>
</html>
