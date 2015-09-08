<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';


?>

<?php


function print_excel($Myfilename){

$Myfilename='examplefile.xlsx';

$inputFileName = './Uploads/'.$Myfilename;
echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);


echo '<hr />';

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
var_dump($sheetData);
//echo $sheetData[1]["A"];

echo '<pre>';
   print_r( $sheetData);
echo '</pre>';
}
print_excel('asda');
?>
