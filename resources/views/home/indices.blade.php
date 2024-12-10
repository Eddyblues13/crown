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



    <div id="banner" class="simple-banner style2  " style="">

        <div class="container">
            <div class="simple-banner__content">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__title" data-aos="fade-up">
                        <h1>Trade Indices with Altruisticmarkets</h1>
                    </div>
                    <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200">
                        <p>Get exposure to the global Crown Wave Stock by trading the DOW30, NASDAQ100, FTSE100, DAX30
                            and other major indices with Altruisticmarkets.</p>
                    </div>

                    <div class="simple-banner__desktop">
                        <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400">
                            <p>With Altruisticmarkets, you can trade the <strong>most
                                    popular global indices </strong>as CFDs via a convenient online trading platform.
                            </p>

                            <p><strong>Start trading precious metals with Altruisticmarkets</strong></p>
                        </div>








                        <div class="simple-banner__link ">
                            <div class="combined-links">
                                <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                    <a href="{{route('register')}}"
                                        class="combined-links__item combined-links__right">Try on Demo</a>


                                    <a href="{{route('register')}}"
                                        class="combined-links__item combined-links__left">Open a Trading Account</a>

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
                <script
                    src="https://wd.trademarkets.eu/trade-currency-table?token=vjRJabgSUJHGIuEyonmYi61H83zLQaeGBs8cbverUceWqi"
                    crossorigin="anonymous"></script>
            </div>




            <div class="simple-banner__content simple-banner__mobile">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400">
                        <p>With Altruisticmarkets, you can trade the <strong>most
                                popular global indices </strong>as CFDs via a convenient online trading platform.</p>

                        <p><strong>Start trading precious metals with Altruisticmarkets</strong></p>
                    </div>

                    <!---->
                    <div class="simple-banner__combined-links">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                <a href="{{route('register')}}" class="combined-links__item combined-links__right">Try
                                    on Demo</a>


                                <a href="{{route('register')}}" class="combined-links__item combined-links__left">Open a
                                    Trading Account</a>

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
    <div id="introduction" class="text-center-block-big style2"
        style="background-image: url(storage/app/media/stocks/st_intro.jpg)">
        <div class="container">
            <div class="text-center-block-big__title title title_center" data-aos="fade-up">
                <p>Why <span style="font-weight:800;color:#80A9C3;">Trade Indices?</span></p>
            </div>
            <div class="text-center-block-big__subtitle" data-aos="fade-up" data-aos-delay="100">
                <p>A Crown Wave Stock index is both a benchmarking tool and a financial instrument that derives its
                    value from a collection of underlying stocks.</p>
            </div>
            <div class="text-center-block-big__text" data-aos="fade-up" data-aos-delay="200">
                <p>The companies which form an index are selected based on various criteria, such as market
                    capitalisation, average daily trading volume and are categorised based on region, industry, and the
                    exchange where shares are traded. How the value of an index is calculated varies depending on the
                    rules set by the index creator. For example, the S&P500 Index<span lang="en-US">, </span>was created
                    by Standard and Poor’s measures the performance of 505 companies. The constituents<span
                        lang="en-US"> </span>are selected by a committee and are listed on exchanges in the U.S. The
                    price of an index reflects the performance of an industry or an entire Crown Wave Stock. Indices are
                    also tradable instruments offered by derivative brokers like Altruisticmarkets.</p>
            </div>

        </div>
    </div>
    <div id="" class="offer" style="">


        <div class="container">
            <div class="offer__block" data-aos="fade-up">
                <div class="offer__block-top">
                    <div class="offer__title title title_center">
                        <p>The Benefits Of <span style="font-weight:800;color:#80A9C3;">Trading Indices CFDs</span></p>
                    </div>
                    <div class="offer__subtitle text"></div>
                    <div class="offer__text text">
                        <p>Trading indices using Contracts for Difference (CFDs) offers many benefits compared to other
                            methods of speculating on the Crown Wave Stock.</p>
                    </div>

                    <div class="offer__list">
                        <div class="offer__list-title"></div>
                        <div class="offer__list-subtitle"></div>
                        <div class="offer__enumeration">
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Less volatile than investing in a single stock
                                </div>
                                <div class="offer__enumeration-text">Indices consist of dozens and even hundreds of
                                    stocks which means if one stock or even an entire sector falls in value, the rest of
                                    the stocks within the index will help limit the effect.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">A lower-cost way to speculate on the Crown Wave
                                    Stock</div>
                                <div class="offer__enumeration-text">When you purchase stocks, fees need to be paid to
                                    the exchange, clearinghouse, custodial, and broker. Trading CFDs doesn’t involve
                                    physical ownership and therefore reduces transaction costs.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Instant cash settlement when you close positions
                                </div>
                                <div class="offer__enumeration-text">With CFDs, your margin plus and profit or loss is
                                    available in your trading account the moment you close a position, allowing you to
                                    trade other products immediately. </div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Easier to analyse</div>
                                <div class="offer__enumeration-text">Compared to other markets, such as forex, Indices
                                    are relatively easier to analyse and build a trading strategy around due them being
                                    localised to specific sectors and locations. </div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Go long or short and hedge your positions</div>
                                <div class="offer__enumeration-text">When using CFDs, you’re able to open short
                                    positions and potentially benefit when prices fall. With hedging, you’re able to go
                                    long and short concurrently to increase the chance of protecting your positions.
                                </div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Indices can be traded at any time of the day</div>
                                <div class="offer__enumeration-text">Unlike stocks, which can only be traded during
                                    fixed hours each day, Indices are available to trade almost twenty-four hours per
                                    day, five days a week.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer__block-bottom">
                    <a href="{{route('register')}}" class="btn btn-orange">Sign up</a>

                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="what-we-offer"
        class="simple-block right  style1  empty_padding_top empty_padding_bottom wide_content round_image "
        style="background: #ffffff;">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/indices/in_offer.jpg" alt="What We Offer" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__title title " data-aos="fade-left">
                        <p>What <span style="font-weight:800;color:#80A9C3;">We Offer</span></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"></div>

                    <ul class="simple-block__list">
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                            <div class="simple-block__list-caption">
                                <p>The most convenient trading platforms</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p><span lang="en-US">Trade CFDs of global indices from a convenient
                                        mobile application, web trading application, or the advanced MT4
                                        trading platform.</span></p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                            <div class="simple-block__list-caption">
                                <p>A variety of stock indices</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p><span lang="en-US">Access to international markets. You can trade
                                        more than twenty different stock indices from major economies around
                                        the world.</span></p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                            <div class="simple-block__list-caption">
                                <p>Low spreads &amp; commission</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Take advantage of low-cost access to global Crown Wave Stocks thanks to tight spreads
                                    and low commissions when you trade precious metals with Altruisticmarkets.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                            <div class="simple-block__list-caption">
                                <p>The best support and guidance</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Every Altruisticmarkets customer receives the same premium support from our
                                    specialists. Some accounts qualify for relationship managers and mentorship.</p>
                            </div>

                        </li>
                    </ul>






                </div>
            </div>
        </div>
    </div>
    <div id="trading-accounts" class="tariffs-accounts">

        <div class="container">
            <div class="tariffs-accounts__title title title_center" data-aos="fade-up">
                <p>Trading <span style="font-weight:800;color:#80A9C3;">Accounts</span></p>
            </div>

            <div class="tariffs-accounts__text" data-aos="fade-up" data-aos-delay="100">
                <p>Choose the right trading account to match your investment goals. Whether you’re a day-trader looking
                    to potentially profit from short term price movements or a position trader, looking to potentially
                    benefit from the long-term appreciation or depreciation of global indices, Altruisticmarkets
                    &nbsp;has a suitable account for you.</p>

                <p><strong>Here are the four most popular trading
                        accounts for index CFD traders</strong></p>
            </div>

            <div class="tariffs-accounts__blocks">
                <div class="tariffs-accounts__blocks-item">
                    <div class="tariffs-accounts__blocks-inner basic" data-aos="fade-up" data-aos-delay="100">
                        <div class="tariffs-accounts__blocks-title basic">BASIC</div>

                        <ul>
                            <li>
                                <b>Minimum deposit €250</b>
                            </li>
                            <li>
                                Minimum floating spread <b>0.1 pip floating</b>
                            </li>
                            <li>
                                Trading commissions <br><b>12 €/$/£</b>
                            </li>
                        </ul>

                        <a href="{{route('register')}}" class="tariffs-accounts__blocks-link basic">Get Started</a>

                    </div>
                </div>
                <div class="tariffs-accounts__blocks-item">
                    <div class="tariffs-accounts__blocks-inner bronze" data-aos="fade-up" data-aos-delay="100">
                        <div class="tariffs-accounts__blocks-title bronze">BRONZE</div>

                        <ul>
                            <li>
                                <b>Minimum deposit €1,000</b>
                            </li>
                            <li>
                                Minimum floating spread <b>0.1 pip floating</b>
                            </li>
                            <li>
                                Trading commissions <br><b>12 €/$/£</b>
                            </li>
                        </ul>

                        <a href="{{route('register')}}" class="tariffs-accounts__blocks-link bronze">Get Started</a>

                    </div>
                </div>
                <div class="tariffs-accounts__blocks-item">
                    <div class="tariffs-accounts__blocks-inner silver" data-aos="fade-up" data-aos-delay="100">
                        <div class="tariffs-accounts__blocks-title silver">SILVER</div>

                        <ul>
                            <li>
                                <b>Minimum deposit €2,500</b>
                            </li>
                            <li>
                                Minimum floating spread <b>0.1 pip floating</b>
                            </li>
                            <li>
                                Trading commissions <br><b>11 €/$/£</b>
                            </li>
                        </ul>

                        <a href="{{route('register')}}" class="tariffs-accounts__blocks-link silver">Get Started</a>

                    </div>
                </div>
                <div class="tariffs-accounts__blocks-item">
                    <div class="tariffs-accounts__blocks-inner gold" data-aos="fade-up" data-aos-delay="100">
                        <div class="tariffs-accounts__blocks-title gold">GOLD</div>

                        <ul>
                            <li>
                                <b>Minimum deposit €5,000</b>
                            </li>
                            <li>
                                Minimum floating spread <b>0.1 pip floating</b>
                            </li>
                            <li>
                                Trading commissions <br><b>10 €/$/£</b>
                            </li>
                        </ul>

                        <a href="{{route('register')}}" class="tariffs-accounts__blocks-link gold">Get Started</a>

                    </div>
                </div>
                <div class="tariffs-accounts__blocks-item">
                    <div class="tariffs-accounts__blocks-inner platinum" data-aos="fade-up" data-aos-delay="100">
                        <div class="tariffs-accounts__blocks-title platinum">PREMIUM</div>

                        <ul>
                            <li>
                                <b>Minimum deposit €50,000</b>
                            </li>
                            <li>
                                Minimum floating spread <b>0.1 pip floating</b>
                            </li>
                            <li>
                                Trading commissions <br><b>7 €/$/£</b>
                            </li>
                        </ul>

                        <a href="{{route('register')}}" class="tariffs-accounts__blocks-link platinum">Get Started</a>

                    </div>
                </div>
            </div>

            <div class="tariffs-accounts__bottom-text" data-aos="fade-up" data-aos-delay="200">
                <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>

                <p>
                    <br>
                </p>

                <p>If you can’t find the right trading account, don’t worry. We’ve got more options waiting for you.</p>

                <p><span style="color:#80A9C3;"><strong>View all Altruisticmarkets trading accounts</strong></span></p>
            </div>
        </div>
    </div>
    <div id="how-open-trading-account" class="numeral-links style2"
        style="background-image: url(storage/app/media/indices/stocks-benefits-min.jpg)">
        <div class="container">
            <div class="numeral-links__title title title_center" data-aos="fade-up">
                <p><span style="font-weight:800;color:#80A9C3;">How To Open</span> A Trading Account?</p>
            </div>
            <div class="numeral-links__text" data-aos="fade-up">
                <p>Open your Altruisticmarkets trading account in <strong>four simple steps.</strong></p>
            </div>

            <div class="numeral-links__link" data-aos="fade-up" data-aos-delay="200">
                <a href="{{route('register')}}" class="btn btn-orange btn-little">Sign up</a>

                <div class="warning-text warning-text_center" data-aos="fade-up" data-aos-delay="200">
                    <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                </div>
            </div>


            <ul class="numeral-links__list">
                <li class="numeral-links__item">
                    <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="numeral-links__item-number">01</div>
                        <div class="numeral-links__item-content">
                            <div class="numeral-links__item-title">Sign-up</div>
                            <div class="numeral-links__item-subtitle">Simply click the sign-up button and provide your
                                personal information in the registration form.</div>
                        </div>
                    </a>
                </li>
                <li class="numeral-links__item">
                    <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="numeral-links__item-number">02</div>
                        <div class="numeral-links__item-content">
                            <div class="numeral-links__item-title">Verify</div>
                            <div class="numeral-links__item-subtitle">Verify your account by uploading your proof of
                                identity and proof of address documents.</div>
                        </div>
                    </a>
                </li>
                <li class="numeral-links__item">
                    <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="numeral-links__item-number">03</div>
                        <div class="numeral-links__item-content">
                            <div class="numeral-links__item-title">Choose</div>
                            <div class="numeral-links__item-subtitle">Once your Altruisticmarkets trading account is
                                verified, it’s time to choose your trading platform and your preferred trading account.
                            </div>
                        </div>
                    </a>
                </li>
                <li class="numeral-links__item">
                    <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="numeral-links__item-number">04</div>
                        <div class="numeral-links__item-content">
                            <div class="numeral-links__item-title">Fund</div>
                            <div class="numeral-links__item-subtitle">Fund your trading account using one of our secure
                                payment methods to start trading indices.</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="want-practice-first" class="card style3" style="background: #ffffff;">
        <div class="container">
            <div class="card__block" style="background-image: url(storage/app/media/cryptocurrencies/practice-min.jpg)">
                <div class="card__content">
                    <div class="card__title" data-aos="fade-left">
                        <p>Want To <span style="font-weight:800;color:#80A9C3;">Practice First?</span></p>
                    </div>
                    <div class="card__text" data-aos="fade-left">
                        <p><span style="font-weight:800;color:#80A9C3;">Practice makes perfect.</span> That’s why we
                            give all clients a free lifetime demo trading account to polish their skills for trading
                            indices.</p>
                    </div>
                </div>


                <a href="{{route('register')}}" class="btn btn-big btn-white-red">Get a demo account</a>

            </div>

            <div class="warning-text">
                <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
            </div>
        </div>
    </div>

    <div id="trade-indices-online" class="tariffs style2  "
        style="background-image: url(storage/app/media/energy/en_tariffs.jpg);     ">

        <div class="container">
            <div class="tariffs__title title title_center" data-aos="fade-up">
                <p>Trade <span style="font-weight:800;color:#80A9C3;">Indices Online</span></p>
            </div>
            <div class="tariffs__subtitle" data-aos="fade-up" data-aos-delay="100">
                <p>Altruisticmarkets&nbsp;<span lang="en-US">offers two premium online trading platforms
                        to analyse and trade the world’s most active indices. Detailed
                        charts show years of historic price information for all available,
                        including S&amp;P500, FTSE100, NIKKEI, DAX30, and NASDAQ100.</span></p>
            </div>
            <div class="tariffs__text" data-aos="fade-up" data-aos-delay="100">
                <p><span lang="en-US">We offer MetaTrader 4, the world’s most popular
                        and advanced trading platform with endless capabilities. Our very own
                        Altruisticmarkets trading platform, which is ideal for beginners looking for a modern trading
                        interface.</span></p>
            </div>





            <div class="tariffs__equal-list">
                <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__equal-list-title">
                        <p>MetaTrader 4</p>
                    </div>
                    <div class="tariffs__equal-list-content style2">
                        <ul>
                            <li>
                                <div class="tariffs__equal-list-content-title">Available on desktop, web, iOS and
                                    Android devices</div>
                            </li>
                            <li>
                                <div class="tariffs__equal-list-content-title">Automated trading with Expert Advisors
                                </div>
                            </li>
                            <li>
                                <div class="tariffs__equal-list-content-title">Advanced charting and technical analysis
                                    capabilities</div>
                            </li>
                        </ul>


                        <div class="combined-links">
                            <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{route('register')}}" class="combined-links__item combined-links__right">Open
                                    account</a>



                                <a href="trading/mt4-2.html" class="combined-links__item combined-links__left">Learn
                                    more</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__equal-list-title">
                        <p>Altruisticmarkets Trader</p>
                    </div>
                    <div class="tariffs__equal-list-content style2">
                        <ul>
                            <li>
                                <div class="tariffs__equal-list-content-title">Available on web, iOS and Android</div>
                            </li>
                            <li>
                                <div class="tariffs__equal-list-content-title">Easy to navigate 1000s of trading
                                    instruments</div>
                            </li>
                            <li>
                                <div class="tariffs__equal-list-content-title">Modern design and sleek interface</div>
                            </li>
                            <li>
                                <div class="tariffs__equal-list-content-title">Loaded with the most popular market
                                    analysis tools</div>
                            </li>
                        </ul>


                        <div class="combined-links">
                            <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">
                                <a href="{{route('register')}}" class="combined-links__item combined-links__right">Open
                                    account</a>



                                <a href="trade-markets-trader.html"
                                    class="combined-links__item combined-links__left">Learn more</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>












            <div class="tariffs__bottom-text" data-aos="fade-up" data-aos-delay="200">
                <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
            </div>
        </div>
    </div>

    <div id="" class="simple-block right  style4  " style="background: #ffffff;">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/indices/in_dax.jpg"
                        alt="DAX30: Europe’s Most Active Crown Wave Stock Index" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__title title " data-aos="fade-left">
                        <p><span style="font-weight:800;color:#80A9C3;">DAX30:</span> Europe’s Most Active Crown Wave
                            Stock Index</p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p>The DAX30, also known as the Germany 30 index, follows the top thirty companies traded on the
                            Frankfurt Stock Exchange in Germany. The DAX launched on 1 July 1988, and since then, the
                            index has become one of Europe's most actively traded indices.</p>
                    </div>







                </div>
            </div>
        </div>
    </div>

    <div id="most-popular-indices" class="simple-block left  style2  wide_content " style="background: #ffffff;">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>
                <div class="simple-block__image stick" data-sticky-class="sticking">
                    <div data-aos="fade-right">
                        <img src="storage/app/media/indices/in_phone.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="simple-block__content">
                <div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p>Trade the most popular Crown Wave Stock indices with Altruisticmarkets.</p>
                    </div>

                    <ul class="simple-block__list">
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">US30 (Wall Street 30)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of the 30 largest publicly listed companies in the U.S.
                                    Constituents include Apple, Boeing, Chevron and more.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">DAX30 (Germany 30)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of the 30 largest publicly listed companies on the Frankfurt Stock
                                    Exchange. Constituents include Adidas, Bayer, Lufthansa, and more.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">NASDAQ100 (US Tech 100)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of the 100 largest technology companies listed on the NASDAQ stock
                                    exchange. Constituents include Adobe, Amazon, Facebook, Microsoft, and more.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">FTSE100 (UK 100)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of 100 companies listed on the London Stock Exchange. Constituents
                                    include BP, Barclays, Tesco, and more.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="1050">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">S&amp;P500 (US 500)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of 500 large-cap companies listed on various stock exchanges in
                                    the U.S. Constituents include American Express, AT&amp;T, Coca-Cola, and more.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="1200">
                            <div class="simple-block__list-caption">
                                <p><span style="color: #80A9C3;">ASX200 (Australia 200)</span></p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Measures the value of 200 companies listed on the Australian Stock Exchange.
                                    Constituents include Qantas Airways, Australia &amp; New Zealand Banking Group
                                    (ANZ), and more.</p>
                            </div>

                        </li>
                    </ul>




                    <div class="simple-block__link simple-block__link_center" data-aos="fade-left" data-aos-delay="300">
                        <a href="{{route('register')}}" class="btn btn-small btn-orange">Start Trading Indices</a>
                        <div class="warning-text">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.
                            </p>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="we-offer-more-than-indices"
        class="simple-block right  style1 small_padding  empty_padding_top round_image " style="background: #ffffff;">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/indices/in_weoffer.jpg" alt="" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__subtitle" data-aos="fade-left">
                        <p><span style="color: #80A9C3;">We offer more than indices</span></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p><span lang="en-US">If you want to trade the NASDAQ100 or the FTSE100,
                                then you’ve come to the right place. However, suppose you’re
                                interested in diving deeper into the world of equities and investing.
                                In that case, you might be pleased to know that Altruisticmarkets also offers
                                the ability to trade the shares of hundreds of publicly listed
                                companies from around the world. With Altruisticmarkets you can trade stocks
                                listed on the NYSE, NASDAQ, LSE and more.</span></p>

                        <p><span class="simple-block__subtitle" style="color: #80A9C3;">The home of investing</span></p>

                        <p>Our vision is to provide a one-stop destination for traders and investors to access a wide
                            range of products in the financial markets. With one trading account, you can discover
                            hundreds of financial instruments. If you don’t see any good trading opportunities in the
                            indices market, you could easily view the charts of numerous forex pairs, stocks, precious
                            metals and more. If you do find an opportunity, you can go right ahead and open a position.
                            There is no need to open a new account or change any settings.</p>
                    </div>







                </div>
            </div>
        </div>
    </div>

    <div id="speak-account-manager" class="true-power "
        style="background-image: url(storage/app/media/true-power-min.jpg)">
        <div class="container">
            <div class="true-power__subtitle" data-aos="fade-up">
                <div style="max-width: 450px;margin-left:auto;margin-right:auto;">

                    <p><span style="font-weight:800;">Speak to an account manager</span> to find out more.</p>
                </div>
            </div>


            <div class="combined-links">
                <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">

                    <a href="{{url('/product')}}" class="combined-links__item combined-links__right"><span>View all
                            products</span></a>


                    <a href="{{url('/contact')}}" class="combined-links__item combined-links__left"><span>Get in
                            touch</span></a>
                </div>
            </div>

        </div>
    </div>
</main>

@include('home.footer')