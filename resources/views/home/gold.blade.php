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
            
            

<div id="gold-banner" class="simple-banner style1  "
style=""
>

    <div class="container">
                <div class="simple-banner__content">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__title" data-aos="fade-up"><h1>Trade Gold CFDs</h1></div>
                                <div class="simple-banner__subtitle" data-aos="fade-up" data-aos-delay="200"><p><span lang="en-US">Trade Gold CFDs with Altruisticmarkets</span></p></div>
                
                <div class="simple-banner__desktop">
                    <div class="simple-banner__text text" data-aos="fade-up" data-aos-delay="400"><p>When you open a CFD trading account with Altruisticmarkets, you can trade the world’s most popular precious and industrial metals, including luxurious gold.</p>

<p>
	<br>
</p>

<p><strong>Start trading Gold with Altruisticmarkets</strong></p></div>

                    
                                        
                    
                    
                      
                    

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
            <img src="storage/app/media/gold/gold_banner.png" alt="">
        </div>
        
         
        
        
                
        <div class="simple-banner__content simple-banner__mobile">
            <div class="simple-banner__content-wrap">
                <div class="simple-banner__text" data-aos="fade-up" data-aos-delay="400"><p>When you open a CFD trading account with Altruisticmarkets, you can trade the world’s most popular precious and industrial metals, including luxurious gold.</p>

<p>
	<br>
</p>

<p><strong>Start trading Gold with Altruisticmarkets</strong></p></div>

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
            <div id="about-gold" class="text-center-block style4" style="background-image: url(storage/app/media/gold/gold_about.jpg)">
    <div class="container">
                <div class="text-center-block__title title" data-aos="fade-up"><p>About <strong>Gold</strong></p></div>
                <div class="text-center-block__text text" data-aos="fade-up" data-aos-delay="100"><p>Throughout history, gold has played a vital role in shaping society, economy and industry. Even after the gold standard was abolished in 1971, gold continued to appreciate in the open market and increased in price far beyond its industrial value. Despite gold no longer having a role in monetary policy, central banks, comme<span class="fr-tmp fr-em">F</span><span class="fr-tmp fr-sm">F</span>rcial banks and governments continue to hoard the precious metal. Gold is used for producing jewellery, dentistry, manufacturing components for the technology industry, and investing.</p>

<p>
	<br>
</p>

<p>The average investor likely purchases gold bullion coins or ingots from a local mint or dealer. Institutional investors likely go to a large exchange, such as the London Metal Exchange or the Chicago Mercantile Exchange. Trader’s looking to speculate on gold price over a short to medium timeframe may use CFDs.</p></div>

        
        
        
            </div>
</div>        
            
<div id="important-gold-discoveries" class="simple-block right theme1 style1  " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/gold/gold_discoveries.jpg" alt="Important Gold Discoveries" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                <div class="simple-block__title title " data-aos="fade-left"><p>Important <span style="font-weight:800;color:#80A9C3;">Gold Discoveries</span></p></div>
                                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"></div>

                                <ul class="simple-block__list">
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="450">
                        <div class="simple-block__list-caption"><p>1718 - Ouro Preto, Brazil</p>
</div>
                                                <div class="simple-block__list-text"><p>Gold was discovered in the Portuguese colony of Brazil, which became the largest producer of gold by 1720, with nearly two-thirds of the world’s output. 800 metric tons of gold were sent to Portugal.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="600">
                        <div class="simple-block__list-caption"><p>1799 - North Carolina, United States</p>
</div>
                                                <div class="simple-block__list-text"><p>A 17-pound gold nugget of gold is discovered in Cabarrus County, North Carolina. It was the first documented gold discovery in the United States and sparked the first US gold rush.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="750">
                        <div class="simple-block__list-caption"><p>1848 - California, United States</p>
</div>
                                                <div class="simple-block__list-text"><p>Someone accidentally found gold flakes in Sacramento California while building a sawmill. Word soon travelled, and approximately 300,000 people migrated to California.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="900">
                        <div class="simple-block__list-caption"><p>1850 - New South Wales, Australia</p>
</div>
                                                <div class="simple-block__list-text"><p>Edward Hargraves, a British sailor, travelled to California to participate in the California gold rush but missed out. He took his knowledge to Australia, where he discovered gold in New South Wales within one week of arriving.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="1050">
                        <div class="simple-block__list-caption"><p>1886 - Johannesburg, South Africa</p>
</div>
                                                <div class="simple-block__list-text"><p>George Harrison, while digging up stones to build a house, discovers gold in South Africa. Since then, the country has been the source of almost 40% of all gold ever mined.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="1200">
                        <div class="simple-block__list-caption"><p>1898 - Alaska, United States</p>
</div>
                                                <div class="simple-block__list-text"><p>Two gold prospectors discovered gold while fishing in Klondike, Alaska, spawning the century’s last gold rush.</p>
