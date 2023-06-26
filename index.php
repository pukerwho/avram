<?php get_header(); ?>

<div class="container">
  <div class="bg-blue-100 rounded p-4 mb-8">
    <div class="flex flex-wrap flex-col lg:flex-row lg:-mx-4">
      <?php 
        $post_category_1 = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 1,
          'order' => 'DESC',
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => 'myasnye-blyuda',
            )
          ),
        ) );
        if ($post_category_1->have_posts()) : while ($post_category_1->have_posts()) : $post_category_1->the_post(); 
      ?>
      <div class="w-full lg:w-1/2 lg:px-4 mb-6 lg:mb-0">
        <div class="flex items-center mb-1">
          <?php
          $post_categories_1 = get_the_terms( $new_posts->ID, 'category' );
          foreach (array_slice($post_categories_1, 0,1) as $category_1){ ?>
            <div class="text-blue-600 font-semibold mr-4"><a href="<?php echo get_term_link($category_1->term_id, 'category') ?>" class="hover:text-red-500"><?php echo $category_1->name; ?></a></div>
          <?php } ?>
          <div class="text-sm text-gray-500"><?php echo get_the_modified_time('F j, Y'); ?></div>
        </div>
        <div class="flex items-center">
          <div class="mr-4">
            <?php 
              $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
              $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
            ?>
            <?php if ($medium_thumb): ?>
              <img 
              class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" 
              alt="<?php the_title(); ?>" 
              src="<?php echo $medium_thumb; ?>" 
              srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" 
              loading="lazy" 
              data-src="<?php echo $medium_thumb; ?>" 
              data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
            <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-image.png" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy">
            <?php endif; ?>
          </div>
          <div class="font-semibold text-base lg:text-lg"><a href="<?php the_permalink(); ?>" class="hover:text-red-500"><?php the_title(); ?></a></div>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <?php 
        $post_category_2 = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 1,
          'order' => 'DESC',
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => 'vtorye-blyuda',
            )
          ),
        ) );
        if ($post_category_2->have_posts()) : while ($post_category_2->have_posts()) : $post_category_2->the_post(); 
      ?>
      <div class="w-full lg:w-1/2 lg:px-4">
        <div class="flex items-center mb-1">
          <?php
          $post_categories_2 = get_the_terms( $post_category_2->ID, 'category' );
          foreach (array_slice($post_categories_2, 0,1) as $category_2){ ?>
            <div class="text-blue-600 font-semibold mr-4"><a href="<?php echo get_term_link($category_2->term_id, 'category') ?>" class="hover:text-red-500"><?php echo $category_2->name; ?></a></div>
          <?php } ?>
          <div class="text-sm text-gray-500"><?php echo get_the_modified_time('F j, Y'); ?></div>
        </div>
        <div class="flex items-center">
          <div class="mr-4">
            <?php 
              $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
              $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
            ?>
            <?php if ($medium_thumb): ?>
              <img 
              class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" 
              alt="<?php the_title(); ?>" 
              src="<?php echo $medium_thumb; ?>" 
              srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" 
              loading="lazy" 
              data-src="<?php echo $medium_thumb; ?>" 
              data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
            <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-image.png" class="w-[52px] min-w-[52px] h-[52px] min-h-[52px] object-cover rounded" loading="lazy">
            <?php endif; ?>
          </div>
          <div class="font-semibold text-base lg:text-lg"><a href="<?php the_permalink(); ?>" class="hover:text-red-500"><?php the_title(); ?></a></div>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="flex flex-wrap flex-col lg:flex-row lg:-mx-4 mb-8">
    <div class="w-full lg:w-2/3 lg:px-4 mb-12 lg:mb-0">
      <div class="mb-8">
        <?php 
          $new_post = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 1,
            'order' => 'DESC'
          ) );
          if ($new_post->have_posts()) : while ($new_post->have_posts()) : $new_post->the_post(); 
        ?>
          <div class="relative">
            <a href="<?php the_permalink(); ?>" class="absolute-link hover:shadow-xl"></a>
            <div class="relative">
              <div>
                <?php 
                  $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                  $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                ?>
                <?php if ($medium_thumb): ?>
                  <img 
                  class="w-full h-[380px] min-h-[380px] object-cover rounded" 
                  alt="<?php the_title(); ?>" 
                  src="<?php echo $medium_thumb; ?>" 
                  srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" 
                  loading="lazy" 
                  data-src="<?php echo $medium_thumb; ?>" 
                  data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
                <?php else: ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-image.png" class="w-full h-[380px] min-h-[380px] object-cover rounded" loading="lazy">
                <?php endif; ?>
              </div>
              <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-b from-transparent to-black/75 rounded"></div>
              <div class="absolute bottom-10 left-6 right-6 text-white">
                <div class="text-2xl lg:text-3xl font-bold mb-4"><?php the_title(); ?></div>
                <div class="text-sm opacity-75 font-semibold"><?php echo get_the_modified_time('F j, Y'); ?></div>
              </div>
            </div>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="flex flex-wrap lg:-mx-4 mb-6">
        <?php 
          $new_posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 10,
            'order' => 'DESC',
            'offset' => 1,
          ) );
          if ($new_posts->have_posts()) : while ($new_posts->have_posts()) : $new_posts->the_post(); 
        ?>
          <div class="w-full lg:w-1/2 lg:px-4 mb-8 last-of-type:mb-0">
            <?php get_template_part('template-parts/post-item'); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="flex justify-center relative">
        <a href="<?php echo get_page_url('page-blog'); ?>" class="absolute-link"></a>
        <div class="bg-gradient-to-b from-blue-500 to-blue-700 text-lg text-white text-center font-semibold rounded px-8 py-2"><?php _e("Всі статті", "treba-wp"); ?></div>
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-4">
      <?php get_template_part('template-parts/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>