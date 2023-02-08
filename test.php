<?php
echo"Hi <b>Brooke</b>, you are late ";
echo"and you are too coen!!! ";

echo $_GET;
print_r($_GET);
echo "Hello " . $_GET["name"];

$f=fopen("test.json", "a");#open file
fwrite($f, "this is a file.");#write something
fclose($f);#close file
echo "Saved";

?>