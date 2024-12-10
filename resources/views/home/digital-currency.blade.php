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
                <div class="simple-banner__title" data-aos="fade-up"><h1>Trade Digital Asset CFDs
	<br>with Altruisticmarkets</h1></div>
                                <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200"><p>Speculate on the price of major Digital Assets like Bitcoin and Ethereum in a regulated environment.</p></div>
                
                <div class="simple-banner__desktop">
                    <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"><p>With a Altruisticmarkets CFD trading account, you can speculate on the price of the <strong>most popular Digital assets in the world </strong>via a safe and reliable online trading platform.</p>

<p><strong>Start trading Digital Currency CFDs with Altruisticmarkets</strong></p></div>

                    
                                        
                    
                    
                      
                    

                                        <div class="simple-banner__link ">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                                <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                                
                                
                                                                <a   href="{{route('register')}}" class="combined-links__item combined-links__left">Open a Trading Account</a>
                                
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
                <script src="https://wd.trademarkets.eu/trade-currency-table?token=bT1e9tV5hrAtDKUbdvyvna3R7SppMzYfQrgIK2CnjcLjCq" crossorigin="anonymous"></script>
            </div>
        
        
        
                
        <div class="simple-banner__content simple-banner__mobile">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"><p>With a Altruisticmarkets CFD trading account, you can speculate on the price of the <strong>most popular Digital assets in the world </strong>via a safe and reliable online trading platform.</p>

<p><strong>Start trading Digital Currency CFDs with Altruisticmarkets</strong></p></div>

                            <!---->
                                <div class="simple-banner__combined-links">
                    <div class="combined-links">
                        <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                            
                            
                                                        <a   href="{{route('register')}}" class="combined-links__item combined-links__left">Open a Trading Account</a>
                            
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
            <div id="introduction" class="text-center-block-big style2" style="background-image: url(storage/app/media/cryptocurrencies/intro-crypto-min.jpg)">
    <div class="container">
                <div class="text-center-block-big__title title title_center" data-aos="fade-up"><p>Introduction To <span style="font-weight:800;color:#80A9C3;">Trading Digital Assets</span></p></div>
                        <div class="text-center-block-big__subtitle" data-aos="fade-up" data-aos-delay="100"><p>Digital Assets, often known as Digital Currencies, are a revolutionary concept in terms of the technology which drives them and status they hold in society.</p></div>
                <div class="text-center-block-big__text" data-aos="fade-up" data-aos-delay="200"><p>Digital Currencies, such as Bitcoin, Ethereum, Litecoin and Ripple are incredibly well known; however, something many traders overlook is that each of these Digital Currencies is powered by different technologies. Digital Currencies are governed by technology, secured by powerful cryptography, powered by a decentralised network of independent miners and incredibly transparent as all transactions are recorded on a public ledger, known as a blockchain. Besides the technology being truly fascinating, so are the assets. Bitcoin, for example, is not considered legal tender anywhere in the world but is regularly used for making cost-effective international transfers. Financial institutions lean towards Digital Currencies being assets rather than currencies. Digital Currencies are regularly used as both a trading instrument and payment instrument.</p>

<p>
	<br>
</p></div>

            </div>
