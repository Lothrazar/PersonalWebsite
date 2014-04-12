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
$ec->download = 'http://www.mediafire.com/download/85udbr3jj81f87x/enderchestcommand-1.7.2-1.0.jar';
$ec->text = '<p>Adds a new command: /enderchest</p>  <p>Type /enderchest to open your ender chest inventory anywhere anytime.  </p>
        <p>You do not have to be near one, you do not even have to build one. </p>
        <p>This can be seen as overpowered in the early game.  But even then, it is just an extension of your inventory </p>
        <p>In the late game, once my world gets old, I find that I always am carrying way to much stuff between tools and building and fighting 
        So this seemed like the most logical way to extend my inventory.  
        It means I do not have to dump ender chests everywhere, or run around looking for one all the time.</p>
        <p>This mod does not add any items or blocks, so I have no screenshots.</p>'
        
        ;
$ec->version = '1.7.2-1.0';

$sm = new MinecraftMod();
$sm->title = 'Stack Max 64';
$sm->download = 'http://www.mediafire.com/download/qmy296g2qz6eazq/stackmax-1.7.2-1.0.jar';
$sm->text = 'Inspired by the classic mod by Ritsugami.
    <br/>
    This is a small mod that does exactly as the title implies: 
<br/>
It increases the stack size of every item in the game up to 64; except potions.
<br/>
There is a config file option to up the potion stack size to any value, but it is turned off by default.

<br/>
I do not like using this option, but I put it in for completeness.  You can get stacked potions with commands and editors, so it made sense.  No other items show up in the config file.
<br/>
This makes brewing potions super cheap and overpowered, since three stacks of 64 potions can be brewed at the same time with single ingredients.
<br/>
Almost all automatic redstone brewing machines depend on potions not being stackable.
<br/>


';

$sm->version = '1.7.2-1.0';
 
$rccm = new MinecraftMod();
$rccm->title = 'Craftable Command Blocks';
$rccm->download = 'http://www.mediafire.com/download/918q4vsiobm1jqm/craftablecommand-1.7.2-1.0.jar';
$rccm->version = '1.7.2-1.0';
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
$ef->text = '
    
 - customizable rules for limited flying in survival with debuffs
 Lots of rules you can turn off such as disabling flying at night, while on fire, based on hunger numbers, and so on.  
 All using the config file.  
 
    ';

$hs = new MinecraftMod();
$hs->title = 'Horse Step while Sprinting';
$hs->version = '1.7.2-1.0';
$hs->download = 'http://www.mediafire.com/download/gp56kroka18sur1/horsestep-1.7.2-1.0.jar';
$hs->text = '
    
Horse Step while Sprinting - walk up full blocks like a horse
Whenever a player is sprinting, they can walk up full blocks.  They treat blocks as if they were halfslabs, just like horses do.
 ...
 
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
$rs->download = 'http://www.mediafire.com/download/lmryujc29946mmh/runestones-1.7.2-1.0.jar';
$rs->text = '
Whenever a runestone is in the top left corner of your inventory, you gain its effects.  As soon as you drop or move the item, the effect is gone.

Resistance Rune

Gives you permament Resistance II, just like from a beacon.

GoldHeart Rune

Uses the existing hidden Health Boost effect to give you 20 hearts instead of 10 - one full extra row. ';

$cr = new MinecraftMod();
$cr->title = 'Extra Crafting';
$cr->version = '1.7.2-1.0';
$cr->imguralbum='huBkp';
$cr->download = 'http://www.mediafire.com/download/k51qsth0i0ghpt2/extracrafting-1.7.2-1.0.jar';

$cr->text = '

Almost all the uncraftable items are given a recipe (excluding end portal frames and command blocks, etc).

Includes things like sponge, podzol, packed ice, Dirt with damage value 1, horse armor, name tags, cobwebs, and so on.  Even the secret double slabs (http://minecraft.gamepedia.com/File:Newstoneslab.png).

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


 return array($ec,$sm,$rccm,$rd,$ma,$ef,$hs,$lg,$rs,$cr,$uc);
  }