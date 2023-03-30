<?php
if ($data['daily']['weathercode'][1] == '0'){
	   echo 'It is important to monitor temperature and soil moisture levels to ensure that crops are not being adversely affected by the heat.';
   } else {}	
   if ($data['daily']['weathercode'][1] == '1'){
	   echo 'On the positive side, a mainly clear day provides ample sunlight for plants to undergo photosynthesis and grow. Additionally, clear weather conditions can help to dry out excess moisture in the soil, reducing the risk of fungal diseases and other issues.';
   } else {}	
   if ($data['daily']['weathercode'][1] == '2'){
	   echo 'Weather can provide some relief from direct sunlight, which can be beneficial for some crops that may be sensitive to high temperatures or sunlight. Additionally, the cloud cover can help to retain moisture in the soil, which can be beneficial for crops that require more water.';
   } else {}	
   if ($data['daily']['weathercode'][1] == '3'){
	   echo 'On the positive side, overcast weather can provide relief from direct sunlight, which can be beneficial for crops that are sensitive to high temperatures or sunlight. Additionally, the cloud cover can help to retain moisture in the soil, which can be beneficial for crops that require more water.';
   } else {}
   if ($data['daily']['weathercode'][1] == '45'){
		  echo 'Fog can help to maintain soil moisture levels and reduce water loss through evaporation, which can be particularly beneficial for crops with shallow roots. In some cases, fog can also act as a natural pesticide, reducing the need for chemical treatments to control pests.';
	} else {}
	if ($data['daily']['weathercode'][1] == '48'){
		   echo 'Severe rime fog can cause the ice coating to become too thick, which can limit the amount of sunlight reaching the crops and limit photosynthesis and growth. Moreover, the weight of the ice can damage the plant tissues and branches, leading to breakage and loss of yield.';
	} else {}	  	
   if ($data['daily']['weathercode'][1] == '51'){
	   echo 'The light intensity of the drizzle can help to maintain soil moisture levels and reduce water loss through evaporation, which can be particularly beneficial for crops with shallow roots." />';
   } else {}	
   if ($data['daily']['weathercode'][1] == '53'){
	   echo 'Precipitation of small water droplets, usually between 0.5mm and 2.5mm in diameter. The moderate intensity of the drizzle can also increase the risk of soil saturation, waterlogging, and other soil-related issues that can lead to reduced crop growth and yield." />';
   } else {}	
   if ($data['daily']['weathercode'][1] == '55'){
	   echo 'Heavy precipitation of small water droplets, usually more than 2.5mm in diameter. The weight of the water droplets can cause the fruits and vegetables to bruise, crack, or break, leading to quality and yield loss. Moreover, dense intensity drizzle can increase the risk of fungal diseases in crops, as the damp and humid conditions can promote their growth and spread. />';
   } else {}	
   if ($data['daily']['weathercode'][1] == '56'){
	   echo 'This can lead to wilting, browning, and eventually death of the plant. Moreover, light freezing drizzle can cause damage to the soil structure, making it difficult for roots to grow and absorb nutrients. Therefore, it is important to take appropriate measures to protect crops during light freezing drizzle. For example, farmers may need to cover crops with protective materials such as plastic sheeting or netting to prevent the water droplets from freezing on the crops.';
   } else {}
   if ($data['daily']['weathercode'][1] == '57'){
	   echo 'The ice on the crops can cause them to break or become uprooted. Moreover, the ice can cause the plant cells to rupture, leading to wilting, browning, and eventually death of the plant. Additionally, dense intensity freezing drizzle can cause damage to the soil structure, making it difficult for roots to grow and absorb nutrients.';
   } else {}
   if ($data['daily']['weathercode'][1] == '61'){
		echo 'It can also help to reduce the need for irrigation and reduce the risk of drought. Additionally, light rain can help to wash away dust and other pollutants from the leaves of plants, which can improve their ability to photosynthesize.';
	  } else {}
	if ($data['daily']['weathercode'][1] == '63'){
	 echo 'Moderate rain can provide necessary moisture to the soil and support plant growth. It can also help to wash away dust and other pollutants from the leaves of plants, which can improve their ability to photosynthesize. Additionally, moderate rain can help to reduce the need for irrigation and reduce the risk of drought.';
	  } else {}  
	if ($data['daily']['weathercode'][1] == '65'){
	  echo 'Heavy intensity rain can help to replenish water levels in the soil and provide necessary moisture to crops. This can help to support plant growth and reduce the need for irrigation. Additionally, heavy rain can help to wash away dust and other pollutants from the leaves of plants, which can improve their ability to photosynthesize.';
  } else {}  	
  if ($data['daily']['weathercode'][1] == '66'){
		echo 'Freezing rain can damage crops in several ways. First, it can cause physical damage to plants by coating them in a layer of ice, which can break stems and branches. This can cause significant yield losses for farmers, especially for fruit crops like apples and cherries. Additionally, the weight of the ice can also damage the crop canopy, leading to even more damage.';
	} else {}   
	if ($data['daily']['weathercode'][1] == '67'){
	echo 'The impacts of heavy intensity freezing rain on crops are similar to those of light freezing rain, but more severe. The weight of the ice can cause significant damage to crops, breaking stems and branches and causing yield losses. Additionally, heavy freezing rain can cause power outages, which can be particularly harmful for livestock and other animals on farms.';
	} else {}   
	if ($data['daily']['weathercode'][1] == '71'){
	echo 'Slight snowfall can cause damage to crops by breaking branches or causing them to bend under the weight of the snow. In areas where snowfall is rare, even a slight amount of snow can disrupt farming operations and cause damage to crops.';
	} else {}   
	if ($data['daily']['weathercode'][1] == '73'){
	echo 'Snow can act as a natural insulator, protecting crops from extremely low temperatures but can cause damage to crops by breaking branches or causing them to bend under the weight of the snow.';
	} else {} 
	if ($data['daily']['weathercode'][1] == '75'){
	echo 'Heavy snow can break branches and cause crops to bend or even collapse under the weight of the snow. This can cause significant damage to crops and reduce yields. It can delay planting and reduce the amount of time available for crops to grow and mature. This can result in lower yields or even crop failure.';
	} else {}   
	if ($data['daily']['weathercode'][1] == '77'){
	echo 'Possible of damage to crops by breaking branches or causing them to bend under the weight of the snow. This can be particularly problematic for crops that are close to harvest, as it can reduce the yield and quality of the crop. While snow grains are not as heavy as other types of snow, they can still be accompanied by strong winds. This can cause soil erosion, which can damage crops and reduce soil fertility.';
	} else {}  	
	if ($data['daily']['weathercode'][1] == '80'){
	echo 'Rain provides much-needed moisture for crops, which can help them grow and develop and can help to replenish soil moisture content and contribute to groundwater recharge.';
	} else {}
	if ($data['daily']['weathercode'][1] == '81'){
	echo 'Rain can help to replenish soil moisture content and contribute to groundwater recharge and can provide a source of water for crops during the growing season.';
	} else {}  	  
	if ($data['daily']['weathercode'][1] == '82'){
	echo 'Flooding: Intense rainfall can quickly saturate the soil and cause flooding, which can damage crops, wash away soil and nutrients, and reduce yields. Disease and pest outbreaks: Intense rainfall can create conditions that promote disease and pest outbreaks, which can damage crops and reduce yields.';
	} else {}  	
	if ($data['daily']['weathercode'][1] == '85'){
	echo 'Snow can act as a natural insulator, protecting crops from extremely cold temperatures. Some crops, such as winter wheat, require a period of cold weather to germinate and grow, and snow showers can help provide the necessary conditions.';
	} else {} 
	if ($data['daily']['weathercode'][1] == '86'){
	echo 'Heavy snow can physically damage crops, such as breaking branches or causing crops to bend or collapse. This can reduce yields and quality of the harvested crop and can cause soil erosion, particularly if it is accompanied by strong winds.';
	} else {} 
	if ($data['daily']['weathercode'][1] == '95'){
	echo 'Lightning can fix nitrogen in the soil, which can improve soil fertility. Thunderstorms can cool down the temperature and relieve plants from heat stress.';
	} else {} 
	if ($data['daily']['weathercode'][1] == '96'){
	echo 'Thunderstorms can provide much-needed moisture for crops, particularly during dry periods. This can help improve crop growth and yield and can help control pests, as the heavy rain can wash them away.';
	} else {} 
	if ($data['daily']['weathercode'][1] == '99'){
	echo 'Significant negative impacts on agriculture, particularly if they occur during critical stages of crop growth and development. Hail can physically damage crops, such as breaking branches or causing crops to bend or collapse. This can reduce yields and quality of the harvested crop.';
	} else {} 
   ?>