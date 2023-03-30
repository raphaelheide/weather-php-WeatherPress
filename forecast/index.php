<!doctype html>
<title>Raphael Heide (WeatherPress) - Developer and Designer</title>
<?php include '../../header.php'; ?>
<?php include '../menu.php'; ?>

<br>

</header>
<main>
<div id="main">

<?php
$input_line = $_SERVER['QUERY_STRING'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.open-meteo.com/v1/forecast?'.  $_SERVER['QUERY_STRING'] . '&hourly=precipitation_probability,temperature_2m,apparent_temperature,weathercode&daily=precipitation_sum,weathercode,temperature_2m_max,temperature_2m_min,apparent_temperature_max,apparent_temperature_min&timezone=America%2FChicago');
$data = json_decode($jsondata, true);
echo '<title> ' . $data['title'] . '</title>';

// HORARIO + SERVER
$comzero = array ('00', '01', '02', '03', '04', '05', '06', '07', '08', '09');
$semzero = array ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
$horaserver = date("H"); 
$horariocerto = str_replace($comzero, $semzero, $horaserver);
$hora1 = array ($horariocerto, 1);
$hora2 = array ($horariocerto, 2);
$hora3 = array ($horariocerto, 3);
$hora4 = array ($horariocerto, 4);
$hora5 = array ($horariocerto, 5);

$horariocerto1 = array_sum($hora1);
$horariocerto2 = array_sum($hora2);
$horariocerto3 = array_sum($hora3);
$horariocerto4 = array_sum($hora4);
$horariocerto5 = array_sum($hora5);

?>

  <div class="mx-auto " align="center" >
			<div class="content bg-center" align="center" >
				<div>
					<div >
						<div ><br>
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
								echo '<img src="images/51.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '51'){
								echo '<img src="images/51.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '52'){
								echo '<img src="images/51.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '53'){
								echo '<img src="images/53.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							if ($data['hourly']['weathercode'][$horariocerto] == '54'){
								echo '<img src="images/53.png" class="w-full md:w-auto rounded-lg" />';
							} else {}
							if ($data['hourly']['weathercode'][$horariocerto] == '55'){
								echo '<img src="images/50.png" class="w-full md:w-auto rounded-lg" />';
							} else {}
							if ($data['hourly']['weathercode'][$horariocerto] == '71'){
								echo '<img src="images/71.png" class="w-full md:w-auto rounded-lg" />';
							} else {}	
							
							 ?>
						</div>
						<div style="font-size: 45px; color:purple; bold">
							<?php if (isset($_GET['city'])) {
								echo $_GET['city'];
							} else {
							} ?>
						</div>

							<?php echo '<div style="font-size: 35px;"  >'.  $data['hourly']['temperature_2m'][$horariocerto] . '°C</div>'; ?>
							<?php echo '<div style="font-size: 25px;" > Feels like '.  $data['hourly']['apparent_temperature'][$horariocerto] . '°C</div>'; ?>
							<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto] . '%</div>'; ?>

							
							<br><br>
							
							<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-1"></div>
								<div class="col-2">
									<span >
										<?php include 'hour1.php'; ?>
										<?php echo '<div style="font-size:18px; color:purple">1 hour</div>'; ?>
										<?php echo '<h4>'.  $data['hourly']['temperature_2m'][$horariocerto1]  . '°C</h4>'; ?>
										<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto1] . '%</div>'; ?>


							
									 </span>
								 </div>
								<div class="col-2">
									<span>
										<?php include 'hour2.php'; ?>
										<?php echo '<div style="font-size:18px; color:purple">2 hours</div>'; ?>
										<?php echo '<h4 >'.  $data['hourly']['temperature_2m'][$horariocerto2]  . '°C</h4>'; ?>
										<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto2] . '%</div>'; ?>


								</span>
								</div>
								<div class="col-2">
									<span>
										<?php include 'hour3.php'; ?>
										<?php echo '<div style="font-size:18px; color:purple">3 hours</div>'; ?>
										<?php echo '<h4 >'.  $data['hourly']['temperature_2m'][$horariocerto3]  . '°C</h4>'; ?>
										<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto3] . '%</div>'; ?>

								
								</span>
								</div>
								<div class="col-2">
									<span>
										<?php include 'hour4.php'; ?>
										<?php echo '<div style="font-size:18px; color:purple">4 hours</div>'; ?>
										<?php echo '<h4 >'.  $data['hourly']['temperature_2m'][$horariocerto4]  . '°C</h4>'; ?>
										<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto4] . '%</div>'; ?>

								
								</span>
								</div>
								<div class="col-2">
									<span>
										<?php include 'hour5.php'; ?>
										<?php echo '<div style="font-size:18px; color:purple">5 hours</div>'; ?>
										<?php echo '<h4 >'.  $data['hourly']['temperature_2m'][$horariocerto5]  . '°C</h4>'; ?>
										<?php echo '<div style="font-size: 20px;" > Rain '.  $data['hourly']['precipitation_probability'][$horariocerto5] . '%</div>'; ?>

								
								</span>
								</div>
								<div class="col-1"></div>
							</div>
							</div>
							</div>
							
							
							
							<hr/>
							<img src="images/agriculture.png">
							<div style="font-size:30px">Local & Agriculture Next Days</div><br>
							
								
							<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-1"></div>
								<div class="col-5">
									<span >
										<?php  include 'day1.php'; ?>
									   <?php 
											$datetime1 = new DateTime();
										   $datetime1->modify('+1 day');
										 echo '<div style="font-size:30px; color:purple">' . $datetime1->format('l') . '</div>'; ?>
										 <?php echo '<strong>'.  $data['daily']['temperature_2m_max']['1']  . '°C  </strong>  | '; ?>
										 <?php echo ' '.  $data['daily']['temperature_2m_min']['1']  . '°C '; ?>
										 <br>
										 <?php echo ' '.  $data['daily']['precipitation_sum']['1']  . 'mm '; ?>
										 <br>
										 <?php include 'day1-text.php'; ?>

									 </span>
								 </div>
								<div class="col-5">
									<span>
										<?php  include 'day1.php'; ?>
										   
										   <?php 
												$datetime2 = new DateTime();
											   $datetime2->modify('+2 day');
										 echo '<div style="font-size:30px; color:purple">' . $datetime2->format('l') . '</div>'; ?>
											 <?php echo '<strong>'.  $data['daily']['temperature_2m_max']['2']  . '°C  </strong>  | '; ?>
											 <?php echo ' '.  $data['daily']['temperature_2m_min']['2']  . '°C '; ?>
											 <br>
											  <?php echo ' '.  $data['daily']['precipitation_sum']['2']  . 'mm '; ?>
											 <br>
											  <?php include 'day2-text.php'; ?>
								</span>
								<div class="col-1"></div>
							</div>
							</div>
							
							<br>
							
							<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-4">
									<span >
									<?php  include 'day3.php'; ?>
									<?php 
									$datetime3 = new DateTime();
									$datetime3->modify('+3 day');
									echo '<div style="font-size:19px; color:purple">' . $datetime3->format('l') . '</div>'; ?>
									<?php echo '<strong>'.  $data['daily']['temperature_2m_max']['3']  . '°C  </strong>  | '; ?>
									<?php echo ' '.  $data['daily']['temperature_2m_min']['3']  . '°C '; ?>
									<br>
									 <?php echo ' '.  $data['daily']['precipitation_sum']['3']  . 'mm '; ?>
							
									 </span>
								 </div>
								<div class="col-4">
									<span>
									<?php  include 'day4.php'; ?>
									<?php 
									$datetime4 = new DateTime();
									$datetime4->modify('+4 day');
									echo '<div style="font-size:19px; color:purple">' . $datetime4->format('l') . '</div>'; ?>
									<?php echo '<strong>'.  $data['daily']['temperature_2m_max']['4']  . '°C  </strong>  | '; ?>
									<?php echo ' '.  $data['daily']['temperature_2m_min']['4']  . '°C '; ?>
									<br>
									 <?php echo ' '.  $data['daily']['precipitation_sum']['4']  . 'mm '; ?>
								</span>
								</div>
								<div class="col-4">
									<span>
									<?php  include 'day5.php'; ?>
									<?php 
									$datetime5 = new DateTime();
									$datetime5->modify('+5 day');
									echo '<div style="font-size:19px; color:purple">' . $datetime5->format('l') . '</div>'; ?>
									<?php echo '<strong>'.  $data['daily']['temperature_2m_max']['5']  . '°C  </strong>  | '; ?>
									<?php echo ' '.  $data['daily']['temperature_2m_min']['5']  . '°C '; ?>
									<br>
									 <?php echo ' '.  $data['daily']['precipitation_sum']['5']  . 'mm '; ?>
								</span>
								</div>
							</div>
							</div>
							
							<hr />	
							<img src="images/air.jpg">
							<div style="font-size:30px">Air Quality</div><br>
							<?php
							//AIR 
							$jsondata1 = file_get_contents ('https://air-quality-api.open-meteo.com/v1/air-quality?'.  $_SERVER['QUERY_STRING'] . '&hourly=pm10,pm2_5,carbon_monoxide,nitrogen_dioxide,sulphur_dioxide,ozone,aerosol_optical_depth,dust&timezone=America%2FChicago&start_date=2023-03-20&end_date=2023-03-22');
							$data1 = json_decode($jsondata1, true);
							?>
							
							<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-2"></div>

								<div class="col-8">
									<span >
									   <?php 
											$datetime1 = new DateTime();
										   $datetime1->modify('+1 day');
										 echo '<div style="font-size:28px; color:purple">Now</div>'; ?>
										 <?php echo '<div style="font-size:18px; color:black">Particulate  → '.  $data1['hourly']['pm10'][$horariocerto]  . 'μg/m³</div> '; ?>
										 <div style="font-size:12px">The short-term standard (24-hour or daily average) is 35 micrograms per cubic meter of air (μg/m³)<br><br></div>
										 <?php echo '<div style="font-size:18px; color:black">Carbon Monoxide  → '.  $data1['hourly']['carbon_monoxide'][$horariocerto]  . 'μg/m³</div> '; ?>
										 <div style="font-size:12px">The WHO recommends values above 25 mg/m³ for a maximum of one hour, values up to 85 mg/m³ for a maximum of 15 minutes<br><br></div>
										 <?php echo '<div style="font-size:18px; color:black">Nitrogen Dioxide  → '.  $data1['hourly']['nitrogen_dioxide'][$horariocerto]  . 'μg/m³</div> '; ?>
										 <div style="font-size:12px">Individuals who are unusually sensitive to nitrogen dioxide should consider limiting prolonged outdoor exertion when in up than 51μg/m³<br><br></div>
										 <?php echo '<div style="font-size:18px; color:black">Sulphur Dioxide  → '.  $data1['hourly']['sulphur_dioxide'][$horariocerto]  . 'μg/m³</div> '; ?>
										 <div style="font-size:12px">The WHO guideline for sulphur dioxide is 120μg/m³ as a 24-hour average<br><br></div>
										 <br>
										 <div style="font-size:22px; color:purple">More</div>

										 <?php echo '<div style="font-size:18px; color:black">Ozone  → '.  $data1['hourly']['ozone'][$horariocerto]  . 'μg/m³ '; ?>
										 <?php echo '<br>Aerosol Optical Depth  → '.  $data1['hourly']['aerosol_optical_depth'][$horariocerto]  . ' '; ?>
										 <?php echo '<br>Dust  → '.  $data1['hourly']['dust'][$horariocerto]  . 'μg/m³ </div>'; ?>



										 <br><br>
									 </span>
									 <div class="col-2"></div>

								 </div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		
</div>
</main>
<?php include '../../footer.php';?>	
</div>
 
