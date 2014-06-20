<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head> 
        <?php include 'views/layout/head.php';  ?> 
    </head>
    <body>
        <?php
        
        $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS); 
        
        if( !isset($page) ){ $page = 'articles';}  
        
        ?>

        <div id="header"> 
              
            <?php include 'views/layout/menu.php'; ?>
         
        </div>
        <div id="body"> 
            <table id="layout"><tr><td id="main">
               
                 <?php
             
                if(isset($titles[$page]) || $page == 'admin') 
                {
                  include('views/pages/'.$page.".php");
                }
                else
                { 
                    include("404.php"); 
                }

                ?>      
        
            </td><td id="right"  >
          
            </td></tr></table> 
        </div> 
       
    </body>	
</html>