<?php
error_reporting(0);
if(isset($_POST['submit'])){
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  $namafile=$_FILES["file"]["name"];
  move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  
@include_once('phpMyImporter.php');

$dbhost = "mysql.idhostinger.com";
$dbuser = "u654836087_umum";
$dbpass = "L5u4Zuu6eZ";
$dbname = "u654836087_umum";

$filename      = "/home/u654836087/public_html/ferry/upload/".$namafile;
//$filename  = $path."dump.sql"; // Filename of dump, default: dump.sql
$compress  = false; // Import gz compressed file, default: false

$connection = @mysql_connect($dbhost,$dbuser,$dbpass);
$dump = new phpMyImporter($dbname,$connection,$filename,$compress);

$dump->utf8 = true; // Uses UTF8 connection with MySQL server, default: true

$dump->doImport();
}
}
?>
<form method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>