</div>
                        
                                            </li>
                                    </ul>
                
                
                
                                                                
                                <div class="simple-block__link " data-aos="fade-left" data-aos-delay="300">
                                        <a  href="{{route('register')}}" class="btn btn-small btn-orange">Sign up</a>
                    <div class="warning-text">
                        <p>* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</p>
                    </div>
                    
                                    </div>
                
                
            </div>
        </div>
    </div>
</div>        
            <div id="why-trade-gold-CFDs" class="text-center-block style2" style="background-image: url(storage/app/media/gold/gold_why.jpg)">
    <div class="container">
                <div class="text-center-block__title title title_center" data-aos="fade-up"><p>Why trade <span style="font-weight:800;color:#80A9C3;">Gold CFDs?</span></p></div>
                <div class="text-center-block__text text" data-aos="fade-up" data-aos-delay="100"><ul>
	<li>CFDs make it convenient to get exposure to the gold market without physically buying and storing bouillon. Positions can be quickly liquidated at a fraction of the cost of trading physical coins.</li>
	<li>Adding gold to your trading strategy can introduce another dimension. Gold has a complicated relationship with the US dollar as it is priced in dollars but is uncorrelated with the currency.</li>
</ul></div>

        
        
        
                <div class="combined-links">
            <div class="combined-links__wrap" data-aos="fade-up" data-aos-delay="600">
                                <a  href="{{route('register')}}" class="combined-links__item combined-links__right"> Open CFD Account</a>
                
                
                                <a   href="{{route('register')}}" class="combined-links__item combined-links__left">Discover gold trading opportunities with Altruisticmarkets </a>
                
                            </div>
        </div>

                        <div class="warning-text" data-aos="fade-up" data-aos-delay="600">
                <p><span style="color: rgb(209, 213, 216);">* Risk Warning: Trading in forex and CFDs could lead to a loss of your invested capital.</span></p>
            </div>
                        </div>
</div>        
            <div id="XAUUSD-CFD-specifications" class="simple-text-block style1"
     style="">
    <div class="container">
        <div class="simple-text-block__content">
            <div class="simple-text-block__content-col">
                                <div class="simple-text-block__top-title title" data-aos="fade-up"><p>XAU/USD <span style="font-weight:800;color:#80A9C3;">CFD Specifications</span></p></div>
                
                <div class="simple-text-block__text text" data-aos="fade-up" data-aos-delay="100">
                    <p>The symbol for gold in the forex market is XAU. In other markets, it might be known under different symbols, such as GC. At Altruisticmarkets, we offer gold quoted against the US dollar. When you trade XAU/USD, the base asset is Gold, and the quote asset is US dollars. The standard contract size, often referred to as the Lot size is one-hundred troy ounces. Unlike a conventional ounce, which is 28 grams, a troy ounce is 31.1 grams. The smallest order size you can enter is 0.01 Lots, which is equal to one troy ounce.</p>

<p>XAU/USD is quoted with two decimal places. The second digit is known as the Pip. The value of a Pip depends on the size of the contract. If you open a position for 1 Lot of XAU/USD, the Pip value will be $10, whereas if you open a position for 0.01 Lots of XAU/USD, the Pip value would only be $0.10.</p>

<p>One of the benefits of CFD trading is you can use leverage to reduce how much capital required to open positions. Altruisticmarkets offers up to 1:20 leverage for trading XAU/USD, which means you only need to provide a 5% margin to open a position.</p>

<p><span lang="en-US">Leverage can be a useful tool when applied
strategically. If you don’t take the proper cautions when trading
with leverage, it can lead to greater losses.</span></p>
                </div>
            </div>
            <div class="simple-text-block__content-col">
                                <div class="simple-text-block__table">
                                        <div class="simple-text-block__row">
                        <div class="simple-text-block__row-inner">
                            <div class="simple-text-block__item">
                                Base asset: Gold
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
                                Contract size (Lot size): 100 Troy Ounces
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
                                Min trade size: 1 Troy Oz (0.01 Lots)
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
                                Max trade size: 10000 Troy Oz (100 Lots)
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
                                Pip position: 0.01
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
                                Pip value: $10
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
                                Maximum leverage (margin): 1:20 (5%)
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
                                <b>Trading hours: 01:00 to 23:59</b>
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
            
