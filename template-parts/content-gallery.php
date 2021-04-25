<!-- this tag wraps around our gallery and contains everything -->
<div class="gallery flex flex-wrap center ">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach($images as $image) : ?>
    <!-- get an image by its id and also
    tell it that we want the full size -->
    <!-- add a custom field to our attachments (images)
    which adds a class name to control the width of the image -->
    <div class="gallery-image ph3-ns mt4 center <?php the_field('image_width', $image['id']); ?>">



      <!-- get each image by its ID -->
      <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

      <!-- TITLE -->
      <p class="image-title"><?php echo $image['title']; ?> </p>

      <!-- CAPTION -->
      <!-- assign  caption to a variable called $caption -->
      <?php $caption = wp_get_attachment_caption($image['id']); ?>
      <!-- if the caption is not empty, we render it onto the page -->
				<?php if(!empty($caption)) : ?> 
				<!-- use regular weight of archivo with 50% opacity -->
					<p class="image-caption">
					<!-- grab the caption by the attachment id -->
					<?php echo $caption; ?>
					</p>
				<?php endif; ?>


<!-- DESCRIPTION -->
<p class="image-description"><?php echo $image['description']; ?> </p>


    </div> <!-- .gallery-image --> 
  <?php endforeach; ?>
</div><!-- .gallery container --> 