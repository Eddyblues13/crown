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
            
            

<div id="" class="simple-banner style6  "
style=""
>

    <div class="container">
                <div class="simple-banner__content">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__title" data-aos="fade-up"><h1>Trade GBP/USD</h1></div>
                                <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200"><p>Trade Forex CFDs with Altruisticmarkets</p></div>
                
                <div class="simple-banner__desktop">
                    <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"><p><strong>When you open a CFD trading account with Altruisticmarkets, you can trade the world’s most popular currency pairs, including the legendary British pound versus the US dollar.<br></strong></p></div>

                    
                                        
                    
                    
                      
                    

                                        <div class="simple-banner__link ">
                        <div class="combined-links">
                            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                                <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                                
                                
                                                                <a href="{{route('register')}}" class="combined-links__item combined-links__left">Open a Trading Account</a>
                                
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
            <img src="storage/app/media/gbpusd/gb_banner-img.png" alt="">
        </div>
        
         
        
        
                
        <div class="simple-banner__content simple-banner__mobile">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"><p><strong>When you open a CFD trading account with Altruisticmarkets, you can trade the world’s most popular currency pairs, including the legendary British pound versus the US dollar.<br></strong></p></div>

                            <!---->
                                <div class="simple-banner__combined-links">
                    <div class="combined-links">
                        <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Try on Demo</a>
                            
                            
                                                        <a  href="{{route('register')}}" class="combined-links__item combined-links__left">Open a Trading Account</a>
                            
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
            
<div id="" class="simple-block left theme1 style1 small_padding  round_image " >
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/gbpusd/gb_about.jpg" alt="About GBP/USD" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                <div class="simple-block__title title " data-aos="fade-left"><p>About <span style="font-weight:800;color:#80A9C3;">GBP/USD</span></p></div>
                                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"><p>The US dollar is the most traded currency in the world. However, London is responsible for clearing more foreign exchange transactions than any other financial centre. Much like how the United States dominates the securities market, the UK dominates the foreign exchange market.</p>

<p>Many traders refer to GBP/USD by its nickname “The Cable”. The name originates from the transatlantic cable laid between the two countries to transmit exchange rates between the London Stock Exchange and the New York Stock Exchange.</p>

<p>The GBP/USD pair has a long and complicated history. Before World War 2, the British pound was worth more than five dollars. The currency pair has had its ups and downs in more recent history as each country went through recessions.</p>

<h3>British pound</h3>

<p>The British pound is the world’s longest surviving currency. The first pound coin was issued in 1489, and the first banknotes began circulating in 1694. At a point, the UK was the most powerful economy in the world, and therefore, so was the domestic currency.</p>

<h3>US dollar</h3>

<p>The US dollar came to existence in 1792, shortly after the American Revolutionary War ended. Following a series of significant geopolitical shifts, such as WWII, the USD became the world’s leading currency.</p></div>

                
                
                
                                
                
                
            </div>
        </div>
    </div>
</div>        
            <div id="" class="simple-text-block style4"
     style="">
    <div class="container">
        <div class="simple-text-block__content">
            <div class="simple-text-block__content-col">
                                <div class="simple-text-block__top-title title" data-aos="fade-up"><p>GBP/USD <span style="font-weight:800;color:#80A9C3;">CFD Specifications</span></p></div>
                
                <div class="simple-text-block__text text" data-aos="fade-up" data-aos-delay="100">
                    <p>When you trade GBP/USD, the base asset is pounds, and the quote asset is dollars. The contract size, often referred to as the Lot size is 100,000 pounds. The smallest order size that can be placed is 1,000 pounds, also referred to as a micro-Lot or 0.01 Lots. Orders can only be submitted in increments of 1,000, which means the second smallest order size that can be placed is 2,000.</p>

<p>GBP/USD is quoted with five digits. The fourth digit is known as the Pip, and the fifth digit is known as a Point. The value of a Pip depends on the size of the contract. If the contract is 1 Lot, the Pip value will be $10. If the contract size were 0.01 Lots, the Pip value would be $0.10.</p>

<p>One of the benefits of CFD trading is you can trade with leverage, which reduces how much money needed to open a trade. Altruisticmarkets offers up to 1:30 leverage for trading GBP/USD, which means you only need to provide 3.33% margin to open a position.</p>
                </div>
            </div>
            <div class="simple-text-block__content-col">
                                <div class="simple-text-block__table">
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Base asset: British pounds
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Quote asset: US dollars
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Contract size (Lot size): 100,000 GBP (1 Lot)
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Min trade size: 1,000 GBP (0.01 Lots)
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Max trade size: 10,000,000 GBP (100 Lots)
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Pip position: 0.00010
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                <b>Maximum leverage (margin): 1:30 (3.33%)</b>
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                            <div class="simple-text-block__item">
                                
                            </div>
                        </div>
                    </div>
                                    </div>
                            </div>
        </div>
    </div>
