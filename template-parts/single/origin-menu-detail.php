<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package origin
 */

get_header("origin");

while ( have_posts() ) :
	the_post();
	//the_post_navigation();
?>
<section class="breadcrumb">
  <div class="section-content flex">
    <ul class="breadcrumb__menu_list flex">
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
    </ul>
    <span class="back">メニュー検索・一覧に戻る</span>
  </div>
</section>

<section class="detail">
  <div class="section-content">
    <div class="container">
    <figure>
		<?php wp_starter_post_thumbnail(); ?>
    </figure>
    <span class="num">106429</span>

    <div class="detail_info">
      <h3 class="detail_info__name"><?php the_title(); ?></h3>
      <div class="line cm0"></div>
      <span class="detail_info__kakaku"><?php echo get_post_meta($post->ID , 'kakaku_hontai' ,true); ?></span>
      <span class="detail_info__zeikomi"><?php echo get_post_meta($post->ID , 'kakaku_zeikomi' ,true); ?></span>
    </div>

    <div class="social_btn flex">
      <a href="#" class="btn_facebook cm0">Facebookでシェア</a>
      <a href="#" class="btn_twitter cm0">Twitterでシェア</a>
      <a href="#" class="btn_line cm0">Lineで送る</a>
   </div>

    <div class="seibun">
      <h4 class="title">栄養成分</h4>
      <ul class="seibun__list grid">
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
        <li class="item col-2 col-4-md col-6-sm align-center">
          <img src="https://placehold.jp/70x62.png" alt="">
          <span class="seibun__name">エネルギー</span>
          <span class="seibun__num">1000Kcal</span>
        </li>
      </ul>

      <div class="about_eiyou">
        <h4 class="about_eiyou__title">栄養表示について</h4>

        <p>すべての商品に栄養表示をしております。 <br>
メニューには栄養成分の数値をエネルギー／タンパク質／脂質／炭水化物／ナトリウム／食塩相当量の順でHP上で確認できるようにしています。 
栄養情報につきましては5訂日本食品標準成分表に基づく当社計算値です。 <br>
お弁当に別添の調味料の栄養成分は、お弁当の栄養成分値に含まれております。 </p>
        
        <h5>＜1袋あたり＞ </h5>
        <h6>関東</h6>
        <ul>
          <li>お弁当用ドレッシング：26kcal／0.2ｇ／2.4ｇ／1ｇ／107ｍｇ／0.3ｇ </li>
          <li>お弁当用ドレッシング：26kcal／0.2ｇ／2.4ｇ／1ｇ／107ｍｇ／0.3ｇ </li>
          <li>お弁当用ドレッシング：26kcal／0.2ｇ／2.4ｇ／1ｇ／107ｍｇ／0.3ｇ </li>
        </ul>
      </div>
    </div>

    <div class="allergen">
    <h4 class="title">アレルゲン表示 ＜法令で規定する特定原材料7品目＞</h4>
        <ul class="seibun__list grid">
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">卵</span>
            <span class="seibun__num">○</span>
          </li>
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">乳成分</span>
            <span class="seibun__num">-</span>
          </li>
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">卵</span>
            <span class="seibun__num">○</span>
          </li>
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">乳成分</span>
            <span class="seibun__num">-</span>
          </li>
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">卵</span>
            <span class="seibun__num">○</span>
          </li>
          <li class="item col-2 col-4-md col-6-sm align-center">
            <img src="https://placehold.jp/70x62.png" alt="">
            <span class="seibun__name">乳成分</span>
            <span class="seibun__num">-</span>
          </li>
        </ul>

        <span>商品の原材料の他に、卵・乳成分・小麦などのアレルギー物質を含む食材を同じ調理場で調理しております。</span>
        <ul>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
          <li>アレルゲン検索は、ウェブサイトのメニューに掲載されている商品にのみ対応しています。</li>
        </ul>
    </div>

    <div class="hinmoku">
    <h4 class="title">特定原材料に準じる20品目</h4>
    <p>牛肉・ 大豆・ 鶏肉・ 豚肉・ りんご・ ゼラチン・ ごま</p>

    </div>

    <div class="seasoning_allergen">
    <h4 class="title">別添調味料のアレルゲンについて</h4>
    <p>以下の別添調味料のアレルゲンは商品別のアレルゲン表記には含まれておりません。 <br>
＜お弁当用ドレッシング＞卵・乳成分・小麦・大豆・豚肉・りんご・ごま <br>
＜タルタルソース＞卵・乳成分・大豆 <br>
＜中濃ソース＞小麦・大豆・りんご <br>
＜醤油＞小麦・大豆 <br>
＜とんかつソース＞小麦・大豆・りんご <br>
＜餃子のタレ＞小麦・大豆・ごま <br>
＜辛子＞なし <br>
＜うな重のたれ＞小麦・大豆 <br>
＜うどんつゆ＞小麦・大豆 <br>
＜坦々うどんのたれ＞小麦・大豆・ごま <br>
＜5種果汁ポン酢＞小麦・大豆・りんご</p>
    </div>

    <nav class="align-center">
      <span>メニュー検索・一覧に戻る</span>
    </nav>
    </div>
  </div>
</section>
<?php endwhile; ?>
	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main"> -->

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation();

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

	<!-- 	</main> #main
	</div>#primary-->

<?php
//get_sidebar();
get_footer("origin");
