<?php get_header(); ?>
        <section class="navbar-fixed">
        <nav class="nav-category">
            <div class="nav-wrapper">
                <a href="<?php bloginfo('url'); ?>" class="brand-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="tixeeboxロゴ">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="nav-a right hide-on-med-and-down">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop">TOP</a></li>
                    <li><a class="fn-pageScroll" href="#link-schedule">チケット受け取り開始日時</a></li>
                    <li><a class="fn-pageScroll" href="#link-receive">チケット受け取り方法</a></li>
                    <li><a class="fn-pageScroll" href="#link-contact">お問い合わせ</a></li>
                    <li><a href="https://tixeebox.tv/lp/how-to/" target="_blank">tixeeboxご利用方法</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="fn-pageScroll" href="#fn-hesiveTop">TOP</a></li>
                    <li><a class="fn-pageScroll" href="#link-schedule">チケット受け取り開始日時</a></li>
                    <li><a class="fn-pageScroll" href="#link-receive">チケット受け取り方法</a></li>
                    <li><a class="fn-pageScroll" href="#link-contact">お問い合わせ</a></li>
                    <li><a href="https://tixeebox.tv/lp/how-to/" target="_blank">tixeeboxご利用方法</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container">
        <section class="row">
            <h1 class="heading-a u-mt30 u-mb30 u-text-center">お問い合わせ</h1>
            <p>法人のお客様のお問合せは必要事項をご記入の上、下記のフォームからお問合せください。</p>
            <p>
            詳細なご相談内容については、必要に応じて別途NDA（機密保持契約）の締結をさせていただきます。<br>
            弊社は皆様のプライバシーを尊重し、個人情報を保護するために細心の注意を払っております。<br>
            <span class="alert">*印の入力は必須です。</span>
            </p>
        </section>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <label>お問合せ種別</label>
                        <ul class="c-list-cols">
                            <li>
                                <input type="checkbox" class="filled-in" id="form-type-1" />
                                <label for="form-type-1">tixeeboxチケットの導入</label>
                            </li>
                            <li>
                                <input type="checkbox" class="filled-in" id="form-type-2" />
                                <label for="form-type-2">弊社への取材</label>
                            </li>
                            <li>
                                <input type="checkbox" class="filled-in" id="form-type-3" />
                                <label for="form-type-3">弊社との業務提携</label>
                            </li>
                            <li>
                                <input type="checkbox" class="filled-in" id="form-type-4" />
                                <label for="form-type-4">その他</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="株式会社カンパニー" id="form-company-name" type="text" class="validate">
                        <label for="form-company-name">会社名</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="山田" id="form-first_name" type="text" class="validate">
                        <label for="form-first_name">お名前（姓）</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="太郎" id="form-last_name" type="text" class="validate">
                        <label for="form-last_name">お名前（名）</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="form-email" type="email" class="validate">
                        <label for="form-email">メールアドレス</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="expamle@mail.com" id="form-email-confirm" type="email" class="validate">
                        <label for="form-email-confirm">メールアドレス(確認)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="03-1234-5678" id="form-tel" type="tel" class="validate">
                        <label for="form-tel">電話番号</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="http://www.website.com" id="form-web-url" type="text" class="validate">
                        <label for="form-web-url">貴社ウェブサイトURL</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="ご入力ください" id="form-contact-title" type="text" class="validate">
                        <label for="form-contact-title">お問い合わせ件名</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea placeholder="ご入力ください" id="form-contact-content" class="materialize-textarea"></textarea>
                        <label for="form-contact-content">お問い合わせ内容</label>
                    </div>
                </div>
            </form>
        </div>
        <section class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </section>

    </div>
    <?php get_footer(); ?>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    </body>
</html>