<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//TODO: this in seperate file or maybe database
class MinecraftMod {

    public $title = '';
    public $download = '';
    public $text = '';
    public $version = '';
    public $mcversion = '';
    public $imguralbum = '';
 
}
//CMD SHIFT R
  function get_minecraftmods()
  {
      

$ec = new MinecraftMod();
$ec->title = 'Ender Chest Command';
$ec->version = '1.7.2-1.0';
$ec->download = 'http://www.mediafire.com/download/85udbr3jj81f87x/enderchestcommand-1.7.2-1.0.jar';
$ec->text = '<p>Adds a new command: /enderchest</p>  <p>Type /enderchest to open your ender chest inventory anywhere anytime.  </p>
        <p>You do not have to be near one, you do not even have to build one. </p>
        <p>This can be seen as overpowered in the early game.  But even then, it is just an extension of your inventory </p>
        <p>In the late game, once my world gets old, I find that I always am carrying way to much stuff between tools and building and fighting 
        So this seemed like the most logical way to extend my inventory.  
        It means I do not have to dump ender chests everywhere, or run around looking for one all the time.</p>
        <p>This mod does not add any items or blocks, so I have no screenshots.</p>'
        
        ;
 

$msort = new MinecraftMod();
$msort->title = 'Magic Sorting (Quick Stack)';
$msort->download = 'http://www.mediafire.com/download/t9335jey17e8mrr/magicsort-1.7.2-1.0.jar';
$msort->imguralbum = '';
$msort->version = '1.7.2-1.0';
$msort->text = 'My most useful mod.  Simply punch a chest with an empty hand, and it smartly sorts all your items into the chest.  It works 
    in a very similar way to Quick Stack in Terraria
    <br/>
      It will look in the chest for stacks of items, and tries to fill them from your inventory.  For example, if the chest has one cobblestone, and your inventory 
      has ten cobblestone, it will deposit all ten.  But if the chest has 50, and your inventory has 20, it will only deposit 14 into the chest to make 
      the chest have a full stack of 64.  It will not put any item into empty spots in the chest.
<br/>
It will not deposit anything from your hotbar.  Also, it will only use the half of the double chest that actually was hit, so you may need to hit both sides.
<br/>
By default it sends out a chat message to you whenever something is deposited; you can turn this off in the config file.

';

$sm = new MinecraftMod();
$sm->title = 'Stack Max 64';
$sm->download = 'http://www.mediafire.com/download/qmy296g2qz6eazq/stackmax-1.7.2-1.0.jar';
$sm->imguralbum = 'Xa1lK';
$sm->version = '1.7.2-1.0';
$sm->text = 'Inspired by the classic mod by Ritsugami.
    This is a small mod that does exactgily as the title implies: 
<br/>
It increases the stack size of every item in the game up to 64; except potions.
There is a config file option to up the potion stack size to any value, but it is turned off by default.

<br/>
I do not like using this option, but I put it in for completeness.  You can get stacked potions with commands and editors, so it made sense.  No other items show up in the config file.
<br/>
Almost all automatic redstone brewing machines depend on potions not being stackable.
<br/>';
 
$rccm = new MinecraftMod();
$rccm->title = 'Craftable Command Blocks';
$rccm->download = 'http://www.mediafire.com/download/g4g45p83v5ew6t7/craftablecommand-1.7.2-1.0.jar';
$rccm->version = '1.7.2-1.0';
$rccm->imguralbum='7r1Nu';
$rccm->text = '
These 7 command blocks do not let anyone open the command window to edit the command.  
<br/>
The command of each one is completely locked and will never be changed.
<br/>
All crafted with a similar recipe, and need silk touch to pick up.
<ul>
<li> /toggledownfall </li>

<li> /tp : all players to world spawn </li>

<li> gamerules : it alternates them on and off </li>
    <ul>
    <li>  doFireTick </li>

    <li>   doDaylightCycle</li>

    <li>  keepInventory</li>

    <li>  mobGriefing</li>

    <li>  naturalRegeneration</li>
    </ul>
</ul>
';


$rd = new MinecraftMod();
$rd->title = 'Rule Detectors';
$rd->version = '1.7.2-1.0';
$rd->imguralbum='XBurD';
$rd->download = 'http://www.mediafire.com/download/vhtnxdzlauarq12/ruledetectors-1.7.2-1.0.jar';
$rd->text = '<p>Each of these 5 blocks emits a redstone signal depending on if their associated
    game rule is on or off (on emits power, off does not).&nbsp; Useful for having a light panel 
    that shows rule status.<br></p><ul><li>&nbsp;doFireTick</li><li>&nbsp;doDaylightCycle</li><li>&nbsp;keepInventory</li>
    <li>&nbsp;mobGriefing</li><li>&nbsp;naturalRegeneration<br></li></ul><p>Unfortunately, when a game rule is toggled, 
    the power does not change right away, you have to update the block (sometimes breaking it) for it to change state.<br><br></p>';

$ma = new MinecraftMod();
$ma->title = 'Magic Apples';
$ma->version = '1.7.2-1.0';
$ma->download = 'http://www.mediafire.com/download/ybrnyx1by5hl6re/magicapples-1.7.2-1.0.jar';
$ma->imguralbum='Qqh0q';
$ma->text = '<p>These 4 apples are similar to golden apples - temporary buffs in exchange for eating rare minerals.&nbsp; 
    I use these quite often, since they take the place of potions that do not exist such as Haste II and Health Boost.&nbsp;
    So if you want that Haste II effect without setting up a beacon, this is what you need.&nbsp; All except the chocolate one can 
    be smelted back into ores in a furnace, if you make too many.&nbsp; <br><br><strong>Diamond</strong><strong> Apple</strong><br>
    </p><ul><li>Regen II (0:20)</li><li>Health Boost 4 (5:00) - ten extra hearts<br></li><li>Resistance (5:00)</li><li>Fire Resistance (5:00
    )<br></li></ul><p><strong>Emerald Apple</strong><br></p><ul><li>Blindness (0:10)</li><li>Haste II (4:00)</li><li>Weakness II (4:00)</li>
    <li>Speed (4:00)<br></li></ul><p><strong>Lapis Apple</strong><br></p><ul><li>Hunger (0:05)</li><li>Nausea (0:10)</li>
    <li>Night Vision II (4:00)</li><li>Weakness II (4:00)</li><li>Water Breathing II (4:00)<br></li></ul><p><strong>Chocolate Apple</strong>
    <br></p><ul><li>Speed II (0:30)</li><li>Weakness II (0:30)</li><li>Nausea II (0:01)</li></ul><p><br></p>
    ';


$ef = new MinecraftMod();
$ef->title = 'Expensive Flying';
$ef->version = '1.7.2-1.0';
$ef->download = 'http://www.mediafire.com/download/08374qmca6uxf37/expensiveflying-1.7.2-1.0.jar';
$ef->text = 'Flying in survival mode.  While flying, you have <b>Weakness III</b>
and <b>Mining Fatigue III</b>, making it nearly impossible to break blocks or fight anything.  
You will also have your levels drained while flying, unless you tweak the config file.  
<br/>Listed below (coming soon) are the config file options to let you 
change the flying rules.   The default leaves them all turned on.  
A video on this is coming soon.  Config file is shown below.  <br/>
<p>&nbsp;&nbsp;&nbsp; # When this is true, you cannot use survival flying at night.<br>&nbsp;&nbsp;&nbsp; B:cannotFlyAtNight=true<br><br>&nbsp;&nbsp;&nbsp; # When this is true, you cannot use survival flying in the rain.<br>&nbsp;&nbsp;&nbsp; B:cannotFlyInRain=true<br><br>&nbsp;&nbsp;&nbsp; # When true, this disables flying while you are burning.<br>&nbsp;&nbsp;&nbsp; B:cannotFlyWhileBurning=true<br><br>&nbsp;&nbsp;&nbsp; # Minimum difficulty required for survival fly (0 = Peaceful, 3 = Hard).<br>&nbsp;&nbsp;&nbsp; I:difficultyRequiredToFly=3<br><br>&nbsp;&nbsp;&nbsp; # When this is true, your XP Levels will drain while flying.<br>&nbsp;&nbsp;&nbsp; B:doesDrainLevels=true<br><br>&nbsp;&nbsp;&nbsp; # Affects how fast you lose XP levels while flying.&nbsp; Larger numbers is slower drain.&nbsp; Minimum 5.<br>&nbsp;&nbsp;&nbsp; I:flycountdown=70<br><br>&nbsp;&nbsp;&nbsp; # When this is true, you may only fly if not wearing any armor. <br>&nbsp;&nbsp;&nbsp; B:noArmorFlyingOnly=true<br><br>&nbsp;&nbsp;&nbsp; # The minimum level required to fly in survival. &nbsp;<br>&nbsp;&nbsp;&nbsp; I:startFlyingLevel=10<br><br>&nbsp;&nbsp;&nbsp; # The minimum health required in order to fly in survival.&nbsp; Each number is one half heart, so 20 means 10 hearts.<br>&nbsp;&nbsp;&nbsp; I:startflyinghealth=20<br><br>&nbsp;&nbsp;&nbsp; # Minimum hunger required to fly.&nbsp; Each number is one half hunger, so 20 means full hunger.<br>&nbsp;&nbsp;&nbsp; I:startflyinghunger=14</p><p><strong><br data-mce-bogus="1"></strong></p><p><strong><br data-mce-bogus="1"></strong></p>
 
    ';

$hs = new MinecraftMod();
$hs->title = 'Horse Step Sprinting';
$hs->version = '1.7.2-1.0';
$hs->download = 'http://www.mediafire.com/download/gp56kroka18sur1/horsestep-1.7.2-1.0.jar';
$hs->text = '
    
Horse Step while Sprinting - walk up full blocks like a horse
Whenever a player is sprinting, they can walk up full blocks.  They treat blocks as if they were 
halfslabs, just like horses do.
<br/>
This speeds up the game so much, and reduces a lot of that frustrating jumping up mountains and hills.
 
    ';
 
$lg = new MinecraftMod();
$lg->version = '1.7.2-1.0';
$lg->title = 'Lock Gamemode';
$lg->download = 'http://www.mediafire.com/download/bcm256dxxusn1c8/lockgamemode-1.7.2-1.0.jar';
$lg->text = '

Pick a game mode (by default the config file picks survival).  Every player is now locked in that mode.  If their gamemode changes for any reason, this mod will change it back right away.

Most people will find this mod silly, but I made it for myself so i would not be tempted in single player just to open up LAN mode, enable cheats, and cheese away.
    ';

$rs = new MinecraftMod();
$rs->title = 'Runestones';
$rs->version = '1.7.2-1.0';
$rs->imguralbum='SZn1o';
$rs->download = 'http://www.mediafire.com/download/lmryujc29946mmh/runestones-1.7.2-1.0.jar';
$rs->text = '<p>Whenever a runestone is in the top left corner of your inventory, you gain its effects. 
    &nbsp;<br>As soon as you drop or move the item, the effect is gone.<br></p><p>Effects and recipes 
    listed below.&nbsp; All runes can be smelted into a furnace to return them back to plain nether stars.
    &nbsp; This is important when uninstalling the mod.<br data-mce-bogus="1"></p><p><br><strong>
    Resistance Rune</strong> gives <strong>Resistance II</strong>, the same as a full beacon<br>
    <br><strong>Health Boost Rune</strong> gives <strong>Health Boost V</strong>, which is 10 extra 
    red hearts<br></p><p><strong>Saturation Rune </strong>gives <strong>Saturation</strong>, meaning 
    your hunger bar never goes down<br data-mce-bogus="1"></p><p></p><p><strong>Jump Boost Rune </strong>
    gives <strong>Jump Boost V</strong>, more powerful than a full beacon<br></p><p><strong>Resistance Rune
    </strong> gives&nbsp;<strong>Resistance II</strong>, the same as a full beacon<strong> </strong>
    </p><p><strong>Haste Rune </strong>gives <strong>Haste II</strong>, the same as a full beacon
    <br></p><p><strong>Water Breathing Rune&nbsp;</strong>gives<strong> Water Breathing V</strong>
    , more powerful than the potion </p><p><strong>
    <br data-mce-bogus="1"></strong></p><p><strong><br data-mce-bogus="1"></strong></p>

';

$cr = new MinecraftMod();
$cr->title = 'Extra Crafting';
$cr->version = '1.7.2-1.0';
$cr->imguralbum='huBkp';
$cr->download = 'http://www.mediafire.com/download/k51qsth0i0ghpt2/extracrafting-1.7.2-1.0.jar';

$cr->text = '

Almost all the uncraftable items are given a recipe (excluding end portal frames and command blocks, etc).

Includes things like sponge, podzol, packed ice, Dirt with damage value 1, horse armor, name tags, cobwebs, and so on.  Even the 
<a href="http://minecraft.gamepedia.com/File:Newstoneslab.png">secret double slabs </a>.

The huge config file allows you to turn sections on and off, for example in case you want to disable the horse armor recipe.

Also some little recipes like crafting lily pads, and changing saplings to sticks.

Includes the chiseled stone and mossy cobble recipes pulled from the 1.8 snapshots.
';

$uc = new MinecraftMod();
$uc->title = 'Uncrafting';
$uc->version = '1.7.2-1.0';
$uc->imguralbum='KZo8s';
$uc->download = 'http://www.mediafire.com/download/r7vgqaaz0d0f1af/uncrafting-1.7.2-1.0.jar';
$uc->text = '
    
Almost everything in the game has some sort of reverse recipe.  Ladders back into sticks, Stone bricks back into Stone, you name it.
<br/>
Click to see the image gallery with a small sampling of the many recipes.
 
';


 return array($ec,$sm,$rccm,$rd,$ma,$ef,$hs,$lg,$rs,$cr,$uc,$msort);
  }