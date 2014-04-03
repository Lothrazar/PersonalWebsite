<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
    </head>
    <body>
        <div id="icons_ctr">
        <div id="icons">
            <a href='https://twitter.com/lothrazar' target="_blank">   <img src="img/icons/twitter.png"  /></a>
            <a href='https://youtube.ca/lothrazar' target="_blank"><img src="img/icons/youtube.png"  /></a>
            <a href='https://github.com/PrinceOfAmber' target="_blank"><img src="img/icons/github.png"  /></a>
            <a href='https://ca.linkedin.com/pub/samson-bassett/25/653/49' target="_blank"><img src="img/icons/linkedin.png"  /></a>
            
        </div>
        </div>
        
        
        <div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.html' target="_blank"><span>Home</span></a></li>
           <li> <a href='https://twitter.com/lothrazar' target="_blank"> <span>Twitter</span></a></li>
           <li><a href='https://github.com/PrinceOfAmber' target="_blank"><span>Github Source Code</span></a></li>
           <li><a href='http://ca.linkedin.com/pub/samson-bassett/25/653/49' target="_blank"><span>Linked In</span></a></li>
           <li class='last'><a href='http://youtube.ca/lothrazar' target="_blank"><span>Youtube</span></a></li>
        </ul>
        </div>
        
        

        <h1>Hello World!  My name is Lothrazar, aka Sam Bassett.  My website is under construction </h1>


        <h2><?=  " For now, find me at the following places"?></h2>




      
        
       

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