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



    <div id="cfd-trading" class="simple-banner style4  " style="">

        <div class="container">
            <div class="simple-banner__content">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__title" data-aos="fade-up">
                        <h1>CFD Trading</h1>
                    </div>
                    <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200">
                        <p>Discover the World’s Financial Markets via CFD Trading</p>
                    </div>

                    <div class="simple-banner__desktop">
                        <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400">
                            <p>Trade the leading financial markets from around the world using the convenience of CFDs.
                            </p>
                        </div>








                        <div class="simple-banner__link ">
                            <div class="combined-links">
                                <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                    <a href="{{route('login')}}" class="combined-links__item combined-links__right">Try
                                        On Demo</a>


                                    <a href="{{route('register')}}"
                                        class="combined-links__item combined-links__left">Start Trading</a>

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




            <div class="simple-banner__list">
                <div class="simple-banner__list-item">
                    <div class="simple-banner__list-item-wrap">
                        <div class="simple-banner__list-head">
                            <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                <img src="storage/app/media/cfd/commodities.svg" alt="Commodities">
                            </div>
                            <div class="simple-banner__list-title">Commodities</div>
                        </div>
                        <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                            <img src="storage/app/media/cfd/commodities-hover.svg" alt="Commodities">
                        </div>
                        <div class="simple-banner__list-content">
                            <div class="simple-banner__list-content-wrap">
                                <div class="simple-banner__list-content-title">Commodities</div>
                                <div class="simple-banner__list-content-text">
                                    <p>The world’s most in-demand precious &amp; industrial metals, energy, agriculture
                                        products.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simple-banner__list-item">
                    <div class="simple-banner__list-item-wrap">
                        <div class="simple-banner__list-head">
                            <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                <img src="storage/app/media/cfd/stocks.svg" alt="Stocks">
                            </div>
                            <div class="simple-banner__list-title">Stocks</div>
                        </div>
                        <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                            <img src="storage/app/media/cfd/stocks-hover.svg" alt="Stocks">
                        </div>
                        <div class="simple-banner__list-content">
                            <div class="simple-banner__list-content-wrap">
                                <div class="simple-banner__list-content-title">Stocks</div>
                                <div class="simple-banner__list-content-text">
                                    <p>Access global Crown Wave Stocks to trade shares listed American, European, and
                                        Asian exchanges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simple-banner__list-item">
                    <div class="simple-banner__list-item-wrap">
                        <div class="simple-banner__list-head">
                            <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                <img src="storage/app/media/cfd/indicies.svg" alt="Indices">
                            </div>
                            <div class="simple-banner__list-title">Indices</div>
                        </div>
                        <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                            <img src="storage/app/media/cfd/indicies-hover.svg" alt="Indices">
                        </div>
                        <div class="simple-banner__list-content">
                            <div class="simple-banner__list-content-wrap">
                                <div class="simple-banner__list-content-title">Indices</div>
                                <div class="simple-banner__list-content-text">
                                    <p>Diversify your portfolio with indices and ETFs from the US, European, and Asian
                                        markets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simple-banner__list-item">
                    <div class="simple-banner__list-item-wrap">
                        <div class="simple-banner__list-head">
                            <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                <img src="storage/app/media/cfd/crypto.svg" alt="Digital Currencies">
                            </div>
                            <div class="simple-banner__list-title">Digital Currencies</div>
                        </div>
                        <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                            <img src="storage/app/media/cfd/crypto-hover.svg" alt="Digital Currencies">
                        </div>
                        <div class="simple-banner__list-content">
                            <div class="simple-banner__list-content-wrap">
                                <div class="simple-banner__list-content-title">Digital Currencies</div>
                                <div class="simple-banner__list-content-text">
                                    <p>Join the financial revolution with the freshest financial celebrities like
                                        Bitcoin, Ethereum, and Ripple</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="simple-banner__content simple-banner__mobile">
                <div class="simple-banner__content-wrap">
                    <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400">
                        <p>Trade the leading financial markets from around the world using the convenience of CFDs.</p>
                    </div>

                    <!---->
                    <div class="simple-banner__combined-links">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                <a href="{{route('register')}}" class="combined-links__item combined-links__right">Try
                                    On Demo</a>


                                <a href="{{route('register')}}" class="combined-links__item combined-links__left">Start
                                    Trading</a>

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
    <div id="" class="offer" style="background-image: url(storage/app/media/cfd/cfd-why.jpg);">


        <div class="container">
            <div class="offer__block" data-aos="fade-up">
                <div class="offer__block-top">
                    <div class="offer__title title title_center">
                        <p>Why <span style="font-weight:800;color:#80A9C3;">Trade CFDs</span>?</p>
                    </div>
                    <div class="offer__subtitle text">
                        <p>The most flexible and accessible method for speculating on the global financial markets.</p>
                    </div>
                    <div class="offer__text text">
                        <p>Global financial markets are where the wealth and riches of the world exchange hands. The
                            beauty of trading CFDs comes from the ability to benefit on price changes in the markets
                            without having to purchase any assets physically.
                            Altruisticmarkets is waiting to empower you with access to CFDs covering over 1,000 markets,
                            all from a single trading account and within one trading platform.&nbsp;</p>
                    </div>

                    <div class="offer__list">
                        <div class="offer__list-title"></div>
                        <div class="offer__list-subtitle"></div>
                        <div class="offer__enumeration">
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Hottest assets</div>
                                <div class="offer__enumeration-text">Trade the world’s most in-demand commodities,
                                    stocks, indices, and Digital Currencies.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Two-way trading</div>
                                <div class="offer__enumeration-text">Long &amp; short positions enable you to catch
                                    opportunities both when markets rise and when they fall.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">No strings attached</div>
                                <div class="offer__enumeration-text">When you trade with contracts, there is no
                                    obligation in relation to the ownership of the physical assets. </div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Increase your exposure</div>
                                <div class="offer__enumeration-text">Use leverage responsibly to amplify your position
                                    sizes, or to minimise the margin you need to allocate to trades.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer__block-bottom">
                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;"
                        class="btn btn-orange">Sign up</a>

                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="cfd-trading-with-trade-markets" class="tariffs style4  "
        style="background-image: url(storage/app/media/cfd/cfd-trading-with-trade-markets-min.jpg);     ">

        <div class="container">
            <div class="tariffs__title title title_center" data-aos="fade-up">
                <p>CFD Trading <span style="font-weight:800;color:#80A9C3;">With Altruisticmarkets</span></p>
            </div>
            <div class="tariffs__subtitle" data-aos="fade-up" data-aos-delay="100">
                <p>When you trade with Altruisticmarkets, you can benefit from the insights of our market professionals
                    and trade more effectively with our game-changing tools.</p>
            </div>
            <div class="tariffs__text" data-aos="fade-up" data-aos-delay="100">
                <p>When you trade CFDs with Altruisticmarkets, you have full access to an education section which
                    contains a wide range of tutorials that explain what CFD trading is, how CFD trading works, and the
                    best CFD trading strategies. Combine your
                    robust training with the Altruisticmarkets trader’s toolkit and make the most of the markets with
                    advantageous CFD trading conditions.</p>
            </div>

            <div class="tariffs__button" data-aos="fade-up" data-aos-delay="200">
                <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;"
                    class="btn btn-big btn-white-bright-red">Open account</a>

                <div class="warning-text">
                    <p><span style="color: rgb(239, 239, 239);">* Risk Warning: Trading in forex and CFDs could lead to
                            a loss of your invested capital.</span></p>
                </div>
            </div>










            <div class="tariffs__equal-list">
                <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__equal-list-content style1">
                        <div class="tariffs__equal-list-content-title">
                            <p>Professional support</p>
                        </div>
                        <div class="tariffs__equal-list-content-text">
                            <p>Altruisticmarkets market professionals and support team is ready to guide you
                                day-or-night in multiple languages via chat, phone, and e-mail.</p>
                        </div>
                    </div>
                </div>
                <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__equal-list-content style1">
                        <div class="tariffs__equal-list-content-title">
                            <p>Safe trading</p>
                        </div>
                        <div class="tariffs__equal-list-content-text">
                            <p>Altruisticmarkets NBH Markets EU Ltd is licensed and regulated by the Cyprus Securities
                                and Exchange Commission (No. 208/13) and in full compliance with MiFID II regulation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__equal-list-content style1">
                        <div class="tariffs__equal-list-content-title">
                            <p>Security first</p>
                        </div>
                        <div class="tariffs__equal-list-content-text">
                            <p>Altruisticmarkets keeps your funds in segregated accounts and utilises advanced
                                encryption technologies to secure all your personal and financial information.</p>
                        </div>
                    </div>
                </div>
            </div>











            <div class="tariffs__bottom-text" data-aos="fade-up" data-aos-delay="200"></div>
        </div>
    </div>
    <div id="cfd-trading-conditions" class="trade-currency" style="background: #ffffff;">
        <div class="container">

            <div class="trade-currency__title title title_center" data-aos="fade-up">
                <p>CFD Trading <span style="font-weight:800;color:#80A9C3;">Conditions</span></p>
            </div>
            <div class="trade-currency__text title_center" data-aos="fade-up" data-aos-delay="100">
                <p>View our trading conditions for commodities, stocks, indices, and Digital Currencies below.</p>
            </div>

            <div class="trade-currency__table" data-aos="fade-up">
                <script
                    src="https://wd.digitalprimedoirtrd.com/trade-currency-table?token=yAzuswUOKfRn46ofvCSkal1HYhwclV3mYODeHXOYTA5mGX"
                    crossorigin="anonymous"></script>
            </div>
            <div class="trade-currency__bottom-text" data-aos="fade-up" data-aos-delay="200">
                <p>* Based on Altruisticmarkets Gold Account for Professional Traders following MiFID II regulation.</p>
            </div>


            <div class="combined-links-container">
                <div class="combined-links">
                    <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="300">

                        <a href="{{url('/product')}}" class="combined-links__item combined-links__right">See all
                            assets</a>

                        <a href="{{route('register')}}" class="combined-links__item combined-links__left">Start
                            trading</a>

                    </div>
                </div>
            </div>

            <div class="warning-text warning-text_center" data-aos="fade-up" data-aos-delay="300">
                <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
            </div>

        </div>
    </div>

    <div id="best-cfd-trading-tools" class="simple-text style4  empty_padding_top  " style="background: #ffffff;">


        <div class="container">
            <div class="simple-text__title title title_center" data-aos="fade-up">
                <p>Best CFD <span style="font-weight:800;color:#80A9C3;">Trading Tools</span></p>
            </div>
            <div class="simple-text__text text" data-aos="fade-up">
                <p style="text-align: center;">The action never stops in the global financial markets. Whether markets
                    rise or fall, there is always an opportunity waiting. Altruisticmarkets prepares you to trade with
                    mission-oriented platforms, state-of-the-art tools, and tailor-made
                    courses. Explore the Altruisticmarkets trader’s toolbox now!</p>
            </div>


        </div>
    </div>

    <div id="trading-platforms" class="simple-block left  style4 small_padding  round_image "
        style="background: #ffffff;">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>

                <div class="simple-block__image">
                    <img src="storage/app/media/cfd/trading-platforms-min.jpg" alt="" data-aos="fade-right">
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__subtitle" data-aos="fade-left">
                        <p><strong style="color: #80A9C3;">Trading Platforms</strong></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p>A full-featured trading terminal is a necessity for a successful CFD trading experience.
                            Altruisticmarkets traders enjoy the versatility of the world-renowned trading platform
                            MetaTrader 4.</p>
                    </div>

                    <ul class="simple-block__list">
                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="450">
                            <div class="simple-block__list-caption">
                                <p><strong>Altruisticmarkets MT4-Trading:</strong> <span style="font-weight: normal;">I
                                        Desktop Versatility Infused Into Web Browser Accessibility.&nbsp;</span></p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="600">
                            <div class="simple-block__list-caption">
                                <p><strong>Altruisticmarkets MT4 Desktop:</strong> <span
                                        style="font-weight: normal;">The Most Favored Platform For Traders Who Seek
                                        Enhanced Tools And Customization.</span></p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="750">
                            <div class="simple-block__list-caption">
                                <p><strong>Altruisticmarkets MT4 Mobile:&nbsp;</strong><span
                                        style="font-weight: normal;">Trade On The Go, Access The Markets Wherever You
                                        Are, Whenever You Want.</span></p>
                            </div>

                        </li>
                    </ul>






                </div>
            </div>
        </div>
    </div>
    <div id="" class="simple-text-cols style5" style="background: #ededed;">
        <div class="container">
            <div class="simple-text-cols__top-title title title_center" data-aos="fade-up">
                <p>Trading <span style="font-weight:800;color:#80A9C3;">Tools</span></p>
            </div>
            <div class="simple-text-cols__content">
                <div class="simple-text-cols__content-col">

                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">


                        <div class="simple-text-cols__content-text">


                        </div>

                        <ul class="simple-text-cols__list">
                            <li class="simple-text-cols__list-item">
                                <div class="simple-text-cols__list-caption">Daily market news</div>
                                <div class="simple-text-cols__list-text">Start the day with a market briefing that aims
                                    to inform you of the most important trading events of the day.</div>
                            </li>
                            <li class="simple-text-cols__list-item">
                                <div class="simple-text-cols__list-caption">Economic calendar</div>
                                <div class="simple-text-cols__list-text">A comprehensive and customisable market
                                    schedule for you to track upcoming reports and releases.</div>
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="simple-text-cols__content-col">

                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">


                        <div class="simple-text-cols__content-text">


                        </div>

                        <ul class="simple-text-cols__list">
                            <li class="simple-text-cols__list-item">
                                <div class="simple-text-cols__list-caption">Professional insights</div>
                                <div class="simple-text-cols__list-text">Learn what market professionals expect for your
                                    favourite assets and make informed trading decisions.</div>
                            </li>
                            <li class="simple-text-cols__list-item">
                                <div class="simple-text-cols__list-caption">Trading Central targets</div>
                                <div class="simple-text-cols__list-text">Gather even more market information by taking a
                                    look at what past numbers predict for future market behaviour. Keep in mind,
                                    predictions are not guarantees and should be interpreted as such.</div>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="" class="offer" style="background-image: url(storage/app/media/cfd/cfd-education-min.jpg);">


        <div class="container">
            <div class="offer__block" data-aos="fade-up">
                <div class="offer__block-top">
                    <div class="offer__title title title_center">
                        <p>Trading <span style="font-weight:800;color:#80A9C3;">Education</span></p>
                    </div>
                    <div class="offer__subtitle text"></div>
                    <div class="offer__text text">
                        <p>Assets may differ according to their classification, but not so much when it comes to
                            analysing and trading. Visit the Altruisticmarkets education section to start learning the
                            basics of CFD trading. Follow our trading curriculum
                            to transform into a knowledgeable trader.</p>
                    </div>

                    <div class="offer__list">
                        <div class="offer__list-title">Full Courses</div>
                        <div class="offer__list-subtitle">Assess your knowledge, start from where you feel comfortable.
                        </div>
                        <div class="offer__enumeration">
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Trading for Beginners</div>
                                <div class="offer__enumeration-text">Our introduction to Trading guide for beginners is
                                    dedicated to the fundamentals of trading and investing. Learn the basics, reinforce
                                    your knowledge, and start paving the way for your portfolio’s success.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">How to start trading</div>
                                <div class="offer__enumeration-text">Our how-to start trading guide will give you
                                    fantastic insight into how you can control your portfolio with professional-level
                                    trading strategies, advanced analysis skills, and mindfulness for your psychology as
                                    a trader.</div>
                            </div>
                        </div>
                        <div class="offer__list-title">Extensive Resources</div>
                        <div class="offer__list-subtitle">Learn any topic or refresh your memory.</div>
                        <div class="offer__enumeration">
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Video library</div>
                                <div class="offer__enumeration-text">Short and easy to digest mini-guides on a variety
                                    of topics related to investing and trading financial markets.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Articles &amp; e-Books</div>
                                <div class="offer__enumeration-text">Enhance your academic knowledge of financial
                                    markets and CFD trading with our professional articles and guides.</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Trading infographics</div>
                                <div class="offer__enumeration-text">We simplified the simplest guides. If you prefer
                                    instructional learning, check our infographics to trade step-by-step!</div>
                            </div>
                            <div class="offer__enumeration-item">
                                <div class="offer__enumeration-icon"></div>
                                <div class="offer__enumeration-title">Glossary</div>
                                <div class="offer__enumeration-text">Our trading glossary is designed to provide a quick
                                    understanding when you encounter a confusing term.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer__block-bottom">
                    <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;"
                        class="btn btn-orange">Sign up</a>

                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="licensed-portfolio-management" class="licensed-blocks  empty_padding_top  "
        style="background-image: url(storage/app/media/cfd/licensed-blocks-bg-min.png);">
        <div class="container">
            <div class="licenced-blocks__title title title_center" data-aos="fade-up">
                <p>Licensed
                    <br><span style="font-weight:800;color:#80A9C3;">Portfolio Management</span>
                </p>
            </div>
            <div class="licenced-blocks__text" data-aos="fade-up">
                <p style="text-align: center;">Do you want to trade or invest in the financial markets but don’t have
                    enough time? The Altruisticmarkets portfolio management service might be the solution you’re looking
                    for.</p>
            </div>
        </div>

        <ul class="licensed-blocks__list">
            <li class="licensed-blocks__list-item style1" data-aos="fade-left" data-aos-delay="450">
                <div class="licensed-blocks__list-content">
                    <div class="licensed-blocks__list-wrap">
                        <div class="licensed-blocks__list-caption">
                            <p>What is <span style="color:#80A9C3;">Licensed Portfolio Management (LPM)?</span></p>
                        </div>
                        <div class="licensed-blocks__list-text">
                            <p>Altruisticmarkets Licensed Portfolio Management is a unique VIP trading service with a
                                limited number of participants. The LPM service allows you to recruit a professional
                                portfolio manager from our team of market professionals
                                and &nbsp;to manage your trading portfolio.</p>
                        </div>
                    </div>
                </div>
                <div class="licensed-blocks__list-image">
                    <img src="storage/app/media/cfd/licensed-1-min.jpg" alt="What is Licensed Portfolio Management (LPM)?
