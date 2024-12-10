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

        <div id="product-banner" class="product-banner">
            <div class="container">
                <div class="product-banner__content-wrapper">
                    <div class="product-banner__content">
                        <div class="product-banner__title" data-aos="fade-right">
                            <h1>Trade the
                                <br>Markets in Your Way</h1>
                        </div>
                        <div class="product-banner__subtitle" data-aos="fade-right" data-aos-delay="200">
                            <p>Design a Personal Trading Style</p>
                        </div>

                        <div class="product-banner__text text" data-aos="fade" data-aos-delay="600">
                            <p>Powerful Traders Use A Strategy Based On Their Personal Goals And Strengths. </p>

                            <p>With <span style="font-weight:400;"><strong>24/5 Access</strong></span> and <span style="font-weight:400;"><strong>Hundreds Of Trading Assets</strong></span>, seize the right market opportunities actively or passively, in short-term
                                or long-term, and when markets are volatile or stable.
                                <br>Choose a trading style which fits your strengths and gives you the edge to <span style="color:#80A9C3;font-weight:400;"><strong>Achieve Your Financial Goals.</strong></span></p>
                        </div>


                        <div class="product-banner__link">
                            <div class="combined-links">
                                <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="demo" data-acc-plan="" class="combined-links__item combined-links__right" style="cursor:pointer;">Try On Demo</a>
                                    <!--a data-fancybox data-src="#sign-up-modal" data-acc-type="demo" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__right">Try On Demo</a-->


                                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="live" data-acc-plan="" class="combined-links__item combined-links__left" style="cursor:pointer;">Start trading</a>
                                    <!--a  data-fancybox data-src="#sign-up-modal" data-acc-type="live" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__left">Start trading</a-->

                                </div>
                            </div>
                        </div>

                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                        </div>
                    </div>
                </div>

                <div class="product-banner__image-wrapper" data-aos="fade" data-aos-delay="600">
                    <div class="product-banner__image">
                        <img src="themes/brokerkit/assets/images/product-banner.html" alt="Product Banner">
                    </div>
                </div>

            </div>
        </div>
        <div id="numeral-links" class="numeral-links ">
            <div class="container">



                <ul class="numeral-links__list">
                    <li class="numeral-links__item">
                        <a href="#product-number-block1" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                            <div class="numeral-links__item-number">01</div>
                            <div class="numeral-links__item-content">
                                <div class="numeral-links__item-title">Forex</div>
                                <div class="numeral-links__item-subtitle">Trading</div>
                            </div>
                        </a>
                    </li>
                    <li class="numeral-links__item">
                        <a href="#product-number-block2" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                            <div class="numeral-links__item-number">02</div>
                            <div class="numeral-links__item-content">
                                <div class="numeral-links__item-title">CFD</div>
                                <div class="numeral-links__item-subtitle">Trading</div>
                            </div>
                        </a>
                    </li>
                    <li class="numeral-links__item">
                        <a href="#product-number-block3" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                            <div class="numeral-links__item-number">03</div>
                            <div class="numeral-links__item-content">
                                <div class="numeral-links__item-title">Portfolio</div>
                                <div class="numeral-links__item-subtitle">Management</div>
                            </div>
                        </a>
                    </li>
                    <li class="numeral-links__item">
                        <a href="#product-number-block4" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                            <div class="numeral-links__item-number">04</div>
                            <div class="numeral-links__item-content">
                                <div class="numeral-links__item-title">Personalised</div>
                                <div class="numeral-links__item-subtitle">Experience</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="product-number-block1" class="number-block number-block_type-1">
            <div class="container">
                <div class="number-block__top">
                    <div class="number-block__top-caption">
                        <div class="number-block__number" data-aos="fade-right">01</div>
                        <div class="number-block__heading" data-aos="fade-right">
                            <div class="number-block__title">
                                <p>Forex</p>
                            </div>
                            <div class="number-block__subtitle">
                                <p>Trading</p>
                            </div>
                        </div>
                    </div>
                    <div class="number-block__text" data-aos="fade-left">
                        <p><span style="font-weight:500;">Forex Markets</span> Is The International Arena Where Countries Demonstrate Their <span style="font-weight:500;">Global Economic Power.</span></p>

                        <p>Buy And Sell The World’s Most Popular Currencies As They Strive To Prevail Against Each Other.
                            <br><span style="font-weight:500;">Increase Your Potential</span> By Utilising Leverage In Your Forex Trading To Enlarge Your Positions On EUR/USD, GBP/USD, USD/JPY, And Many More Currency Pairs.</p>
                    </div>
                </div>
                <div class="freeze-table">
                    <div class="freeze-table__scroller">
                        <table class="freeze-table__inner">
                            <tbody>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_black freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Forex Asset Class</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_red">
                                        <div class="freeze-table__item-inner">Majors</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_red">
                                        <div class="freeze-table__item-inner">Minors</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_red">
                                        <div class="freeze-table__item-inner">Exotics</div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_black freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Currency Pairs</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">EUR/USD, GBP/ USD, +5</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">EUR/GBP, CHF/ JPY, +12</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">USD/MXN, EUR/ TRY, +31</div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_black freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Spreads From*</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">3 pips</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">4 pips</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">25 pips</div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_black freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Leverage Up To*</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="number-block__bottom-text" data-aos="fade-up" data-aos-delay="400">
                    <p>&nbsp;* Based on Altruisticmarkets Gold Account for Professional Traders in accordance with MiFID II regulation.</p>
                </div>

                <div class="number-block__link">
                    <a href="forex-trading.html" class="btn btn-big btn-white" data-aos="fade-up" data-aos-delay="600">Learn More</a>
                </div>

            </div>
        </div>
        <div id="product-number-block2" class="number-block number-block_type-1" style="background-image:url(storage/app/media/number-block__bg.jpg)">
            <div class="container">
                <div class="number-block__top">
                    <div class="number-block__top-caption">
                        <div class="number-block__number" data-aos="fade-right">02</div>
                        <div class="number-block__heading" data-aos="fade-right">
                            <div class="number-block__title">
                                <p>CFD</p>
                            </div>
                            <div class="number-block__subtitle">
                                <p>Trading</p>
                            </div>
                        </div>
                    </div>
                    <div class="number-block__text" data-aos="fade-left">
                        <p>Enjoy An Unparalleled Accessibility To The
                            <br><span style="color:#80A9C3;font-weight:500;">Leading Markets Around The World</span> With The Empowering Advantages Of CFD Trading.</p>

                        <p> As The Markets Rise And Fall, Use Long And Short Positions To Benefit Both Ways, Without Having To Physically Purchase The Assets, And With <span style="color:#80A9C3;font-weight:500;">Lower Margin Requirements.</span>
                            <br>Trade The CFDs Of The Popular Commodities, Stocks, Indices, And Digital Currencies All On A Single Platform!</p>
                    </div>
                </div>
                <div class="freeze-table">
                    <div class="freeze-table__scroller">
                        <table class="freeze-table__inner">
                            <tbody>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_red freeze-table__sticky">
                                        <div class="freeze-table__item-inner">CFD Asset Class</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_black">
                                        <div class="freeze-table__item-inner">Commodities</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_black">
                                        <div class="freeze-table__item-inner">Stocks</div>
                                    </td>
                                    <td class="freeze-table__item freeze-table__caption freeze-table__item_black">
                                        <div class="freeze-table__item-inner">Indices</div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_red freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Assets</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">Gold, Silver, +15</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">Amazon, Google, +198</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner"><span style="text-align:center">S&P 500, Dow Jones 30, +22</span></div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_red freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Spreads From*</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner"># pips</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner"># pips</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner"># pips</div>
                                    </td>
                                </tr>
                                <tr class="freeze-table__row">
                                    <td class="freeze-table__item freeze-table__item_red freeze-table__sticky">
                                        <div class="freeze-table__item-inner">Leverage Up To*</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                    <td class="freeze-table__item ">
                                        <div class="freeze-table__item-inner">#:1</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="number-block__bottom-text" data-aos="fade-up" data-aos-delay="400">
                    <p>* Based on Altruisticmarkets Gold Account for Professional Traders in accordance with MiFID II regulation.</p>
                </div>

                <div class="number-block__link">
                    <a href="cfd-trading.html" class="btn btn-big btn-white" data-aos="fade-up" data-aos-delay="600">Learn More</a>
                </div>

            </div>
        </div>
        <div id="product-number-block3" class="number-block number-block_type-2">
            <div class="container">
                <div class="number-block__top">
                    <div class="number-block__top-caption">
                        <div class="number-block__number" data-aos="fade-up">03</div>
                        <div class="number-block__heading" data-aos="fade-up">
                            <div class="number-block__title">
                                <p>Licensed</p>
                            </div>
                            <div class="number-block__subtitle">
                                <p>Portfolio Management</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="number-block__content" data-aos="fade-up" data-aos-delay="200">
                    <div class="number-block__text">
                        <p><span style="font-weight:500;">Trading Success</span> Is Achieved Through Diligent Learning, Monitoring, Analysing, And Testing.&nbsp;</p>

                        <p>Knowing The Personal Dedication Required, We Designed The Most Efficient Solution That Will Add ‘Time’ To The List Of <span style="font-weight:500;">Your Returns On Investments.</span></p>

                        <p>Our Team Of <span style="font-weight:500;">Licensed Portfolio Managers</span> Skilfully Handle All Your Trading Affairs, Enhancing The Investment Yields On Your Financial Assets With An Professional Touch, And Freeing Your Invaluable
                            Time While Ensuring That Your Capital Continues To Work For You.</p>
                    </div>

                    <div class="number-block__list">
                        <div class="number-block__list-item">
                            <div class="number-block__list-item-wrap">
                                <div class="number-block__list-head">
                                    <div class="number-block__list-icon number-block__list-icon_static">
                                        <img src="storage/app/media/icons/Licensed-icon.svg" alt="Licensed">
                                    </div>
                                    <div class="number-block__list-title">Licensed</div>
                                </div>
                                <div class="number-block__list-icon number-block__list-icon_hover">
                                    <img src="storage/app/media/icons/Licensed-icon-hover.svg" alt="Licensed">
                                </div>
                                <div class="number-block__list-content">
                                    <div class="number-block__list-content-wrap">
                                        <div class="number-block__list-content-title">Licensed</div>
                                        <div class="number-block__list-content-text">
                                            <p>Licensed and regulated by <strong>CySEC</strong> (LN. 208/13), for portfolio management services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="number-block__list-item">
                            <div class="number-block__list-item-wrap">
                                <div class="number-block__list-head">
                                    <div class="number-block__list-icon number-block__list-icon_static">
                                        <img src="storage/app/media/icons/Experts-icn.svg" alt="Professionals">
                                    </div>
                                    <div class="number-block__list-title">Professionals</div>
                                </div>
                                <div class="number-block__list-icon number-block__list-icon_hover">
                                    <img src="storage/app/media/icons/Experts-icn-hover.svg" alt="Professionals">
                                </div>
                                <div class="number-block__list-content">
                                    <div class="number-block__list-content-wrap">
                                        <div class="number-block__list-content-title">Professionals</div>
                                        <div class="number-block__list-content-text">
                                            <p>Portfolio management by professional traders who are selected with rigorous criteria.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="number-block__list-item">
                            <div class="number-block__list-item-wrap">
                                <div class="number-block__list-head">
                                    <div class="number-block__list-icon number-block__list-icon_static">
                                        <img src="storage/app/media/icons/Time-icn.svg" alt="Time">
                                    </div>
                                    <div class="number-block__list-title">Time</div>
                                </div>
                                <div class="number-block__list-icon number-block__list-icon_hover">
                                    <img src="storage/app/media/icons/Time-icn-hover.svg" alt="Time">
                                </div>
                                <div class="number-block__list-content">
                                    <div class="number-block__list-content-wrap">
                                        <div class="number-block__list-content-title">Time</div>
                                        <div class="number-block__list-content-text">
                                            <p>Adding a unique
                                                <br>value to your gains from the markets by earning you time with your capital.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="number-block__list-item">
                            <div class="number-block__list-item-wrap">
                                <div class="number-block__list-head">
                                    <div class="number-block__list-icon number-block__list-icon_static">
                                        <img src="storage/app/media/icons/Guarantee-icn.svg" alt="Guarantee">
                                    </div>
                                    <div class="number-block__list-title">Guarantee</div>
                                </div>
                                <div class="number-block__list-icon number-block__list-icon_hover">
                                    <img src="storage/app/media/icons/Guarantee-icn-hover.svg" alt="Guarantee">
                                </div>
                                <div class="number-block__list-content">
                                    <div class="number-block__list-content-wrap">
                                        <div class="number-block__list-content-title">Guarantee</div>
                                        <div class="number-block__list-content-text">
                                            <p>Guaranteed
                                                <br>maximum risk potential is limited
                                                <br>to 10% of your invested capital.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="number-block__card" style="background-image:url(storage/app/media/number-block__card-bg.jpg)" data-aos="fade-up" data-aos-delay="400">
                    <div class="number-block__card-text">
                        <p>Learn More About <span style="color:#80A9C3;font-weight:800;">Portfolio Management</span> in Altruisticmarkets</p>
                    </div>


                    <a href="products/portfolio-management.html" class="btn btn-big btn-white-red">Learn More</a>
                </div>


            </div>
        </div>
        <div id="product-number-block4" class="number-block number-block_type-3">
            <div class="number-block__bg number-block__bg_large" style="background-image:url(storage/app/media/forex/number-block4__bg-min.jpg)"></div>
            <div class="number-block__bg number-block__bg_medium" style="background-image:url(storage/app/media/forex/number-block4__bg_medium-min.jpg)"></div>
            <div class="container">
                <div class="number-block__content">
                    <div class="number-block__links" data-aos="fade-right" data-aos-delay="400">
                        <a href="trading-accounts.html" class="number-block__links-item">
                            <div class="number-block__links-title">Account Types</div>
                            <div class="number-block__links-item-arrows">
                                <div class="number-block__links-arrow">
                                    <div class="number-block__links-arrow-item number-block__links-arrow-left"></div>
                                    <div class="number-block__links-arrow-item number-block__links-arrow-right"></div>
                                </div>
                            </div>

                            <div class="number-block__links-image" style="background-image: url(storage/app/media/why-list__img1.jpg)"></div>
                            <div class="number-block__links-content">
                                <div class="number-block__links-content-text">
                                    <p>Find Your
                                        <br>Personal Trading Account</p>
                                </div>
                            </div>
                        </a>
                        <a href="products/portfolio-management.html" class="number-block__links-item">
                            <div class="number-block__links-title">Professional Traders</div>
                            <div class="number-block__links-item-arrows">
                                <div class="number-block__links-arrow">
                                    <div class="number-block__links-arrow-item number-block__links-arrow-left"></div>
                                    <div class="number-block__links-arrow-item number-block__links-arrow-right"></div>
                                </div>
                            </div>

                            <div class="number-block__links-image" style="background-image: url(storage/app/media/why-list__img2.jpg)"></div>
                            <div class="number-block__links-content">
                                <div class="number-block__links-content-text">
                                    <p>Check Your Eligibility To
                                        <br>Join The Professional Traders</p>
                                </div>
                            </div>
                        </a>
                        <a href="products/concierge-service.html" class="number-block__links-item">
                            <div class="number-block__links-title">Promotions</div>
                            <div class="number-block__links-item-arrows">
                                <div class="number-block__links-arrow">
                                    <div class="number-block__links-arrow-item number-block__links-arrow-left"></div>
                                    <div class="number-block__links-arrow-item number-block__links-arrow-right"></div>
                                </div>
                            </div>

                            <div class="number-block__links-image" style="background-image: url(storage/app/media/why-list__img3.jpg)"></div>
                            <div class="number-block__links-content">
                                <div class="number-block__links-content-text">
                                    <p>Browse Our Promotions To
                                        <br>Enhance Your Trading Experience</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div>
                        <div class="number-block__top" data-aos="fade-left">
                            <div class="number-block__top-caption">
                                <div class="number-block__number">04</div>
                                <div class="number-block__heading">
                                    <div class="number-block__title">
                                        <p>Design</p>
                                    </div>
                                    <div class="number-block__subtitle">
                                        <p>A Personal Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="number-block__text" data-aos="fade-left" data-aos-delay="400">
                            <p style="font-weight:500;">Congratulations On Your Choice Of Personal Trading Style!</p>

                            <p>We Believe Your Way Of Trading The Markets Will Propel You Towards The Goals And Achievements You Aim.
                                <br><span style="font-weight:500;">Let Us Support You</span> Further With A <span style="color:#80A9C3;font-weight:500;">Personalised Trading Experience</span>. Pick The Best Fit From Our Account Types, Each Designed To
                                Meet The Needs And Goals Of Different Trading Styles.</p>

                            <p>Exercise Your Expertise Via Our Opt-In Professional Trader Program, Where We Redefine The <span style="color:#80A9C3;font-weight:500;">VIP Concept</span> With Exclusive Services And Trading Conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="faq" class="faq " style="">
            <div class="container">
                <div class="faq__title title title_center" data-aos="fade-up">
                    <p><span style="color:#80A9C3;">Financial Trading</span> FAQ</p>
                </div>
                <div class="accordion faq__list" data-aos="fade-up" data-aos-delay="400">
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>1. What is a Financial Trading Product?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>A financial trading product is an investment instrument which enables the traders to buy and sell the underlying asset to yield short-term or long-term gains from the changes in the asset price. Securities (e.g. Futures
                                    contracts) and derivatives (e.g. Contracts for Difference) are the most common financial products. Securities require the trader to physically purchase the instrument or the underlying asset, while derivatives allow
                                    trading on the price changes without any physical purchase obligations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>2. What is a Financial Market?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>A financial market is a marketplace to purchase or trade financial securities and derivatives. Financial markets can be decentralised for certain asset types like currency pairs or cryptocurrencies. On the other hand, other
                                    exchange markets like stock exchanges and commodity exchanges offer centralised trading environments for the available financial assets and instruments. The role of financial markets in the modern economies is organise
                                    and allocate capital resources efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>3. What is Financial Trading?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Financial trading is the act of buying and selling financial trading instruments with the goal of accruing profits from the changes in the prices of underlying assets. Financial trading can be done by individuals like regular
                                    people, financial markets professionals, and investors, as well as entities like governments, banks, and financial institutions. With numerous instruments, platforms, methods, and strategies that could be employed,
                                    the best way to trade in the financial markets is usually the way which fits your own personal characteristics, goals, and needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>4. How to Trade in the Financial Markets?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Depending on the financial asset and instrument you are interested in trading, you might be required to fulfil certain regulatory and registration requirements. In stock exchanges and commodity exchanges, these may include
                                    minimum capital requirements, corporate track records, personal information, legal information, and examination and tests. On the other hand, if you prefer Forex and CFD trading, all you have to do is to join a broker
                                    which offers you comprehensive support and a robust trading platform. Once you complete the registration and identification requirements, you can start trading immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>5. Why Trade in the Financial Markets?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Our modern world is becoming increasingly competitive and economically demanding. Empowering oneself with financial freedom is the only way to achieve the successful and comfortable life one deserves. The financial markets
                                    provide everybody the opportunity to create a source of substantial income, without prejudice. Therefore, anyone who is resolved to gain financial independence can trade in the financial markets to earn profits with
                                    their resources and determination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-text-block" class="product-text-block">
            <div class="product-text-block__dots-bg"><img src="themes/brokerkit/assets/images/dots-bg.html"></div>
            <div class="container">
                <div class="product-text-block__image" data-aos="fade-up">
                    <img src="storage/app/media/forex/product-text-block__img-min.png" alt="">
                </div>
                <div class="product-text-block__content">
                    <div class="product-text-block__card" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-text-block__title title">
                            <p>Join <span style="color:#80A9C3;"><strong>Altruisticmarkets</strong></span></p>
                        </div>
                        <div class="product-text-block__text">
                            <p><span style="color:#80A9C3;"><strong>Altruisticmarkets</strong></span> is the <strong>Leading Global Broker</strong>, offering a variety of products and services to trade and invest in the financial markets. We are committed to
                                provide solutions that will enable individuals to <strong>Gain Power</strong> by trading in the markets in their own way.</p>

                            <p>Let’s create a personalised trading experience for you together!</p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div id="product-why-list" class="why-list">
            <div class="container">
                <div class="why-list__title title title_center" data-aos="fade-up">
                    <p>Why <span style="color:#80A9C3;"><strong>Altruisticmarkets?</strong></span></p>
                </div>

                <ul class="why-list__list">
                    <li class="why-list__list-item-wrapper" data-aos="fade-right">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img1.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Security</div>
                                <div class="why-list__list-text">
                                    <p>Altruisticmarkets is regulated by <strong>CySEC</strong> with license No. 208/13. We gladly comply the strictest regulations for best customer practices including policies for order execution, data protection, financial
                                        safety.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-right">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img2.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Education</div>
                                <div class="why-list__list-text">
                                    <p>Our education section contains training articles, videos, and infographics on a wide range of beginner, intermediate, and professional topics ranging from the basics of Forex and CFD trading to advanced market analysis
                                        and trading strategies.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-left">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img3.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Trading Conditions</div>
                                <div class="why-list__list-text">
                                    <p>We strive to offer the most competitive trading conditions with low spreads and scalable leverage across all markets.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-left">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img4.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Markets Range</div>
                                <div class="why-list__list-text">
                                    <p>Enjoy the 24/5 access to numerous markets including Forex currency pairs; metal, energy, and agricultural commodities; American, European, and Asian stocks, indices, and ETFs.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-right">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img5.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Service</div>
                                <div class="why-list__list-text">
                                    <p>We offer a wide range of financial products, markets, and assets to cater everyone’s needs. Our customer service team provides personalised support for each trader within the regulatory framework.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-right">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img6.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Tools</div>
                                <div class="why-list__list-text">
                                    <p>We equip you with a wide range of trading tools to build your trading strategy, analyse the markets, and manage your risk – with tutorials on how the most successful traders incorporate them to their own trading plans!</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-left">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img7.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">CFD Trading</div>
                                <div class="why-list__list-text">
                                    <p>Altruisticmarkets traders enjoy the profit potential both when their favourite assets rise and fall, with significantly reduced margin requirements and no strings attached.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="why-list__list-item-wrapper" data-aos="fade-left">
                        <div class="why-list__list-item" style="background-image: url(storage/app/media/why-list__img8.jpg)">
                            <div class="why-list__list-dark-block why-list__list-hidden"></div>
                            <div class="why-list__list-content why-list__list-hidden">
                                <div class="why-list__list-title">Accessibility</div>
                                <div class="why-list__list-text">
                                    <p>You can access your Altruisticmarkets trading platform directly from a web browser as well as from your Android or iOS mobile phones and tables. If you prefer, you can also use Altruisticmarkets MetaTrader 4 trading platform
                                        on your desktop.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        
    </main>
@include('home.footer')