<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
    <title>
        Import Your File
    </title>
</head>

<body>
    <br />
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <font><b>Select Excel file to upload:</b></font>
        <br />
        <br />
        <br />
        <br />
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br />
        <br />
        <input class="uploadbtn" type="submit" value="Upload file" name="submit">
    </form>
    <div id="list">
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
    </div>
    <iframe src="visuals/visuals.html" width="1000" height="800"></iframe>
</body>
<br/>
<br/>
<br/>
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
    function doSomething() {

        $.get("print_excel.php");

        return false;
    }
</script>
<br/>
</html>