<?php 
$filename= "./write.txt";
$file = fopen($filename, 'w');

 $data = fwrite($file, "this is demo");
 fclose($file);

 // read
 $file= fopen($filename,'r');
 $data = fread($file, filesize($filename));
 echo $data;
 fclose($file);

?>