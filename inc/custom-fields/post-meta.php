<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
      Field::make( 'checkbox', 'crb_post_top', 'TOP-TOP?' ),
      Field::make( 'html', 'crb_heading_seo', __( 'SEO Heading' ) )->set_html( sprintf( '<b>SEO</b>' ) ),
      Field::make( 'text', 'crb_post_title', 'Title' ),
      Field::make( 'textarea', 'crb_post_description', 'Description' )->set_attribute( 'maxLength', '144' ),
      Field::make( 'text', 'crb_post_keywords', 'Keywords' ),
      Field::make( 'html', 'crb_heading_author', __( 'INFO Heading' ) )->set_html( sprintf( '<b>АВТОР</b>' ) ),
      Field::make( 'text', 'crb_post_author', 'Автор' ),
      Field::make( 'text', 'crb_post_author_instagram', 'Інстаграм автора' ),
      Field::make( 'text', 'crb_post_author_facebook', 'Фейсбук автора' ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'items' )
    ->add_fields( array(
      Field::make( 'text', 'crb_items_date', 'Добавлено' ),
      Field::make( 'text', 'crb_items_number', 'Номер' ),
      Field::make( 'text', 'crb_items_price', 'Цена' ),
      Field::make( 'text', 'crb_items_region', 'Регион' ),
      Field::make( 'text', 'crb_items_city', 'Город' ),
      Field::make( 'text', 'crb_items_address', 'Адрес' ),
      Field::make( 'text', 'crb_items_author', 'Автор' ),
  ) );
}

?>