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
            
            

<div id="banner" class="simple-banner style2  "
style=""
>

    <div class="container">
                <div class="simple-banner__content">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__title" data-aos="fade-up"><h1>Speculate on Precious Metals
	<br>with Altruisticmarkets</h1></div>
                                <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200"><p>Trade CFDs online for a convenient way to speculate on the price of precious metals. like gold, silver and more.</p></div>
                
                <div class="simple-banner__desktop">
                    <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"><p>With Altruisticmarkets, you can trade CFDs of the <strong>most popular precious
metals</strong> via a convenient online trading platform.</p>

<p><strong>Start Trading Precious Metals with Altruisticmarkets</strong></p></div>

                    
                                        
                    
                    
                      
                    

                                        <div class="simple-banner__link ">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                                <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                                
                                
                                                                <a  href="{{route('register')}}" class="combined-links__item combined-links__left">Open Live Account</a>
                                
                                                            </div>
                        </div>
                    </div>

                                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>
                                        
                                    </div>
            </div>
        </div>

        
                     <div class="simple-banner__image" data-aos="fade-left" data-aos-delay="200">
                <script src="https://wd.trademarkets.eu/trade-currency-table?token=SOTkpKWq8WJuiWW3cccApb15obwpFR7SgFnLmMUJ3Z0CRY" crossorigin="anonymous"></script>
            </div>
        
        
        
                
        <div class="simple-banner__content simple-banner__mobile">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"><p>With Altruisticmarkets, you can trade CFDs of the <strong>most popular precious
metals</strong> via a convenient online trading platform.</p>

<p><strong>Start Trading Precious Metals with Altruisticmarkets</strong></p></div>

                            <!---->
                                <div class="simple-banner__combined-links">
                    <div class="combined-links">
                        <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                            
                            
                                                        <a   href="{{route('register')}}" class="combined-links__item combined-links__left">Open Live Account</a>
                            
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
            <div id="introduction" class="text-center-block-big style2" style="background-image: url(storage/app/media/precious-metals/pr_introduction.jpg)">
    <div class="container">
                <div class="text-center-block-big__title title title_center" data-aos="fade-up"><p>Introduction To <span style="font-weight:800;color:#80A9C3;">Trading Precious Metals</span></p></div>
                        <div class="text-center-block-big__subtitle" data-aos="fade-up" data-aos-delay="100"><p>Although precious metals do have certain industrial applications, they are overwhelmingly considered a store of value.</p></div>
                <div class="text-center-block-big__text" data-aos="fade-up" data-aos-delay="200"><p>Precious metals are renowned as safe-haven assets. When traditional financial markets, such as stocks, indices and bonds stop performing, many investors typically park their cash in precious metal investments. Humans instinctively recognise these shiny metals as valuable. Gold played a vital role in the early Egyptian, Lydian, Greek and Roman empires. Throughout history, gold and silver have been used as money. Even though precious metals no longer have an active role in the economy, central banks and large commercial banks continue to hoard them, and active investors use them as a hedging tool.</p></div>

            </div>
