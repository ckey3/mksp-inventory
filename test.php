<?php
echo"Hi <b>Brooke</b>, you are late ";
echo"and you are too coen!!! ";

echo $_GET;
print_r($_GET);

$f=fopen("test.json", "a");
fwrite($f, "this is a file.");
?>