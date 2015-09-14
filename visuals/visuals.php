<?php

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

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
var_dump($sheetData);
//echo $sheetData[1]["A"];

echo '<pre>';
   print_r( $sheetData);
echo '</pre>';

//print_excel('asda');
?>

<html>
	<head>
		<title>Welcome MSP 2016</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="jquery.csv-0.71.min.js"></script>
	</head>
	<body>
		<h1>Results:</h1>
		<div id="chart"></div>
	</body>
</html>
