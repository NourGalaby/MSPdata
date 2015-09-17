<?php



/**********************************/
/**********************************/
/***** Initialsinng ExcelPHP  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';





 
//$Myfilename='example_data.xlsx';
$Myfilename=$_GET['name'];


$inputFileName = '../uploads/'.$Myfilename;
echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


echo '<hr />';

$data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
//var_dump($sheetData);
//echo $sheetData[1]["A"];





echo '<pre>';
 //  print_r( $sheetData);
echo '</pre>';

?>


	<?php
/**********************************/
/**********************************/
/*** Start of Univisity calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
	  //  $data = array( "cairo" , "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "ainshams", "helwan", "asuit", "alex", "mansoura" , "zagazig");
		$october = 0; $ahram = 0; $cairo = 0; $shams = 0; $azhar = 0; $american = 0; $arab = 0; $aswan = 0; $assiut = 0; $alexandria = 0; $banha = 0; $beni = 0; $british = 0; $canadian = 0;
		$damanhour = 0; $damietta = 0; $delta = 0; $japan = 0; $fayoum = 0; $german = 0; $helwan = 0; $kafrelsheikh = 0; $mansoura =0; $minia = 0; $minufya = 0; $miu = 0; $must = 0;
		$modern = 0; $nile = 0; $port = 0; $sohag = 0; $south = 0; $stem = 0; $suez = 0; $canal = 0; $tanta = 0; $française = 0; $sadat = 0; $zewail = 0; $zagazig = 0;
		$universities = array($october ,$ahram ,$cairo ,$shams ,$azhar ,$american ,$arab ,$aswan ,$assiut ,$alexandria ,$banha ,$beni ,$british ,$canadian ,$damanhour ,$damietta ,$delta ,$japan ,$fayoum ,$german ,$helwan ,$kafrelsheikh ,$mansoura ,$minia ,$minufya ,$miu ,$must ,$modern ,$nile ,$port ,$sohag ,$south ,$stem ,$suez ,$canal ,$tanta ,$française ,$sadat ,$zewail ,$zagazig);
		for ($i=1; ; $i++) { 
			if (empty($data[$i]['BI'])) {
				break;
			}
			else{
				strtolower($data[$i]['BI']);
				trim($data[$i]['BI']);
				if(stristr($data[$i]['BI'], "october")){
					$universities[0]++;
				}
				elseif (stristr($data[$i]['BI'], "ahram")) {
					$universities[1]++;
				}
				elseif (stristr($data[$i]['BI'], "cairo")) {
					$universities[2]++;
				}
				elseif (stristr($data[$i]['BI'], "shams")) {
					$universities[3]++; 
				}
				elseif (stristr($data[$i]['BI'], "american")) {
					$universities[4]++;
				}
				elseif (stristr($data[$i]['BI'], "arab")) {
					$universities[5]++;
				}
				elseif (stristr($data[$i]['BI'], "aswan")) {
					$universities[6]++;
				}
				elseif (stristr($data[$i]['BI'], "assiut")) {
					$universities[7]++;
				}
				elseif (stristr($data[$i]['BI'], "alexandria")) {
					$universities[8]++;
				}
				elseif (stristr($data[$i]['BI'], "banha")) {
				
					$universities[9]++;
				}
				elseif (stristr($data[$i]['BI'], "beni")) {
					$universities[10]++;
				}
				elseif (stristr($data[$i]['BI'], "british")) {
					$universities[11]++;
				}
				elseif (stristr($data[$i]['BI'], "canadian")) {
					$universities[12]++;
				}
				elseif (stristr($data[$i]['BI'], "damanhour")) {
					$universities[13]++;
				}
				elseif (stristr($data[$i]['BI'], "damietta")) {
					$universities[14]++;
				}
				elseif (stristr($data[$i]['BI'], "delta")) {
					$universities[15]++;
				}
				elseif (stristr($data[$i]['BI'], "japan")) {
					$universities[16]++;
				}
				elseif (stristr($data[$i]['BI'], "fayoum")) {
					$universities[17]++;
				}
				elseif (stristr($data[$i]['BI'], "german")) {
					$universities[18]++;
				}
				elseif (stristr($data[$i]['BI'], "helwan")) {
					$universities[19]++;
				}
				elseif (stristr($data[$i]['BI'], "kafrelsheikh")) {
					$universities[20]++;
				}
				elseif (stristr($data[$i]['BI'], "mansoura")) {
					$universities[21]++;
				}
				elseif (stristr($data[$i]['BI'], "minia")) {
					$universities[22]++;
				}
				elseif (stristr($data[$i]['BI'], "minufya")) {
					$universities[23]++;
				}
				elseif (stristr($data[$i]['BI'], "mansoura")) {
					$universities[24]++;
				}
				elseif (stristr($data[$i]['BI'], "miu")) {
					$universities[25]++;
				}
				elseif (stristr($data[$i]['BI'], "must")) {
					$universities[26]++;
				}
				elseif (stristr($data[$i]['BI'], "modern")) {
					$universities[27]++;
				}
				elseif (stristr($data[$i]['BI'], "nile")) {
					$universities[28]++;
				}
				elseif (stristr($data[$i]['BI'], "port")) {
					$universities[29]++;
				}
				elseif (stristr($data[$i]['BI'], "sohag")) {
					$universities[30]++;
				}
				elseif (stristr($data[$i]['BI'], "south")) {
					$universities[31]++;
				}
				elseif (stristr($data[$i]['BI'], "stem")) {
					$universities[32]++;
				}
				elseif (stristr($data[$i]['BI'], "suez")) {
					$universities[33]++;
				}
				elseif (stristr($data[$i]['BI'], "canal")) {
					$universities[34]++;
				}
				elseif (stristr($data[$i]['BI'], "tanta")) {
					$universities[35]++;
				}
				elseif (stristr($data[$i]['BI'], "française")) {
					$universities[36]++;
				}
				elseif (stristr($data[$i]['BI'], "sadat")) {
					$universities[37]++;
				}
				elseif (stristr($data[$i]['BI'], "zewail")) {
					$universities[38]++;
				}
				elseif (stristr($data[$i]['BI'], "zagazig")) {
					$universities[39]++;
				}

				else {
					
				}
			}
		}
/**********************************/
/**********************************/
/***** End of Univisity calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
		?>


		<?php
/**********************************/
/**********************************/
/*** Start of Faculty calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/


	//	$data = array( "arts","arts","engineering" );
		$other=0;
	    $agriculture = 0 ;$arts = 0 ;$commerce = 0 ;$computer = 0 ;$education = 0 ;$dentistry = 0 ;$languages = 0 ;$law = 0 ;$medicine = 0 ;$nursing = 0 ;$pharmacy = 0 ;$engineering = 0 ;$science = 0 ;$specific = 0 ;
		$facluty = array($other,$agriculture ,$arts ,$commerce ,$computer ,$education ,$dentistry ,$languages ,$law ,$medicine ,$nursing ,$pharmacy ,$engineering ,$science ,$specific);
		for ($i=1; ; $i++) { 
			if (empty($data[$i]['BQ'])) {
			//	echo "Done at i = ".$i."  ";
			//	echo "value is ".$data[2]['BQ'];
				break;
			}
			else{
				//strtolower($data[$i]['BQ']); 
				trim($data[$i]['BQ']);
				if(stristr($data[$i]['BQ'], "cairo")){
					$facluty[0]++;
				}
				elseif (stristr($data[$i]['BQ'], "Faculty of Agriculture")) {
					$facluty[1]++;
				}
				elseif (stristr($data[$i]['BQ'], "arts")) {
					$facluty[2]++;
				}
				elseif (stristr($data[$i]['BQ'], "commerce")) {
					$$facluty[3]++;
				}
				elseif (stristr($data[$i]['BQ'], "computer")) {
					$facluty[4]++;
				}
				elseif (stristr($data[$i]['BQ'], "education")) {
					$facluty[5]++;
				}
				elseif (stristr($data[$i]['BQ'], "languages")) {
					$facluty[6]++;
				}
				elseif (stristr($data[$i]['BQ'], "law")) {
					$facluty[7]++;
				}
				elseif (stristr($data[$i]['BQ'], "Faculty of Medicine")) {
					$facluty[8]++;
				}
				elseif (stristr($data[$i]['BQ'], "nursing")) {
					$facluty[9]++;
				}
				elseif (stristr($data[$i]['BQ'], "pharmacy")) {
					$facluty[10]++;
				}
				elseif (stristr($data[$i]['BQ'], "engineering")) {
					$facluty[11]++;
				}
				elseif (stristr($data[$i]['BQ'], "science")) {
					$facluty[12]++;
				}
				elseif (stristr($data[$i]['BQ'], "other")) {
					$facluty[13]++;

				}
				else {
					
				}
			}
		}
/**********************************/
/**********************************/
/*** End of Faculty calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
		?>






<?php
/**********************************/
/**********************************/
/*** Start of City calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
	 
		$Alexandria = 0; $Assiut = 0; $Banha = 0; $Beni = 0; $Cairo = 0; $Damanhour =0;$Damietta = 0; $Fayoum = 0; $Giza = 0; $Ismailia = 0; $Kafrelsheikh = 0; $Mansoura =0;$Minia = 0; $Minufya = 0; $Port = 0; $Sohag = 0; $South = 0; $Suaz =0; $Tanta = 0 ;$Zagazig = 0;
		$city = array($Alexandria , $Assiut , $Banha , $Beni , $Cairo , $Damanhour , $Damietta , $Fayoum , $Giza , $Ismailia , $Kafrelsheikh , $Mansoura , $Minia , $Minufya , $Port , $Sohag , $South , $Suaz , $Tanta , $Zagazig);
		for ($i=1; ; $i++) { 
			if (empty($data[$i]['EC'])) {
						echo "Done at i = ".$i."  ";
			echo "value is ".$Alexandria;
				break;
			}
			else{
				strtolower($data[$i]['EC']);
				trim($data[$i]['EC']);
				if(stristr($data[$i]['EC'], "alexandria")){
					$city[0]++;
					$Alexandria++;
				}
				elseif (stristr($data[$i]['EC'], "assiut")) {
					$city[1]++;
					$Assiut++;
				}
				elseif (stristr($data[$i]['EC'], "banha")) {
					$city[2]++;
					$Banha++;
				}
				elseif (stristr($data[$i]['EC'], "beni")) {
					$city[3]++;
					$Beni++;
				}
				elseif (stristr($data[$i]['EC'], "cairo")) {
					$city[4]++;
					$Cairo++;
				}
				elseif (stristr($data[$i]['EC'], "damanhour")) {
					$city[5]++;
				}
				elseif (stristr($data[$i]['EC'], "damietta")) {
					$city[6]++;
				}
				elseif (stristr($data[$i]['EC'], "fayoum")) {
					$city[7]++;
				}
				elseif (stristr($data[$i]['EC'], "giza")) {
					$city[8]++;
				}
				elseif (stristr($data[$i]['EC'], "ismailia")) {
					$city[9]++;
				}
				elseif (stristr($data[$i]['EC'], "kafrelsheikh")) {
					$city[10]++;
				}
				elseif (stristr($data[$i]['EC'], "mansoura")) {
					$city[11]++;
				}
				elseif (stristr($data[$i]['EC'], "minia")) {
					$city[12]++;
				}
				elseif (stristr($data[$i]['EC'], "minufya")) {
					$city[13]++;
				}
				elseif (stristr($data[$i]['EC'], "port")) {
					$city[14]++;
				}
				elseif (stristr($data[$i]['EC'], "sohag")) {
					$city[15]++;
				}
				elseif (stristr($data[$i]['EC'], "south")) {
					$city[16]++;
				}
				elseif (stristr($data[$i]['EC'], "suez")) {
					$city[17]++;
				}
				elseif (stristr($data[$i]['EC'], "tanta")) {
					$city[18]++;
				}
				elseif (stristr($data[$i]['EC'], "zagazig")) {
					$city[19]++;
				}
				else {
					
				}
			}
		}


/**********************************/
/**********************************/
/*** End of City   *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
		
		?>




<?php
	/**********************************/
