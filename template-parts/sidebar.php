<div class="bg-gray-100 rounded border-t-4 border-blue-500">
  <div class="p-3 lg:p-5 mb-2">
    <div class="text-lg font-semibold mb-4"><?php _e("Популярні статті", "treba-wp"); ?></div>
    <div class="mb-8">
      <?php 
        $popular_posts = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 10,
          'order' => 'DESC',
          'orderby' => 'rand',
        ) );
        if ($popular_posts->have_posts()) : while ($popular_posts->have_posts()) : $popular_posts->the_post(); 
      ?>
        <div class="flex items-center mb-6">
          <div class="mr-4">
            <?php $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
            <?php if ($medium_thumb): ?>
            <img 
            class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" 
            alt="<?php the_title(); ?>" 
            src="<?php echo $medium_thumb; ?>" 
            loading="lazy">
            <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-image.png" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy">
            <?php endif; ?>
          </div>
          <div>
            <div class="mb-1"><a href="<?php the_permalink(); ?>" class="hover:text-blue-600"><?php the_title(); ?></a></div>
            <div class="text-sm opacity-75"><?php _e("Переглядів", "treba-wp"); ?>: <?php echo get_post_meta( get_the_ID(), 'post_count', true ); ?></div>
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="relative">
      <a href="<?php echo get_page_url('page-blog'); ?>" class="absolute-link"></a>
      <div class="bg-gradient-to-b from-blue-500 to-blue-700 text-lg text-white text-center font-semibold rounded px-4 py-2"><?php _e("Всі статті", "treba-wp"); ?></div>
    </div>
  </div>
  <div class="p-3 lg:p-5">
    <div class="text-lg font-semibold mb-4"><?php _e("Категорії", "treba-wp"); ?></div>
    <div>
      <?php 
      $categories = get_terms(array( 'taxonomy' => 'category', 'parent' => 0, 'hide_empty' => false ));
      foreach($categories as $category): ?>
        <div class="text-base border-b pb-3 mb-3 last-of-type:border-transparent last-of-type:pb-0 last-of-type:mb-0">
          <a href="<?php echo get_term_link($category->term_id, 'category') ?>" class="text-gray-700 hover:text-blue-600"><?php echo $category->name; ?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>