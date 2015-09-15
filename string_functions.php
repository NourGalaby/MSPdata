<html>
<head>
	<title>Collecting informations</title>
</head>
<body>
	<?php
	// for Universites
	    $data = array( "cairo" , "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "ainshams", "helwan", "asuit", "alex", "mansoura" , "zagazig");
		$october = 0; $ahram = 0; $cairo = 0; $shams = 0; $azhar = 0; $american = 0; $arab = 0; $aswan = 0; $assiut = 0; $alexandria = 0; $banha = 0; $beni = 0; $british = 0; $canadian = 0;
		$damanhour = 0; $damietta = 0; $delta = 0; $japan = 0; $fayoum = 0; $german = 0; $helwan = 0; $kafrelsheikh = 0; $mansoura =0; $minia = 0; $minufya = 0; $miu = 0; $must = 0;
		$modern = 0; $nile = 0; $port = 0; $sohag = 0; $south = 0; $stem = 0; $suez = 0; $canal = 0; $tanta = 0; $française = 0; $sadat = 0; $zewail = 0; $zagazig = 0;
		$universities = array($october ,$ahram ,$cairo ,$shams ,$azhar ,$american ,$arab ,$aswan ,$assiut ,$alexandria ,$banha ,$beni ,$british ,$canadian ,$damanhour ,$damietta ,$delta ,$japan ,$fayoum ,$german ,$helwan ,$kafrelsheikh ,$mansoura ,$minia ,$minufya ,$miu ,$must ,$modern ,$nile ,$port ,$sohag ,$south ,$stem ,$suez ,$canal ,$tanta ,$française ,$sadat ,$zewail ,$zagazig);
		for ($i=0; ; $i++) { 
			if (empty($data[$i])) {
				break;
			}
			else{
				strtolower($data[$i]);
				trim($data[$i]);
				if(strstr($data[$i], "october")){
					$universities[0]++;
				}
				elseif (strstr($data[$i], "ahram")) {
					$universities[1]++;
				}
				elseif (strstr($data[$i], "cairo")) {
					$universities[2]++;
				}
				elseif (strstr($data[$i], "shams")) {
					$universities[3]++;
				}
				elseif (strstr($data[$i], "american")) {
					$universities[4]++;
				}
				elseif (strstr($data[$i], "arab")) {
					$universities[5]++;
				}
				elseif (strstr($data[$i], "aswan")) {
					$universities[6]++;
				}
				elseif (strstr($data[$i], "assiut")) {
					$universities[7]++;
				}
				elseif (strstr($data[$i], "alexandria")) {
					$universities[8]++;
				}
				elseif (strstr($data[$i], "banha")) {
					$universities[9]++;
				}
				elseif (strstr($data[$i], "beni")) {
					$universities[10]++;
				}
				elseif (strstr($data[$i], "british")) {
					$universities[11]++;
				}
				elseif (strstr($data[$i], "canadian")) {
					$universities[12]++;
				}
				elseif (strstr($data[$i], "damanhour")) {
					$universities[13]++;
				}
				elseif (strstr($data[$i], "damietta")) {
					$universities[14]++;
				}
				elseif (strstr($data[$i], "delta")) {
					$universities[15]++;
				}
				elseif (strstr($data[$i], "japan")) {
					$universities[16]++;
				}
				elseif (strstr($data[$i], "fayoum")) {
					$universities[17]++;
				}
				elseif (strstr($data[$i], "german")) {
					$universities[18]++;
				}
				elseif (strstr($data[$i], "helwan")) {
					$universities[19]++;
				}
				elseif (strstr($data[$i], "kafrelsheikh")) {
					$universities[20]++;
				}
				elseif (strstr($data[$i], "mansoura")) {
					$universities[21]++;
				}
				elseif (strstr($data[$i], "minia")) {
					$universities[22]++;
				}
				elseif (strstr($data[$i], "minufya")) {
					$universities[23]++;
				}
				elseif (strstr($data[$i], "mansoura")) {
					$universities[24]++;
				}
				elseif (strstr($data[$i], "miu")) {
					$universities[25]++;
				}
				elseif (strstr($data[$i], "must")) {
					$universities[26]++;
				}
				elseif (strstr($data[$i], "modern")) {
					$universities[27]++;
				}
				elseif (strstr($data[$i], "nile")) {
					$universities[28]++;
				}
				elseif (strstr($data[$i], "port")) {
					$universities[29]++;
				}
				elseif (strstr($data[$i], "sohag")) {
					$universities[30]++;
				}
				elseif (strstr($data[$i], "south")) {
					$universities[31]++;
				}
				elseif (strstr($data[$i], "stem")) {
					$universities[32]++;
				}
				elseif (strstr($data[$i], "suez")) {
					$universities[33]++;
				}
				elseif (strstr($data[$i], "canal")) {
					$universities[34]++;
				}
				elseif (strstr($data[$i], "tanta")) {
					$universities[35]++;
				}
				elseif (strstr($data[$i], "française")) {
					$universities[36]++;
				}
				elseif (strstr($data[$i], "sadat")) {
					$universities[37]++;
				}
				elseif (strstr($data[$i], "zewail")) {
					$universities[38]++;
				}
				elseif (strstr($data[$i], "zagazig")) {
					$universities[39]++;
				}

				else {
					
				}
			}
		}

		?>
		<?php
		// for Facluty
		$data = array( "arts","arts","engineering" );
	    $agriculture = 0 ;$arts = 0 ;$commerce = 0 ;$computer = 0 ;$education = 0 ;$dentistry = 0 ;$languages = 0 ;$law = 0 ;$medicine = 0 ;$nursing = 0 ;$pharmacy = 0 ;$engineering = 0 ;$science = 0 ;$specific = 0 ;
		$facluty = array($agriculture ,$arts ,$commerce ,$computer ,$education ,$dentistry ,$languages ,$law ,$medicine ,$nursing ,$pharmacy ,$engineering ,$science ,$specific);
		for ($i=0; ; $i++) { 
			if (empty($data[$i])) {
				break;
			}
			else{
				strtolower($data[$i]);
				trim($data[$i]);
				if(strstr($data[$i], "cairo")){
					$facluty[0]++;
				}
				elseif (strstr($data[$i], "agriculture")) {
					$facluty[1]++;
				}
				elseif (strstr($data[$i], "arts")) {
					$facluty[2]++;
				}
				elseif (strstr($data[$i], "commerce")) {
					$$facluty[3]++;
				}
				elseif (strstr($data[$i], "computer")) {
					$facluty[4]++;
				}
				elseif (strstr($data[$i], "education")) {
					$facluty[5]++;
				}
				elseif (strstr($data[$i], "languages")) {
					$facluty[6]++;
				}
				elseif (strstr($data[$i], "law")) {
					$facluty[7]++;
				}
				elseif (strstr($data[$i], "medicine")) {
					$facluty[8]++;
				}
				elseif (strstr($data[$i], "nursing")) {
					$facluty[9]++;
				}
				elseif (strstr($data[$i], "pharmacy")) {
					$facluty[10]++;
				}
				elseif (strstr($data[$i], "engineering")) {
					$facluty[11]++;
				}
				elseif (strstr($data[$i], "science")) {
					$facluty[12]++;
				}
				elseif (strstr($data[$i], "specific")) {
					$facluty[13]++;
				}
				else {
					
				}
			}
		}

		?>
		<?php
		// for City
	    $data = array( "cairo" , "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "cairo", "ainshams", "helwan", "asuit", "alex", "mansoura" ,"zagazig" , "ismailia" );
		$Alexandria = 0; $Assiut = 0; $Banha = 0; $Beni = 0; $Cairo = 0; $Damanhour =0;$Damietta = 0; $Fayoum = 0; $Giza = 0; $Ismailia = 0; $Kafrelsheikh = 0; $Mansoura =0;$Minia = 0; $Minufya = 0; $Port = 0; $Sohag = 0; $South = 0; $Suaz =0; $Tanta = 0 ;$Zagazig = 0;
		$city = array($Alexandria , $Assiut , $Banha , $Beni , $Cairo , $Damanhour , $Damietta , $Fayoum , $Giza , $Ismailia , $Kafrelsheikh , $Mansoura , $Minia , $Minufya , $Port , $Sohag , $South , $Suaz , $Tanta , $Zagazig);
		for ($i=0; ; $i++) { 
			if (empty($data[$i])) {
				break;
			}
			else{
				strtolower($data[$i]);
				trim($data[$i]);
				if(strstr($data[$i], "alexandria")){
					$city[0]++;
				}
				elseif (strstr($data[$i], "assiut")) {
					$city[1]++;
				}
				elseif (strstr($data[$i], "banha")) {
					$city[2]++;
				}
				elseif (strstr($data[$i], "beni")) {
					$city[3]++;
				}
				elseif (strstr($data[$i], "cairo")) {
					$city[4]++;
				}
				elseif (strstr($data[$i], "damanhour")) {
					$city[5]++;
				}
				elseif (strstr($data[$i], "damietta")) {
					$city[6]++;
				}
				elseif (strstr($data[$i], "fayoum")) {
					$city[7]++;
				}
				elseif (strstr($data[$i], "giza")) {
					$city[8]++;
				}
				elseif (strstr($data[$i], "ismailia")) {
					$city[9]++;
				}
				elseif (strstr($data[$i], "kafrelsheikh")) {
					$city[10]++;
				}
				elseif (strstr($data[$i], "mansoura")) {
					$city[11]++;
				}
				elseif (strstr($data[$i], "minia")) {
					$city[12]++;
				}
				elseif (strstr($data[$i], "minufya")) {
					$city[13]++;
				}
				elseif (strstr($data[$i], "port")) {
					$city[14]++;
				}
				elseif (strstr($data[$i], "sohag")) {
					$city[15]++;
				}
				elseif (strstr($data[$i], "south")) {
					$city[16]++;
				}
				elseif (strstr($data[$i], "suez")) {
					$city[17]++;
				}
				elseif (strstr($data[$i], "tanta")) {
					$city[18]++;
				}
				elseif (strstr($data[$i], "zagazig")) {
					$city[19]++;
				}
				else {
					
				}
			}
		}

		?>
		<?php
		// for Expected gradtion year
	    $data = array( "2015" , "2015", "2016", "2016", "2017", "2018", "2019", "2020", "2020", "2020", "2020");
		$_2015 = 0; $_2016 = 0; $_2017 = 0; $_2018 = 0; $_2019 = 0; $_2020 =0;
		$gradtion = array($_2015, $_2016, $_2017, $_2018, $_2019, $_2020);
		for ($i=0; ; $i++) { 
			if (empty($data[$i])) {
				break;
			}
			else{
				strtolower($data[$i]);
				trim($data[$i]);
				if(strstr($data[$i], "2015")){
					$gradtion[0]++;
				}
				elseif (strstr($data[$i], "2016")) {
					$gradtion[1]++;
				}
				elseif (strstr($data[$i], "2017")) {
					$gradtion[2]++;
				}
				elseif (strstr($data[$i], "2018")) {
					$gradtion[3]++;
				}
				elseif (strstr($data[$i], "2019")) {
					$gradtion[4]++;
				}
				elseif (strstr($data[$i], "2020")) {
					$gradtion[5]++;
				}
				else {
					
				}
			}
		}

		?>
		
		<?php
		// for English level
	    $data = array( "basic" , "basic", "basic", "basic", "intermediate", "intermediate", "intermediate", "advanced", "advanced", "advanced" );
		$basic = 0; $intermediate = 0; $advanced = 0;
		$englishlevel = array($basic, $intermediate, $advanced);
		for ($i=0; ; $i++) { 
			if (empty($data[$i])) {
				break;
			}
			else{
				strtolower($data[$i]);
				trim($data[$i]);
				if(strstr($data[$i], "basic")){
					$englishlevel[0]++;
				}
				elseif (strstr($data[$i], "intermediate")) {
					$englishlevel[1]++;
				}
				elseif (strstr($data[$i], "advanced")) {
					$englishlevel[2]++;
				}
				else {
					
				}
			}
		}

		?>

	<pre>Universites <?php print_r($universities)	?></pre>
	<pre>Facluty <?php print_r($facluty)	?></pre>
	<pre>City <?php print_r($city)	?></pre>
	<pre>English level <?php print_r($englishlevel)	?></pre>
	<pre>Expected graduation year <?php print_r($gradtion)	?></pre>
</body>
</html>