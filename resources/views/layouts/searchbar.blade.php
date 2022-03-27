<header class="header-wrap">
   <div class="header-wrap-inner">
      <div class="container">
         <div class="row flex-nowrap justify-content-between position-relative">
            <div class="header-column-left">
               <div class="sidebar-menu-icon-wrap">
                  <div class="sidebar-menu-icon">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
               <a href="en.html" class="header-logo">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 147 31"
                     preserveAspectRatio="xMinYMid meet">
                     <g>
                        <g transform="translate(-164 -55)">
                           <g transform="translate(-457.529 -7971.529)">
                              <rect width="29" height="29" rx="3"
                                 transform="translate(622.529 8028.529)" fill="#0068e1"
                                 id="logo_f_bg" />
                              <circle cx="2.062" cy="2.062" r="2.062"
                                 transform="translate(642.715 8048.341)" fill="#ffb135" />
                              <g transform="translate(622.529 8028.529)">
                                 <circle cx="23" cy="23" r="23" transform="translate(-25 -26)"
                                    fill="#ffffff" opacity="0.1" />
                                 <circle cx="23" cy="23" r="23" transform="translate(15 23)"
                                    fill="#ffffff" opacity="0.1" />
                              </g>
                              <g transform="translate(630.791 8033.531)">
                                 <g transform="translate(-200.084 -174)" stroke-miterlimit="10"
                                    fill="#0068e1" id="logo_f_text">
                                    <path
                                       d="M 200.4339904785156 192.5772552490234 L 200.4339904785156 174.3499908447266 L 212.1227569580078 174.3499908447266 L 211.3375701904297 177.8291931152344 L 204.426025390625 177.8291931152344 L 204.0760192871094 177.8291931152344 L 204.0760192871094 178.1791839599609 L 204.0760192871094 181.8428344726563 L 204.0760192871094 182.1928405761719 L 204.426025390625 182.1928405761719 L 211.1689147949219 182.1928405761719 L 211.5615844726563 185.6720428466797 L 204.426025390625 185.6720428466797 L 204.0760192871094 185.6720428466797 L 204.0760192871094 186.0220336914063 L 204.0760192871094 191.9179992675781 L 200.4339904785156 192.5772552490234 Z"
                                       stroke="none" fill="#0068e1" id="logo_f_text_inner" />
                                    <path
                                       d="M 200.7839965820313 174.6999969482422 L 200.7839965820313 192.158203125 L 203.7260284423828 191.6256561279297 L 203.7260284423828 186.0220336914063 L 203.7260284423828 185.3220367431641 L 204.426025390625 185.3220367431641 L 211.1698608398438 185.3220367431641 L 210.8561859130859 182.5428314208984 L 204.426025390625 182.5428314208984 L 203.7260284423828 182.5428314208984 L 203.7260284423828 181.8428344726563 L 203.7260284423828 178.1791839599609 L 203.7260284423828 177.4791870117188 L 204.426025390625 177.4791870117188 L 211.0577392578125 177.4791870117188 L 211.6849517822266 174.6999969482422 L 200.7839965820313 174.6999969482422 M 200.0839996337891 174 L 212.560546875 174 L 211.6173706054688 178.1791839599609 L 204.426025390625 178.1791839599609 L 204.426025390625 181.8428344726563 L 211.4816284179688 181.8428344726563 L 211.9533081054688 186.0220336914063 L 204.426025390625 186.0220336914063 L 204.426025390625 192.2103271484375 L 200.0839996337891 192.9962921142578 L 200.0839996337891 174 Z"
                                       stroke="none" fill="#ffffff" />
                                 </g>
                              </g>
                           </g>
                           <text transform="translate(201 80)" fill="#6e6e6e" font-size="18"
                              font-family="Arial, Helvetica, sans-serif">
                              <tspan x="0" y="0">Forever eagle</tspan>
                           </text>
                        </g>
                     </g>
                  </svg>
               </a>
            </div>
            <!-- TODO : make a search text , all familie are existiing in the variable $families -->
            <header-search
               :categories="[{&quot;slug&quot;:&quot;mens-fashion&quot;,&quot;name&quot;:&quot;Men&#039;s Fashion&quot;},{&quot;slug&quot;:&quot;shirts&quot;,&quot;name&quot;:&quot;Shirts&quot;},{&quot;slug&quot;:&quot;jackets&quot;,&quot;name&quot;:&quot;Jackets&quot;},{&quot;slug&quot;:&quot;electronics&quot;,&quot;name&quot;:&quot;Electronics&quot;}]"
               :most-searched-keywords="[&quot;Watch&quot;,&quot;apple&quot;,&quot;Ma&quot;,&quot;Sa&quot;,&quot;ap&quot;]"
               initial-query="" initial-category="">
            </header-search>
            <!-- end Todo -->
            <div class="header-column-right d-flex">
               <a href="en/login.html" class="header-wishlist">
                  <div class="icon-wrap">
                     <i class="lar la-heart"></i>
                     <div class="count" v-text="wishlistCount"></div>
                  </div>
                  <span>Favorites</span>
               </a>
               <div class="header-cart">
                  <div class="icon-wrap">
                     <i class="las la-cart-arrow-down"></i>
                     <div class="count" v-text="cart.quantity"></div>
                  </div>
                  <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>