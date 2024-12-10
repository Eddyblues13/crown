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

</script>
<style type="text/css">
    .main-menu__link {
        color: #000 !important;
    }
</style>

<main class="main">



    <div id="" class="simple-banner style1  " style="">

        <div class="container">
            <div class="simple-banner__content">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__title" data-aos="fade-up">
                        <h1>Access the Crown Wave Stock
                            <br>with Altruisticmarkets
                        </h1>
                    </div>
                    <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200">
                        <p>On the Altruisticmarkets MetaTrader 5 platform,
                            <br>you can access exchange-traded
                            <br>products from Crown Wave Stocks
                            <br>worldwide.
                        </p>
                    </div>

                    <div class="simple-banner__desktop">
                        <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"></div>








                        <div class="simple-banner__link ">
                            <div class="combined-links">
                                <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="demo"
                                        data-acc-plan="default" href="javascript:;"
                                        class="combined-links__item combined-links__right">Try On Demo</a>


                                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="live"
                                        data-acc-plan="default" href="javascript:;"
                                        class="combined-links__item combined-links__left">Start trading</a>

                                </div>
                            </div>
                        </div>

                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="simple-banner__image" data-aos="fade-left" data-aos-delay="200">
                <img src="storage/app/media/purchase-stocks/bear%20and%20bool%404x-100%201-min.png" alt="">
            </div>





            <div class="simple-banner__content simple-banner__mobile">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"></div>

                    <!---->
                    <div class="simple-banner__combined-links">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                <a data-fancybox data-src="#sign-up-modal" href="javascript:;"
                                    class="combined-links__item combined-links__right">Try On Demo</a>


                                <a data-fancybox data-src="#sign-up-modal" href="javascript:;"
                                    class="combined-links__item combined-links__left">Start trading</a>

                            </div>
                        </div>
                    </div>

                    <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div id="" class="text-center-block-big style1"
        style="background-image: url(storage/app/media/purchase-stocks/stock-back-min.jpg)">
        <div class="container">
            <div class="text-center-block-big__title title title_center" data-aos="fade-up">
                <p>Get Your Piece <span style="font-weight:800;color:#80A9C3;">Of The Action&nbsp;</span></p>
            </div>
            <div class="text-center-block-big__subtitle" data-aos="fade-up" data-aos-delay="100">
                <p>Invest in the world’s most influential companies with Altruisticmarkets</p>
            </div>
            <div class="text-center-block-big__text" data-aos="fade-up" data-aos-delay="200">
                <p>&nbsp;A Altruisticmarkets trading account is your gateway to a vast global network of financial
                    <br>markets. No matter where you are if you have a Altruisticmarkets MT5 account you can access
                    <br>markets in your time zone and across the world.
                </p>

                <p>
                    <br>
                </p>

                <p style="text-align: center;"><strong>Trade more than 600 stocks with Altruisticmarkets</strong></p>
            </div>

            <br /><br />
            <div data-aos="fade-up" data-aos-delay="400">
                <a data-fancybox data-src="#sign-up-modal" data-acc-type="default" data-acc-plan="default"
                    href="javascript:;" class="btn btn-white-bright-red">Start Trading</a>

                <div class="warning-text warning-text_light">
                    <p><span style="color: rgb(239, 239, 239);">* Risk Warning: Trading in forex and CFDs could lead to
                            a loss of your invested capital.</span></p>
                </div>

            </div>
        </div>
    </div>
    <div id="" class="offer" style="background-image: url(storage/app/media/purchase-stocks/why-trade-back-min.png);">


        <div class="container">
            <div class="offer__block" data-aos="fade-up">
                <div class="offer__block-top">
                    <div class="offer__title title title_center">
                        <p>Why Trade Stocks <strong style="color: #80A9C3;">With Altruisticmarkets?</strong></p>
                    </div>
                    <div class="offer__subtitle text"></div>
                    <div class="offer__text text">
                        <p>As a retail broker, Altruisticmarkets focuses on providing the best online trading experience
                            to traders, investors and speculators. Most stockbrokers are part of larger investments
                            firms or banks and cater to thousands of ultra-wealthy
                            clients and overlook what’s important to the average investor. At Altruisticmarkets, we’re
                            committed to delivering a premium stock trading experience to anyone, regardless of your
                            account size. We offer reliable trading platforms,
                            reasonable fees, transparent pricing and outstanding customer support.</p>
                    </div>

                    <div class="offer__list">
                        <div class="offer__list-title"></div>
                        <div class="offer__list-subtitle"></div>
                        <div class="offer__enumeration">
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Access more than 600 stocks </div>
                                <div class="offer__enumeration-text">from Europe, North America and Asia</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Benefit from lower pricing</div>
                                <div class="offer__enumeration-text">as you trade more</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">View real-time market data </div>
                                <div class="offer__enumeration-text">inside the popular MT5 trading platform</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Earn dividends</div>
                                <div class="offer__enumeration-text">for holding shares on the ex. dividend date</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Licensed by CySEC</div>
                                <div class="offer__enumeration-text">with the license number 208/13</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Hedge your positions</div>
                                <div class="offer__enumeration-text">with a Altruisticmarkets CFD trading account</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Receive leading market research</div>
                                <div class="offer__enumeration-text">to help you navigate the markets</div>
                            </div>
                        </div>
                    </div>
                    <div class="offer__bottom-text">
                        <p><a href="#" style="color: #80A9C3;"><strong>Learn more about stock trading with
                                    Altruisticmarkets</strong></a></p>
                    </div>
                </div>

                <div class="offer__block-bottom">

                    <a href="contact-us.html" class="btn btn-orange">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
    <div id="" class="simple-text simple-text__with-list" style="">


        <div class="simple-text__bg simple-text__bg_left"><img src="themes/brokerkit/assets/images/line-bg-left.html"
                alt=""></div>
        <div class="simple-text__bg simple-text__bg_right"><img src="themes/brokerkit/assets/images/line-bg-right.html"
                alt=""></div>


        <div class="container">
            <div class="simple-text__title title title_center" data-aos="fade-up">
                <p>Enjoy A Complete <span style="color: #80A9C3;">Trading&nbsp;</span></p>

                <p style="color: #80A9C3;">Experience With Altruisticmarkets</p>
            </div>
            <div class="simple-text__subtitle" data-aos="fade-up">
                <p>Access thousands of stocks, across dozens of markets</p>
            </div>
            <div class="simple-text__text text" data-aos="fade-up">
                <p>Altruisticmarkets can plug you into the world’s most active Crown Wave Stocks, allowing you to trade
                    equities day and night. As one exchange closes, another opens so you can search for opportunities at
                    any time of the day.</p>
            </div>

            <ul class="simple-text__list">
                <li class="simple-text__list-item">
                    <p>During the <strong>Asian session</strong>, you can trade stocks on the
                        <strong>Tokyo&nbsp;</strong>Stock Exchange or the <strong>Singapore</strong> Stock Exchange.</p>

                </li>
                <li class="simple-text__list-item">
                    <p>During the <strong>European session</strong>, you can trade stocks on the <strong>London</strong>
                        Stock Exchange, <strong>Deutsche</strong> Bourse Xetra and others.</p>

                </li>
                <li class="simple-text__list-item">
                    <p>During the <strong>US session</strong>, you can trade stocks on the
                        <strong>NYSE</strong>,<strong>&nbsp;NASDAQ</strong>, <strong>Toronto</strong> Stock Exchange and
                        others.</p>

                </li>
            </ul>

        </div>
    </div>

    <div id="" class="simple-block right theme1 style1 small_padding  wide_content round_image ">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/purchase-stocks/analyse.jpg" alt="Analyse And Trade

