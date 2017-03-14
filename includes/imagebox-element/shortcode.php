<?php
$icon_atts = cs_atts( array(
	'class' => 'x-icon-' . $icon,
	'data-x-icon' => fa_entity( $icon )
));

$content_width = 100 - $icon_width;

 ?>
<div class="iconbox-block">
    <div class="iconbox-icon-holder" style="background-color: <?php echo $icon_bg;?>; width: <?php echo $icon_width;?>%;">
        <img src="<?php echo $image; ?>" width="<?php echo $icon_size;?>px" height="<?php echo $icon_size;?>px" style="margin-top:<?php echo $icon_margin_comp;?>px;" />
    </div>
    <div class="iconbox-text-holder" style="background-color: <?php echo $content_bg;?>; width: <?php echo $content_width;?>%;">
        <div class="iconbox-heading">
            <h4><?php echo $heading; ?></h4>
        </div>
        <div class="iconbox-content">
            <?php echo $content; ?>
        </div>
    </div>
</div>
