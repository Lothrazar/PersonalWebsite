<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
    </head>
    <body>
        
    <?php
    $doc = new DOMDocument();
    $doc->loadHTMLFile("mainmenu.html");
    echo $doc->saveHTML();
    ?>



    <div id="index_footer">


    <?php

    $handle = fopen("views.txt", "r");
    if($handle)
    {
        $counter = (int) fread($handle,20);
        fclose ($handle);
        $counter++;
        echo" <center> View Counter: ". $counter . " </center> " ;
        $handle = fopen("views.txt", "w" );
        fwrite($handle,$counter) ;
        fclose ($handle) ;
    }
    ?>


    </div>

    </body>	
</html>