</div>        
            <div id="" class="offer" style="">


    <div class="container">
        <div class="offer__block" data-aos="fade-up">
            <div class="offer__block-top">
                <div class="offer__title title title_center"><p>The Benefits Of <span style="font-weight:800;color:#80A9C3;">Trading Digital Currency CFDs</span></p></div>
                <div class="offer__subtitle text"></div>
                <div class="offer__text text"><p>Trading Digital Currencies using Contracts for Difference (CFDs) offers several advantages compared to purchasing coins and tokens from digital asset exchanges.</p></div>

                <div class="offer__list">
                                        <div class="offer__list-title"></div>
                    <div class="offer__list-subtitle"></div>
                    <div class="offer__enumeration">
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Trade  Digital Currency CFDs in a regulated environment</div>
                            <div class="offer__enumeration-text">The world of Digital Currencies and digital assets lacks clear regulations. Altruisticmarkets is a regulated investment firm that offers CFDs, which are highly recognised across the globe.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Use leverage to decrease capital requirements</div>
                            <div class="offer__enumeration-text">When you trade Digital Currencies as CFDs, you’re able to use leverage to reduce how much margin is required to open and maintain a position. When you trade Digital Currencies on an exchange, you need to buy and hold the coins in your account. Keep in mind that if used improperly, leverage can amplify losses.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Lower risk of low liquidity</div>
                            <div class="offer__enumeration-text">Some exchanges experience liquidity issues, making it harder to buy or sell at the moment you want and offer a higher probability of experiencing slippage. As a CFD provider, Altruisticmarkets sources liquidity from multiple sources.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Reliable funding methods</div>
                            <div class="offer__enumeration-text">Many Digital Currency exchanges either lack reliable methods to fund trading accounts or charge high fees for making deposits and withdrawals which eat into profits. Altruisticmarkets offers free deposits &amp; timely withdrawals.</div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Short sell Digital Currencies</div>
                            <div class="offer__enumeration-text">Instead of buying and holding Digital Currencies from an exchange, you can open both long and short positions using CFDs, allowing you to speculate on prices falling as well as rising. </div>
                        </div>
                                                <div class="offer__enumeration-item">
                            <div class="offer__enumeration-icon"></div>
                            <div class="offer__enumeration-title">Low fees</div>
                            <div class="offer__enumeration-text">Trade Digital Currencies without paying high fees. Exchanges can charge as much as 0.5% of your transactions. Costs this high make short term day trading too expensive. Altruisticmarkets charges a fraction of what a crypto-exchange would.</div>
                        </div>
                                            </div>
                                    </div>
                            </div>

            <div class="offer__block-bottom">
                                    <a  href="{{route('register')}}"  class="btn btn-orange">Start Trading</a>

                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.  </p>
                    </div>
                
                            </div>
        </div>
    </div>
</div>        
            
<div id="what-we-offer" class="simple-block right  style1  empty_padding_top empty_padding_bottom wide_content round_image " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/cryptocurrencies/b-image.png" alt="What We Offer" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                <div class="simple-block__title title " data-aos="fade-left"><p>What <span style="font-weight:800;color:#80A9C3;">We Offer</span></p></div>
                                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"></div>

                                <ul class="simple-block__list">
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="450">
                        <div class="simple-block__list-caption"><p>Trade on MetaTrader 4</p>
</div>
                                                <div class="simple-block__list-text"><p>There is no need to learn a new trading platform if you’re interested in trading Digital Currencies. Trade the most popular Digital Currencies on MT4.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="600">
                        <div class="simple-block__list-caption"><p>Trade the most valuable Digital Currencies</p>
</div>
                                                <div class="simple-block__list-text"><p>Access the most valuable Digital Currencies, such as Bitcoin, Ethereum, Litecoin, Dash, Ripple and more.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="750">
                        <div class="simple-block__list-caption"><p>Demo accounts</p>
</div>
                                                <div class="simple-block__list-text"><p>Practice trading Digital Currencies on a demo account for as long as you want. Test the different platforms offered by Altruisticmarkets.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style3" data-aos="fade-left" data-aos-delay="900">
                        <div class="simple-block__list-caption"><p>Easy deposit &amp; withdrawal methods</p>
</div>
                                                <div class="simple-block__list-text"><p>Deposit and withdraw funds from your trading account using the most trusted and reliable payment methods.</p>
</div>
                        
                                            </li>
                                    </ul>
                
                
                
                                
                
                
            </div>
        </div>
    </div>
</div>        
            
<div id="trading-accounts" class="tariffs style3  "
     style="     background: #ffffff;">

    <div class="container">
                <div class="tariffs__title title title_center" data-aos="fade-up"><p>Trading <span style="font-weight:800;color:#80A9C3;">Accounts</span></p></div>
                                <div class="tariffs__text" data-aos="fade-up" data-aos-delay="100"><p>Choose the right trading account to match your investment goals. Whether you’re a day-trader looking to potentially profit from short term price movements in the Digital Currency market or a position trader, looking to potentially benefit from the long-term appreciation of the world’s most trusted Digital assets, Altruisticmarkets has a suitable account for you.</p>

