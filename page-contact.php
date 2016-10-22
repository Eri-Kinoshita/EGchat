<?php
/*
  Template Name: About Page
*/

get_header('else');
?>
<!-- Top area -->
	<div class="else__wrap">
 	  <section class="top-else--enclose">
      <div class="title-sub">
        <div class="title-sub__img">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/pc-enclosure.svg" alt="gradient enclosure">
        </div>
        <div class="title-sub__wrap title-sub__txt">
          <h1 class="title-sub__txt--big">EGchatを始めましょう！</h1>
          <p>下記入力後、登録いただいたアドレスにメールが届きます。</p>
        </div>
      <div>
    </section>
    <!-- PRICE Area -->
    <section class="contact">
      <div>
        <form class="contact-form" action="contact_submit" method="POST" role="form">
          <div class="contact-form__wrap">
            <input type="text" name="name" placeholder="Name"></input>
          </div>
          <div class="contact-form__wrap">
            <input type="tel" name="phone" placeholder="Phone Number"></input>
          </div>
          <div class="contact-form__wrap">
            <input type="email" name="email" placeholder="Email"></input>
          </div>
          <div class="contact-form__wrap">
            <input type="password" name="emapasswordil" placeholder="Password"></input>
          </div>
        </form>
      </div>
      <div class="contact__btn">
        <button type="submit">送信</button>
      </div>
    </section>
  </div>

<?php get_footer(); ?>