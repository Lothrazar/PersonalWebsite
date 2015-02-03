<?php
 
function get_viewcount_incremented()
{
    $filepath = 'views.txt';

    $views = @fopen($filepath, "r");
    
    if(!$views)
    {
        $views = fopen($filepath, "a");
        fwrite($views,'0');        
        fclose ($views); 
        
        chmod($filepath,0777);
        //reopen for reading
        
        $views = fopen($filepath, "r");
    }
    
    if($views)
    {
        $raw = fread($views,20); 
        $counter = (int) $raw; 
        fclose ($views);
        $counter++;
        
        $views = fopen($filepath, "w" );
        fwrite($views,$counter) ;
        fclose ($views) ;
    }
    
    
    
    return $counter;
}