<p><strong>Here&nbsp;</strong><strong>are
the four most popular trading accounts amongst Digital Currency
traders.</strong></p></div>
        
        
        
        
                <div class="tariffs__blocks">
                                    <div class="tariffs__blocks-item">
                <div class="tariffs__blocks-inner bronze" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__blocks-bg" style="background-image: url(storage/app/media/portfolio-page/tariff__silver.html)"></div>
                    <div class="tariffs__blocks-title bronze"><p>Altruisticmarkets&nbsp;<strong style="color:#B14421;">BRONZE</strong></p>
</div>

                    <ul>
                                                <li>
                            <b>Minimum deposit €1,000</b>
                        </li>
                                                <li>
                            Minimum spread (floating) <b>0.1 pip</b>
                        </li>
                                                <li>
                            Trading commissions <br><b>From $/€/£12 per lot</b>
                        </li>
                                            </ul>

                                        <a data-fancybox data-src="#sign-up-modal" data-acc-type="" data-acc-plan="bronze" href="{{route('register')}}" class="tariffs__blocks-link bronze">Find out more</a>
                    
                                    </div>
            </div>
                        <div class="tariffs__blocks-item">
                <div class="tariffs__blocks-inner silver" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__blocks-bg" style="background-image: url(storage/app/media/agriculture/tariffs-premium-2.html)"></div>
                    <div class="tariffs__blocks-title silver"><p>Altruisticmarkets&nbsp;<strong><span style="color: rgb(134, 134, 146);">SILVER</span></strong></p>
</div>

                    <ul>
                                                <li>
                            <b>Minimum deposit €2,500</b>
                        </li>
                                                <li>
                            Minimum spread (floating) <b>0.1 pip</b>
                        </li>
                                                <li>
                            Trading commissions <br><b>From $/€/£11 per lot</b>
                        </li>
                                            </ul>

                                        <a  href="{{route('register')}}" class="tariffs__blocks-link silver">Find out more</a>
                    
                                    </div>
            </div>
                        <div class="tariffs__blocks-item">
                <div class="tariffs__blocks-inner gold" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__blocks-bg" style="background-image: url(storage/app/media/portfolio-page/tariff__bronze.html)"></div>
                    <div class="tariffs__blocks-title gold"><p>Altruisticmarkets&nbsp;<strong style="color:#D8B177;">GOLD</strong></p>
</div>

                    <ul>
                                                <li>
                            <b>Minimum deposit €10,000</b>
                        </li>
                                                <li>
                            Minimum spread (floating) <b>0.1 pip</b>
                        </li>
                                                <li>
                            Trading commissions <br><b>From $/€/£10 per lot</b>
                        </li>
                                            </ul>

                                        <a  href="{{route('register')}}" class="tariffs__blocks-link gold">Find out more</a>
                    
                                    </div>
            </div>
                        <div class="tariffs__blocks-item">
                <div class="tariffs__blocks-inner platinum" data-aos="fade-up" data-aos-delay="100">
                    <div class="tariffs__blocks-bg" style="background-image: url(storage/app/media/agriculture/trade-markets-gold.html)"></div>
                    <div class="tariffs__blocks-title platinum"><p>Altruisticmarkets&nbsp;<strong><span style="color: rgb(83, 83, 85);">PREMIUM</span></strong></p>
</div>

                    <ul>
                                                <li>
                            <b>Minimum deposit €50,000</b>
                        </li>
                                                <li>
                            Minimum spread (floating) <b>0.1 pip</b>
                        </li>
                                                <li>
                            Trading commissions <br><b>From $/€/£7 Per Lot</b>
                        </li>
                                            </ul>

                                        <a  href="{{route('register')}}" class="tariffs__blocks-link platinum">Find out more</a>
                    
                                    </div>
            </div>
                    </div>
        
        
        

          



         




        <div class="tariffs__bottom-text" data-aos="fade-up" data-aos-delay="200"><p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>

