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


        GAMES!!
 
        <a href='games/pa/PixelAdventure.html'>Pixel Adventure</a>
        <a href='games/pf/PixelFortress.html'>Pixel Adventure</a>
    </body>	
</html>