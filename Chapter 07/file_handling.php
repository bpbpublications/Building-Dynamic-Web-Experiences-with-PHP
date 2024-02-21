<?php    
$filename = "c:\\myfile.txt";    
$handle = fopen($filename, "r");//open file in read mode    
  
$contents = fread($handle, filesize($filename));//read file    
  
echo $contents;//printing data of file  
fclose($handle);//close file    
?>    