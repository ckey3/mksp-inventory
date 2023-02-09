<?php
echo"Hi <b>Brooke</b>, you are late ";
echo"and you are too coen!!!<br> ";


print_r($_GET) . "<br>";
echo "Hello " . $_GET["name"] . "<p>";

foreach ($_GET as $id => $val){
    echo $id . "==>" . $val . "<br>";
}

<input type="button" value="Say Hi!" onclick="location='test.php'" />;


$f=fopen("test.json", "a");#open file
fwrite($f, "this is a file.");#write something
fclose($f);#close file
echo "Saved";

?>