</div>        
            <div id="" class="offer" style="">


    <div class="container">
        <div class="offer__block" data-aos="fade-up">
            <div class="offer__block-top">
                <div class="offer__title title title_center"><p>The Benefits Of <span style="font-weight:800;color:#80A9C3;">Trading Precious Metals CFDs</span></p></div>
                <div class="offer__subtitle text"></div>
                <div class="offer__text text"><p>Trading precious metals using contracts for difference offers numerous advantages over other forms of investing, such as physical ownership.</p></div>

                <div class="offer__list">
                                        <div class="offer__list-title"></div>
                    <div class="offer__list-subtitle"></div>
                    <div class="offer__enumeration">
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">No physical ownership necessary</div>
                            <div class="offer__enumeration-text">CFDs allow you to gain exposure to the precious metals market without having to physically buy and store coins or ingots, and later have to find a buyer to sell them.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Lower cost of investing</div>
                            <div class="offer__enumeration-text">You can trade on the real spot price, making it easier to reach profitability, as opposed to paying a premium for physical bouillon, as well as postage or storage costs.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Go long or short</div>
                            <div class="offer__enumeration-text">When using CFDs, you’re able to open short positions, which allow you to speculate on prices falling and profit if they do. With hedging, you’re able to go long and short concurrently.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Use leverage to decrease capital requirements</div>
                            <div class="offer__enumeration-text">You’re able to leverage your positions as much as 1:20 on precious metals. Using leverage reduces how much of your capital is required to open a precious metals CFD.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Trade precious metals at any time of the day</div>
                            <div class="offer__enumeration-text">Altruisticmarkets is an international broker providing online trading services across all time zones Monday thru Friday. Never worry about when you can open and close your trades.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Easily liquidate your positions</div>
                            <div class="offer__enumeration-text">When you need to close your trades, there is no need to find a buyer or negotiate a deal, just log in to your trading account and tap close. If the market is open, your trade will be closed immediately.</div>
                        </div>
                                            </div>
                                    </div>
                            </div>

            <div class="offer__block-bottom">
                                    <a  href="{{route('register')}}"  class="btn btn-orange">Sign up</a>

                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital. &nbsp;</p>
                    </div>
                
                            </div>
        </div>
    </div>
</div>        
            
<div id="what-we-offer" class="simple-block left  style4  empty_padding_bottom wide_content " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/home-trade-markets/trade-home.png" alt="What We Offer" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                <div class="simple-block__title title " data-aos="fade-left"><p>What <span style="font-weight:800;color:#80A9C3;">We Offer</span></p></div>
                                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"></div>

                                <ul class="simple-block__list">
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                        <div class="simple-block__list-caption"><p><span style="color: #80A9C3;">The most convenient trading platforms</span></p>
</div>
                                                <div class="simple-block__list-text"><p>Trade your favourite precious metals as a CFD from a convenient mobile application, web trading application, or the advanced MT4 trading platform.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                        <div class="simple-block__list-caption"><p><span style="color: #80A9C3;">A variety of precious metals</span></p>
</div>
                                                <div class="simple-block__list-text"><p>You can trade four different precious metals CFDs with Altruisticmarkets; gold, silver, platinum and palladium, all quoted against the US dollar.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                        <div class="simple-block__list-caption"><p><span style="color: #80A9C3;">Low spreads</span></p>
</div>
                                                <div class="simple-block__list-text"><p>Take advantage of low spreads and low commissions when you trade precious metals with Altruisticmarkets.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                        <div class="simple-block__list-caption"><p><span style="color: #80A9C3;">The best support and guidance</span></p>
</div>
                                                <div class="simple-block__list-text"><p>Every Altruisticmarkets customer receives the same premium support from our specialists. Some accounts qualify for relationship managers and mentorship.</p>
</div>
                        
                                            </li>
                                    </ul>
                
                
                
                                
                
                
            </div>
        </div>
    </div>
</div>        
            <div id="trading-accounts" class="tariffs-accounts">

    <div class="container">
                <div class="tariffs-accounts__title title title_center" data-aos="fade-up"><p>Trading <span style="font-weight:800;color:#80A9C3;">Accounts</span></p></div>
        
                <div class="tariffs-accounts__text" data-aos="fade-up" data-aos-delay="100"><p>Choose the right trading account to match your investment goals. Whether you’re a day-trader looking to profit from short term price movements or a position trader, looking to benefit from the long-term appreciation or depreciation of precious metals, then Altruisticmarkets probably has a suitable account for you.</p>

<p><strong>Here are the four most popular trading accounts for precious metals traders.</strong></p></div>
        
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

                                        <a  href="{{route('register')}}" class="tariffs-accounts__blocks-link basic">Get Started</a>
                    
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

                                        <a  href="{{route('register')}}" class="tariffs-accounts__blocks-link bronze">Get Started</a>
                    
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

                                        <a  href="{{route('register')}}" class="tariffs-accounts__blocks-link silver">Get Started</a>
                    
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

                                        <a  href="{{route('register')}}" class="tariffs-accounts__blocks-link gold">Get Started</a>
                    
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

                                        <a  href="{{route('register')}}" class="tariffs-accounts__blocks-link platinum">Get Started</a>
                    
                                    </div>
            </div>
                    </div>

        <div class="tariffs-accounts__bottom-text" data-aos="fade-up" data-aos-delay="200"><p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>

