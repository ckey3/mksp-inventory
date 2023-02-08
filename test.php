<?php
echo"Hi <b>Brooke</b>, you are late ";
echo"and you are too coen!!!<br> ";

echo $_GET . "<br>";
print_r($_GET);
echo "Hello " . $_GET["name"];

foreach ($_GET as $id => $val){
    echo $id . "==>" . $val . "<br>";
}

$f=fopen("test.json", "a");#open file
fwrite($f, "this is a file.");#write something
fclose($f);#close file
echo "Saved";

?>