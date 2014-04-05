<!DO<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head> 
         <?php include 'views/layout/head.php'; ?>
        
        
        <link rel="stylesheet" type="text/css" href="css/index.css"> 
          
    </head>
    <body>
        <?php
        $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);//$_GET['page'];
        if(!isset($page)){ $page='home';}
         ?>

        <div id="header"> 
             <?php include 'views/layout/mainmenu.php'; ?>
        </div>
        <div id="body">
            <div class="floating-menu">
                <ul  >
                       <li><a href='#1' ><span>1</span></a></li>
                       <li><a href='#2' ><span>2</span></a></li> 
                       <li><a href='#3' ><span>3</span></a></li> 
                    </ul>
            </div>
            
            <table id="layout"><tr><td>
                <section id="main">    
 
               
                 <?php
                $whitelist = array("games", "home");
                if(in_array($page, $whitelist)) 
                {
                  include('views/pages/'.$page.".php");
                }
                else
                { 
                    include("404.php"); 
                }

                ?>      
                </section>

          

            </td><td>

                
                right column IS ALL HERE and we would maybe align to top or float right or anything we need


            </td></tr></table>


           

        </div> 
        <div id="footer"> 
             <?php include 'views/layout/viewcounter.php'; ?> 
        </div> 
    </body>	
</html>