</div>        
            <div id="" class="text-center-block style2" style="background-image: url(storage/app/media/gbpusd/gb_why.jpg)">
    <div class="container">
                <div class="text-center-block__title title title_center" data-aos="fade-up"><p>Why trade <span style="font-weight:800;color:#80A9C3;">GBP/USD?</span></p></div>
                <div class="text-center-block__text text" data-aos="fade-up" data-aos-delay="100"><ul>
	<li>Many traders find that lucrative price movements occur in the GBP/USD pair. However, this pair is notorious for giving false signals and can be very misleading.</li>
	<li>The pound and the dollar are widely covered and commented on in leading finance publications. However, the overabundance of information can be distracting.</li>
	<li>The GBP/USD pair is active across two consecutive trading sessions. The pair is most active when the European and US trading sessions overlap.</li>
</ul></div>

        
        
        
                <div class="combined-links">
            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                <a  href="{{route('register')}}" class="combined-links__item combined-links__right">Open Account</a>
                
                
                                <a  href="{{route('register')}}" class="combined-links__item combined-links__left">Discover GBP/USD trading opportunities with Altruisticmarkets </a>
                
                            </div>
        </div>

                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                <p><span style="color: rgb(209, 213, 216);">* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</span></p>
            </div>
                        </div>
</div>        
            
<div id="" class="simple-text style8   "
     style="">

    
    <div class="container">
        <div class="simple-text__title title title_center" data-aos="fade-up"><p>How a CFD <span style="font-weight:800;color:#80A9C3;">Transaction Works</span></p></div>        <div class="simple-text__text text" data-aos="fade-up"><p style="text-align: center;">When you go short on GBP/USD, you’re theoretically selling pounds with dollars. When you close the trade, your profit or loss will be calculated in dollars. If the pound strengthened against the dollar, you’d get fewer dollars when you close the transaction. If the pound strengthened, you’d get back more dollars.</p>

<p style="text-align: center;"><img src="storage/app/media/gbpusd/gb_info1.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="" class="simple-text style8   "
     style="background: #e7e7e7;">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><p style="text-align: center;">With leverage, you’re able to open larger positions than your capital would otherwise permit. When you trade forex CFDs with Altruisticmarkets, you can use leverage as high as 1:30; meaning you only need to provide margin to cover 3.33% of the position’s value.</p>

<p style="text-align: center;"><img src="storage/app/media/gbpusd/gb_info2.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="" class="simple-text style7   "
     style="background: #e7e7e7;">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><p style="text-align: center;">When you trade forex CFDs, you don’t need to own either of the currencies included in the pair. For example, if your trading account balance is denominated in British pounds, you can still trade GBP/USD. The purpose of a CFD is to enable traders to speculate on the price of one currency against another. When a CFD is closed, it will always be settled in cash, i.e. by increasing or decreasing the amount of balance in your trading account.</p>

<p style="text-align: center;"><img src="storage/app/media/gbpusd/gb_info3.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="" class="simple-block left theme1 style1 small_padding  empty_padding_bottom round_image " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/gbpusd/gb_costs.jpg" alt="" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                                <div class="simple-block__subtitle" data-aos="fade-left"><p>Costs To Trade GBP/USD</p></div>
                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"><p>There are different costs involved when trading CFDs with Altruisticmarkets. There are three primary factors which influence how much you pay for your transactions; they are:</p></div>

                                <ul class="simple-block__list">
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="450">
                        <div class="simple-block__list-caption"><p style="font-weight:400;">The size of your trade, the bigger the trade, the higher the fees.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="600">
                        <div class="simple-block__list-caption"><p style="font-weight:400;">The instrument you’re trading, as different products have different characteristics.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="750">
                        <div class="simple-block__list-caption"><p style="font-weight:400;">The <a href="trading-accounts-2.html">type of account</a> you have, as different accounts have different conditions.</p>
</div>
                        
                                            </li>
                                    </ul>
                
                
                
                                
                
                
            </div>
        </div>
    </div>
</div>        
            
<div id="" class="simple-text style8   "
     style="">

    
    <div class="container">
        <div class="simple-text__title title title_center" data-aos="fade-up"><p>Costs Related To <span style="font-weight:800;color:#80A9C3;">Trading CFDs</span></p></div>        <div class="simple-text__text text" data-aos="fade-up"><p style="text-align: center;">The different costs to be aware of when trading forex CFDs are spreads, commissions and swaps.</p>

<p style="text-align: center;">
	<br>
</p>

<h3 style="text-align: center;"><strong>Spread</strong></h3>

<p style="text-align: center;">The spread is the difference between the bid and offer price. When you enter a long trade, your order is opened using the Ask-price, which is the higher of the two quotes. When the long trade is closed, the Bid-price, which is the lower of the two quotes.</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/GBPUSD-info4.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="" class="simple-text style8   "
     style="">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><h3 style="text-align: center;"><strong>Commission</strong></h3>

<p style="text-align: center;">Commissions are charged when you open and close a trade. In this example, the commission charged is £10 per Lot. Once adjusted according to the trade size of 0.1 Lots the commission becomes £1.00. When converted to dollars, it becomes approximately $1.35.</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/GBPUSD-info5.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="" class="simple-text style8   "
     style="">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><h3 style="text-align: center;"><strong>Swap</strong></h3>

<p style="text-align: center;">A swap is a fee for holding positions overnight. The price is derived from the base and quote currency’s interest rate differential and varies depending on whether your position is long or short. In this example, the swap rate for a long GBP/USD position is £3.19, and the rate for a short position is £2.00.</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/GBPUSD-info6.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
                    
</main>


@include('home.footer')