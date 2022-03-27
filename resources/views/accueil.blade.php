@extends('layouts.master')
@section('title')
   
@endsection

@section('css')
    
@endsection
@section('content')
<section class="navigation-wrap">
    <div class="container">
        <div class="navigation-inner">
            <div class="category-nav show">
                <div class="category-nav-inner">
                    Toutes les catégories
                    <i class="las la-bars"></i>
                </div>
                <div class="category-dropdown-wrap">
                    <div class="category-dropdown">
                        <ul class="list-inline mega-menu vertical-megamenu">
                            @foreach ($families as $family)
                                <li class="fluid-menu">
                                    <a href="family/{{ $family->id}}" class="nav-link menu-item"
                                        target="_self" data-text="{{ $family->libelle_fr }}">
                                        <span class="menu-item-icon">
                                            <i class="las {{ $family->icon }}"></i>
                                        </span>
                                        {{ $family->libelle_fr }}
                                    </a>
                                    @if($family->categories()->count()>0)
                                        <ul class="list-inline fluid-menu-wrap"
                                            style="background-image: url(storage/media/{{ $family->photo_menu }});">
                                            <li>
                                                <div class="fluid-menu-content">
                                                    @foreach ($family->categories() as $category)
                                                        <div class="fluid-menu-list">
                                                            <h5 class="fluid-menu-title">
                                                                <a href="category//{{ $category->id}}"
                                                                    target="_self">
                                                                    {{ $category ->libelle_fr }}
                                                                </a>
                                                            </h5>
                                                            @if($category->products(5)->count()>0)
                                                                <ul class="list-inline fluid-sub-menu-list">
                                                                @foreach ($category->products(5) as $p)
                                                                    <li>
                                                                        <a href="product/{{ $p->id}}"
                                                                            target="_self">
                                                                            {{ $p->libelle_fr}}
                                                                        </a>
                                                                    </li>        
                                                                @endforeach
                                                                </ul>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                            <!-- TODO  this is not shown ,why they add in style that is hidden and display none -->
                            <li class="more-categories">
                                <a href="en/categories.html" class="menu-item">
                                    <span class="menu-item-icon">
                                        <i class="las la-plus-square"></i>
                                    </span>
                                    Toutes les catégories
                                </a>
                            </li>
                            <!-- end TODO -->
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-sm">
                <ul class="navbar-nav mega-menu horizontal-megamenu">
                    <li class="nav-item">
                        <a href="en/products.html" class="nav-link menu-item" target="_self" data-text="Magasin">
                            Magasin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="en/brands.html" class="nav-link menu-item" target="_self" data-text="Fournisseur">
                            Fournisseur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="en/about-us.html" class="nav-link menu-item" target="_self" data-text="A propos de nous">
                            A propos de nous
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="démarrer_votre_propre_projet.html" class="nav-link menu-item" target="_self" data-text="Démarrer votre propre projet">
                            Démarrer votre propre projet
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="home-section-wrap">
   <div class="container">
      <div class="row">
         <div class="home-section-inner">
            <div class="home-slider-wrap">
               <div class="home-slider" data-speed="1000" data-autoplay="1" data-autoplay-speed="5000" data-fade="0" data-dots="1" data-arrows="1">
                    @foreach ($topSlides as $slide)
                        <div class="slide">
                            <img src="{{ asset('storage/media/'.$slide->photo) }}" data-animation-in="zoomInImage" class="slider-image animated">
                            <div class="slide-content align-left">
                                <div class="captions">
                                <span class="caption caption-1" data-animation-in="fadeInRight" data-delay-in="">
                                {{$slide->title}}<b>{{$slide->bold_text}}</b>
                                </span>
                                <span class="caption caption-2" data-animation-in="fadeInRight" data-delay-in="0.3">
                                {{$slide->description}}
                                </span>
                                <a href="family/{{$slide->id_families}}" class="btn btn-primary btn-slider" data-animation-in="fadeInUp" data-delay-in="0.7" target="_blank">
                                Achetez maintenant
                                </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
               </div>
            </div>
            <div class="home-banner-wrap">
               <a href="{{ asset('en/categories/backpacks/products.html') }}" class="banner" target="_self">
               <img src="{{ asset('storage/media/5siKhRlEDQFmbiJRwCNBW3rDsbG7m1r2PibvtNeF.png') }}" alt="banner">
               </a>
               <a href="{{ asset('en/categories/iphone/products.html') }}" class="banner m-t-30" target="_blank">
               <img src="{{ asset('storage/media/yl6rNkswnKQzh7mouQ0HpagRLwBpnq3Mt9LZMRak.png') }}" alt="banner">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<home-features :features="[{&quot;icon&quot;:&quot;las la-headphones&quot;,&quot;title&quot;:&quot;24\/7 SUPPORT&quot;,&quot;subtitle&quot;:&quot;Assistance à chaque fois&quot;},{&quot;icon&quot;:&quot;las la-credit-card&quot;,&quot;title&quot;:&quot;ACCEPTER LE PAIEMENT&quot;,&quot;subtitle&quot;:&quot;Visa, Master&quot;},{&quot;icon&quot;:&quot;las la-shield-alt&quot;,&quot;title&quot;:&quot;PAIEMENT À LIVRAISON&quot;,&quot;subtitle&quot;:&quot;100% secured&quot;},{&quot;icon&quot;:&quot;las la-truck&quot;,&quot;title&quot;:&quot;LIVRAISON GRATUITE&quot;,&quot;subtitle&quot;:&quot;Commande supérieure à 500 Dh&quot;},{&quot;icon&quot;:&quot;las la-money-bill-wave&quot;,&quot;title&quot;:&quot;REVENUE SUPPLEMENTAIRE&quot;,&quot;subtitle&quot;:&quot;Formations gratuites&quot;}]"></home-features>
