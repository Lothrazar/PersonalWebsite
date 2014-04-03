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
 
        <a href='games/pf/PixelFortress.html'>Pixel Fortress</a>
        <a href='games/pa/PixelAdventure.html'>Pixel Fortress 2</a>
    </body>	
</html>