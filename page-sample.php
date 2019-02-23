<?php
/*
	Template Name: Sample
*/
get_header();
 ?>
<h2 class="h2">カスタム投稿タイプによる表示</h2>
<?php
/*==========================================================
カスタム投稿タイプによる表示
===========================================================*/
$args = array(
  'post_type' => 'sample', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 4, /* 表示する数 */
);

$my_query = new WP_Query( $args ); 

while ( $my_query->have_posts() ) : $my_query->the_post();
?>

<h3 class="h3"><?php the_title(); ?></h3>
<p>
	<span class="kakaku"><?php echo get_post_meta($post->ID , 'kakaku_hontai' ,true); ?></span>
	<span class="zeikomi"><?php echo get_post_meta($post->ID , 'kakaku_zeikomi' ,true); ?></span>
  <span class="energy"><?php echo get_post_meta($post->ID , 'energy' ,true);echo $energy; ?></span>

  <?php if ( has_post_thumbnail() ) {?>
    <picture>
      <source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
      <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>">
      <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>">
    </picture>
  <?php } ?> 
    
</p>

<?php
endwhile;
wp_reset_postdata(); 
 ?>

<hr>

<h2 class="h2">通常投稿による表示(カテゴリ指定あり)</h2>
<?php
/*==========================================================
通常投稿による表示(カテゴリ指定あり)
===========================================================*/
  $arg = array(
             'posts_per_page' => 4, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'sample' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
	if( $posts ): 
		
		foreach ( $posts as $post ) :
			setup_postdata( $post );

?>
<h3 class="h3"><?php the_title(); ?></h3>
<p>
	<span class="kakaku"><?php echo get_post_meta($post->ID , 'kakaku_hontai' ,true); ?></span>
	<span class="zeikomi"><?php echo get_post_meta($post->ID , 'kakaku_zeikomi' ,true); ?></span>
  <span class="energy"><?php echo get_post_meta($post->ID , 'energy' ,true);echo $energy; ?></span>
  <?php if ( has_post_thumbnail() ) {?>
    <picture>
      <source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
      <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>">
      <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>">
    </picture>
  <?php } ?> 

</p>
<?php endforeach; 
endif;
wp_reset_postdata();
?>

<hr>
<h2 class="h2">通常投稿による表示(カテゴリ指定なし)</h2>
<?php
/*==========================================================
通常投稿による表示(カテゴリ指定なし)
===========================================================*/
  $arg = array(
             'posts_per_page' => 10, // 表示する件数
             'src'   => $src,
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             //'category_name' => 'menu_east' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
	if( $posts ): 
		
		foreach ( $posts as $post ) :
			setup_postdata( $post );

?>
<h3 class="h3"><?php the_title(); ?></h3>
<p>
	<span><?php the_date(); ?></span>
  <span><?php the_excerpt(); ?></span>
  <?php if ( has_post_thumbnail() ) {?>
    <picture>
      <source media="(min-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
      <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>">
      <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>">
    </picture>
  <?php } ?> 
</p>
<?php endforeach; 
endif;
wp_reset_postdata();
?>

<hr>


<?php get_footer(); ?>