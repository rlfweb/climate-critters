<div class="repeater content-area">
	<div class="holder">
		<div class="halfimg half<?php the_field('image_width', $image['id']); ?>">
			<img src="<?php the_sub_field('repeater-image'); ?>">
    </div>
		<div class="halftext half">
			<p class="critter-title db"><?php the_sub_field('repeater-title'); ?></p>
			<p class="db"><?php the_sub_field('repeater-text'); ?></p>
		</div>
	</div>
</div>




