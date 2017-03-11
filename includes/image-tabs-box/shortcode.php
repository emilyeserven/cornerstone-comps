<?php
$icon_atts = cs_atts( array(
	'class' => 'x-icon-' . $icon,
	'data-x-icon' => fa_entity( $icon )
));

$content_width = 100 - $icon_width;

 ?>

 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>

<div class="iconbox-block">
    <div class="iconbox-icon-holder" style="min-height: <?php echo $content_min_height;?>em; background-color: <?php echo $icon_bg;?>; width: <?php echo $icon_width;?>%;">
        <i class="x-icon <?php echo $icon_atts; ?>" style="font-size: <?php echo $icon_size; ?>em; margin-top: <?php echo $icon_margin_comp;?>px; color: <?php echo $icon_color;?>;" aria-hidden="true"></i>
    </div>
    <div class="iconbox-text-holder" style="min-height: <?php echo $content_min_height;?>em; background-color: <?php echo $content_bg;?>; width: <?php echo $content_width;?>%;">
        <div class="iconbox-heading">
            <h4><?php echo $heading; ?></h4>
        </div>
        <div class="iconbox-content">
            <?php echo $content; ?>
        </div>
    </div>
</div>
