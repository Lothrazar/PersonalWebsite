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
These 7 command blocks do not let anyone open the command window to edit the command.  The command of each one is completely locked and will never be changed.

All crafted with a similar recipe, and need silk touch to pick up.

- /toggledownfall

- /tp : all players to world spawn

- gamerules : it alternates them on and off 

-   doFireTick

-   doDaylightCycle

-   keepInventory

-   mobGriefing

-   naturalRegeneration
';

/*

Rule Detectors

[spoiler]

Each of these 5 blocks emits a redstone signal depending on if their associated game rule is on or off (on emits power, off does not).  Useful for having a light panel that shows rule status.

-   doFireTick

-   doDaylightCycle

-   keepInventory

-   mobGriefing

-   naturalRegeneration

Unfortunately, when a game rule is toggled, the power does not change right away, you have to update the block (sometimes breaking it) for it to change state

https://dl.dropboxusercontent.com/u/40119435/mods/ruledetectors-1.7.2-1.0.jar
[/spoiler]

Magic Apples

[spoiler]

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

Weakness II (0:30)

https://dl.dropboxusercontent.com/u/40119435/mods/magicapples-1.7.2-1.0.jar
[/spoiler]

Expensive Flying - customizable rules for limited flying in survival with debuffs

[spoiler]

https://dl.dropboxusercontent.com/u/40119435/mods/expensiveflying-1.7.2-1.0.jar
[/spoiler]

Horse Step while Sprinting - walk up full blocks like a horse

[spoiler]

Whenever a player is sprinting, they can walk up full blocks.  They treat blocks as if they were halfslabs, just like horses do.

https://dl.dropboxusercontent.com/u/40119435/mods/horsestep-1.7.2-1.0.jar
[/spoiler]

Lock game mode for all players

[spoiler]

Pick a game mode (by default the config file picks survival).  Every player is now locked in that mode.  If their gamemode changes for any reason, this mod will change it back right away.

Most people will find this mod silly, but I made it for myself so i would not be tempted in single player just to open up LAN mode, enable cheats, and cheese away.

https://dl.dropboxusercontent.com/u/40119435/mods/lockgamemode-1.7.2-1.0.jar
[/spoiler]

Runestones - get persistant buffs

[spoiler]

Whenever a runestone is in the top left corner of your inventory, you gain its effects.  As soon as you drop or move the item, the effect is gone.

Resistance Rune

Gives you permament Resistance II, just like from a beacon.

GoldHeart Rune

Uses the existing hidden 'Health Boost' effect to give you 20 hearts instead of 10 - one full extra row.

https://dl.dropboxusercontent.com/u/40119435/mods/runestones-1.7.2-1.0.jar
[/spoiler]

Extra Crafting - tons of new recipes including the uncraftable blocks

[spoiler]

Almost all the uncraftable items are given a recipe (excluding end portal frames and command blocks, etc).

Includes things like sponge, podzol, packed ice, Dirt with damage value 1, horse armor, name tags, cobwebs, and so on.  Even the secret double slabs (http://minecraft.gamepedia.com/File:Newstoneslab.png).

The huge config file allows you to turn sections on and off, for example in case you want to disable the horse armor recipe.

Also some little recipes like crafting lily pads, and changing saplings to sticks.

Includes the chiseled stone and mossy cobble recipes pulled from the 1.8 snapshots.

Imare gallery with all recipes coming soonish.

https://dl.dropboxusercontent.com/u/40119435/mods/extracrafting-1.7.2-1.0.jar
[/spoiler]

Uncrafting - recycle almost every item back to its ingredients

[spoiler]

Almost everything in the game has some sort of reverse recipe.  Ladders back into sticks, Stone bricks back into Stone, you name it.

Imare gallery with all recipes coming soonish.

https://dl.dropboxusercontent.com/u/40119435/mods/uncrafting-1.7.2-1.0.jar
[/spoiler]

Other info

[spoiler]

[b]Permissions[/b]
[spoiler]
This mod (plugin, a patch to Minecraft source, henceforth "Mod" or "The Mod"), by the terms of [url="http://www.minecraft.net/copyright.jsp"]http://www.minecraft.net/copyright.jsp[/url] is sole property of the Mod author (Sam Bassett aka Lothrazar, henceforth "Owner" or "The Owner"). By default it may only be distributed on minecraftforums.net. It may only be mirrored or reposted with advance written permission of the Owner. Electronic Mail is fine if you wait for a response. URL shorteners or other attempts to make money off The Owner's Mod are strictly forbidden without advance written permission.

However, you are free to include this mod as-is in a ModPack as long as you credit the Owner.
[/spoiler]


[url="https://github.com/PrinceOfAmber/BuildersDream_Minecraft"]Source code GitHub  - GPLv3 [/url]


[b]Contact Me Directly[/b] 

[url="http://twitter.com/lothrazar"]http://twitter.com/lothrazar[/url]

[b]average and boring youtube videos[/b]
[url="http://youtube.ca/lothrazar"]http://youtube.ca/lothrazar[/url]


[/spoiler]

Please post about any bugs, ideas, or suggestions.

Screenshots coming soon.
*/
 return array($ec,$sm,$rccm);
  }