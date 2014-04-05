
<link rel="stylesheet" type="text/css" href="css/mainmenu.css">  
<?php
 
//and all other non selected tabs do not get the styling
$current = array();
   $current['home'] = '';
   $current['games'] = '';
   $current['playing'] = '';
   $current['collecting'] = '';
   
   
   $current[$page] = 'current';//apply css to the current tab

   ?>
<div>
<nav id='menu'>
    <ul id="nav">
       <li><a class="<?=$current['home'] ?>" href='index.php' ><span>Home</span></a></li>
       <li><a class="<?=$current['games'] ?>" href='index.php?page=games'  > <span>Creating</span></a></li> 
       <li><a class="<?=$current['minecraft'] ?>" href='index.php?page=minecraft'  > <span>Modding</span></a></li> 
       <li><a class="<?=$current['playing'] ?>" href='index.php?page=playing'  > <span>Playing</span></a></li> 
       <li><a class="<?=$current['collecting'] ?>" href='index.php?page=collecting'  > <span>Collecting</span></a></li> 
    </ul>
</nav>
</div>
<div id="icons_ctr">
    <nav id="icons">
        <a href='https://twitter.com/lothrazar' target="_blank">   <img src="img/icons/twitter.png"  /></a>
        <a href='https://youtube.ca/lothrazar' target="_blank"><img src="img/icons/youtube.png"  /></a>
        <a href='https://github.com/PrinceOfAmber' target="_blank"><img src="img/icons/github.png"  /></a>
        <a href='https://ca.linkedin.com/pub/samson-bassett/25/653/49' target="_blank"><img src="img/icons/linkedin.png"  /></a>

    </nav>
</div> 