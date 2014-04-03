<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/mainmenu.css"> 
    </head>
    <body>
        
        
        
        <div id='menu'>
        <ul id="nav">
           <li><a href='index.html' target="_blank"><span>Home</span></a></li>
           <li> <a href='#'  > <span>test</span></a></li> 
        </ul>
        </div>
        
        <div id="icons_ctr">
        <ul id="icons">
            <a href='https://twitter.com/lothrazar' target="_blank">   <img src="img/icons/twitter.png"  /></a>
            <a href='https://youtube.ca/lothrazar' target="_blank"><img src="img/icons/youtube.png"  /></a>
            <a href='https://github.com/PrinceOfAmber' target="_blank"><img src="img/icons/github.png"  /></a>
            <a href='https://ca.linkedin.com/pub/samson-bassett/25/653/49' target="_blank"><img src="img/icons/linkedin.png"  /></a>
            
        </ul>
        </div>

    
       

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