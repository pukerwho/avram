</div>

<footer class="footer bg-black/90 text-gray-200 py-12 lg:py-20">
  <div class="container">
    <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-4">
      <div class="w-full lg:w-1/2 lg:px-4">
        <div class="text-xl font-extrabold mb-4"><a href="<?php echo get_home_url(); ?>"><span class="text-2xl bg-gradient-to-b from-blue-500 hover:from-blue-600 to-blue-700 hover:to-blue-800 rounded-lg p-1">👩‍🍳</span> <span class="text-red-500">Кулінарна</span> Книга</a></div>
        <div class="text-lg opacity-75 mb-4">
          <?php _e("Book-Cook - це сайт, на якому зібрані корисні поради та покрокові рецепти. Смачного!", "treba-wp"); ?>
        </div>
        <div class="text-sm opacity-75">2023.</div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-4 mb-6 lg:mb-0">
        <div class="font-semibold mb-4"><?php _e("Навігація", "treba-wp"); ?></div>
        <?php wp_nav_menu([
          'theme_location' => 'footer',
          'container' => 'div',
          'menu_class' => 'footer-menu'
        ]); ?> 
      </div>
      <div class="w-full lg:w-1/4 lg:px-4 mb-6 lg:mb-0">
        <div class="font-semibold mb-4"><?php _e("Зв'язок з нами", "treba-wp"); ?></div>
        <div class="flex items-center">
          <div class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
            </svg>
          </div>
          <div class="font-light">info@book-cook.net</div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="mobile-menu w-full h-full fixed top-0 left-0 bg-white hidden">
  <div class="container">
    <div class="flex items-center justify-between py-4 mb-4">
      <div class="text-xl font-extrabold"><a href="<?php echo get_home_url(); ?>"><span class="text-red-500">А</span>враменко</a></div>
      <div class="flex items-center lg:hidden bg-blue-500 text-white rounded px-2 py-1 menu-close-js">
        <div class="mr-2"><?php _e("Закрити", "treba-wp"); ?></div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
    </div>
    <div class="mobile-nav mb-6">
      <?php wp_nav_menu([
        'theme_location' => 'header',
        'container' => 'div',
        'menu_class' => 'flex flex-col',
      ]); ?> 
    </div>
    <div class="flex items-center">
      <div class="text-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
      <div class="w-[1px] h-[24px] bg-gray-200 mx-4"></div>
      <div class="flex items-center text-gray-600">
        <div class="mr-3">
          <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
        </div>
        <div>
          <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>