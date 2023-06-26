<div class="relative">
  <a href="<?php the_permalink(); ?>" class="absolute-link"></a>
  <div class="mb-2 lg:mb-4">
    <?php 
      $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
    <?php if ($medium_thumb): ?>
    <img 
    class="w-full h-[240px] min-h-[240px] object-cover rounded" 
    alt="<?php the_title(); ?>" 
    src="<?php echo $medium_thumb; ?>" 
    srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" 
    loading="lazy" 
    data-src="<?php echo $medium_thumb; ?>" 
    data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
    <?php else: ?>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-image.png" class="w-full h-[240px] min-h-[240px] object-cover rounded" loading="lazy">
    <?php endif; ?>
  </div>
  <div class="mb-2 lg:mb-4">
    <?php
    $post_categories = get_the_terms( $new_posts->ID, 'category' );
    foreach ($post_categories as $post_category){ ?>
      <a href="<?php echo get_term_link($post_category->term_id, 'category') ?>" class="text-blue-600"><?php echo $post_category->name; ?></a> 
    <?php } ?>
  </div>
  <div class="text-lg font-semibold mb-2 lg:mb-4">
    <?php the_title(); ?>
  </div>
  <div class="text-sm opacity-75">
    <?php echo get_the_modified_time('F j, Y'); ?>
  </div>
</div>