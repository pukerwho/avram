<?php 
$current_title = wp_get_document_title();
$current_year = date("Y");
// FOR POSTs
if ( is_singular( 'post' ) ) {
  $current_title = get_the_title();
  $post_title = carbon_get_the_post_meta('crb_post_title');
  $post_description = carbon_get_the_post_meta('crb_post_description');
  if ($post_title) {
    $current_title = $post_title;
  }
  if ($post_description) {
    $current_description = $post_description;
  }
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>"/>
  <?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1D1E22" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="header py-4 mb-4">
    <div class="container">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <div class="text-xl font-extrabold"><a href="<?php echo get_home_url(); ?>"><span class="text-2xl bg-gradient-to-b from-blue-500 hover:from-blue-600 to-blue-700 hover:to-blue-800 rounded-lg p-1">👩‍🍳</span> <span class="text-red-500">Кулінарна</span> Книга</a></div>
          <div class="hidden lg:block ml-10">
            <?php wp_nav_menu([
              'theme_location' => 'header',
              'container' => 'div',
              'menu_class' => 'flex top-menu'
            ]); ?> 
          </div>
        </div>
        <div class="flex items-center">
          <div class="flex items-center lg:hidden bg-blue-500 text-white rounded px-2 py-1 menu-open-js">
            <div class="mr-2"><?php _e("Меню", "treba-wp"); ?></div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </div>
          </div>
          <div class="hidden lg:block text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </div>
          <div class="hidden lg:block w-[1px] h-[24px] bg-gray-200 mx-4"></div>
          <div class="hidden lg:flex items-center text-gray-600">
            <div class="mr-3">
              <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
            </div>
            <div>
              <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
            </div>
          </div>
          <div class="hidden lg:block w-[1px] h-[24px] bg-gray-200 mx-4"></div>
          <div class="relative hidden lg:flex items-center bg-gradient-to-b from-blue-500 hover:from-blue-600 to-blue-700 hover:to-blue-800 text-white rounded px-4 py-2">
            <a href="/feedback" class="absolute-link"></a>
            <div class="text-gray-200 mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
              </svg>
            </div>
            <div class="font-semibold">
              <?php _e("Контакти", "treba-wp"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="wrap">