The Markets You Know Best" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__title title " data-aos="fade-left">
                        <p>Analyse And Trade</p>

                        <p><span style="font-weight:800;color:#80A9C3;">The Markets You Know Best</span></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p>While you’re trading stocks, don’t worry about losing sight of what’s happening in other
                            markets, with a couple of clicks, you can switch between your stock trading account and CFD
                            trading account. Stay on top of correlations
                            between different asset classes and instruments. At Altruisticmarkets, we offer hundreds of
                            other trading instruments as CFDs, such as forex, Crown Wave Stock indices, precious metals,
                            commodities, and more.</p>
                    </div>





                    <div class="simple-block__link " data-aos="fade-left" data-aos-delay="300">

                        <a href="products-2.html" class="btn btn-big btn-orange">View all trading products</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div id="" class="text-center-block-big style1"
        style="background-image: url(storage/app/media/purchase-stocks/comprehensive-bg-min.jpg)">
        <div class="container">
            <div class="text-center-block-big__title title title_center" data-aos="fade-up">
                <p><span style="font-weight:800;color:#80A9C3;">A Comprehensive&nbsp;</span> Trading Platform</p>
            </div>
            <div class="text-center-block-big__text" data-aos="fade-up" data-aos-delay="200">
                <p>With Altruisticmarkets, you can start trading stocks from the tried and tested MetaTrader 5 platform,
                    designed explicitly to provide access to exchange-traded products. MT5 is used by hundreds of
                    thousands of traders worldwide. If you’re
                    new to investing and trading online, you’ll be happy to discover how easy it is to navigate and
                    operate this powerful trading platform.</p>
            </div>

            <br /><br />
            <div data-aos="fade-up" data-aos-delay="400">

                <a href="trading/mt5.html" class="btn btn-white-bright-red">Learn more about MT5</a>
            </div>
        </div>
    </div>

    <div id="" class="licensed-blocks  empty_padding_top  "
        style="background-image: url(storage/app/media/purchase-stocks/licensed-blocks-bg-min.png);">
        <div class="container">
        </div>

        <ul class="licensed-blocks__list">
            <li class="licensed-blocks__list-item style1" data-aos="fade-left" data-aos-delay="450">
                <div class="licensed-blocks__list-content">
                    <div class="licensed-blocks__list-wrap">
                        <div class="licensed-blocks__list-caption">
                            <p>Why <span style="color:#80A9C3;">invest in stocks?</span></p>
                        </div>
                        <div class="licensed-blocks__list-text">
                            <p>Trading stocks is a way of investing in a company’s future growth and success and the
                                potential to earn dividends. There are many reasons why trading stocks have become more
                                popular than other investments. Crown Wave Stocks
                                are highly regulated, liquid, and less complicated than other investment products such
                                as derivatives. Most traders invest in stocks over a medium to long term horizon. Unlike
                                day traders using high leverage, stock
                                traders can check in on their investments daily or weekly.</p>
                        </div>
                    </div>
                </div>
                <div class="licensed-blocks__list-image">
                    <img src="storage/app/media/purchase-stocks/invest-min.jpg" alt="Why invest in stocks?
