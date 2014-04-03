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

    </body>
</html>
