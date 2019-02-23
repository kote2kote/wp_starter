<!--debag code-->
<div id="debag" class="debag" :class="{show : show}">
  <div class="flex pd-t20 pd-b20">
    <div class="col-8">
      <h2 class="h1 d-ib">wordpress cheat sheet</h2>
      <h3 class="h3 d-ib"> - このページの投稿タイプは: <span class="type"><?php echo get_post_type() ?></span></h3>
    </div>
    <div class="col-4 align-right">
      <p class="d-ib" v-html="innerHTML" class="pd-t10"></p>
    </div>
    
  </div>
  
  
  <div class="flex">
    <div class="col">
      <h3 class="h3">テンプレートタグ</h3>
      <table>
        <tr><td>&lt;?php the_time();?&gt;</td><td><?php the_time();?></td></tr>
        <tr><td>&lt;?php the_date();?&gt;</td><td><?php the_date();?></td></tr>
        <tr><td>&lt;?php the_title();?&gt;</td><td><?php the_title();?></td></tr>
        <tr><td>&lt;?php the_content();?&gt;</td><td><?php the_content();?></td></tr>
        <tr><td>&lt;?php the_permalink();?&gt;</td><td><?php the_permalink();?></td></tr>
        <tr><td>&lt;?php the_category();?&gt;</td><td><?php the_category();?></td></tr>
        <tr><td>&lt;?php the_author();?&gt;</td><td><?php the_author();?></td></tr>
        <tr><td>&lt;?php the_tags();?&gt;</td><td><?php the_tags();?></td></tr>
        <tr><td>&lt;?php the_ID();?&gt;</td><td><?php the_ID();?></td></tr>
        <tr><td>&lt;?php posts_nav_link();?&gt;</td><td><?php posts_nav_link();?></td></tr>
        <tr><td>&lt;?php next_post_link();?&gt;</td><td><?php next_post_link();?></td></tr>
        <tr><td>&lt;?php previous_post_link();?&gt;</td><td><?php previous_post_link();?></td></tr>
        <tr><td>&lt;?php the_search_query();?&gt;</td><td><?php the_search_query();?></td></tr>
        <tr><td>&lt;?php trackback_url(display);?&gt;</td><td><?php trackback_url(display);?></td></tr>
        <tr><td>&lt;?php wp_tag_cloud();?&gt;</td><td><?php wp_tag_cloud();?></td></tr>
        <tr><td>&lt;?php get_calendar();?&gt;</td><td><?php get_calendar();?></td></tr>
        <tr><td>&lt;?php wp_get_archives();?&gt;</td><td><?php wp_get_archives();?></td></tr>
      </table>
    </div>
    <div class="col">
    <h3 class="h3">テンプレートタグ(続き)</h3>
    <table>
      <tr><td>&lt;?php wp_list_pages();?&gt;</td><td><?php wp_list_pages();?></td></tr>
      <tr><td>&lt;?php wp_list_categories();?&gt;</td><td><?php wp_list_categories();?></td></tr>
      </table>
    </div>
    <div class="col">
    <h3 class="h3">テンプレートタグ(bloginfo)</h3>
    <table>
        <tr><td>&lt;?php bloginfo('name');?&gt;</td><td><?php bloginfo('name');?></td></tr>
        <tr><td>&lt;?php bloginfo('description');?&gt;</td><td><?php bloginfo('description');?></td></tr>
        <tr><td>&lt;?php bloginfo('url');?&gt;</td><td><?php bloginfo('url');?></td></tr>
        <tr><td>&lt;?php bloginfo('stylesheet_url');?&gt;</td><td><?php bloginfo('stylesheet_url');?></td></tr>
        <tr><td>&lt;?php bloginfo('template_url');?&gt;</td><td><?php bloginfo('template_url');?></td></tr>
        <tr><td>&lt;?php bloginfo('rss2_url');?&gt;</td><td><?php bloginfo('rss2_url');?></td></tr>
        <tr><td>&lt;?php bloginfo('charset');?&gt;</td><td><?php bloginfo('charset');?></td></tr>
        <tr><td>&lt;?php bloginfo('version');?&gt;</td><td><?php bloginfo('version');?></td></tr>
        <tr><td>&lt;?php bloginfo('html_type');?&gt;</td><td><?php bloginfo('html_type');?></td></tr>

        
      </table>

      <h3 class="h3 pd-t20">インクルードタグ</h3>
      <table>
          <tr><td>&lt;?php get_header();?&gt;</td><td>header.phpを読み込む</td></tr>
          <tr><td>&lt;?php get_sidebar();?&gt;</td><td>sidebar.phpを読み込む</td></tr>
          <tr><td>&lt;?php get_footer();?&gt;</td><td>footer.phpを読み込む</td></tr>
          <tr><td>&lt;?php comments_template();?&gt;</td><td>comments.phpを読み込む</td></tr>
          <tr><td>&lt;?php get_search_form();?&gt;</td><td>検索フォームを読み込む</td></tr>
          <tr><td>&lt;?php include( TEMPLATEPATH . '/header2.php' ); ?&gt;</td><td>その他のファイルを読み込む</td></tr>
        </table>

        <h3 class="h3 pd-t20">条件分岐タグ</h3>
      <table>
          <tr><td>&lt;?php is_home();?&gt;</td><td>メインブログページが表示されている場合 → <?php echo is_home();?></td></tr>
          <tr><td>&lt;?php is_front_page();?&gt;</td><td>サイトのフロントページが表示されている場合 → <?php echo is_front_page();?></td></tr>
          <tr><td>&lt;?php is_single();?&gt;</td><td>投稿のページが表示されている場合 → <?php echo is_single();?></td></tr>
          <tr><td>&lt;?php is_page();?&gt;</td><td>固定ページが表示されている場合 → <?php echo is_page();?></td></tr>
          <tr><td>&lt;?php is_singular(); ?&gt;</td><td>投稿または固定ページが表示されている場合 → <?php echo is_singular();?></td></tr>
          <tr><td>&lt;?php is_category();?&gt;</td><td>あるカテゴリーのアーカイブページが表示されている場合 → <?php echo is_category();?></td></tr>
        </table>
        <h3 class="h3 pd-t20">ループ</h3>
        <div>
        &lt;?php if (have_posts()) : ?&gt;<br>
 &lt;?php while (have_posts()) : the_post(); ?&gt;<br>
 //コンテンツを表示<br>
 &lt;?php endwhile; ?&gt;&lt;?php else : ?&gt;<br>
 //コンテンツがない時<br>
 &lt;?php endif; ?&gt;
        </div>

        <h3 class="h3 pd-t20">ナビゲーションメニュー</h3>
        <div>
        //カテゴリーを基準としたナビゲーションメニューの例<br>
