<!DO<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head> 
        <?php include 'views/layout/head.php'; ?>
           
    </head>
    <body>
        <?php
        $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);//$_GET['page'];
        if(!isset($page)){ $page='home';}
         
        //define menu items, keyed by the page id which identified the php file inside /views/pages/
          $titles = array();
          $titles['home'] = 'About';
          $titles['creating'] = 'Creating';
          $titles['minecraft'] = 'Modding';
          $titles['playing'] = 'Playing';
          $titles['collecting'] = 'Collecting';
 
         ?>

        <div id="header"> 
             <?php include 'views/layout/mainmenu.php'; ?>
        </div>
        <div id="body">
            <!-- 
            <div class="floating-menu">
                <ul  >
                       <li><a href='#1' ><span>1</span></a></li>
                       <li><a href='#2' ><span>2</span></a></li> 
                       <li><a href='#3' ><span>3</span></a></li> 
                    </ul>
            </div>
            -->
            <table id="layout"><tr><td id="main">
              
 
               
                 <?php
             
                if(isset($titles[$page])) 
                {
                  include('views/pages/'.$page.".php");
                }
                else
                { 
                    include("404.php"); 
                }

                ?>      
       

          

            </td><td id="right">
          
                 <?php
               // right column IS ALL HERE and we would maybe align to top or float right or anything we need
 ?>  
                &nbsp;
 
            </td></tr></table>


           

        </div> 
        <div id="footer"> 
             <?php include 'views/layout/viewcounter.php'; ?> 
        </div> 
    </body>	
</html>