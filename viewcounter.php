<?php
 

    $views = fopen("views.txt", "r");
    
    if($views)
    {
        $raw = fread($views,20); 
        $counter = (int) $raw; 
        fclose ($views);
        $counter++;
        echo " <center> View Counter: ". $counter . " </center> " ;
        $views = fopen("views.txt", "w" );
        fwrite($views,$counter) ;
        fclose ($views) ;
    }