/**********************************/
/*** Graduation Year  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
	  
		$_2015 = 0; $_2016 = 0; $_2017 = 0; $_2018 = 0; $_2019 = 0; $_2020 =0;
		$gradtion = array($_2015, $_2016, $_2017, $_2018, $_2019, $_2020);
		for ($i=1; ; $i++) { 
			if (empty($data[$i]['DQ'])) {
				break;
			}
			else{
				strtolower($data[$i]['DQ']);
				trim($data[$i]['DQ']);
				if(stristr($data[$i]['DQ'], "2015")){
					$gradtion[0]++;
					$_2015++;
				}
				elseif (stristr($data[$i]['DQ'], "2016")) {
					$gradtion[1]++;
				}
				elseif (stristr($data[$i]['DQ'], "2017")) {
					$gradtion[2]++;
				}
				elseif (stristr($data[$i]['DQ'], "2018")) {
					$gradtion[3]++;
				}
				elseif (stristr($data[$i]['DQ'], "2019")) {
					$gradtion[4]++;
				}
				elseif (stristr($data[$i]['DQ'], "2020")) {
					$gradtion[5]++;
				}
				else {
					
				}
			}
		}
/**********************************/
/**********************************/
/*** End  of Graduation year  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/
		?>
		
<?php 

//Debug
echo '<pre>';
  print_r( $facluty);
echo '</pre>';


echo '<pre>';
  print_r( $gradtion);
echo '</pre>';


//echo $data[5]['BI'];

 ?>





 <?php 
/**********************************/
/**********************************/
/**     Writing CSV FILE      *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/


//$file = fopen("mydata.csv","w");
 //fwrite($file,"Hello World. Testing2!");
 


  ?>



<!-- ****************************************************** -->
<!-- ****************************************************** -->
<!-- ****************************************************** -->
<!-- ****************************************************** -->
<!-- ***********Date Visualsiation starts Here************* -->
<!-- ****************************************************** -->
<!-- ****************************************************** -->
<!-- ****************************************************** -->
<!-- ****************************************************** -->




<html> 
	<head> 
		<title>MSP 2016 Insights</title> 
		<script src="https://www.google.com/jsapi"></script> 
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 
		<script src="jquery.csv-0.71.min.js"></script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([0,1]);
					var options = { 
						title: "Type Of Applicant" 
						
						};
						
					var chart = new google.visualization.PieChart(document.getElementById('PieChartTypeOfApplicant')); 
					chart.draw(view, options);
					
					});
				}
		</script> 
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([2,3]);
					var options = { 
						title: "Male/Female" 
						
						};
						
					var chart = new google.visualization.PieChart(document.getElementById('PieChartMaleFemale')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([4,5]);
					var options = { 
						title: "Specialization" 
						
						};
						
					var chart = new google.visualization.PieChart(document.getElementById('PieChartSpeci')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([6,7]);
					var options = { 
						title: "Academic Degree" 
						
						};
						
					var chart = new google.visualization.PieChart(document.getElementById('PieChartDegree')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([8,9]);
					var options = { 
						title: "How did you hear about the MSP" 
						
						};
						
					var chart = new google.visualization.PieChart(document.getElementById('PieChartHowDidYouHear')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([10,11]);
					var options = { 
						title: "English level" 
						
						};
						
					var chart = new google.visualization.ColumnChart(document.getElementById('ColumnChartEnglishLvl')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([12,13]);
					var options = { 
						title: "Age" 
						
						};
						
					var chart = new google.visualization.ColumnChart(document.getElementById('ColumnChartAge')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([14,15]);
					var options = { 
						title: "Expected Graduation Date" 
						
						};
						
					var chart = new google.visualization.LineChart(document.getElementById('LineChartExpecGradDate')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([16,17]);
					var options = { 
						title: "Cities"
						
						
						};
						
					var chart = new google.visualization.BarChart(document.getElementById('BarChartCity')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([18,19]);
					var options = { 
						title: "Universities"
						
						
						};
						
					var chart = new google.visualization.BarChart(document.getElementById('BarChartUni')); 
					chart.draw(view, options);
					
					});
				}
		</script>
		<script>
			google.load("visualization", "1", {packages:["corechart"]}); 
			google.setOnLoadCallback(drawChart);
			function drawChart() { 
				// grab the CSV 
				$.get("mydata.csv", function(csvString) {
					// transform the CSV string into a 2-dimensional array 
					var arrayData = $.csv.toArrays(csvString, {onParseValue: $.csv.hooks.castToScalar});
					// this new DataTable object holds all the data 
					var data = new google.visualization.arrayToDataTable(arrayData);
					// this view can select a subset of the data at a time 
					var view = new google.visualization.DataView(data); 
					view.setColumns([20,21]);
					var options = { 
						title: "Faculties"
						
						
						};
						
					var chart = new google.visualization.BarChart(document.getElementById('BarChartFaculty')); 
					chart.draw(view, options);
					
					});
				}
		</script>
	</head> 
<body>
	<h1>The required charts with sample data</h1> 
	<div id="PieChartTypeOfApplicant"
	<div id="PieChartMaleFemale"></div>
	<div id="PieChartSpeci"></div>
	<div id="PieChartDegree"></div>
	<div id="PieChartHowDidYouHear"></div>
	<div id="ColumnChartEnglishLvl"></div>
	<div id="ColumnChartAge"></div>
	<div id="LineChartExpecGradDate"></div>
	<div id="BarChartCity"></div> 
	<div id="BarChartUni"></div>
	<div id="BarChartFaculty" 
</body>
</html>
