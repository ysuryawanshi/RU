<?php
require "vendor/autoload.php";
use FileReader\ReadMyFile;
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadStr('<div class="all"><p>Hey bro, <a href="google.com">click here</a><br /> :)</p></div>');
print_r($dom);

?>