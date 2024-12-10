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



        <div id="forex-trading" class="simple-banner style4  " style="background-image: url(storage/app/media/forex/banner-bg-personal-trader-min.jpg);">

            <div class="container">
                <div class="simple-banner__content">
                    <div class="simple-banner__content-wrap">
                        <div class="simple-banner__title" data-aos="fade-up">
                            <h1>Forex Trading</h1>
                        </div>
                        <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200">
                            <p>Get involved with the largest financial market on the planet. Buy and sell the world’s most popular currency pairs using flexible CFDs.</p>
                        </div>

                        <div class="simple-banner__desktop">
                            <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"></div>








                            <div class="simple-banner__link ">
                                <div class="combined-links">
                                    <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="demo" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__right">Try on Demo</a>


                                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="live" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__left">Start Trading</a>

                                    </div>
                                </div>
                            </div>

                            <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                                <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="simple-banner__list">
                    <div class="simple-banner__list-item">
                        <div class="simple-banner__list-item-wrap">
                            <div class="simple-banner__list-head">
                                <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                    <img src="storage/app/media/forex/icon1.svg" alt="24-Hour Availabiltiy">
                                </div>
                                <div class="simple-banner__list-title">24-Hour Availabiltiy</div>
                            </div>
                            <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                                <img src="storage/app/media/forex/icon1.svg" alt="24-Hour Availabiltiy">
                            </div>
                            <div class="simple-banner__list-content">
                                <div class="simple-banner__list-content-wrap">
                                    <div class="simple-banner__list-content-title">24-Hour Availabiltiy</div>
                                    <div class="simple-banner__list-content-text">
                                        <p>Unlimited access to the markets 24 hours a day, five days a week.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simple-banner__list-item">
                        <div class="simple-banner__list-item-wrap">
                            <div class="simple-banner__list-head">
                                <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                    <img src="storage/app/media/forex/icon2.svg" alt="50+ Currency Pairs">
                                </div>
                                <div class="simple-banner__list-title">50+ Currency Pairs</div>
                            </div>
                            <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                                <img src="storage/app/media/forex/icon2.svg" alt="50+ Currency Pairs">
                            </div>
                            <div class="simple-banner__list-content">
                                <div class="simple-banner__list-content-wrap">
                                    <div class="simple-banner__list-content-title">50+ Currency Pairs</div>
                                    <div class="simple-banner__list-content-text">
                                        <p>Trade the most popular currency pairs from a single platform.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simple-banner__list-item">
                        <div class="simple-banner__list-item-wrap">
                            <div class="simple-banner__list-head">
                                <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                    <img src="storage/app/media/forex/icon3.svg" alt="Tight Spreads">
                                </div>
                                <div class="simple-banner__list-title">Tight Spreads</div>
                            </div>
                            <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                                <img src="storage/app/media/forex/icon3.svg" alt="Tight Spreads">
                            </div>
                            <div class="simple-banner__list-content">
                                <div class="simple-banner__list-content-wrap">
                                    <div class="simple-banner__list-content-title">Tight Spreads</div>
                                    <div class="simple-banner__list-content-text">
                                        <p>Beneficial trading conditions with spreads starting from 3 pips.*</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simple-banner__list-item">
                        <div class="simple-banner__list-item-wrap">
                            <div class="simple-banner__list-head">
                                <div class="simple-banner__list-icon simple-banner__list-icon_static">
                                    <img src="storage/app/media/forex/icon4.svg" alt="Powerful Leverage">
                                </div>
                                <div class="simple-banner__list-title">Powerful Leverage</div>
                            </div>
                            <div class="simple-banner__list-icon simple-banner__list-icon_hover">
                                <img src="storage/app/media/forex/icon4.svg" alt="Powerful Leverage">
                            </div>
                            <div class="simple-banner__list-content">
                                <div class="simple-banner__list-content-wrap">
                                    <div class="simple-banner__list-content-title">Powerful Leverage</div>
                                    <div class="simple-banner__list-content-text">
                                        <p>Increase your trading volume with up to 1:30.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="simple-banner__content simple-banner__mobile">
                    <div class="simple-banner__content-wrap">
                        <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"></div>

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
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div id="forex-trading-with-trade-markets" class="list-with-icons style4 theme2" style="background-image: url(storage/app/media/forex/Forex%20Trading%20with%20Dualix-bg-min.jpg);">
            <div class="container">
                <div class="list-with-icons__title title title_center" data-aos="fade-up">
                    <p>Forex Trading <span style="font-weight:800;color:#80A9C3;">With Altruisticmarkets</span></p>
                </div>

                <div class="list-with-icons__subtitle" data-aos="fade-up" data-aos-delay="100">
                    <p style="text-align: center;">Participate in the massive $6.6 trillion forex market.</p>
                </div>

                <div class="list-with-icons__text" data-aos="fade-up" data-aos-delay="100">
                    <p style="text-align: center;">In the world’s most prominent financial battlefield, your armour and weapons decide if you win or lose. Altruisticmarkets equips you with competitive trading conditions, a wide range of intuitive trading tools, and full education packages.
                        Get outstanding support, sharpen your forex trading skills and knowledge, and trade your way to prosperity!</p>
                </div>

                <ul class="list-with-icons__list">
                    <li class="list-with-icons__list-item" data-aos="fade-right" data-aos-delay="550">
                        <div class="list-with-icons__list-block">
                            <div class="list-with-icons__list-icon">
                                <div class="list-with-icons__list-icon-inner" style="background-image: url(storage/app/media/trust1.svg)"></div>
                            </div>
                            <div class="list-with-icons__list-title">
                                <p>Round the Clock
                                    <br>Support</p>

                            </div>
                            <div class="list-with-icons__list-text">
                                <p>The Altruisticmarkets customer support team is ready to help you five days a week, 24 hours a day via chat, phone, and email in multiple languages.</p>

                            </div>
                        </div>
                    </li>
                    <li class="list-with-icons__list-item" data-aos="fade-right" data-aos-delay="700">
                        <div class="list-with-icons__list-block">
                            <div class="list-with-icons__list-icon">
                                <div class="list-with-icons__list-icon-inner" style="background-image: url(storage/app/media/trust3.svg)"></div>
                            </div>
                            <div class="list-with-icons__list-title">
                                <p>Fully Regulated
                                    <br>and Authorised</p>

                            </div>
                            <div class="list-with-icons__list-text">
                                <p>Altruisticmarkets NBH Markets is licensed and regulated by the Cyprus Securities and Exchange Commission (CySEC) with the license No. 208/13.</p>

                            </div>
                        </div>
                    </li>
                    <li class="list-with-icons__list-item" data-aos="fade-right" data-aos-delay="850">
                        <div class="list-with-icons__list-block">
                            <div class="list-with-icons__list-icon">
                                <div class="list-with-icons__list-icon-inner" style="background-image: url(storage/app/media/icons/computer.svg)"></div>
                            </div>
                            <div class="list-with-icons__list-title">
                                <p>Safe and
                                    <br>Secure</p>

                            </div>
                            <div class="list-with-icons__list-text">
                                <p>Custom funds are held in segregated accounts in top-tier banks; Data is encrypted with the latest SSL technologies and treated per GDPR.</p>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="forex-trading-conditions" class="trade-currency" style="background: #ffffff;">
            <div class="container">

                <div class="trade-currency__title title title_center" data-aos="fade-up">
                    <p>Forex <span style="font-weight:800;color:#80A9C3;">Trading Conditions</span></p>
                </div>
                <div class="trade-currency__text title_center" data-aos="fade-up" data-aos-delay="100">
                    <p>View the competitive trading conditions for the currency-pairs offered by Altruisticmarkets below.</p>
                </div>

                <div class="trade-currency__table" data-aos="fade-up">
                    <script src="https://wd.digitalprimedoirtrd.com/trade-currency-table?token=yAzuswUOKfRn46ofvCSkal1HYhwclV3mYODeHXOYTA5mGX" crossorigin="anonymous"></script>
                </div>
                <div class="trade-currency__bottom-text" data-aos="fade-up" data-aos-delay="200">
                    <p>* Based on Altruisticmarkets Gold Account for Professional Traders following MiFID II regulation.</p>
                </div>


                <div class="combined-links-container">
                    <div class="combined-links">
                        <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="300">

                            <a href="products-2.html" class="combined-links__item combined-links__right">See All Assets</a>

                            <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;" class="combined-links__item combined-links__left">Start Trading</a>

                        </div>
                    </div>
                </div>

                <div class="warning-text warning-text_center" data-aos="fade-up" data-aos-delay="300">
                    <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                </div>

            </div>
        </div>

        <div id="best-forex-trading-tools" class="simple-text style4  empty_padding_top  " style="background: #ffffff;">


            <div class="container">
                <div class="simple-text__title title title_center" data-aos="fade-up">
                    <p>Best Forex <span style="font-weight:800;color:#80A9C3;">Trading Tools</span></p>
                </div>
                <div class="simple-text__text text" data-aos="fade-up">
                    <p style="text-align: center;">Forex markets change all the time. Open your Trader’s Toolbox for maximum versatility. Always be prepared for any surprises; always be ready to turn actions into opportunities.</p>
                </div>


            </div>
        </div>

        <div id="trading-platforms" class="simple-block left  style4 small_padding  round_image " style="background: #ffffff;">
            <div class="container">
                <div class="simple-block__media" data-sticky-container>

                    <div class="simple-block__image">
                        <img src="storage/app/media/forex/trading-platforms-min.jpg" alt="" data-aos="fade-right">
                    </div>

                </div>

                <div class="simple-block__content">
                    <div>
                        <div class="simple-block__subtitle" data-aos="fade-left">
                            <p><strong style="color: #80A9C3;">Trading Platforms</strong></p>
                        </div>

                        <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                            <p>A full-featured trading terminal is a necessity for a successful CFD trading experience. Altruisticmarkets traders enjoy the versatility of the world-renowned trading platform MetaTrader 4.</p>
                        </div>

                        <ul class="simple-block__list">
                            <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="450">
                                <div class="simple-block__list-caption">
                                    <p>Altruisticmarkets MT4 Web Trading: <span style="font-weight: normal;">Desktop versatility infused into web browser accessibility.</span></p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="600">
                                <div class="simple-block__list-caption">
                                    <p>Altruisticmarkets MT4 Desktop: <span style="font-weight: normal;">The most favoured platform for traders who seek enhanced tools and customisation.</span></p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="750">
                                <div class="simple-block__list-caption">
                                    <p>Altruisticmarkets MT4 Mobile: <span style="font-weight: normal;">Trade on the go, access the markets wherever you are, whenever you want.</span></p>
                                </div>

                            </li>
                        </ul>






                    </div>
                </div>
            </div>
        </div>
        <div id="trading-tools" class="simple-text-cols style5" style="background: #ededed;">
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
                                    <div class="simple-text-cols__list-text">Start the day with a market briefing that aims to inform you of the most important trading events of the day.</div>
                                </li>
                                <li class="simple-text-cols__list-item">
                                    <div class="simple-text-cols__list-caption">Economic calendar</div>
                                    <div class="simple-text-cols__list-text">Take a look at the prescheduled market events for the day and discover forecasts from the top analysts.</div>
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
                                    <div class="simple-text-cols__list-text">Go deeper into your favourite currency pairs and see what seasoned professionals think about their future.</div>
                                </li>
                                <li class="simple-text-cols__list-item">
                                    <div class="simple-text-cols__list-caption">Trading Central targets</div>
                                    <div class="simple-text-cols__list-text">A versatile plug-in for MT4 platform, get real-time signals on the markets and apply pro-level information for your trades.</div>
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
                            <p>Forex <strong style="color: #80A9C3;">Education</strong></p>
                        </div>
                        <div class="offer__subtitle text"></div>
                        <div class="offer__text text">
                            <p>At Altruisticmarkets, we believe freedom comes with power, and power comes with knowledge. To support your personal growth as a trader, our market professionals have curated a wide range of educational materials for you.</p>
                        </div>

                        <div class="offer__list">
                            <div class="offer__list-title">Introductory courses</div>
                            <div class="offer__list-subtitle">Assess your knowledge, start from where you feel comfortable.</div>
                            <div class="offer__enumeration">
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">Introduction to Trading</div>
                                    <div class="offer__enumeration-text">First steps are often hard to take. Our introduction to trading guides is designed to lay the foundations of forex trading and help you to start trading on your own.</div>
                                </div>
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">How to start trading</div>
                                    <div class="offer__enumeration-text">Knowledge is power! After you set the foundation, our Becoming a Professional series will enhance your trading with lessons on pro-level market analysis, risk management, and trading strategies.</div>
                                </div>
                            </div>
                            <div class="offer__list-title">Extensive Resources</div>
                            <div class="offer__list-subtitle">Learn any topic or refresh your memory.</div>
                            <div class="offer__enumeration">
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">Video library</div>
                                    <div class="offer__enumeration-text">Access a wide range of subject-specific mini-tutorials on various aspects of forex trading is available on-demand.</div>
                                </div>
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">Articles &amp; e-Books</div>
                                    <div class="offer__enumeration-text">Deep dive into the minds of forex trading geniuses and develop your forex trading abilities.</div>
                                </div>
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">Forex infographics</div>
                                    <div class="offer__enumeration-text">Visual step-by-step guides to help you perform trading operations systematically and straightforwardly.</div>
                                </div>
                                <div class="offer__enumeration-item">
                                    <div class="offer__enumeration-icon"></div>
                                    <div class="offer__enumeration-title">Glossary</div>
                                    <div class="offer__enumeration-text">Not sure what a term means? Visit our investment glossary to resolve your query immediately.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offer__block-bottom">
                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="javascript:;" class="btn btn-orange">Sign up</a>

                        <div class="warning-text">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital. &nbsp;</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="licensed-portfolio-management" class="licensed-blocks  empty_padding_top  " style="background-image: url(storage/app/media/cfd/licensed-blocks-bg-min.png);">
            <div class="container">
                <div class="licenced-blocks__title title title_center" data-aos="fade-up">
                    <p>Licensed
                        <br><span style="font-weight:800;color:#80A9C3;">Portfolio Management</span></p>
                </div>
                <div class="licenced-blocks__text" data-aos="fade-up">
                    <p style="text-align: center;">Do you want to trade or invest in the financial markets but don’t have enough time? The Altruisticmarkets portfolio management service might be the solution you’re looking for.</p>
                </div>
            </div>

            <ul class="licensed-blocks__list">
                <li class="licensed-blocks__list-item style1" data-aos="fade-left" data-aos-delay="450">
                    <div class="licensed-blocks__list-content">
                        <div class="licensed-blocks__list-wrap">
                            <div class="licensed-blocks__list-caption">
                                <p>What is &nbsp;<span style="color:#80A9C3;">Licensed Portfolio Management (LPM)?</span></p>
                            </div>
                            <div class="licensed-blocks__list-text">
                                <p>Altruisticmarkets Licensed Portfolio Management is a unique VIP trading service with a limited number of participants. The LPM service allows you to recruit a professional portfolio manager from the team of market professionals
                                    and Altruisticmarkets to manage your trading portfolio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="licensed-blocks__list-image">
                        <img src="storage/app/media/forex/licensed-1-min.jpg" alt="What is &amp;nbsp;Licensed Portfolio Management (LPM)?
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
                                <p>Successful trading requires extensive learning, continuous market analysis, and ongoing risk management processes. Delegate your everyday trading responsibilities to a professional trader and save hundreds of hours of your
                                    time. Along with potentially gaining financial returns, make time another return on your investment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="licensed-blocks__list-image">
                        <img src="storage/app/media/forex/licensed-2-min.jpg" alt="Why should I become a VIP member of LPM?
