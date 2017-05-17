<?php
    $title = 'Advanced Rocketry';
    
    $mainContent = '<h2>Advanced Rocketry Documentation</h2>
<br />
<p>&nbsp;&nbsp;&nbsp; Welcome to the documentation page for Advanced
Rocketry!&nbsp; The mod is still in alpha and should be entering beta
soon.</p>
<p>Advanced Rocketry is a Minecraft mod designed to add random or
player specified planets to the game.&nbsp; These planets each have
unique properties such as Atmosphere Density, Distance from the sun,
Atmosphere composition, Average Temperature, and size.&nbsp; Players
can build rockets out of blocks to travel to these other worlds.<br />
</p>
<hr>
<h2>What\'s New?</h2>
<h3>1.2.0</h3>
<ul>
<li>Advanced Rocketry now looks for the planet config as "<world dir>/advRocketry/planetDefs.xml" before checking the config folder.  This allows for each save to have its own config</li>
<li>Revamed O2 handling in spacesuits.  Spacesuit chestplates now have dedicated O2 slots for tanks and internal "invisible storage was removed"</li>
<li>Add ability to rotate station around Y axis (note: some stuttering still occurs when changing rotation speed</li>
<li>Add configurable <a href="config/AdvancedPlanetConfiguration.php#artifact">artifacts</a> required for planet travel</li>
<li>When a station id chip is in a rocket\'s guidance computer, the "select dst" will now bring a screen up to allow players to select the landing pad on a station they wish to go to</li>
<li>landing pads can now be named</li>
<li>Fix text being over top of planets with rings</li>
<li>Added <a href="blocks/SpaceElevator.php">space elevator</a></li>
<li>Fix observetory trying to extract x data for every bus rather than just x over all busses</li>
<li>Gas can be specified on gas giants by the <a href="config/AdvancedPlanetConfiguration.php#gas">XML config</a></li>
<li>added <a href="items/modularSpaceSuit.php">beacon finding goggles</a></li>
<li>adding a warp core to a rocket allows interplanetary travel within same system</li>
<li>added config for station size</li>
<li>Added list to choose from in the planet selector UI</li>
<li>[1.7.10] fix space suits being dyed when they shouldn\'t have been</li>
</ul>
<h3>1.1.7</h3>
<ul>
<li>fix moon being missing with default setup</li>
</ul>
<h3>1.1.6</h3>
<ul>
<li>fixes from 1.0.17</li>
<li>Fix some of the coils not speeding up of the arc furnace properly</li>
</ul>
<h3>1.1.4</h3>
<ul>
<li>Fix crash when starting world with gravity generator disabled</li>
</ul>
<h3>1.1.3</h3>
<ul>
<li>Stable build features from 1.0.14</li>
<li>If using the custom planet XML earth must now be <a href="config/AdvancedPlanetConfiguration.php#dimMapping">dimmapped</a> to planet ID 0</li>
<li>Fixed not being able to put data into the Observatory</li>
<li>/advRocketry reloadRecipes command added to reload recipes from XML ingame</li>
<li>[ Libvulpes ]All machine recipes are now written to XML if the XML does not yet exist</li>
</ul>
<h3>1.1.2</h3>
<ul>
<li>New asteroid selection mechanic, asteroid chips now programming in observetory</li>
<li>More <a href="blocks/Motors.php">motors</a> have been added</li>
<li>More advanced motors increase multiblock machine speed</li>
<li>Observatory now requires a motor</li>
<li>Observatory can have glass exchanged for lens which increase view distance</li>
<li>Space suits can now be dyed</li>
<li>Blast furnace/crystallizer/electrolyser/rolling machine speed can be increased with higher teir coils</li>
<li>rocket input and output hatches now have states for redstone IO and can now have operation suspended with redstone signals</li>
<li>Fix rocket loaders and unloader having swapped textures</li>
<li>Added forcefields</li>
<li>Added a gravity generator</li>
<li>[ libvulpes ] Motors moved to libvulpes</li>
<li>[ libvulpes ] More coils</li>
</ul>';
    
    $infoBarContent = '';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
