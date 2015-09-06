<?php
session_start();
?>


<html>	
<head>
<title>Form Processing</title>
</head>
<body>
<?php
//if went to process.php 3ala tool, go back to login page

if( !(isset($_POST['username']))){
header("Location: index.html");
	exit;
}

$username = $_POST['username'] ;
$password = $_POST['password'];



if(($username ==="noha") && ($password==="msp@2016")){

//echo "inn";
	//set session to 11 speical key 
$_SESSION['inside']=11;
header("Location: main.php");
exit;

}else{
	//set session to 0 if wrong pass
	$_SESSION['inside']=0;
echo "Wrong Username or Password test";
}

?>
</body>
</html>	