<p>
	<br>
</p>

<p>If you can’t find the right trading account, don’t worry. We’ve got more options waiting for you.</p>

<p><span style="color:#80A9C3;"><strong>View all Altruisticmarkets trading accounts</strong></span></p></div>
    </div>
</div>        
            <div id="how-open-trading-account" class="numeral-links style2" style="background-image: url(storage/app/media/cryptocurrencies/open-account-crypto-min.jpg)">
    <div class="container">
                <div class="numeral-links__title title title_center"  data-aos="fade-up"><p><span style="font-weight:800;color:#80A9C3;">How To Open</span> A Trading Account?</p></div>
                        <div class="numeral-links__text"  data-aos="fade-up"><p>Open your Altruisticmarkets  trading account in <strong>four simple steps.</strong></p></div>
        
                <div class="numeral-links__link" data-aos="fade-up" data-aos-delay="200">
            <a  href="{{route('register')}}"  class="btn btn-orange btn-little">Sign up</a>

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
                        <div class="numeral-links__item-subtitle">Once your Altruisticmarkets trading account is verified, it’s time to choose your trading platform and your preferred trading account.</div>
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
            <div id="want-practice-first" class="card style3" style="background: #ffffff;">
    <div class="container">
        <div class="card__block" style="background-image: url(storage/app/media/cryptocurrencies/practice-min.jpg)">
            <div class="card__content">
                                <div class="card__title" data-aos="fade-left"><p>Want To <span style="font-weight:800;color:#80A9C3;">Practice First?</span></p></div>
                                <div class="card__text" data-aos="fade-left"><p>Digital Currency is complicated, public key, private key, wallets, miners. Fortunately, you can speculate on the price of Bitcoin and other Digital Currencies from our intuitive trading platforms, designed for everyone. <span style="font-weight:800;color:#80A9C3;">Get a free demo account to try today.</span></p></div>
            </div>

            
                        <a href="{{route('register')}}"  class="btn btn-big btn-white-red">Get a demo account</a>
            
                    </div>

                <div class="warning-text">
            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
        </div>
            </div>
</div>        
            
<div id="trade-cryptocurrencies-online" class="tariffs style2  "
     style="background-image: url(storage/app/media/cryptocurrencies/trade-crypto-min.jpg);     ">

    <div class="container">
                <div class="tariffs__title title title_center" data-aos="fade-up"><p>Trade <span style="font-weight:800;color:#80A9C3;">Digital Currency CFDs Online</span></p></div>
                        <div class="tariffs__subtitle" data-aos="fade-up" data-aos-delay="100"><p>We offer MetaTrader 4, the world’s most popular and advanced trading platform with endless capabilities, and our very own Altruisticmarkets trading platform, which is ideal for beginners looking for a modern trading interface.</p></div>
                
        
        
        
        
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
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Open account</a>
                            
                            
                            
                                                        <a href="trading/mt4-2.html" class="combined-links__item combined-links__left">Learn more</a>
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
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Open account</a>
                            
                            
                            
                                                        <a href="{{route('register')}}" class="combined-links__item combined-links__left">Learn more</a>
                                                    </div>
                    </div>
                                    </div>

            </div>

                                </div>
        
        

          



         




        <div class="tariffs__bottom-text" data-aos="fade-up" data-aos-delay="200"><p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p></div>
    </div>
</div>        
            
<div id="meet-bitcoin" class="simple-block right  style1  " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/cryptocurrencies/meet-bitcoin-min.jpg" alt="Meet Bitcoin: 

The Very First Digital Currency" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                <div class="simple-block__title title " data-aos="fade-left"><p>Meet Bitcoin: </p>

