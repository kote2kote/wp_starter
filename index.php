<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_starter
 */

get_header();
?>

	<div id="primary" class="content-area col">
		<main id="main" class="site-main cm0">
		
		<?php
		if ( have_posts() ) :
			?>
			<h2 class="h2">index.php - type: <?php echo get_post_type();?></h2>
			<?php
			//投稿ページかつフロントページではない
			//http://www.arttoe.net/19
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text h3"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) ://投稿がある場合
				the_post();//次の投稿へ進める

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 * 投稿タイプを取得してコンテンツのテンプレートに渡している
				 */
				//
				//以下テンプレートを使う
				get_template_part( 'template-parts/content/content', get_post_type() );// => post()
				

			endwhile;//ここまでエントリーコンテントの繰り返し

			//次のページ表示。「投稿ナビゲーション」というタイトルが勝手に入る display:noneなど使って消せる
			the_posts_navigation();
			echo 'or';
			the_posts_navigation( array( 'prev_text' => '前へ', 'next_text' => '次へ' ) );

		else ://投稿がない場合

			get_template_part( 'template-parts/content/content', 'none' );
			
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>