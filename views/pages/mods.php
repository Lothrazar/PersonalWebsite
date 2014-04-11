<link rel="stylesheet" type="text/css" href="css/pages/mods.css"> 

<div class="floating-menu">
    <ul  >
        <li><a href='#top' ><span>Top</span></a></li> 
        <li><a href='#mc172' ><span>Minecraft 1.7.2</span></a></li>
        <li><a href='#perm' ><span>Permissions</span></a></li> 
    </ul>
</div>


<a name="top"></a> 
<section>   
    I have a bunch of great little minecraft mods located in dropbox

</section>

<br/>

<script>
    
    $(document).ready(function()
    { 
        $('.mod_content').click(function()
        {
            console.log($(this).height());
            if ($(this).height() > 80)
            {
                $(this).animate({height: '80px'});
            }
            else
            {
                $(this).animate({height: '100%'});
            }
        });
    });

</script>

<div class="clear"></div>




<a name="mc172"></a> 
<?php
//fetch the data. 
include('/data/minecraftmods.php');
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

 