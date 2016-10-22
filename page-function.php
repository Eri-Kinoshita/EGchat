<?php
/*
  Template Name: Function Page
*/
get_header('else');
?>
<!-- Top area -->
	      <div class="else__wrap">
        <section id="hoge" class="top-else">
          <div class="subtitle">
            <h1 class="subtitle__txt--big">Function</h1>
            <p class="subtitle__txt">〜 EGchat全ての機能を紹介 〜</p>
          </div>
        </section>
        <!-- Introdunct all function -->
        <section class="function-list">
          <div class="function-list__title">
            <h1 class="title-sub__txt">// 機能一覧</h1>
          </div>
          <div>
            <ul class="function-list__wrap">
              <li>
                <a class="scrollLink" href="#chat"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/earth.svg" alt="chat icon">ビデオ・音声チャット</a>
              </li>
              <li><a class="scrollLink" href="#co-broeswe"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/share.svg" alt="chat icon">ブラウザ共有</a>
              </li>
              <li><a class="scrollLink" href="#document"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/document02.svg" alt="chat icon">ドキュメント取得</a>
              </li>
              <li><a class="scrollLink" href="#input"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/representer.svg" alt="chat icon">音声入力</a>
              </li>
              <li><a class="scrollLink" href="#file-send"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/link.svg" alt="chat icon">ファイル送受信</a>
              </li>
              <li><a class="scrollLink" href="#push"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/rocket.svg" alt="chat icon">プッシュサポート</a>
              </li>
            </ul>
            <ul class="function-list__wrap">
              <li><a class="scrollLink" href="#analyze"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/analistics.svg" alt="chat icon">統計機能</a></li>
              <li><a class="scrollLink" href="#multiple"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/timer.svg" alt="chat icon">お客様同時対応</a></li>
              <li><a class="scrollLink" href="#crm"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/construction.svg" alt="chat icon">CRM連携</a></li>
              <li><a class="scrollLink" href="#mining"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/various.svg" alt="chat icon">お客様情報収集</a></li>
              <li><a class="scrollLink" href="#template"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/template.svg" alt="chat icon">テンプレート登録</a></li>
              <li><a class="scrollLink" href="#inquire"><img class="function-list__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/check.svg" alt="chat icon">お問い合わせ状況表示</a></li>
            </ul>
          </div>
        </section>
        <section class="function">
          <div id="chat" class="chat two-box function__wrap">
            <div class="function__wrap--blue">
              <div class="two-box__title">
                <div>
                  <h2 class="function__title">ビデオ・音声チャット</h2><p>Live Video and Voice Call</p>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/earth.svg" alt="chat icon">
                </div>
              </div><!-- end of .chat__title -->
              <div class="two-box__content">
                <div>
                  <p>WebRTCとFlash技術をを用いたビデオ・音声チャット機能が搭載。</p>
                  <p>テキストチャットのみならビデオ、音声でのチャット利用により、様々な企業のビジネス成長に役立っています。</p>
                  <ul class="chat__ex">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>インストールいらず、数分の簡単操作で即座に導入。</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>遠方にいるビジネスチームメンバーとのビデオ会議に使用。<br>レコーディング機能により録音された会話履歴は、メモ・議事録の代わりに。</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                    お客様が顔を写すことに抵抗がある場合は、こちらのみの表示にて対応が可能。</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                    オンラインショッピングを、対面接客でさらに楽しいものに。</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                    オンラインショッッピングでのお客様の購入決定を促すコミュニケーションを。</li>
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>路コーディング機能により録音された、お客様とのやり取りを。</li>
                  </ul>
                </div>
                <img class="chat__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/worker.svg" alt="worker icon">
              </div><!-- end of .chat__content -->
            </div>
          </div><!-- end of #chat -->

          <div id="co-broeswe" class="one-box function__wrap">
            <div class="function__wrap--all function__wrap--green one-box__wrap">
              <div class="one-box__wrap-left">
                <h2 class="function__title">ブラウザ共有</h2><p>Co-Brawing Function</p>
                <p class="function__ex">
                スクリーンシェアのみならずブラウザ共有機能を搭載。
                ブラウザへの拡張機能やプラグインのインストールは一切不要で、
                EGchatが提供する　Widget(リンク)をお客様と共有するだけで利用することができる、簡単設定でお客様への負担が少ないのが魅力です。
                <br>お客様が閲覧しているインターネットの画面、マウスの動きを
                リアルタイムで確認できるため、ホームページ内を案内する際の両者のストレスを削減につながります。</p>
              </div>
              <div class="one-box__wrap-right">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/co-working.svg" alt="two computer image">
              </div>
            </div>
          </div><!-- end of #co-broeswe -->

          <div id="document" class="document two-box function__wrap">
            <div class="function__wrap--blue">
              <div class="document__title">
                <h2 class="function__title">ドキュメント取得機能</h2><p>File Sharing</p>
                <p class="function__ex">全ての形式のファイルを、お客様を簡単にシェアできる機能です。ドキュメント所得機能は保存する際に暗号化されるため、機密情報が含まれるドキュメントでも安心してオンライン上にて共有頂けます。<br>またクラウド上にて保存されるため、場所を問わず、あらゆるデバイスからアクセス可能です。
                電子署名が必要な取引で重宝されています。</p>
                <ul>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>セキュリティ◎電子証明に</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>重いファイルもらくらく</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>クラウドサービス</li>
                </ul>
                <div class="document__title__img">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/document.svg" alt="">
                  <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/measure.svg" alt=""> -->
                  <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/global.svg" alt=""> -->
                </div>
              </div>
              <div class="document__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/document-recieve.png" alt="">
              </div>
            </div>
          </div><!-- end of #document -->

          <div id="input" class="input function__wrap two-box">
            <div class="function__wrap--green">
              <div class="two-box__title">
                <h2 class="function__title">音声入力機能</h2>
                <p>Speech to Text</p>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/document.svg" alt="document input system image">
              </div>
              <div class="two-box__content">
              <div>
                <p>人の声を読み取ってテキストに即座に自動変換してくれる音声入力機能搭載。<br>賢く量産的に仕事をすることを助けます。</p>
                <ul>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>今までのテキストのみでのチャット対応を、音声入力機能を使用し仕事スピードを加速しましょう。タイピングが苦手な方でも、スムーズに対応が可能。</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>音声入力機能では複数のチャット同時対応が可能となっております。
                  マルチタスクを効率的に処理しましょう。</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>各言語の構造や文法の情報を組み込んだ人工知能を使用しているため、他言語にも対応。海外のお客様との会話も安心して進められます。</li>
                </ul>
                <img src="" alt="">
              </div>
              </div>
            </div>
          </div><!-- end of #input -->
          <div id="multiple" class="function__wrap">
            <div class="function__wrap--blue multiple__wrap">
              <div class="multiple__title function__wrap--all">
                <h2 class="function__title">お客様同時対応<p>For Multitasking</p></h2>
                <p class="function__ex">同時対応中は、画面内のタブで切り替えが可能。視覚的に取り扱いがしやすく、対応数も１〜無制限の間で設定可能。お客様を待たせることなく、業務を効率的に進めます。</p>
                <div class="multiple__icon">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/same-res.svg" alt="multiple work icon">
                </div>
              </div>
              <div class="multiple__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/multi-task.png" alt="">
              </div>
            </div>
          </div><!-- end of #document -->

          <div id="template" class="one-box template function__wrap">
            <div class="one-box__wrap function__wrap--green function__wrap--all">
              <div class="template__wrap-left">
                <div class="template__wrap-left__title">
                  <div>
                    <h2 class="function__title">チャットテンプレート機能</h2><p>Text chat with making template function</p>
                  </div>
                  <div class="template__wrap-left__title__img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/template.svg" alt="chat template catch image"></div>
                </div>
                  <p class="function__ex">頻繁に使う定型文を登録しておくと、テキスト入力中に＠マークを入力することで定型文の一覧が表示されます。カスタマーサポートセンターでは複数のお客様から似た内容の質問が多くあり、各担当者が考え、一からメール文を作成することは大変時間のロスになります。よく使うフレーズを登録しておき、ご質問への返信時間を削り、よりたくさんのお客様と繋がりましょう。</p>
              </div>
              <div class="template__wrap-right template__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/template-ex.png" alt="for explain of template system">
              </div>
            </div>
          </div><!-- end of #template -->

          <div id="push" class="push function__wrap">
            <div class="function__wrap--blue function__wrap--all">
              <div class="push__wrap-left">
                <h2 class="function__title">プッシュサポート機能</h2><p>Push Support</p>
                <img class="push__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/push-support.svg" alt="handshake image">
                <img class="push__icon-sm" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/push-support_sm.svg" alt="handshake image">
              </div>
              <div class="push__wrap-right">
                <p class="function__ex">自動呼びかけの機能です。訪問回数が多い方に価格表サイトの通知、滞在時間が長い方にお困りごとのヒアリングなど、お客様のシーン別にこちらからチャットでの呼びかけがが可能で、柔軟にお客様へ提案できます。<br>さらに、オペレータから直接メッセージを送ることも可能。<br>
                アップルセル、クロスセルで売上をUPさせましょう！</p>
                <div class="push__img">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/inquire.png" alt="image for push support explaination">
                </div>
              </div>
            </div>
          </div><!-- end of #push -->
          <div id="file-send" class="file-send function__wrap">
            <div class="function__wrap--green function__wrap--all file-send__wrap">
              <div class="file-send__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/link.svg" alt="file icon">
              </div>
              <div class="file-send__title">
                <h2 class="function__title">ファイル送受信</h2>
                <p class="function__ex">画像ファイルやPDFファイルはもちろん、zipファイルの送信も可能。チャットサポートにてお客様対応中にスクリーンショットなどを貼り付けて頂く際に役立ちます。<br>また、URLやメールアドレスは自動的にリンクに置き換えられます。</p>
              </div>
              <div class="file-send__img file-send__img-bg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/zip.svg" alt="zip file icon">
            </div>
            </div>
          </div><!-- end of #file-send -->
          <div id="analyze" class="analyze function__wrap">
            <div class="function__wrap--blue function__wrap--all">
              <div class="analyze__wrap-left">
                <h2 class="function__title">分析機能</h2><p>Analytics</p>
                <img class="analyze__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/bar-graph.svg" alt="handshake image">
              </div>
              <div class="analyze__wrap-right">
                <p class="function__ex">毎月、毎週、毎日、特定期間の対応件数を算出可能。
                満足度評価も打ち出すことが出来る上、
                対応にかかった時間 （ 応答時間、チャット時間　）
                も確認できます。また、プッシュサポート時の効果測定
                問い合わせ内容の傾向、件数の推移も確認でき、
                他の分析ツールを組み込む必要はありません。</p>
                <div class="analyze__img">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/analysis-ex.png" alt="image for analyze support explaination">
                </div>
              </div>
            </div>
          </div><!-- end of #push -->
          <div id="crm" class="crm function__wrap">
            <div class="function__wrap--green">
              <div class="function__wrap--all">
                <h2 class="function__title">CRM連携<p>Extention</p></h2>
                <p class="function__ex">顧客属性や履歴を参照しながら、よりお客様に合わせた高度なサポートを提供してくれるCRMツールとの連携が可能。メジャーなCRMは利用いただけます。</p>
              </div>
              <ul class="crm__icon">
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/salesforce_logo_detail.png" alt=""></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/sugarcrm-vector.jpg" alt=""></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/zendesk.png" alt=""></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/infusionsoftLogo.png" alt=""></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dynamics-crm.png" alt=""></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner2-capsule.png" alt=""></li>
              </ul>
            </div>
          </div><!-- end of #crm -->
          <div id="inquire" class="inquire function__wrap two-box">
            <div class="function__wrap--blue">
              <div class="inquire__title function__wrap--all">
                <h2 class="function__title">リアルタイムでの問い合わせ状況確認<p>Real time statistics</p></h2>
                <p class="function__ex">一覧で現在のお問い合わせ状況の確認が可能。アイコンで、対応の有無の状態もすぐに確認できます。お問合せ担当者の対応状況を把握する事によって、担当者へ均一に割り振ることができ、対応遅延の削減に繋がります。</p>
              </div>
              <div class="inquire__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/inquire-ex.png" alt="screen image for explain this function">
              </div>
              <!-- <div class="two-box__content">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/representer.svg" alt="call center icon">
              </div> -->
            </div>
          </div><!-- end of #inquire -->
          <div id="mining" class="mining function__wrap">
            <div class="function__wrap--green function__wrap--all">
              <div class="mining__wrap-left">
                <h2 class="function__title">お客様時情報収集</h2><p>Storing customer information</p>
                <img class="mining__icon" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon/talking02.svg" alt="handshake image">
              </div>
              <div class="mining__wrap-right">
                <p class="function__ex">チャット投稿前にお客様情報を入力して頂くように設定が可能。また設定により、名前・メールアドレス・電話番号・質問内容といった入力項目の選択が可能となっております。登録済みのお客様は、次回から未入力でも表示可能です。
                データを蓄積して、ビジネスに活用しましょう！</p>
                <div class="mining__img">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mining.png" alt="image for mining support explaination">
                </div>
              </div>
            </div>
          </div><!-- end of #mining --><!-- end of #mining -->
        </section>
        <!-- Free trial area -->
        <?php get_template_part('template-parts/content','trial'); ?>
        <!-- All browser notice -->
        <?php get_template_part('template-parts/content','browser'); ?>
      </div>
<?php get_footer(); ?>