<div id="how-a-CFD-transaction-works" class="simple-text style7   "
     style="background: #ffffff;">

    
    <div class="container">
        <div class="simple-text__title title title_center" data-aos="fade-up"><p>How A <span style="font-weight:800;color:#80A9C3;">CFD Transaction Works</span></p></div>        <div class="simple-text__text text" data-aos="fade-up"><p>When you go short on XAU/USD, you’re theoretically selling gold for dollars. To close the position, another trade in the opposite direction is used to offset it. Your profit or loss will be calculated in dollars. If the price of gold decreases, you profit and are left with more dollars when you close the position. If gold strengthened, you’d get back fewer dollars.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/gold/gold_info1.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="how-a-CFD-transaction-works-2" class="simple-text style7   "
     style="background: #f3f3f3;">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><p>With leverage, you can open larger positions than your capital would otherwise permit. When you trade CFDs with Altruisticmarkets, you can use leverage as high as 1:20; meaning you only need to provide margin to cover 5% of the position’s value.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/gold/gold_info2.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="how-a-CFD-transaction-works-3" class="simple-text style7   "
     style="background: #ffffff;">

    
    <div class="container">
                <div class="simple-text__text text" data-aos="fade-up"><p>When you trade CFDs, you don’t need to own either of the assets or currencies involved in the trade. For example, if your trading account balance is funded with euros, you can still trade XAU/USD. The purpose of a CFD is to allow traders to speculate on an asset’s price without having to purchase it or own it. When a CFD is closed, it will always be settled in cash either by increasing or decreasing your trading balance.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/gold/gold_info3.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
            
<div id="costs-to-trade-XAUUSD" class="simple-block left theme1 style7  empty_padding_top empty_padding_bottom round_image " style="background: #ffffff;">
        <div class="container">
        <div class="simple-block__media" data-sticky-container>
                            
                <div class="simple-block__image">
                    <img src="storage/app/media/gold/gold_costs.jpg" alt="" data-aos="fade-right">
                </div>
                        
                    </div>

        <div class="simple-block__content">
            <div>
                                                <div class="simple-block__subtitle" data-aos="fade-left"><p>Costs to trade XAU/USD</p></div>
                
                <div class="simple-block__text text" data-aos="fade-left" data-aos-delay="100"><p>There are different costs associated with trading CFDs with Altruisticmarkets. There are three primary factors which influence how much it costs to trade CFDs; they are:</p></div>

                                <ul class="simple-block__list">
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="450">
                        <div class="simple-block__list-caption"><p>The size of your trade, the bigger the trade, the higher the fees.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="600">
                        <div class="simple-block__list-caption"><p>The instrument you’re trading, as different products have different characteristics.</p>
</div>
                        
                                            </li>
                                        <li class="simple-block__list-item style2" data-aos="fade-left" data-aos-delay="750">
                        <div class="simple-block__list-caption"><p>The <a href="trading-accounts-2.html">type of account</a> you have, as different accounts have different conditions.</p>
</div>
                        
                                            </li>
                                    </ul>
                
                
                
                                
                
                
            </div>
        </div>
    </div>
</div>        
            
<div id="costs-related-to-trading-CFDs" class="simple-text style8   "
     style="background: #ffffff;">

    
    <div class="container">
        <div class="simple-text__title title title_center" data-aos="fade-up"><p>Costs Related To <span style="font-weight:800;color:#80A9C3;">Trading CFDs</span></p></div>        <div class="simple-text__text text" data-aos="fade-up"><p style="text-align: center;">The different costs to be aware of when trading CFDs are spreads, commissions and swaps.</p>

<p>
	<br>
</p>

<p style="text-align: center; font-size: 24px; color: #80A9C3;"><strong><span>Spread</span></strong></p>

<p>
	<br>
</p>

<p style="text-align: center;">The spread is the difference between the bid and Ask-price. When you enter a long trade, your order is opened using the Ask-price, which is the higher of the two quotes. When the long trade is closed, the Bid-price, which is the lower of the two quotes. If the spread on XAU/USD is 120, it means the difference between the price you buy at, and the price you sell at is $1.20.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/gold-info-4.png" class="fr-fic fr-dib" data-result="success"></p>

<p>
	<br>
</p>

<p style="text-align: center; font-size: 24px; color: #80A9C3;"><strong><span>Commission</span></strong></p>

<p>
	<br>
</p>

<p style="text-align: center;">Commissions are charged when you open and close a trade and therefore impacts your profitability. In this example, the commission charged is $10 per Lot. Once adjusted according to the trade size of 0.1 Lots, the commission becomes $1.00 on each side of the trade.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/gold-info-5.png" class="fr-fic fr-dib" data-result="success"></p>

<p>
	<br>
</p>

<p style="text-align: center; font-size: 24px; color: #80A9C3;"><strong><span>Swap</span></strong></p>

<p>
	<br>
</p>

<p style="text-align: center;">A swap is a fee for holding positions overnight. The fee is derived from the interest rate differential between the base and quote asset. As DAX is not a currency, it is not subject to interest rates. Therefore the swap fee comes from the euro. In this example, the swap rate is €10.97 per Lot for both long and short positions. Swaps are charged at the end of the trading day for any positions rolled over to the following day.</p>

<p>
	<br>
</p>

<p style="text-align: center;"><img src="storage/app/media/uploaded-files/gold-info-6.png" class="fr-fic fr-dib" data-result="success"></p></div>

        
            </div>
</div>        
                        </main>

@include('home.footer')