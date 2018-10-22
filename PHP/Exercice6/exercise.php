<?php


function easterReverse($filePath){
    // I assume a file path as first parameter
    
    
    // get the full file content
    $content = file_get_contents($filePath);
    // divide the file content by 2, using..floor
    $secondPart = substr($content, floor(strlen($content) / 2));
    $firstPart = substr($content, 0, floor(strlen($secondPart) -1));
    
    // Open the file in writing mode
    $file = fopen($filePath,'r+');
    // move the cursor to the first content part length
    fseek($file,strlen($firstPart), SEEK_SET);
    // write the reversed second part into the file (strrev)    
    fwrite($file, strrev($secondPart), strlen($secondPart));
    
    // close the file
    fclose($file);
}
