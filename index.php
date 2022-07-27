<?php
    $myfile = fopen("names.txt", "w");
    
    $txt = "John\n";
    fwrite($myfile, $txt);
    $txt = "David\n";
    fwrite($myfile, $txt);
    
    fclose($myfile);
    
    /* Nộ dung file:
    John
    David
    */
?>
