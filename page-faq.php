<?php
/*
  Template Name: FAQ Page
 */

  // Custom Fields
  $question_01 = get_post_meta(13, 'question_01', true);
  $answer_01 = get_post_meta(13, 'answer_01', true);
  $question_02 = get_post_meta(13, 'question_02', true);
  $answer_02 = get_post_meta(13, 'answer_02', true);
  $question_03 = get_post_meta(13, 'question_03', true);
  $answer_03 = get_post_meta(13, 'answer_03', true);
  $question_04 = get_post_meta(13, 'question_04', true);
  $answer_04 = get_post_meta(13, 'answer_04', true);
  $question_05 = get_post_meta(13, 'question_05', true);
  $answer_05 = get_post_meta(13, 'answer_05', true);
  $question_06 = get_post_meta(13, 'question_06', true);
  $answer_06 = get_post_meta(13, 'answer_06', true);
  $question_07 = get_post_meta(13, 'question_07', true);
  $answer_07 = get_post_meta(13, 'answer_07', true);
  $question_08 = get_post_meta(13, 'question_08', true);
  $answer_08 = get_post_meta(13, 'answer_08', true);
get_header('else');
?>
<!-- Top area -->
	<div class="else__wrap">
 	<section id="hoge" class="top-else">
		<div class="subtitle">
			<h1 class="subtitle__txt--big">FAQ</h1>
			<p class="subtitle__txt">〜 よくある質問を集めました 〜</p>

		</div>
 	</section>
 	<section class="faq">
    <div class="faq__ex">
      <div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/faq.svg" alt="user icon">
      </div>
      <div>
        <p>EGchatに関してご不明な点、気になることなど<br>ございましたら右下のチャットツールから気軽にお問い合わせください！</p>
      </div>
    </div>
      <div class="faq__wrap">
      <dl>
        <dt><?php echo $question_01; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_01; ?></dt></p>
        </dd>
        <dt><?php echo $question_02; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_02; ?></dt></p>
        </dd>
        <dt><?php echo $question_03; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_03; ?></dt></p>
        </dd>
        <dt><?php echo $question_04; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_04; ?></dt></p>
        </dd>
      </dl>

      <dl>
        <dt><?php echo $question_05; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_05; ?></dt></p>
        </dd>
        <dt><?php echo $question_06; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_06; ?></dt></p>
        </dd>
        <dt><?php echo $question_07; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_07; ?></dt></p>
        </dd>
        <dt><?php echo $question_08; ?></dt>
        <dd class="hide">
          <p>回答</p>
          <p><?php echo $answer_08; ?></dt></p>
        </dd>
      </dl>
    </div>
  </section>
  <!-- Free trial area -->
  <?php get_template_part('template-parts/content','trial'); ?>
  <?php get_template_part('template-parts/content','browser'); ?>
  </div>
<?php get_footer(); ?>