<?php 
/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

// WP-FORMの自動改行をやめる
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

// WP-FORMのビジュアルエディタを無効
function visual_editor_off(){ 
  global $typenow; 
  if( in_array( $typenow, array( 'page' ,'mw-wp-form' ) ) ){ 
      add_filter('user_can_richedit', 'off_visual_editor'); 
  } 
} 
function off_visual_editor(){ 
  return false; 
} 
add_action( 'load-post.php', 'visual_editor_off' ); 
add_action( 'load-post-new.php', 'visual_editor_off' );

// <title>タグを出力
add_theme_support('title-tag'); 

//区切り文字変更
add_filter( 'document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
  $separator = "|";
  return $separator;
}

//カスタムメニューを使用可能に
add_theme_support('menus');