<link rel="stylesheet" type="text/css" href="css/menu.css">  

<div>
    
<div style="float:left;">
<img class="banner" src="img/Lothrazar.png" />
</div>

<div style="float:right;">
  <?php include 'views/layout/icons.php'; ?>
</div>

<div style="clear:both"></div>
 
<nav id='menu'>
    
    <ul id="nav"> 
        <?php 
            //define menu items, keyed by the page id which identified the php file inside /views/pages/
            
            $titles = array();
            $titles['articles'] = 'Blog';
            $titles['creating'] = 'My Games';
            $titles['mods'] = 'My Mods';  
            $titles['programming'] = 'My Projects'; 
            
            //  $titles['playing'] = 'Playing';
            //  $titles['collecting'] = 'Collecting'; 
            //     $titles['blog'] = 'Blog';
        
            foreach($titles as $pageid => $title):   //array defined in index.php
                $iscurrent = ($pageid == $page) ? 'current' : ''; //apply css to the current tab
        ?>
         
        <li><a class="<?=$iscurrent ?>" href='index.php?page=<?=$pageid?>' ><span><?=$title?></span></a></li>

       <?php endforeach; ?>
        
    </ul>
</nav>
</div>


 