<p><span style="font-weight:800;color:#80A9C3;">The Very First Digital Currency</span></p></div>
                                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"><p>Bitcoin is the first of it’s kind and paved the way for the hundreds and thousands of Digital assets and digital tokens which followed. Bitcoin was introduced to the world in 2008, and became operational in 2009 as an open-source and decentralised peer-to-peer digital currency that could operate entirely autonomously from any government or bank.</p>

<p>Bitcoin lived as a fringe topic for many years, up until prominent US exchanges launched Bitcoin futures in 2017. Later, BTC rapidly ascended to record-breaking highs, stopping just short of $30,000. Since then, Bitcoin has become a household name in the world of online commerce and investing. Are you ready to start trading Bitcoin CFDs?</p></div>

                
                
                
                                                                
                                <div class="simple-block__link " data-aos="fade-left" data-aos-delay="300">
                                        <a  href="{{route('register')}}" class="btn btn-big btn-orange">Start trading Digital Currencies</a>
                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>
                    
                                    </div>
                
                
            </div>
        </div>
    </div>
</div>        
            <div id="we-offer-more-than-cryptocurrencies" class="simple-text-cols style3"
     style="background: #ffffff;">
    <div class="container">
                        <div class="simple-text-cols__content">
                            <div class="simple-text-cols__content-col">
                                        <div class="simple-text-cols__inner-title title" data-aos="fade-up"><p class="oc-text-capitalize">We offer more than
	<br><span style="color: #80A9C3;font-weight:800;">Digital Currencies</span></p></div>
                    
                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">
                        
                        
                        <div class="simple-text-cols__content-text">
                        <p>If it’s Digital Currencies that interest you, that’s great. At Altruisticmarkets you can access the most popular Digital Currencies, such as Bitcoin, Litecoin, Ethereum and a lot more. By trading CFD instruments, you can potentially reduce trading costs and enjoy the peace of mind that you’re investing with a regulated broker. Besides the advantages that Altruisticmarkets offers as a Digital Currency trading destination, we offer much more to our clients. Apply what you know about the Digital Currency market to various other financial instruments available to trade on Altruisticmarkets.</p>

                        </div>

                        
                                                <div class="simple-text-cols__link">
                            <a  href="{{route('register')}}" class="btn btn-small btn-orange">Start Trading Digital Currency on CFD</a>
                        </div>

                        <div class="warning-text">
                            <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                        </div>
                        
                                            </div>
                </div>
                            <div class="simple-text-cols__content-col">
                    
                    <div class="simple-text-cols__text" data-aos="fade-up" data-aos-delay="100">
                        
                                                <div class="simple-text-cols__content-title"><p class="oc-text-capitalize"><span style="color: #80A9C3;">The home of investing</span></p>
</div>
                        
                        <div class="simple-text-cols__content-text">
                        <p>Our vision is to provide a one-stop destination for traders and investors to access a wide range of products in the financial markets. With one trading account, you can discover hundreds of financial instruments on the fly. Suppose you don’t see any good trading opportunities among the dozens of Digital Currency trading pairs on offer. In that case, you could quickly check the charts of numerous forex pairs, stocks, indices, commodities and more. If you do find an opportunity, go right ahead and open a trade. There is no need to open a new account or change any settings.</p>

                        </div>

                        
                        
                                            </div>
                </div>
                    </div>

        
            </div>
</div>        
            
<div id="speak-account-manager" class="true-power " style="background-image: url(storage/app/media/true-power-min.jpg)">
    <div class="container">
                        <div class="true-power__subtitle" data-aos="fade-up"><div style="max-width: 450px;margin-left:auto;margin-right:auto;">

	<p><span style="font-weight:800;">Speak to an account manager</span> to find out more.</p>
</div></div>
                
        
                <div class="combined-links">
            <div class="true-power__links combined-links__wrap" data-aos="fade-up" data-aos-delay="300">
                
                                <a href="{{url('/product')}}" class="combined-links__item combined-links__right"><span>View all products</span></a>
                
                
                                <a href="{{url('/contact')}}" class="combined-links__item combined-links__left"><span>Get in touch</span></a>
                            </div>
        </div>

                    </div>
</div>        
                        </main>


@include('home.footer')