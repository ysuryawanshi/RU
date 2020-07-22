<?php
require "vendor/autoload.php";
use FileReader\ReadMyFile;

$objReadMyFile = new ReadMyFile();

//echo $objReadMyFile->ReadFileContent();
echo $objReadMyFile->ReadHtmlFileContent('upload/test.html');

?>