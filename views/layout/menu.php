<link rel="stylesheet" type="text/css" href="css/menu.css">  

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
