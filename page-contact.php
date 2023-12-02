<?php get_header(); ?>

<div class="page_mv">
    <div class="page_mv_container">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_mv.jpg" alt="" class="">
        </figure>
        <div class="ttl_wrap">
            <h2 class="sec_ttl">
                <div><span>お問い合わせ</span></div>
                <strong>CONTACT</strong>
            </h2>
        </div>
    </div>
    <!-- //page_mv_container -->
</div>
<!-- //page_mv -->

<div class="contact_wrap">
    <p>
        青久商店株式会社にご興味を<br class="sp">持っていただきありがとうございます。<br>
        下記フォームまたはお電話にて、<br class="sp">お気軽にお問い合わせください。
    </p>
    <?php echo do_shortcode('[contact-form-7 id="814" title="青久商店様お問い合わせフォーム"]'); ?>
    <!-- <div class="contact_container">
        <dl>
            <dt>お名前　<span>※必須</span></dt>
            <dd>[text* namae placeholder "例）山田　太郎"]</dd>
        </dl>
        <dl>
            <dt>電話番号　<span>※必須</span></dt>
            <dd>[tel* tel placeholder "例）09012345678"]</dd>
        </dl>
        <dl>
            <dt>メールアドレス　<span>※必須</span></dt>
            <dd>[email* mail-address "例）aaaaa@bbbbb.com"]</dd>
        </dl>
        <dl>
            <dt>郵便番号</dt>
            <dd class="flex"><span>〒</span>　[text address placeholder "例）0123456"]</dd>
        </dl>
        <dl>
            <dt>ご住所</dt>
            <dd>
            [select prefecture "北海道" "青森県" "岩手県" "宮城県" "秋田県" "山形県" "福島県" "茨城県" "栃木県" "群馬県" "埼玉県" "千葉県" "東京都" "神奈川県" "新潟県" "富山県" "石川県" "福井県" "山梨県" "長野県" "岐阜県" "静岡県" "愛知県" "三重県" "滋賀県" "京都府" "大阪府" "兵庫県" "奈良県" "和歌山県" "鳥取県" "島根県" "岡山県" "広島県" "山口県" "徳島県" "香川県" "愛媛県" "高知県" "福岡県" "佐賀県" "長崎県" "熊本県" "大分県" "宮崎県" "鹿児島県" "沖縄県"]
            [text city placeholder "市区町村"]
            [text banchi placeholder "番地・建物名"]
            </dd>
        </dl>
        <dl>
            <dt>お問い合わせ内容</dt>
            <dd>[textarea naiyo placeholder "ご質問・お問い合わせ内容をご記入ください。"]</dd>
        </dl>
        <div class="policy">
            <span>個人情報保護方針</span>
            <div>
                <p>
                    1．個人情報の取得・利用部門<br>
                    皆様からこちらのフォームにていただく個人情報は「法人名・部署名・氏名・電話番号・メールアドレス等」であり、青久商店株式会社(以下当社と呼ぶ)が扱い、目的の範囲内でのみ利用します。個人情報は個人情報保護に関する法令・諸規則に基づき管理いたします。個人情報への不正アクセスまたは紛失、破壊、改ざん、漏洩などのリスクに対して、技術的に必要な安全対策を継続的に講ずるよう努めています。また、個人情報取扱に関する社員教育を継続的に実施し、厳重な情報管理・運営に努めております。<br><br>

                    2．利用目的<br>
                    問い合わせ・応募等に対するご返答の為<br><br>

                    3．個人情報の第三者提供について<br>
                    フォームよりご連絡いただいたご本人様から事前の同意・承諾を得ない限り、原則として個人情報を第三者に提供することはありません。ただし、次に示すいずれかに該当する場合は、ご本人様の同意を得ることなく利用することがあります。<br><br>

                    a)法令に基づく場合<br>
                    b)人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合<br>
                    c)公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき<br>
                    d)国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることによって当該事務の遂行に支障を及ぼすおそれがあるとき<br><br>

                    4．個人情報の委託について<br>
                    個人情報について、当法人の個人情報保護管理体制が一定の水準に達していると認めた情報処理業者などに預託（委託）する場合があります。その場合には当社の責任で適切な委託先を選択し、個人情報の取扱に関する契約を締結した上で委託します。<br><br>

                    5．個人情報の開示請求・訂正・削除・利用停止等の問い合わせについて<br>
                    当社が保有するご本人様の個人情報について開示請求・訂正・削除・個人情報の委託等の利用停止を希望される際は、担当者にお申し出ください。ご本人様からの請求であることが確認できた場合、すみやかに開示・訂正・削除・利用の停止をいたします。<br><br>

                    【管理者及び連絡先】<br>
                    個人情報お問合せ窓口 Tel : ●●●-●●●-●●●●<br>
                    個人情報取扱責任者宛<br><br>

                    6．個人情報を与えることの任意性について<br>
                    ご自身の個人情報について当社に提供することについては任意です。ただし、個人情報を与えなかった場合、当社は前途の利用目的を遂行することができなくなり、当社サービスを利用することができなくなります。

                </p>
            </div>
            <span>上記をお読みいただき、同意していただける場合は「同意する」にチェックを入れてください。 <span>*</span></span>
            [acceptance acceptance-181] 同意する [/acceptance]
        </div>

        <div class="send_message">
            <p>
                送信後、確認のための自動返信メールを<br class="sp">お送りしております。<br>
                メールの受信拒否・ドメイン指定受信・<br class="sp">迷惑メール防止機能などを<br class="sp">設定している場合は<br>
                受信ができない場合がありますので<br class="sp">ご注意ください。
            </p>

            [submit class:send "確認する"]
        </div>
    </div> -->
    <!-- //contact_container -->
    <div class="contact_tel">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_tel.svg" alt="" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_tel_sp.svg" alt="" class="sp">
    </div>
</div>



<?php get_footer(); ?>