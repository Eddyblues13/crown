@include('home.header')

<script>
        $('.hamburger__box').click(function () {
            const div = document.querySelector('header');
            disclaimer = document.getElementById("disclaimer-full");
            if (div.classList.contains('mob-menu-active')) {
                disclaimer.style.display = "block";
            } else {
                disclaimer.style.display = "none";
            }
        });

        $(document).mouseup(function (e) {
            var menu = $('.header__mobile-menu');
            const div = document.querySelector('header');
            if (!menu.is(e.target) // The target of the click isn't the container.
                && menu.has(e.target).length === 0 && div.classList.contains('mob-menu-active')) // Nor a child element of the container
            {
                disclaimer = document.getElementById("disclaimer-full");
                if (div.classList.contains('mob-menu-active')) {
                    disclaimer.style.display = "block";
                } else {
                    disclaimer.style.display = "none";
                }
            }
        });

    </script><style type="text/css">
    .main-menu__link{
        color: #000 !important;
    }
</style>

 <main class="main">



        <div id="banner" class="simple-banner style5  " style="background-image: url(storage/app/media/trademarket/faq-banner-tm.png);">

            <div class="container">
                <div class="simple-banner__content">
                    <div class="simple-banner__content-wrap">
                        <div class="simple-banner__title" data-aos="fade-up">
                            <h1>Frequently Asked Questions</h1>
                        </div>

                        <div class="">
                            <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400">
                                <div style="max-width:580px;">

                                    <p>Here you can find answers to the most frequently asked questions from new clients.</p>
                                </div>
                            </div>

                            <div class="simple-banner__image" data-aos="fade-up" data-aos-delay="200">
                                <img src="storage/app/media/trademarket/faq-banner-tm.png" alt="Frequently Asked Questions">
                            </div>







                            <div class="simple-banner__link ">
                                <div class="combined-links">
                                    <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="demo" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__right">Try on Demo</a>


                                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="live" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__left">Start Trading</a>

                                    </div>
                                </div>
                            </div>

                            <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                                <p><span style="color: rgb(239, 239, 239);">* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</span></p>
                            </div>

                        </div>
                    </div>
                </div>






                <div class="simple-banner__content simple-banner__mobile">
                    <div class="simple-banner__content-wrap">
                        <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400">
                            <div style="max-width:580px;">

                                <p>Here you can find answers to the most frequently asked questions from new clients.</p>
                            </div>
                        </div>

                        <!---->
                        <div class="simple-banner__combined-links">
                            <div class="combined-links">
                                <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                    <a data-fancybox data-src="#sign-up-modal" href="javascript:;" class="combined-links__item combined-links__right">Try on Demo</a>


                                    <a data-fancybox data-src="#sign-up-modal" href="javascript:;" class="combined-links__item combined-links__left">Start Trading</a>

                                </div>
                            </div>
                        </div>

                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                            <p><span style="color: rgb(239, 239, 239);">* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</span></p>
                        </div>

                    </div>
                </div>

            </div>

            <div id="banner-particles" class="simple-banner__particles"></div>
        </div>

        <div id="faq" class="faq medium_padding" style="background: #FFFFFF;">
            <div class="container">
                <div class="faq__title title title_center" data-aos="fade-up">
                    <p><span style="font-weight:800;color:#80A9C3;">Financial Trading</span> FAQ</p>
                </div>
                <div class="accordion faq__list" data-aos="fade-up" data-aos-delay="400">
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>1. What trading platforms do you offer?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>We offer <a href="trading/mt4.html"><strong>MetaTrader 4</strong></a> and our exclusive <a href="dualix-trader.html"><strong>Altruisticmarkets Trader</strong></a> platform.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>2. Can I have more than one trading account?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Yes. You can open multiple live or demo trading accounts for following or testing different strategies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>3. What products can I trade?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>We offer many trading instruments that span various asset classes that you can speculate on using a contract for difference. You can trade CFDs on <a href="range-markets/{{url('/forex')}}#/">Forex</a>, <a href="popular-markets/eurusd.html#/">EUR&amp; USD</a>                                    Shares, <a href="range-markets/indices.html#/">Indices</a>, <a href="range-markets/precious-metals.html">Precious Metals</a>, <a href="range-markets/agriculture.html#/">Soft
Commodities</a> and <a href="range-markets/energy-{{url('/product')}}#/">Oil &amp; Gas
Products</a>. Keep in mind that we offer the ability to trade both stocks and CFDs of stocks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>4. Can I purchase any investments or securities from Altruisticmarkets?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">We do not offer any securities apart from stocks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>5. Are you regulated?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Yes. Altruisticmarkets is regulated by the Cyprus Securities Exchange Commission with license number 208/13 .</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>6. What is the maximum leverage I can trade with?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>The amount of leverage that Altruisticmarkets provides to retail clients is determined according to the European Securities and Markets Authority (ESMA) legislation. The maximum amount of leverage which you can use to trade
                                    forex and CFD instruments with Altruisticmarkets is 1:30. However, according to the regulations, leverage may be lower, depending on the products you trade. Learn more about leverage and margin requirements when trading
                                    CFDs with Altruisticmarkets&nbsp;<a data-fancybox="" data-src="#sign-up-modal" href="javascript_%3b.html"><strong>Here</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>7. What documents are needed to open a trading account?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>To open a trading account with Altruisticmarkets, you need to provide a document that verifies your identity, and another which verifies your address.</p>

                                <p>The documents we require depend on your nationality and country of residence. As a general rule, we require either a passport, national identity card, or a driver's license to prove your identity. We expect a utility bill
                                    or bank statement for proving your address, not older than three months for fixed services. For example, a mobile phone or mobile internet bill is not ok, but a bill for a fixed internet or telephone line would be acceptable.
                                    If you have any concerns about what documents are acceptable or not, just reach out to our <a href="contact-us.html"><strong>Support Team</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>8. How can I add funds to my trading account?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>We offer several reliable and convenient methods to deposit and withdraw funds from your trading account. For example, we support major credit and debit cards, bank wire transfers, PayPal, Skrill, Sofort and others. Learn
                                    more about how to fund your trading account <a data-fancybox="" data-src="#sign-up-modal" href="javascript_%3b.html"><strong>Here</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>9. What is the minimum I can deposit to my account?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>The lowest amount you can deposit for the first time is 250 EUR/USD/GBP<s>.</s></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>10. How long do withdrawals take?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Altruisticmarkets will process withdrawal requests within 24-hours on business days. Kindly note that even if the request has been processed by Altruisticmarkets internally, it can take a few hours or a few days for the payment
                                    provider to settle. Generally, e-wallets are settled faster than card withdrawals or bank wire transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>11. Why can’t I withdraw funds to my preferred payment method?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Due to anti-money laundering regulations, we must follow strict rules on how we process withdrawals. Any deposits must be returned (i.e. refunded) to the same method used to fund the account. Only profits can be sent to
                                    another payment method, but that method must be verified before they can be used.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>12. How do you execute my trades?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Altruisticmarkets is classified as a market maker broker. As a market maker broker, Altruisticmarkets is the counterparty on the other side of your trade. Our team of dealers manages the exposure of all clients collectively, some
                                    customers are long, some are short, and therefore, exposure is netted off. As and when needed, Altruisticmarkets may use its own money to hedge exposure with institutional brokers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

@include('home.footer')