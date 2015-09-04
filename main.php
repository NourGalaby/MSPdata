<!DOCTYPE html>
<html>
<head>
<title>
Import Your File
</title>
</head>
<body bgcolor="#33ccff">
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
<CENTER>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <font ><b>Select Excel file to upload:</b></font><br /><br /><br /><br />
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" name="fileToUpload" id="fileToUpload">
    <br />
    <br />
    <input type="submit" value="Upload file" name="submit">
</form>
</CENTER>
</body>
<br />
    <br />
    <br />
    <?php  
    $dir ='uploads';

    if($handle = opendir($dir.'/'))
    {
       echo 'files uploaded: '.'<br>' ;

while ($file = readdir($handle)){
	if($file!='.' && $file!='..')
echo '<a href="'.$dir.'/'.$file.'">'.$file.'<br>';

}
     }
    ?>
    <br />
</html> 