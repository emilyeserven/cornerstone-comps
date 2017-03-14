<ul class="x-nav x-nav-tabs four-up top" data-x-element="tab_nav" data-x-params="{"orientation":"horizontal"}">
    <li class="x-nav-tabs-item active">
        <a data-cs-tab-toggle="<?php echo $tab_1_shorthand; ?>" role="tab"><img src="<?php echo $tab_1_img; ?>" /></a>
    </li>
    <li class="x-nav-tabs-item">
        <a data-cs-tab-toggle="<?php echo $tab_2_shorthand; ?>" role="tab"><img src="<?php echo $tab_2_img; ?>" /></a>
    </li>
    <li class="x-nav-tabs-item">
        <a data-cs-tab-toggle="<?php echo $tab_3_shorthand; ?>" role="tab"><img src="<?php echo $tab_3_img; ?>" /></a>
    </li>
    <li class="x-nav-tabs-item">
        <a data-cs-tab-toggle="<?php echo $tab_4_shorthand; ?>" role="tab"><img src="<?php echo $tab_4_img; ?>" /></a>
    </li>
</ul>
<div class="x-tab-content">
    <div class="x-tab-pane active" data-cs-tab-index="<?php echo $tab_1_shorthand; ?>">
        <?php echo $tab_1_content; ?>
    </div>
    <div class="x-tab-pane" data-cs-tab-index="<?php echo $tab_2_shorthand; ?>">
        <?php echo $tab_2_content; ?>
    </div>
    <div class="x-tab-pane" data-cs-tab-index="<?php echo $tab_3_shorthand; ?>">
        <?php echo $tab_3_content; ?>
    </div>
    <div class="x-tab-pane" data-cs-tab-index="<?php echo $tab_4_shorthand; ?>">
        <?php echo $tab_4_content; ?>
    </div>
</div>
