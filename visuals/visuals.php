<!DOCTYPE html> 
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
//$nnn = "AA";
//echo $data[1][$nnn];
$auth;
//echo substr($Myfilename,0,3);
$Auth_test =substr($Myfilename,0,3);

if($Auth_test=="Non"){
	echo "Non Authenticated file";
$auth=false;

}else{
		echo "Authenticated file";
$auth=true;
}




echo '<pre>';
 //  print_r( $sheetData);
echo '</pre>';

?>


	<?php


echo '<pre>';
 //print_r($data);
echo '</pre>';
/**********************************/
/**********************************/
/*** Start of Univisity calc  *****/
/**********************************/
/**********************************/
/**********************************/
/**********************************/

$row='BI';
if(!$auth){

$row='O';
}

	  //  $data = array( "cairo" , "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "ainshams", "helwan", "asuit", "alex", "mansoura" , "zagazig");
		$october = 0; $ahram = 0; $cairo = 0; $shams = 0; $azhar = 0; $american = 0; $arab = 0; $aswan = 0; $assiut = 0; $alexandria = 0; $banha = 0; $beni = 0; $british = 0; $canadian = 0;
		$damanhour = 0; $damietta = 0; $delta = 0; $japan = 0; $fayoum = 0; $german = 0; $helwan = 0; $kafrelsheikh = 0; $mansoura =0; $minia = 0; $minufya = 0; $miu = 0; $must = 0;
		$modern = 0; $nile = 0; $port = 0; $sohag = 0; $south = 0; $stem = 0; $suez = 0; $canal = 0; $tanta = 0; $francaise = 0; $sadat = 0; $zewail = 0; $zagazig = 0;
		$universities = array($october ,$ahram ,$cairo ,$shams ,$azhar ,$american ,$arab ,$aswan ,$assiut ,$alexandria ,$banha ,$beni ,$british ,$canadian ,$damanhour ,$damietta ,$delta ,$japan ,$fayoum ,$german ,$helwan ,$kafrelsheikh ,$mansoura ,$minia ,$minufya ,$miu ,$must ,$modern ,$nile ,$port ,$sohag ,$south ,$stem ,$suez ,$canal ,$tanta ,$francaise ,$sadat ,$zewail ,$zagazig);
		for ($i=1; ; $i++) { 
			if (empty($data[$i][$row])) {
				break;
			}
			else{
				strtolower($data[$i][$row]);
				trim($data[$i][$row]);
				if(stristr($data[$i][$row], "october")){
					$universities[0]++;
					$october++;
				}
				elseif (stristr($data[$i][$row], "ahram")) {
					$universities[1]++;
					$ahram++;
				}
				elseif (stristr($data[$i][$row], "cairo")) {
					$universities[2]++;
					$cairo++;
				}
				elseif (stristr($data[$i][$row], "shams")) {
					$universities[3]++; 
					$shams++;
				}
				elseif (stristr($data[$i][$row], "american")) {
					$universities[4]++;
					$american++;
				}
				elseif (stristr($data[$i][$row], "arab")) {
					$universities[5]++;
					$arab++;
				}
				elseif (stristr($data[$i][$row], "aswan")) {
					$universities[6]++;
				}
				elseif (stristr($data[$i][$row], "assiut")) {
					$universities[7]++;
				}
				elseif (stristr($data[$i][$row], "alexandria")) {
					$universities[8]++;
				}
				elseif (stristr($data[$i][$row], "banha")) {
				
					$universities[9]++;
				}
				elseif (stristr($data[$i][$row], "beni")) {
					$universities[10]++;
				}
				elseif (stristr($data[$i][$row], "british")) {
					$universities[11]++;
				}
				elseif (stristr($data[$i][$row], "canadian")) {
					$universities[12]++;
				}
				elseif (stristr($data[$i][$row], "damanhour")) {
					$universities[13]++;
				}
				elseif (stristr($data[$i][$row], "damietta")) {
					$universities[14]++;
				}
				elseif (stristr($data[$i][$row], "delta")) {
					$universities[15]++;
				}
				elseif (stristr($data[$i][$row], "japan")) {
					$universities[16]++;
				}
				elseif (stristr($data[$i][$row], "fayoum")) {
					$universities[17]++;
				}
				elseif (stristr($data[$i][$row], "german")) {
					$universities[18]++;
				}
				elseif (stristr($data[$i][$row], "helwan")) {
					$universities[19]++;
				}
				elseif (stristr($data[$i][$row], "kafrelsheikh")) {
					$universities[20]++;
				}
				elseif (stristr($data[$i][$row], "mansoura")) {
					$universities[21]++;
				}
				elseif (stristr($data[$i][$row], "minia")) {
					$universities[22]++;
				}
				elseif (stristr($data[$i][$row], "minufya")) {
					$universities[23]++;
				}
				elseif (stristr($data[$i][$row], "mansoura")) {
					$universities[24]++;
				}
				elseif (stristr($data[$i][$row], "miu")) {
					$universities[25]++;
				}
				elseif (stristr($data[$i][$row], "must")) {
					$universities[26]++;
				}
				elseif (stristr($data[$i][$row], "modern")) {
					$universities[27]++;
				}
				elseif (stristr($data[$i][$row], "nile")) {
					$universities[28]++;
				}
				elseif (stristr($data[$i][$row], "port")) {
					$universities[29]++;
				}
				elseif (stristr($data[$i][$row], "sohag")) {
					$universities[30]++;
				}
				elseif (stristr($data[$i][$row], "south")) {
					$universities[31]++;
				}
				elseif (stristr($data[$i][$row], "stem")) {
					$universities[32]++;
				}
				elseif (stristr($data[$i][$row], "suez")) {
					$universities[33]++;
				}
				elseif (stristr($data[$i][$row], "canal")) {
					$universities[34]++;
				}
				elseif (stristr($data[$i][$row], "tanta")) {
					$universities[35]++;
				}
				elseif (stristr($data[$i][$row], "française")) {
					$universities[36]++;
				}
				elseif (stristr($data[$i][$row], "sadat")) {
					$universities[37]++;
				}
				elseif (stristr($data[$i][$row], "zewail")) {
					$universities[38]++;
				}
				elseif (stristr($data[$i][$row], "zagazig")) {
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
$row='BQ';
if(!$auth){

$row='Q';
}


	//	$data = array( "arts","arts","engineering" );
		$other=0;
	    $agriculture = 0 ;$arts = 0 ;$commerce = 0 ;$computer = 0 ;$education = 0 ;$dentistry = 0 ;$languages = 0 ;$law = 0 ;$medicine = 0 ;$nursing = 0 ;$pharmacy = 0 ;$engineering = 0 ;$science = 0 ;$specific = 0 ;
		$facluty = array($other,$agriculture ,$arts ,$commerce ,$computer ,$education ,$dentistry ,$languages ,$law ,$medicine ,$nursing ,$pharmacy ,$engineering ,$science ,$specific,"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
		for ($i=1; ; $i++) { 
			if (empty($data[$i][$row])) {
			//	echo "Done at i = ".$i."  ";
			//	echo "value is ".$data[2][$row];
				break;
			}
			else{
				//strtolower($data[$i][$row]); 
				trim($data[$i][$row]);
				if(stristr($data[$i][$row], "cairo")){
					$facluty[0]++;
				}
				elseif (stristr($data[$i][$row], "Faculty of Agriculture")) {
					$facluty[1]++;
				}
				elseif (stristr($data[$i][$row], "arts")) {
					$facluty[2]++;
				}
				elseif (stristr($data[$i][$row], "commerce")) {
					$$facluty[3]++;
				}
				elseif (stristr($data[$i][$row], "computer")) {
					$facluty[4]++;
				}
				elseif (stristr($data[$i][$row], "education")) {
					$facluty[5]++;
				}
				elseif (stristr($data[$i][$row], "languages")) {
					$facluty[6]++;
				}
				elseif (stristr($data[$i][$row], "law")) {
					$facluty[7]++;
				}
				elseif (stristr($data[$i][$row], "Faculty of Medicine")) {
					$facluty[8]++;
				}
				elseif (stristr($data[$i][$row], "nursing")) {
					$facluty[9]++;
				}
				elseif (stristr($data[$i][$row], "pharmacy")) {
					$facluty[10]++;
				}
				elseif (stristr($data[$i][$row], "engineering")) {
					$facluty[11]++;
				}
				elseif (stristr($data[$i][$row], "science")) {
					$facluty[12]++;
				}
				elseif (stristr($data[$i][$row], "other")) {
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

$row='EC';
if(!$auth){

$row='L';
}



	 $othercity=0;
		$Alexandria = 0; $Assiut = 0; $Banha = 0; $Beni = 0; $Cairo = 0; $Damanhour =0;$Damietta = 0; $Fayoum = 0; $Giza = 0; $Ismailia = 0; $Kafrelsheikh = 0; $Mansoura =0;$Minia = 0; $Minufya = 0; $Port = 0; $Sohag = 0; $South = 0; $Suaz =0; $Tanta = 0 ;$Zagazig = 0;
		$city = array($Alexandria , $Assiut , $Banha , $Beni , $Cairo , $Damanhour , $Damietta , $Fayoum , $Giza , $Ismailia , $Kafrelsheikh , $Mansoura , $Minia , $Minufya , $Port , $Sohag , $South , $Suaz , $Tanta , $Zagazig,"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
		for ($i=1; ; $i++) { 
			if (empty($data[$i][$row])) {
						//echo "Done at i = ".$i."  ";
		//	echo "value is ".$Alexandria;
				break;
			}
			else{
				strtolower($data[$i][$row]);
				trim($data[$i][$row]);
				if(stristr($data[$i][$row], "alexandria")){
					$city[0]++;
					$Alexandria++;
				}
				elseif (stristr($data[$i][$row], "assiut")) {
					$city[1]++;
					$Assiut++;
				}
				elseif (stristr($data[$i][$row], "banha")) {
					$city[2]++;
					$Banha++;
				}
				elseif (stristr($data[$i][$row], "beni")) {
					$city[3]++;
					$Beni++;
				}
				elseif (stristr($data[$i][$row], "cairo")) {
					$city[4]++;
					$Cairo++;
				}
				elseif (stristr($data[$i][$row], "damanhour")) {
					$city[5]++;
				}
				elseif (stristr($data[$i][$row], "damietta")) {
					$city[6]++;
				}
				elseif (stristr($data[$i][$row], "fayoum")) {
					$city[7]++;
				}
				elseif (stristr($data[$i][$row], "giza")) {
					$city[8]++;
				}
				elseif (stristr($data[$i][$row], "ismailia")) {
					$city[9]++;
				}
				elseif (stristr($data[$i][$row], "kafrelsheikh")) {
					$city[10]++;
				}
				elseif (stristr($data[$i][$row], "mansoura")) {
					$city[11]++;
				}
				elseif (stristr($data[$i][$row], "minia")) {
					$city[12]++;
				}
				elseif (stristr($data[$i][$row], "minufya")) {
					$city[13]++;
				}
				elseif (stristr($data[$i][$row], "port")) {
					$city[14]++;
				}
				elseif (stristr($data[$i][$row], "sohag")) {
					$city[15]++;
				}
				elseif (stristr($data[$i][$row], "south")) {
					$city[16]++;
				}
				elseif (stristr($data[$i][$row], "suez")) {
					$city[17]++;
				}
				elseif (stristr($data[$i][$row], "tanta")) {
					$city[18]++;
				}
				elseif (stristr($data[$i][$row], "zagazig")) {
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

$row='DQ';
if(!$auth){

$row='U';
}
	  
		$_2015 = 0; $_2016 = 0; $_2017 = 0; $_2018 = 0; $_2019 = 0; $_2020 =0;
		$gradtion = array($_2015, $_2016, $_2017, $_2018, $_2019, $_2020,"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
		for ($i=1; ; $i++) { 
			if (empty($data[$i][$row])) {
				break;
			}
			else{
				strtolower($data[$i][$row]);
				trim($data[$i][$row]);
				if(stristr($data[$i][$row], "2015")){
					$gradtion[0]++;
					$_2015++;
				}
				elseif (stristr($data[$i][$row], "2016")) {
					$gradtion[1]++;
				}
				elseif (stristr($data[$i][$row], "2017")) {
					$gradtion[2]++;
				}
				elseif (stristr($data[$i][$row], "2018")) {
					$gradtion[3]++;
				}
				elseif (stristr($data[$i][$row], "2019")) {
					$gradtion[4]++;
				}
				elseif (stristr($data[$i][$row], "2020")) {
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
 // print_r( $facluty);
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
$N_typeOfApplicant= array("Non-Unique","Unique","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$N_Sex= array("Male","Female","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

$N_Specialization=array("spec1","speci2","unfinished...","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

$N_Degree=array("deg1","deg2","unfinshed..","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

$N_Hear=array("hear1","hear2","soon...","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$N_English=array("eng1","eng2","soon...","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$N_age=array("age1","age2","soon...","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$IN_ExpectGradDate=array("2015","2016","2017","2018","2019","2020","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

$N_City=array("Alexandria" , "Assiut" , "Banha" , "Beni" , "Cairo" , "Damanhour" , "Damietta" , "Fayoum" , "Giza" , "Ismailia" , "Kafrelsheikh" , "Mansoura" , "Minia" , "Minufya" , "Port" , "Sohag" , "South" , "Suaz" , "Tanta" , "Zagazig","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
$N_Univeisty=array("october" ,"ahram" ,"cairo" ,"shams" ,"azhar" ,"american" ,"arab" ,"aswan" ,"assiut" ,"alexandria" ,"banha" ,"beni" ,"british" ,"canadian" ,"damanhour" ,"damietta" ,"delta" ,"japan" ,"fayoum" ,"german" ,"helwan" ,"kafrelsheikh" ,"mansoura" ,"minia" ,"minufya" ,"miu" ,"must" ,"modern" ,"nile" ,"port" ,"sohag" ,"south" ,"stem" ,"suez" ,"canal" ,"tanta" ,"francaise" ,"sadat" ,"zewail" ,"zagazig");
$N_Faculty= array("other","agriculture ","arts ","commerce ","computer ","education ","dentistry ","languages ","law ","medicine ","nursing ","pharmacy ","engineering ","science ","specific","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");


$N_hear=array("hear1","hear2","soon...");

$file = fopen("mydata.csv","w");

 fwrite($file,"Type Of Applicant,"."No,"."Sex,"."Percentage,"."Specialization,"."No,"."Degree,"."No,"."HowDidYouHear,"."No,"."EnglishLvl,"."No,"."Age,"."No,"."ExpectGradDate,"."No,"."City,"."No,"."University,"."No,"."Faculty,"."No");
 //fwrite($file,"\r\n"."Non-Unique,"."100,"."Male,"."1,"."Medical,"."990,"."B.Sc,"."5000,"."A friend,"."20,"."Basic,"."2000,"."18,"."40,"."2020,"."40,"."Cairo,".$Cairo.",6th Of October University,"."20,"."Faculty Of Agriculture,"."4");
 //fwrite($file,"\r\n". "Unique,"."60,"."Female,"."43,"."Computer Science,"."15,"."B.A,"."300,"."An ad online,"."10,"."Intermediate,"."50,"."19,"."60,"."2019,"."24,"."Alexandria,".$Alexandria.",Ahram Canadian University,"."15,"."Faculty Of Arts,"."6" );
 //fwrite($file,"\r\n".",".","."          ,"."     ,"."Communication,"."10,"."M.Sc,"."15,"."MSP account on Twitter,"."1000,"."Advanced,"."30,"."20,"."55,"."2018,"."50,"."Mansoura,".$city[11].",Ain Shams University,"."30,"."Faculty Of Commerce,"."20 ");
 //fwrite($file,"\r\n".",".","."	  ,"."  	  ,"."Business-related,"."20,"."M.B.A,"."10,"."MSP Page on FB,"."40,".",".","."21,"."40,"."2017,"."60,"."Suez,".$city[17]."Al-Azhar University,"."40,"."Faculty Of Computer And Information Science,"."80 ");
 //fwrite($file,"\r\n".",".","."	  ,"." 	  ,"."Engineering,"."50,"."Ph.D,"."5,".",".",".",".","."22,"."80,"."2016,"."20,"."Other,".$othercity."Alexandria University,"."40,"."Faculty Of Engineering,"."40 ");
 //fwrite($file,"\r\n".",".","."	  ,"."		  ,"."Marketing,"."20,".",".",".",".",".",".","."23,"."40,"."2015,"."14,".",".","."American University In Cairo,"."40,"."other,"."40");
 //fwrite($file,"\r\n".",".","."	  ,"."		  ,"."Scientific,"."35,".",".",".",".",".",".","."24,"."30,".",".",".",".","."Arab Academy For Science And Technology And Maritime Transport(Cairo),"."20,".","." ");
 //fwrite($file,"\r\n".",".","."	  ,"."		,"." 			,"."   ,".",".",".",".",".",".",".",".",".",".",".",".","."Arab Academy For Science And Technology And Maritime Transport(Alex),"."15,".","." ");
 //fwrite($file,"\r\n".",".","."    ,"."		,"." 			,"."   ,".",".",".",".",".",".",".",".",".",".",".",".","."Other,"."80,".","."");

 $i=0;

for($i =0 ;$i<40; $i++ ) {
//fwrite($file,"\r\n".$N_typeOfApplicant[$i].","."20".",".$N_Sex[$i].","."50".",".$N_Specialization[$i].","."11".",".$N_Degree[$i].","."0".",".$N_Hear[$i].","."2".",".$N_English[$i].","."3".",".$N_age[$i].","."23".",".$IN_ExpectGradDate[$i].",".$gradtion[$i].",".$N_City[$i].",".$city[$i].",".$N_Univeisty[$i].",".$universities[$i].",".$N_Faculty[$i].",".$facluty[$i]);

fwrite($file,"\r\n".$N_typeOfApplicant[$i].","."".",".$N_Sex[$i].","."".",".$N_Specialization[$i].","."".",".$N_Degree[$i].","."".",".$N_Hear[$i].","."".",".$N_English[$i].","."3".",".$N_age[$i].","."".",".$IN_ExpectGradDate[$i].",".$gradtion[$i].",".$N_City[$i].",".$city[$i].",".$N_Univeisty[$i].",".$universities[$i].",".$N_Faculty[$i].",".$facluty[$i]);
}
fclose($file);


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
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<title>MSP 2016 Insights</title> 
		<script src="https://www.google.com/jsapi"></script> 
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
		<script src="jquery.csv-0.71.min.js"></script>
		<script src="script.js"></script>

	</head> 
<body>
	<h1>ResultsS:</h1> 
	<div id="PieChartTypeOfApplicant"></div>
	<div id="PieChartMaleFemale"></div>
	<div id="PieChartSpeci"></div>
	<div id="PieChartDegree"></div>
	<div id="PieChartHowDidYouHear"></div>
	<div id="ColumnChartEnglishLvl"></div>
	<div id="ColumnChartAge"></div>
	<div id="LineChartExpecGradDate"></div>
	<div id="BarChartCity"></div> 
	<div id="BarChartUni"></div>
	<div id="BarChartFaculty"></div> 
</body>
</html>
