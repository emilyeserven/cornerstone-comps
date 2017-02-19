<?php
$icon_atts = cs_atts( array(
	'class' => 'x-icon-' . $icon,
	'data-x-icon' => fa_entity( $icon )
));
 ?>
<div class="iconbox-block">
    <div class="iconbox-icon-holder">
        <i class="x-icon <?php echo $icon_atts; ?>" aria-hidden="true"></i>
    </div>
    <div class="iconbox-text-holder">
        <div class="iconbox-heading">
            <h4><?php echo $heading; ?></h4>
        </div>
        <div class="iconbox-content">
            <?php echo $content; ?>
        </div>
    </div>
</div>
