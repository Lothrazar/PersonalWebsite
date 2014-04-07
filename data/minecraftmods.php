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
    public $images = array();
}
//CMD SHIFT R
  function get_minecraftmods()
  {
      

$ec = new MinecraftMod();
$ec->title = 'Ender Chest Command';
$ec->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/enderchestcommand-1.7.2-1.0.jar';
$ec->text = 'Adds a new command.  Type /enderchest to open your ender chest inventory anywhere anytime.  You do not have to be near one, you do not even have to build one.';
$ec->version = '1.7.2-1.0';

$sm = new MinecraftMod();
$sm->title = 'Stack Max 64';
$sm->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/stackmax-1.7.2-1.0.jar';
$sm->text = '

Increase the stack size of every item in the game up to 64 - except potions.

There is a config file option to up the potion stack size from 1 to 3, but it is off by default.';

$sm->version = '1.7.2-1.0';
 
$rccm = new MinecraftMod();
$rccm->title = 'Restricted Craftable Command Blocks';
$rccm->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/craftablecommand-1.7.2-1.0.jar';
$sm->version = '1.7.2-1.0';
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
$rd->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/ruledetectors-1.7.2-1.0.jar';
$rd->text = 'Each of these 5 blocks emits a redstone signal depending on if their associated game rule is on or off (on emits power, off does not).  Useful for having a light panel that shows rule status.

-   doFireTick

-   doDaylightCycle

-   keepInventory

-   mobGriefing

-   naturalRegeneration

Unfortunately, when a game rule is toggled, the power does not change right away, you have to update the block (sometimes breaking it) for it to change state
';

$ma = new MinecraftMod();
$ma->title = 'Magic Apples';
$ma->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/magicapples-1.7.2-1.0.jar';
$ma->text = '
These 4 apples are similar to golden apples - temporary buffs in exchange for eating rare minerals.

Diamond

Regen II (0:40)

Health Boost 4 (5:00) - double your hearts up to 20 for a while

Resistance (5:00)

Fire Resistance (5:00)

Emerald

Blindness (0:10)

Haste II (4:00)

Weakness II (4:00)

Speed (4:00)

Lapis

Hunger (?)

Nausea (?)

Night Vision II (4:00)

Weakness II (4:00)

Water Breathing II (4:00)

Chocolate

Speed II (0:30)

Weakness II (0:30)';


$ef = new MinecraftMod();
$ef->title = 'Expensive Flying';
$ef->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/expensiveflying-1.7.2-1.0.jar';
$ef->text = '
    
 - customizable rules for limited flying in survival with debuffs
 ...
 
    ';

$hs = new MinecraftMod();
$hs->title = 'Horse Step while Sprinting';
$hs->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/horsestep-1.7.2-1.0.jar';
$hs->text = '
    
Horse Step while Sprinting - walk up full blocks like a horse
Whenever a player is sprinting, they can walk up full blocks.  They treat blocks as if they were halfslabs, just like horses do.
 ...
 
    ';
 
$lg = new MinecraftMod();
$lg->title = 'Lock Gamemode';
$lg->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/lockgamemode-1.7.2-1.0.jar';
$lg->text = '

Pick a game mode (by default the config file picks survival).  Every player is now locked in that mode.  If their gamemode changes for any reason, this mod will change it back right away.

Most people will find this mod silly, but I made it for myself so i would not be tempted in single player just to open up LAN mode, enable cheats, and cheese away.
    ';

$rs = new MinecraftMod();
$rs->title = 'Runestones';
$rs->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/runestones-1.7.2-1.0.jar';
$rs->text = '
Whenever a runestone is in the top left corner of your inventory, you gain its effects.  As soon as you drop or move the item, the effect is gone.

Resistance Rune

Gives you permament Resistance II, just like from a beacon.

GoldHeart Rune

Uses the existing hidden Health Boost effect to give you 20 hearts instead of 10 - one full extra row. ';

$cr = new MinecraftMod();
$cr->title = 'Extra Crafting';
$cr->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/extracrafting-1.7.2-1.0.jar';
$cr->text = '

Almost all the uncraftable items are given a recipe (excluding end portal frames and command blocks, etc).

Includes things like sponge, podzol, packed ice, Dirt with damage value 1, horse armor, name tags, cobwebs, and so on.  Even the secret double slabs (http://minecraft.gamepedia.com/File:Newstoneslab.png).

The huge config file allows you to turn sections on and off, for example in case you want to disable the horse armor recipe.

Also some little recipes like crafting lily pads, and changing saplings to sticks.

Includes the chiseled stone and mossy cobble recipes pulled from the 1.8 snapshots.

Imare gallery with all recipes coming soonish.';

$uc = new MinecraftMod();
$uc->title = 'Uncrafting';
$uc->download = 'https://dl.dropboxusercontent.com/u/40119435/mods/uncrafting-1.7.2-1.0.jar';
$uc->text = '
    
Almost everything in the game has some sort of reverse recipe.  Ladders back into sticks, Stone bricks back into Stone, you name it.

Imare gallery with all recipes coming soonish.
';
 return array($ec,$sm,$rccm,$rd,$ma,$ef,$hs,$lg,$rs,$cr);
  }