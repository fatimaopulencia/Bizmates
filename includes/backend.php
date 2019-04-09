<?php

	class backend{

		public function closeConnection($con){
			mysqli_close($con);
		}

		public function FuncTravel($travel){
			$location_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$travel.'&mode=html&APPID=88481eda892989a386e296e32d4b3641';
		

			try{
				$location_json = file_get_contents($location_url);
				$location_toArray = json_decode($location_json,true);

				echo $location_json;
			}
			catch(Exception $e){
				echo "Oops! No data for the chosen country!";
			}

		}
	}

	function checkFunction($travel){

		$newdb = new backend();
		$newdb->FuncTravel($travel);

	}



?>