" data-aos="fade-right">
                    </div>
                </li>
            </ul>
        </div>
        <div id="how-can-you-join-the-trade-markets-LPM-service" class="arrows style2 disable_hover  four_cols " style="background-image: url(storage/app/media/portfolio-page/portfolio-arrows-bg-min.jpg)">
            <div class="container">
                <div class="arrows__title title title_center" data-aos="fade-up">
                    <p>How can you <span style="font-weight:800;color:#80A9C3;">join the Altruisticmarkets<br>LPM service?</span></p>
                </div>

                <ul class="arrows__list">
                    <li class="arrows__item" data-aos="fade-left" data-aos-delay="450" style="z-index: 4">
                        <div class="arrows__item-block">
                            <div class="arrows__item-number">1</div>
                            <div class="arrows__item-title">
                                <p>Sign up with Altruisticmarkets, verify
                                    <br>your identity and open
                                    <br>a Silver Account by depositing
                                    <br>a minimum of $2,500.</p>
                            </div>
                        </div>
                    </li>
                    <li class="arrows__item" data-aos="fade-left" data-aos-delay="600" style="z-index: 3">
                        <div class="arrows__item-block">
                            <div class="arrows__item-number">2</div>
                            <div class="arrows__item-title">
                                <p>Get started with
                                    <br>a 7-day trial.</p>
                            </div>
                        </div>
                    </li>
                    <li class="arrows__item" data-aos="fade-left" data-aos-delay="750" style="z-index: 2">
                        <div class="arrows__item-block">
                            <div class="arrows__item-number">3</div>
                            <div class="arrows__item-title">
                                <p>During the trial period,
                                    <br>we’ll try to protect your
                                    <br>account by closing positions
                                    <br>once potential losses exceed
                                    <br>10% of your account value.</p>
                            </div>
                        </div>
                    </li>
                    <li class="arrows__item" data-aos="fade-left" data-aos-delay="900" style="z-index: 1">
                        <div class="arrows__item-block">
                            <div class="arrows__item-number">4</div>
                            <div class="arrows__item-title">
                                <p>Log in to view your
                                    <br>trading account statement
                                    <br>at any time.</p>
                            </div>
                        </div>
                    </li>
                </ul>


            </div>
        </div>

        <div id="what-is-forex-trading" class="simple-block left theme2 style2  wide_content ">
            <div class="container">
                <div class="simple-block__media" data-sticky-container>
                    <div class="simple-block__image stick" data-sticky-class="sticking">
                        <div data-aos="fade-right">
                            <img src="storage/app/media/forex/what-is-forex-trading-min.jpg" alt="What is Forex trading?">
                        </div>
                    </div>

                </div>

                <div class="simple-block__content">
                    <div>
                        <div class="simple-block__title title " data-aos="fade-left">
                            <p>What is <span style="font-weight:800;color:#80A9C3;">Forex trading?</span></p>
                        </div>

                        <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100">
                            <p><strong>A quick guide if you’re new to the thrilling world of online forex trading.</strong></p>
                        </div>

                        <ul class="simple-block__list">
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                                <div class="simple-block__list-caption">
                                    <p>What is Forex? – A basic overview</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>In the modern world, capital is the true source of power. A country’s global power is determined by its economic strength and represented by its national currency. Forex is an international market where currencies demonstrate
                                        their power and empower those who believe in them.</p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                                <div class="simple-block__list-caption">
                                    <p>What is the forex market?</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>The forex market is a global financial market where traders and investors buy and sell national currencies against each other. With over $6 trillion daily turnover, forex is the largest financial market in the world.</p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                                <div class="simple-block__list-caption">
                                    <p>What is forex trading?</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>Forex trading is to buy and sell currency pairs in the form of contract for difference (CFD) to profit from the price change over time. A currency pair is considered a singular financial instrument. The market participants
                                        aim to forecast its future value and take positions accordingly; commonly known as buy when low, sell when high, and vice versa.</p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                                <div class="simple-block__list-caption">
                                    <p>What is a forex currency pair?</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>A currency pair is formed between two currencies. For example, the U.S. dollar (USD) and the euro (EUR) makes the EUR/USD currency pair. The price of the pair indicates how much one euro is worth in U.S. dollars. The
                                        three-letter symbol used to define one of the currencies in the pair is derived from the ISO 4217 standard. The three letters used are typically the first letters the country abbreviation “US”, and the third letter
                                        is the first the name of the currency, i.e. “D” for dollar.</p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="1050">
                                <div class="simple-block__list-caption">
                                    <p>How to trade forex?</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>Forex trading is performed through forex brokers. Altruisticmarkets is a regulated forex broker and offers forex CFDs on EUR/USD, GBP/USD, USD/JPY and many other major, minor, cross, and exotic currency pairs. Moreover,
                                        when you trade forex with Altruisticmarkets, you can utilise leverage to increase the size of your positions and increase your potential to profit on the forex market.</p>
                                </div>

                            </li>
                            <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="1200">
                                <div class="simple-block__list-caption">
                                    <p>Why trade in the forex market?</p>
                                </div>
                                <div class="simple-block__list-text">
                                    <p>Forex trading enables you to access the financial opportunities that arise in the foreign exchange market. As the world’s most popular currencies gain or lose value against each other, you can buy and sell them and
                                        profit on price differences.</p>
                                </div>

                            </li>
                        </ul>






                    </div>
                </div>
            </div>
        </div>

        <div id="forex-trading-FAQ" class="faq " style="">
            <div class="container">
                <div class="faq__title title title_center" data-aos="fade-up">
                    <p><span style="font-weight:800;color:#80A9C3;">Forex Trading</span> FAQ</p>
                </div>
                <div class="accordion faq__list" data-aos="fade-up" data-aos-delay="400">
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What does forex mean?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">The term “forex” is a mesh of the words “foreign” and “exchange” which means the exchange of foreign currencies against each other.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What are forex trading hours?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">The global forex markets open on Sunday evening (23:00 GMT) with the Australian market and remain active until the U.S. markets close on Friday (21:00 GMT), giving forex traders the ability to trade in the forex markets
                                    24 hours a day, five days a week.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What are major, minor, and exotic currency pairs?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">Currency pairs are commonly grouped as majors, minors, and exotics. Major currency pairs typically contain USD and another major currency, for example; EUR/USD, GBP/USD, USD/JPY, and USD/CAD. Minor currency pairs, also
                                    known as cross-pairs, consist of two major currencies which are not the USD. For example, EUR/GBP, GBP/CHF, and CAD/JPY are among minor currency pairs. Any other currency pairs which contain at least one non-major currency
                                    are considered as exotics. For example, USD/MXN, EUR/TRY, and GBP/SAR.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>How is a currency pair priced?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">The logic of supply and demand determines the price of a currency pair. When investors buy and sell currencies against each other for any reason (e.g., international trade, investing in countries, cross-border payments),
                                    they subjectively and collectively attribute value to the currency pair. Investors’ trading decisions are often based on their expectations, more so than what actually happens.</p>

                                <p dir="ltr">Forex markets are not governed by a central supervision authority. However, each country’s central bank can influence the price of its national currency. They use economic measures such as interest rates to maintain a minimum
                                    value, thereby influencing market prices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What is leverage?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">Leverage is a trading mechanism which enables you to open trading positions larger than your initial capital. When using leverage, you’re able to open larger position sizes; therefore, the amount you gain or lose per pip
                                    movement increases. It can increase your profit potential; but use it with caution, as it can also cause losses in the same way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What is a pip?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">The pip signifies the most basic price change unit. In forex currency pairs, a pip is the fourth decimal in the price of a currency pair. For example, when the EUR/USD currency pair is trading at 1.1856, pip is the “6”
                                    at the end (the fourth decimal). If EUR/USD rises to 1.1860, the new pip would be “0”, and the pair would be said to have risen 4 pips.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>What is spread?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p>Spread is the difference between the selling price and the buying price of a currency pair. In Forex trading platforms, each pair would have two prices: Bid is the selling price and Ask is the buying price. Spread is calculated
                                    in pips and represents the broker’s commission. It is charged automatically when a position is opened. As a forex broker, part of the profit which Altruisticmarkets makes is based on the spreads from traders’ transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__item faq__list-item">
                        <div class="accordion__item-header faq__list-header">
                            <span>How can I learn forex trading?</span>
                            <div class="faq__list-header-icon"></div>
                        </div>
                        <div class="accordion__item-body-wrapper faq__list-body">
                            <div class="accordion__item-body text">
                                <p dir="ltr">At Altruisticmarkets, we are committed to ensuring our clients are equipped with everything they need for success by providing them with the best forex trading tools available. Visit our education section to learn what circumstances
                                    move currency prices, use our trader’s toolkit to analyse the forex market, and execute your trades on our state-of-the-art trading platforms with the most competitive trading conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="speak-account-manager" class="true-power " style="background-image: url(storage/app/media/forex/true-power-min.jpg)">
            <div class="container">
                <div class="true-power__subtitle" data-aos="fade-up">
                    <p style="text-align: center;"><span style="font-weight:800;">Speak to an Account Manager</span>
                        <br>to Find Out More</p>
                </div>


                <div class="combined-links">
                    <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">

                        <a href="{{url('/product')}}" class="combined-links__item combined-links__right"><span>View All Products</span></a>


                        <a href="{{url('/contact')}}" class="combined-links__item combined-links__left"><span>Get in Touch</span></a>
                    </div>
                </div>

            </div>
        </div>
       
    </main>

@include('home.footer')