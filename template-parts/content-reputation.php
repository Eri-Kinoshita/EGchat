
<!-- Custom Fields -->
<?php
$customer_name01 = get_post_meta(4, 'customer_name01', true);
$customer_voice01 = get_post_meta(4, 'customer_voice01', true);
$customer_name02 = get_post_meta(4, 'customer_name02', true);
$customer_voice02 = get_post_meta(4, 'customer_voice02', true);
$customer_name03 = get_post_meta(4, 'customer_name03', true);
$customer_voice03 = get_post_meta(4, 'customer_voice03', true);
$customer_name04 = get_post_meta(4, 'customer_name04', true);
$customer_voice04 = get_post_meta(4, 'customer_voice04', true);
$customer_name05 = get_post_meta(4, 'customer_name05', true);
$customer_voice05 = get_post_meta(4, 'customer_voice05', true);
get_header();
?>

<!-- Customer voice area -->
<section class="rep">
	<div class="rep__wrap">
	  <div class="headline headline__txt--white">
	    <h3 class="headline__txt--big">お客様の声</h3>
	    <p class="headline__txt">Customer voice</p>
	  </div>
	  <div class="gallery-wrap">
	    <ul class="gallery clearfix">
	      <li class="gallery__item">
	        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rep_basic.png" alt="customer picture">
	        <div class="slide__content">
		        <p class="slide__content__title"><?php echo $customer_name01; ?></p>
		        <p class="slide__content__txt"><?php echo $customer_voice01; ?></p>
		        <img class="slide__content__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/customer-pic01.png" alt="customer picture">
	        </div>
	      </li>
	      <li class="gallery__item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rep_basic.png" alt="customer picture">
	        <div class="slide__content">
	        <p class="slide__content__title"><?php echo $customer_name02; ?></p><p class="slide__content__txt"><?php echo $customer_voice02; ?>
	        </p><img class="slide__content__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/customer-pic02.png" alt="customer picture"></div>
	      </li>
	      <li class="gallery__item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rep_basic.png" alt="customer picture">
	        <div class="slide__content">
	        <p class="slide__content__title"><?php echo $customer_name03; ?></p><p class="slide__content__txt"><?php echo $customer_voice03; ?>
	        </p><img class="slide__content__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/customer-pic03.png" alt="customer picture"></div>
	      </li>
	      <li class="gallery__item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rep_basic.png" alt="customer picture">
	        <div class="slide__content">
	        <p class="slide__content__title"><?php echo $customer_name04; ?></p><p class="slide__content__txt"><?php echo $customer_voice04; ?>
	        </p><img class="slide__content__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/customer-pic04.png" alt="customer picture"></div>
	      </li>
	      <li class="gallery__item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rep_basic.png" alt="customer picture">
	        <div class="slide__content">
	        <p class="slide__content__title"><?php echo $customer_name05; ?></p><p class="slide__content__txt"><?php echo $customer_voice05; ?>
	        </p><img class="slide__content__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/customer-pic05.png" alt="customer picture"></div>
	      </li>
	    </ul>
	    <div class="gallery__controls">
	      <div href="#" class="gallery__controls-prev">
	          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prev.png" alt="previous button" />
	      </div>
	      <div href="#" class="gallery__controls-next">
	          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/next.png" alt="next button" />
	      </div>
	    </div> <!-- .gallery__controls -->
	  </div> <!-- .gallery-wrap -->
	  <div class="gallery__controls-pc">
      <div href="#" class="gallery__controls-prev">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prev.png" alt="previous button" />
      </div>
      <div href="#" class="gallery__controls-next">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/next.png" alt="next button" />
      </div>
    </div> <!-- .gallery__controls-pc -->
	</div>
</section>