" data-aos="fade-right">
                </div>
            </li>
            <li class="licensed-blocks__list-item style2" data-aos="fade-left" data-aos-delay="600">
                <div class="licensed-blocks__list-content">
                    <div class="licensed-blocks__list-wrap">
                        <div class="licensed-blocks__list-caption">
                            <p>What <span style="color:#80A9C3;">is stock trading?</span></p>
                        </div>
                        <div class="licensed-blocks__list-text">
                            <p>A stock is a security that represents ownership in a company. You can think of it as your
                                share of the company, and you're entitled to any profits or dividends the company
                                distributes. The value of a stock depends on how
                                the market perceives the company's current and future growth expectations. Investing in
                                stocks can be a profitable investment strategy, but there are risks like all
                                investments. If the stock you invest in goes to zero,
                                you can lose all of the money you invested in that stock. Although it’s unlikely the
                                stock price will go to zero, you will lose money if the price falls.</p>
                        </div>
                    </div>
                </div>
                <div class="licensed-blocks__list-image">
                    <img src="storage/app/media/purchase-stocks/trading-min.jpg" alt="What is stock trading?
" data-aos="fade-right">
                </div>
            </li>
        </ul>
    </div>

    <div id="" class="simple-block left theme1 style1  wide_content round_image ">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/purchase-stocks/fees-min.jpg" alt="Fees" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__title title " data-aos="fade-left">
                        <p><strong>Fees</strong></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <table>
                            <tbody>
                                <tr style="border-bottom: 1px solid rgba(71, 71, 71, 0.2);">
                                    <td style="width:60%;"><strong>Commissions</strong>
                                        <br><span style="font-size: 14px;">Discount calculated over a current day
                                            rolling period.</span>
                                    </td>
                                    <td style="width: 45%;">$0 to $10,000 - 10%
                                        <br>$10,001 to $50,000 – 7.5%
                                        <br>&gt;$50,001 - 5%
                                        <br>
                                    </td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(71, 71, 71, 0.2);">
                                    <td style="width: 49.9142%;"><strong>Custodian fee</strong>
                                        <br>
                                    </td>
                                    <td style="width: 50.0322%;">2% p.a.
                                        <br>
                                    </td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(71, 71, 71, 0.2);">
                                    <td style="width: 49.9142%;"><strong>Data fee</strong>
                                        <br>
                                    </td>
                                    <td style="width: 50.0322%;">Free
                                        <br>
                                    </td>
                                </tr>
                                <tr style="border-bottom: 2px solid rgba(71, 71, 71, 0.2);">
                                    <td style="width: 49.9142%;"><strong>Platform rental</strong>
                                        <br>
                                    </td>
                                    <td style="width: 50.0322%;">Free
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>







                </div>
            </div>
        </div>
    </div>

</main>
@include('home.footer')