<?php
/*
  Template Name: Price Page
 */

  // Custom Fields
  $plan3 = get_post_meta(9, '3plan', true);
  $plan6 = get_post_meta(9, '6plan', true);
  $plan12 = get_post_meta(9, '12plan', true);
get_header('else');
?>
<!-- Top area -->
 	<section id="hoge" class="top-else">
		<div class="subtitle">
			<h1 class="subtitle__txt--big">Price</h1>
			<p class="subtitle__txt">〜 初期費用0円、3ヶ月プランからご用意しています 〜</p>
		</div>
 	</section>
 	<section class="pricing">
    <div class="pricing__list__wrap">
      <ul class="pricing__list pricing__list__txt">
        <li>
          <h3 class="pricing__list__txt--mid">3ヶ月 PALN</h3>
          <img class="pricing__list__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/price01.svg" alt="price icon">
          <h1 class="pricing__list__txt--big"><?php echo $plan3; ?><span class="pricing__list__txt--sm">/月 1D</<span></h1>
          <p class="pricing__list__txt--ex"><i class="fa fa-check" aria-hidden="true"></i>全機能込み</p>
        </li>
        <li>
          <h3 class="pricing__list__txt--mid">6ヶ月 PALN</h3>
          <img class="pricing__list__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/price02.svg" alt="price icon">
          <h1 class="pricing__list__txt--big"><?php echo $plan6; ?><span class="pricing__list__txt--sm">/月 1D</<span></h1>
          <p class="pricing__list__txt--ex"><i class="fa fa-check" aria-hidden="true"></i>全機能込み</p>
        </li>
         <li>
          <h3 class="pricing__list__txt--mid">12ヶ月 PALN</h3>
          <img class="pricing__list__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/price03.svg" alt="price icon">
          <h1 class="pricing__list__txt--big"><?php echo $plan12; ?><span class="pricing__list__txt--sm">/月 1D</<span></h1>
          <p class="pricing__list__txt--ex"><i class="fa fa-check" aria-hidden="true"></i>全機能込み</p>
        </li>
      </ul>
    </div>
    <div class="pricing__list__info">
      <p class="pricing__list__txt--ex"><i class="fa fa-asterisk" aria-hidden="true"></i> 3ヶ月加入プランからご用意しています。各プランで、月々のお支払い金額が異なります。「最長コース12ヶ月プラン」ご利用が一番お得なプランとなっております。全てのプランにて、EGchat全機能をご利用いただけます。<br></p>
      <a a href="<?php echo get_permalink(63); ?>" id="btnTrial" class="btn-top btn-top--yellow"><i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>  無料トライアルお申込み  <i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
   </div>
   </div>
  </section>
  <?php get_template_part('template-parts/content','browser'); ?>
  <?php get_footer(); ?>