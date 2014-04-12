<link rel="stylesheet" type="text/css" href="css/pages/mods.css"> 
<script type="text/javascript" src="js/pages/mods.js"></script>


<div class="floating-menu">
    <ul  >
        <li><a href='#top' ><span>Top</span></a></li> 
        <li><a href='#mc172' ><span>Minecraft 1.7.2</span></a></li>
        <li><a href='#perm' ><span>Permissions</span></a></li> 
    </ul>
</div>

<br/>
<a name="top"></a> 

<section>   
    <h2>Minecraft Mods</h2>
    <h2>Currently I have some fun mods in Minecraft Forge that I am using in my single player world</h2>

    <p>I still have one older mod for versions 1.4 and 1.5 that I have not updated.  
        For now, I will just <a href="http://www.minecraftforum.net/topic/1562770-">Link to it here</a>.</p>
    
    <p>The mods themselves are done and working, I have been using them in my world, but the writeups and descriptions are still a work in progress.  I have to go 
    and take screenshots and list out all the features and config files and all the details of each.  I am just terribly lazy right now...</p>
</section>

<br/>

<div class="clear"></div>




<a name="mc172"></a> 
<?php
//fetch the data. 
include('data/minecraftmods.php');
$mods =  get_minecraftmods();
 
foreach ($mods as $mod):
    ?>
 
    <div  class="mod_ctr" >
        <div class="mod_logo" > 
            <section>
                
            <p class="mod_name"> <?=$mod->title; ?></p>  
              
            <p class="mod_link">
                <a href="<?=$mod->download?>">Download Latest (<?=$mod->version; ?>)</a>
            </p>
            
            </section> 

            <div class="clear"></div>

            <div class="mod_content" >
                <section>

               <?=$mod->text; ?>

                <?php if($mod->imguralbum ): ?>

                <iframe class="imgur-album" width="100%" height="550" frameborder="0" src="http://imgur.com/a/<?=$mod->imguralbum; ?>/embed"></iframe>
                
                <?php endif;?>
                </section> 
            </div>
            
            
        </div>

        
 
    </div>

<div class="clear"></div>

<?php endforeach; ?>


 

 

<a name="perm"></a> 
<h3>Permissions</h3>

<p>
This mod (plugin, a patch to Minecraft source, henceforth "Mod" or "The Mod"), by the terms of 
<a href="http://www.minecraft.net/copyright.jsp">http://www.minecraft.net/copyright.jsp</a> is sole property of the Mod author 
(Sam Bassett aka Lothrazar, henceforth "Owner" or "The Owner"). By default it may only be distributed on minecraftforums.net.  
It may only be mirrored or reposted with advance written permission of the Owner. Electronic Mail is fine if you wait for a response.  
URL shorteners or other attempts to make money off The Owner's Mod are strictly forbidden without advance written permission.

However, you are free to include this mod as-is in a ModPack as long as you credit the Owner.
</p>

 