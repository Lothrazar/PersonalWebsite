
        <link rel="stylesheet" type="text/css" href="css/pages/minecraft.css"> 
        
<div class="floating-menu">
    <ul  >
        <li><a href='#1' ><span>1</span></a></li>
        <li><a href='#2' ><span>2</span></a></li> 
        <li><a href='#3' ><span>3</span></a></li> 
    </ul>
</div>


<h2>

    I have a bunch of great little minecraft mods located in dropbox</h2>


<script>
    $(document).ready(function()
    {

        $('.mod_content').click(function()
        {
            if ($(this).height() > 150)
            {
                $(this).animate({height: '120px'});
            }
            else
            {
                $(this).animate({height: '300px'});
            }
        });
    });

</script>

<div class="clear"></div>


<?php
include('/data/minecraftmods.php');
$mods =  get_minecraftmods();
 
foreach ($mods as $mod):
    ?>
 
    <div  class="mod_ctr" >
        <div class="mod_logo" > 

            <p class="mod_name"> <?=$mod->title; ?></p>  
            <p class="mod_name"> <?=$mod->version; ?></p>        
            <p>
                <a href="<?=$mod->download?>">Download</a>
            </p>
        </div>

        <div class="mod_content" >
            
           <?=$mod->text; ?>
            
            
        </div>
 
    </div>

<div class="clear"></div>

<?php endforeach; ?>


 

 


<h3>Permissions</h3>

<p>
This mod (plugin, a patch to Minecraft source, henceforth "Mod" or "The Mod"), by the terms of 
http://www.minecraft.net/copyright.jsp"]http://www.minecraft.net/copyright.jsp is sole property of the Mod author 
(Sam Bassett aka Lothrazar, henceforth "Owner" or "The Owner"). By default it may only be distributed on minecraftforums.net.  
It may only be mirrored or reposted with advance written permission of the Owner. Electronic Mail is fine if you wait for a response.  
URL shorteners or other attempts to make money off The Owner's Mod are strictly forbidden without advance written permission.

However, you are free to include this mod as-is in a ModPack as long as you credit the Owner.
</p>

 