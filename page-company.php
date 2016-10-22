<?php
/*
  Template Name: Company Page
*/

  // Custom Fields
  $company_name = get_post_meta(15, 'company_name', true);
  $address = get_post_meta(15, 'address', true);
  $tel = get_post_meta(15, 'tel', true);
  $establishment = get_post_meta(15, 'establishment', true);
  $representative = get_post_meta(15, 'representative', true);
  $capital = get_post_meta(15, 'capital', true);
  $business = get_post_meta(15, 'business', true);
  $deal = get_post_meta(15, 'deal', true);
get_header('else');
?>
<!-- Top area -->
	<div class="else__wrap">
 	<section id="hoge" class="top-else">
		<div class="subtitle">
			<h1 class="subtitle__txt--big">About us</h1>
			<p class="subtitle__txt">〜 会社概要 〜</p>
		</div>
 	</section>
	<!-- Introdunct all function -->
        <section class="company">
          <div class="company__catch">
            <p>EGChatは、VIDEO・VOICEチャットサポートシステムを主サービスとする事業者です。<br>テクニカルな知識、カスタマーサポートセンターとしての経験をもとにお客様のビジネスを次のステージへと導きます。<br>オンライン上にて売上向上を目的とするすべての人々をサポートします。</p>
            <button class="btn-more" type="submit" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>';">EGChatをもっと知る</button>
          </div>
          <div class="company__img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/con-bg.svg" alt="background image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/company.svg" alt="background image">
          </div>
        </section>
        <section class="info">
          <table>
            <tbody>
              <tr>
                <th>社名</th>
                <td><?php echo $company_name; ?></td>
              </tr>
              <tr>
                <th>本社</th>
                <td><?php echo $address; ?></td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td><?php echo $tel; ?></td>
              </tr>
              <tr>
                <th>設立</th>
                <td><?php echo $establishment; ?></td>
              </tr>
              <tr>
                <th>代表取締役</th>
                <td><?php echo $representative; ?></td>
              </tr>
              <tr>
                <th>資本金</th>
                <td><?php echo $capital; ?></td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td><?php echo $business; ?></td>
              </tr>
              <tr>
                <th>主要取引会社</th>
                <td><?php echo $deal; ?></td>
              </tr>
            </tbody>
          </table>
        </section>
         <!-- Free trial area -->
        <?php get_template_part('template-parts/content','trial'); ?>
        <?php get_template_part('template-parts/content','browser'); ?>
      </div>
<?php get_footer(); ?>