<p>
	<br>
</p>

<p>If you can’t find the right trading account, don’t worry. We’ve got more options waiting for you.</p>

<p><span style="color:#80A9C3;"><strong>View all Altruisticmarkets trading accounts</strong></span></p></div>
    </div>
</div>        
            <div id="how-open-trading-account" class="numeral-links style2" style="background-image: url(storage/app/media/indices/stocks-benefits-min.jpg)">
    <div class="container">
                <div class="numeral-links__title title title_center"  data-aos="fade-up"><p><span style="font-weight:800;color:#80A9C3;">How To Open</span> A Trading Account?</p></div>
                        <div class="numeral-links__text"  data-aos="fade-up"><p>Open your Altruisticmarkets trading account in <strong>four simple steps.</strong></p></div>
        
                <div class="numeral-links__link" data-aos="fade-up" data-aos-delay="200">
            <a  href="{{route('register')}}"  class="btn btn-orange btn-little">Open a Trading Account</a>

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
                        <div class="numeral-links__item-subtitle">Simply click the sign-up button and provide your personal information in the registration form.</div>
                    </div>
                </a>
            </li>
                    <li class="numeral-links__item">
                <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                    <div class="numeral-links__item-number">02</div>
                    <div class="numeral-links__item-content">
                        <div class="numeral-links__item-title">Verify</div>
                        <div class="numeral-links__item-subtitle">Verify your account by uploading your proof of identity and proof of address documents.</div>
                    </div>
                </a>
            </li>
                    <li class="numeral-links__item">
                <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                    <div class="numeral-links__item-number">03</div>
                    <div class="numeral-links__item-content">
                        <div class="numeral-links__item-title">Choose</div>
                        <div class="numeral-links__item-subtitle">Once your Altruisticmarkets trading account is verified, it’s time to choose your trading platform and your preferred trading account. </div>
                    </div>
                </a>
            </li>
                    <li class="numeral-links__item">
                <a href="#" class="numeral-links__item-inner" data-aos="fade-up" data-aos-delay="100">
                    <div class="numeral-links__item-number">04</div>
                    <div class="numeral-links__item-content">
                        <div class="numeral-links__item-title">Fund</div>
                        <div class="numeral-links__item-subtitle">Fund your trading account using one of our secure payment methods to start trading CFDs popular energy commodities.</div>
                    </div>
                </a>
            </li>
                </ul>
    </div>
</div>        
            <div id="want-practice-first" class="card style2" style="background: #ffffff;">
    <div class="container">
        <div class="card__block" style="background-image: url(storage/app/media/cryptocurrencies/practice-min.jpg)">
            <div class="card__content">
                                <div class="card__title" data-aos="fade-left"><p>Want To <span style="font-weight:800;color:#80A9C3;">Practice First?</span></p></div>
                                <div class="card__text" data-aos="fade-left"><p>Practice makes perfect. That’s why we give all clients <span style="font-weight:800;color:#80A9C3;">a free lifetime demo trading account</span> to polish their skills for trading precious metals.</p></div>
            </div>

            
                        <a  href="{{route('register')}}"  class="btn btn-big btn-white-red">Open a Demo Account</a>
            
                    </div>

                <div class="warning-text">
            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
        </div>
            </div>
</div>        
            
<div id="trade-precious-metals-online" class="tariffs style2  "
     style="background-image: url(storage/app/media/precious-metals/pr_online.jpg);     ">

    <div class="container">
                <div class="tariffs__title title title_center" data-aos="fade-up"><p>Trade <span style="font-weight:800;color:#80A9C3;">Precious Metals Online</span></p></div>
                        <div class="tariffs__subtitle" data-aos="fade-up" data-aos-delay="100"><p>Altruisticmarkets offers two premium online trading platforms to analyse and trade precious metals. Detailed charts can show years of historical price information for all available precious metals trading pairs.</p></div>
                        <div class="tariffs__text" data-aos="fade-up" data-aos-delay="100"><p>We offer MetaTrader 4, the world’s most popular and advanced trading platform with endless capabilities, and our very own Altruisticmarkets trading platform, which is ideal for beginners looking for a modern trading interface.</p></div>
        
        
        
        
        
                <div class="tariffs__equal-list">
                                    <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tariffs__equal-list-title"><p>MetaTrader 4</p>
