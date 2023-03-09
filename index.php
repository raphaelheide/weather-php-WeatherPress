<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../css/mypixeland.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/search.css">
<link rel="stylesheet" href="../css/appmy.min.css">
<link rel="stylesheet" href="../css/glide.core.min.css">
<style>
:root {
	--primary-color: #00bcd4;
	--accent-color: #f50057;

	--text-color: #263238;
	--body-color: #fff;
	--main-font: 'roboto';
	--font-bold: 700;
	--font-regular: 400;
}
* { box-sizing: border-box }

body {
	color: var(--text-color);
	background-color: var(--body-color);
	font-family: var(--main-font), Arial;
	font-weight: var(--font-regular);
}
main{ 
	display: content;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 100vw;
	height: 50px;
	padding-left: 5%;
	padding-right: 5%;
}
h1 { font-weight: var(--font-bold) }
input, 
button {
	border: none;
	background: none;
	outline: 0;
}
button {cursor: pointer}
.SearchBox-input::placeholder {/* No es un seudoelemento estandar */
 color:white;
	opacity: .6;
}
/* Chrome, Opera ySafari */
.SearchBox-input::-webkit-input-placeholder {
  color: white;
}
/* Firefox 19+ */
.SearchBox-input::-moz-placeholder {
  color: white;
}
/* IE 10+ y Edge */
.SearchBox-input:-ms-input-placeholder {
  color: white;
}
/* Firefox 18- */
#formGroupExampleInput:-moz-placeholder {
  color: white;
}



.SearchBox {
	--height: 4em;
	display: flex;
	
	border-radius: var(--height);
	background-color: var(--primary-color);
	height: var(--height);
}
	.SearchBox:hover .SearchBox-input {
		padding-left: 2em;
		padding-right: 1em;
		width: 240px;
	}
	.SearchBox-input {
		width: 350px;
		font-size: 1.2em;
		padding-left: 20px;
		color: #fff;
		transition: .45s;
	}
	.SearchBox-button {
		display: flex;
		border-radius: 50%;
		width: var(--height);
		height: var(--height);
		background-color: var(--accent-color);
		transition: .3s;
	}
	
	.SearchBox-icon {
		margin: auto;
		color: #fff;
		margin-right: 10px;

	}


@media screen and (min-width: 320px){
	.SearchBox:hover .SearchBox-input {
		width: 100%;
	}
}
</style>
<br><br>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<main>
	<form>
	<div class="SearchBox">
		
		<input type="text" class="SearchBox-input" name="weatherpress" placeholder="SEARCH YOUR CITY">
				<i class="SearchBox-icon  material-icons">search</i>

	</div>
	</form>
</main>

<br><br>

<?php

$input_line = $_SERVER['QUERY_STRING'];

preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$buscar = array ('', 'weatherpress=', 'buscar=', ' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$mudar = array ('', '', '', '-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$infogeral = 'https://geocoding-api.open-meteo.com/v1/search?name=' .  str_replace($buscar, $mudar, $input_line) . '&language=en&count=20';
$jsondatageral= file_get_contents ($infogeral);  
$datageral = json_decode($jsondatageral, true);


?>



<div align="center">

<?php 
foreach ($datageral['results'] as $resultado) {

	echo  '<a href = "' . ' ' . 'forecast/?latitude=' . $resultado['latitude'] . '&longitude='  . $resultado['longitude'] . '&city=' . $resultado['name'] . '">' . $resultado['name'] . ' - ' . $resultado['country'] . '</a>';
	echo '<br>';
	echo  $resultado['admin1'] . ' : ' . $resultado['admin2'];
	echo '<br><br>';
}

?>  
</div>
