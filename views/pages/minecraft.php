
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
        <div class="mod_logo" style="float:left; background-color:#CF6; width:15%; min-height:120px; border-top-left-radius:5px; border-bottom-left-radius:5px; margin-bottom:2%;"> 

            <div class="mod_name"> <?=$mod->title; ?></div>  
            <div class="mod_name"> <?=$mod->version; ?></div>        

        </div>

        <div class="mod_content" style="float:left; background-color:#CCD9F7; width:60%; min-height:120px; height:120px; overflow:hidden; border-top-right-radius:5px; border-bottom-right-radius:5px; margin-bottom:2%;"> 
            <?=$mod->text; ?>
        </div>
 
    </div>

<div class="clear"></div>

<?php endforeach; ?>


 
 