&lt;ul id=&quot;nav&quot;&gt;<br>
&#009;&lt;li &lt;?php if(is_home()) { ?&gt; class=&quot;current-cat&quot;&lt;?php } ?&gt;&gt;<br>
&#009;&#009;&lt;a href=&quot;&lt;?php bloginfo(&#039;home&#039;); ?&gt;&quot;&gt;Home&lt;/a&gt;<br>
&#009;&lt;/li&gt;<br>
&#009;&lt;?php wp_list_categories(&#039;title_li=&amp;orderby=id&#039;); ?&gt;<br>
&lt;/ul&gt;<br><br>
//ページを基準としたナビゲーションメニューの例<br>
&lt;ul id=&quot;nav&quot;&gt;<br>
&#009;&lt;li &lt;?php if(is_home()) { ?&gt; class=&quot;current_page_item&quot;&lt;?php } ?&gt;&gt;<br>
&#009;&#009;&lt;a href=&quot;&lt;?php bloginfo(&#039;home&#039;); ?&gt;&quot;&gt;home&lt;/a&gt;<br>
&#009;&lt;/li&gt;<br>
&#009;&lt;?php wp_list_pages(&#039;sort_column=menu_order&amp;depth=1&amp;title_li=&#039;); ?&gt;<br>
 &lt;/ul&gt;
        </div>

        
    </div>
  </div>
</div>
<!--//debag code-->