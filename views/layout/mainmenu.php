<link rel="stylesheet" type="text/css" href="css/mainmenu.css">  

<div>
<nav id='menu'>
    <ul id="nav">
        
        <?php foreach($titles as $pageid => $title):   //array defined in index.php
            $iscurrent = ($pageid == $page) ? 'current' : ''; //apply css to the current tab
        ?>
         
            <li><a class="<?=$iscurrent ?>" href='index.php?page=<?=$pageid?>' ><span><?=$title?></span></a></li>
         
       <?php endforeach; ?>
        
    </ul>
</nav>
</div>
<div id="icons_ctr">
    <nav id="icons">
         
        <a href='https://twitter.com/lothrazar' target="_blank">   <img src="img/icons/twitter.png"  /></a>
        <a href='https://youtube.ca/lothrazar' target="_blank"><img src="img/icons/youtube.png"  /></a>
        <a href='https://github.com/PrinceOfAmber' target="_blank"><img src="img/icons/github.png"  /></a>
        <a href='https://ca.linkedin.com/pub/samson-bassett/25/653/49' target="_blank"><img src="img/icons/linkedin.png"  /></a>
        <a href='http://steamcommunity.com/id/lothrazar/' target="_blank"><img src="img/icons/steam.png"  /></a>
        <a href='http://us.battle.net/wow/en/character/maiev/Samitch/simple' target="_blank"><img src="img/icons/wow.png"  /></a>
  
    </nav>
</div> 