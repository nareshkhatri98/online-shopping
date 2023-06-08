<?php
$filename= "test.txt";
$file = fopen($filename, 'r');

//read
/*
while(!feof($file)){
  $data = fgets($file, filesize($filename));
  echo $data."<br>";
}
fclose($file);
?>
*/

// read 2 
$data = fread($file, filesize($filename));
echo $data;
fclose($file);

?>