" data-aos="fade-right">
                </div>
            </li>
            <li class="licensed-blocks__list-item style2" data-aos="fade-left" data-aos-delay="600">
                <div class="licensed-blocks__list-content">
                    <div class="licensed-blocks__list-wrap">
                        <div class="licensed-blocks__list-caption">
                            <p>Why should I <span style="color:#80A9C3;">become a VIP member of LPM?</span></p>
                        </div>
                        <div class="licensed-blocks__list-text">
                            <p>Successful trading requires extensive learning, continuous market analysis, and ongoing
                                risk management processes. Delegate your everyday trading responsibilities to a
                                professional trader and save hundreds of hours of your
                                time. Along with potentially gaining financial returns, make time another return on your
                                investment.</p>
                        </div>
                    </div>
                </div>
                <div class="licensed-blocks__list-image">
                    <img src="storage/app/media/cfd/licensed-2-min.jpg" alt="Why should I become a VIP member of LPM?
" data-aos="fade-right">
                </div>
            </li>
        </ul>
    </div>
    <div id="how-can-you-join-the-trade-markets-LPM-service" class="arrows style2 disable_hover  "
        style="background-image: url(storage/app/media/portfolio-page/portfolio-arrows-bg-min.jpg)">
        <div class="container">
            <div class="arrows__title title title_center" data-aos="fade-up">
                <p>How Can You <span style="font-weight:800;color:#80A9C3;">Join The Altruisticmarkets<br>LPM
                        Service?</span></p>
            </div>

            <ul class="arrows__list">
                <li class="arrows__item" data-aos="fade-left" data-aos-delay="450" style="z-index: 5">
                    <div class="arrows__item-block">
                        <div class="arrows__item-number">1</div>
                        <div class="arrows__item-title">
                            <p>Sign up with Altruisticmarkets and
                                <br>verify your identity.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="arrows__item" data-aos="fade-left" data-aos-delay="600" style="z-index: 4">
                    <div class="arrows__item-block">
                        <div class="arrows__item-number">2</div>
                        <div class="arrows__item-title">
                            <p>Open a Silver
                                <br>Account. Deposit a
                                <br>minimum of $2,500.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="arrows__item" data-aos="fade-left" data-aos-delay="750" style="z-index: 3">
                    <div class="arrows__item-block">
                        <div class="arrows__item-number">3</div>
                        <div class="arrows__item-title">
                            <p>Get started
                                <br>with a 7-day
                                <br>trial.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="arrows__item" data-aos="fade-left" data-aos-delay="900" style="z-index: 2">
                    <div class="arrows__item-block">
                        <div class="arrows__item-number">4</div>
                        <div class="arrows__item-title">
                            <p>During the trial, we’ll follow
                                <br>a conservative, limited risk
                                <br>investment strategy.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="arrows__item" data-aos="fade-left" data-aos-delay="1050" style="z-index: 1">
                    <div class="arrows__item-block">
                        <div class="arrows__item-number">5</div>
                        <div class="arrows__item-title">
                            <p>Log in and review the
                                <br>recent performance of
                                <br>your account at any time.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="arrows__links" data-aos="fade-up" data-aos-delay="600">
                <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;"
                    class="btn btn-orange">Join now</a>

                <div class="warning-text warning-text_center">
                    <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                </div>
            </div>

        </div>
    </div>

    <div id="what-is-CFD-trading" class="simple-block left theme2 style2  wide_content ">
        <div class="container">
            <div class="simple-block__media" data-sticky-container>
                <div class="simple-block__image stick" data-sticky-class="sticking">
                    <div data-aos="fade-right">
                        <img src="storage/app/media/cfd/cfd-what-is.jpg" alt="What is CFD trading?">
                    </div>
                </div>

            </div>

            <div class="simple-block__content">
                <div>
                    <div class="simple-block__title title " data-aos="fade-left">
                        <p>What is <span style="font-weight:800;color:#80A9C3;">CFD trading?</span></p>
                    </div>

                    <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                        <p>New to CFD trading? Learn the basics of the easiest way to trade in the financial markets.
                        </p>
                    </div>

                    <ul class="simple-block__list">
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                            <div class="simple-block__list-caption">
                                <p>What is a CFD? – A basic overview</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Every day, the global financial markets attract millions of investors and traders who
                                    seek to capitalise on the fluctuating value of assets in the market. Most methods
                                    involve a complicated registration and compliance
                                    process, require dedicating large amounts of capital, and offer little room for
                                    manoeuvre when the winds shift. CFDs are innovative investment instruments which
                                    enable anybody from any kind of background to trade
                                    in the markets, regardless of capital size or education level.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                            <div class="simple-block__list-caption">
                                <p>What is CFD trading?</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>CFD stands for “Contract for Difference”. When trading the CFD of a financial asset,
                                    you don’t physically purchase the asset, but trade on the price difference. It
                                    allows you to open Buy (Long) positions when you predict
                                    the future price will be higher and Sell (Short) positions when you expect the
                                    future price will be lower. Any financial asset (e.g., commodities, stocks, indices,
                                    and Digital Currencies) can be traded in the form
                                    of CFDs.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                            <div class="simple-block__list-caption">
                                <p>How to profit in CFD trading?</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>Your profitability is based on whether the asset price moved in the predicted
                                    direction, and how far it moved when you choose to close the position. CFDs
                                    typically don’t have an expiration date and allow you to hold
                                    on to the position as long as you wish.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                            <div class="simple-block__list-caption">
                                <p>How to trade CFDs?</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>CFD trading is possible through online brokers who offer this service. As a leading
                                    online broker, Altruisticmarkets offers CFD trading in forex currency pairs;
                                    commodities like metals, oil, and agriculture products, stocks
                                    and indices from the U.S., Europe, and Asia and Digital Currencies like Bitcoin and
                                    Ethereum. Altruisticmarkets also provides leverage when trading CFDs, which allows
                                    you to open large positions while allocating only
                                    a small portion of the required capital.</p>
                            </div>

                        </li>
                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="1050">
                            <div class="simple-block__list-caption">
                                <p>Why trade with CFDs?</p>
                            </div>
                            <div class="simple-block__list-text">
                                <p>CFD trading gives you instant access to a wide range of financial markets and assets
                                    around the world. Most exchanges will require lengthy registration procedures,
                                    complicated trading processes, and frustrating limitations.
                                    CFDs enable anybody to take advantage of the opportunities provided by the financial
                                    markets without any discrimination.</p>
                            </div>

                        </li>
                    </ul>






                </div>
            </div>
        </div>
    </div>

    <div id="cfd-trade-markets-forex-trading-faq" class="faq " style="">
        <div class="container">
            <div class="faq__title title title_center" data-aos="fade-up">
                <p><span style="font-weight:800;color:#80A9C3;">Altruisticmarkets forex trading</span> FAQ</p>
            </div>
            <div class="faq__text" data-aos="fade-up" data-aos-delay="200">
                <p>This is when the forex market sleeps.</p>
            </div>
            <div class="accordion faq__list" data-aos="fade-up" data-aos-delay="400">
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>1. What does CFD mean?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>The term “CFD” is an abbreviation of “Contract for Difference” which refers to the
                                trading instruments that empower you to trade on the price differences.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>2. What are CFD trading hours?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>CFD trading hours can vary according to the market you are trading in. Apart from forex
                                currency pairs and cryptocurrencies, financial assets which are listed on a specific
                                stock and commodity exchanges are tradeable only
                                during their business hours. Please visit our trading hours page for more information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>3. What are commodities?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Commodities are physical resources which are often industrial raw materials. In the
                                financial markets, commodities are typically grouped into categories. Types of
                                commodities include precious metals (e.g., gold, silver,
                                platinum), industrial metals (e.g. copper, steel), energies (e.g., crude oil, natural
                                gas, gasoline), and agriculture products (e.g., sugar, corn, coffee).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>4. What are stocks?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Stocks are ownership portions of publicly traded companies. In the financial markets,
                                stocks are typically grouped based on their country of origin. Stocks are often grouped
                                as U.S. stocks (e.g., Amazon, Apple, Facebook)
                                which are traded on NYSE or NASDAQ exchanges, European stocks (e.g., Barclays, Renault,
                                Siemens), and Asian stocks (e.g., Softbank, Sony, Toyota).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>5. What are indices?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Indices are performance trackers of baskets of stocks curated by the creator. In the
                                financial markets, indices are typically grouped based on the companies included in the
                                baskets and their trading hours as American indices
                                (e.g., Dow Jones 30, S&amp;P 500, NASDAQ 100); European indices (e.g., FTSE 100, DAX 30,
                                CAC 40); and Asian indices (e.g., NIKKEI 225, TADAWUL, HANG SENG).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>6. What are Digital Currencies?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Digital Currencies are digital assets which were recently introduced as a new form of
                                currency based on advanced technologies. In the financial markets, Digital Currencies
                                are typically grouped as Bitcoin (the Bitcoin cryptocurrency
                                itself) or altcoins (e.g., Ethereum, Ripple, Dash).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>7. How is a CFD priced?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>The price of a CFD instrument follows the price of the underlying asset in real-time. For
                                example, if Coca-Cola (NYSE: KO) stocks are trading at $47.50/share in the New York
                                Stock Exchange (NYSE), Coca-Cola CFDs would have
                                the same price. The price of the CFD will change in real-time as the price of Coca-Cola
                                shares change.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>8. What is leverage?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Leverage is a trading mechanism which enables you to open trading positions larger than
                                your initial capital. When using leverage, you’re able to open larger position sizes;
                                therefore, the amount you gain or lose per pip
                                movement increases. It can increase your profit potential; but use it with caution, as
                                it can also cause losses in the same way.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>9. What is a pip?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>The pip signifies the most basic price change unit. In forex currency pairs, a pip is the
                                fourth decimal in the price of a currency pair. For example, when the EUR/USD currency
                                pair is trading at 1.1856, pip is the “6”
                                at the end (the fourth decimal). If EUR/USD rises to 1.1860, the new pip would be “0”,
                                and the pair would be said to have risen 4 pips.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>10. What is spread?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Spread is the difference between the selling price and the buying price of a currency
                                pair. In Forex trading platforms, each pair would have two prices: Bid is the selling
                                price and Ask is the buying price. Spread is calculated
                                in pips and often represents some of the broker’s commission. It is charged
                                automatically when a position is opened, and many traders often don’t notice it. One of
                                the ways Altruisticmarkets makes money is based on the
                                spreads from traders’ transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion__item faq__list-item">
                    <div class="accordion__item-header faq__list-header">
                        <span>11. How can I learn CFD trading?</span>
                        <div class="faq__list-header-icon"></div>
                    </div>
                    <div class="accordion__item-body-wrapper faq__list-body">
                        <div class="accordion__item-body text">
                            <p>Our vision at Altruisticmarkets is to enable everyone to obtain the power to reach
                                economic independence, and we believe CFD trading is the most viable financial solution
                                for the majority of people. In alignment with our goals,
                                we’ve created a comprehensive education platform for trading CFDs. Discover how CFD
                                trading works, the tips and tricks of CFD trading, popular trading strategies, and
                                easy-to-use market analysis methods.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@include('home.footer')