</div>
                <div class="tariffs__equal-list-content style2">
                    <ul>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Available on desktop, web, iOS and Android devices</div>
                                                    </li>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Advanced charting and technical analysis capabilities</div>
                                                    </li>
                                            </ul>

                    
                                        <div class="combined-links">
                        <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Open Account</a>
                            
                            
                            
                                                        <a href="trading/mt4-2.html" class="combined-links__item combined-links__left">Learn More</a>
                                                    </div>
                    </div>
                                    </div>

            </div>

                                    <div class="tariffs__equal-list-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tariffs__equal-list-title"><p>Altruisticmarkets Trader</p>
</div>
                <div class="tariffs__equal-list-content style2">
                    <ul>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Available on web, iOS and Android</div>
                                                    </li>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Easy to navigate 1000s of trading instruments</div>
                                                    </li>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Modern design and sleek interface</div>
                                                    </li>
                                                <li>
                            <div class="tariffs__equal-list-content-title">Loaded with the most popular market analysis tools</div>
                                                    </li>
                                            </ul>

                    
                                        <div class="combined-links">
                        <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Open Account</a>
                            
                            
                            
                                                        <a href="{{route('register')}}" class="combined-links__item combined-links__left">Learn More</a>
                                                    </div>
                    </div>
                                    </div>

            </div>

                                </div>
        
        

          



         




        <div class="tariffs__bottom-text" data-aos="fade-up" data-aos-delay="200"><p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p></div>
    </div>
</div>        
            <div id="gold-best-CFD" class="simple-text-cols style4"
     style="background: #ffffff;">
    <div class="container">
                        <div class="simple-text-cols__content">
                            <div class="simple-text-cols__content-col">
                                        <div class="simple-text-cols__inner-title title" data-aos="fade-up"><p><span style="font-weight:800;color:#80A9C3;">Gold</span>: Best CFD</p></div>
                    
                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">
                        
                        
                        <div class="simple-text-cols__content-text">
                        <p>Gold is the third most traded financial asset in the world. According to the World Gold Council as of December 2019, the average daily trading volume of gold was $145.5 bln, which is higher than the average daily trading volume of EUR/USD.</p>

                        </div>

                        
                                                <div class="simple-text-cols__link">
                            <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="" href="{{route('register')}}" class="btn btn-small btn-orange">Start trading gold</a>
                        </div>

                        <div class="warning-text">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                        </div>
                        
                                            </div>
                </div>
                            <div class="simple-text-cols__content-col">
                    
                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">
                        
                                                <div class="simple-text-cols__content-title"><p class="oc-text-capitalize"><span style="color:#80A9C3;">We offer more than precious metals</span></p>
</div>
                        
                        <div class="simple-text-cols__content-text">
                        <p>If you want to trade gold or silver, then you have come to the right place. However, if you’re interested in more than precious metals, we’ve still got you covered. Our vision is to provide a one-stop destination for traders and investors to access a wide range of products in the financial markets. With one trading account, you can discover hundreds of financial instruments. If you don’t see any good trading opportunities in the precious metals markets, you could easily view the charts of numerous forex pairs, stocks, indices and more. If you do find an opportunity, you can go right ahead and open a position. There is no need to open a new account or change any settings.</p>

                        </div>

                        
                        
                                            </div>
                </div>
                    </div>

        
            </div>
</div>        
            
<div id="speak-account-manager" class="true-power " style="background-image: url(storage/app/media/true-power-min.jpg)">
    <div class="container">
                        <div class="true-power__subtitle" data-aos="fade-up"><div style="max-width: 450px;margin-left:auto;margin-right:auto;">

	<p><span style="font-weight:800;">Speak to an Account Manager</span> to Find Out More.</p>
</div></div>
                
        
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