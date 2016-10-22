<!-- News area -->
<section class="news">
<div class="news__wrap">
  <div class="headline">
    <h3 class="headline__txt--big">ニュースリリース</h3>
    <p class="headline__txt">商品のアップデートなどの新着情報をお届けします。</p>
  </div>
  <div class="news-item">
    <ul>
        <?php
           $newslist = get_posts( array(
            'posts_per_page' => 4 //取得記事件数
          ));
            foreach( $newslist as $post ):
            setup_postdata( $post );
        ?>
      <li>
        <div class="news-item-left news-item-left__txt--white">
          <p class="news-item-left__txt--big"><?php the_time('jS'); ?></p>
          <p class="news-item-left__txt"><?php echo get_post_time('F'); ?></p>
          <p class="news-item-left__txt"><?php the_time('Y'); ?></p>
        </div>
        <div class="news-item-right">
          <a href="<?php the_permalink(); ?>">
            <p><?php the_title(); ?></p>
          </a>
        </div>
      </li>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
      <!-- <li>
        <div class="news-item-left news-item-left__txt--white">
          <p class="news-item-left__txt--big">30</p>
          <p class="news-item-left__txt">January</p>
          <p class="news-item-left__txt">2016</p>
        </div>
        <div class="news-item-right">
          <p>CRM連携システムに新しいシステムが加わりました。
          CRM連携システムに新しいシステムが加わりました。CRM連携システムに新しいシステムが加わりました。</p>
        </div>
      </li>
      <li>
        <div class="news-item-left news-item-left__txt--white">
          <p class="news-item-left__txt--big">30</p>
          <p class="news-item-left__txt">December</p>
          <p class="news-item-left__txt">2016</p>
        </div>
        <div class="news-item-right">
          <p>CRM連携システムに新しいシステムが加わりました。</p>
        </div>
      </li>
      <li>
        <div class="news-item-left news-item-left__txt--white">
          <p class="news-item-left__txt--big">30</p>
          <p class="news-item-left__txt">November</p>
          <p class="news-item-left__txt">2016</p>
        </div>
        <div class="news-item-right">
          <p>CRM連携システムに新しいシステムが加わりました。</p>
        </div>
      </li> -->
    </ul>
  </div>
</div>
</section>