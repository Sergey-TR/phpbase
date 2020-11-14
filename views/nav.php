<?php

require('../engine/action/nav_menu.php');

?>



<nav>
    <div class="nav">
        <ul class="menu center">
            <?php foreach ($navMenu as $mainMenu => $nameMenu) { ?>
                <li class="menu__list"><a href="#" class="menu__link"><?= $mainMenu ?></a>
					<div class="drop">
                        <div class="drop_women_left">
	                        <ul class="drop__ul">
                                <?php foreach($nameMenu as $dropMenu) { ?>
                                    <li><a href="#" class="drop__a"><?= $dropMenu ?></a></li>
                                <?php }	?>
	                        </ul>
						</div>
					</div>	
                </li>
            <?php } ?>				
        </ul>
    </div>
</nav>
<div class="itemHeading">
    <h2 class="fetured">Fetured Items</h2>
    <p class="fetured_p">Shop for items based on what we featured in this week</p>
</div>