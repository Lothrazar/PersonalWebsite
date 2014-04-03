<!DO<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/index.css"> 
    </head>
    <body>
        
    <?php
    $doc = new DOMDocument();
    $doc->loadHTMLFile("mainmenu.html");
    echo $doc->saveHTML();
    ?>


        
        <div id="main">    

            <?php

        $intro = fopen("txt/intro.txt", "r");
        if($intro)
        {
            echo fread($intro,7777);
            fclose ($intro);  
        }
        ?>
            
            
        
        
        </div>
        
        
        
        
        
        
        

    <div id="index_footer">


    <?php

    $views = fopen("views.txt", "r");
    if($views)
    {
        $counter = (int) fread($views,20);
        fclose ($views);
        $counter++;
        echo" <center> View Counter: ". $counter . " </center> " ;
        $handle = fopen("views.txt", "w" );
        fwrite($views,$counter) ;
        fclose ($views) ;
    }
    ?>


    </div>

    </body>	
</html>