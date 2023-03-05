<br>
<?php
include('../menu.php');
$input_line = $_SERVER['QUERY_STRING'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.open-meteo.com/v1/forecast?'.  $_SERVER['QUERY_STRING'] . '&hourly=temperature_2m,weathercode&daily=weathercode&current_weather=true&timezone=America%2FChicago');
$data = json_decode($jsondata, true);
echo '<title> ' . $data['title'] . '</title>';




// HORARIO + SERVER
$comzero = array ('00', '01', '02', '03', '04', '05', '06', '07', '08', '09');
$semzero = array ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
$horaserver = date("H"); 
$horariocerto = str_replace($comzero, $semzero, $horaserver);
$hora1 = array ($horariocerto, 1);
$hora2 = array ($horariocerto, 2);

$horariocerto1 = array_sum($hora1);
$horariocerto2 = array_sum($hora2);


// FUNDO NUVENS

if ($data['hourly']['weathercode'][$horariocerto] == '0'){
	$fundo = 'images/1A.jpg';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '1'){
	$fundo = 'images/1A.jpg';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '2'){
	$fundo = 'images/4A.jpg';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '3'){
	$fundo = 'images/4A.jpg';
} else {}	

if ($data['hourly']['weathercode'][$horariocerto] == '50'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '51'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '52'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '53'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}	
if ($data['hourly']['weathercode'][$horariocerto] == '54'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}
if ($data['hourly']['weathercode'][$horariocerto] == '55'){
	echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
} else {}


if ($data['hourly']['weathercode'][$horariocerto] == '71'){
	echo '<img src="images/71.png" class="w-full md:w-auto rounded-lg" />';
} else {}	




?>

<?php
	//Codigo pegar cor principal
	$imagemfundo = 'images/sun1.png' ;
	$image=imagecreatefromjpeg("$imagemfundo");
	$thumb=imagecreatetruecolor(1,1);
	imagecopyresampled($thumb,$image,0,0,0,0,1,1,imagesx($image),imagesy($image));
	$mainColor=strtoupper(dechex(imagecolorat($thumb,0,0)));
	$hex = "#" . $mainColor;
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	$somar = array ($r, -100);
	$somag = array ($g, -100);
	$somab = array ($b, 100);
	$corr = (array_sum($somar));
	$corg = (array_sum($somag));
	$corb = (array_sum($somab));
	?>	
  <div class="mx-auto " align="center" >
			<div class="content bg-center" align="center" >
				<?php
				echo '<div class="p-8 z-8 relative  hero-image   container rounded-lg" style="background-repeat: no-repeat; width:94%; background-image:linear-gradient(to bottom, rgba( 0, 0, 0, 10%),  rgba(' . $corr .',' . $corg . ',' . $corb . ', 1%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 10%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 10%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 20%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 20%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 50%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 90%), rgba(' . $corr .',' . $corg . ',' . $corb . ') 100%), url(' . $fundo . ');  background-size: cover; " >'; 
					?>
					<div align="center" class="flex flex-col lg:flex-row lg:justify-between items-center mt-12 lg:mt-64 ml-0 sm:ml-0 md:ml-24">
						<div class="w-full lg:w-1/3 px-0 sm:px-0 md:px-0 lg:px-8">
							<?php 
							if ($data['hourly']['weathercode'][$horariocerto] == '0'){
								echo '<img src="images/0.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '1'){
								echo '<img src="images/0.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '2'){
								echo '<img src="images/2.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '3'){
								echo '<img src="images/3.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							
							if ($data['hourly']['weathercode'][$horariocerto] == '50'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '51'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '52'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '53'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '54'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}
							if ($data['hourly']['weathercode'][$horariocerto] == '55'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}
							
							
							if ($data['hourly']['weathercode'][$horariocerto] == '71'){
								echo '<img src="images/71.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							
							
							 ?>
						</div>
						<div class="w-full lg:w-2/3 mt-12 lg:mt-0">
							<h1 class="font-extrabold tracking-wider" style="color:#fff">
							<?php if (isset($_GET['city'])) {
								echo $_GET['city'];
							} else {
							} ?>
						</h1>

							<?php echo '<h1 class="font-extrabold tracking-wider" style="color:#fff">'.  $data['hourly']['temperature_2m'][$horariocerto] . '°C</h1>'; ?>
							<br>
							<?php echo '<h4 style=" color:#fff">Next hour: '.  $data['hourly']['temperature_2m'][$horariocerto1]  . '°C</h4>'; ?>
							<?php echo '<h4 style=" color:#fff">In 2 hours: '.  $data['hourly']['temperature_2m'][$horariocerto2]  . '°C</h4>'; ?>

							<div class="details block md:flex md:items-center md:justify-between md:items-center text-lg font-semibold tracking-widest mt-6">
							
							</div>
							<br><br>
						</div>
					</div>
				</div>
			</div>
		<div align="center">
			<br>
		<div class="mx-auto "  style="width: 90%; ">
		 <div class="movie-heading" >	
		<?php 	  echo '<h3>'. str_replace($search2, $replace2, $subject2) . '</h3>' ?>
		</div>
		</div>
		</div>


	
 