<featured-categories :data="{&quot;title&quot;:&quot;Principales catégories dans les ventes et les tendances&quot;,&quot;subtitle&quot;:&quot;Le mois dernier jusqu'à plus de 500 ventes de produits de cette catégorie. Vous pouvez choisir un produit ici et économiser de l'argent.&quot;,&quot;categories&quot;:[{&quot;name&quot;:&quot;Laptops&quot;,&quot;logo&quot;:{&quot;id&quot;:1331,&quot;filename&quot;:&quot;laptop-145x145-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/2cZfkz85nXxlSTySz6R8m34u5UQLfiRQVyKjF8hm.png&quot;}},{&quot;name&quot;:&quot;Mobiles&quot;,&quot;logo&quot;:{&quot;id&quot;:1330,&quot;filename&quot;:&quot;mobile-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/UAP07Ygha9iXNfG1Rh6DYWrwVQ3HfkuqetLaLc6M.jpeg&quot;}},{&quot;name&quot;:&quot;Tablets&quot;,&quot;logo&quot;:{&quot;id&quot;:1335,&quot;filename&quot;:&quot;tablet-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/dzeszBwEcUnjWoixHvGYJD7uD2j6BWsy7TBK7tcJ.jpeg&quot;}},{&quot;name&quot;:&quot;Watches&quot;,&quot;logo&quot;:{&quot;id&quot;:1333,&quot;filename&quot;:&quot;watch-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/0Ae4WkaGunLTgTDf24i2ui0hhGB2kZPRVS5k7rn8.jpeg&quot;}},{&quot;name&quot;:&quot;Men&#039;s Fashion&quot;,&quot;logo&quot;:{&quot;id&quot;:1332,&quot;filename&quot;:&quot;sunglass-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/4vy12UtugCqB76AoWvy0cAHlzKb1HZsklmkOQ6hK.jpeg&quot;}},{&quot;name&quot;:&quot;Televisions&quot;,&quot;logo&quot;:{&quot;id&quot;:1334,&quot;filename&quot;:&quot;television-145x145-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/sjBHD1SNqe4BgkqmvqmWAB7U759HOZPVJRvV1Qbr.png&quot;}}]}"></featured-categories>
<banner-three-column-full-width :data="{&quot;background&quot;:{&quot;image&quot;:{&quot;id&quot;:982,&quot;filename&quot;:&quot;banner-bg-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/vm21euwszrldK6E9iEtqsm2WtiJ4OyaA7VIGHPe3.png&quot;},&quot;call_to_action_url&quot;:null,&quot;open_in_new_window&quot;:false},&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:974,&quot;filename&quot;:&quot;03@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/SnNz5B0YIEGCw1OdLhFJbqF7hfCNc80adaLCdqOE.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/home-appliances\/products&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:977,&quot;filename&quot;:&quot;04@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/3YFgcINuEaLyLvy6QjxKwKVDMALI9qzmXEN7Vqx3.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/home-appliances\/products&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_3&quot;:{&quot;image&quot;:{&quot;id&quot;:976,&quot;filename&quot;:&quot;05@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/pmQxhyWNznFCMZvc4KTv4HNk4RfG3eBlNqR0xsCt.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/samsung\/products&quot;,&quot;open_in_new_window&quot;:false}}"></banner-three-column-full-width>
<product-tabs-one :data="[&quot;Featured&quot;,&quot;Special&quot;,&quot;New Arrival&quot;,&quot;Latest&quot;]"></product-tabs-one>
<top-brands :top-brands="[{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/asus\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1312,&quot;filename&quot;:&quot;Brand 01 \u2013 7@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/JnH5uK3QY3mOamQ8NsHCbtqj0xULHsjOTHtHTbeO.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/acer\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1313,&quot;filename&quot;:&quot;Brand 01 \u2013 6@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/rCfwklCfNTBKz4JGeloPqqI7BTS8PdYibzEkB8mS.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/adidas\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1305,&quot;filename&quot;:&quot;Brand 01 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/H0BnQ6XoB6vBb1YAkRg22mncLS76Yv0zGz4T4M04.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/apple\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1319,&quot;filename&quot;:&quot;Brand 01 \u2013 11@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/jZG1juhijMhWSrn8B4jgsX5x4Vb8dOTdZTtGNACo.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/beats\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1306,&quot;filename&quot;:&quot;Brand 01 \u2013 4@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/3IcUp71JfyiH3wkWU0omhlcs0xqgdWzmY3Z4imMO.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/dell\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1314,&quot;filename&quot;:&quot;Brand 01 \u2013 9@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/8bmlnpJluQBwAAJolyS708652aY6Kj8dEmYQ7woo.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/hp\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1315,&quot;filename&quot;:&quot;Brand 01 \u2013 10@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/j2WP3lfi8JTanXQsxrNDclJAb2RHKxBOtlQwlK2g.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/huawei\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1317,&quot;filename&quot;:&quot;Brand 01 \u2013 5@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/SbgS1CCecSpvvnBeBmG6xP49q2NymXQzJpiHbMAi.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/lg\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1307,&quot;filename&quot;:&quot;Brand 01 \u2013 13@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/P9UF8sprnzBNqEnbAd2j82UA4b0fzk85uIZp4H4s.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/msi\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1308,&quot;filename&quot;:&quot;Brand 01 \u2013 12@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/8DfT3LNUhYbei3YrhJ1FscMVKiPPQi43LdCY29Am.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/levis\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1303,&quot;filename&quot;:&quot;Brand 01@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/Quysi8IloZADWNe2ZxeK98PN4FgHpoQWBXSnhlQV.png&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/samsung\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1318,&quot;filename&quot;:&quot;Brand 01 \u2013 8@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/nshpkDL124reDq8apPXBcpVrnV8ABDzC88R5gg3K.png&quot;}}]"></top-brands>
<flash-sale-and-vertical-products :data="{&quot;flash_sale_title&quot;:&quot;Best &lt;b&gt;Deals&lt;\/b&gt;&quot;,&quot;vertical_products_1_title&quot;:&quot;Watches&quot;,&quot;vertical_products_2_title&quot;:&quot;Backpacks&quot;,&quot;vertical_products_3_title&quot;:&quot;Shirts&quot;}"></flash-sale-and-vertical-products>
<banner-two-column :data="{&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:1339,&quot;filename&quot;:&quot;06 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/kSSkGodUfAKYy1UVZ8CicO8oay5PKO4L3DdEE9Tw.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/ultraslim\/products&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:1338,&quot;filename&quot;:&quot;07 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/VVyvSfw4dAZI57qelPofORurzNNc7rDlsxVbTO5m.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/watches\/products&quot;,&quot;open_in_new_window&quot;:false}}"></banner-two-column>
<product-grid :data="[&quot;Mobiles&quot;,&quot;Fashion&quot;,&quot;Laptops&quot;,&quot;Tablets&quot;]"></product-grid>
<banner-three-column :data="{&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:787,&quot;filename&quot;:&quot;08@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/QXeAdEOGLNAIj5Ntx7prAuuHRJmqNebRckNhV5WS.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/home-appliances\/products&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:785,&quot;filename&quot;:&quot;09@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/tUZc6W65OryxcoIDT1umT0irIynod8t904Q7bRbG.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/mobile-accessories\/products&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_3&quot;:{&quot;image&quot;:{&quot;id&quot;:786,&quot;filename&quot;:&quot;10@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/32Z48wigiMEXJZLDUN20Ea0f7NTMKZHf93qHFtLg.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/gadgets\/products&quot;,&quot;open_in_new_window&quot;:false}}"></banner-three-column>
<product-tabs-two :data="{&quot;title&quot;:&quot;Hot Best Sellers&quot;,&quot;tabs&quot;:[&quot;Latest Products&quot;,&quot;Recently Viewed&quot;,&quot;On Sale&quot;,&quot;Top Selling&quot;]}"></product-tabs-two>
<banner-one-column :banner="{&quot;image&quot;:{&quot;id&quot;:1102,&quot;filename&quot;:&quot;11@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/kRb5N2mGVnso21KKTsxenE4GuH3fjej5r2m8vY8V.png&quot;},&quot;call_to_action_url&quot;:&quot;\/categories\/home-appliances\/products&quot;,&quot;open_in_new_window&quot;:true}"></banner-one-column>

    
@endsection
@section('js')
    
@endsection