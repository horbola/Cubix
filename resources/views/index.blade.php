    @extends('layout.app')
    

    @section('content')
    <!-- Content -->
    <div id="content-wrapper">
      <style>
        #our-services .iconbox-heading-sm h3 {
          font-size: 20px;
          text-transform: capitalize !important
        }

        .banner-capital-heading h1 .lqd-lines,
        .banner-capital-heading h2 .lqd-lines {
          text-transform: initial !important
        }

        .banner-capital-heading h1 .lqd-lines:nth-child(2) .split-inner,
        .banner-capital-heading h2 .lqd-lines:nth-child(2) .split-inner {
          display: contents
        }

        @media (min-width:577px) and (max-width:1199px) {
          .new-add-img-one {
            top: 45% !important;
            right: 7% !important
          }

          .new-add-img-two {
            top: -50px;
            left: 90px
          }
        }

        @media only screen and (max-width:576px) {
          .lqd-parallax-images-3 .liquid-img-group-single.new-add-img-one {
            right: 25% !important;
            left: -100px !important;
            top: 70px
          }

          .lqd-parallax-images-3 .new-add-img-two {
            margin-left: -5% !important;
            top: -50px;
            left: 90px
          }
        }

        @media (min-width:1200px) and (max-width:1370px) {
          .new-add-img-one {
            right: -12% !important;
            top: 45% !important
          }

          .new-add-img-two {
            margin-left: -15% !important;
            top: -70px
          }
        }

        @media (min-width:1371px) {
          .new-add-img-one {
            right: -6% !important;
            top: 45% !important
          }

          .new-add-img-two {
            right: -6%;
            top: -70px
          }
        }
      </style>
      <main id="content" class="content">
        <section class="vc_row sm-height fullheight heroslider-nav text-center-sm banner-capital-heading">
          <div class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-md carousel-nav-square carousel-nav-solid carousel-dots-style4 pos-ab" id="hero-slider">
            <div class="carousel-items row mx-0" data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true, "fade": true}'>
              <!-- NFT SLIDER START HERE -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/blockchain-bg.jpeg">
                <div class="slider-content">
                  <div class="_nft-slider-add">
                    <div class="container">
                      <div class="row nft-slider-flex">
                        <div class="lqd-column col-md-6 col-xs-12" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                          <h1 class="text-white mt-0 mb-3" style="text-transform:initial!important;" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>NFT Game <br>
                            <span style="text-transform:initial!important;">Development </span>
                          </h1>
                          <div class="row">
                            <div class="lqd-column col-md-10">
                              <p class="font-size-18 lh-165 text-fade-white-09 mb-5">Harness blockchain technology to bring real monetary value to your game, with unique asset ownership and investment opportunities.</p>
                              <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                                <span>
                                  <span class="btn-txt">LET'S TALK</span>
                                </span>
                              </a>
                            </div>
                            <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <div class="lqd-column col-md-6 col-xs-12 d-sm-sett" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                          <span>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="99vh" style="width:160%;z-index:-1;overflow:hidden;position:relative;left:-50px" viewBox="0 0 2000 1200" enable-background="new 0 0 2000 1200" xml:space="preserve">
                              <g>
                                <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="355" y1="952" x2="1430.3" y2="315.4" />
                              </g>
                              <g>
                                <g>
                                  <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-26" y1="616" x2="2010" y2="616">
                                    <stop offset="0" style="stop-color:#202333" />
                                    <stop offset="1" style="stop-color:#5C1B99" />
                                  </linearGradient>
                                  <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-101.1755" y1="174.3284" x2="2085.1755" y2="1057.6716">
                                    <stop offset="0" style="stop-color:#202333" />
                                    <stop offset="1" style="stop-color:#5C6399" />
                                  </linearGradient>
                                  <rect x="-26" y="-10" display="none" fill="url(#SVGID_1_)" stroke="url(#SVGID_2_)" stroke-miterlimit="10" width="2036" height="1252" />
                                  <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="195.6219" y1="293.0284" x2="1744.3668" y2="918.762" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                    <stop offset="0" style="stop-color:#202333" />
                                    <stop offset="1" style="stop-color:#5C6399" />
                                  </linearGradient>
                                  <path display="none" opacity="0.75" fill="url(#SVGID_3_)" enable-background="new" d="M498.7,1044.2l1.6,2.6l-4.3,2.6 l-1.6-2.6L498.7,1044.2z M486.7,1051.6l1.6,2.6l4.3-2.6l-1.6-2.6L486.7,1051.6z M479.1,1056.3l1.6,2.6l4.3-2.6l-1.6-2.6 L479.1,1056.3z M517.4,1032.7l1.6,2.6l4.3-2.6l-1.6-2.6L517.4,1032.7z M509.8,1037.4l1.6,2.6l4.3-2.6l-1.6-2.6L509.8,1037.4z M502.1,1042.1l1.6,2.6l4.3-2.6l-1.6-2.6L502.1,1042.1z M540.5,1018.4l1.6,2.6l4.3-2.6l-1.6-2.6L540.5,1018.4z M532.8,1023.2 l1.6,2.6l4.3-2.6l-1.6-2.6L532.8,1023.2z M525.1,1027.9l1.6,2.6l4.3-2.6l-1.6-2.6L525.1,1027.9z M563.5,1004.2l1.6,2.6l4.3-2.6 l-1.6-2.6L563.5,1004.2z M555.8,1009l1.6,2.6l4.3-2.6l-1.6-2.6L555.8,1009z M548.2,1013.7l1.6,2.6l4.3-2.6l-1.6-2.6L548.2,1013.7z M586.6,990l1.6,2.6l4.3-2.6l-1.6-2.6L586.6,990z M578.9,994.8l1.6,2.6l4.3-2.6l-1.6-2.6L578.9,994.8z M571.2,999.5l1.6,2.6 l4.3-2.6l-1.6-2.6L571.2,999.5z M609.6,975.8l1.6,2.6l4.3-2.6l-1.6-2.6L609.6,975.8z M601.9,980.5l1.6,2.6l4.3-2.6l-1.6-2.6 L601.9,980.5z M594.3,985.3l1.6,2.6l4.3-2.6l-1.6-2.6L594.3,985.3z M632.6,961.6l1.6,2.6l4.3-2.6l-1.6-2.6L632.6,961.6z M625,966.3l1.6,2.6l4.3-2.6l-1.6-2.6L625,966.3z M617.3,971.1l1.6,2.6l4.3-2.6l-1.6-2.6L617.3,971.1z M655.7,947.4l1.6,2.6 l4.3-2.6l-1.6-2.6L655.7,947.4z M648,952.1l1.6,2.6l4.3-2.6l-1.6-2.6L648,952.1z M640.4,956.8l1.6,2.6l4.3-2.6l-1.6-2.6 L640.4,956.8z M678.7,933.2l1.6,2.6l4.3-2.6l-1.6-2.6L678.7,933.2z M671.1,937.9l1.6,2.6l4.3-2.6l-1.6-2.6L671.1,937.9z M663.4,942.6l1.6,2.6l4.3-2.6l-1.6-2.6L663.4,942.6z M701.8,919l1.6,2.6l4.3-2.6l-1.6-2.6L701.8,919z M694.1,923.7l1.6,2.6 l4.3-2.6l-1.6-2.6L694.1,923.7z M686.5,928.4l1.6,2.6l4.3-2.6l-1.6-2.6L686.5,928.4z M724.8,904.8l1.6,2.6l4.3-2.6l-1.6-2.6 L724.8,904.8z M717.2,909.5l1.6,2.6l4.3-2.6l-1.6-2.6L717.2,909.5z M709.5,914.2l1.6,2.6l4.3-2.6l-1.6-2.6L709.5,914.2z M747.9,890.6l1.6,2.6l4.3-2.6l-1.6-2.6L747.9,890.6z M740.2,895.3l1.6,2.6l4.3-2.6l-1.6-2.6L740.2,895.3z M732.5,900l1.6,2.6 l4.3-2.6l-1.6-2.6L732.5,900z M770.9,876.4l1.6,2.6l4.3-2.6l-1.6-2.6L770.9,876.4z M763.2,881.1l1.6,2.6l4.3-2.6l-1.6-2.6 L763.2,881.1z M755.6,885.8l1.6,2.6l4.3-2.6l-1.6-2.6L755.6,885.8z M794,862.1l1.6,2.6l4.3-2.6l-1.6-2.6L794,862.1z M786.3,866.9 l1.6,2.6l4.3-2.6l-1.6-2.6L786.3,866.9z M778.6,871.6l1.6,2.6l4.3-2.6l-1.6-2.6L778.6,871.6z M817,847.9l1.6,2.6l4.3-2.6l-1.6-2.6 L817,847.9z M809.3,852.7l1.6,2.6l4.3-2.6l-1.6-2.6L809.3,852.7z M801.7,857.4l1.6,2.6l4.3-2.6l-1.6-2.6L801.7,857.4z M840,833.7 l1.6,2.6l4.3-2.6l-1.6-2.6L840,833.7z M832.4,838.5l1.6,2.6l4.3-2.6l-1.6-2.6L832.4,838.5z M824.7,843.2l1.6,2.6l4.3-2.6l-1.6-2.6 L824.7,843.2z M863.1,819.5l1.6,2.6l4.3-2.6l-1.6-2.6L863.1,819.5z M855.4,824.2l1.6,2.6l4.3-2.6l-1.6-2.6L855.4,824.2z M847.8,829l1.6,2.6l4.3-2.6l-1.6-2.6L847.8,829z M886.1,805.3l1.6,2.6l4.3-2.6l-1.6-2.6L886.1,805.3z M878.5,810l1.6,2.6l4.3-2.6 l-1.6-2.6L878.5,810z M870.8,814.8l1.6,2.6l4.3-2.6l-1.6-2.6L870.8,814.8z M909.2,791.1l1.6,2.6l4.3-2.6l-1.6-2.6L909.2,791.1z M901.5,795.8l1.6,2.6l4.3-2.6l-1.6-2.6L901.5,795.8z M893.9,800.5l1.6,2.6l4.3-2.6l-1.6-2.6L893.9,800.5z M932.2,776.9l1.6,2.6 l4.3-2.6l-1.6-2.6L932.2,776.9z M924.5,781.6l1.6,2.6l4.3-2.6l-1.6-2.6L924.5,781.6z M916.9,786.3l1.6,2.6l4.3-2.6l-1.6-2.6 L916.9,786.3z M955.3,762.7l1.6,2.6l4.3-2.6l-1.6-2.6L955.3,762.7z M947.6,767.4l1.6,2.6l4.3-2.6l-1.6-2.6L947.6,767.4z M939.9,772.1l1.6,2.6l4.3-2.6l-1.6-2.6L939.9,772.1z M978.3,748.5l1.6,2.6l4.3-2.6l-1.6-2.6L978.3,748.5z M970.6,753.2l1.6,2.6 l4.3-2.6l-1.6-2.6L970.6,753.2z M963,757.9l1.6,2.6l4.3-2.6l-1.6-2.6L963,757.9z M1001.4,734.3l1.6,2.6l4.3-2.6l-1.6-2.6 L1001.4,734.3z M993.7,739l1.6,2.6l4.3-2.6l-1.6-2.6L993.7,739z M986,743.7l1.6,2.6l4.3-2.6l-1.6-2.6L986,743.7z M1024.4,720.1 l1.6,2.6l4.3-2.6l-1.6-2.6L1024.4,720.1z M1016.7,724.8l1.6,2.6l4.3-2.6l-1.6-2.6L1016.7,724.8z M1009.1,729.5l1.6,2.6l4.3-2.6 l-1.6-2.6L1009.1,729.5z M1047.4,705.8l1.6,2.6l4.3-2.6l-1.6-2.6L1047.4,705.8z M1039.8,710.6l1.6,2.6l4.3-2.6l-1.6-2.6 L1039.8,710.6z M1032.1,715.3l1.6,2.6l4.3-2.6l-1.6-2.6L1032.1,715.3z M1070.5,691.6l1.6,2.6l4.3-2.6l-1.6-2.6L1070.5,691.6z M1062.8,696.4l1.6,2.6l4.3-2.6l-1.6-2.6L1062.8,696.4z M1055.2,701.1l1.6,2.6l4.3-2.6l-1.6-2.6L1055.2,701.1z M1093.5,677.4 l1.6,2.6l4.3-2.6l-1.6-2.6L1093.5,677.4z M1085.9,682.2l1.6,2.6l4.3-2.6l-1.6-2.6L1085.9,682.2z M1078.2,686.9l1.6,2.6l4.3-2.6 l-1.6-2.6L1078.2,686.9z M1116.6,663.2l1.6,2.6l4.3-2.6l-1.6-2.6L1116.6,663.2z M1108.9,667.9l1.6,2.6l4.3-2.6l-1.6-2.6 L1108.9,667.9z M1101.3,672.7l1.6,2.6l4.3-2.6l-1.6-2.6L1101.3,672.7z M1139.6,649l1.6,2.6l4.3-2.6l-1.6-2.6L1139.6,649z M1131.9,653.7l1.6,2.6l4.3-2.6l-1.6-2.6L1131.9,653.7z M1124.3,658.5l1.6,2.6l4.3-2.6l-1.6-2.6L1124.3,658.5z M1162.7,634.8 l1.6,2.6l4.3-2.6l-1.6-2.6L1162.7,634.8z M1155,639.5l1.6,2.6l4.3-2.6l-1.6-2.6L1155,639.5z M1147.3,644.2l1.6,2.6l4.3-2.6 l-1.6-2.6L1147.3,644.2z M1185.7,620.6l1.6,2.6l4.3-2.6l-1.6-2.6L1185.7,620.6z M1178,625.3l1.6,2.6l4.3-2.6l-1.6-2.6L1178,625.3z M1170.4,630l1.6,2.6l4.3-2.6l-1.6-2.6L1170.4,630z M1208.8,606.4l1.6,2.6l4.3-2.6l-1.6-2.6L1208.8,606.4z M1201.1,611.1l1.6,2.6 l4.3-2.6l-1.6-2.6L1201.1,611.1z M1193.4,615.8l1.6,2.6l4.3-2.6l-1.6-2.6L1193.4,615.8z M1231.8,592.2l1.6,2.6l4.3-2.6l-1.6-2.6 L1231.8,592.2z M1224.1,596.9l1.6,2.6l4.3-2.6l-1.6-2.6L1224.1,596.9z M1216.5,601.6l1.6,2.6l4.3-2.6l-1.6-2.6L1216.5,601.6z M1254.8,578l1.6,2.6l4.3-2.6l-1.6-2.6L1254.8,578z M1247.2,582.7l1.6,2.6l4.3-2.6l-1.6-2.6L1247.2,582.7z M1239.5,587.4l1.6,2.6 l4.3-2.6l-1.6-2.6L1239.5,587.4z M1277.9,563.8l1.6,2.6l4.3-2.6l-1.6-2.6L1277.9,563.8z M1270.2,568.5l1.6,2.6l4.3-2.6l-1.6-2.6 L1270.2,568.5z M1262.6,573.2l1.6,2.6l4.3-2.6l-1.6-2.6L1262.6,573.2z M1300.9,549.5l1.6,2.6l4.3-2.6l-1.6-2.6L1300.9,549.5z M1293.3,554.3l1.6,2.6l4.3-2.6l-1.6-2.6L1293.3,554.3z M1285.6,559l1.6,2.6l4.3-2.6l-1.6-2.6L1285.6,559z M1324,535.3l1.6,2.6 l4.3-2.6l-1.6-2.6L1324,535.3z M1316.3,540.1l1.6,2.6l4.3-2.6l-1.6-2.6L1316.3,540.1z M1308.7,544.8l1.6,2.6l4.3-2.6l-1.6-2.6 L1308.7,544.8z M1347,521.1l1.6,2.6l4.3-2.6l-1.6-2.6L1347,521.1z M1339.4,525.9l1.6,2.6l4.3-2.6l-1.6-2.6L1339.4,525.9z M1331.7,530.6l1.6,2.6l4.3-2.6l-1.6-2.6L1331.7,530.6z M1370.1,506.9l1.6,2.6l4.3-2.6l-1.6-2.6L1370.1,506.9z M1362.4,511.6 l1.6,2.6l4.3-2.6l-1.6-2.6L1362.4,511.6z M1354.7,516.4l1.6,2.6l4.3-2.6l-1.6-2.6L1354.7,516.4z M1393.1,492.7l1.6,2.6l4.3-2.6 l-1.6-2.6L1393.1,492.7z M1385.4,497.4l1.6,2.6l4.3-2.6l-1.6-2.6L1385.4,497.4z M1377.8,502.2l1.6,2.6l4.3-2.6l-1.6-2.6 L1377.8,502.2z M1416.2,478.5l1.6,2.6l4.3-2.6l-1.6-2.6L1416.2,478.5z M1408.5,483.2l1.6,2.6l4.3-2.6l-1.6-2.6L1408.5,483.2z M1400.8,487.9l1.6,2.6l4.3-2.6l-1.6-2.6L1400.8,487.9z M1439.2,464.3l1.6,2.6l4.3-2.6l-1.6-2.6L1439.2,464.3z M1431.5,469 l1.6,2.6l4.3-2.6l-1.6-2.6L1431.5,469z M1423.9,473.7l1.6,2.6l4.3-2.6l-1.6-2.6L1423.9,473.7z M1462.2,450.1l1.6,2.6l4.3-2.6 l-1.6-2.6L1462.2,450.1z M1454.6,454.8l1.6,2.6l4.3-2.6l-1.6-2.6L1454.6,454.8z M1446.9,459.5l1.6,2.6l4.3-2.6l-1.6-2.6 L1446.9,459.5z M1485.3,435.9l1.6,2.6l4.3-2.6l-1.6-2.6L1485.3,435.9z M1477.6,440.6l1.6,2.6l4.3-2.6l-1.6-2.6L1477.6,440.6z M1470,445.3l1.6,2.6l4.3-2.6l-1.6-2.6L1470,445.3z M1508.3,421.7l1.6,2.6l4.3-2.6l-1.6-2.6L1508.3,421.7z M1500.7,426.4l1.6,2.6 l4.3-2.6l-1.6-2.6L1500.7,426.4z M1493,431.1l1.6,2.6l4.3-2.6l-1.6-2.6L1493,431.1z M1531.4,407.5l1.6,2.6l4.3-2.6l-1.6-2.6 L1531.4,407.5z M1523.7,412.2l1.6,2.6l4.3-2.6l-1.6-2.6L1523.7,412.2z M1516.1,416.9l1.6,2.6l4.3-2.6l-1.6-2.6L1516.1,416.9z M1554.4,393.2l1.6,2.6l4.3-2.6l-1.6-2.6L1554.4,393.2z M1546.8,398l1.6,2.6l4.3-2.6l-1.6-2.6L1546.8,398z M1539.1,402.7l1.6,2.6 l4.3-2.6l-1.6-2.6L1539.1,402.7z M1577.5,379l1.6,2.6l4.3-2.6l-1.6-2.6L1577.5,379z M1569.8,383.8l1.6,2.6l4.3-2.6l-1.6-2.6 L1569.8,383.8z M1562.1,388.5l1.6,2.6l4.3-2.6l-1.6-2.6L1562.1,388.5z M1600.5,364.8l1.6,2.6l4.3-2.6l-1.6-2.6L1600.5,364.8z M1592.8,369.6l1.6,2.6l4.3-2.6l-1.6-2.6L1592.8,369.6z M1585.2,374.3l1.6,2.6l4.3-2.6l-1.6-2.6L1585.2,374.3z M1623.6,350.6 l1.6,2.6l4.3-2.6l-1.6-2.6L1623.6,350.6z M1615.9,355.3l1.6,2.6l4.3-2.6l-1.6-2.6L1615.9,355.3z M1608.2,360.1l1.6,2.6l4.3-2.6 l-1.6-2.6L1608.2,360.1z M1646.6,336.4l1.6,2.6l4.3-2.6l-1.6-2.6L1646.6,336.4z M1638.9,341.1l1.6,2.6l4.3-2.6l-1.6-2.6 L1638.9,341.1z M1631.3,345.9l1.6,2.6l4.3-2.6l-1.6-2.6L1631.3,345.9z M1669.6,322.2l1.6,2.6l4.3-2.6l-1.6-2.6L1669.6,322.2z M1662,326.9l1.6,2.6l4.3-2.6l-1.6-2.6L1662,326.9z M1654.3,331.6l1.6,2.6l4.3-2.6l-1.6-2.6L1654.3,331.6z M1692.7,308l1.6,2.6 l4.3-2.6l-1.6-2.6L1692.7,308z M1685,312.7l1.6,2.6l4.3-2.6l-1.6-2.6L1685,312.7z M1677.4,317.4l1.6,2.6l4.3-2.6l-1.6-2.6 L1677.4,317.4z M1715.7,293.8l1.6,2.6l4.3-2.6l-1.6-2.6L1715.7,293.8z M1708.1,298.5l1.6,2.6l4.3-2.6l-1.6-2.6L1708.1,298.5z M1700.4,303.2l1.6,2.6l4.3-2.6l-1.6-2.6L1700.4,303.2z M1706.9,255.8l1.7-2.4l-3.9-2.8l-1.7,2.4L1706.9,255.8z M1713.9,260.8 l1.7-2.4l-3.9-2.8l-1.7,2.4L1713.9,260.8z M1720.9,265.7l1.7-2.4l-3.9-2.8l-1.7,2.4L1720.9,265.7z M1685.8,240.9l1.7-2.4l-3.9-2.8 l-1.7,2.4L1685.8,240.9z M1692.8,245.9l1.7-2.4l-3.9-2.8l-1.7,2.4L1692.8,245.9z M1699.8,250.8l1.7-2.4l-3.9-2.8l-1.7,2.4 L1699.8,250.8z M1664.8,226l1.7-2.4l-3.9-2.8l-1.7,2.4L1664.8,226z M1671.8,230.9l1.7-2.4l-3.9-2.8l-1.7,2.4L1671.8,230.9z M1678.8,235.9l1.7-2.4l-3.9-2.8l-1.7,2.4L1678.8,235.9z M1643.7,211l1.7-2.4l-3.9-2.8l-1.7,2.4L1643.7,211z M1650.7,216l1.7-2.4 l-3.9-2.8l-1.7,2.4L1650.7,216z M1657.7,221l1.7-2.4l-3.9-2.8l-1.7,2.4L1657.7,221z M1622.7,196.1l1.7-2.4l-3.9-2.8l-1.7,2.4 L1622.7,196.1z M1629.7,201.1l1.7-2.4l-3.9-2.8l-1.7,2.4L1629.7,201.1z M1636.7,206l1.7-2.4l-3.9-2.8l-1.7,2.4L1636.7,206z M1601.6,181.2l1.7-2.4l-3.9-2.8l-1.7,2.4L1601.6,181.2z M1608.6,186.2l1.7-2.4l-3.9-2.8l-1.7,2.4L1608.6,186.2z M1615.6,191.1 l1.7-2.4l-3.9-2.8l-1.7,2.4L1615.6,191.1z M1580.6,166.3l1.7-2.4l-3.9-2.8l-1.7,2.4L1580.6,166.3z M1587.6,171.2l1.7-2.4l-3.9-2.8 l-1.7,2.4L1587.6,171.2z M1594.6,176.2l1.7-2.4l-3.9-2.8l-1.7,2.4L1594.6,176.2z M1559.5,151.4l1.7-2.4l-3.9-2.8l-1.7,2.4 L1559.5,151.4z M1566.5,156.3l1.7-2.4l-3.9-2.8l-1.7,2.4L1566.5,156.3z M1573.5,161.3l1.7-2.4l-3.9-2.8l-1.7,2.4L1573.5,161.3z M1538.5,136.4l1.7-2.4l-3.9-2.8l-1.7,2.4L1538.5,136.4z M1545.5,141.4l1.7-2.4l-3.9-2.8l-1.7,2.4L1545.5,141.4z M1552.5,146.4 l1.7-2.4l-3.9-2.8l-1.7,2.4L1552.5,146.4z M1517.4,121.5l1.7-2.4l-3.9-2.8l-1.7,2.4L1517.4,121.5z M1524.4,126.5l1.7-2.4l-3.9-2.8 l-1.7,2.4L1524.4,126.5z M1531.4,131.4l1.7-2.4l-3.9-2.8l-1.7,2.4L1531.4,131.4z M1479.5,127.4l-1.5-2.6l-4.3,2.6l1.5,2.6 L1479.5,127.4z M1487.2,122.8l-1.5-2.6l-4.3,2.6l1.5,2.6L1487.2,122.8z M1495,118.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1495,118.1z M1456.2,141.4l-1.5-2.6l-4.3,2.6l1.5,2.6L1456.2,141.4z M1463.9,136.7l-1.5-2.6l-4.3,2.6l1.5,2.6L1463.9,136.7z M1471.7,132.1 l-1.5-2.6l-4.3,2.6l1.5,2.6L1471.7,132.1z M1432.9,155.4l-1.5-2.6l-4.3,2.6l1.5,2.6L1432.9,155.4z M1440.7,150.7l-1.5-2.6 l-4.3,2.6l1.5,2.6L1440.7,150.7z M1448.4,146.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1448.4,146.1z M1409.6,169.4l-1.5-2.6l-4.3,2.6l1.5,2.6 L1409.6,169.4z M1417.4,164.7l-1.5-2.6l-4.3,2.6l1.5,2.6L1417.4,164.7z M1425.1,160.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1425.1,160.1z M1386.3,183.3l-1.5-2.6l-4.3,2.6l1.5,2.6L1386.3,183.3z M1394.1,178.7l-1.5-2.6l-4.3,2.6l1.5,2.6L1394.1,178.7z M1401.8,174.1 l-1.5-2.6l-4.3,2.6l1.5,2.6L1401.8,174.1z M1363.1,197.3l-1.5-2.6l-4.3,2.6l1.5,2.6L1363.1,197.3z M1370.8,192.7l-1.5-2.6 l-4.3,2.6l1.5,2.6L1370.8,192.7z M1378.5,188l-1.5-2.6l-4.3,2.6l1.5,2.6L1378.5,188z M1339.8,211.3l-1.5-2.6l-4.3,2.6l1.5,2.6 L1339.8,211.3z M1347.5,206.7l-1.5-2.6l-4.3,2.6l1.5,2.6L1347.5,206.7z M1355.3,202l-1.5-2.6l-4.3,2.6l1.5,2.6L1355.3,202z M1316.5,225.3l-1.5-2.6l-4.3,2.6l1.5,2.6L1316.5,225.3z M1324.2,220.6l-1.5-2.6l-4.3,2.6l1.5,2.6L1324.2,220.6z M1332,216 l-1.5-2.6l-4.3,2.6l1.5,2.6L1332,216z M1293.2,239.3l-1.5-2.6l-4.3,2.6l1.5,2.6L1293.2,239.3z M1301,234.6l-1.5-2.6l-4.3,2.6 l1.5,2.6L1301,234.6z M1308.7,230l-1.5-2.6l-4.3,2.6l1.5,2.6L1308.7,230z M1269.9,253.3l-1.5-2.6l-4.3,2.6l1.5,2.6L1269.9,253.3z M1277.7,248.6l-1.5-2.6l-4.3,2.6l1.5,2.6L1277.7,248.6z M1285.4,244l-1.5-2.6l-4.3,2.6l1.5,2.6L1285.4,244z M1246.6,267.2 l-1.5-2.6l-4.3,2.6l1.5,2.6L1246.6,267.2z M1254.4,262.6l-1.5-2.6l-4.3,2.6l1.5,2.6L1254.4,262.6z M1262.1,257.9l-1.5-2.6 l-4.3,2.6l1.5,2.6L1262.1,257.9z M1223.4,281.2l-1.5-2.6l-4.3,2.6l1.5,2.6L1223.4,281.2z M1231.1,276.6l-1.5-2.6l-4.3,2.6l1.5,2.6 L1231.1,276.6z M1238.8,271.9l-1.5-2.6l-4.3,2.6l1.5,2.6L1238.8,271.9z M1200.1,295.2l-1.5-2.6l-4.3,2.6l1.5,2.6L1200.1,295.2z M1207.8,290.6l-1.5-2.6l-4.3,2.6l1.5,2.6L1207.8,290.6z M1215.6,285.9l-1.5-2.6l-4.3,2.6l1.5,2.6L1215.6,285.9z M1176.8,309.2 l-1.5-2.6l-4.3,2.6l1.5,2.6L1176.8,309.2z M1184.5,304.5l-1.5-2.6l-4.3,2.6l1.5,2.6L1184.5,304.5z M1192.3,299.9l-1.5-2.6 l-4.3,2.6l1.5,2.6L1192.3,299.9z M1153.5,323.2l-1.5-2.6l-4.3,2.6l1.5,2.6L1153.5,323.2z M1161.3,318.5l-1.5-2.6l-4.3,2.6l1.5,2.6 L1161.3,318.5z M1169,313.9l-1.5-2.6l-4.3,2.6l1.5,2.6L1169,313.9z M1130.2,337.2l-1.5-2.6l-4.3,2.6l1.5,2.6L1130.2,337.2z M1138,332.5l-1.5-2.6l-4.3,2.6l1.5,2.6L1138,332.5z M1145.7,327.9l-1.5-2.6l-4.3,2.6l1.5,2.6L1145.7,327.9z M1106.9,351.1 l-1.5-2.6l-4.3,2.6l1.5,2.6L1106.9,351.1z M1114.7,346.5l-1.5-2.6l-4.3,2.6l1.5,2.6L1114.7,346.5z M1122.4,341.8l-1.5-2.6 l-4.3,2.6l1.5,2.6L1122.4,341.8z M1083.7,365.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1083.7,365.1z M1091.4,360.5l-1.5-2.6l-4.3,2.6l1.5,2.6 L1091.4,360.5z M1099.1,355.8l-1.5-2.6l-4.3,2.6l1.5,2.6L1099.1,355.8z M1060.4,379.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1060.4,379.1z M1068.1,374.4l-1.5-2.6l-4.3,2.6l1.5,2.6L1068.1,374.4z M1075.9,369.8l-1.5-2.6l-4.3,2.6l1.5,2.6L1075.9,369.8z M1037.1,393.1 l-1.5-2.6l-4.3,2.6l1.5,2.6L1037.1,393.1z M1044.8,388.4l-1.5-2.6l-4.3,2.6l1.5,2.6L1044.8,388.4z M1052.6,383.8l-1.5-2.6 l-4.3,2.6l1.5,2.6L1052.6,383.8z M1013.8,407.1l-1.5-2.6l-4.3,2.6l1.5,2.6L1013.8,407.1z M1021.6,402.4l-1.5-2.6l-4.3,2.6l1.5,2.6 L1021.6,402.4z M1029.3,397.8l-1.5-2.6l-4.3,2.6l1.5,2.6L1029.3,397.8z M990.5,421l-1.5-2.6l-4.3,2.6l1.5,2.6L990.5,421z M998.3,416.4l-1.5-2.6l-4.3,2.6l1.5,2.6L998.3,416.4z M1006,411.8l-1.5-2.6l-4.3,2.6l1.5,2.6L1006,411.8z M967.2,435l-1.5-2.6 l-4.3,2.6l1.5,2.6L967.2,435z M975,430.4l-1.5-2.6l-4.3,2.6l1.5,2.6L975,430.4z M982.7,425.7l-1.5-2.6l-4.3,2.6l1.5,2.6 L982.7,425.7z M944,449l-1.5-2.6l-4.3,2.6l1.5,2.6L944,449z M951.7,444.4l-1.5-2.6l-4.3,2.6l1.5,2.6L951.7,444.4z M959.4,439.7 l-1.5-2.6l-4.3,2.6l1.5,2.6L959.4,439.7z M920.7,463l-1.5-2.6l-4.3,2.6l1.5,2.6L920.7,463z M928.4,458.3l-1.5-2.6l-4.3,2.6 l1.5,2.6L928.4,458.3z M936.2,453.7l-1.5-2.6l-4.3,2.6l1.5,2.6L936.2,453.7z M897.4,477l-1.5-2.6l-4.3,2.6l1.5,2.6L897.4,477z M905.1,472.3l-1.5-2.6l-4.3,2.6l1.5,2.6L905.1,472.3z M912.9,467.7l-1.5-2.6l-4.3,2.6l1.5,2.6L912.9,467.7z M874.1,491l-1.5-2.6 l-4.3,2.6l1.5,2.6L874.1,491z M881.9,486.3l-1.5-2.6l-4.3,2.6l1.5,2.6L881.9,486.3z M889.6,481.7l-1.5-2.6l-4.3,2.6l1.5,2.6 L889.6,481.7z M850.8,504.9l-1.5-2.6L845,505l1.5,2.6L850.8,504.9z M858.6,500.3l-1.5-2.6l-4.3,2.6l1.5,2.6L858.6,500.3z M866.3,495.6l-1.5-2.6l-4.3,2.6l1.5,2.6L866.3,495.6z M827.5,518.9l-1.5-2.6l-4.3,2.6l1.5,2.6L827.5,518.9z M835.3,514.3 l-1.5-2.6l-4.3,2.6l1.5,2.6L835.3,514.3z M843,509.6l-1.5-2.6l-4.3,2.6l1.5,2.6L843,509.6z M804.3,532.9l-1.5-2.6l-4.3,2.6 l1.5,2.6L804.3,532.9z M812,528.3l-1.5-2.6l-4.3,2.6l1.5,2.6L812,528.3z M819.7,523.6l-1.5-2.6l-4.3,2.6l1.5,2.6L819.7,523.6z M781,546.9l-1.5-2.6l-4.3,2.6l1.5,2.6L781,546.9z M788.7,542.2l-1.5-2.6l-4.3,2.6l1.5,2.6L788.7,542.2z M796.5,537.6l-1.5-2.6 l-4.3,2.6l1.5,2.6L796.5,537.6z M757.7,560.9l-1.5-2.6l-4.3,2.6l1.5,2.6L757.7,560.9z M765.4,556.2l-1.5-2.6l-4.3,2.6l1.5,2.6 L765.4,556.2z M773.2,551.6l-1.5-2.6l-4.3,2.6l1.5,2.6L773.2,551.6z M734.4,574.9l-1.5-2.6l-4.3,2.6l1.5,2.6L734.4,574.9z M742.2,570.2l-1.5-2.6l-4.3,2.6l1.5,2.6L742.2,570.2z M749.9,565.6l-1.5-2.6l-4.3,2.6l1.5,2.6L749.9,565.6z M711.1,588.8 l-1.5-2.6l-4.3,2.6l1.5,2.6L711.1,588.8z M718.9,584.2l-1.5-2.6l-4.3,2.6l1.5,2.6L718.9,584.2z M726.6,579.5l-1.5-2.6l-4.3,2.6 l1.5,2.6L726.6,579.5z M687.8,602.8l-1.5-2.6l-4.3,2.6l1.5,2.6L687.8,602.8z M695.6,598.2l-1.5-2.6l-4.3,2.6l1.5,2.6L695.6,598.2z M703.3,593.5l-1.5-2.6l-4.3,2.6l1.5,2.6L703.3,593.5z M664.6,616.8l-1.5-2.6l-4.3,2.6l1.5,2.6L664.6,616.8z M672.3,612.1 l-1.5-2.6l-4.3,2.6l1.5,2.6L672.3,612.1z M680,607.5l-1.5-2.6l-4.3,2.6l1.5,2.6L680,607.5z M641.3,630.8l-1.5-2.6l-4.3,2.6 l1.5,2.6L641.3,630.8z M649,626.1l-1.5-2.6l-4.3,2.6l1.5,2.6L649,626.1z M656.8,621.5l-1.5-2.6l-4.3,2.6l1.5,2.6L656.8,621.5z M618,644.8l-1.5-2.6l-4.3,2.6l1.5,2.6L618,644.8z M625.7,640.1l-1.5-2.6l-4.3,2.6l1.5,2.6L625.7,640.1z M633.5,635.5l-1.5-2.6 l-4.3,2.6l1.5,2.6L633.5,635.5z M594.7,658.8l-1.5-2.6l-4.3,2.6l1.5,2.6L594.7,658.8z M602.5,654.1l-1.5-2.6l-4.3,2.6l1.5,2.6 L602.5,654.1z M610.2,649.5l-1.5-2.6l-4.3,2.6l1.5,2.6L610.2,649.5z M571.4,672.7l-1.5-2.6l-4.3,2.6l1.5,2.6L571.4,672.7z M579.2,668.1l-1.5-2.6l-4.3,2.6l1.5,2.6L579.2,668.1z M586.9,663.4l-1.5-2.6l-4.3,2.6l1.5,2.6L586.9,663.4z M548.1,686.7 l-1.5-2.6l-4.3,2.6l1.5,2.6L548.1,686.7z M555.9,682.1l-1.5-2.6l-4.3,2.6l1.5,2.6L555.9,682.1z M563.6,677.4l-1.5-2.6l-4.3,2.6 l1.5,2.6L563.6,677.4z M524.9,700.7l-1.5-2.6l-4.3,2.6l1.5,2.6L524.9,700.7z M532.6,696l-1.5-2.6l-4.3,2.6l1.5,2.6L532.6,696z M540.3,691.4l-1.5-2.6l-4.3,2.6l1.5,2.6L540.3,691.4z M501.6,714.7l-1.5-2.6l-4.3,2.6l1.5,2.6L501.6,714.7z M509.3,710l-1.5-2.6 l-4.3,2.6l1.5,2.6L509.3,710z M517.1,705.4l-1.5-2.6l-4.3,2.6l1.5,2.6L517.1,705.4z M478.3,728.7l-1.5-2.6l-4.3,2.6l1.5,2.6 L478.3,728.7z M486,724l-1.5-2.6l-4.3,2.6l1.5,2.6L486,724z M493.8,719.4l-1.5-2.6l-4.3,2.6l1.5,2.6L493.8,719.4z M455,742.6 l-1.5-2.6l-4.3,2.6l1.5,2.6L455,742.6z M462.8,738l-1.5-2.6l-4.3,2.6l1.5,2.6L462.8,738z M470.5,733.3l-1.5-2.6l-4.3,2.6l1.5,2.6 L470.5,733.3z M431.7,756.6l-1.5-2.6l-4.3,2.6l1.5,2.6L431.7,756.6z M439.5,752l-1.5-2.6l-4.3,2.6l1.5,2.6L439.5,752z M447.2,747.3l-1.5-2.6l-4.3,2.6l1.5,2.6L447.2,747.3z M408.4,770.6l-1.5-2.6l-4.3,2.6l1.5,2.6L408.4,770.6z M416.2,766l-1.5-2.6 l-4.3,2.6l1.5,2.6L416.2,766z M423.9,761.3l-1.5-2.6l-4.3,2.6l1.5,2.6L423.9,761.3z M385.2,784.6l-1.5-2.6l-4.3,2.6l1.5,2.6 L385.2,784.6z M392.9,779.9l-1.5-2.6L387,780l1.5,2.6L392.9,779.9z M400.6,775.3l-1.5-2.6l-4.3,2.6l1.5,2.6L400.6,775.3z M361.9,798.6l-1.5-2.6l-4.3,2.6l1.5,2.6L361.9,798.6z M369.6,793.9l-1.5-2.6l-4.3,2.6l1.5,2.6L369.6,793.9z M377.4,789.3 l-1.5-2.6l-4.3,2.6l1.5,2.6L377.4,789.3z M338.6,812.6l-1.5-2.6l-4.3,2.6l1.5,2.6L338.6,812.6z M346.3,807.9l-1.5-2.6l-4.3,2.6 l1.5,2.6L346.3,807.9z M354.1,803.3l-1.5-2.6l-4.3,2.6l1.5,2.6L354.1,803.3z M315.3,826.5l-1.5-2.6l-4.3,2.6l1.5,2.6L315.3,826.5z M323.1,821.9l-1.5-2.6l-4.3,2.6l1.5,2.6L323.1,821.9z M330.8,817.2l-1.5-2.6l-4.3,2.6l1.5,2.6L330.8,817.2z M292,840.5l-1.5-2.6 l-4.3,2.6l1.5,2.6L292,840.5z M299.8,835.9l-1.5-2.6l-4.3,2.6l1.5,2.6L299.8,835.9z M307.5,831.2l-1.5-2.6l-4.3,2.6l1.5,2.6 L307.5,831.2z M268.7,854.5l-1.5-2.6l-4.3,2.6l1.5,2.6L268.7,854.5z M276.5,849.8l-1.5-2.6l-4.3,2.6l1.5,2.6L276.5,849.8z M284.2,845.2l-1.5-2.6l-4.3,2.6l1.5,2.6L284.2,845.2z M245.5,868.5l-1.5-2.6l-4.3,2.6l1.5,2.6L245.5,868.5z M253.2,863.8 l-1.5-2.6l-4.3,2.6l1.5,2.6L253.2,863.8z M260.9,859.2l-1.5-2.6l-4.3,2.6l1.5,2.6L260.9,859.2z M222.2,882.5l-1.5-2.6l-4.3,2.6 l1.5,2.6L222.2,882.5z M229.9,877.8l-1.5-2.6l-4.3,2.6l1.5,2.6L229.9,877.8z M237.7,873.2l-1.5-2.6l-4.3,2.6l1.5,2.6L237.7,873.2z M232.8,919.9l-1.5,2.6l4.2,2.5l1.5-2.6L232.8,919.9z M225.3,915.5l-1.5,2.6l4.2,2.5l1.5-2.6L225.3,915.5z M217.9,911l-1.5,2.6 l4.2,2.5l1.5-2.6L217.9,911z M255.2,933.3l-1.5,2.6l4.2,2.5l1.5-2.6L255.2,933.3z M247.7,928.9l-1.5,2.6l4.2,2.5l1.5-2.6 L247.7,928.9z M240.3,924.4l-1.5,2.6l4.2,2.5l1.5-2.6L240.3,924.4z M277.6,946.8l-1.5,2.6l4.2,2.5l1.5-2.6L277.6,946.8z M270.2,942.3l-1.5,2.6l4.2,2.5l1.5-2.6L270.2,942.3z M262.7,937.8l-1.5,2.6l4.2,2.5l1.5-2.6L262.7,937.8z M300,960.2l-1.5,2.6 l4.2,2.5l1.5-2.6L300,960.2z M292.6,955.7l-1.5,2.6l4.2,2.5l1.5-2.6L292.6,955.7z M285.1,951.2l-1.5,2.6l4.2,2.5l1.5-2.6 L285.1,951.2z M322.5,973.6l-1.5,2.6l4.2,2.5l1.5-2.6L322.5,973.6z M315,969.1l-1.5,2.6l4.2,2.5l1.5-2.6L315,969.1z M307.6,964.7 l-1.5,2.6l4.2,2.5l1.5-2.6L307.6,964.7z M344.9,987l-1.5,2.6l4.2,2.5l1.5-2.6L344.9,987z M337.4,982.5l-1.5,2.6l4.2,2.5l1.5-2.6 L337.4,982.5z M330,978.1l-1.5,2.6l4.2,2.5l1.5-2.6L330,978.1z M367.3,1000.4l-1.5,2.6l4.2,2.5l1.5-2.6L367.3,1000.4z M359.9,995.9l-1.5,2.6l4.2,2.5l1.5-2.6L359.9,995.9z M352.4,991.5l-1.5,2.6l4.2,2.5l1.5-2.6L352.4,991.5z M389.7,1013.8l-1.5,2.6 l4.2,2.5l1.5-2.6L389.7,1013.8z M382.3,1009.3l-1.5,2.6l4.2,2.5l1.5-2.6L382.3,1009.3z M374.8,1004.9l-1.5,2.6l4.2,2.5l1.5-2.6 L374.8,1004.9z M412.2,1027.2l-1.5,2.6l4.2,2.5l1.5-2.6L412.2,1027.2z M404.7,1022.7l-1.5,2.6l4.2,2.5l1.5-2.6L404.7,1022.7z M397.3,1018.3l-1.5,2.6l4.2,2.5l1.5-2.6L397.3,1018.3z M434.6,1040.6l-1.5,2.6l4.2,2.5l1.5-2.6L434.6,1040.6z M427.1,1036.1 l-1.5,2.6l4.2,2.5l1.5-2.6L427.1,1036.1z M419.7,1031.7l-1.5,2.6l4.2,2.5l1.5-2.6L419.7,1031.7z M457,1054l-1.5,2.6l4.2,2.5 l1.5-2.6L457,1054z M449.6,1049.5l-1.5,2.6l4.2,2.5l1.5-2.6L449.6,1049.5z M442.1,1045.1l-1.5,2.6l4.2,2.5l1.5-2.6L442.1,1045.1z M1732,286.5l-1.6-2.6l-6.4,4l1.6,2.6L1732,286.5z M1743.5,279.2c-0.2-0.1-0.4-0.3-0.7-0.5c-0.6-0.4-1.3-1-2.1-1.5 c-1.5-1.1-3.1-2.2-3.1-2.2l-1.7,2.4c0,0,0.6,0.4,1.2,0.9c0.3,0.2,0.6,0.4,0.8,0.6l0.1,0.1l0,0l0,0l0,0c0,0,0,0.1,0.1,0.1 c0,0,0,0.1,0,0.1l-2.6,1.6l1.6,2.6l6.4-4C1743.6,279.3,1743.6,279.3,1743.5,279.2z M1726.5,267.1l-1.7,2.4l6.2,4.4l1.7-2.4 L1726.5,267.1z M1509.5,113.1l-1.7,2.5l2.7,1.9l1.7-2.5L1509.5,113.1z M1504.6,109.8c-0.1,0-0.2,0.1-0.3,0.2 c-0.3,0.2-0.6,0.4-1,0.6c-0.7,0.4-1.4,0.8-1.4,0.8l1.5,2.6c0,0,0.3-0.2,0.6-0.3c0.1-0.1,0.3-0.2,0.4-0.2l0,0l0,0l0,0l0,0 c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1l1.1,0.8l1.7-2.5l-2.7-1.9C1504.7,109.7,1504.7,109.7,1504.6,109.8z M1496.9,114.5l1.5,2.6 l2.8-1.7l-1.5-2.6L1496.9,114.5z M204.8,890.2l1.6,2.6l7.2-4.3l-1.6-2.6L204.8,890.2z M192.1,898.1c0.2,0.1,0.5,0.3,0.8,0.5 c0.7,0.4,1.6,0.9,2.5,1.5c1.8,1.1,3.6,2.1,3.6,2.1l1.5-2.6c0,0-0.7-0.4-1.4-0.9c-0.4-0.2-0.7-0.4-1-0.6l-0.1-0.1l0,0l0,0l0,0 c0,0,0-0.1-0.1-0.1c0,0,0-0.1,0-0.1l2.9-1.7l-1.6-2.6l-7.2,4.3C192,897.9,192,898,192.1,898.1z M211.8,909.9l1.5-2.6l-7.2-4.3 l-1.5,2.6L211.8,909.9z M465.3,1061.7l1.5-2.6l-2.6-1.6l-1.5,2.6L465.3,1061.7z M470.1,1064.3c0.1,0,0.2-0.1,0.3-0.2 c0.2-0.1,0.6-0.3,0.9-0.5c0.6-0.4,1.3-0.8,1.3-0.8l-1.6-2.6c0,0-0.3,0.2-0.5,0.3c-0.1,0.1-0.3,0.2-0.4,0.2l0,0l0,0l0,0l0,0 c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1l-1-0.6l-1.5,2.6l2.6,1.6C470,1064.5,470.1,1064.4,470.1,1064.3z M477.3,1059.9l-1.6-2.6 l-2.6,1.6l1.6,2.6L477.3,1059.9z" />
                                  <g display="none">
                                    <image display="inline" overflow="visible" opacity="0.2" enable-background="new" width="69" height="65" xlink:href="data:image/png;base64,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 SUVORK5CYII=" transform="matrix(0.9846 0 0 0.9846 841.9875 782.9567)"></image>
                                    <g display="inline">
                                      <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="867.5721" y1="380.1925" x2="884.255" y2="390.742" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_4_)" points="885.7,812.1 882.3,806.6 865.6,817.3 868.9,822.9 " />
                                    </g>
                                  </g>
                                  <g display="none">
                                    <image display="inline" overflow="visible" opacity="0.2" enable-background="new" width="69" height="65" xlink:href="data:image/png;base64,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" transform="matrix(0.9846 0 0 0.9846 1355.9874 147.9566)"></image>
                                    <g display="inline">
                                      <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="2580.2009" y1="-73.9323" x2="2596.884" y2="-63.3828" gradientTransform="matrix(-1 0 0 1 3977.885 248.3313)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_5_)" points="1379.6,182.1 1382.9,187.6 1399.7,176.9 1396.3,171.4 " />
                                    </g>
                                  </g>
                                  <g display="none">
                                    <image display="inline" overflow="visible" opacity="0.2" enable-background="new" width="69" height="65" xlink:href="data:image/png;base64,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 3jXbAAAAAElFTkSuQmCC" transform="matrix(0.9846 0 0 0.9846 211.9874 896.9567)"></image>
                                    <g display="inline">
                                      <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="1912.1555" y1="121.5306" x2="1928.7924" y2="132.0509" gradientTransform="matrix(0.4223 0.9064 0.9064 -0.4223 -680.2463 -758.597)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_6_)" points="252.1,936.5 255.6,931.1 238.9,920.4 235.4,925.8 " />
                                    </g>
                                  </g>
                                  <linearGradient id="linepath_1_" gradientUnits="userSpaceOnUse" x1="415.4998" y1="357.141" x2="1526.2567" y2="805.9159">
                                    <stop offset="0" style="stop-color:#202333" />
                                    <stop offset="1" style="stop-color:#5C6399" />
                                  </linearGradient>
                                  <polygon id="linepath" fill="none" stroke="url(#linepath_1_)" stroke-miterlimit="10" points="197.9,898.1 1501.2,115.4 1738.2,279.2 474.7,1061.5 " />
                                </g>
                                <polygon fill="#202333" points="1345,596.3 1426,646 1510,597.3 1428,548" />
                                <g id="purplebg" opacity="0.65">
                                  <polygon fill="#202333" points="1585,596.3 1666,646 1750,597.3 1668,548" />
                                  <polygon fill="#202333" points="1464,527.3 1545,577 1629,528.3 1547,479" />
                                  <polygon fill="#202333" points="1047,224.3 1128,274 1212,225.3 1130,176 " />
                                  <polygon fill="#202333" points="1720,524.3 1801,574 1885,525.3 1803,476" />
                                  <polygon fill="#202333" points="1831,596.3 1912,646 1996,597.3 1914,548" />
                                  <path fill="#202333" d="M1680.3,496.1l0.8,1.3l-2.1,1.2l-0.8-1.3L1680.3,496.1z M1674.3,499.6l0.8,1.3l2.1-1.2l-0.8-1.3 L1674.3,499.6z M1670.5,501.8l0.8,1.3l2.1-1.2l-0.8-1.3L1670.5,501.8z M1689.7,490.7l0.8,1.3l2.1-1.2l-0.8-1.3L1689.7,490.7z M1685.8,492.9l0.8,1.3l2.1-1.2l-0.8-1.3L1685.8,492.9z M1682,495.1l0.8,1.3l2.1-1.2l-0.8-1.3L1682,495.1z M1701.2,484l0.8,1.3 l2.1-1.2l-0.8-1.3L1701.2,484z M1697.3,486.2l0.8,1.3l2.1-1.2l-0.8-1.3L1697.3,486.2z M1693.5,488.4l0.8,1.3l2.1-1.2l-0.8-1.3 L1693.5,488.4z M1712.7,477.3l0.8,1.3l2.1-1.2l-0.8-1.3L1712.7,477.3z M1708.9,479.5l0.8,1.3l2.1-1.2l-0.8-1.3L1708.9,479.5z M1705,481.8l0.8,1.3l2.1-1.2l-0.8-1.3L1705,481.8z M1724.2,470.6l0.8,1.3l2.1-1.2l-0.8-1.3L1724.2,470.6z M1720.4,472.9l0.8,1.3 l2.1-1.2l-0.8-1.3L1720.4,472.9z M1716.6,475.1l0.8,1.3l2.1-1.2l-0.8-1.3L1716.6,475.1z M1735.8,464l0.8,1.3l2.1-1.2l-0.8-1.3 L1735.8,464z M1731.9,466.2l0.8,1.3l2.1-1.2l-0.8-1.3L1731.9,466.2z M1728.1,468.4l0.8,1.3l2.1-1.2l-0.8-1.3L1728.1,468.4z M1730.5,445.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1730.5,445.2z M1734.3,447.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1734.3,447.5z M1738,449.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L1738,449.7z M1719.3,438.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1719.3,438.5z M1723.1,440.7l0.8-1.3l-2.1-1.3 l-0.8,1.3L1723.1,440.7z M1726.8,443l0.8-1.3l-2.1-1.3l-0.8,1.3L1726.8,443z M1708.1,431.7l0.8-1.3l-2.1-1.3l-0.8,1.3 L1708.1,431.7z M1711.8,434l0.8-1.3l-2.1-1.3l-0.8,1.3L1711.8,434z M1715.6,436.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1715.6,436.2z M1696.9,425l0.8-1.3l-2.1-1.3l-0.8,1.3L1696.9,425z M1700.6,427.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1700.6,427.2z M1704.3,429.5 l0.8-1.3l-2.1-1.3l-0.8,1.3L1704.3,429.5z M1685.7,418.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1685.7,418.2z M1689.4,420.5l0.8-1.3l-2.1-1.3 l-0.8,1.3L1689.4,420.5z M1693.1,422.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1693.1,422.7z M1674.4,411.5l0.8-1.3l-2.1-1.3l-0.8,1.3 L1674.4,411.5z M1678.2,413.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1678.2,413.7z M1681.9,416l0.8-1.3l-2.1-1.3l-0.8,1.3L1681.9,416z M1656,414.6l-0.8-1.3l-2.1,1.2l0.8,1.3L1656,414.6z M1659.8,412.4l-0.8-1.3l-2.1,1.2l0.8,1.3L1659.8,412.4z M1663.6,410.2 l-0.8-1.3l-2.1,1.2l0.8,1.3L1663.6,410.2z M1644.6,421.2l-0.8-1.3l-2.1,1.2l0.8,1.3L1644.6,421.2z M1648.4,419l-0.8-1.3l-2.1,1.2 l0.8,1.3L1648.4,419z M1652.2,416.8l-0.8-1.3l-2.1,1.2l0.8,1.3L1652.2,416.8z M1633.2,427.9l-0.8-1.3l-2.1,1.2l0.8,1.3 L1633.2,427.9z M1637,425.7l-0.8-1.3l-2.1,1.2l0.8,1.3L1637,425.7z M1640.8,423.5l-0.8-1.3l-2.1,1.2l0.8,1.3L1640.8,423.5z M1621.8,434.5l-0.8-1.3l-2.1,1.2l0.8,1.3L1621.8,434.5z M1625.6,432.3l-0.8-1.3l-2.1,1.2l0.8,1.3L1625.6,432.3z M1629.4,430.1 l-0.8-1.3l-2.1,1.2l0.8,1.3L1629.4,430.1z M1610.5,441.1l-0.8-1.3l-2.1,1.2l0.8,1.3L1610.5,441.1z M1614.2,438.9l-0.8-1.3 l-2.1,1.2l0.8,1.3L1614.2,438.9z M1618,436.7l-0.8-1.3l-2.1,1.2l0.8,1.3L1618,436.7z M1599.1,447.8l-0.8-1.3l-2.1,1.2l0.8,1.3 L1599.1,447.8z M1602.9,445.5l-0.8-1.3l-2.1,1.2l0.8,1.3L1602.9,445.5z M1606.6,443.3l-0.8-1.3l-2.1,1.2l0.8,1.3L1606.6,443.3z M1604.2,466.5l-0.8,1.3l2.1,1.3l0.8-1.3L1604.2,466.5z M1600.5,464.2l-0.8,1.3l2.1,1.3l0.8-1.3L1600.5,464.2z M1596.8,462 l-0.8,1.3l2.1,1.3l0.8-1.3L1596.8,462z M1615.3,473.3l-0.8,1.3l2.1,1.3l0.8-1.3L1615.3,473.3z M1611.6,471l-0.8,1.3l2.1,1.3 l0.8-1.3L1611.6,471z M1607.9,468.8l-0.8,1.3l2.1,1.3l0.8-1.3L1607.9,468.8z M1626.3,480.1l-0.8,1.3l2.1,1.3l0.8-1.3L1626.3,480.1 z M1622.7,477.8l-0.8,1.3l2.1,1.3l0.8-1.3L1622.7,477.8z M1619,475.5l-0.8,1.3l2.1,1.3l0.8-1.3L1619,475.5z M1637.4,486.9 l-0.8,1.3l2.1,1.3l0.8-1.3L1637.4,486.9z M1633.7,484.6l-0.8,1.3l2.1,1.3l0.8-1.3L1633.7,484.6z M1630.1,482.3l-0.8,1.3l2.1,1.3 l0.8-1.3L1630.1,482.3z M1648.5,493.7l-0.8,1.3l2.1,1.3l0.8-1.3L1648.5,493.7z M1644.8,491.4l-0.8,1.3l2.1,1.3l0.8-1.3 L1644.8,491.4z M1641.1,489.1l-0.8,1.3l2.1,1.3l0.8-1.3L1641.1,489.1z M1659.6,500.4l-0.8,1.3l2.1,1.3l0.8-1.3L1659.6,500.4z M1655.9,498.2l-0.8,1.3l2.1,1.3l0.8-1.3L1655.9,498.2z M1652.2,495.9l-0.8,1.3l2.1,1.3l0.8-1.3L1652.2,495.9z M1744.5,460.3 l-0.8-1.3l-3.7,2.1l0.8,1.3L1744.5,460.3z M1751,456.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8 c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0 l-1.5,0.8l0.8,1.3L1751,456.3C1751.1,456.4,1751.1,456.4,1751,456.3z M1741,450.3l-0.8,1.3l3.6,2.2l0.8-1.3L1741,450.3z M1670.3,407.7l-0.8,1.3l1.3,0.8l0.8-1.3L1670.3,407.7z M1668,406.4c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3 c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3 l0.8-1.3L1668,406.4C1668.1,406.3,1668,406.3,1668,406.4z M1664.5,408.4l0.8,1.3l1.3-0.7l-0.8-1.3L1664.5,408.4z M1590.4,451.4 l0.8,1.3l3.6-2.1l-0.8-1.3L1590.4,451.4z M1584,455.3c0.1,0.1,0.2,0.1,0.4,0.2c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1 l0.8-1.3c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L1584,455.3 C1583.9,455.2,1583.9,455.3,1584,455.3z M1593.8,461.4l0.8-1.3l-3.6-2.2l-0.8,1.3L1593.8,461.4z M1663.7,504.3l0.8-1.3l-1.3-0.8 l-0.8,1.3L1663.7,504.3z M1666,505.6c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3 c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3l-0.8,1.3L1666,505.6 C1665.9,505.7,1666,505.7,1666,505.6z M1669.5,503.6l-0.8-1.3l-1.3,0.7l0.8,1.3L1669.5,503.6z" />
                                  <path fill="#202333" d="M1021.3,196.1l0.8,1.3l-2.1,1.2l-0.8-1.3L1021.3,196.1z M1015.3,199.6l0.8,1.3l2.1-1.2l-0.8-1.3 L1015.3,199.6z M1011.5,201.8l0.8,1.3l2.1-1.2l-0.8-1.3L1011.5,201.8z M1030.7,190.7l0.8,1.3l2.1-1.2l-0.8-1.3L1030.7,190.7z M1026.8,192.9l0.8,1.3l2.1-1.2l-0.8-1.3L1026.8,192.9z M1023,195.1l0.8,1.3l2.1-1.2l-0.8-1.3L1023,195.1z M1042.2,184l0.8,1.3 l2.1-1.2l-0.8-1.3L1042.2,184z M1038.3,186.2l0.8,1.3l2.1-1.2l-0.8-1.3L1038.3,186.2z M1034.5,188.4l0.8,1.3l2.1-1.2l-0.8-1.3 L1034.5,188.4z M1053.7,177.3l0.8,1.3l2.1-1.2l-0.8-1.3L1053.7,177.3z M1049.9,179.5l0.8,1.3l2.1-1.2l-0.8-1.3L1049.9,179.5z M1046,181.8l0.8,1.3l2.1-1.2l-0.8-1.3L1046,181.8z M1065.2,170.6l0.8,1.3l2.1-1.2l-0.8-1.3L1065.2,170.6z M1061.4,172.9l0.8,1.3 l2.1-1.2l-0.8-1.3L1061.4,172.9z M1057.6,175.1l0.8,1.3l2.1-1.2l-0.8-1.3L1057.6,175.1z M1076.7,164l0.8,1.3l2.1-1.2l-0.8-1.3 L1076.7,164z M1072.9,166.2l0.8,1.3l2.1-1.2l-0.8-1.3L1072.9,166.2z M1069.1,168.4l0.8,1.3l2.1-1.2l-0.8-1.3L1069.1,168.4z M1071.5,145.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1071.5,145.2z M1075.3,147.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1075.3,147.5z M1079,149.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L1079,149.7z M1060.3,138.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1060.3,138.5z M1064,140.7l0.8-1.3l-2.1-1.3 l-0.8,1.3L1064,140.7z M1067.8,143l0.8-1.3l-2.1-1.3l-0.8,1.3L1067.8,143z M1049.1,131.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1049.1,131.7z M1052.8,134l0.8-1.3l-2.1-1.3l-0.8,1.3L1052.8,134z M1056.6,136.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1056.6,136.2z M1037.9,125l0.8-1.3 l-2.1-1.3l-0.8,1.3L1037.9,125z M1041.6,127.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1041.6,127.2z M1045.3,129.5l0.8-1.3l-2.1-1.3l-0.8,1.3 L1045.3,129.5z M1026.7,118.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1026.7,118.2z M1030.4,120.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1030.4,120.5z M1034.1,122.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1034.1,122.7z M1015.4,111.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1015.4,111.5z M1019.2,113.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L1019.2,113.7z M1022.9,116l0.8-1.3l-2.1-1.3l-0.8,1.3L1022.9,116z M997,114.6l-0.8-1.3l-2.1,1.2 l0.8,1.3L997,114.6z M1000.8,112.4l-0.8-1.3l-2.1,1.2l0.8,1.3L1000.8,112.4z M1004.6,110.2l-0.8-1.3l-2.1,1.2l0.8,1.3 L1004.6,110.2z M985.6,121.2l-0.8-1.3l-2.1,1.2l0.8,1.3L985.6,121.2z M989.4,119l-0.8-1.3l-2.1,1.2l0.8,1.3L989.4,119z M993.2,116.8l-0.8-1.3l-2.1,1.2l0.8,1.3L993.2,116.8z M974.2,127.9l-0.8-1.3l-2.1,1.2l0.8,1.3L974.2,127.9z M978,125.7l-0.8-1.3 l-2.1,1.2l0.8,1.3L978,125.7z M981.8,123.5l-0.8-1.3l-2.1,1.2l0.8,1.3L981.8,123.5z M962.8,134.5l-0.8-1.3l-2.1,1.2l0.8,1.3 L962.8,134.5z M966.6,132.3l-0.8-1.3l-2.1,1.2l0.8,1.3L966.6,132.3z M970.4,130.1l-0.8-1.3l-2.1,1.2l0.8,1.3L970.4,130.1z M951.4,141.1l-0.8-1.3l-2.1,1.2l0.8,1.3L951.4,141.1z M955.2,138.9l-0.8-1.3l-2.1,1.2l0.8,1.3L955.2,138.9z M959,136.7l-0.8-1.3 l-2.1,1.2l0.8,1.3L959,136.7z M940.1,147.8l-0.8-1.3l-2.1,1.2l0.8,1.3L940.1,147.8z M943.9,145.5l-0.8-1.3l-2.1,1.2l0.8,1.3 L943.9,145.5z M947.6,143.3l-0.8-1.3l-2.1,1.2l0.8,1.3L947.6,143.3z M945.2,166.5l-0.8,1.3l2.1,1.3l0.8-1.3L945.2,166.5z M941.5,164.2l-0.8,1.3l2.1,1.3l0.8-1.3L941.5,164.2z M937.8,162l-0.8,1.3l2.1,1.3l0.8-1.3L937.8,162z M956.3,173.3l-0.8,1.3 l2.1,1.3l0.8-1.3L956.3,173.3z M952.6,171l-0.8,1.3l2.1,1.3l0.8-1.3L952.6,171z M948.9,168.8l-0.8,1.3l2.1,1.3l0.8-1.3 L948.9,168.8z M967.3,180.1l-0.8,1.3l2.1,1.3l0.8-1.3L967.3,180.1z M963.7,177.8l-0.8,1.3l2.1,1.3l0.8-1.3L963.7,177.8z M960,175.5l-0.8,1.3l2.1,1.3l0.8-1.3L960,175.5z M978.4,186.9l-0.8,1.3l2.1,1.3l0.8-1.3L978.4,186.9z M974.7,184.6l-0.8,1.3 l2.1,1.3l0.8-1.3L974.7,184.6z M971.1,182.3l-0.8,1.3l2.1,1.3l0.8-1.3L971.1,182.3z M989.5,193.7l-0.8,1.3l2.1,1.3l0.8-1.3 L989.5,193.7z M985.8,191.4l-0.8,1.3l2.1,1.3l0.8-1.3L985.8,191.4z M982.1,189.1l-0.8,1.3l2.1,1.3l0.8-1.3L982.1,189.1z M1000.6,200.4l-0.8,1.3l2.1,1.3l0.8-1.3L1000.6,200.4z M996.9,198.2l-0.8,1.3l2.1,1.3l0.8-1.3L996.9,198.2z M993.2,195.9 l-0.8,1.3l2.1,1.3l0.8-1.3L993.2,195.9z M1085.5,160.3l-0.8-1.3l-3.7,2.1l0.8,1.3L1085.5,160.3z M1092,156.3 c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L1092,156.3 C1092.1,156.4,1092.1,156.4,1092,156.3z M1082,150.3l-0.8,1.3l3.6,2.2l0.8-1.3L1082,150.3z M1011.3,107.7l-0.8,1.3l1.3,0.8 l0.8-1.3L1011.3,107.7z M1009,106.4c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3 c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L1009,106.4 C1009.1,106.3,1009,106.3,1009,106.4z M1005.5,108.4l0.8,1.3l1.3-0.7l-0.8-1.3L1005.5,108.4z M931.4,151.4l0.8,1.3l3.6-2.1 l-0.8-1.3L931.4,151.4z M925,155.3c0.1,0.1,0.2,0.1,0.4,0.2c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3 c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L925,155.3 C924.9,155.2,924.9,155.3,925,155.3z M934.8,161.4l0.8-1.3l-3.6-2.2l-0.8,1.3L934.8,161.4z M1004.6,204.3l0.8-1.3l-1.3-0.8 l-0.8,1.3L1004.6,204.3z M1007,205.6c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3 c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3l-0.8,1.3L1007,205.6 C1006.9,205.7,1007,205.7,1007,205.6z M1010.5,203.6l-0.8-1.3l-1.3,0.7l0.8,1.3L1010.5,203.6z" />
                                  <polygon fill="#202333" points="881,1022.3 962,1072 1046,1023.3 964,974 " />
                                  <path fill="#202333" d="M855.3,994.1l0.8,1.3l-2.1,1.2l-0.8-1.3L855.3,994.1z M849.3,997.6l0.8,1.3l2.1-1.2l-0.8-1.3L849.3,997.6z M845.5,999.8l0.8,1.3l2.1-1.2l-0.8-1.3L845.5,999.8z M864.7,988.7l0.8,1.3l2.1-1.2l-0.8-1.3L864.7,988.7z M860.8,990.9l0.8,1.3 l2.1-1.2l-0.8-1.3L860.8,990.9z M857,993.1l0.8,1.3l2.1-1.2l-0.8-1.3L857,993.1z M876.2,982l0.8,1.3l2.1-1.2l-0.8-1.3L876.2,982z M872.3,984.2l0.8,1.3l2.1-1.2l-0.8-1.3L872.3,984.2z M868.5,986.4l0.8,1.3l2.1-1.2l-0.8-1.3L868.5,986.4z M887.7,975.3l0.8,1.3 l2.1-1.2l-0.8-1.3L887.7,975.3z M883.9,977.5l0.8,1.3l2.1-1.2l-0.8-1.3L883.9,977.5z M880,979.8l0.8,1.3l2.1-1.2l-0.8-1.3 L880,979.8z M899.2,968.7l0.8,1.3l2.1-1.2l-0.8-1.3L899.2,968.7z M895.4,970.9l0.8,1.3l2.1-1.2l-0.8-1.3L895.4,970.9z M891.6,973.1l0.8,1.3l2.1-1.2l-0.8-1.3L891.6,973.1z M910.7,962l0.8,1.3l2.1-1.2l-0.8-1.3L910.7,962z M906.9,964.2l0.8,1.3 l2.1-1.2l-0.8-1.3L906.9,964.2z M903.1,966.4l0.8,1.3l2.1-1.2l-0.8-1.3L903.1,966.4z M905.5,943.2l0.8-1.3l-2.1-1.3l-0.8,1.3 L905.5,943.2z M909.3,945.5l0.8-1.3L908,943l-0.8,1.3L909.3,945.5z M913,947.7l0.8-1.3l-2.1-1.3l-0.8,1.3L913,947.7z M894.3,936.5 l0.8-1.3L893,934l-0.8,1.3L894.3,936.5z M898,938.7l0.8-1.3l-2.1-1.3l-0.8,1.3L898,938.7z M901.8,941l0.8-1.3l-2.1-1.3l-0.8,1.3 L901.8,941z M883.1,929.7l0.8-1.3l-2.1-1.3l-0.8,1.3L883.1,929.7z M886.8,932l0.8-1.3l-2.1-1.3l-0.8,1.3L886.8,932z M890.6,934.2 l0.8-1.3l-2.1-1.3l-0.8,1.3L890.6,934.2z M871.9,923l0.8-1.3l-2.1-1.3l-0.8,1.3L871.9,923z M875.6,925.2l0.8-1.3l-2.1-1.3 l-0.8,1.3L875.6,925.2z M879.3,927.5l0.8-1.3l-2.1-1.3l-0.8,1.3L879.3,927.5z M860.7,916.2l0.8-1.3l-2.1-1.3l-0.8,1.3L860.7,916.2 z M864.4,918.5l0.8-1.3l-2.1-1.3l-0.8,1.3L864.4,918.5z M868.1,920.7l0.8-1.3l-2.1-1.3l-0.8,1.3L868.1,920.7z M849.4,909.5 l0.8-1.3l-2.1-1.3l-0.8,1.3L849.4,909.5z M853.2,911.7l0.8-1.3l-2.1-1.3l-0.8,1.3L853.2,911.7z M856.9,914l0.8-1.3l-2.1-1.3 l-0.8,1.3L856.9,914z M831,912.6l-0.8-1.3l-2.1,1.2l0.8,1.3L831,912.6z M834.8,910.4l-0.8-1.3l-2.1,1.2l0.8,1.3L834.8,910.4z M838.6,908.2l-0.8-1.3l-2.1,1.2l0.8,1.3L838.6,908.2z M819.6,919.2l-0.8-1.3l-2.1,1.2l0.8,1.3L819.6,919.2z M823.4,917l-0.8-1.3 l-2.1,1.2l0.8,1.3L823.4,917z M827.2,914.8l-0.8-1.3l-2.1,1.2l0.8,1.3L827.2,914.8z M808.2,925.9l-0.8-1.3l-2.1,1.2l0.8,1.3 L808.2,925.9z M812,923.7l-0.8-1.3l-2.1,1.2l0.8,1.3L812,923.7z M815.8,921.5l-0.8-1.3l-2.1,1.2l0.8,1.3L815.8,921.5z M796.8,932.5l-0.8-1.3l-2.1,1.2l0.8,1.3L796.8,932.5z M800.6,930.3l-0.8-1.3l-2.1,1.2l0.8,1.3L800.6,930.3z M804.4,928.1 l-0.8-1.3l-2.1,1.2l0.8,1.3L804.4,928.1z M785.4,939.1l-0.8-1.3l-2.1,1.2l0.8,1.3L785.4,939.1z M789.2,936.9l-0.8-1.3l-2.1,1.2 l0.8,1.3L789.2,936.9z M793,934.7l-0.8-1.3l-2.1,1.2l0.8,1.3L793,934.7z M774.1,945.8l-0.8-1.3l-2.1,1.2l0.8,1.3L774.1,945.8z M777.9,943.5l-0.8-1.3l-2.1,1.2l0.8,1.3L777.9,943.5z M781.6,941.3l-0.8-1.3l-2.1,1.2l0.8,1.3L781.6,941.3z M779.2,964.5 l-0.8,1.3l2.1,1.3l0.8-1.3L779.2,964.5z M775.5,962.2l-0.8,1.3l2.1,1.3l0.8-1.3L775.5,962.2z M771.8,960l-0.8,1.3l2.1,1.3l0.8-1.3 L771.8,960z M790.3,971.3l-0.8,1.3l2.1,1.3l0.8-1.3L790.3,971.3z M786.6,969l-0.8,1.3l2.1,1.3l0.8-1.3L786.6,969z M782.9,966.8 l-0.8,1.3l2.1,1.3l0.8-1.3L782.9,966.8z M801.3,978.1l-0.8,1.3l2.1,1.3l0.8-1.3L801.3,978.1z M797.7,975.8l-0.8,1.3l2.1,1.3 l0.8-1.3L797.7,975.8z M794,973.5l-0.8,1.3l2.1,1.3l0.8-1.3L794,973.5z M812.4,984.9l-0.8,1.3l2.1,1.3l0.8-1.3L812.4,984.9z M808.7,982.6l-0.8,1.3l2.1,1.3l0.8-1.3L808.7,982.6z M805.1,980.3l-0.8,1.3l2.1,1.3l0.8-1.3L805.1,980.3z M823.5,991.7l-0.8,1.3 l2.1,1.3l0.8-1.3L823.5,991.7z M819.8,989.4l-0.8,1.3l2.1,1.3l0.8-1.3L819.8,989.4z M816.1,987.1l-0.8,1.3l2.1,1.3l0.8-1.3 L816.1,987.1z M834.6,998.4l-0.8,1.3l2.1,1.3l0.8-1.3L834.6,998.4z M830.9,996.2l-0.8,1.3l2.1,1.3l0.8-1.3L830.9,996.2z M827.2,993.9l-0.8,1.3l2.1,1.3l0.8-1.3L827.2,993.9z M919.5,958.3l-0.8-1.3l-3.7,2.1l0.8,1.3L919.5,958.3z M926,954.3 c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L926,954.3C926.1,954.4,926.1,954.4,926,954.3 z M916,948.3l-0.8,1.3l3.6,2.2l0.8-1.3L916,948.3z M845.3,905.7l-0.8,1.3l1.3,0.8l0.8-1.3L845.3,905.7z M843,904.4 c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0 l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L843,904.4C843.1,904.3,843,904.3,843,904.4z M839.5,906.4l0.8,1.3l1.3-0.7 l-0.8-1.3L839.5,906.4z M765.4,949.4l0.8,1.3l3.6-2.1l-0.8-1.3L765.4,949.4z M759,953.3c0.1,0.1,0.2,0.1,0.4,0.2 c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0 c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L759,953.3C758.9,953.2,758.9,953.3,759,953.3z M768.8,959.4l0.8-1.3l-3.6-2.2l-0.8,1.3 L768.8,959.4z M838.6,1002.3l0.8-1.3l-1.3-0.8l-0.8,1.3L838.6,1002.3z M841,1003.6c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3 c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3 l-0.8,1.3L841,1003.6C840.9,1003.7,841,1003.7,841,1003.6z M844.5,1001.6l-0.8-1.3l-1.3,0.7l0.8,1.3L844.5,1001.6z" />
                                  <path fill="#202333" d="M841.3,1136.1l0.8,1.3l-2.1,1.2l-0.8-1.3L841.3,1136.1z M835.3,1139.6l0.8,1.3l2.1-1.2l-0.8-1.3 L835.3,1139.6z M831.5,1141.8l0.8,1.3l2.1-1.2l-0.8-1.3L831.5,1141.8z M850.7,1130.7l0.8,1.3l2.1-1.2l-0.8-1.3L850.7,1130.7z M846.8,1132.9l0.8,1.3l2.1-1.2l-0.8-1.3L846.8,1132.9z M843,1135.1l0.8,1.3l2.1-1.2l-0.8-1.3L843,1135.1z M862.2,1124l0.8,1.3 l2.1-1.2l-0.8-1.3L862.2,1124z M858.3,1126.2l0.8,1.3l2.1-1.2l-0.8-1.3L858.3,1126.2z M854.5,1128.4l0.8,1.3l2.1-1.2l-0.8-1.3 L854.5,1128.4z M873.7,1117.3l0.8,1.3l2.1-1.2l-0.8-1.3L873.7,1117.3z M869.9,1119.5l0.8,1.3l2.1-1.2l-0.8-1.3L869.9,1119.5z M866,1121.8l0.8,1.3l2.1-1.2l-0.8-1.3L866,1121.8z M885.2,1110.7l0.8,1.3l2.1-1.2l-0.8-1.3L885.2,1110.7z M881.4,1112.9l0.8,1.3 l2.1-1.2l-0.8-1.3L881.4,1112.9z M877.6,1115.1l0.8,1.3l2.1-1.2l-0.8-1.3L877.6,1115.1z M896.7,1104l0.8,1.3l2.1-1.2l-0.8-1.3 L896.7,1104z M892.9,1106.2l0.8,1.3l2.1-1.2l-0.8-1.3L892.9,1106.2z M889.1,1108.4l0.8,1.3l2.1-1.2l-0.8-1.3L889.1,1108.4z M891.5,1085.2l0.8-1.3l-2.1-1.3l-0.8,1.3L891.5,1085.2z M895.3,1087.5l0.8-1.3l-2.1-1.3l-0.8,1.3L895.3,1087.5z M899,1089.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L899,1089.7z M880.3,1078.5l0.8-1.3l-2.1-1.3l-0.8,1.3L880.3,1078.5z M884,1080.7l0.8-1.3l-2.1-1.3 l-0.8,1.3L884,1080.7z M887.8,1083l0.8-1.3l-2.1-1.3l-0.8,1.3L887.8,1083z M869.1,1071.7l0.8-1.3l-2.1-1.3l-0.8,1.3L869.1,1071.7z M872.8,1074l0.8-1.3l-2.1-1.3l-0.8,1.3L872.8,1074z M876.6,1076.2l0.8-1.3l-2.1-1.3l-0.8,1.3L876.6,1076.2z M857.9,1065l0.8-1.3 l-2.1-1.3l-0.8,1.3L857.9,1065z M861.6,1067.2l0.8-1.3l-2.1-1.3l-0.8,1.3L861.6,1067.2z M865.3,1069.5l0.8-1.3l-2.1-1.3l-0.8,1.3 L865.3,1069.5z M846.7,1058.2l0.8-1.3l-2.1-1.3l-0.8,1.3L846.7,1058.2z M850.4,1060.5l0.8-1.3l-2.1-1.3l-0.8,1.3L850.4,1060.5z M854.1,1062.7l0.8-1.3l-2.1-1.3l-0.8,1.3L854.1,1062.7z M835.4,1051.5l0.8-1.3l-2.1-1.3l-0.8,1.3L835.4,1051.5z M839.2,1053.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L839.2,1053.7z M842.9,1056l0.8-1.3l-2.1-1.3l-0.8,1.3L842.9,1056z M817,1054.6l-0.8-1.3l-2.1,1.2 l0.8,1.3L817,1054.6z M820.8,1052.4l-0.8-1.3l-2.1,1.2l0.8,1.3L820.8,1052.4z M824.6,1050.2l-0.8-1.3l-2.1,1.2l0.8,1.3 L824.6,1050.2z M805.6,1061.2l-0.8-1.3l-2.1,1.2l0.8,1.3L805.6,1061.2z M809.4,1059l-0.8-1.3l-2.1,1.2l0.8,1.3L809.4,1059z M813.2,1056.8l-0.8-1.3l-2.1,1.2l0.8,1.3L813.2,1056.8z M794.2,1067.9l-0.8-1.3l-2.1,1.2l0.8,1.3L794.2,1067.9z M798,1065.7 l-0.8-1.3l-2.1,1.2l0.8,1.3L798,1065.7z M801.8,1063.5l-0.8-1.3l-2.1,1.2l0.8,1.3L801.8,1063.5z M782.8,1074.5l-0.8-1.3l-2.1,1.2 l0.8,1.3L782.8,1074.5z M786.6,1072.3l-0.8-1.3l-2.1,1.2l0.8,1.3L786.6,1072.3z M790.4,1070.1l-0.8-1.3l-2.1,1.2l0.8,1.3 L790.4,1070.1z M771.4,1081.1l-0.8-1.3l-2.1,1.2l0.8,1.3L771.4,1081.1z M775.2,1078.9l-0.8-1.3l-2.1,1.2l0.8,1.3L775.2,1078.9z M779,1076.7l-0.8-1.3l-2.1,1.2l0.8,1.3L779,1076.7z M760.1,1087.8l-0.8-1.3l-2.1,1.2l0.8,1.3L760.1,1087.8z M763.9,1085.5 l-0.8-1.3l-2.1,1.2l0.8,1.3L763.9,1085.5z M767.6,1083.3l-0.8-1.3l-2.1,1.2l0.8,1.3L767.6,1083.3z M765.2,1106.5l-0.8,1.3l2.1,1.3 l0.8-1.3L765.2,1106.5z M761.5,1104.2l-0.8,1.3l2.1,1.3l0.8-1.3L761.5,1104.2z M757.8,1102l-0.8,1.3l2.1,1.3l0.8-1.3L757.8,1102z M776.3,1113.3l-0.8,1.3l2.1,1.3l0.8-1.3L776.3,1113.3z M772.6,1111l-0.8,1.3l2.1,1.3l0.8-1.3L772.6,1111z M768.9,1108.8l-0.8,1.3 l2.1,1.3l0.8-1.3L768.9,1108.8z M787.3,1120.1l-0.8,1.3l2.1,1.3l0.8-1.3L787.3,1120.1z M783.7,1117.8l-0.8,1.3l2.1,1.3l0.8-1.3 L783.7,1117.8z M780,1115.5l-0.8,1.3l2.1,1.3l0.8-1.3L780,1115.5z M798.4,1126.9l-0.8,1.3l2.1,1.3l0.8-1.3L798.4,1126.9z M794.7,1124.6l-0.8,1.3l2.1,1.3l0.8-1.3L794.7,1124.6z M791.1,1122.3l-0.8,1.3l2.1,1.3l0.8-1.3L791.1,1122.3z M809.5,1133.7 l-0.8,1.3l2.1,1.3l0.8-1.3L809.5,1133.7z M805.8,1131.4l-0.8,1.3l2.1,1.3l0.8-1.3L805.8,1131.4z M802.1,1129.1l-0.8,1.3l2.1,1.3 l0.8-1.3L802.1,1129.1z M820.6,1140.4l-0.8,1.3l2.1,1.3l0.8-1.3L820.6,1140.4z M816.9,1138.2l-0.8,1.3l2.1,1.3l0.8-1.3 L816.9,1138.2z M813.2,1135.9l-0.8,1.3l2.1,1.3l0.8-1.3L813.2,1135.9z M905.5,1100.3l-0.8-1.3l-3.7,2.1l0.8,1.3L905.5,1100.3z M912,1096.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L912,1096.3 C912.1,1096.4,912.1,1096.4,912,1096.3z M902,1090.3l-0.8,1.3l3.6,2.2l0.8-1.3L902,1090.3z M831.3,1047.7l-0.8,1.3l1.3,0.8 l0.8-1.3L831.3,1047.7z M829,1046.4c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3 c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L829,1046.4 C829.1,1046.3,829,1046.3,829,1046.4z M825.5,1048.4l0.8,1.3l1.3-0.7l-0.8-1.3L825.5,1048.4z M751.4,1091.4l0.8,1.3l3.6-2.1 l-0.8-1.3L751.4,1091.4z M745,1095.3c0.1,0.1,0.2,0.1,0.4,0.2c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3 c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L745,1095.3 C744.9,1095.2,744.9,1095.3,745,1095.3z M754.8,1101.4l0.8-1.3l-3.6-2.2l-0.8,1.3L754.8,1101.4z M824.6,1144.3l0.8-1.3l-1.3-0.8 l-0.8,1.3L824.6,1144.3z M827,1145.6c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3 c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3l-0.8,1.3L827,1145.6 C826.9,1145.7,827,1145.7,827,1145.6z M830.5,1143.6l-0.8-1.3l-1.3,0.7l0.8,1.3L830.5,1143.6z" />
                                  <path fill="#202333" d="M1559.3,998.1l0.8,1.3l-2.1,1.2l-0.8-1.3L1559.3,998.1z M1553.3,1001.6l0.8,1.3l2.1-1.2l-0.8-1.3 L1553.3,1001.6z M1549.5,1003.8l0.8,1.3l2.1-1.2l-0.8-1.3L1549.5,1003.8z M1568.7,992.7l0.8,1.3l2.1-1.2l-0.8-1.3L1568.7,992.7z M1564.8,994.9l0.8,1.3l2.1-1.2l-0.8-1.3L1564.8,994.9z M1561,997.1l0.8,1.3l2.1-1.2l-0.8-1.3L1561,997.1z M1580.2,986l0.8,1.3 l2.1-1.2l-0.8-1.3L1580.2,986z M1576.3,988.2l0.8,1.3l2.1-1.2l-0.8-1.3L1576.3,988.2z M1572.5,990.4l0.8,1.3l2.1-1.2l-0.8-1.3 L1572.5,990.4z M1591.7,979.3l0.8,1.3l2.1-1.2l-0.8-1.3L1591.7,979.3z M1587.9,981.5l0.8,1.3l2.1-1.2l-0.8-1.3L1587.9,981.5z M1584,983.8l0.8,1.3l2.1-1.2l-0.8-1.3L1584,983.8z M1603.2,972.7l0.8,1.3l2.1-1.2l-0.8-1.3L1603.2,972.7z M1599.4,974.9l0.8,1.3 l2.1-1.2l-0.8-1.3L1599.4,974.9z M1595.6,977.1l0.8,1.3l2.1-1.2l-0.8-1.3L1595.6,977.1z M1614.7,966l0.8,1.3l2.1-1.2l-0.8-1.3 L1614.7,966z M1610.9,968.2l0.8,1.3l2.1-1.2l-0.8-1.3L1610.9,968.2z M1607.1,970.4l0.8,1.3l2.1-1.2l-0.8-1.3L1607.1,970.4z M1609.5,947.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1609.5,947.2z M1613.3,949.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1613.3,949.5z M1617,951.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L1617,951.7z M1598.3,940.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1598.3,940.5z M1602,942.7l0.8-1.3l-2.1-1.3 l-0.8,1.3L1602,942.7z M1605.8,945l0.8-1.3l-2.1-1.3l-0.8,1.3L1605.8,945z M1587.1,933.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1587.1,933.7z M1590.8,936l0.8-1.3l-2.1-1.3l-0.8,1.3L1590.8,936z M1594.6,938.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1594.6,938.2z M1575.9,927l0.8-1.3 l-2.1-1.3l-0.8,1.3L1575.9,927z M1579.6,929.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1579.6,929.2z M1583.3,931.5l0.8-1.3l-2.1-1.3l-0.8,1.3 L1583.3,931.5z M1564.7,920.2l0.8-1.3l-2.1-1.3l-0.8,1.3L1564.7,920.2z M1568.4,922.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1568.4,922.5z M1572.1,924.7l0.8-1.3l-2.1-1.3l-0.8,1.3L1572.1,924.7z M1553.4,913.5l0.8-1.3l-2.1-1.3l-0.8,1.3L1553.4,913.5z M1557.2,915.7 l0.8-1.3l-2.1-1.3l-0.8,1.3L1557.2,915.7z M1560.9,918l0.8-1.3l-2.1-1.3l-0.8,1.3L1560.9,918z M1535,916.6l-0.8-1.3l-2.1,1.2 l0.8,1.3L1535,916.6z M1538.8,914.4l-0.8-1.3l-2.1,1.2l0.8,1.3L1538.8,914.4z M1542.6,912.2l-0.8-1.3l-2.1,1.2l0.8,1.3 L1542.6,912.2z M1523.6,923.2l-0.8-1.3l-2.1,1.2l0.8,1.3L1523.6,923.2z M1527.4,921l-0.8-1.3l-2.1,1.2l0.8,1.3L1527.4,921z M1531.2,918.8l-0.8-1.3l-2.1,1.2l0.8,1.3L1531.2,918.8z M1512.2,929.9l-0.8-1.3l-2.1,1.2l0.8,1.3L1512.2,929.9z M1516,927.7 l-0.8-1.3l-2.1,1.2l0.8,1.3L1516,927.7z M1519.8,925.5l-0.8-1.3l-2.1,1.2l0.8,1.3L1519.8,925.5z M1500.8,936.5l-0.8-1.3l-2.1,1.2 l0.8,1.3L1500.8,936.5z M1504.6,934.3l-0.8-1.3l-2.1,1.2l0.8,1.3L1504.6,934.3z M1508.4,932.1l-0.8-1.3l-2.1,1.2l0.8,1.3 L1508.4,932.1z M1489.4,943.1l-0.8-1.3l-2.1,1.2l0.8,1.3L1489.4,943.1z M1493.2,940.9l-0.8-1.3l-2.1,1.2l0.8,1.3L1493.2,940.9z M1497,938.7l-0.8-1.3l-2.1,1.2l0.8,1.3L1497,938.7z M1478.1,949.8l-0.8-1.3l-2.1,1.2l0.8,1.3L1478.1,949.8z M1481.9,947.5 l-0.8-1.3l-2.1,1.2l0.8,1.3L1481.9,947.5z M1485.6,945.3l-0.8-1.3l-2.1,1.2l0.8,1.3L1485.6,945.3z M1483.2,968.5l-0.8,1.3l2.1,1.3 l0.8-1.3L1483.2,968.5z M1479.5,966.2l-0.8,1.3l2.1,1.3l0.8-1.3L1479.5,966.2z M1475.8,964l-0.8,1.3l2.1,1.3l0.8-1.3L1475.8,964z M1494.3,975.3l-0.8,1.3l2.1,1.3l0.8-1.3L1494.3,975.3z M1490.6,973l-0.8,1.3l2.1,1.3l0.8-1.3L1490.6,973z M1486.9,970.8l-0.8,1.3 l2.1,1.3l0.8-1.3L1486.9,970.8z M1505.3,982.1l-0.8,1.3l2.1,1.3l0.8-1.3L1505.3,982.1z M1501.7,979.8l-0.8,1.3l2.1,1.3l0.8-1.3 L1501.7,979.8z M1498,977.5l-0.8,1.3l2.1,1.3l0.8-1.3L1498,977.5z M1516.4,988.9l-0.8,1.3l2.1,1.3l0.8-1.3L1516.4,988.9z M1512.7,986.6l-0.8,1.3l2.1,1.3l0.8-1.3L1512.7,986.6z M1509.1,984.3l-0.8,1.3l2.1,1.3l0.8-1.3L1509.1,984.3z M1527.5,995.7 l-0.8,1.3l2.1,1.3l0.8-1.3L1527.5,995.7z M1523.8,993.4l-0.8,1.3l2.1,1.3l0.8-1.3L1523.8,993.4z M1520.1,991.1l-0.8,1.3l2.1,1.3 l0.8-1.3L1520.1,991.1z M1538.6,1002.4l-0.8,1.3l2.1,1.3l0.8-1.3L1538.6,1002.4z M1534.9,1000.2l-0.8,1.3l2.1,1.3l0.8-1.3 L1534.9,1000.2z M1531.2,997.9l-0.8,1.3l2.1,1.3l0.8-1.3L1531.2,997.9z M1623.5,962.3l-0.8-1.3l-3.7,2.1l0.8,1.3L1623.5,962.3z M1630,958.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L1630,958.3 C1630.1,958.4,1630.1,958.4,1630,958.3z M1620,952.3l-0.8,1.3l3.6,2.2l0.8-1.3L1620,952.3z M1549.3,909.7l-0.8,1.3l1.3,0.8 l0.8-1.3L1549.3,909.7z M1547,908.4c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3 c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L1547,908.4 C1547.1,908.3,1547,908.3,1547,908.4z M1543.5,910.4l0.8,1.3l1.3-0.7l-0.8-1.3L1543.5,910.4z M1469.4,953.4l0.8,1.3l3.6-2.1 l-0.8-1.3L1469.4,953.4z M1463,957.3c0.1,0.1,0.2,0.1,0.4,0.2c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3 c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L1463,957.3 C1462.9,957.2,1462.9,957.3,1463,957.3z M1472.8,963.4l0.8-1.3l-3.6-2.2l-0.8,1.3L1472.8,963.4z M1542.6,1006.3l0.8-1.3l-1.3-0.8 l-0.8,1.3L1542.6,1006.3z M1545,1007.6c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3 c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3l-0.8,1.3L1545,1007.6 C1544.9,1007.7,1545,1007.7,1545,1007.6z M1548.5,1005.6l-0.8-1.3l-1.3,0.7l0.8,1.3L1548.5,1005.6z" />
                                  <polygon fill="#202333" points="1720,386.3 1801,436 1885,387.3 1803,338 " />
                                  <polygon fill="#202333" points="261,599.3 342,649 426,600.3 344,551 " />
                                  <polygon fill="#202333" points="140,530.3 221,580 305,531.3 223,482 " />
                                  <polygon fill="#202333" points="21,597.3 102,647 186,598.3 104,549 " />
                                  <path fill="#202333" d="M356.3,499.1l0.8,1.3l-2.1,1.2l-0.8-1.3L356.3,499.1z M350.3,502.6l0.8,1.3l2.1-1.2l-0.8-1.3L350.3,502.6z M346.5,504.8l0.8,1.3l2.1-1.2l-0.8-1.3L346.5,504.8z M365.7,493.7l0.8,1.3l2.1-1.2l-0.8-1.3L365.7,493.7z M361.8,495.9l0.8,1.3 l2.1-1.2l-0.8-1.3L361.8,495.9z M358,498.1l0.8,1.3l2.1-1.2l-0.8-1.3L358,498.1z M377.2,487l0.8,1.3l2.1-1.2l-0.8-1.3L377.2,487z M373.3,489.2l0.8,1.3l2.1-1.2l-0.8-1.3L373.3,489.2z M369.5,491.4l0.8,1.3l2.1-1.2l-0.8-1.3L369.5,491.4z M388.7,480.3l0.8,1.3 l2.1-1.2l-0.8-1.3L388.7,480.3z M384.9,482.5l0.8,1.3l2.1-1.2l-0.8-1.3L384.9,482.5z M381,484.8l0.8,1.3l2.1-1.2l-0.8-1.3 L381,484.8z M400.2,473.6l0.8,1.3l2.1-1.2l-0.8-1.3L400.2,473.6z M396.4,475.9l0.8,1.3l2.1-1.2l-0.8-1.3L396.4,475.9z M392.6,478.1l0.8,1.3l2.1-1.2l-0.8-1.3L392.6,478.1z M411.8,467l0.8,1.3l2.1-1.2l-0.8-1.3L411.8,467z M407.9,469.2l0.8,1.3 l2.1-1.2l-0.8-1.3L407.9,469.2z M404.1,471.4l0.8,1.3l2.1-1.2l-0.8-1.3L404.1,471.4z M406.5,448.2l0.8-1.3l-2.1-1.3l-0.8,1.3 L406.5,448.2z M410.3,450.5l0.8-1.3L409,448l-0.8,1.3L410.3,450.5z M414,452.7l0.8-1.3l-2.1-1.3l-0.8,1.3L414,452.7z M395.3,441.5 l0.8-1.3L394,439l-0.8,1.3L395.3,441.5z M399.1,443.7l0.8-1.3l-2.1-1.3l-0.8,1.3L399.1,443.7z M402.8,446l0.8-1.3l-2.1-1.3 l-0.8,1.3L402.8,446z M384.1,434.7l0.8-1.3l-2.1-1.3l-0.8,1.3L384.1,434.7z M387.8,437l0.8-1.3l-2.1-1.3l-0.8,1.3L387.8,437z M391.6,439.2l0.8-1.3l-2.1-1.3l-0.8,1.3L391.6,439.2z M372.9,428l0.8-1.3l-2.1-1.3l-0.8,1.3L372.9,428z M376.6,430.2l0.8-1.3 l-2.1-1.3l-0.8,1.3L376.6,430.2z M380.3,432.5l0.8-1.3l-2.1-1.3l-0.8,1.3L380.3,432.5z M361.7,421.2l0.8-1.3l-2.1-1.3l-0.8,1.3 L361.7,421.2z M365.4,423.5l0.8-1.3l-2.1-1.3l-0.8,1.3L365.4,423.5z M369.1,425.7l0.8-1.3l-2.1-1.3l-0.8,1.3L369.1,425.7z M350.4,414.5l0.8-1.3l-2.1-1.3l-0.8,1.3L350.4,414.5z M354.2,416.7l0.8-1.3l-2.1-1.3l-0.8,1.3L354.2,416.7z M357.9,419l0.8-1.3 l-2.1-1.3l-0.8,1.3L357.9,419z M332,417.6l-0.8-1.3l-2.1,1.2l0.8,1.3L332,417.6z M335.8,415.4l-0.8-1.3l-2.1,1.2l0.8,1.3 L335.8,415.4z M339.6,413.2l-0.8-1.3l-2.1,1.2l0.8,1.3L339.6,413.2z M320.6,424.2l-0.8-1.3l-2.1,1.2l0.8,1.3L320.6,424.2z M324.4,422l-0.8-1.3l-2.1,1.2l0.8,1.3L324.4,422z M328.2,419.8l-0.8-1.3l-2.1,1.2l0.8,1.3L328.2,419.8z M309.2,430.9l-0.8-1.3 l-2.1,1.2l0.8,1.3L309.2,430.9z M313,428.7l-0.8-1.3l-2.1,1.2l0.8,1.3L313,428.7z M316.8,426.5l-0.8-1.3l-2.1,1.2l0.8,1.3 L316.8,426.5z M297.8,437.5l-0.8-1.3l-2.1,1.2l0.8,1.3L297.8,437.5z M301.6,435.3l-0.8-1.3l-2.1,1.2l0.8,1.3L301.6,435.3z M305.4,433.1l-0.8-1.3l-2.1,1.2l0.8,1.3L305.4,433.1z M286.5,444.1l-0.8-1.3l-2.1,1.2l0.8,1.3L286.5,444.1z M290.2,441.9 l-0.8-1.3l-2.1,1.2l0.8,1.3L290.2,441.9z M294,439.7l-0.8-1.3l-2.1,1.2l0.8,1.3L294,439.7z M275.1,450.8l-0.8-1.3l-2.1,1.2 l0.8,1.3L275.1,450.8z M278.9,448.5l-0.8-1.3l-2.1,1.2l0.8,1.3L278.9,448.5z M282.6,446.3l-0.8-1.3l-2.1,1.2l0.8,1.3L282.6,446.3z M280.2,469.5l-0.8,1.3l2.1,1.3l0.8-1.3L280.2,469.5z M276.5,467.2l-0.8,1.3l2.1,1.3l0.8-1.3L276.5,467.2z M272.8,465l-0.8,1.3 l2.1,1.3l0.8-1.3L272.8,465z M291.3,476.3l-0.8,1.3l2.1,1.3l0.8-1.3L291.3,476.3z M287.6,474l-0.8,1.3l2.1,1.3l0.8-1.3L287.6,474z M283.9,471.8l-0.8,1.3l2.1,1.3l0.8-1.3L283.9,471.8z M302.3,483.1l-0.8,1.3l2.1,1.3l0.8-1.3L302.3,483.1z M298.7,480.8l-0.8,1.3 l2.1,1.3l0.8-1.3L298.7,480.8z M295,478.5l-0.8,1.3l2.1,1.3l0.8-1.3L295,478.5z M313.4,489.9l-0.8,1.3l2.1,1.3l0.8-1.3 L313.4,489.9z M309.7,487.6l-0.8,1.3l2.1,1.3l0.8-1.3L309.7,487.6z M306.1,485.3l-0.8,1.3l2.1,1.3l0.8-1.3L306.1,485.3z M324.5,496.7l-0.8,1.3l2.1,1.3l0.8-1.3L324.5,496.7z M320.8,494.4l-0.8,1.3l2.1,1.3l0.8-1.3L320.8,494.4z M317.1,492.1l-0.8,1.3 l2.1,1.3l0.8-1.3L317.1,492.1z M335.6,503.4l-0.8,1.3l2.1,1.3l0.8-1.3L335.6,503.4z M331.9,501.2l-0.8,1.3l2.1,1.3l0.8-1.3 L331.9,501.2z M328.2,498.9l-0.8,1.3l2.1,1.3l0.8-1.3L328.2,498.9z M420.5,463.3l-0.8-1.3l-3.7,2.1l0.8,1.3L420.5,463.3z M427,459.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L427,459.3C427.1,459.4,427.1,459.4,427,459.3 z M417,453.3l-0.8,1.3l3.6,2.2l0.8-1.3L417,453.3z M346.3,410.7l-0.8,1.3l1.3,0.8l0.8-1.3L346.3,410.7z M344,409.4 c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0 l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L344,409.4C344.1,409.3,344,409.3,344,409.4z M340.5,411.4l0.8,1.3l1.3-0.7 l-0.8-1.3L340.5,411.4z M266.4,454.4l0.8,1.3l3.6-2.1l-0.8-1.3L266.4,454.4z M260,458.3c0.1,0.1,0.2,0.1,0.4,0.2 c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0 c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L260,458.3C259.9,458.2,259.9,458.3,260,458.3z M269.8,464.4l0.8-1.3l-3.6-2.2l-0.8,1.3 L269.8,464.4z M339.6,507.3l0.8-1.3l-1.3-0.8l-0.8,1.3L339.6,507.3z M342,508.6c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3 c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3 l-0.8,1.3L342,508.6C341.9,508.7,342,508.7,342,508.6z M345.5,506.6l-0.8-1.3l-1.3,0.7l0.8,1.3L345.5,506.6z" />
                                  <path fill="#202333" d="M235.3,714.1l0.8,1.3l-2.1,1.2l-0.8-1.3L235.3,714.1z M229.3,717.6l0.8,1.3l2.1-1.2l-0.8-1.3L229.3,717.6z M225.5,719.8l0.8,1.3l2.1-1.2l-0.8-1.3L225.5,719.8z M244.7,708.7l0.8,1.3l2.1-1.2l-0.8-1.3L244.7,708.7z M240.8,710.9l0.8,1.3 l2.1-1.2l-0.8-1.3L240.8,710.9z M237,713.1l0.8,1.3l2.1-1.2l-0.8-1.3L237,713.1z M256.2,702l0.8,1.3l2.1-1.2l-0.8-1.3L256.2,702z M252.3,704.2l0.8,1.3l2.1-1.2l-0.8-1.3L252.3,704.2z M248.5,706.4l0.8,1.3l2.1-1.2l-0.8-1.3L248.5,706.4z M267.7,695.3l0.8,1.3 l2.1-1.2l-0.8-1.3L267.7,695.3z M263.9,697.5l0.8,1.3l2.1-1.2l-0.8-1.3L263.9,697.5z M260,699.8l0.8,1.3l2.1-1.2l-0.8-1.3 L260,699.8z M279.2,688.7l0.8,1.3l2.1-1.2l-0.8-1.3L279.2,688.7z M275.4,690.9l0.8,1.3l2.1-1.2l-0.8-1.3L275.4,690.9z M271.6,693.1l0.8,1.3l2.1-1.2l-0.8-1.3L271.6,693.1z M290.8,682l0.8,1.3l2.1-1.2l-0.8-1.3L290.8,682z M286.9,684.2l0.8,1.3 l2.1-1.2l-0.8-1.3L286.9,684.2z M283.1,686.4l0.8,1.3l2.1-1.2l-0.8-1.3L283.1,686.4z M285.5,663.2l0.8-1.3l-2.1-1.3l-0.8,1.3 L285.5,663.2z M289.3,665.5l0.8-1.3L288,663l-0.8,1.3L289.3,665.5z M293,667.7l0.8-1.3l-2.1-1.3l-0.8,1.3L293,667.7z M274.3,656.5 l0.8-1.3L273,654l-0.8,1.3L274.3,656.5z M278.1,658.7l0.8-1.3l-2.1-1.3l-0.8,1.3L278.1,658.7z M281.8,661l0.8-1.3l-2.1-1.3 l-0.8,1.3L281.8,661z M263.1,649.7l0.8-1.3l-2.1-1.3l-0.8,1.3L263.1,649.7z M266.8,652l0.8-1.3l-2.1-1.3l-0.8,1.3L266.8,652z M270.6,654.2l0.8-1.3l-2.1-1.3l-0.8,1.3L270.6,654.2z M251.9,643l0.8-1.3l-2.1-1.3l-0.8,1.3L251.9,643z M255.6,645.2l0.8-1.3 l-2.1-1.3l-0.8,1.3L255.6,645.2z M259.3,647.5l0.8-1.3l-2.1-1.3l-0.8,1.3L259.3,647.5z M240.7,636.2l0.8-1.3l-2.1-1.3l-0.8,1.3 L240.7,636.2z M244.4,638.5l0.8-1.3l-2.1-1.3l-0.8,1.3L244.4,638.5z M248.1,640.7l0.8-1.3l-2.1-1.3l-0.8,1.3L248.1,640.7z M229.4,629.5l0.8-1.3l-2.1-1.3l-0.8,1.3L229.4,629.5z M233.2,631.7l0.8-1.3l-2.1-1.3l-0.8,1.3L233.2,631.7z M236.9,634l0.8-1.3 l-2.1-1.3l-0.8,1.3L236.9,634z M211,632.6l-0.8-1.3l-2.1,1.2l0.8,1.3L211,632.6z M214.8,630.4l-0.8-1.3l-2.1,1.2l0.8,1.3 L214.8,630.4z M218.6,628.2l-0.8-1.3l-2.1,1.2l0.8,1.3L218.6,628.2z M199.6,639.2l-0.8-1.3l-2.1,1.2l0.8,1.3L199.6,639.2z M203.4,637l-0.8-1.3l-2.1,1.2l0.8,1.3L203.4,637z M207.2,634.8l-0.8-1.3l-2.1,1.2l0.8,1.3L207.2,634.8z M188.2,645.9l-0.8-1.3 l-2.1,1.2l0.8,1.3L188.2,645.9z M192,643.7l-0.8-1.3l-2.1,1.2l0.8,1.3L192,643.7z M195.8,641.5l-0.8-1.3l-2.1,1.2l0.8,1.3 L195.8,641.5z M176.8,652.5l-0.8-1.3l-2.1,1.2l0.8,1.3L176.8,652.5z M180.6,650.3l-0.8-1.3l-2.1,1.2l0.8,1.3L180.6,650.3z M184.4,648.1l-0.8-1.3l-2.1,1.2l0.8,1.3L184.4,648.1z M165.5,659.1l-0.8-1.3l-2.1,1.2l0.8,1.3L165.5,659.1z M169.2,656.9 l-0.8-1.3l-2.1,1.2l0.8,1.3L169.2,656.9z M173,654.7l-0.8-1.3l-2.1,1.2l0.8,1.3L173,654.7z M154.1,665.8l-0.8-1.3l-2.1,1.2 l0.8,1.3L154.1,665.8z M157.9,663.5l-0.8-1.3l-2.1,1.2l0.8,1.3L157.9,663.5z M161.6,661.3l-0.8-1.3l-2.1,1.2l0.8,1.3L161.6,661.3z M159.2,684.5l-0.8,1.3l2.1,1.3l0.8-1.3L159.2,684.5z M155.5,682.2l-0.8,1.3l2.1,1.3l0.8-1.3L155.5,682.2z M151.8,680l-0.8,1.3 l2.1,1.3l0.8-1.3L151.8,680z M170.3,691.3l-0.8,1.3l2.1,1.3l0.8-1.3L170.3,691.3z M166.6,689l-0.8,1.3l2.1,1.3l0.8-1.3L166.6,689z M162.9,686.8l-0.8,1.3l2.1,1.3l0.8-1.3L162.9,686.8z M181.3,698.1l-0.8,1.3l2.1,1.3l0.8-1.3L181.3,698.1z M177.7,695.8l-0.8,1.3 l2.1,1.3l0.8-1.3L177.7,695.8z M174,693.5l-0.8,1.3l2.1,1.3l0.8-1.3L174,693.5z M192.4,704.9l-0.8,1.3l2.1,1.3l0.8-1.3 L192.4,704.9z M188.7,702.6l-0.8,1.3l2.1,1.3l0.8-1.3L188.7,702.6z M185.1,700.3l-0.8,1.3l2.1,1.3l0.8-1.3L185.1,700.3z M203.5,711.7l-0.8,1.3l2.1,1.3l0.8-1.3L203.5,711.7z M199.8,709.4l-0.8,1.3l2.1,1.3l0.8-1.3L199.8,709.4z M196.1,707.1l-0.8,1.3 l2.1,1.3l0.8-1.3L196.1,707.1z M214.6,718.4l-0.8,1.3l2.1,1.3l0.8-1.3L214.6,718.4z M210.9,716.2l-0.8,1.3l2.1,1.3l0.8-1.3 L210.9,716.2z M207.2,713.9l-0.8,1.3l2.1,1.3l0.8-1.3L207.2,713.9z M299.5,678.3l-0.8-1.3l-3.7,2.1l0.8,1.3L299.5,678.3z M306,674.3c-0.1-0.1-0.2-0.1-0.4-0.2c-0.3-0.2-0.8-0.5-1.2-0.8c-0.9-0.5-1.8-1.1-1.8-1.1l-0.8,1.3c0,0,0.4,0.2,0.7,0.4 c0.2,0.1,0.4,0.2,0.5,0.3l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-1.5,0.8l0.8,1.3L306,674.3C306.1,674.4,306.1,674.4,306,674.3 z M296,668.3l-0.8,1.3l3.6,2.2l0.8-1.3L296,668.3z M225.3,625.7l-0.8,1.3l1.3,0.8l0.8-1.3L225.3,625.7z M223,624.4 c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.6,0.4-0.6,0.4l0.8,1.3c0,0,0.1-0.1,0.3-0.1c0.1,0,0.1-0.1,0.2-0.1l0,0 l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.5,0.3l0.8-1.3L223,624.4C223.1,624.3,223,624.3,223,624.4z M219.5,626.4l0.8,1.3l1.3-0.7 l-0.8-1.3L219.5,626.4z M145.4,669.4l0.8,1.3l3.6-2.1l-0.8-1.3L145.4,669.4z M139,673.3c0.1,0.1,0.2,0.1,0.4,0.2 c0.3,0.2,0.8,0.5,1.2,0.8c0.9,0.5,1.8,1.1,1.8,1.1l0.8-1.3c0,0-0.4-0.2-0.7-0.4c-0.2-0.1-0.4-0.2-0.5-0.3l0,0l0,0l0,0l0,0 c0,0,0,0,0,0c0,0,0,0,0,0l1.4-0.8l-0.8-1.3L139,673.3C138.9,673.2,138.9,673.3,139,673.3z M148.8,679.4l0.8-1.3l-3.6-2.2l-0.8,1.3 L148.8,679.4z M218.6,722.3l0.8-1.3l-1.3-0.8l-0.8,1.3L218.6,722.3z M221,723.6c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.4-0.3 c0.3-0.2,0.6-0.4,0.6-0.4l-0.8-1.3c0,0-0.1,0.1-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.5-0.3 l-0.8,1.3L221,723.6C220.9,723.7,221,723.7,221,723.6z M224.5,721.6l-0.8-1.3l-1.3,0.7l0.8,1.3L224.5,721.6z" />
                                  <polygon fill="#202333" points="134,382.3 215,432 299,383.3 217,334 " />
                                  <polygon fill="#202333" points="390,530.3 471,580 555,531.3 473,482 " />
                                  <polygon fill="#202333" points="390,386.3 471,436 555,387.3 473,338 " />
                                </g>
                                <g id="d-appswrapper">
                                  <g id="d-app">
                                    <g>
                                      <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="596.2948" y1="1492.3506" x2="531.7549" y2="1455.0885" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#808080" />
                                        <stop offset="0.2627" style="stop-color:#6F6F6F" />
                                        <stop offset="0.7192" style="stop-color:#575757" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_7_)" d="M612.3,427.9c-0.1-0.8-3.3,0.2-3.3,0.2v1.3l0.1-0.1l-48.9-28c0,0-4.5-3.1-10.6,0.6l-48.8,28 c0,0-0.7,0.1-0.7,0.3V429c0,0-2.7-1-2.8-0.2c-0.4,2.3-0.1,1.9,0,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5c0,0,7.1,3.9,14.6,0 L610,435c0,0,2.3-1.4,2.5-3.4C612.8,430,612.7,430.1,612.3,427.9z" />
                                      <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="536.1459" y1="1498.0173" x2="577.0236" y2="1439.6381" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#9A9A9A" />
                                        <stop offset="0.3122" style="stop-color:#9F9F9F" />
                                        <stop offset="0.7197" style="stop-color:#B0B0B0" />
                                        <stop offset="1" style="stop-color:#BFBFBF" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_8_)" d="M500.4,432.8l47.4,27.5c0,0,7.1,3.9,14.6,0L610,432c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C501,425.2,493.2,429,500.4,432.8z" />
                                    </g>
                                    <g>
                                      <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="596.3016" y1="1506.1545" x2="524.3275" y2="1464.6003" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#A61D30" />
                                        <stop offset="0.2302" style="stop-color:#AA2033" />
                                        <stop offset="0.4367" style="stop-color:#B4293A" />
                                        <stop offset="0.634" style="stop-color:#C73848" />
                                        <stop offset="0.8245" style="stop-color:#E04D5A" />
                                        <stop offset="1" style="stop-color:#FF6670" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_9_)" d="M612.3,414.1c-0.1-0.8-3.3,0.2-3.3,0.2v1.3l0.1-0.1l-48.9-28c0,0-4.5-3.1-10.6,0.6l-48.8,28 c0,0-0.7,0.1-0.7,0.3v-1.2c0,0-2.7-1-2.8-0.2c-0.4,2.3-0.1,1.9,0,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5c0,0,7.1,3.9,14.6,0 l47.6-28.3c0,0,2.3-1.4,2.5-3.4C612.8,416.2,612.7,416.3,612.3,414.1z" />
                                      <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="536.1385" y1="1511.8278" x2="577.0161" y2="1453.4487" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#E6455C" />
                                        <stop offset="1" style="stop-color:#FF3D49" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_10_)" d="M500.4,419l47.4,27.5c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C501,411.4,493.2,415.2,500.4,419z" />
                                    </g>
                                    <g>
                                      <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="596.2872" y1="1531.3463" x2="531.7474" y2="1494.0841" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#808080" />
                                        <stop offset="0.2627" style="stop-color:#6F6F6F" />
                                        <stop offset="0.7192" style="stop-color:#575757" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_11_)" d="M612.3,388.9c-0.1-0.8-3.3,0.2-3.3,0.2v1.3l0.1-0.1l-48.9-28c0,0-4.5-3.1-10.6,0.6l-48.8,28 c0,0-0.7,0.1-0.7,0.3V390c0,0-2.7-1-2.8-0.2c-0.4,2.3-0.1,1.9,0,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5c0,0,7.1,3.9,14.6,0 l47.6-28.3c0,0,2.3-1.4,2.5-3.4C612.8,391.1,612.7,391.1,612.3,388.9z" />
                                      <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="536.1522" y1="1537.0045" x2="577.0297" y2="1478.6252" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#9A9A9A" />
                                        <stop offset="0.3122" style="stop-color:#9F9F9F" />
                                        <stop offset="0.7197" style="stop-color:#B0B0B0" />
                                        <stop offset="1" style="stop-color:#BFBFBF" />
                                      </linearGradient>
                                      <path fill="url(#SVGID_12_)" d="M500.4,393.8l47.4,27.5c0,0,7.1,3.9,14.6,0L610,393c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C501,386.3,493.2,390,500.4,393.8z" />
                                      <g>
                                        <path fill="#FFFFFF" d="M551,388.2c-0.3-0.8-0.5-1.6-0.8-2.3c-0.1-0.2-0.4-0.4-0.6-0.6c-0.4-0.4-1.1-0.7-1.2-1.2 c-0.8-1.9-1.5-3.8-2.1-5.7c-0.4-1.3,1.1-2.7,3.4-3.2c2.2-0.4,4.4,0.2,4.9,1.5c0.7,1.9,1.4,3.7,2,5.6c0.1,0.4,0.1,0.8-0.1,1.2 c-0.4,0.5-0.3,1-0.1,1.5c0.2,0.4,0.3,0.8,0.5,1.2c0.1,0.2,0.1,0.4,0.2,0.6c2.5-1.1,4.1-3.3,3.6-4.9c-0.7-2-1.4-4.1-2.1-6.1 c-0.1-0.3-0.2-0.5-0.4-0.7c-1.4-2-5.4-3-9.1-2.3c-4,0.8-6.9,3-6.8,5.4c0,0.7,0.3,1.5,0.6,2.2c0.6,1.6,1,3.3,1.9,4.9 C545.5,387.2,547.8,388,551,388.2z" />
                                        <path fill="#FFFFFF" d="M565.2,394.4c-0.4-1-1.3-1.8-2.7-2.3c-1.1-0.5-2.4-0.7-3.9-0.8c0.3,0.9,0.6,1.7,0.9,2.6 c0,0.1,0.2,0.2,0.3,0.2c0.9,0.3,1.3,0.9,1.5,1.5c0.6,1.7,1.3,3.4,1.8,5.1c0.1,0.4,0.2,0.9,0,1.4c-0.4,1.2-2.2,2.1-4.2,2.2 s-3.6-0.5-4-1.6c-0.6-1.7-1.3-3.4-1.9-5.1c-0.2-0.5-0.3-1.1,0-1.6c0.3-0.7,0.5-1.2,0.2-1.8c-0.1-0.2,0-0.5-0.1-0.7 c-0.1-0.3-0.2-0.6-0.3-0.9c-2.9,1.5-4.3,3.1-3.8,5c0.5,2,1.2,3.9,1.9,5.9c0.8,2.1,3.4,3.4,7,3.4c5.3,0,10.1-3.2,9.3-6.2 C566.8,398.5,565.9,396.4,565.2,394.4z" />
                                        <path fill="#FFFFFF" d="M555.3,383.1c-0.3-0.8-1.6-1.1-2.8-0.8c-1.2,0.2-2,1-1.7,1.7c0.7,1.9,3.6,10.3,4.4,12.2 c0.1,0.3,0.4,0.6,0.7,0.8c0.7,0.3,2,0.1,2.7-0.2c0.7-0.3,1.3-0.9,1.1-1.5C558.7,392.6,555.7,384.3,555.3,383.1z" />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="554.679" y1="1464.3314" x2="554.679" y2="1574.4468" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                      <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                      <stop offset="0.291" style="stop-color:#FFF" />
                                      <stop offset="0.9975" style="stop-color:#FFF;stop-opacity:0" />
                                    </linearGradient>
                                    <path opacity="0.25" fill="url(#SVGID_13_)" enable-background="new " d="M612.2,401.4l-0.4-91.4H497.1l0.5,91.2 c0,3.4,0.3,5,3.6,6.7l46.4,27.5c0,0,7.1,4,14.6,0.1l47.6-28.6C609.8,406.9,612.7,405.4,612.2,401.4z" />
                                    <g>
                                      <circle fill="#FF8088" cx="553.5" cy="364.8" r="1.5" />
                                      <circle fill="#FF8088" cx="518.5" cy="307.8" r="0.5" />
                                      <circle fill="#FFFFFF" cx="600.2" cy="379.4" r="0.7" />
                                      <circle fill="#E64852" cx="581.8" cy="310.5" r="0.7" />
                                      <circle fill="#FFFFFF" cx="564.5" cy="353.8" r="0.7" />
                                      <circle fill="#FFFFFF" cx="602.9" cy="394.5" r="0.7" />
                                      <circle fill="#FFFFFF" cx="596.7" cy="336.1" r="0.7" />
                                      <circle fill="#FF8088" cx="576.7" cy="339.6" r="0.7" />
                                      <circle fill="#FFFFFF" cx="573.3" cy="388.6" r="0.7" />
                                      <circle fill="#FFFFFF" cx="509.4" cy="371" r="0.7" />
                                      <circle fill="#FFFFFF" cx="532.5" cy="363.8" r="0.7" />
                                      <circle fill="#E64852" cx="604.2" cy="357.9" r="1.4" />
                                      <circle fill="#FFFFFF" cx="521.8" cy="341" r="0.7" />
                                      <circle fill="#E64852" cx="506.9" cy="322" r="0.7" />
                                      <circle fill="#E64852" cx="513" cy="361.5" r="0.7" />
                                      <circle fill="#E64852" cx="554.8" cy="313.4" r="1" />
                                      <circle fill="#E64852" cx="539.3" cy="341.7" r="1.4" />
                                      <circle fill="#FFFFFF" cx="508.1" cy="391.9" r="1.4" />
                                      <circle fill="#FFFFFF" cx="590.4" cy="371" r="1.4" />
                                    </g>
                                  </g>
                                  <g>
                                    <polygon fill="#D6D6D6" points="584.8,438.5 586.1,436.4 581.3,433.3 579.3,434.8 " />
                                    <rect x="588.9" y="437.6" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -98.7603 700.7441)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="596" y="442.2" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -99.3019 708.8547)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="603.2" y="446.7" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -99.7879 716.9974)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="610.2" y="451.2" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -100.3234 725.0131)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="617.4" y="455.9" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -100.9509 733.1625)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="624.6" y="460.3" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -101.3505 741.2676)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="631.7" y="464.9" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -101.9773 749.4169)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="638.8" y="469.5" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -102.5184 757.5275)" fill="#D6D6D6" width="2.4" height="5.7" />
                                  </g>
                                </g>
                                <g id="d-apps2wrapper">
                                  <g>
                                    <rect x="1148" y="790.3" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -137.7791 1334.7788)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1155.1" y="794.9" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -138.405 1342.9287)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1162.2" y="799.5" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -138.9467 1351.0399)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1169.3" y="804.1" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -139.5742 1359.1882)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1126.4" y="776.7" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -136.3217 1310.3108)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1133.5" y="781.4" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -136.9473 1318.4607)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1140.6" y="785.9" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -137.4887 1326.5713)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1176.4" y="808.5" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -139.9677 1367.1974)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1183.6" y="813.1" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -140.5943 1375.3479)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1190.7" y="817.7" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -141.1363 1383.4574)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1197.9" y="822.2" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -141.6216 1391.6019)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1204.9" y="826.7" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -142.1568 1399.6168)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1212.6" y="831.3" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -142.5549 1408.2074)" fill="#D6D6D6" width="2.4" height="5.7" />
                                    <rect x="1219.7" y="835.9" transform="matrix(0.5382 -0.8428 0.8428 0.5382 -143.0962 1416.3175)" fill="#D6D6D6" width="2.4" height="5.7" />
                                  </g>
                                  <g id="d-apps2">
                                    <g>
                                      <linearGradient id="d_SVGID_14_" gradientUnits="userSpaceOnUse" x1="1292.1067" y1="1031.5428" x2="1227.5238" y2="994.2559" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#808080" />
                                        <stop offset="0.2627" style="stop-color:#6F6F6F" />
                                        <stop offset="0.7192" style="stop-color:#575757" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_14_)" d="M1308.2,888.8c-0.1-0.8-3.2,0.2-3.2,0.2v1.3c0,0,0-0.1-0.1-0.1l-49-28c0,0-4.5-3.1-10.7,0.6 l-48.7,28c0,0-0.6,0.1-0.6,0.3v-1.2c0,0-2.8-1-2.9-0.2c-0.4,2.3-0.2,1.9-0.1,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5 c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,2.4-1.4,2.5-3.4C1308.6,890.9,1308.6,891,1308.2,888.8z" />
                                      <linearGradient id="d_SVGID_15_" gradientUnits="userSpaceOnUse" x1="1231.855" y1="1037.1101" x2="1272.7325" y2="978.7307" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#9A9A9A" />
                                        <stop offset="0.3122" style="stop-color:#9F9F9F" />
                                        <stop offset="0.7197" style="stop-color:#B0B0B0" />
                                        <stop offset="1" style="stop-color:#BFBFBF" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_15_)" d="M1196.1,893.7l47.4,27.5c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C1196.8,886.1,1188.9,889.9,1196.1,893.7z" />
                                    </g>
                                    <g>
                                      <linearGradient id="d_SVGID_16_" gradientUnits="userSpaceOnUse" x1="1292.1136" y1="1045.3467" x2="1220.0916" y2="1003.7648" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#A61D30" />
                                        <stop offset="0.2302" style="stop-color:#AA2033" />
                                        <stop offset="0.4367" style="stop-color:#B4293A" />
                                        <stop offset="0.634" style="stop-color:#C73848" />
                                        <stop offset="0.8245" style="stop-color:#E04D5A" />
                                        <stop offset="1" style="stop-color:#FF6670" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_16_)" d="M1308.2,875c-0.1-0.8-3.2,0.2-3.2,0.2v1.3c0,0,0-0.1-0.1-0.1l-49-28c0,0-4.5-3.1-10.7,0.6 l-48.7,28c0,0-0.6,0.1-0.6,0.3v-1.2c0,0-2.8-1-2.9-0.2c-0.4,2.3-0.2,1.9-0.1,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5 c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,2.4-1.4,2.5-3.4C1308.6,877.1,1308.6,877.2,1308.2,875z" />
                                      <linearGradient id="d_SVGID_17_" gradientUnits="userSpaceOnUse" x1="1231.8475" y1="1050.9205" x2="1272.7251" y2="992.5413" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#E6455C" />
                                        <stop offset="1" style="stop-color:#FF3D49" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_17_)" d="M1196.1,879.9l47.4,27.5c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C1196.8,872.3,1188.9,876.1,1196.1,879.9z" />
                                    </g>
                                    <g>
                                      <linearGradient id="d_SVGID_18_" gradientUnits="userSpaceOnUse" x1="1292.0992" y1="1070.5387" x2="1227.5164" y2="1033.2516" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#808080" />
                                        <stop offset="0.2627" style="stop-color:#6F6F6F" />
                                        <stop offset="0.7192" style="stop-color:#575757" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_18_)" d="M1308.2,849.8c-0.1-0.8-3.2,0.2-3.2,0.2v1.3c0,0,0-0.1-0.1-0.1l-49-28c0,0-4.5-3.1-10.7,0.6 l-48.7,28c0,0-0.6,0.1-0.6,0.3v-1.2c0,0-2.8-1-2.9-0.2c-0.4,2.3-0.2,1.9-0.1,3.5c0,1.1,0.8,2.3,3.1,3.5l47.5,27.5 c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,2.4-1.4,2.5-3.4C1308.6,852,1308.6,852,1308.2,849.8z" />
                                      <linearGradient id="d_SVGID_19_" gradientUnits="userSpaceOnUse" x1="1231.8612" y1="1076.097" x2="1272.7388" y2="1017.718" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                        <stop offset="0" style="stop-color:#9A9A9A" />
                                        <stop offset="0.3122" style="stop-color:#9F9F9F" />
                                        <stop offset="0.7197" style="stop-color:#B0B0B0" />
                                        <stop offset="1" style="stop-color:#BFBFBF" />
                                      </linearGradient>
                                      <path fill="url(#d_SVGID_19_)" d="M1196.1,854.7l47.4,27.5c0,0,7.1,3.9,14.6,0l47.6-28.3c0,0,6.3-3.6-0.8-7.4l-49-28 c0,0-4.6-3.1-10.7,0.6l-48.5,28C1196.8,847.2,1188.9,850.9,1196.1,854.7z" />
                                      <g>
                                        <path fill="#FFFFFF" d="M1246.8,849.1c-0.3-0.8-0.5-1.6-0.8-2.3c-0.1-0.2-0.4-0.4-0.6-0.6c-0.4-0.4-1.1-0.7-1.2-1.2 c-0.8-1.9-1.5-3.8-2.1-5.7c-0.4-1.3,1.1-2.7,3.4-3.2c2.2-0.4,4.4,0.2,4.9,1.5c0.7,1.9,1.4,3.7,2,5.6c0.1,0.4,0.1,0.8-0.1,1.2 c-0.4,0.5-0.3,1-0.1,1.5c0.2,0.4,0.3,0.8,0.5,1.2c0.1,0.2,0.1,0.4,0.2,0.6c2.5-1.1,4.1-3.3,3.6-4.9c-0.7-2-1.4-4.1-2.1-6.1 c-0.1-0.3-0.2-0.5-0.4-0.7c-1.4-2-5.4-3-9.1-2.3c-4,0.8-6.9,3-6.8,5.4c0,0.7,0.3,1.5,0.6,2.2c0.6,1.6,1.1,3.3,1.9,4.9 C1241.2,848.1,1243.5,848.9,1246.8,849.1z" />
                                        <path fill="#FFFFFF" d="M1260.9,855.3c-0.4-1-1.3-1.8-2.7-2.3c-1.1-0.5-2.4-0.7-3.9-0.8c0.3,0.9,0.6,1.7,0.9,2.6 c0,0.1,0.2,0.2,0.3,0.2c0.9,0.3,1.3,0.9,1.5,1.5c0.6,1.7,1.3,3.4,1.8,5.1c0.1,0.4,0.2,0.9,0,1.4c-0.4,1.2-2.2,2.1-4.2,2.2 c-2,0.1-3.6-0.5-4-1.7c-0.6-1.7-1.3-3.4-1.9-5.1c-0.2-0.5-0.3-1.1,0-1.6c0.3-0.7,0.5-1.2,0.2-1.8c-0.1-0.2,0-0.5-0.1-0.7 c-0.1-0.3-0.2-0.6-0.3-0.9c-2.9,1.5-4.3,3.1-3.8,5c0.5,2,1.2,3.9,1.9,5.9c0.8,2.1,3.4,3.4,7,3.4c5.3,0,10.1-3.2,9.3-6.2 C1262.5,859.3,1261.7,857.3,1260.9,855.3z" />
                                        <path fill="#FFFFFF" d="M1251,844c-0.3-0.8-1.6-1.1-2.8-0.8c-1.2,0.2-2,1-1.7,1.7c0.7,1.9,3.6,10.3,4.4,12.2 c0.1,0.3,0.4,0.6,0.7,0.8c0.7,0.3,2,0.1,2.7-0.2s1.3-0.9,1.1-1.5C1254.5,853.5,1251.4,845.2,1251,844z" />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <linearGradient id="d_SVGID_20_" gradientUnits="userSpaceOnUse" x1="1250.4299" y1="1003.3376" x2="1250.4299" y2="1112.5714" gradientTransform="matrix(1 0 0 -1 0 1900)">
                                      <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                      <stop offset="0.291" style="stop-color:#FFF" />
                                      <stop offset="0.9975" style="stop-color:#FFF;stop-opacity:0" />
                                    </linearGradient>
                                    <path opacity="0.25" fill="url(#d_SVGID_20_)" enable-background="new " d="M1307.9,862.9l-0.4-90.9h-114.6l0.5,90.7 c0,3.4,0.3,4.7,3.6,6.5l46.4,27.3c0,0,7.1,4,14.6,0l47.6-28.4C1305.6,868.1,1308.4,866.8,1307.9,862.9z" />
                                    <g>
                                      <circle fill="#FF8088" cx="1249.2" cy="825.7" r="1.5" />
                                      <circle fill="#FF8088" cx="1214.2" cy="768.7" r="0.5" />
                                      <circle fill="#FFFFFF" cx="1295.9" cy="840.3" r="0.7" />
                                      <circle fill="#E64852" cx="1277.5" cy="771.4" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1260.2" cy="814.7" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1298.6" cy="855.4" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1292.4" cy="797" r="0.7" />
                                      <circle fill="#FF8088" cx="1272.4" cy="800.5" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1269.1" cy="849.5" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1205.1" cy="831.9" r="0.7" />
                                      <circle fill="#FFFFFF" cx="1228.2" cy="824.7" r="0.7" />
                                      <circle fill="#E64852" cx="1300" cy="818.8" r="1.4" />
                                      <circle fill="#FFFFFF" cx="1217.5" cy="801.9" r="0.7" />
                                      <circle fill="#E64852" cx="1202.6" cy="782.9" r="0.7" />
                                      <circle fill="#E64852" cx="1208.8" cy="822.4" r="0.7" />
                                      <circle fill="#E64852" cx="1250.5" cy="774.3" r="1" />
                                      <circle fill="#E64852" cx="1235.1" cy="802.6" r="1.4" />
                                      <circle fill="#FFFFFF" cx="1203.9" cy="852.8" r="1.4" />
                                      <circle fill="#FFFFFF" cx="1286.2" cy="831.9" r="1.4" />
                                    </g>
                                  </g>
                                </g>
                                <g id="topgreyblocks" opacity="0.7">
                                  <g>
                                    <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="947.494" y1="880.5922" x2="990.4099" y2="903.5613" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#262626" />
                                      <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                      <stop offset="0.7283" style="stop-color:#474747" />
                                      <stop offset="1" style="stop-color:#595959" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_14_)" points="948.4,267.8 948.4,320.8 991.4,346.8 991.5,296.7 " />
                                    <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="997.8663" y1="909.6794" x2="1033.5619" y2="873.9838" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.2132" style="stop-color:#969696" />
                                      <stop offset="0.4462" style="stop-color:#717171" />
                                      <stop offset="0.6625" style="stop-color:#565656" />
                                      <stop offset="0.8538" style="stop-color:#464646" />
                                      <stop offset="1" style="stop-color:#404040" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_15_)" points="991.5,296.7 991.4,346.8 1038.7,320.8 1038.7,267.8 " />
                                    <linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="980.2971" y1="911.2566" x2="1008.4671" y2="955.3561" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.219" style="stop-color:#A2A2A2" />
                                      <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                      <stop offset="0.833" style="stop-color:#636363" />
                                      <stop offset="1" style="stop-color:#5A5A5A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_16_)" points="948.8,267.8 991.1,296.7 1038.6,267.9 994.7,240.1 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="959.4,275.5 959.4,314.7 991.4,333.9 991.5,296.8 " />
                                      <polygon fill="#FFFFFF" points="1025.2,275.5 1025.2,314.7 991.4,333.9 991.5,296.8 " />
                                      <polygon fill="#FFFFFF" points="959.3,275.5 991.2,296.8 1026.1,275.5 993.4,254.9 " />
                                    </g>
                                    <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="1010.6151" y1="921.8813" x2="1020.1381" y2="912.3583" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_17_)" points="992,296.7 992,297.7 1038.9,268.8 1039,267.9 " />
                                    <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="2747.8123" y1="920.8981" x2="2755.3716" y2="913.3389" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_18_)" points="992,296.7 992,297.7 949,268.8 949,267.8 " />
                                    <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="979.2193" y1="890.4445" x2="1004.2247" y2="865.439" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_19_)" points="992.3,297.2 991.5,297.3 991.4,346.8 992.3,346.5 " />
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="789.5049" y1="786.5737" x2="832.421" y2="809.5428" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_20_)" points="790.4,361.8 790.4,414.8 833.4,440.8 833.5,390.7 " />
                                      <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="839.8773" y1="815.6609" x2="875.5729" y2="779.9653" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_21_)" points="833.5,390.7 833.4,440.8 880.7,414.8 880.7,361.8 " />
                                      <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="822.3081" y1="817.2381" x2="850.4781" y2="861.3376" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_22_)" points="790.8,361.8 833.1,390.7 880.6,361.9 836.7,334.1 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="801.4,369.5 801.4,408.7 833.4,427.9 833.5,390.8 " />
                                        <polygon fill="#FFFFFF" points="867.2,369.5 867.2,408.7 833.4,427.9 833.5,390.8 " />
                                        <polygon fill="#FFFFFF" points="801.3,369.5 833.2,390.8 868.1,369.5 835.4,348.9 " />
                                      </g>
                                      <linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="852.626" y1="827.8629" x2="862.1494" y2="818.3397" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_23_)" points="834,390.7 834,391.7 880.9,362.8 881,361.9 " />
                                      <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="2905.8013" y1="826.8796" x2="2913.3606" y2="819.3204" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_24_)" points="834,390.7 834,391.7 791,362.8 791,361.8 " />
                                      <linearGradient id="SVGID_25_" gradientUnits="userSpaceOnUse" x1="821.2303" y1="796.426" x2="846.2357" y2="771.4205" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_25_)" points="834.3,391.2 833.5,391.3 833.4,440.8 834.3,440.5 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="881" y1="362.1" x2="972.4" y2="307" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="51" xlink:href="data:image/png;base64,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 AAAAAElFTkSuQmCC" transform="matrix(0.9804 0 0 0.9804 870.2711 328.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="2660.3113" y1="-777.6976" x2="2673.176" y2="-769.5624" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_26_)" points="888.9,355 891.5,359.3 904.4,351 901.9,346.8 " />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_27_" gradientUnits="userSpaceOnUse" x1="628.5163" y1="689.5548" x2="671.4322" y2="712.5239" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_27_)" points="629.4,458.8 629.4,511.8 672.4,537.8 672.5,487.7 " />
                                      <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="678.8886" y1="718.6421" x2="714.5844" y2="682.9465" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_28_)" points="672.5,487.7 672.4,537.8 719.7,511.8 719.7,458.8 " />
                                      <linearGradient id="SVGID_29_" gradientUnits="userSpaceOnUse" x1="661.3195" y1="720.2193" x2="689.4895" y2="764.3188" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_29_)" points="629.8,458.8 672.1,487.7 719.6,458.9 675.7,431.1 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="640.4,466.5 640.4,505.7 672.4,524.9 672.5,487.8 " />
                                        <polygon fill="#FFFFFF" points="706.2,466.5 706.2,505.7 672.4,524.9 672.5,487.8 " />
                                        <polygon fill="#FFFFFF" points="640.3,466.5 672.2,487.8 707.1,466.5 674.4,445.9 " />
                                      </g>
                                      <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="691.6375" y1="730.844" x2="701.1605" y2="721.3209" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_30_)" points="673,487.7 673,488.7 719.9,459.8 720,458.9 " />
                                      <linearGradient id="SVGID_31_" gradientUnits="userSpaceOnUse" x1="3066.79" y1="729.8606" x2="3074.3489" y2="722.3018" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_31_)" points="673,487.7 673,488.7 630,459.8 630,458.8 " />
                                      <linearGradient id="SVGID_32_" gradientUnits="userSpaceOnUse" x1="660.2417" y1="699.407" x2="685.247" y2="674.4018" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_32_)" points="673.3,488.2 672.5,488.3 672.4,537.8 673.3,537.5 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="720" y1="459.1" x2="814.4" y2="400.3" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="51" xlink:href="data:image/png;base64,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 AAAAAElFTkSuQmCC" transform="matrix(0.9804 0 0 0.9804 738.2711 406.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_33_" gradientUnits="userSpaceOnUse" x1="2792.3113" y1="-699.6976" x2="2805.176" y2="-691.5624" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_33_)" points="756.9,433 759.5,437.3 772.4,429 769.9,424.8 " />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_34_" gradientUnits="userSpaceOnUse" x1="471.528" y1="593.1777" x2="514.4439" y2="616.1468" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_34_)" points="472.4,555.2 472.4,608.2 515.4,634.2 515.5,584.1 " />
                                      <linearGradient id="SVGID_35_" gradientUnits="userSpaceOnUse" x1="521.8997" y1="622.2655" x2="557.5959" y2="586.5693" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_35_)" points="515.5,584.1 515.4,634.2 562.7,608.2 562.7,555.2 " />
                                      <linearGradient id="SVGID_36_" gradientUnits="userSpaceOnUse" x1="504.3308" y1="623.842" x2="532.5008" y2="667.9416" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_36_)" points="472.8,555.2 515.1,584.1 562.6,555.3 518.7,527.4 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="483.4,562.8 483.4,602 515.4,621.3 515.5,584.2 " />
                                        <polygon fill="#FFFFFF" points="549.2,562.9 549.2,602 515.4,621.3 515.5,584.2 " />
                                        <polygon fill="#FFFFFF" points="483.3,562.8 515.2,584.2 550.1,562.9 517.4,542.3 " />
                                      </g>
                                      <linearGradient id="SVGID_37_" gradientUnits="userSpaceOnUse" x1="534.6481" y1="634.4672" x2="544.172" y2="624.9434" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_37_)" points="516,584.1 516,585 562.9,556.2 563,555.3 " />
                                      <linearGradient id="SVGID_38_" gradientUnits="userSpaceOnUse" x1="3223.7781" y1="633.4838" x2="3231.3376" y2="625.9242" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_38_)" points="516,584.1 516,585 473,556.2 473,555.2 " />
                                      <linearGradient id="SVGID_39_" gradientUnits="userSpaceOnUse" x1="503.2527" y1="603.0305" x2="528.2585" y2="578.0247" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_39_)" points="516.3,584.6 515.5,584.7 515.4,634.2 516.3,633.8 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="563" y1="555.5" x2="648.3" y2="501.9" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAAyCAYAAAAX1CjLAAAACXBIWXMAAAsSAAALEgHS3X78AAAA GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACntJREFUeNrsWsuOHEkVvTcis57d 7Se2x5hZjpAQgg3SWIINGjZeesWCL+Df+AU0AqSReGkeQoMZMGZkS+PBptrdXV1dlRlxOedGVj/8 6i53jzWLTiucWVn5iBPn3HNvRLXI+Xa+nW/f5KZv4yW22ntMv83A7Gye/cYg9S2Awbm72N06wRN+ g/bIzgKgfnOAfoVzl0XuTPHtQqXpTu9siqT24PrRhknd6z78T+TT75h8tfEykCuB0zMGVdi5C3aa LZV5EgkEsqeye10k9xWgRBYAa0mlHppUA9z1H5FBNokRx5dMFOc+DiZfj/HI3+IVf18ZnJ4dS2Do Tr+wkw6B2Z2rXJqqd3rRqBhYzHXpo6Lz+lSk3hPZAsgFrulPTMYKwFcLwE/HYPDDlcHpmbB0Fyw1 G5AbOrkzUZleBJisksHK3higcHkCqBFAxou4pX9w97On3RMBLO6aDFqTbRzr1gHAz66sDE5PBwos 3X6m8u4IIw7pbQLQEJ/bjQKqvx0kDfEZ9zQ1gOUCMmMfwJYEkSkeaXOwFk16ANb2sqS5yTRmCYi/ 9W1zya4ITk8VS7cBYPxYZXalSG60EyQgjnrjIItZkNoCblRZBJUKKALA5sguARiA6IKPApgq43vs AUzqLE0LUOMss5B9ANY3XwbutcCqN0sRd0TeHxdQlN1wFx0OQfoA0iSAWQTRGnS0QTKurzMBBmnR lwoggUuaRRmvCGCWMhjOdBCpHLTIHN8PEWOznGV7R+Q6zKX6Hm5ptIwzR+TV4HRFtjpQV1TWnqhM eirrQhYAAu6QFPs9AETPQiQQ9DAQHD5DfoaGnpfHtdwBFKGDGVGA0yQ9gZWiNZZkDlBhF8xBlmOw OIQ0PxnBLT9Cl/7xWtaqU4HqAcReBcmxofMJrGgvSpsriQClBIS9cU8YAGnWDTglaeg4Og+6AC+7 ROd+HRSJ1/VJOiR4AXlvAVV4HJK19dO54tG4uqsuv8OgKL9QRemBnQosZQAKPfYYA4ZjAajEYwJT ggo8he9AJJSUAcyMoMAS2JKINJ5bAITdtC2TnQzwnc2STBCHw1RY++xPiLUH9joTOSEwul91EFN9 jN5eG6XqBWcmaoWYArC2dhUYPhsBce+2QWBgzmNtKUGYB4G5JhN9E5ImMDQAC8jkqqUtwOg25Drc yXINcfiXdZOHf3ytHKsTSZCJdx3B/BDuR6NoYyc/sKQJFFRkqwaDNaQFkAaAODbs1QpzotGfxTD0 sM8ERaZwwlpP1tRpQEsJDXFF86HpLPD/BvJbe0lKaXbtWDmewBXvlmpiCxLcXUPUDKB15Kc4RIeY iKTILYOdkAAIYLL2HJwDJJtoGTJUxBCHK/uwFfkZXNJpdAYBSKnTJBHu2iDptXBBXl8RZ90ZkNhx vT4eGOu+elLYurANCTZ0ObDVMF5KXEU+RwuILKxoe3g12AsFqL9HS05zKbLzYFC1cUmKeyPcEdd4 LGoBUKP1Yfk2A5gFkz7yJerMvCFvBOyIDJt/IwG3ha11mMeIXsdyCbkq0drYchdPsWbWclAK1oxF ofKYhhKcNQ6LWyNiJ/urcokxMkFzMVYlwbugrgmwjGK4bUrPWESD1uNYC8fKcI5yqcFDb3CqkUqp lMBWi5dTLjQG7zizKgaKNYbsy7DEGQEWsLEzl+ApwN8PQ1HGv8ealji0A2PzQnnuqW2V7Rhgt1xV MrvBYAdASKJB1U7tRyuBHbsETMZo8+qts3wC1QJcfexDx0qRpdq+RDoWcZZpAGAMexI35y3416vM /WcI9sLwlDHGiS8jZJvzKMTXBlU0Uo+BxFazc2XUQ9fhrMFjpcTTko1umqK2b/cEsowvP4ad0ykD nMLwmQpdAGBamDQ4HlGdLFzqov5TMUbCdjeLrhfzrk5jadSqd5w82DKNZHXXKwpS74VfpUVh3nEH Aidkr7FXz1/JMzaTNUsrqxC5sHqLJRZZt6CalnpgMkQxXM3sJFI83hXbttixTxBTkSSb992WVl3Y yAWPy4gXqZVa0CXmNp07UK2bh3R1IZN01GL/bvd0SGNBDAZ75jOBCS6v4Yhr5OJDtC9Om8eW23Yp heIa5JHLqUZKzDOp+imvJA46xs47S1YqejKglvw8Kw0zPAGNxym3zl4VCQ5lVptdpi2kOWD84b19 lFP3kaQn/+z682pnXAEYKo8qdGbF4G7NRz9oYUG70WfdF1hJ+ITSSs7qGHXGlmVUB8rCouQzArRS I0beAylqXfY7iLP4DFKEJCcAOB3YcTXh8cA2MEoT1Il1zUGCLDC7VciDL6wYE20uYDx2kpdHRaEF yDLeWD5wABhrykJXClMElaUUvxJwnMoASZ0AH9OYPZMFpioBk9DLCIf4B+lqxFNIkStgP+6VVaRA Nx+5W2NUmSkhuopBzzSNEA+lkHUssTBl+/ZOeLkrmzgIBNFCZm0RdGrAPNhKrbOZOB9rIMupyTZY CmBrA+//5KLJE5rH62V4PLBHaD+QsjS22YfGMXK9bZN5vxRvtGe6WUQn3V9xXRtKNaGs5Dvb9zDr JpVLkyBDkQDRLLZ0KWeboPocrHmWKd4R4PUXMFAP30F8IbamX55oalIduzJ7+QOCUtmGtimLllJi fWEeRJgQYuSpntqcKUIIbp/huXRiJb7cVhGLlCz2hn2lRX5tN3OOwyQzgGph71cg+3dvmnz+MWLr 8xOx9UrQdvi7m79W+eFTzGynmIvBPfrjIONZwLS91IkR5cCcs2UUxJGTTc69ON0I6sWyl4NaKvfg aQCcwFYDQZGfXsLgFLAzyC/sIeLGAAVlDCC7q5eyPHpkcu8egE33u/fGy28HhfB3VX75gcjm4yBP LqP6QI0TOH3YicjXwSebC4ALANVD7djiXAKwyHW2bkqivq7IfATYYCzBcDjfCtatc/SzM8X1jV3a CmLrIr5fg/s9eCBy/z5B2ZksmL6StcU6Fz7BCJwyssKPZUUqtWXNIxpXrEplooeeb7DsmmYD42GF 0XSLOAuA7IEhynzeA1MAMMYgfHULIfBXOPI9OQzqpCtQJ1waAGvXwNqPMHtmIbwEJz2A5ZwJwDIq /tlekAEA00FT0rJw023RqxgwhZMDmNBsAfbAFEukKZ1vgnIJMboOlh7eMPkCMbX3N+OK6qqgTgLs 0DU3Ae4XR8FxRWkdnwPmag3k18d5LoraGkD4clsHCpV5mInsIEUYzGAwxucdk52qACK/47ok4Afv QHqIqenvXjCKM/215ehK1fPg6NYXAVALwCHqymYOKV5d/vDQvWULbZcmjLw04jK2SP+/LwKa/BnS Q7E9fYgbn63M0qrAnrvuPUw6f67yM7r91ypP5x1AxJ9cByh0mtOMfOieWj1Viz7uFnAhVf7g8AKg L5csnQrUKivBz13/fZCHKUz8qcj7owJwBqkZ5Lm7B2BzOZjOMJshdkaQZzXz+bP8C6XRFqoI+b28 CtBpf7xb6d6XsvfeOurjn6i0o3LqNjp/KR197kdoE856Y5lyOJhBty54toBO8zPSS+4FgzLex/rC kt+R/h/5cOaAzuIXzTd9jr2NP104qx/Xv31/XHK+nW/n2/n2Jtv/BRgAncjBLDSQ4WYAAAAASUVO RK5CYII=" transform="matrix(0.98 0 0 0.98 590.2817 497.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_40_" gradientUnits="userSpaceOnUse" x1="2940.311" y1="-609.3386" x2="2953.176" y2="-601.2035" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_40_)" points="608.9,523.4 611.5,527.6 624.4,519.4 621.9,515.1 " />
                                      </g>
                                    </g>
                                  </g>
                                </g>
                                <g id="redglow">
                                  <linearGradient id="SVGID_41_" x1="885.7858" x2="885.9467" y1="-920.6589" y2="-787.5014" gradientTransform="matrix(0.3592 -0.3065 1.2019 0.6834 1339.3929 1550.1232)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                    <stop offset="1" style="stop-color:#FFF" />
                                  </linearGradient>
                                  <polygon class="particlespoly" fill="url(#SVGID_41_)" points="733.6,720 683.4,767.8 491.1,643.4 555.6,608.9 " enable-background="new " opacity="0.25" />
                                  <linearGradient id="SVGID_42_" x1="1042.4587" x2="993.0236" y1="-985.6109" y2="-790.8901" gradientTransform="matrix(0.3592 -0.3065 1.2019 0.6834 1339.3929 1550.1232)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                    <stop offset="0.2113" style="stop-color:#FFD7DA;stop-opacity:0.2113" />
                                    <stop offset="0.4448" style="stop-color:#FFB1B8;stop-opacity:0.4448" />
                                    <stop offset="0.6617" style="stop-color:#FF969F;stop-opacity:0.6617" />
                                    <stop offset="0.8535" style="stop-color:#FF8690;stop-opacity:0.8535" />
                                    <stop offset="1" style="stop-color:#FF808B" />
                                  </linearGradient>
                                  <polygon class="particlespoly" fill="url(#SVGID_42_)" points="777.3,682.4 718.3,724 493.5,577.2 556,537.9 " enable-background="new " opacity="0.75" />
                                  <g id="redglowparticles">
                                    <circle cx="548.8" cy="631.8" r="1.6" fill="#FFFFFF" />
                                    <circle cx="537.9" cy="613.6" r="1.6" fill="#FFFFFF" />
                                    <circle cx="606.4" cy="676" r="1.6" fill="#FFFFFF" />
                                    <circle cx="725.1" cy="657.4" r="1.6" fill="#FFFFFF" />
                                    <circle cx="542.7" cy="596.8" r="1.6" fill="#FFFFFF" />
                                    <circle cx="623.7" cy="724.8" r="1.6" fill="#FFFFFF" />
                                    <circle cx="696.2" cy="708" r="1.6" fill="#FFFFFF" />
                                    <circle cx="611.1" cy="610.4" r="1.6" fill="#FFFFFF" />
                                    <circle cx="564.1" cy="553.5" r="1.6" fill="#FFFFFF" />
                                    <circle cx="554.2" cy="589.4" r="1.6" fill="#FFFFFF" />
                                    <circle cx="670" cy="625" r="1.6" fill="#FFFFFF" />
                                    <ellipse cx="510.9" cy="630.2" fill="#FFFFFF" rx="3.2" ry="3.2" transform="matrix(0.3162 -0.9487 0.9487 0.3162 -248.554 915.582)" />
                                  </g>
                                  <linearGradient id="SVGID_43_" x1="891.1575" x2="874.2567" y1="-968.8058" y2="-817.3937" gradientTransform="matrix(0.3592 -0.3065 1.2019 0.6834 1339.3929 1550.1232)" gradientUnits="userSpaceOnUse">
                                    <stop offset="7.030000e-02" style="stop-color:#FFF;stop-opacity:0" />
                                    <stop offset="1" style="stop-color:#FFF" />
                                  </linearGradient>
                                  <polygon class="particlespoly" fill="url(#SVGID_43_)" points="672,693.7 672,760.4 492.3,643.8 492.7,577.2 " enable-background="new " opacity="0.35" />
                                  <linearGradient id="SVGID_44_" x1="889.0407" x2="876.6129" y1="-943.0591" y2="-831.72" gradientTransform="matrix(0.3592 -0.3065 1.2019 0.6834 1339.3929 1550.1232)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                    <stop offset="1" style="stop-color:#FFF" />
                                  </linearGradient>
                                  <polygon class="particlespoly" fill="url(#SVGID_44_)" points="672,717 672,736.3 492.3,619.6 492.7,600.5 " enable-background="new " opacity="0.35" />
                                  <linearGradient id="SVGID_45_" x1="1096.1616" x2="1062.9662" y1="-979.2617" y2="-821.5145" gradientTransform="matrix(0.3592 -0.3065 1.2019 0.6834 1339.3929 1550.1232)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF;stop-opacity:0" />
                                    <stop offset="1" style="stop-color:#FFF" />
                                  </linearGradient>
                                  <polygon class="particlespoly" fill="url(#SVGID_45_)" points="733.3,655.8 732.3,668.5 555,550.9 555,537.7 " enable-background="new " opacity="0.2" />
                                  <g class="particlespoly" opacity="0.25">
                                    <polygon fill="#FFFFFF" points="602.1,626.4 605.2,611 632.9,608.1 636.4,604.4 601.7,607.7 597.7,629.2 " />
                                    <polygon fill="#FFFFFF" points="594,618.4 597.2,603 625.4,599.5 628.3,596.3 593.7,599.7 589.7,621.2 " />
                                  </g>
                                </g>
                                <g id="blocksticks">
                                  <g>
                                    <rect x="1428.8" y="314.8" transform="matrix(0.8588 -0.5124 0.5124 0.8588 40.4099 777.3287)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1432.4" y="312.6" transform="matrix(0.8588 -0.5124 0.5124 0.8588 42.0468 778.856)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1435.9" y="310.4" transform="matrix(0.8588 -0.5124 0.5124 0.8588 43.6837 780.3834)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1439.7" y="308.3" transform="matrix(0.8588 -0.5124 0.5124 0.8588 45.2837 781.9971)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1443.3" y="306.1" transform="matrix(0.8588 -0.5124 0.5124 0.8588 46.9205 783.5242)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1446.8" y="303.9" transform="matrix(0.8588 -0.5124 0.5124 0.8588 48.5192 785.0148)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1450.5" y="301.8" transform="matrix(0.8588 -0.5124 0.5124 0.8588 50.1327 786.6038)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1454.1" y="299.6" transform="matrix(0.8588 -0.5124 0.5124 0.8588 51.7561 788.1558)" fill="#BFBFBF" width="2.8" height="1.2" />
                                    <rect x="1457.8" y="297.5" transform="matrix(0.8588 -0.5124 0.5124 0.8588 53.3696 789.7447)" fill="#BFBFBF" width="2.8" height="1.2" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1096.5" y1="511.7" x2="1176.2" y2="464.3" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="938.5" y1="605.7" x2="1018.2" y2="558.3" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="781.4" y1="699.4" x2="861" y2="652.1" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="624.2" y1="791.7" x2="703.9" y2="744.3" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="468" y1="885.5" x2="547.7" y2="838.2" />
                                  </g>
                                  <g>
                                    <line fill="none" stroke="#FF4D6B" stroke-width="3.4927" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1257.5" y1="417.7" x2="1337.2" y2="370.3" />
                                  </g>
                                </g>
                                <g id="redblocksparticles">
                                  <g>
                                    <linearGradient id="SVGID_91_" x1="3650.8601" x2="3659.948" y1="114.5993" y2="168.2118" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_91_)" points="1114,501.7 1114,579 1202,523 1142.3,486 " enable-background="new " />
                                    <linearGradient id="SVGID_92_" x1="3814.6211" x2="3799.0762" y1="74.9866" y2="152.319" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_92_)" points="1050.3,461.1 1113,502 1204,450.6 1141.3,409 " enable-background="new " />
                                    <g>
                                      <circle cx="1115.2" cy="508.7" r="1.5" fill="#FF8088" />
                                      <circle cx="1080.2" cy="451.7" r="0.5" fill="#FF8088" />
                                      <circle cx="1161.9" cy="523.3" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1143.5" cy="454.4" r="0.7" fill="#E64852" />
                                      <circle cx="1126.2" cy="497.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1164.6" cy="538.4" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1158.4" cy="480" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1138.4" cy="483.5" r="0.7" fill="#FF8088" />
                                      <circle cx="1135.1" cy="532.5" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1071.1" cy="514.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1094.2" cy="507.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1166" cy="501.8" r="1.4" fill="#E64852" />
                                      <circle cx="1083.5" cy="484.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="1068.6" cy="465.9" r="0.7" fill="#E64852" />
                                      <circle cx="1074.8" cy="505.4" r="0.7" fill="#E64852" />
                                      <circle cx="1116.5" cy="457.3" r="1" fill="#E64852" />
                                      <circle cx="1101.1" cy="485.6" r="1.4" fill="#E64852" />
                                      <circle cx="1069.9" cy="535.8" r="1.4" fill="#FFFFFF" />
                                      <circle cx="1152.2" cy="514.9" r="1.4" fill="#FFFFFF" />
                                    </g>
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_93_" x1="3634.5652" x2="3643.6531" y1="382.3858" y2="435.9983" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_93_)" points="798,689.7 798,767 886,711 826.3,674 " enable-background="new " opacity="0.35" />
                                    <linearGradient id="SVGID_94_" x1="3798.3262" x2="3782.7813" y1="342.7743" y2="420.1066" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_94_)" points="734.3,649.1 797,690 888,638.6 825.3,597 " enable-background="new " opacity="0.35" />
                                    <g>
                                      <circle cx="799.2" cy="696.7" r="1.5" fill="#FF8088" />
                                      <circle cx="764.2" cy="639.7" r="0.5" fill="#FF8088" />
                                      <circle cx="845.9" cy="711.3" r="0.7" fill="#FFFFFF" />
                                      <circle cx="827.5" cy="642.4" r="0.7" fill="#E64852" />
                                      <circle cx="810.2" cy="685.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="848.6" cy="726.4" r="0.7" fill="#FFFFFF" />
                                      <circle cx="842.4" cy="668" r="0.7" fill="#FFFFFF" />
                                      <circle cx="822.4" cy="671.5" r="0.7" fill="#FF8088" />
                                      <circle cx="819.1" cy="720.5" r="0.7" fill="#FFFFFF" />
                                      <circle cx="755.1" cy="702.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="778.2" cy="695.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="850" cy="689.8" r="1.4" fill="#E64852" />
                                      <circle cx="767.5" cy="672.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="752.6" cy="653.9" r="0.7" fill="#E64852" />
                                      <circle cx="758.8" cy="693.4" r="0.7" fill="#E64852" />
                                      <circle cx="800.5" cy="645.3" r="1" fill="#E64852" />
                                      <circle cx="785.1" cy="673.6" r="1.4" fill="#E64852" />
                                      <circle cx="753.9" cy="723.8" r="1.4" fill="#FFFFFF" />
                                      <circle cx="836.2" cy="702.9" r="1.4" fill="#FFFFFF" />
                                    </g>
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_95_" x1="3629.489" x2="3638.5767" y1="516.1934" y2="569.8058" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_95_)" points="639,782.7 639,860 727,804 667.3,767 " enable-background="new " opacity="0.35" />
                                    <linearGradient id="SVGID_96_" x1="3793.2498" x2="3777.7048" y1="476.5823" y2="553.9148" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_96_)" points="575.3,742.1 638,783 729,731.6 666.3,690 " enable-background="new " opacity="0.35" />
                                    <g>
                                      <circle cx="640.2" cy="789.7" r="1.5" fill="#FF8088" />
                                      <circle cx="605.2" cy="732.7" r="0.5" fill="#FF8088" />
                                      <circle cx="686.9" cy="804.3" r="0.7" fill="#FFFFFF" />
                                      <circle cx="668.5" cy="735.4" r="0.7" fill="#E64852" />
                                      <circle cx="651.2" cy="778.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="689.6" cy="819.4" r="0.7" fill="#FFFFFF" />
                                      <circle cx="683.4" cy="761" r="0.7" fill="#FFFFFF" />
                                      <circle cx="663.4" cy="764.5" r="0.7" fill="#FF8088" />
                                      <circle cx="660.1" cy="813.5" r="0.7" fill="#FFFFFF" />
                                      <circle cx="596.1" cy="795.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="619.2" cy="788.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="691" cy="782.8" r="1.4" fill="#E64852" />
                                      <circle cx="608.5" cy="765.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="593.6" cy="746.9" r="0.7" fill="#E64852" />
                                      <circle cx="599.8" cy="786.4" r="0.7" fill="#E64852" />
                                      <circle cx="641.5" cy="738.3" r="1" fill="#E64852" />
                                      <circle cx="626.1" cy="766.6" r="1.4" fill="#E64852" />
                                      <circle cx="594.9" cy="816.8" r="1.4" fill="#FFFFFF" />
                                      <circle cx="677.2" cy="795.9" r="1.4" fill="#FFFFFF" />
                                    </g>
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_97_" x1="3619.9592" x2="3629.0474" y1="648.0037" y2="701.6161" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_97_)" points="484,875.7 484,953 572,897 512.3,860 " enable-background="new " opacity="0.35" />
                                    <linearGradient id="SVGID_98_" x1="3783.7202" x2="3768.1753" y1="608.3932" y2="685.7256" gradientTransform="matrix(-0.3592 -0.3065 -1.2019 0.6834 2623.3687 1550.1232)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFB3B7;stop-opacity:0" />
                                      <stop offset="1" style="stop-color:#FFB3B7" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_98_)" points="420.3,835.1 483,876 574,824.6 511.3,783 " enable-background="new " opacity="0.35" />
                                    <g>
                                      <circle cx="485.2" cy="882.7" r="1.5" fill="#FF8088" />
                                      <circle cx="450.2" cy="825.7" r="0.5" fill="#FF8088" />
                                      <circle cx="531.9" cy="897.3" r="0.7" fill="#FFFFFF" />
                                      <circle cx="513.5" cy="828.4" r="0.7" fill="#E64852" />
                                      <circle cx="496.2" cy="871.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="534.6" cy="912.4" r="0.7" fill="#FFFFFF" />
                                      <circle cx="528.4" cy="854" r="0.7" fill="#FFFFFF" />
                                      <circle cx="508.4" cy="857.5" r="0.7" fill="#FF8088" />
                                      <circle cx="505.1" cy="906.5" r="0.7" fill="#FFFFFF" />
                                      <circle cx="441.1" cy="888.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="464.2" cy="881.7" r="0.7" fill="#FFFFFF" />
                                      <circle cx="536" cy="875.8" r="1.4" fill="#E64852" />
                                      <circle cx="453.5" cy="858.9" r="0.7" fill="#FFFFFF" />
                                      <circle cx="438.6" cy="839.9" r="0.7" fill="#E64852" />
                                      <circle cx="444.8" cy="879.4" r="0.7" fill="#E64852" />
                                      <circle cx="486.5" cy="831.3" r="1" fill="#E64852" />
                                      <circle cx="471.1" cy="859.6" r="1.4" fill="#E64852" />
                                      <circle cx="439.9" cy="909.8" r="1.4" fill="#FFFFFF" />
                                      <circle cx="522.2" cy="888.9" r="1.4" fill="#FFFFFF" />
                                    </g>
                                  </g>
                                </g>
                                <g>
                                  <g opacity="0.25">
                                    <linearGradient id="SVGID_46_" x1="1460.7068" x2="1522.7059" y1="-405.4163" y2="-438.5989" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#494949" />
                                      <stop offset="0.4259" style="stop-color:#525252" />
                                      <stop offset="1" style="stop-color:#656565" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_46_)" points="1462,219.7 1462,297 1524,334.9 1524,261.8 " />
                                    <linearGradient id="SVGID_47_" x1="1533" x2="1584.1" y1="-447.2" y2="-396.1" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#B8B8B8" />
                                      <stop offset="5.310000e-02" style="stop-color:#B0B0B0" />
                                      <stop offset="0.3337" style="stop-color:#8B8B8B" />
                                      <stop offset="0.5939" style="stop-color:#707070" />
                                      <stop offset="0.8241" style="stop-color:#5F5F5F" />
                                      <stop offset="1" style="stop-color:#5A5A5A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_47_)" points="1524,261.8 1524,334.9 1591,297 1591,219.7 " />
                                    <linearGradient id="SVGID_48_" x1="1507.2352" x2="1547.9783" y1="-450.4547" y2="-514.2369" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#787878" />
                                      <stop offset="0.5984" style="stop-color:#636363" />
                                      <stop offset="1" style="stop-color:#5A5A5A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_48_)" points="1461.7,219.7 1523.6,261.8 1590.9,219.7 1528.1,179.2 " />
                                  </g>
                                  <path fill="#B3B3B3" d="M1513,186.3l-0.8-1.3l2.3-1.4l0.8,1.3L1513,186.3z M1519.3,182.5l-0.8-1.3l-2.3,1.4l0.8,1.3L1519.3,182.5 z M1523.4,180l-0.8-1.3l-2.3,1.4l0.8,1.3L1523.4,180z M1503.1,192.3l-0.8-1.3l-2.3,1.4l0.8,1.3L1503.1,192.3z M1507.2,189.8 l-0.8-1.3l-2.3,1.4l0.8,1.3L1507.2,189.8z M1511.2,187.4l-0.8-1.3l-2.3,1.4l0.8,1.3L1511.2,187.4z M1490.9,199.7l-0.8-1.3 l-2.3,1.4l0.8,1.3L1490.9,199.7z M1495,197.2l-0.8-1.3l-2.3,1.4l0.8,1.3L1495,197.2z M1499,194.8l-0.8-1.3l-2.3,1.4l0.8,1.3 L1499,194.8z M1478.8,207.1l-0.8-1.3l-2.3,1.4l0.8,1.3L1478.8,207.1z M1482.8,204.6l-0.8-1.3l-2.3,1.4l0.8,1.3L1482.8,204.6z M1486.9,202.1l-0.8-1.3l-2.3,1.4l0.8,1.3L1486.9,202.1z M1466.6,214.4l-0.8-1.3l-2.3,1.4l0.8,1.3L1466.6,214.4z M1470.7,212 l-0.8-1.3l-2.3,1.4l0.8,1.3L1470.7,212z M1474.7,209.5l-0.8-1.3l-2.3,1.4l0.8,1.3L1474.7,209.5z M1461,233h-2v3h2V233z M1461,229 h-2v2h2V229z M1461,224h-2v2h2V224z M1461,248h-2v2h2V248z M1461,243h-2v3h2V243z M1461,238h-2v2h2V238z M1461,262h-2v2h2V262z M1461,257h-2v3h2V257z M1461,253h-2v2h2V253z M1461,276h-2v3h2V276z M1461,271h-2v3h2V271z M1461,266h-2v3h2V266z M1461,290h-2 v3h2V290z M1461,286h-2v2h2V286z M1461,281h-2v3h2V281z M1471.8,305.6l-0.8,1.3l2.1,1.3l0.8-1.3L1471.8,305.6z M1468,303.3 l-0.8,1.3l2.1,1.3l0.8-1.3L1468,303.3z M1464.3,300.9l-0.8,1.3l2.1,1.3l0.8-1.3L1464.3,300.9z M1483.2,312.6l-0.8,1.3l2.1,1.3 l0.8-1.3L1483.2,312.6z M1479.4,310.3l-0.8,1.3l2.1,1.3l0.8-1.3L1479.4,310.3z M1475.6,308l-0.8,1.3l2.1,1.3l0.8-1.3L1475.6,308z M1494.5,319.7l-0.8,1.3l2.1,1.3l0.8-1.3L1494.5,319.7z M1490.8,317.3l-0.8,1.3l2.1,1.3l0.8-1.3L1490.8,317.3z M1487,315 l-0.8,1.3l2.1,1.3l0.8-1.3L1487,315z M1505.9,326.7l-0.8,1.3l2.1,1.3l0.8-1.3L1505.9,326.7z M1502.1,324.4l-0.8,1.3l2.1,1.3 l0.8-1.3L1502.1,324.4z M1498.4,322l-0.8,1.3l2.1,1.3l0.8-1.3L1498.4,322z M1517.3,333.7l-0.8,1.3l2.1,1.3l0.8-1.3L1517.3,333.7z M1513.5,331.4l-0.8,1.3l2.1,1.3l0.8-1.3L1513.5,331.4z M1509.7,329.1l-0.8,1.3l2.1,1.3l0.8-1.3L1509.7,329.1z M1536.8,330.5 l0.8,1.4l2.3-1.3l-0.8-1.4L1536.8,330.5z M1532.7,332.8l0.8,1.4l2.3-1.3l-0.8-1.4L1532.7,332.8z M1528.6,335.2l0.8,1.4l2.3-1.3 l-0.8-1.4L1528.6,335.2z M1549.1,323.4l0.8,1.4l2.3-1.3l-0.8-1.4L1549.1,323.4z M1545,325.7l0.8,1.4l2.3-1.3l-0.8-1.4L1545,325.7 z M1540.9,328.1l0.8,1.4l2.3-1.3l-0.8-1.4L1540.9,328.1z M1561.5,316.3l0.8,1.4l2.3-1.3l-0.8-1.4L1561.5,316.3z M1557.4,318.7 l0.8,1.4l2.3-1.3l-0.8-1.4L1557.4,318.7z M1553.3,321l0.8,1.4l2.3-1.3l-0.8-1.4L1553.3,321z M1573.8,309.2l0.8,1.4l2.3-1.3 l-0.8-1.4L1573.8,309.2z M1569.7,311.6l0.8,1.4l2.3-1.3l-0.8-1.4L1569.7,311.6z M1565.6,313.9l0.8,1.4l2.3-1.3l-0.8-1.4 L1565.6,313.9z M1586.2,302.2l0.8,1.4l2.3-1.3l-0.8-1.4L1586.2,302.2z M1582.1,304.5l0.8,1.4l2.3-1.3l-0.8-1.4L1582.1,304.5z M1578,306.9l0.8,1.4l2.3-1.3l-0.8-1.4L1578,306.9z M1593,283.5h1.6v-2.6h-1.6V283.5z M1593,288.3h1.6v-2.6h-1.6V288.3z M1593,293h1.6v-2.6h-1.6V293z M1593,269.4h1.6v-2.6h-1.6V269.4z M1593,274.1h1.6v-2.6h-1.6V274.1z M1593,278.8h1.6v-2.6h-1.6 V278.8z M1593,255.2h1.6v-2.6h-1.6V255.2z M1593,259.9h1.6v-2.6h-1.6V259.9z M1593,264.6h1.6V262h-1.6V264.6z M1592.9,241.1h1.6 v-2.6h-1.6V241.1z M1592.9,245.8h1.6v-2.6h-1.6V245.8z M1593,250.5h1.6v-2.6h-1.6V250.5z M1592.9,226.9h1.6v-2.6h-1.6V226.9z M1592.9,231.6h1.6V229h-1.6V231.6z M1592.9,236.3h1.6v-2.6h-1.6V236.3z M1581.1,211.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1581.1,211.6z M1584.9,214.1l0.9-1.3l-2.1-1.4l-0.9,1.3L1584.9,214.1z M1588.7,216.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1588.7,216.6z M1569.6,204.1 l0.9-1.3l-2.1-1.4l-0.9,1.3L1569.6,204.1z M1573.4,206.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1573.4,206.6z M1577.2,209.1l0.9-1.3 l-2.1-1.4l-0.9,1.3L1577.2,209.1z M1558.1,196.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1558.1,196.6z M1561.9,199.1l0.9-1.3l-2.1-1.4 l-0.9,1.3L1561.9,199.1z M1565.7,201.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1565.7,201.6z M1546.5,189.1l0.9-1.3l-2.1-1.4l-0.9,1.3 L1546.5,189.1z M1550.4,191.6l0.9-1.3l-2.1-1.4l-0.9,1.3L1550.4,191.6z M1554.2,194l0.9-1.3l-2.1-1.4l-0.9,1.3L1554.2,194z M1535,181.5l0.9-1.3l-2.1-1.4l-0.9,1.3L1535,181.5z M1538.8,184l0.9-1.3l-2.1-1.4l-0.9,1.3L1538.8,184z M1542.7,186.5l0.9-1.3 l-2.1-1.4l-0.9,1.3L1542.7,186.5z M1461.1,216.4l0.8,1.3l1.3-0.8l-0.8-1.3L1461.1,216.4z M1459,217.8c0,0,0,0.1,0,0.2 c0,0.1,0,0.3,0,0.5c0,0.4,0,1.5,0,1.5h2c0,0,0-0.9,0-1.1c0-0.1,0-0.1,0-0.2l0,0l0,0l0,0h-0.3h-0.2h-0.1l0.4-0.3l-0.9-1.3 l-1.1,0.8C1458.9,217.7,1459,217.8,1459,217.8z M1458.9,221.9h1.6v-1.5h-1.6V221.9z M1458.7,296.3h1.6v-1.5h-1.6V296.3z M1458.9,298l0.1,0.5c0.1,0.1,0.3,0.5,0.4,0.6c0.3,0.2,0.6,0.5,0.6,0.5l0.8-1.3c0,0-0.1-0.1-0.2-0.1s-0.1-0.1-0.2-0.1V298v-0.4 v-0.5l0,0c0,0,0,0-0.1,0h0.1l0,0h-1.4v1C1459,298,1458.8,298,1458.9,298z M1462.3,301l0.8-1.3l-1.2-0.8l-0.8,1.3L1462.3,301z M1521.4,337.7l0.8-1.3l-1.3-0.8l-0.8,1.3L1521.4,337.7z M1523.9,339.1c0,0,0.1-0.1,0.2-0.1c0.1-0.1,0.3-0.2,0.5-0.3 c0.3-0.2,0.7-0.4,0.7-0.4l-0.8-1.4c0,0-0.1,0.1-0.3,0.2c-0.1,0-0.1,0.1-0.2,0.1l0,0l0,0l0,0l0,0l0,0l0,0l-0.5-0.3l-0.8,1.3 L1523.9,339.1C1523.8,339.2,1523.8,339.2,1523.9,339.1z M1527.6,337l-0.8-1.4l-1.3,0.8l0.8,1.4L1527.6,337z M1591.8,300.3 l-0.8-1.4l-1.3,0.8l0.8,1.4L1591.8,300.3z M1594,298.9c0,0,0-0.1,0-0.2s0-0.3,0-0.5c0-0.4-0.2-0.8-0.2-0.8h-1.8c0,0,0,0.1,0,0.3 c0,0.1,0,0.1,0,0.2l0,0l0,0l0,0h0.3h0.2h0.1l-0.5,0.3l0.9,1.4l1.1-0.8C1594.1,299,1594,298.9,1594,298.9z M1594.1,294.7h-1.6v1.5 h1.6V294.7z M1594.1,221.2h-1.6v1.4h1.6V221.2z M1594,219l-0.1-0.2c-0.1-0.1-0.3-0.2-0.4-0.3c-0.3-0.2-0.6-0.4-0.6-0.4l-0.9,1.3 c0,0,0.1,0.1,0.2,0.1s0.1,0.1,0.2,0.1l0,0v0.2v0.2l0,0c0,0,0,0,0.1,0h-0.5v0.1l1.8,0.1L1594,219C1594.1,219,1594.1,219,1594,219z M1590.8,216.6l-0.9,1.3l1.2,0.8l0.9-1.3L1590.8,216.6z M1530.8,177.3l-0.9,1.3l1.4,0.9l0.9-1.3L1530.8,177.3z M1528.2,175.8 c0,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.3,0.2-0.5,0.3c-0.3,0.2-0.7,0.4-0.7,0.4l0.8,1.3c0,0,0.1-0.1,0.3-0.2c0.1,0,0.1-0.1,0.2-0.1l0,0 l0,0l0,0l0,0l0,0l0,0l0.5,0.4l0.9-1.3L1528.2,175.8C1528.3,175.7,1528.3,175.7,1528.2,175.8z M1524.4,178.1l0.8,1.3l1.4-0.8 l-0.8-1.3L1524.4,178.1z" />
                                </g>
                                <g id="firstBlock">
                                  <linearGradient id="SVGID_49_" x1="1299.6068" x2="1361.6029" y1="-311.3163" y2="-344.4973" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#A91B37" />
                                    <stop offset="0.2857" style="stop-color:#B21F37" />
                                    <stop offset="0.75" style="stop-color:#CA2B38" />
                                    <stop offset="1" style="stop-color:#DA3239" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_49_)" points="1300.9,313.8 1300.9,391.1 1362.9,429 1362.9,355.9 " />
                                  <linearGradient id="SVGID_50_" x1="1372.5" x2="1424.6" y1="-353.6" y2="-301.5" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FF999F" />
                                    <stop offset="0.1701" style="stop-color:#F27B85" />
                                    <stop offset="0.4158" style="stop-color:#E35566" />
                                    <stop offset="0.6441" style="stop-color:#D73A4F" />
                                    <stop offset="0.8458" style="stop-color:#D02A41" />
                                    <stop offset="1" style="stop-color:#CE243C" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_50_)" points="1363,355.9 1363,429 1432,391.1 1432,313.8 " />
                                  <linearGradient id="SVGID_51_" x1="1347.0559" x2="1388.1415" y1="-355.8673" y2="-420.1857" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#E64852" />
                                    <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                    <stop offset="0.6415" style="stop-color:#D42D41" />
                                    <stop offset="1" style="stop-color:#CE243C" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_51_)" points="1300.9,313.8 1362.7,355.9 1431.9,313.9 1367.9,273.3 " />
                                  <g opacity="0.12">
                                    <polygon fill="#FFFFFF" points="1317,325 1317,382.1 1363,410.2 1363,356.1 " />
                                    <polygon fill="#FFFFFF" points="1413,325 1413,382.1 1363,410.2 1363,356.1 " />
                                    <polygon fill="#FFFFFF" points="1316.3,325 1362.9,356.1 1413.7,325 1366.1,295 " />
                                  </g>
                                  <linearGradient id="SVGID_52_" x1="1390.3" x2="1404.4501" y1="-371.4" y2="-357.25" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_52_)" points="1363,355.9 1363,357.4 1431.9,315.3 1431.8,314 " />
                                  <linearGradient id="SVGID_53_" x1="3884.6614" x2="3895.3269" y1="-369.7385" y2="-359.0731" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_53_)" points="1363,355.9 1363,357.4 1301,315.3 1301,313.8 " />
                                  <linearGradient id="SVGID_54_" x1="1345.25" x2="1381.6" y1="-325.4501" y2="-289.0999" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_54_)" points="1364,356.6 1363,356.8 1363,429 1364,428.5 " />
                                </g>
                                <g id="blockdis">
                                  <linearGradient id="SVGID_85_" x1="352.2181" x2="414.9812" y1="250.7917" y2="217.2003" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#A91B37" />
                                    <stop offset="0.2857" style="stop-color:#B21F37" />
                                    <stop offset="0.75" style="stop-color:#CA2B38" />
                                    <stop offset="1" style="stop-color:#DA3239" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_85_)" points="353.4,875.7 353.4,953 416.4,990.9 416.4,917.8 " />
                                  <linearGradient id="SVGID_86_" x1="425.25" x2="476.85" y1="208.55" y2="260.15" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FF999F" />
                                    <stop offset="0.1701" style="stop-color:#F27B85" />
                                    <stop offset="0.4158" style="stop-color:#E35566" />
                                    <stop offset="0.6441" style="stop-color:#D73A4F" />
                                    <stop offset="0.8458" style="stop-color:#D02A41" />
                                    <stop offset="1" style="stop-color:#CE243C" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_86_)" points="416,917.8 416,990.9 484,953 484,875.7 " />
                                  <linearGradient id="SVGID_87_" x1="399.3084" x2="440.5609" y1="206.1853" y2="141.6056" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#E64852" />
                                    <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                    <stop offset="0.6415" style="stop-color:#D42D41" />
                                    <stop offset="1" style="stop-color:#CE243C" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_87_)" points="353.1,875.8 416,918.6 484.4,875.7 420.3,835.1 " />
                                  <g opacity="0.12">
                                    <polygon fill="#FFFFFF" points="370,886.8 370,944 416,972 416,918 " />
                                    <polygon fill="#FFFFFF" points="466,886.8 466,944 416,972 416,918 " />
                                    <polygon fill="#FFFFFF" points="369.8,886.8 416.3,918 467.2,886.8 419.5,856.9 " />
                                  </g>
                                  <linearGradient id="SVGID_88_" x1="443.3097" x2="457.3094" y1="190.4596" y2="204.4595" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_88_)" points="416,917.8 416,919.2 484.7,877.1 484.7,875.8 " />
                                  <linearGradient id="SVGID_89_" x1="4831.9097" x2="4843.0757" y1="191.8594" y2="203.0256" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_89_)" points="416,917.8 416,919.2 353,877.1 353,875.7 " />
                                  <linearGradient id="SVGID_90_" x1="398.7" x2="435.2615" y1="235.8999" y2="272.4615" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                    <stop offset="0.5184" style="stop-color:#FB9C83" />
                                    <stop offset="0.7299" style="stop-color:#F97C5B" />
                                    <stop offset="0.8974" style="stop-color:#F86843" />
                                    <stop offset="1" style="stop-color:#F8613A" />
                                  </linearGradient>
                                  <polygon fill="url(#SVGID_90_)" points="418,917.5 416,918.6 416,990.9 418,989.8 " />
                                </g>
                                <g id="redblocks">
                                  <g>
                                    <linearGradient id="SVGID_49_" x1="1299.6068" x2="1361.6029" y1="-311.3163" y2="-344.4973" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_49_)" points="1300.9,313.8 1300.9,391.1 1362.9,429 1362.9,355.9 " />
                                    <linearGradient id="SVGID_50_" x1="1372.5" x2="1424.6" y1="-353.6" y2="-301.5" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_50_)" points="1363,355.9 1363,429 1432,391.1 1432,313.8 " />
                                    <linearGradient id="SVGID_51_" x1="1347.0559" x2="1388.1415" y1="-355.8673" y2="-420.1857" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_51_)" points="1300.9,313.8 1362.7,355.9 1431.9,313.9 1367.9,273.3 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="1317,325 1317,382.1 1363,410.2 1363,356.1 " />
                                      <polygon fill="#FFFFFF" points="1413,325 1413,382.1 1363,410.2 1363,356.1 " />
                                      <polygon fill="#FFFFFF" points="1316.3,325 1362.9,356.1 1413.7,325 1366.1,295 " />
                                    </g>
                                    <linearGradient id="SVGID_52_" x1="1390.3" x2="1404.4501" y1="-371.4" y2="-357.25" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_52_)" points="1363,355.9 1363,357.4 1431.9,315.3 1431.8,314 " />
                                    <linearGradient id="SVGID_53_" x1="3884.6614" x2="3895.3269" y1="-369.7385" y2="-359.0731" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_53_)" points="1363,355.9 1363,357.4 1301,315.3 1301,313.8 " />
                                    <linearGradient id="SVGID_54_" x1="1345.25" x2="1381.6" y1="-325.4501" y2="-289.0999" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_54_)" points="1364,356.6 1363,356.8 1363,429 1364,428.5 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_55_" x1="1141.6068" x2="1203.6029" y1="-217.3163" y2="-250.4973" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_55_)" points="1142.9,407.8 1142.9,485.1 1204.9,523 1204.9,449.9 " />
                                    <linearGradient id="SVGID_56_" x1="1214.5" x2="1266.6" y1="-259.6" y2="-207.5" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_56_)" points="1205,449.9 1205,523 1274,485.1 1274,407.8 " />
                                    <linearGradient id="SVGID_57_" x1="1189.0559" x2="1230.1415" y1="-261.8673" y2="-326.1857" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_57_)" points="1142.9,407.8 1204.7,449.9 1273.9,407.9 1209.9,367.3 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="1159,419 1159,476.1 1205,504.2 1205,450.1 " />
                                      <polygon fill="#FFFFFF" points="1255,419 1255,476.1 1205,504.2 1205,450.1 " />
                                      <polygon fill="#FFFFFF" points="1158.3,419 1204.9,450.1 1255.7,419 1208.1,389 " />
                                    </g>
                                    <linearGradient id="SVGID_58_" x1="1232.3" x2="1246.4501" y1="-277.4" y2="-263.25" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_58_)" points="1205,449.9 1205,451.4 1273.9,409.3 1273.8,408 " />
                                    <linearGradient id="SVGID_59_" x1="4042.6614" x2="4053.3269" y1="-275.7386" y2="-265.0729" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_59_)" points="1205,449.9 1205,451.4 1143,409.3 1143,407.8 " />
                                    <linearGradient id="SVGID_60_" x1="1187.25" x2="1223.6" y1="-231.4501" y2="-195.0999" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_60_)" points="1206,450.6 1205,450.8 1205,523 1206,522.5 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_61_" x1="980.6068" x2="1042.6029" y1="-123.3163" y2="-156.4973" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_61_)" points="981.9,501.8 981.9,579.1 1043.9,617 1043.9,543.9 " />
                                    <linearGradient id="SVGID_62_" x1="1053.5" x2="1105.6" y1="-165.6" y2="-113.5" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_62_)" points="1044,543.9 1044,617 1113,579.1 1113,501.8 " />
                                    <linearGradient id="SVGID_63_" x1="1028.0559" x2="1069.1415" y1="-167.8673" y2="-232.1857" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_63_)" points="981.9,501.8 1043.7,543.9 1112.9,501.9 1048.9,461.3 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="998,513 998,570.1 1044,598.2 1044,544.1 " />
                                      <polygon fill="#FFFFFF" points="1094,513 1094,570.1 1044,598.2 1044,544.1 " />
                                      <polygon fill="#FFFFFF" points="997.3,513 1043.9,544.1 1094.7,513 1047.1,483 " />
                                    </g>
                                    <linearGradient id="SVGID_64_" x1="1071.3" x2="1085.45" y1="-183.4" y2="-169.25" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_64_)" points="1044,543.9 1044,545.4 1112.9,503.3 1112.8,502 " />
                                    <linearGradient id="SVGID_65_" x1="4203.6616" x2="4214.3271" y1="-181.7386" y2="-171.0729" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_65_)" points="1044,543.9 1044,545.4 982,503.3 982,501.8 " />
                                    <linearGradient id="SVGID_66_" x1="1026.25" x2="1062.6" y1="-137.4501" y2="-101.0999" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_66_)" points="1045,544.6 1044,544.8 1044,617 1045,616.5 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_67_" x1="822.6068" x2="884.603" y1="-29.3163" y2="-62.4973" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_67_)" points="823.9,595.8 823.9,673.1 885.9,711 885.9,637.9 " />
                                    <linearGradient id="SVGID_68_" x1="895.5" x2="947.6" y1="-71.6" y2="-19.5" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_68_)" points="886,637.9 886,711 955,673.1 955,595.8 " />
                                    <linearGradient id="SVGID_69_" x1="870.056" x2="911.1414" y1="-73.8674" y2="-138.1857" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_69_)" points="823.9,595.8 885.7,637.9 954.9,595.9 890.9,555.3 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="840,607 840,664.1 886,692.2 886,638.1 " />
                                      <polygon fill="#FFFFFF" points="936,607 936,664.1 886,692.2 886,638.1 " />
                                      <polygon fill="#FFFFFF" points="839.3,607 885.9,638.1 936.7,607 889.1,577 " />
                                    </g>
                                    <linearGradient id="SVGID_70_" x1="913.3002" x2="927.4498" y1="-89.3999" y2="-75.2501" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_70_)" points="886,637.9 886,639.4 954.9,597.3 954.8,596 " />
                                    <linearGradient id="SVGID_71_" x1="4361.6616" x2="4372.3271" y1="-87.7386" y2="-77.0729" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_71_)" points="886,637.9 886,639.4 824,597.3 824,595.8 " />
                                    <linearGradient id="SVGID_72_" x1="868.25" x2="904.6" y1="-43.4501" y2="-7.0999" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_72_)" points="887,638.6 886,638.8 886,711 887,710.5 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_73_" x1="665.5068" x2="727.5029" y1="64.4837" y2="31.3026" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_73_)" points="666.8,689.6 666.8,766.9 728.8,804.8 728.8,731.7 " />
                                    <linearGradient id="SVGID_74_" x1="738.5" x2="790.6" y1="22.2" y2="74.3" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_74_)" points="729,731.7 729,804.8 798,766.9 798,689.6 " />
                                    <linearGradient id="SVGID_75_" x1="712.8423" x2="753.9279" y1="19.8539" y2="-44.4645" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_75_)" points="666.7,689.5 728.6,731.7 797.7,689.6 733.7,649 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="682,700.7 682,757.9 729,785.9 729,731.9 " />
                                      <polygon fill="#FFFFFF" points="779,700.7 779,757.9 729,785.9 729,731.9 " />
                                      <polygon fill="#FFFFFF" points="682.1,700.7 728.7,731.9 779.5,700.7 731.9,670.8 " />
                                    </g>
                                    <linearGradient id="SVGID_76_" x1="756.335" x2="770.4348" y1="4.3349" y2="18.4348" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_76_)" points="729,731.7 729,733.1 797.9,691 797.8,689.7 " />
                                    <linearGradient id="SVGID_77_" x1="4518.6602" x2="4529.3257" y1="6.0099" y2="16.6755" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_77_)" points="729,731.7 729,733.1 667,691 667,689.6 " />
                                    <linearGradient id="SVGID_78_" x1="711.2" x2="747.55" y1="50.2999" y2="86.6501" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_78_)" points="730,732.4 729,732.5 729,804.8 730,804.2 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_79_" x1="508.3068" x2="570.3029" y1="156.6837" y2="123.5026" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_79_)" points="509.6,781.8 509.6,859.1 571.6,897 571.6,823.9 " />
                                    <linearGradient id="SVGID_80_" x1="581.25" x2="632.85" y1="114.65" y2="166.25" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_80_)" points="572,823.9 572,897 640,859.1 640,781.8 " />
                                    <linearGradient id="SVGID_81_" x1="555.7562" x2="596.8416" y1="112.1323" y2="47.814" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_81_)" points="509.6,781.8 571.4,823.9 640.6,781.9 576.5,741.3 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="526,792.9 526,850.1 572,878.1 572,824.1 " />
                                      <polygon fill="#FFFFFF" points="622,792.9 622,850.1 572,878.1 572,824.1 " />
                                      <polygon fill="#FFFFFF" points="525,792.9 571.5,824.1 622.3,792.9 574.7,763 " />
                                    </g>
                                    <linearGradient id="SVGID_82_" x1="599.35" x2="613.4" y1="96.55" y2="110.6" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_82_)" points="572,823.9 572,825.3 640.8,783.2 640.8,781.9 " />
                                    <linearGradient id="SVGID_83_" x1="4675.6753" x2="4686.3408" y1="98.2252" y2="108.8909" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_83_)" points="572,823.9 572,825.3 510,783.2 510,781.8 " />
                                    <linearGradient id="SVGID_84_" x1="554.5" x2="591.35" y1="142.2999" y2="179.1501" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_84_)" points="574,824.6 572,824.8 572,897 574,896.5 " />
                                  </g>
                                  <g>
                                    <linearGradient id="SVGID_85_" x1="352.2181" x2="414.9812" y1="250.7917" y2="217.2003" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#A91B37" />
                                      <stop offset="0.2857" style="stop-color:#B21F37" />
                                      <stop offset="0.75" style="stop-color:#CA2B38" />
                                      <stop offset="1" style="stop-color:#DA3239" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_85_)" points="353.4,875.7 353.4,953 416.4,990.9 416.4,917.8 " />
                                    <linearGradient id="SVGID_86_" x1="425.25" x2="476.85" y1="208.55" y2="260.15" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FF999F" />
                                      <stop offset="0.1701" style="stop-color:#F27B85" />
                                      <stop offset="0.4158" style="stop-color:#E35566" />
                                      <stop offset="0.6441" style="stop-color:#D73A4F" />
                                      <stop offset="0.8458" style="stop-color:#D02A41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_86_)" points="416,917.8 416,990.9 484,953 484,875.7 " />
                                    <linearGradient id="SVGID_87_" x1="399.3084" x2="440.5609" y1="206.1853" y2="141.6056" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#E64852" />
                                      <stop offset="5.850000e-02" style="stop-color:#E44550" />
                                      <stop offset="0.6415" style="stop-color:#D42D41" />
                                      <stop offset="1" style="stop-color:#CE243C" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_87_)" points="353.1,875.8 416,918.6 484.4,875.7 420.3,835.1 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="370,886.8 370,944 416,972 416,918 " />
                                      <polygon fill="#FFFFFF" points="466,886.8 466,944 416,972 416,918 " />
                                      <polygon fill="#FFFFFF" points="369.8,886.8 416.3,918 467.2,886.8 419.5,856.9 " />
                                    </g>
                                    <linearGradient id="SVGID_88_" x1="443.3097" x2="457.3094" y1="190.4596" y2="204.4595" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_88_)" points="416,917.8 416,919.2 484.7,877.1 484.7,875.8 " />
                                    <linearGradient id="SVGID_89_" x1="4831.9097" x2="4843.0757" y1="191.8594" y2="203.0256" gradientTransform="matrix(-1 0 0 1 5222 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_89_)" points="416,917.8 416,919.2 353,877.1 353,875.7 " />
                                    <linearGradient id="SVGID_90_" x1="398.7" x2="435.2615" y1="235.8999" y2="272.4615" gradientTransform="matrix(1 0 0 1 0 700)" gradientUnits="userSpaceOnUse">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2713" style="stop-color:#FDC8BA" />
                                      <stop offset="0.5184" style="stop-color:#FB9C83" />
                                      <stop offset="0.7299" style="stop-color:#F97C5B" />
                                      <stop offset="0.8974" style="stop-color:#F86843" />
                                      <stop offset="1" style="stop-color:#F8613A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_90_)" points="418,917.5 416,918.6 416,990.9 418,989.8 " />
                                  </g>
                                </g>
                                <g id="bottomgreyblocks" opacity="0.7">
                                  <g>
                                    <linearGradient id="SVGID_99_" gradientUnits="userSpaceOnUse" x1="1381.4531" y1="601.6292" x2="1424.369" y2="624.5983" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#262626" />
                                      <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                      <stop offset="0.7283" style="stop-color:#474747" />
                                      <stop offset="1" style="stop-color:#595959" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_99_)" points="1382.3,546.9 1382.3,599.8 1425.4,625.8 1425.4,575.7 " />
                                    <linearGradient id="SVGID_100_" gradientUnits="userSpaceOnUse" x1="1431.8254" y1="630.7177" x2="1467.5216" y2="595.0216" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.2132" style="stop-color:#969696" />
                                      <stop offset="0.4462" style="stop-color:#717171" />
                                      <stop offset="0.6625" style="stop-color:#565656" />
                                      <stop offset="0.8538" style="stop-color:#464646" />
                                      <stop offset="1" style="stop-color:#404040" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_100_)" points="1425.4,575.7 1425.4,625.8 1472.6,599.9 1472.6,546.9 " />
                                    <linearGradient id="SVGID_101_" gradientUnits="userSpaceOnUse" x1="1414.2559" y1="632.294" x2="1442.4258" y2="676.3935" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.219" style="stop-color:#A2A2A2" />
                                      <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                      <stop offset="0.833" style="stop-color:#636363" />
                                      <stop offset="1" style="stop-color:#5A5A5A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_101_)" points="1382.7,546.8 1425.1,575.7 1472.5,546.9 1428.6,519.1 " />
                                    <g opacity="0.12">
                                      <polygon fill="#FFFFFF" points="1393.3,554.5 1393.3,593.7 1425.4,612.9 1425.4,575.9 " />
                                      <polygon fill="#FFFFFF" points="1459.1,554.5 1459.1,593.7 1425.4,612.9 1425.4,575.9 " />
                                      <polygon fill="#FFFFFF" points="1393.2,554.5 1425.2,575.9 1460,554.5 1427.3,534 " />
                                    </g>
                                    <linearGradient id="SVGID_102_" gradientUnits="userSpaceOnUse" x1="1444.6425" y1="642.9139" x2="1454.1476" y2="633.4088" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_102_)" points="1426,575.7 1426,576.7 1472.9,547.8 1473,547 " />
                                    <linearGradient id="SVGID_103_" gradientUnits="userSpaceOnUse" x1="2313.7791" y1="641.9354" x2="2321.3389" y2="634.3757" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_103_)" points="1426,575.7 1426,576.7 1383,547.8 1383,546.9 " />
                                    <linearGradient id="SVGID_104_" gradientUnits="userSpaceOnUse" x1="1413.178" y1="611.4822" x2="1438.1833" y2="586.4769" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                      <stop offset="0" style="stop-color:#FFF" />
                                      <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                      <stop offset="0.604" style="stop-color:#ABABAB" />
                                      <stop offset="0.8495" style="stop-color:#939393" />
                                      <stop offset="1" style="stop-color:#8A8A8A" />
                                    </linearGradient>
                                    <polygon fill="url(#SVGID_104_)" points="1426.2,576.2 1425.4,576.3 1425.4,625.8 1426.2,625.5 " />
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_105_" gradientUnits="userSpaceOnUse" x1="1223.4641" y1="507.6107" x2="1266.38" y2="530.5798" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_105_)" points="1224.3,640.9 1224.3,693.8 1267.4,719.8 1267.4,669.7 " />
                                      <linearGradient id="SVGID_106_" gradientUnits="userSpaceOnUse" x1="1273.8364" y1="536.6992" x2="1309.5326" y2="501.0031" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_106_)" points="1267.4,669.7 1267.4,719.8 1314.6,693.9 1314.6,640.9 " />
                                      <linearGradient id="SVGID_107_" gradientUnits="userSpaceOnUse" x1="1256.2668" y1="538.2755" x2="1284.4368" y2="582.375" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_107_)" points="1224.7,640.8 1267.1,669.7 1314.5,640.9 1270.6,613.1 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="1235.3,648.5 1235.3,687.7 1267.4,706.9 1267.4,669.9 " />
                                        <polygon fill="#FFFFFF" points="1301.1,648.5 1301.1,687.7 1267.4,706.9 1267.4,669.9 " />
                                        <polygon fill="#FFFFFF" points="1235.2,648.5 1267.2,669.9 1302,648.5 1269.3,628 " />
                                      </g>
                                      <linearGradient id="SVGID_108_" gradientUnits="userSpaceOnUse" x1="1286.6536" y1="548.8954" x2="1296.1586" y2="539.3903" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_108_)" points="1268,669.7 1268,670.7 1314.9,641.8 1315,641 " />
                                      <linearGradient id="SVGID_109_" gradientUnits="userSpaceOnUse" x1="2471.7681" y1="547.9169" x2="2479.3279" y2="540.3572" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_109_)" points="1268,669.7 1268,670.7 1225,641.8 1225,640.9 " />
                                      <linearGradient id="SVGID_110_" gradientUnits="userSpaceOnUse" x1="1255.189" y1="517.4637" x2="1280.1943" y2="492.4585" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_110_)" points="1268.2,670.2 1267.4,670.3 1267.4,719.8 1268.2,719.5 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1314.9" y1="641.1" x2="1406.3" y2="586" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="51" xlink:href="data:image/png;base64,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" transform="matrix(0.9804 0 0 0.9804 1304.2711 607.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_111_" gradientUnits="userSpaceOnUse" x1="2226.3848" y1="-498.6838" x2="2239.2498" y2="-490.5486" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_111_)" points="1322.8,634 1325.4,638.3 1338.4,630 1335.8,625.8 " />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_112_" gradientUnits="userSpaceOnUse" x1="1062.4755" y1="410.5919" x2="1105.3914" y2="433.561" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_112_)" points="1063.3,737.9 1063.3,790.8 1106.4,816.8 1106.4,766.7 " />
                                      <linearGradient id="SVGID_113_" gradientUnits="userSpaceOnUse" x1="1112.8478" y1="439.6804" x2="1148.5438" y2="403.9843" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_113_)" points="1106.4,766.7 1106.4,816.8 1153.6,790.9 1153.6,737.9 " />
                                      <linearGradient id="SVGID_114_" gradientUnits="userSpaceOnUse" x1="1095.2782" y1="441.2566" x2="1123.4481" y2="485.3561" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_114_)" points="1063.7,737.8 1106.1,766.7 1153.5,737.9 1109.6,710.1 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="1074.3,745.5 1074.3,784.7 1106.4,803.9 1106.4,766.9 " />
                                        <polygon fill="#FFFFFF" points="1140.1,745.5 1140.1,784.7 1106.4,803.9 1106.4,766.9 " />
                                        <polygon fill="#FFFFFF" points="1074.2,745.5 1106.2,766.9 1141,745.5 1108.3,725 " />
                                      </g>
                                      <linearGradient id="SVGID_115_" gradientUnits="userSpaceOnUse" x1="1125.6649" y1="451.8765" x2="1135.1699" y2="442.3715" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_115_)" points="1107,766.7 1107,767.7 1153.9,738.8 1154,738 " />
                                      <linearGradient id="SVGID_116_" gradientUnits="userSpaceOnUse" x1="2632.7566" y1="450.8981" x2="2640.3164" y2="443.3383" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_116_)" points="1107,766.7 1107,767.7 1064,738.8 1064,737.9 " />
                                      <linearGradient id="SVGID_117_" gradientUnits="userSpaceOnUse" x1="1094.2003" y1="420.4448" x2="1119.2057" y2="395.4397" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_117_)" points="1107.2,767.2 1106.4,767.3 1106.4,816.8 1107.2,816.5 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1153.9" y1="738.1" x2="1248.3" y2="679.3" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="51" xlink:href="data:image/png;base64,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" transform="matrix(0.9804 0 0 0.9804 1172.2711 685.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_118_" gradientUnits="userSpaceOnUse" x1="2358.3848" y1="-420.6838" x2="2371.2498" y2="-412.5486" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_118_)" points="1190.8,712 1193.4,716.3 1206.4,708 1203.8,703.8 " />
                                      </g>
                                    </g>
                                  </g>
                                  <g>
                                    <g>
                                      <linearGradient id="SVGID_119_" gradientUnits="userSpaceOnUse" x1="905.4864" y1="314.215" x2="948.4024" y2="337.1843" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#262626" />
                                        <stop offset="0.2774" style="stop-color:#2F2F2F" />
                                        <stop offset="0.7283" style="stop-color:#474747" />
                                        <stop offset="1" style="stop-color:#595959" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_119_)" points="906.3,834.2 906.3,887.2 949.4,913.2 949.4,863.1 " />
                                      <linearGradient id="SVGID_120_" gradientUnits="userSpaceOnUse" x1="955.8588" y1="343.3028" x2="991.5549" y2="307.6066" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.2132" style="stop-color:#969696" />
                                        <stop offset="0.4462" style="stop-color:#717171" />
                                        <stop offset="0.6625" style="stop-color:#565656" />
                                        <stop offset="0.8538" style="stop-color:#464646" />
                                        <stop offset="1" style="stop-color:#404040" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_120_)" points="949.4,863.1 949.4,913.2 996.6,887.2 996.6,834.2 " />
                                      <linearGradient id="SVGID_121_" gradientUnits="userSpaceOnUse" x1="938.2895" y1="344.8793" x2="966.4595" y2="388.9789" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_121_)" points="906.7,834.2 949.1,863.1 996.5,834.3 952.6,806.4 " />
                                      <g opacity="0.12">
                                        <polygon fill="#FFFFFF" points="917.3,841.9 917.3,881.1 949.4,900.3 949.4,863.2 " />
                                        <polygon fill="#FFFFFF" points="983.1,841.9 983.1,881.1 949.4,900.3 949.4,863.2 " />
                                        <polygon fill="#FFFFFF" points="917.2,841.9 949.2,863.2 984,841.9 951.3,821.3 " />
                                      </g>
                                      <linearGradient id="SVGID_122_" gradientUnits="userSpaceOnUse" x1="968.6761" y1="355.4992" x2="978.1812" y2="345.994" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_122_)" points="950,863.1 950,864.1 996.9,835.2 997,834.3 " />
                                      <linearGradient id="SVGID_123_" gradientUnits="userSpaceOnUse" x1="2789.7456" y1="354.521" x2="2797.3054" y2="346.9612" gradientTransform="matrix(-1 -1.170540e-04 1.170540e-04 -1 3721.9844 1200.2046)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_123_)" points="950,863.1 950,864.1 907,835.2 907,834.2 " />
                                      <linearGradient id="SVGID_124_" gradientUnits="userSpaceOnUse" x1="937.2116" y1="324.0675" x2="962.2169" y2="299.0622" gradientTransform="matrix(1 1.170540e-04 1.170540e-04 -1 -1.549590e-02 1199.7689)">
                                        <stop offset="0" style="stop-color:#FFF" />
                                        <stop offset="0.2961" style="stop-color:#D3D3D3" />
                                        <stop offset="0.604" style="stop-color:#ABABAB" />
                                        <stop offset="0.8495" style="stop-color:#939393" />
                                        <stop offset="1" style="stop-color:#8A8A8A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_124_)" points="950.2,863.6 949.4,863.7 949.4,913.2 950.2,912.8 " />
                                    </g>
                                    <line fill="none" stroke="#B3B3B3" stroke-width="3.2211" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="996.9" y1="834.5" x2="1082.2" y2="780.9" />
                                    <g>
                                      <image overflow="visible" opacity="0.2" enable-background="new " width="54" height="50" xlink:href="data:image/png;base64,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 CzAAqYTVOPWO2yYAAAAASUVORK5CYII=" transform="matrix(0.98 0 0 0.98 1024.2817 776.2417)"></image>
                                      <g>
                                        <linearGradient id="SVGID_125_" gradientUnits="userSpaceOnUse" x1="2506.385" y1="-330.3252" x2="2519.25" y2="-322.19" gradientTransform="matrix(-1 0 0 1 3563.1868 1126.7981)">
                                          <stop offset="0" style="stop-color:#FFF" />
                                          <stop offset="0.8387" style="stop-color:#FFF;stop-opacity:0" />
                                        </linearGradient>
                                        <polygon fill="url(#SVGID_125_)" points="1042.8,802.4 1045.4,806.6 1058.4,798.4 1055.8,794.2 " />
                                      </g>
                                    </g>
                                  </g>
                                </g>
                                <g>
                                  <circle r="1" style="fill:#fff" opacity="4gf.2">
                                    <animateMotion begin="-200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="4gf.2">
                                    <animateMotion begin="-400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="4gf.2">
                                    <animateMotion begin="-600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="4gf.2">
                                    <animateMotion begin="-800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-1000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-1200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-1400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-1600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-1800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-2000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-2200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-2400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-2600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-2800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-3000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-3200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-3400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-3600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-3800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-4000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-4200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-4400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-4600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-4800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-5000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-5200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-5400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-5600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-5800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-6000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-6200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-6400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-6600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-6800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-7000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-7200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-7400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-7600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-7800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-8000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-8200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-8400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-8600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-8800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-9000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-9200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-9400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-9600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="04gf2">
                                    <animateMotion begin="-9800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-10000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-10200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-10400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-10600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-10800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-11000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-11200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-11400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-11600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-11800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-12000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-12200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-12400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-12600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-12800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-13000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-13200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-13400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-13600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-13800ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-14000ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-14200ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-14400ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                  <circle r="1" style="fill:#fff" opacity="0.4gf">
                                    <animateMotion begin="-14600ms" dur="10s" repeatCount="indefinite">
                                      <mpath xlink:href="#bottomline" />
                                    </animateMotion>
                                  </circle>
                                </g>
                                <g id="bottomblocks" opacity="0.7">
                                  <g>
                                    <g opacity="0.25">
                                      <linearGradient id="SVGID_126_" gradientUnits="userSpaceOnUse" x1="1652.4972" y1="450.1895" x2="1679.3896" y2="464.5827" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#494949" />
                                        <stop offset="0.2255" style="stop-color:#525252" />
                                        <stop offset="0.593" style="stop-color:#6A6A6A" />
                                        <stop offset="1" style="stop-color:#8C8C8C" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_126_)" points="1653,717.7 1653,750.8 1680,767 1680,735.7 " />
                                      <linearGradient id="SVGID_127_" gradientUnits="userSpaceOnUse" x1="1683.9341" y1="468.25" x2="1705.967" y2="446.217" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_127_)" points="1680,735.7 1680,767 1709,750.8 1709,717.7 " />
                                      <linearGradient id="SVGID_128_" gradientUnits="userSpaceOnUse" x1="1673.0768" y1="469.5625" x2="1690.5178" y2="496.8659" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#A6A6A6" />
                                        <stop offset="3.360000e-02" style="stop-color:#A2A2A2" />
                                        <stop offset="0.4566" style="stop-color:#7B7B7B" />
                                        <stop offset="0.7934" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_128_)" points="1653.6,717.7 1680.1,735.7 1708.9,717.7 1682,700.3 " />
                                    </g>
                                    <linearGradient id="SVGID_129_" gradientUnits="userSpaceOnUse" x1="1709.9064" y1="447.7885" x2="1652.8374" y2="483.866" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#3A3C4D" />
                                      <stop offset="0.42" style="stop-color:#3D3F4E" />
                                      <stop offset="0.7058" style="stop-color:#464752" />
                                      <stop offset="0.9509" style="stop-color:#555557" />
                                      <stop offset="1" style="stop-color:#595959" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_129_)" d="M1675.6,703.4l-0.3-0.6l1-0.6l0.3,0.6L1675.6,703.4z M1678.3,701.7l-0.3-0.6l-1,0.6l0.3,0.6 L1678.3,701.7z M1680,700.7l-0.3-0.6l-1,0.6l0.3,0.6L1680,700.7z M1671.3,705.9l-0.3-0.6l-1,0.6l0.3,0.6L1671.3,705.9z M1673.1,704.9l-0.3-0.6l-1,0.6l0.3,0.6L1673.1,704.9z M1674.8,703.8l-0.3-0.6l-1,0.6l0.3,0.6L1674.8,703.8z M1666.1,709.1 l-0.3-0.6l-1,0.6l0.3,0.6L1666.1,709.1z M1667.9,708l-0.3-0.6l-1,0.6l0.3,0.6L1667.9,708z M1669.6,707l-0.3-0.6l-1,0.6l0.3,0.6 L1669.6,707z M1660.9,712.3l-0.3-0.6l-1,0.6l0.3,0.6L1660.9,712.3z M1662.6,711.2l-0.3-0.6l-1,0.6l0.3,0.6L1662.6,711.2z M1664.4,710.2l-0.3-0.6l-1,0.6l0.3,0.6L1664.4,710.2z M1655.7,715.4l-0.3-0.6l-1,0.6l0.3,0.6L1655.7,715.4z M1657.4,714.4 l-0.3-0.6l-1,0.6l0.3,0.6L1657.4,714.4z M1659.2,713.3l-0.3-0.6l-1,0.6l0.3,0.6L1659.2,713.3z M1653.3,723.4h-0.9v1.3h0.9V723.4z M1653.3,721.7h-0.9v0.9h0.9V721.7z M1653.3,719.5h-0.9v0.9h0.9V719.5z M1653.3,729.8h-0.9v0.9h0.9V729.8z M1653.3,727.6h-0.9 v1.3h0.9V727.6z M1653.3,725.5h-0.9v0.9h0.9V725.5z M1653.3,735.8h-0.9v0.9h0.9V735.8z M1653.3,733.6h-0.9v1.3h0.9V733.6z M1653.3,731.9h-0.9v0.9h0.9V731.9z M1653.3,741.8h-0.9v1.3h0.9V741.8z M1653.3,739.6h-0.9v1.3h0.9V739.6z M1653.3,737.5h-0.9 v1.3h0.9V737.5z M1653.3,747.8h-0.9v1.3h0.9V747.8z M1653.3,746.1h-0.9v0.9h0.9V746.1z M1653.3,743.9h-0.9v1.3h0.9V743.9z M1657.9,754.5l-0.4,0.6l0.9,0.6l0.4-0.6L1657.9,754.5z M1656.3,753.4l-0.4,0.6l0.9,0.6l0.4-0.6L1656.3,753.4z M1654.7,752.4 l-0.4,0.6l0.9,0.6l0.4-0.6L1654.7,752.4z M1662.8,757.5l-0.4,0.6l0.9,0.6l0.4-0.6L1662.8,757.5z M1661.2,756.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1661.2,756.5z M1659.6,755.5l-0.4,0.6l0.9,0.6l0.4-0.6L1659.6,755.5z M1667.7,760.5l-0.4,0.6l0.9,0.6l0.4-0.6 L1667.7,760.5z M1666,759.5l-0.4,0.6l0.9,0.6l0.4-0.6L1666,759.5z M1664.4,758.5l-0.4,0.6l0.9,0.6l0.4-0.6L1664.4,758.5z M1672.5,763.5l-0.4,0.6l0.9,0.6l0.4-0.6L1672.5,763.5z M1670.9,762.5l-0.4,0.6l0.9,0.6l0.4-0.6L1670.9,762.5z M1669.3,761.5 l-0.4,0.6l0.9,0.6l0.4-0.6L1669.3,761.5z M1677.4,766.5l-0.4,0.6l0.9,0.6l0.4-0.6L1677.4,766.5z M1675.8,765.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1675.8,765.5z M1674.2,764.5l-0.4,0.6l0.9,0.6l0.4-0.6L1674.2,764.5z M1685.7,765.1l0.3,0.6l1-0.6l-0.3-0.6 L1685.7,765.1z M1684,766.1l0.3,0.6l1-0.6l-0.3-0.6L1684,766.1z M1682.2,767.1l0.3,0.6l1-0.6l-0.3-0.6L1682.2,767.1z M1691,762.1 l0.3,0.6l1-0.6l-0.3-0.6L1691,762.1z M1689.3,763.1l0.3,0.6l1-0.6l-0.3-0.6L1689.3,763.1z M1687.5,764.1l0.3,0.6l1-0.6l-0.3-0.6 L1687.5,764.1z M1696.3,759l0.3,0.6l1-0.6l-0.3-0.6L1696.3,759z M1694.6,760l0.3,0.6l1-0.6l-0.3-0.6L1694.6,760z M1692.8,761 l0.3,0.6l1-0.6l-0.3-0.6L1692.8,761z M1701.6,756l0.3,0.6l1-0.6l-0.3-0.6L1701.6,756z M1699.8,757l0.3,0.6l1-0.6l-0.3-0.6 L1699.8,757z M1698.1,758l0.3,0.6l1-0.6l-0.3-0.6L1698.1,758z M1706.9,753l0.3,0.6l1-0.6l-0.3-0.6L1706.9,753z M1705.1,754 l0.3,0.6l1-0.6l-0.3-0.6L1705.1,754z M1703.4,755l0.3,0.6l1-0.6l-0.3-0.6L1703.4,755z M1709.8,745l0.7,0l0-1.1l-0.7,0L1709.8,745 z M1709.8,747l0.7,0l0-1.1l-0.7,0L1709.8,747z M1709.8,749l0.7,0l0-1.1l-0.7,0L1709.8,749z M1709.8,738.9l0.7,0l0-1.1l-0.7,0 L1709.8,738.9z M1709.8,741l0.7,0l0-1.1l-0.7,0L1709.8,741z M1709.8,743l0.7,0l0-1.1l-0.7,0L1709.8,743z M1709.8,732.9l0.7,0 l0-1.1l-0.7,0L1709.8,732.9z M1709.8,734.9l0.7,0l0-1.1l-0.7,0L1709.8,734.9z M1709.8,736.9l0.7,0l0-1.1l-0.7,0L1709.8,736.9z M1709.8,726.8l0.7,0l0-1.1l-0.7,0L1709.8,726.8z M1709.8,728.8l0.7,0l0-1.1l-0.7,0L1709.8,728.8z M1709.8,730.8l0.7,0l0-1.1 l-0.7,0L1709.8,730.8z M1709.8,720.8l0.7,0l0-1.1l-0.7,0L1709.8,720.8z M1709.8,722.8l0.7,0l0-1.1l-0.7,0L1709.8,722.8z M1709.8,724.8l0.7,0l0-1.1l-0.7,0L1709.8,724.8z M1704.7,714.2l0.4-0.6l-0.9-0.6l-0.4,0.6L1704.7,714.2z M1706.4,715.3l0.4-0.6 l-0.9-0.6l-0.4,0.6L1706.4,715.3z M1708,716.3l0.4-0.6l-0.9-0.6l-0.4,0.6L1708,716.3z M1699.8,711l0.4-0.6l-0.9-0.6l-0.4,0.6 L1699.8,711z M1701.4,712.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1701.4,712.1z M1703.1,713.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1703.1,713.1z M1694.8,707.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1694.8,707.8z M1696.5,708.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1696.5,708.8z M1698.1,709.9 l0.4-0.6l-0.9-0.6l-0.4,0.6L1698.1,709.9z M1689.9,704.6l0.4-0.6l-0.9-0.6l-0.4,0.6L1689.9,704.6z M1691.6,705.6l0.4-0.6 l-0.9-0.6l-0.4,0.6L1691.6,705.6z M1693.2,706.7l0.4-0.6l-0.9-0.6l-0.4,0.6L1693.2,706.7z M1685,701.3l0.4-0.6l-0.9-0.6l-0.4,0.6 L1685,701.3z M1686.6,702.4l0.4-0.6l-0.9-0.6l-0.4,0.6L1686.6,702.4z M1688.3,703.5l0.4-0.6l-0.9-0.6l-0.4,0.6L1688.3,703.5z M1653.3,716.3l0.3,0.6l0.5-0.3l-0.3-0.6L1653.3,716.3z M1652.4,716.9C1652.4,716.9,1652.4,716.9,1652.4,716.9c0,0.1,0,0.2,0,0.3 c0,0.2,0,0.6,0,0.6h0.9c0,0,0-0.4,0-0.5c0,0,0-0.1,0-0.1v0v0v0l-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0l0.2-0.1l-0.4-0.6 L1652.4,716.9C1652.4,716.8,1652.4,716.8,1652.4,716.9z M1652.4,718.6h0.7V718h-0.7V718.6z M1652.3,750.5h0.7v-0.6h-0.7V750.5z M1652.4,751.2c0,0,0,0.2,0.1,0.2c0,0,0.1,0.2,0.2,0.2c0.1,0.1,0.3,0.2,0.3,0.2l0.4-0.6c0,0-0.1,0-0.1-0.1c0,0-0.1,0-0.1-0.1l0,0 l0-0.2l0-0.2h0c0,0,0,0,0,0c0,0,0,0,0,0l0,0h-0.6L1652.4,751.2C1652.4,751.2,1652.4,751.2,1652.4,751.2z M1653.8,752.5l0.4-0.6 l-0.5-0.3l-0.4,0.6L1653.8,752.5z M1679.2,768.2l0.4-0.6l-0.6-0.3l-0.4,0.6L1679.2,768.2z M1680.2,768.8 C1680.2,768.8,1680.3,768.8,1680.2,768.8c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.3-0.2,0.3-0.2l-0.3-0.6c0,0-0.1,0-0.1,0.1 c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.2-0.1l-0.4,0.6L1680.2,768.8 C1680.2,768.8,1680.2,768.8,1680.2,768.8z M1681.8,767.9l-0.3-0.6l-0.6,0.3l0.3,0.6L1681.8,767.9z M1709.3,752.2l-0.3-0.6 l-0.6,0.3l0.3,0.6L1709.3,752.2z M1710.2,751.6C1710.2,751.5,1710.2,751.5,1710.2,751.6c0-0.1,0-0.2,0-0.3c0-0.2-0.1-0.3-0.1-0.3 l-0.8,0c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v0v0v0l0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0l-0.2,0.1l0.4,0.6L1710.2,751.6 C1710.3,751.6,1710.2,751.6,1710.2,751.6z M1710.3,749.8l-0.7,0l0,0.6l0.7,0L1710.3,749.8z M1710.3,718.3l-0.7,0l0,0.6l0.7,0 L1710.3,718.3z M1710.2,717.4C1710.2,717.4,1710.2,717.3,1710.2,717.4c-0.1-0.1-0.2-0.2-0.2-0.2c-0.1-0.1-0.3-0.2-0.3-0.2 l-0.4,0.5c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.1,0l0,0l0,0.1l0,0.1h0c0,0,0,0,0,0c0,0-0.2,0-0.2,0v0.1l0.8,0.1L1710.2,717.4 C1710.3,717.4,1710.3,717.4,1710.2,717.4z M1708.8,716.3l-0.4,0.6l0.5,0.3l0.4-0.6L1708.8,716.3z M1683.2,699.5l-0.4,0.6l0.6,0.4 l0.4-0.6L1683.2,699.5z M1682.1,698.9C1682.1,698.9,1682,698.9,1682.1,698.9c-0.1,0.1-0.2,0.1-0.3,0.2c-0.2,0.1-0.3,0.2-0.3,0.2 l0.3,0.6c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.2,0.2l0.4-0.6L1682.1,698.9 C1682.1,698.8,1682.1,698.8,1682.1,698.9z M1680.4,699.9l0.3,0.6l0.6-0.4l-0.3-0.6L1680.4,699.9z" />
                                  </g>
                                  <g>
                                    <g opacity="0.25">
                                      <linearGradient id="SVGID_130_" gradientUnits="userSpaceOnUse" x1="1495.5022" y1="354.1784" x2="1522.384" y2="368.5924" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#494949" />
                                        <stop offset="0.2255" style="stop-color:#525252" />
                                        <stop offset="0.593" style="stop-color:#6A6A6A" />
                                        <stop offset="1" style="stop-color:#8C8C8C" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_130_)" points="1496,813.7 1496,846.8 1523,863 1523,831.7 " />
                                      <linearGradient id="SVGID_131_" gradientUnits="userSpaceOnUse" x1="1526.934" y1="372.25" x2="1548.967" y2="350.217" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_131_)" points="1523,831.7 1523,863 1552,846.8 1552,813.7 " />
                                      <linearGradient id="SVGID_132_" gradientUnits="userSpaceOnUse" x1="1516.0768" y1="373.5625" x2="1533.5178" y2="400.8659" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#A6A6A6" />
                                        <stop offset="3.360000e-02" style="stop-color:#A2A2A2" />
                                        <stop offset="0.4566" style="stop-color:#7B7B7B" />
                                        <stop offset="0.7934" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_132_)" points="1496.6,813.7 1523.1,831.7 1551.9,813.7 1525,796.3 " />
                                    </g>
                                    <linearGradient id="SVGID_133_" gradientUnits="userSpaceOnUse" x1="1552.9064" y1="351.7885" x2="1495.8374" y2="387.866" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#3A3C4D" />
                                      <stop offset="0.42" style="stop-color:#3D3F4E" />
                                      <stop offset="0.7058" style="stop-color:#464752" />
                                      <stop offset="0.9509" style="stop-color:#555557" />
                                      <stop offset="1" style="stop-color:#595959" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_133_)" d="M1518.6,799.4l-0.3-0.6l1-0.6l0.3,0.6L1518.6,799.4z M1521.3,797.7l-0.3-0.6l-1,0.6l0.3,0.6 L1521.3,797.7z M1523,796.7l-0.3-0.6l-1,0.6l0.3,0.6L1523,796.7z M1514.3,801.9l-0.3-0.6l-1,0.6l0.3,0.6L1514.3,801.9z M1516.1,800.9l-0.3-0.6l-1,0.6l0.3,0.6L1516.1,800.9z M1517.8,799.8l-0.3-0.6l-1,0.6l0.3,0.6L1517.8,799.8z M1509.1,805.1 l-0.3-0.6l-1,0.6l0.3,0.6L1509.1,805.1z M1510.9,804l-0.3-0.6l-1,0.6l0.3,0.6L1510.9,804z M1512.6,803l-0.3-0.6l-1,0.6l0.3,0.6 L1512.6,803z M1503.9,808.3l-0.3-0.6l-1,0.6l0.3,0.6L1503.9,808.3z M1505.6,807.2l-0.3-0.6l-1,0.6l0.3,0.6L1505.6,807.2z M1507.4,806.2l-0.3-0.6l-1,0.6l0.3,0.6L1507.4,806.2z M1498.7,811.4l-0.3-0.6l-1,0.6l0.3,0.6L1498.7,811.4z M1500.4,810.4 l-0.3-0.6l-1,0.6l0.3,0.6L1500.4,810.4z M1502.2,809.3l-0.3-0.6l-1,0.6l0.3,0.6L1502.2,809.3z M1496.3,819.4h-0.9v1.3h0.9V819.4z M1496.3,817.7h-0.9v0.9h0.9V817.7z M1496.3,815.5h-0.9v0.9h0.9V815.5z M1496.3,825.8h-0.9v0.9h0.9V825.8z M1496.3,823.6h-0.9 v1.3h0.9V823.6z M1496.3,821.5h-0.9v0.9h0.9V821.5z M1496.3,831.8h-0.9v0.9h0.9V831.8z M1496.3,829.6h-0.9v1.3h0.9V829.6z M1496.3,827.9h-0.9v0.9h0.9V827.9z M1496.3,837.8h-0.9v1.3h0.9V837.8z M1496.3,835.6h-0.9v1.3h0.9V835.6z M1496.3,833.5h-0.9 v1.3h0.9V833.5z M1496.3,843.8h-0.9v1.3h0.9V843.8z M1496.3,842.1h-0.9v0.9h0.9V842.1z M1496.3,839.9h-0.9v1.3h0.9V839.9z M1500.9,850.5l-0.4,0.6l0.9,0.6l0.4-0.6L1500.9,850.5z M1499.3,849.4l-0.4,0.6l0.9,0.6l0.4-0.6L1499.3,849.4z M1497.7,848.4 l-0.4,0.6l0.9,0.6l0.4-0.6L1497.7,848.4z M1505.8,853.5l-0.4,0.6l0.9,0.6l0.4-0.6L1505.8,853.5z M1504.2,852.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1504.2,852.5z M1502.6,851.5l-0.4,0.6l0.9,0.6l0.4-0.6L1502.6,851.5z M1510.7,856.5l-0.4,0.6l0.9,0.6l0.4-0.6 L1510.7,856.5z M1509,855.5l-0.4,0.6l0.9,0.6l0.4-0.6L1509,855.5z M1507.4,854.5l-0.4,0.6l0.9,0.6l0.4-0.6L1507.4,854.5z M1515.5,859.5l-0.4,0.6l0.9,0.6l0.4-0.6L1515.5,859.5z M1513.9,858.5l-0.4,0.6l0.9,0.6l0.4-0.6L1513.9,858.5z M1512.3,857.5 l-0.4,0.6l0.9,0.6l0.4-0.6L1512.3,857.5z M1520.4,862.5l-0.4,0.6l0.9,0.6l0.4-0.6L1520.4,862.5z M1518.8,861.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1518.8,861.5z M1517.2,860.5l-0.4,0.6l0.9,0.6l0.4-0.6L1517.2,860.5z M1528.7,861.1l0.3,0.6l1-0.6l-0.3-0.6 L1528.7,861.1z M1527,862.1l0.3,0.6l1-0.6l-0.3-0.6L1527,862.1z M1525.2,863.1l0.3,0.6l1-0.6l-0.3-0.6L1525.2,863.1z M1534,858.1 l0.3,0.6l1-0.6l-0.3-0.6L1534,858.1z M1532.3,859.1l0.3,0.6l1-0.6l-0.3-0.6L1532.3,859.1z M1530.5,860.1l0.3,0.6l1-0.6l-0.3-0.6 L1530.5,860.1z M1539.3,855l0.3,0.6l1-0.6l-0.3-0.6L1539.3,855z M1537.6,856l0.3,0.6l1-0.6l-0.3-0.6L1537.6,856z M1535.8,857 l0.3,0.6l1-0.6l-0.3-0.6L1535.8,857z M1544.6,852l0.3,0.6l1-0.6l-0.3-0.6L1544.6,852z M1542.8,853l0.3,0.6l1-0.6l-0.3-0.6 L1542.8,853z M1541.1,854l0.3,0.6l1-0.6l-0.3-0.6L1541.1,854z M1549.9,849l0.3,0.6l1-0.6l-0.3-0.6L1549.9,849z M1548.1,850 l0.3,0.6l1-0.6l-0.3-0.6L1548.1,850z M1546.4,851l0.3,0.6l1-0.6l-0.3-0.6L1546.4,851z M1552.8,841l0.7,0l0-1.1l-0.7,0L1552.8,841 z M1552.8,843l0.7,0l0-1.1l-0.7,0L1552.8,843z M1552.8,845l0.7,0l0-1.1l-0.7,0L1552.8,845z M1552.8,834.9l0.7,0l0-1.1l-0.7,0 L1552.8,834.9z M1552.8,837l0.7,0l0-1.1l-0.7,0L1552.8,837z M1552.8,839l0.7,0l0-1.1l-0.7,0L1552.8,839z M1552.8,828.9l0.7,0 l0-1.1l-0.7,0L1552.8,828.9z M1552.8,830.9l0.7,0l0-1.1l-0.7,0L1552.8,830.9z M1552.8,832.9l0.7,0l0-1.1l-0.7,0L1552.8,832.9z M1552.8,822.8l0.7,0l0-1.1l-0.7,0L1552.8,822.8z M1552.8,824.8l0.7,0l0-1.1l-0.7,0L1552.8,824.8z M1552.8,826.8l0.7,0l0-1.1 l-0.7,0L1552.8,826.8z M1552.8,816.8l0.7,0l0-1.1l-0.7,0L1552.8,816.8z M1552.8,818.8l0.7,0l0-1.1l-0.7,0L1552.8,818.8z M1552.8,820.8l0.7,0l0-1.1l-0.7,0L1552.8,820.8z M1547.7,810.2l0.4-0.6l-0.9-0.6l-0.4,0.6L1547.7,810.2z M1549.4,811.3l0.4-0.6 l-0.9-0.6l-0.4,0.6L1549.4,811.3z M1551,812.3l0.4-0.6l-0.9-0.6l-0.4,0.6L1551,812.3z M1542.8,807l0.4-0.6l-0.9-0.6l-0.4,0.6 L1542.8,807z M1544.4,808.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1544.4,808.1z M1546.1,809.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1546.1,809.1z M1537.8,803.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1537.8,803.8z M1539.5,804.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1539.5,804.8z M1541.1,805.9 l0.4-0.6l-0.9-0.6l-0.4,0.6L1541.1,805.9z M1532.9,800.6l0.4-0.6l-0.9-0.6l-0.4,0.6L1532.9,800.6z M1534.6,801.6l0.4-0.6 l-0.9-0.6l-0.4,0.6L1534.6,801.6z M1536.2,802.7l0.4-0.6l-0.9-0.6l-0.4,0.6L1536.2,802.7z M1528,797.3l0.4-0.6l-0.9-0.6l-0.4,0.6 L1528,797.3z M1529.6,798.4l0.4-0.6l-0.9-0.6l-0.4,0.6L1529.6,798.4z M1531.3,799.5l0.4-0.6l-0.9-0.6l-0.4,0.6L1531.3,799.5z M1496.3,812.3l0.3,0.6l0.5-0.3l-0.3-0.6L1496.3,812.3z M1495.4,812.9C1495.4,812.9,1495.4,812.9,1495.4,812.9c0,0.1,0,0.2,0,0.3 c0,0.2,0,0.6,0,0.6h0.9c0,0,0-0.4,0-0.5c0,0,0-0.1,0-0.1v0v0v0l-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0l0.2-0.1l-0.4-0.6 L1495.4,812.9C1495.4,812.8,1495.4,812.8,1495.4,812.9z M1495.4,814.6h0.7V814h-0.7V814.6z M1495.3,846.5h0.7v-0.6h-0.7V846.5z M1495.4,847.2c0,0,0,0.2,0.1,0.2c0,0,0.1,0.2,0.2,0.2c0.1,0.1,0.3,0.2,0.3,0.2l0.4-0.6c0,0-0.1,0-0.1-0.1c0,0-0.1,0-0.1-0.1l0,0 l0-0.2l0-0.2h0c0,0,0,0,0,0c0,0,0,0,0,0l0,0h-0.6L1495.4,847.2C1495.4,847.2,1495.4,847.2,1495.4,847.2z M1496.8,848.5l0.4-0.6 l-0.5-0.3l-0.4,0.6L1496.8,848.5z M1522.2,864.2l0.4-0.6l-0.6-0.3l-0.4,0.6L1522.2,864.2z M1523.2,864.8 C1523.2,864.8,1523.3,864.8,1523.2,864.8c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.3-0.2,0.3-0.2l-0.3-0.6c0,0-0.1,0-0.1,0.1 c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.2-0.1l-0.4,0.6L1523.2,864.8 C1523.2,864.8,1523.2,864.8,1523.2,864.8z M1524.8,863.9l-0.3-0.6l-0.6,0.3l0.3,0.6L1524.8,863.9z M1552.3,848.2l-0.3-0.6 l-0.6,0.3l0.3,0.6L1552.3,848.2z M1553.2,847.6C1553.2,847.5,1553.2,847.5,1553.2,847.6c0-0.1,0-0.2,0-0.3c0-0.2-0.1-0.3-0.1-0.3 l-0.8,0c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v0v0v0l0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0l-0.2,0.1l0.4,0.6L1553.2,847.6 C1553.3,847.6,1553.2,847.6,1553.2,847.6z M1553.3,845.8l-0.7,0l0,0.6l0.7,0L1553.3,845.8z M1553.3,814.3l-0.7,0l0,0.6l0.7,0 L1553.3,814.3z M1553.2,813.4C1553.2,813.4,1553.2,813.3,1553.2,813.4c-0.1-0.1-0.2-0.2-0.2-0.2c-0.1-0.1-0.3-0.2-0.3-0.2 l-0.4,0.5c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.1,0l0,0l0,0.1l0,0.1h0c0,0,0,0,0,0c0,0-0.2,0-0.2,0v0.1l0.8,0.1L1553.2,813.4 C1553.3,813.4,1553.3,813.4,1553.2,813.4z M1551.8,812.3l-0.4,0.6l0.5,0.3l0.4-0.6L1551.8,812.3z M1526.2,795.5l-0.4,0.6l0.6,0.4 l0.4-0.6L1526.2,795.5z M1525.1,794.9C1525.1,794.9,1525,794.9,1525.1,794.9c-0.1,0.1-0.2,0.1-0.3,0.2c-0.2,0.1-0.3,0.2-0.3,0.2 l0.3,0.6c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.2,0.2l0.4-0.6L1525.1,794.9 C1525.1,794.8,1525.1,794.8,1525.1,794.9z M1523.4,795.9l0.3,0.6l0.6-0.4l-0.3-0.6L1523.4,795.9z" />
                                    <linearGradient id="SVGID_134_" gradientUnits="userSpaceOnUse" x1="1553.097" y1="420.8045" x2="1662.411" y2="420.8045" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.1122" style="stop-color:#AAAAAE" />
                                      <stop offset="0.4064" style="stop-color:#767884" />
                                      <stop offset="0.6631" style="stop-color:#515366" />
                                      <stop offset="0.8695" style="stop-color:#3A3D54" />
                                      <stop offset="1" style="stop-color:#32354D" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_134_)" d="M1591.9,790.2l-0.8-1.2l2.8-1.8l0.8,1.2L1591.9,790.2z M1590.5,791l-0.8-1.2l-2.8,1.8l0.8,1.2 L1590.5,791z M1586.3,793.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1586.3,793.7z M1582.1,796.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1582.1,796.4z M1607.4,780.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1607.4,780.4z M1603.2,783l-0.8-1.2l-2.8,1.8l0.8,1.2L1603.2,783z M1599,785.7 l-0.8-1.2l-2.8,1.8l0.8,1.2L1599,785.7z M1577.9,799.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1577.9,799.1z M1573.8,801.8l-0.8-1.2l-2.8,1.8 l0.8,1.2L1573.8,801.8z M1569.6,804.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1569.6,804.4z M1636.7,761.4l-0.8-1.2l-2.8,1.8l0.8,1.2 L1636.7,761.4z M1632.5,764l-0.8-1.2l-2.8,1.8l0.8,1.2L1632.5,764z M1628.3,766.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1628.3,766.7z M1624.1,769.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1624.1,769.4z M1649.4,753.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1649.4,753.4z M1645.2,756 l-0.8-1.2l-2.8,1.8l0.8,1.2L1645.2,756z M1641,758.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1641,758.7z M1662.4,745.4l-0.8-1.2l-2.8,1.8 l0.8,1.2L1662.4,745.4z M1658.2,748l-0.8-1.2l-2.8,1.8l0.8,1.2L1658.2,748z M1654,750.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1654,750.7z M1619.9,772.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1619.9,772.1z M1615.8,774.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1615.8,774.8z M1611.6,777.4 l-0.8-1.2l-2.8,1.8l0.8,1.2L1611.6,777.4z M1565.4,807.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1565.4,807.1z M1561.2,809.8l-0.8-1.2 l-2.8,1.8l0.8,1.2L1561.2,809.8z M1556.7,812.5l-0.8-1.2l-2.8,1.8l0.8,1.2L1556.7,812.5z" />
                                  </g>
                                  <g>
                                    <g opacity="0.15">
                                      <linearGradient id="SVGID_135_" gradientUnits="userSpaceOnUse" x1="1336.4972" y1="257.1895" x2="1363.3896" y2="271.5827" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#494949" />
                                        <stop offset="0.2255" style="stop-color:#525252" />
                                        <stop offset="0.593" style="stop-color:#6A6A6A" />
                                        <stop offset="1" style="stop-color:#8C8C8C" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_135_)" points="1337,910.7 1337,943.8 1364,960 1364,928.7 " />
                                      <linearGradient id="SVGID_136_" gradientUnits="userSpaceOnUse" x1="1367.9341" y1="275.25" x2="1389.967" y2="253.217" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_136_)" points="1364,928.7 1364,960 1393,943.8 1393,910.7 " />
                                      <linearGradient id="SVGID_137_" gradientUnits="userSpaceOnUse" x1="1357.0768" y1="276.5625" x2="1374.5178" y2="303.8659" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#A6A6A6" />
                                        <stop offset="3.360000e-02" style="stop-color:#A2A2A2" />
                                        <stop offset="0.4566" style="stop-color:#7B7B7B" />
                                        <stop offset="0.7934" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_137_)" points="1337.6,910.7 1364.1,928.7 1392.9,910.7 1366,893.3 " />
                                    </g>
                                    <linearGradient id="SVGID_138_" gradientUnits="userSpaceOnUse" x1="1393.9064" y1="254.7885" x2="1336.8374" y2="290.866" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#3A3C4D" />
                                      <stop offset="0.42" style="stop-color:#3D3F4E" />
                                      <stop offset="0.7058" style="stop-color:#464752" />
                                      <stop offset="0.9509" style="stop-color:#555557" />
                                      <stop offset="1" style="stop-color:#595959" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_138_)" d="M1359.6,896.4l-0.3-0.6l1-0.6l0.3,0.6L1359.6,896.4z M1362.3,894.7l-0.3-0.6l-1,0.6l0.3,0.6 L1362.3,894.7z M1364,893.7l-0.3-0.6l-1,0.6l0.3,0.6L1364,893.7z M1355.3,898.9l-0.3-0.6l-1,0.6l0.3,0.6L1355.3,898.9z M1357.1,897.9l-0.3-0.6l-1,0.6l0.3,0.6L1357.1,897.9z M1358.8,896.8l-0.3-0.6l-1,0.6l0.3,0.6L1358.8,896.8z M1350.1,902.1 l-0.3-0.6l-1,0.6l0.3,0.6L1350.1,902.1z M1351.9,901l-0.3-0.6l-1,0.6l0.3,0.6L1351.9,901z M1353.6,900l-0.3-0.6l-1,0.6l0.3,0.6 L1353.6,900z M1344.9,905.3l-0.3-0.6l-1,0.6l0.3,0.6L1344.9,905.3z M1346.6,904.2l-0.3-0.6l-1,0.6l0.3,0.6L1346.6,904.2z M1348.4,903.2l-0.3-0.6l-1,0.6l0.3,0.6L1348.4,903.2z M1339.7,908.4l-0.3-0.6l-1,0.6l0.3,0.6L1339.7,908.4z M1341.4,907.4 l-0.3-0.6l-1,0.6l0.3,0.6L1341.4,907.4z M1343.2,906.3l-0.3-0.6l-1,0.6l0.3,0.6L1343.2,906.3z M1337.3,916.4h-0.9v1.3h0.9V916.4z M1337.3,914.7h-0.9v0.9h0.9V914.7z M1337.3,912.5h-0.9v0.9h0.9V912.5z M1337.3,922.8h-0.9v0.9h0.9V922.8z M1337.3,920.6h-0.9 v1.3h0.9V920.6z M1337.3,918.5h-0.9v0.9h0.9V918.5z M1337.3,928.8h-0.9v0.9h0.9V928.8z M1337.3,926.6h-0.9v1.3h0.9V926.6z M1337.3,924.9h-0.9v0.9h0.9V924.9z M1337.3,934.8h-0.9v1.3h0.9V934.8z M1337.3,932.6h-0.9v1.3h0.9V932.6z M1337.3,930.5h-0.9 v1.3h0.9V930.5z M1337.3,940.8h-0.9v1.3h0.9V940.8z M1337.3,939.1h-0.9v0.9h0.9V939.1z M1337.3,936.9h-0.9v1.3h0.9V936.9z M1341.9,947.5l-0.4,0.6l0.9,0.6l0.4-0.6L1341.9,947.5z M1340.3,946.4l-0.4,0.6l0.9,0.6l0.4-0.6L1340.3,946.4z M1338.7,945.4 l-0.4,0.6l0.9,0.6l0.4-0.6L1338.7,945.4z M1346.8,950.5l-0.4,0.6l0.9,0.6l0.4-0.6L1346.8,950.5z M1345.2,949.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1345.2,949.5z M1343.6,948.5l-0.4,0.6l0.9,0.6l0.4-0.6L1343.6,948.5z M1351.7,953.5l-0.4,0.6l0.9,0.6l0.4-0.6 L1351.7,953.5z M1350,952.5l-0.4,0.6l0.9,0.6l0.4-0.6L1350,952.5z M1348.4,951.5l-0.4,0.6l0.9,0.6l0.4-0.6L1348.4,951.5z M1356.5,956.5l-0.4,0.6l0.9,0.6l0.4-0.6L1356.5,956.5z M1354.9,955.5l-0.4,0.6l0.9,0.6l0.4-0.6L1354.9,955.5z M1353.3,954.5 l-0.4,0.6l0.9,0.6l0.4-0.6L1353.3,954.5z M1361.4,959.5l-0.4,0.6l0.9,0.6l0.4-0.6L1361.4,959.5z M1359.8,958.5l-0.4,0.6l0.9,0.6 l0.4-0.6L1359.8,958.5z M1358.2,957.5l-0.4,0.6l0.9,0.6l0.4-0.6L1358.2,957.5z M1369.7,958.1l0.3,0.6l1-0.6l-0.3-0.6 L1369.7,958.1z M1368,959.1l0.3,0.6l1-0.6l-0.3-0.6L1368,959.1z M1366.2,960.1l0.3,0.6l1-0.6l-0.3-0.6L1366.2,960.1z M1375,955.1 l0.3,0.6l1-0.6l-0.3-0.6L1375,955.1z M1373.3,956.1l0.3,0.6l1-0.6l-0.3-0.6L1373.3,956.1z M1371.5,957.1l0.3,0.6l1-0.6l-0.3-0.6 L1371.5,957.1z M1380.3,952l0.3,0.6l1-0.6l-0.3-0.6L1380.3,952z M1378.6,953l0.3,0.6l1-0.6l-0.3-0.6L1378.6,953z M1376.8,954 l0.3,0.6l1-0.6l-0.3-0.6L1376.8,954z M1385.6,949l0.3,0.6l1-0.6l-0.3-0.6L1385.6,949z M1383.8,950l0.3,0.6l1-0.6l-0.3-0.6 L1383.8,950z M1382.1,951l0.3,0.6l1-0.6l-0.3-0.6L1382.1,951z M1390.9,946l0.3,0.6l1-0.6l-0.3-0.6L1390.9,946z M1389.1,947 l0.3,0.6l1-0.6l-0.3-0.6L1389.1,947z M1387.4,948l0.3,0.6l1-0.6l-0.3-0.6L1387.4,948z M1393.8,938l0.7,0l0-1.1l-0.7,0L1393.8,938 z M1393.8,940l0.7,0l0-1.1l-0.7,0L1393.8,940z M1393.8,942l0.7,0l0-1.1l-0.7,0L1393.8,942z M1393.8,931.9l0.7,0l0-1.1l-0.7,0 L1393.8,931.9z M1393.8,934l0.7,0l0-1.1l-0.7,0L1393.8,934z M1393.8,936l0.7,0l0-1.1l-0.7,0L1393.8,936z M1393.8,925.9l0.7,0 l0-1.1l-0.7,0L1393.8,925.9z M1393.8,927.9l0.7,0l0-1.1l-0.7,0L1393.8,927.9z M1393.8,929.9l0.7,0l0-1.1l-0.7,0L1393.8,929.9z M1393.8,919.8l0.7,0l0-1.1l-0.7,0L1393.8,919.8z M1393.8,921.8l0.7,0l0-1.1l-0.7,0L1393.8,921.8z M1393.8,923.8l0.7,0l0-1.1 l-0.7,0L1393.8,923.8z M1393.8,913.8l0.7,0l0-1.1l-0.7,0L1393.8,913.8z M1393.8,915.8l0.7,0l0-1.1l-0.7,0L1393.8,915.8z M1393.8,917.8l0.7,0l0-1.1l-0.7,0L1393.8,917.8z M1388.7,907.2l0.4-0.6l-0.9-0.6l-0.4,0.6L1388.7,907.2z M1390.4,908.3l0.4-0.6 l-0.9-0.6l-0.4,0.6L1390.4,908.3z M1392,909.3l0.4-0.6l-0.9-0.6l-0.4,0.6L1392,909.3z M1383.8,904l0.4-0.6l-0.9-0.6l-0.4,0.6 L1383.8,904z M1385.4,905.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1385.4,905.1z M1387.1,906.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1387.1,906.1z M1378.8,900.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1378.8,900.8z M1380.5,901.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1380.5,901.8z M1382.1,902.9 l0.4-0.6l-0.9-0.6l-0.4,0.6L1382.1,902.9z M1373.9,897.6l0.4-0.6l-0.9-0.6l-0.4,0.6L1373.9,897.6z M1375.6,898.6l0.4-0.6 l-0.9-0.6l-0.4,0.6L1375.6,898.6z M1377.2,899.7l0.4-0.6l-0.9-0.6l-0.4,0.6L1377.2,899.7z M1369,894.3l0.4-0.6l-0.9-0.6l-0.4,0.6 L1369,894.3z M1370.6,895.4l0.4-0.6l-0.9-0.6l-0.4,0.6L1370.6,895.4z M1372.3,896.5l0.4-0.6l-0.9-0.6l-0.4,0.6L1372.3,896.5z M1337.3,909.3l0.3,0.6l0.5-0.3l-0.3-0.6L1337.3,909.3z M1336.4,909.9C1336.4,909.9,1336.4,909.9,1336.4,909.9c0,0.1,0,0.2,0,0.3 c0,0.2,0,0.6,0,0.6h0.9c0,0,0-0.4,0-0.5c0,0,0-0.1,0-0.1v0v0v0l-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0l0.2-0.1l-0.4-0.6 L1336.4,909.9C1336.4,909.8,1336.4,909.8,1336.4,909.9z M1336.4,911.6h0.7V911h-0.7V911.6z M1336.3,943.5h0.7v-0.6h-0.7V943.5z M1336.4,944.2c0,0,0,0.2,0.1,0.2c0,0,0.1,0.2,0.2,0.2c0.1,0.1,0.3,0.2,0.3,0.2l0.4-0.6c0,0-0.1,0-0.1-0.1c0,0-0.1,0-0.1-0.1l0,0 l0-0.2l0-0.2h0c0,0,0,0,0,0c0,0,0,0,0,0l0,0h-0.6L1336.4,944.2C1336.4,944.2,1336.4,944.2,1336.4,944.2z M1337.8,945.5l0.4-0.6 l-0.5-0.3l-0.4,0.6L1337.8,945.5z M1363.2,961.2l0.4-0.6l-0.6-0.3l-0.4,0.6L1363.2,961.2z M1364.2,961.8 C1364.2,961.8,1364.3,961.8,1364.2,961.8c0.1-0.1,0.2-0.1,0.3-0.1c0.1-0.1,0.3-0.2,0.3-0.2l-0.3-0.6c0,0-0.1,0-0.1,0.1 c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l-0.2-0.1l-0.4,0.6L1364.2,961.8 C1364.2,961.8,1364.2,961.8,1364.2,961.8z M1365.8,960.9l-0.3-0.6l-0.6,0.3l0.3,0.6L1365.8,960.9z M1393.3,945.2l-0.3-0.6 l-0.6,0.3l0.3,0.6L1393.3,945.2z M1394.2,944.6C1394.2,944.5,1394.2,944.5,1394.2,944.6c0-0.1,0-0.2,0-0.3c0-0.2-0.1-0.3-0.1-0.3 l-0.8,0c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v0v0v0l0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0l-0.2,0.1l0.4,0.6L1394.2,944.6 C1394.3,944.6,1394.2,944.6,1394.2,944.6z M1394.3,942.8l-0.7,0l0,0.6l0.7,0L1394.3,942.8z M1394.3,911.3l-0.7,0l0,0.6l0.7,0 L1394.3,911.3z M1394.2,910.4C1394.2,910.4,1394.2,910.3,1394.2,910.4c-0.1-0.1-0.2-0.2-0.2-0.2c-0.1-0.1-0.3-0.2-0.3-0.2 l-0.4,0.5c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.1,0l0,0l0,0.1l0,0.1h0c0,0,0,0,0,0c0,0-0.2,0-0.2,0v0.1l0.8,0.1L1394.2,910.4 C1394.3,910.4,1394.3,910.4,1394.2,910.4z M1392.8,909.3l-0.4,0.6l0.5,0.3l0.4-0.6L1392.8,909.3z M1367.2,892.5l-0.4,0.6l0.6,0.4 l0.4-0.6L1367.2,892.5z M1366.1,891.9C1366.1,891.9,1366,891.9,1366.1,891.9c-0.1,0.1-0.2,0.1-0.3,0.2c-0.2,0.1-0.3,0.2-0.3,0.2 l0.3,0.6c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.2,0.2l0.4-0.6L1366.1,891.9 C1366.1,891.8,1366.1,891.8,1366.1,891.9z M1364.4,892.9l0.3,0.6l0.6-0.4l-0.3-0.6L1364.4,892.9z" />
                                    <linearGradient id="SVGID_139_" gradientUnits="userSpaceOnUse" x1="1394.097" y1="323.8045" x2="1503.411" y2="323.8045" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.1122" style="stop-color:#AAAAAE" />
                                      <stop offset="0.4064" style="stop-color:#767884" />
                                      <stop offset="0.6631" style="stop-color:#515366" />
                                      <stop offset="0.8695" style="stop-color:#3A3D54" />
                                      <stop offset="1" style="stop-color:#32354D" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_139_)" d="M1432.9,887.2l-0.8-1.2l2.8-1.8l0.8,1.2L1432.9,887.2z M1431.5,888l-0.8-1.2l-2.8,1.8l0.8,1.2 L1431.5,888z M1427.3,890.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1427.3,890.7z M1423.1,893.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1423.1,893.4z M1448.4,877.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1448.4,877.4z M1444.2,880l-0.8-1.2l-2.8,1.8l0.8,1.2L1444.2,880z M1440,882.7 l-0.8-1.2l-2.8,1.8l0.8,1.2L1440,882.7z M1418.9,896.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1418.9,896.1z M1414.8,898.8l-0.8-1.2l-2.8,1.8 l0.8,1.2L1414.8,898.8z M1410.6,901.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1410.6,901.4z M1477.7,858.4l-0.8-1.2l-2.8,1.8l0.8,1.2 L1477.7,858.4z M1473.5,861l-0.8-1.2l-2.8,1.8l0.8,1.2L1473.5,861z M1469.3,863.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1469.3,863.7z M1465.1,866.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1465.1,866.4z M1490.4,850.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1490.4,850.4z M1486.2,853 l-0.8-1.2l-2.8,1.8l0.8,1.2L1486.2,853z M1482,855.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1482,855.7z M1503.4,842.4l-0.8-1.2l-2.8,1.8 l0.8,1.2L1503.4,842.4z M1499.2,845l-0.8-1.2l-2.8,1.8l0.8,1.2L1499.2,845z M1495,847.7l-0.8-1.2l-2.8,1.8l0.8,1.2L1495,847.7z M1460.9,869.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1460.9,869.1z M1456.8,871.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1456.8,871.8z M1452.6,874.4 l-0.8-1.2l-2.8,1.8l0.8,1.2L1452.6,874.4z M1406.4,904.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1406.4,904.1z M1402.2,906.8l-0.8-1.2 l-2.8,1.8l0.8,1.2L1402.2,906.8z M1397.7,909.5l-0.8-1.2l-2.8,1.8l0.8,1.2L1397.7,909.5z" />
                                  </g>
                                  <g>
                                    <g opacity="0.25">
                                      <linearGradient id="SVGID_140_" gradientUnits="userSpaceOnUse" x1="1177.757" y1="159.506" x2="1204.4315" y2="173.7825" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#494949" />
                                        <stop offset="0.2255" style="stop-color:#525252" />
                                        <stop offset="0.593" style="stop-color:#6A6A6A" />
                                        <stop offset="1" style="stop-color:#8C8C8C" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_140_)" points="1178.5,1008.3 1178.4,1041.7 1205,1057.7 1205,1026.4 " />
                                      <linearGradient id="SVGID_141_" gradientUnits="userSpaceOnUse" x1="1208.9335" y1="177.5215" x2="1230.967" y2="155.488" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#BFBFBF" />
                                        <stop offset="0.219" style="stop-color:#A2A2A2" />
                                        <stop offset="0.5607" style="stop-color:#7B7B7B" />
                                        <stop offset="0.833" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_141_)" points="1205,1026.4 1205,1057.7 1234,1041.5 1234,1008.4 " />
                                      <linearGradient id="SVGID_142_" gradientUnits="userSpaceOnUse" x1="1197.9689" y1="178.8337" x2="1215.4098" y2="206.1371" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                        <stop offset="0" style="stop-color:#A6A6A6" />
                                        <stop offset="3.360000e-02" style="stop-color:#A2A2A2" />
                                        <stop offset="0.4566" style="stop-color:#7B7B7B" />
                                        <stop offset="0.7934" style="stop-color:#636363" />
                                        <stop offset="1" style="stop-color:#5A5A5A" />
                                      </linearGradient>
                                      <polygon fill="url(#SVGID_142_)" points="1178.5,1008.4 1205,1026.4 1233.8,1008.4 1206.9,991 " />
                                    </g>
                                    <linearGradient id="SVGID_143_" gradientUnits="userSpaceOnUse" x1="1234.4193" y1="157.2996" x2="1178.0508" y2="192.9343" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#595959" />
                                      <stop offset="4.910000e-02" style="stop-color:#555557" />
                                      <stop offset="0.2942" style="stop-color:#464752" />
                                      <stop offset="0.58" style="stop-color:#3D3F4E" />
                                      <stop offset="1" style="stop-color:#3A3C4D" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_143_)" d="M1200.5,994.1l-0.3-0.6l1-0.6l0.3,0.6L1200.5,994.1z M1203.2,992.5l-0.3-0.6l-1,0.6l0.3,0.6 L1203.2,992.5z M1204.9,991.4l-0.3-0.6l-1,0.6l0.3,0.6L1204.9,991.4z M1196.2,996.7l-0.3-0.6l-1,0.6l0.3,0.6L1196.2,996.7z M1198,995.6l-0.3-0.6l-1,0.6l0.3,0.6L1198,995.6z M1199.7,994.6l-0.3-0.6l-1,0.6l0.3,0.6L1199.7,994.6z M1191,999.8l-0.3-0.6 l-1,0.6l0.3,0.6L1191,999.8z M1192.7,998.8l-0.3-0.6l-1,0.6l0.3,0.6L1192.7,998.8z M1194.5,997.7l-0.3-0.6l-1,0.6l0.3,0.6 L1194.5,997.7z M1185.8,1003l-0.3-0.6l-1,0.6l0.3,0.6L1185.8,1003z M1187.5,1001.9l-0.3-0.6l-1,0.6l0.3,0.6L1187.5,1001.9z M1189.3,1000.9l-0.3-0.6l-1,0.6l0.3,0.6L1189.3,1000.9z M1180.6,1006.1l-0.3-0.6l-1,0.6l0.3,0.6L1180.6,1006.1z M1182.3,1005.1 l-0.3-0.6l-1,0.6l0.3,0.6L1182.3,1005.1z M1184.1,1004l-0.3-0.6l-1,0.6l0.3,0.6L1184.1,1004z M1178.2,1014.1h-0.9v1.3h0.9V1014.1 z M1178.2,1012.4h-0.9v0.9h0.9V1012.4z M1178.2,1010.2h-0.9v0.9h0.9V1010.2z M1178.2,1020.5h-0.9v0.9h0.9V1020.5z M1178.2,1018.4 h-0.9v1.3h0.9V1018.4z M1178.2,1016.2h-0.9v0.9h0.9V1016.2z M1178.2,1026.5h-0.9v0.9h0.9V1026.5z M1178.2,1024.4h-0.9v1.3h0.9 V1024.4z M1178.2,1022.7h-0.9v0.9h0.9V1022.7z M1178.2,1032.5h-0.9v1.3h0.9V1032.5z M1178.2,1030.4h-0.9v1.3h0.9V1030.4z M1178.2,1028.2h-0.9v1.3h0.9V1028.2z M1178.2,1038.5h-0.9v1.3h0.9V1038.5z M1178.2,1036.8h-0.9v0.9h0.9V1036.8z M1178.2,1034.6 h-0.9v1.3h0.9V1034.6z M1182.8,1045.2l-0.4,0.6l0.9,0.6l0.4-0.6L1182.8,1045.2z M1181.2,1044.2l-0.4,0.6l0.9,0.6l0.4-0.6 L1181.2,1044.2z M1179.6,1043.2l-0.4,0.6l0.9,0.6l0.4-0.6L1179.6,1043.2z M1187.7,1048.2l-0.4,0.6l0.9,0.6l0.4-0.6L1187.7,1048.2 z M1186.1,1047.2l-0.4,0.6l0.9,0.6l0.4-0.6L1186.1,1047.2z M1184.5,1046.2l-0.4,0.6l0.9,0.6l0.4-0.6L1184.5,1046.2z M1192.6,1051.2l-0.4,0.6l0.9,0.6l0.4-0.6L1192.6,1051.2z M1190.9,1050.2l-0.4,0.6l0.9,0.6l0.4-0.6L1190.9,1050.2z M1189.3,1049.2l-0.4,0.6l0.9,0.6l0.4-0.6L1189.3,1049.2z M1197.4,1054.2l-0.4,0.6l0.9,0.6l0.4-0.6L1197.4,1054.2z M1195.8,1053.2l-0.4,0.6l0.9,0.6l0.4-0.6L1195.8,1053.2z M1194.2,1052.2l-0.4,0.6l0.9,0.6l0.4-0.6L1194.2,1052.2z M1202.3,1057.2l-0.4,0.6l0.9,0.6l0.4-0.6L1202.3,1057.2z M1200.7,1056.2l-0.4,0.6l0.9,0.6l0.4-0.6L1200.7,1056.2z M1199,1055.2 l-0.4,0.6l0.9,0.6l0.4-0.6L1199,1055.2z M1210.6,1055.8l0.3,0.6l1-0.6l-0.3-0.6L1210.6,1055.8z M1208.9,1056.8l0.3,0.6l1-0.6 l-0.3-0.6L1208.9,1056.8z M1207.1,1057.8l0.3,0.6l1-0.6l-0.3-0.6L1207.1,1057.8z M1215.9,1052.8l0.3,0.6l1-0.6l-0.3-0.6 L1215.9,1052.8z M1214.2,1053.8l0.3,0.6l1-0.6l-0.3-0.6L1214.2,1053.8z M1212.4,1054.8l0.3,0.6l1-0.6l-0.3-0.6L1212.4,1054.8z M1221.2,1049.8l0.3,0.6l1-0.6l-0.3-0.6L1221.2,1049.8z M1219.4,1050.8l0.3,0.6l1-0.6l-0.3-0.6L1219.4,1050.8z M1217.7,1051.8 l0.3,0.6l1-0.6l-0.3-0.6L1217.7,1051.8z M1226.5,1046.7l0.3,0.6l1-0.6l-0.3-0.6L1226.5,1046.7z M1224.7,1047.7l0.3,0.6l1-0.6 l-0.3-0.6L1224.7,1047.7z M1223,1048.7l0.3,0.6l1-0.6l-0.3-0.6L1223,1048.7z M1231.8,1043.7l0.3,0.6l1-0.6l-0.3-0.6 L1231.8,1043.7z M1230,1044.7l0.3,0.6l1-0.6l-0.3-0.6L1230,1044.7z M1228.3,1045.7l0.3,0.6l1-0.6l-0.3-0.6L1228.3,1045.7z M1234.7,1035.7l0.7,0l0-1.1l-0.7,0L1234.7,1035.7z M1234.7,1037.7l0.7,0l0-1.1l-0.7,0L1234.7,1037.7z M1234.7,1039.8l0.7,0 l0-1.1l-0.7,0L1234.7,1039.8z M1234.7,1029.7l0.7,0l0-1.1l-0.7,0L1234.7,1029.7z M1234.7,1031.7l0.7,0l0-1.1l-0.7,0 L1234.7,1031.7z M1234.7,1033.7l0.7,0l0-1.1l-0.7,0L1234.7,1033.7z M1234.7,1023.6l0.7,0l0-1.1l-0.7,0L1234.7,1023.6z M1234.7,1025.6l0.7,0l0-1.1l-0.7,0L1234.7,1025.6z M1234.7,1027.6l0.7,0l0-1.1l-0.7,0L1234.7,1027.6z M1234.7,1017.5l0.7,0 l0-1.1l-0.7,0L1234.7,1017.5z M1234.7,1019.6l0.7,0l0-1.1l-0.7,0L1234.7,1019.6z M1234.7,1021.6l0.7,0l0-1.1l-0.7,0 L1234.7,1021.6z M1234.7,1011.5l0.7,0l0-1.1l-0.7,0L1234.7,1011.5z M1234.7,1013.5l0.7,0l0-1.1l-0.7,0L1234.7,1013.5z M1234.7,1015.5l0.7,0l0-1.1l-0.7,0L1234.7,1015.5z M1229.6,1004.9l0.4-0.6l-0.9-0.6l-0.4,0.6L1229.6,1004.9z M1231.2,1006 l0.4-0.6l-0.9-0.6l-0.4,0.6L1231.2,1006z M1232.9,1007.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1232.9,1007.1z M1224.7,1001.7l0.4-0.6 l-0.9-0.6l-0.4,0.6L1224.7,1001.7z M1226.3,1002.8l0.4-0.6l-0.9-0.6l-0.4,0.6L1226.3,1002.8z M1227.9,1003.9l0.4-0.6l-0.9-0.6 l-0.4,0.6L1227.9,1003.9z M1219.7,998.5l0.4-0.6l-0.9-0.6l-0.4,0.6L1219.7,998.5z M1221.4,999.6l0.4-0.6l-0.9-0.6l-0.4,0.6 L1221.4,999.6z M1223,1000.6l0.4-0.6l-0.9-0.6l-0.4,0.6L1223,1000.6z M1214.8,995.3l0.4-0.6l-0.9-0.6l-0.4,0.6L1214.8,995.3z M1216.4,996.4l0.4-0.6l-0.9-0.6l-0.4,0.6L1216.4,996.4z M1218.1,997.4l0.4-0.6l-0.9-0.6l-0.4,0.6L1218.1,997.4z M1209.9,992.1 l0.4-0.6l-0.9-0.6l-0.4,0.6L1209.9,992.1z M1211.5,993.1l0.4-0.6l-0.9-0.6l-0.4,0.6L1211.5,993.1z M1213.2,994.2l0.4-0.6 l-0.9-0.6l-0.4,0.6L1213.2,994.2z M1178.2,1007l0.3,0.6l0.5-0.3l-0.3-0.6L1178.2,1007z M1177.3,1007.6 C1177.3,1007.6,1177.3,1007.6,1177.3,1007.6c0,0.1,0,0.2,0,0.3c0,0.2,0,0.6,0,0.6h0.9c0,0,0-0.4,0-0.5c0,0,0-0.1,0-0.1v0v0v0 l-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0l0.2-0.1l-0.4-0.6L1177.3,1007.6C1177.3,1007.6,1177.3,1007.6,1177.3,1007.6z M1177.3,1009.3 h0.7v-0.6h-0.7V1009.3z M1177.2,1041.2h0.7v-0.6h-0.7V1041.2z M1177.3,1041.9c0,0,0,0.2,0.1,0.2c0,0,0.1,0.2,0.2,0.2 c0.1,0.1,0.3,0.2,0.3,0.2l0.4-0.6c0,0-0.1,0-0.1-0.1c0,0-0.1,0-0.1-0.1l0,0l0-0.2l0-0.2h0c0,0,0,0,0,0c0,0,0,0,0,0l0,0h-0.6 L1177.3,1041.9C1177.3,1041.9,1177.2,1041.9,1177.3,1041.9z M1178.7,1043.2l0.4-0.6l-0.5-0.3l-0.4,0.6L1178.7,1043.2z M1204.1,1058.9l0.4-0.6l-0.6-0.3l-0.4,0.6L1204.1,1058.9z M1205.1,1059.5C1205.1,1059.5,1205.1,1059.5,1205.1,1059.5 c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.3-0.2,0.3-0.2l-0.3-0.6c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0 c0,0,0,0,0,0l-0.2-0.1l-0.4,0.6L1205.1,1059.5C1205.1,1059.6,1205.1,1059.5,1205.1,1059.5z M1206.7,1058.6l-0.3-0.6l-0.6,0.3 l0.3,0.6L1206.7,1058.6z M1234.2,1042.9l-0.3-0.6l-0.6,0.3l0.3,0.6L1234.2,1042.9z M1235.1,1042.3 C1235.1,1042.3,1235.1,1042.3,1235.1,1042.3c0-0.1,0-0.2,0-0.3c0-0.2-0.1-0.3-0.1-0.3l-0.8,0c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v0 v0v0l0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0l-0.2,0.1l0.4,0.6L1235.1,1042.3C1235.2,1042.3,1235.1,1042.3,1235.1,1042.3z M1235.2,1040.5l-0.7,0l0,0.6l0.7,0L1235.2,1040.5z M1235.2,1009.1l-0.7,0l0,0.6l0.7,0L1235.2,1009.1z M1235.1,1008.1 C1235.1,1008.1,1235.1,1008,1235.1,1008.1c-0.1-0.1-0.2-0.2-0.2-0.2c-0.1-0.1-0.3-0.2-0.3-0.2l-0.4,0.5c0,0,0.1,0,0.1,0.1 c0,0,0.1,0,0.1,0l0,0l0,0.1l0,0.1h0c0,0,0,0,0,0c0,0-0.2,0-0.2,0v0.1l0.8,0.1L1235.1,1008.1 C1235.2,1008.1,1235.2,1008.1,1235.1,1008.1z M1233.7,1007.1l-0.4,0.6l0.5,0.3l0.4-0.6L1233.7,1007.1z M1208.1,990.3l-0.4,0.6 l0.6,0.4l0.4-0.6L1208.1,990.3z M1207,989.6C1207,989.6,1206.9,989.6,1207,989.6c-0.1,0.1-0.2,0.1-0.3,0.2 c-0.2,0.1-0.3,0.2-0.3,0.2l0.3,0.6c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.2,0.2l0.4-0.6 L1207,989.6C1207,989.6,1207,989.6,1207,989.6z M1205.3,990.6l0.3,0.6l0.6-0.4l-0.3-0.6L1205.3,990.6z" />
                                    <linearGradient id="SVGID_144_" gradientUnits="userSpaceOnUse" x1="1234.6152" y1="190.7464" x2="1343.2386" y2="260.4814" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                      <stop offset="0" style="stop-color:#BFBFBF" />
                                      <stop offset="0.1122" style="stop-color:#AAAAAE" />
                                      <stop offset="0.4064" style="stop-color:#767884" />
                                      <stop offset="0.6631" style="stop-color:#515366" />
                                      <stop offset="0.8695" style="stop-color:#3A3D54" />
                                      <stop offset="1" style="stop-color:#32354D" />
                                    </linearGradient>
                                    <path fill="url(#SVGID_144_)" d="M1273.8,984.9l-0.8-1.2l2.8-1.8l0.8,1.2L1273.8,984.9z M1272.4,985.8l-0.8-1.2l-2.8,1.8l0.8,1.2 L1272.4,985.8z M1268.2,988.5l-0.8-1.2l-2.8,1.8l0.8,1.2L1268.2,988.5z M1264,991.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1264,991.1z M1289.3,975.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1289.3,975.1z M1285.1,977.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1285.1,977.8z M1280.9,980.4 l-0.8-1.2l-2.8,1.8l0.8,1.2L1280.9,980.4z M1259.8,993.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1259.8,993.8z M1255.6,996.5l-0.8-1.2 l-2.8,1.8l0.8,1.2L1255.6,996.5z M1251.5,999.2l-0.8-1.2l-2.8,1.8l0.8,1.2L1251.5,999.2z M1318.6,956.1l-0.8-1.2l-2.8,1.8 l0.8,1.2L1318.6,956.1z M1314.4,958.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1314.4,958.8z M1310.2,961.5l-0.8-1.2l-2.8,1.8l0.8,1.2 L1310.2,961.5z M1306,964.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1306,964.1z M1331.3,948.1l-0.8-1.2l-2.8,1.8l0.8,1.2L1331.3,948.1z M1327.1,950.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1327.1,950.8z M1322.9,953.4l-0.8-1.2l-2.8,1.8l0.8,1.2L1322.9,953.4z M1344.3,940.1 l-0.8-1.2l-2.8,1.8l0.8,1.2L1344.3,940.1z M1340.1,942.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1340.1,942.8z M1335.9,945.4l-0.8-1.2 l-2.8,1.8l0.8,1.2L1335.9,945.4z M1301.8,966.8l-0.8-1.2l-2.8,1.8l0.8,1.2L1301.8,966.8z M1297.6,969.5l-0.8-1.2l-2.8,1.8 l0.8,1.2L1297.6,969.5z M1293.5,972.2l-0.8-1.2l-2.8,1.8l0.8,1.2L1293.5,972.2z M1247.3,1001.8l-0.8-1.2l-2.8,1.8l0.8,1.2 L1247.3,1001.8z M1243.1,1004.5l-0.8-1.2l-2.8,1.8l0.8,1.2L1243.1,1004.5z M1238.6,1007.2l-0.8-1.2l-2.8,1.8l0.8,1.2 L1238.6,1007.2z" />
                                  </g>
                                  <linearGradient id="SVGID_145_" gradientUnits="userSpaceOnUse" x1="1179.2999" y1="193.9759" x2="969.9731" y2="325.7959" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                    <stop offset="0" style="stop-color:#32354D" />
                                    <stop offset="0.1305" style="stop-color:#3A3D54" />
                                    <stop offset="0.3369" style="stop-color:#515366" />
                                    <stop offset="0.5936" style="stop-color:#767884" />
                                    <stop offset="0.8878" style="stop-color:#AAAAAE" />
                                    <stop offset="1" style="stop-color:#BFBFBF" />
                                  </linearGradient>
                                  <path fill="url(#SVGID_145_)" d="M1112.1,964.9l0.8-1.2l2.8,1.8l-0.8,1.2L1112.1,964.9z M1110.7,964l0.8-1.2l-2.8-1.8l-0.8,1.2 L1110.7,964z M1106.6,961.4l0.8-1.2l-2.8-1.8l-0.8,1.2L1106.6,961.4z M1102.4,958.7l0.8-1.2l-2.8-1.8l-0.8,1.2L1102.4,958.7z M1127.5,974.7l0.8-1.2l-2.8-1.8l-0.8,1.2L1127.5,974.7z M1123.3,972.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1123.3,972.1z M1119.1,969.4 l0.8-1.2l-2.8-1.8l-0.8,1.2L1119.1,969.4z M1098.2,956.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1098.2,956.1z M1094,953.4l0.8-1.2l-2.8-1.8 l-0.8,1.2L1094,953.4z M1089.8,950.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1089.8,950.8z M1156.9,993.1l0.8-1.2l-2.8-1.8l-0.8,1.2 L1156.9,993.1z M1152.8,990.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1152.8,990.5z M1148.6,987.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1148.6,987.8z M1144.4,985.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1144.4,985.2z M1169.5,1001.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1169.5,1001.2z M1165.3,998.5 l0.8-1.2l-2.8-1.8l-0.8,1.2L1165.3,998.5z M1161.1,995.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1161.1,995.9z M1178,1006.8l0.8-1.2l-2.8-1.8 l-0.8,1.2L1178,1006.8z M1173.8,1004.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1173.8,1004.2z M1140.2,982.5l0.8-1.2l-2.8-1.8l-0.8,1.2 L1140.2,982.5z M1136,979.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1136,979.9z M1131.9,977.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1131.9,977.2z M1085.7,948.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1085.7,948.1z M1081.5,945.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1081.5,945.5z M1077.2,942.6 l0.8-1.2l-2.8-1.8l-0.8,1.2L1077.2,942.6z M1009.9,899.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1009.9,899.8z M1005.7,897.1l0.8-1.2l-2.8-1.8 l-0.8,1.2L1005.7,897.1z M1001.6,894.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1001.6,894.5z M997.4,891.8l0.8-1.2l-2.8-1.8l-0.8,1.2 L997.4,891.8z M1022.5,907.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1022.5,907.8z M1018.3,905.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1018.3,905.2z M1014.1,902.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1014.1,902.5z M993.2,889.2l0.8-1.2l-2.8-1.8l-0.8,1.2L993.2,889.2z M989,886.5l0.8-1.2 l-2.8-1.8l-0.8,1.2L989,886.5z M984.8,883.9l0.8-1.2l-2.8-1.8l-0.8,1.2L984.8,883.9z M1051.9,926.2l0.8-1.2l-2.8-1.8l-0.8,1.2 L1051.9,926.2z M1047.8,923.6l0.8-1.2l-2.8-1.8l-0.8,1.2L1047.8,923.6z M1043.6,920.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1043.6,920.9z M1039.4,918.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1039.4,918.3z M1064.5,934.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1064.5,934.2z M1060.3,931.6 l0.8-1.2l-2.8-1.8l-0.8,1.2L1060.3,931.6z M1056.1,929l0.8-1.2l-2.8-1.8l-0.8,1.2L1056.1,929z M1073,939.9l0.8-1.2l-2.8-1.8 l-0.8,1.2L1073,939.9z M1068.8,937.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1068.8,937.3z M1035.2,915.6l0.8-1.2l-2.8-1.8l-0.8,1.2 L1035.2,915.6z M1031,913l0.8-1.2l-2.8-1.8l-0.8,1.2L1031,913z M1026.9,910.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1026.9,910.3z M980.7,881.2l0.8-1.2l-2.8-1.8l-0.8,1.2L980.7,881.2z M976.5,878.6l0.8-1.2l-2.8-1.8l-0.8,1.2L976.5,878.6z M972.2,875.7l0.8-1.2 l-2.8-1.8l-0.8,1.2L972.2,875.7z" />
                                  <linearGradient id="SVGID_146_" gradientUnits="userSpaceOnUse" x1="1653.7408" y1="481.3279" x2="1444.4141" y2="613.148" gradientTransform="matrix(1 0 0 -1 0 1200)">
                                    <stop offset="0" style="stop-color:#32354D" />
                                    <stop offset="0.1305" style="stop-color:#3A3D54" />
                                    <stop offset="0.3369" style="stop-color:#515366" />
                                    <stop offset="0.5936" style="stop-color:#767884" />
                                    <stop offset="0.8878" style="stop-color:#AAAAAE" />
                                    <stop offset="1" style="stop-color:#BFBFBF" />
                                  </linearGradient>
                                  <path fill="url(#SVGID_146_)" d="M1587.1,677.9l0.8-1.2l2.8,1.8l-0.8,1.2L1587.1,677.9z M1585.7,677l0.8-1.2l-2.8-1.8l-0.8,1.2 L1585.7,677z M1581.6,674.4l0.8-1.2l-2.8-1.8l-0.8,1.2L1581.6,674.4z M1577.4,671.7l0.8-1.2l-2.8-1.8l-0.8,1.2L1577.4,671.7z M1602.5,687.7l0.8-1.2l-2.8-1.8l-0.8,1.2L1602.5,687.7z M1598.3,685.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1598.3,685.1z M1594.1,682.4 l0.8-1.2l-2.8-1.8l-0.8,1.2L1594.1,682.4z M1573.2,669.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1573.2,669.1z M1569,666.4l0.8-1.2l-2.8-1.8 l-0.8,1.2L1569,666.4z M1564.8,663.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1564.8,663.8z M1631.9,706.1l0.8-1.2l-2.8-1.8l-0.8,1.2 L1631.9,706.1z M1627.8,703.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1627.8,703.5z M1623.6,700.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1623.6,700.8z M1619.4,698.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1619.4,698.2z M1644.5,714.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1644.5,714.2z M1640.3,711.5 l0.8-1.2l-2.8-1.8l-0.8,1.2L1640.3,711.5z M1636.1,708.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1636.1,708.9z M1653,719.8l0.8-1.2l-2.8-1.8 l-0.8,1.2L1653,719.8z M1648.8,717.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1648.8,717.2z M1615.2,695.5l0.8-1.2l-2.8-1.8l-0.8,1.2 L1615.2,695.5z M1611,692.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1611,692.9z M1606.9,690.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1606.9,690.2z M1560.7,661.1l0.8-1.2l-2.8-1.8l-0.8,1.2L1560.7,661.1z M1556.5,658.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1556.5,658.5z M1552.2,655.6 l0.8-1.2l-2.8-1.8l-0.8,1.2L1552.2,655.6z M1484.9,612.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1484.9,612.8z M1480.7,610.1l0.8-1.2l-2.8-1.8 l-0.8,1.2L1480.7,610.1z M1476.6,607.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1476.6,607.5z M1472.4,604.8l0.8-1.2l-2.8-1.8l-0.8,1.2 L1472.4,604.8z M1497.5,620.8l0.8-1.2l-2.8-1.8l-0.8,1.2L1497.5,620.8z M1493.3,618.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1493.3,618.2z M1489.1,615.5l0.8-1.2l-2.8-1.8l-0.8,1.2L1489.1,615.5z M1468.2,602.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1468.2,602.2z M1464,599.5 l0.8-1.2l-2.8-1.8l-0.8,1.2L1464,599.5z M1459.8,596.9l0.8-1.2l-2.8-1.8l-0.8,1.2L1459.8,596.9z M1526.9,639.2l0.8-1.2l-2.8-1.8 l-0.8,1.2L1526.9,639.2z M1522.8,636.6l0.8-1.2l-2.8-1.8l-0.8,1.2L1522.8,636.6z M1518.6,633.9l0.8-1.2l-2.8-1.8l-0.8,1.2 L1518.6,633.9z M1514.4,631.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1514.4,631.3z M1539.5,647.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1539.5,647.2z M1535.3,644.6l0.8-1.2l-2.8-1.8l-0.8,1.2L1535.3,644.6z M1531.1,642l0.8-1.2l-2.8-1.8l-0.8,1.2L1531.1,642z M1548,652.9l0.8-1.2 l-2.8-1.8l-0.8,1.2L1548,652.9z M1543.8,650.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1543.8,650.3z M1510.2,628.6l0.8-1.2l-2.8-1.8l-0.8,1.2 L1510.2,628.6z M1506,626l0.8-1.2l-2.8-1.8l-0.8,1.2L1506,626z M1501.9,623.3l0.8-1.2l-2.8-1.8l-0.8,1.2L1501.9,623.3z M1455.7,594.2l0.8-1.2l-2.8-1.8l-0.8,1.2L1455.7,594.2z M1451.5,591.6l0.8-1.2l-2.8-1.8l-0.8,1.2L1451.5,591.6z M1447.2,588.7 l0.8-1.2l-2.8-1.8l-0.8,1.2L1447.2,588.7z" />
                                  <path id="bottomline" d="m969.4 873.9 241.4 151.8 291.8-184.6 177.5-105.4-241.9-153.4" style="fill:none;stroke-miterlimit:10;stroke:transparent" />
                                </g>
                                <g>
                                  <linearGradient id="SVGID_147_" gradientUnits="userSpaceOnUse" x1="605.9249" y1="953.613" x2="606.0892" y2="817.645" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.25" fill="url(#SVGID_147_)" enable-background="new " points="1139.7,789.3 1074.3,826 886.1,711.5 955,672.8 " />
                                  <linearGradient id="SVGID_148_" gradientUnits="userSpaceOnUse" x1="763.4714" y1="1027.7656" x2="725.6356" y2="878.7339" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FF808B" />
                                    <stop offset="0.3874" style="stop-color:#FFB2B9;stop-opacity:0.5873" />
                                    <stop offset="0.9388" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.75" fill="url(#SVGID_148_)" enable-background="new " points="1123.5,708.5 1057.5,749 887.2,638.9 954.8,596.8 " />
                                  <g id="bottomparticles">
                                    <circle fill="#FFFFFF" cx="942.6" cy="693.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="931.6" cy="675.3" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1000.1" cy="737.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1118.8" cy="719.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="936.4" cy="658.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1017.4" cy="786.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1090" cy="769.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1004.9" cy="672.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="957.9" cy="615.2" r="1.6" />
                                    <circle fill="#FFFFFF" cx="948" cy="651.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1063.7" cy="686.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="904.7" cy="691.9" r="3.2" />
                                  </g>
                                  <linearGradient id="SVGID_149_" gradientUnits="userSpaceOnUse" x1="608.2545" y1="1006.7597" x2="591.3518" y2="855.3317" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="0.1993" style="stop-color:#C5C6D1;stop-opacity:0.8007" />
                                    <stop offset="0.3919" style="stop-color:#9497AB;stop-opacity:0.6081" />
                                    <stop offset="0.5731" style="stop-color:#6E728D;stop-opacity:0.4269" />
                                    <stop offset="0.7399" style="stop-color:#535878;stop-opacity:0.2601" />
                                    <stop offset="0.8874" style="stop-color:#43486B;stop-opacity:0.1126" />
                                    <stop offset="1" style="stop-color:#3D4266;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.6" fill="url(#SVGID_149_)" enable-background="new " points="1066,755.4 1066,822.1 886.1,711.5 886.7,638.9 " />
                                  <linearGradient id="SVGID_150_" gradientUnits="userSpaceOnUse" x1="606.5599" y1="980.9644" x2="594.1304" y2="869.6109" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.35" fill="url(#SVGID_150_)" enable-background="new " points="1066,778.8 1066,798 886.1,681.3 886.7,662.2 " />
                                  <linearGradient id="SVGID_151_" gradientUnits="userSpaceOnUse" x1="826.0909" y1="1015.9351" x2="792.8986" y2="858.2021" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.2" fill="url(#SVGID_151_)" enable-background="new " points="1133.1,714.6 1132.2,727.2 955,609.6 955,596.4 " />
                                  <g opacity="0.75">
                                    <polygon fill="#FFFFFF" points="973.8,636.1 970.7,656 944.7,654.9 939.5,658.1 974.2,659.3 978.1,633.2 " />
                                    <polygon fill="#FFFFFF" points="981.8,644.1 978.7,664 952.7,662.9 947.6,666.1 982.2,667.3 986.2,641.3 " />
                                  </g>
                                  <g opacity="0.75">
                                    <polygon fill="#FFFFFF" points="1012.5,770.8 1010.4,750.7 1035.9,745.2 1040,740.8 1006.2,748.4 1009,774.6 " />
                                    <polygon fill="#FFFFFF" points="1002.6,765 1000.6,745 1026,739.4 1030.2,735 996.4,742.6 999.1,768.8 " />
                                  </g>
                                </g>
                                <g>
                                  <linearGradient id="SVGID_152_" gradientUnits="userSpaceOnUse" x1="1329.9996" y1="905.4283" x2="1330.1639" y2="769.4603" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.25" fill="url(#SVGID_152_)" enable-background="new " points="1457.7,600.3 1392.3,637 1204.1,522.5 1273,483.8 " />
                                  <linearGradient id="SVGID_153_" gradientUnits="userSpaceOnUse" x1="1487.542" y1="979.5649" x2="1449.7062" y2="830.5333" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FF808B" />
                                    <stop offset="0.3874" style="stop-color:#FFB2B9;stop-opacity:0.5873" />
                                    <stop offset="0.9388" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.75" fill="url(#SVGID_153_)" enable-background="new " points="1441.5,519.5 1375.5,560 1205.2,449.9 1272.8,407.8 " />
                                  <g id="bottomparticles2">
                                    <circle fill="#FFFFFF" cx="1260.6" cy="504.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1249.6" cy="486.3" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1318.1" cy="548.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1436.8" cy="530.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1254.4" cy="469.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1335.4" cy="597.5" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1408" cy="580.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1322.9" cy="483.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1275.9" cy="426.2" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1266" cy="462.1" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1381.7" cy="497.7" r="1.6" />
                                    <circle fill="#FFFFFF" cx="1222.7" cy="502.9" r="3.2" />
                                  </g>
                                  <linearGradient id="SVGID_154_" gradientUnits="userSpaceOnUse" x1="1332.3284" y1="958.5676" x2="1315.4257" y2="807.1397" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="8.269999e-02" style="stop-color:#E2E2E5;stop-opacity:0.9173" />
                                    <stop offset="0.2656" style="stop-color:#A8A9AF;stop-opacity:0.7344" />
                                    <stop offset="0.4423" style="stop-color:#777983;stop-opacity:0.5577" />
                                    <stop offset="0.6084" style="stop-color:#515460;stop-opacity:0.3916" />
                                    <stop offset="0.7614" style="stop-color:#363947;stop-opacity:0.2386" />
                                    <stop offset="0.8967" style="stop-color:#262938;stop-opacity:0.1033" />
                                    <stop offset="1" style="stop-color:#202333;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.6" fill="url(#SVGID_154_)" enable-background="new " points="1384,566.4 1384,633.1 1204.1,522.5 1204.7,449.9 " />
                                  <linearGradient id="SVGID_155_" gradientUnits="userSpaceOnUse" x1="1330.6338" y1="932.7722" x2="1318.2042" y2="821.4188" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.35" fill="url(#SVGID_155_)" enable-background="new " points="1384,589.8 1384,609 1204.1,492.3 1204.7,473.2 " />
                                  <linearGradient id="SVGID_156_" gradientUnits="userSpaceOnUse" x1="1550.1628" y1="967.7369" x2="1516.9703" y2="810.004" gradientTransform="matrix(0.3592 -0.3065 -1.2019 -0.6834 1880.408 1551.1382)">
                                    <stop offset="0" style="stop-color:#FFF" />
                                    <stop offset="1" style="stop-color:#FFF;stop-opacity:0" />
                                  </linearGradient>
                                  <polygon class="particlespoly" opacity="0.2" fill="url(#SVGID_156_)" enable-background="new " points="1451.1,525.6 1450.2,538.2 1273,420.6 1273,407.4 " />
                                  <g opacity="0.75">
                                    <polygon fill="#FFFFFF" points="1311.9,461.6 1308.8,481.5 1282.7,480.4 1277.6,483.6 1312.2,484.8 1316.2,458.8 " />
                                    <polygon fill="#FFFFFF" points="1319.9,469.6 1316.8,489.5 1290.8,488.5 1285.7,491.6 1320.3,492.9 1324.3,466.8 " />
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </span>
                        </div>
                        <!-- /.col-md-8 col-md-offset-2 -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-overlay-30"></div>
              </div>
              <!-- /.carousel-item -->
              <!-- NFT SLIDER END HERE -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/revolutionizing-enterprises-digitally1-opt.jpg">
                <div class="slider-content">
                  <div class="container">
                    <div class="row">
                      <div class="lqd-column col-md-7" po data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <h1 class="text-white mt-0 mb-3" style="text-transform:initial!important;" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>
                          <span>Revolutionizing</span>
                          <br>Enterprises Digitally
                        </h1>
                        <div class="row">
                          <div class="lqd-column col-md-10">
                            <p class="font-size-18 lh-165 text-fade-white-09 mb-5 mb-sm-3-own">Unlock the potential of enterprise portals by integrating data repositories and content management systems into a single system that delivers seamless user experience.</p>
                            <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                              <span>
                                <span class="btn-txt">LET'S TALK</span>
                              </span>
                            </a>
                          </div>
                          <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-md-8 col-md-offset-2 -->
                    </div>
                  </div>
                </div>
                <div class="bg-overlay-30"></div>
              </div>
              <!-- /.carousel-item -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/blockchain-development2-opt.jpg">
                <div class="slider-content">
                  <div class="container">
                    <div class="row">
                      <div class="lqd-column col-md-7" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <h2 class="text-white mt-0 mb-3" style="text-transform:initial!important;" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>
                          <span>Blockchain</span>
                          <br>Development
                        </h2>
                        <div class="row">
                          <div class="lqd-column col-md-10">
                            <p class="font-size-18 lh-165 text-fade-white-09 mb-5">We are an extensively experienced blockchain development company with a detailed understanding of cloud services, AI and IoT. We create distributed ledger applications risk-free and faster.</p>
                            <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                              <span>
                                <span class="btn-txt">LET'S TALK</span>
                              </span>
                            </a>
                          </div>
                          <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-md-8 col-md-offset-2 -->
                    </div>
                  </div>
                </div>
                <div class="bg-overlay"></div>
              </div>
              <!-- /.carousel-item -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/aI-and-machine-learning-opt.jpg">
                <div class="slider-content">
                  <div class="container">
                    <div class="row">
                      <div class="lqd-column col-md-7" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <h2 class="text-white mt-0 mb-3" style="text-transform:initial" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>
                          <span>AI</span> and Machine <br>Learning
                        </h2>
                        <div class="row">
                          <div class="lqd-column col-md-10">
                            <p class="font-size-18 lh-165 text-fade-white-09 mb-5">Our in-house, doctorate-level research and design team brings machine learning and artificial intelligence to life.</p>
                            <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                              <span>
                                <span class="btn-txt">LET'S TALK</span>
                              </span>
                            </a>
                          </div>
                          <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-md-8 col-md-offset-2 -->
                    </div>
                  </div>
                </div>
                <div class="bg-overlay"></div>
              </div>
              <!-- /.carousel-item -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/modernizing-mobile-platforms-opt.jpg">
                <div class="slider-content">
                  <div class="container">
                    <div class="row">
                      <div class="lqd-column col-md-7" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <h2 class="text-white mt-0 mb-3" style="text-transform:initial!important;" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>
                          <span>Modernizing</span> Mobile <br>Platforms
                        </h2>
                        <div class="row">
                          <div class="lqd-column col-md-10">
                            <p class="font-size-18 lh-165 text-fade-white-09 mb-5">Custom mobile apps. User experience & design. Engagement & intelligence. Native & cross-platform</p>
                            <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                              <span>
                                <span class="btn-txt">LET'S TALK</span>
                              </span>
                            </a>
                          </div>
                          <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-md-8 col-md-offset-2 -->
                    </div>
                  </div>
                </div>
                <div class="bg-overlay"></div>
              </div>
              <!-- /.carousel-item -->
              <div class="carousel-item col-xs-12 px-0 fullheight bg-cover bg-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }' data-flickity-bg-lazyload="img/home/augmented-virtual-reality4-opt.jpg">
                <div class="slider-content">
                  <div class="container">
                    <div class="row">
                      <div class="lqd-column col-md-7" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <h2 class="text-white mt-0 mb-3" style="text-transform:capitalize!important;" data-split-text="true" data-split-options='{"type":"lines"}' data-fittext="true" data-fittext-options='{"compressor": 0.75, "maxFontSize": 50}'>
                          <span>Augmented</span> & Virtual <br>Reality
                        </h2>
                        <div class="row">
                          <div class="lqd-column col-md-10">
                            <p class="font-size-18 lh-165 text-fade-white-09 mb-5">Revolutionizing the world of augmented reality where we enable accurate detection and tracking of virtually any object</p>
                            <a href="#contact" data-lity="#contact" class="btn btn-solid text-uppercase btn-sm round border-thin font-size-14 text-uppercase ltr-sp-15 px-3 lh-175 py-1 mb-2">
                              <span>
                                <span class="btn-txt">LET'S TALK</span>
                              </span>
                            </a>
                          </div>
                          <!-- /.lqd-column col-md-10 col-md-offset-1 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-md-8 col-md-offset-2 -->
                    </div>
                  </div>
                </div>
                <div class="bg-overlay"></div>
              </div>
              <!-- /.carousel-item -->
            </div>
            <!-- /.carousel-items -->
          </div>
          <!-- /.carousel-container -->
          <div class="hero-badges-wrap pb-60 text-center-sm">
            <div class="container">
              <div class="hero-badges" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"300", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                <div class="badges-row pb-sm-1-own pb-xs-4">
                  <h4>Trusted by</h4>
                  <ul class="badges">
                    <li>
                      <img src="img/home/politico-small.png" alt="Politico Logo" width="80px" />
                    </li>
                    <li>
                      <img src="img/home/wall-mart-small.png" alt="Wall Mart Logo" width="80px" />
                    </li>
                    <li>
                      <img src="img/home/tissot-small.png" alt="Tissot Logo" width="70px" />
                    </li>
                    <li>
                      <img src="img/home/sapient-small.png" alt="Sapient Logo" width="70px" />
                    </li>
                  </ul>
                </div>
                <div class="badges-row">
                  <h4>Awards</h4>
                  <ul class="badges">
                    <li>
                      <a target="_blank" href="https://www.appfutura.com/app-developers/united-states">
                        <img src="img/home/badge-top-app-company-united-states.png" alt="appfutura" width="55px">
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.goodfirms.co/directory/platform/app-development">
                        <img src="img/home/top-mobile-app-developers.png" alt="goodfirms" width="60px">
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://clutch.co/research/top-mobile-application-developers">
                        <img src="img/home/mobile-appnew-2019.png" width="50px" alt="Cubix Awarded Top Rated App Development Companies">
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.mobileappdaily.com/reports/best-e-commerce-app-development-companies">
                        <img src="img/home/app_development_compay1.png" width="50px" alt="Mobile App Daily - Top Mobile App Development Company">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="vc_row pt-100 pb-70 bg-gradient-secondary-lr text-center-sm pb-sm-0-own pt-sm-5-own" id="our-services">
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-10 col-md-offset-1">
                <header class="fancy-title text-center">
                  <h6 class="text-fade-white-05 text-uppercase ltr-sp-2 font-size-12">Design. Development. Consultancy.</h6>
                  <h2 class="text-white">Develop results-driven products for entrepreneurs, startups, and enterprises with a leading software development company.</h2>
                </header>
              </div>
              <!-- /.col-md-6 col-md-offset-3 -->
            </div>
            <!-- /.row -->
            <div class="row ">
              <!-- d-flex -->
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6 ">
                <a href="mobile-app-development.html" class="hover-bxdmain iconbox-icon-animating iconbox-heading-sm iconbox-contents-show-onhover iconbox iconbox-semiround iconbox-shadow-hover bg-hover-secondary bg-transparent iconbox-xl iconbox-filled iconbox-filled-hover iconbox-light-onhover pt-5 pb-5" data-animate-icon="true" data-plugin-options='{"color":"rgb(245, 132, 49)"}' data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement": ".iconbox-icon-wrap, h3", "hiddenElement": ".contents", "alignMid": true }'>
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container text-white">
                      <svg version="1.1" id="elvn-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 116.6 116.6" style="enable-background:new 0 0 116.6 116.6" xml:space="preserve" class="mobile-app-development-icon">
                        <style type="text/css">
                          .mobile-app-development-icon-01 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.0403;
                            stroke-miterlimit: 10
                          }

                          .mobile-app-development-icon-02 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.0403;
                            stroke-linecap: round;
                            stroke-linejoin: round
                          }
                        </style>
                        <path class="mobile-app-development-icon-01" d="M83.1,105.4H32.7c-1.4,0-2.6-1.2-2.6-2.6V13.6c0-1.4,1.2-2.6,2.6-2.6h50.2c1.4,0,2.6,1.2,2.6,2.6v89.2 C85.6,104.2,84.4,105.4,83.1,105.4z" />
                        <line class="mobile-app-development-icon-02" x1="30.1" y1="88.1" x2="85.6" y2="88.1" />
                        <circle class="mobile-app-development-icon-01" cx="57.8" cy="96.6" r="3.9" />
                      </svg>
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <h3 class="text-white split-inner">App Development</h3>
                  <!-- <div class="contents"><ul><li><a href="#">2D Game</a></li><li><a href="#">3D Game</a></li><li><a href="#">Isometric Game</a></li></ul></div> -->
                </a>
                <!-- /.iconbox -->
              </div>
              <!-- /.col-md-3 col-sm-6 -->
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <a href="game-development.html" class="hover-bxdmain iconbox-icon-animating iconbox-heading-sm iconbox-contents-show-onhover iconbox iconbox-semiround iconbox-shadow-hover bg-hover-secondary bg-transparent iconbox-xl iconbox-filled iconbox-filled-hover iconbox-light-onhover pt-5 pb-5" data-animate-icon="true" data-plugin-options='{"color":"rgb(245, 132, 49)"}' data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement": ".iconbox-icon-wrap, h3", "hiddenElement": ".contents", "alignMid": true }'>
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container text-white">
                      <svg version="1.1" id="elvn-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 116.6 116.6" style="enable-background:new 0 0 116.6 116.6" xml:space="preserve" class="game-app-development-icon">
                        <style type="text/css">
                          .game-app-development-icon-0 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.0403;
                            stroke-miterlimit: 10
                          }

                          .game-app-development-icon-1 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.0403;
                            stroke-linecap: round;
                            stroke-linejoin: round
                          }

                          .game-app-development-icon-2 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.04;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }
                        </style>
                        <g id="n1LDBE.tif">
                          <image style="overflow:visible" width="1300" height="1390" id="Layer_0_1_" xlink:href="45FFC2EC45F6CEB0.html" transform="matrix(0.1632 0 0 0.1632 324.9333 -38.4097)"></image>
                        </g>
                        <g>
                          <path class="game-app-development-icon-0" d="M34.8,26V13.6c0-1.4,1.2-2.6,2.6-2.6h50.2c1.4,0,2.6,1.2,2.6,2.6v89.2c0.2,1.4-1.1,2.6-2.4,2.6H37.4 c-1.4,0-2.6-1.2-2.6-2.6V75.4" />
                          <line class="game-app-development-icon-0" x1="34.8" y1="88.1" x2="90.3" y2="88.1" />
                          <circle class="game-app-development-icon-1" cx="62.5" cy="96.6" r="3.9" />
                          <g>
                            <path class="game-app-development-icon-2" d="M42.3,51.4c-0.4-0.4-0.4-1,0-1.4l13.3-13.3c0,0,0,0,0,0c-3.8-4.1-9.1-6.6-15.1-6.6 c-11.4,0-20.6,9.2-20.6,20.6c0,11.4,9.2,20.6,20.6,20.6c6,0,11.4-2.6,15.1-6.6c0,0,0,0,0,0L42.3,51.4z" />
                          </g>
                          <circle class="game-app-development-icon-2" cx="37.9" cy="39.8" r="3.1" />
                          <line class="game-app-development-icon-2" x1="50.1" y1="50.7" x2="50.1" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="54.7" y1="50.7" x2="54.7" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="59.2" y1="50.7" x2="59.2" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="63.8" y1="50.7" x2="63.8" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="68.3" y1="50.7" x2="68.3" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="72.9" y1="50.7" x2="72.9" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="77.4" y1="50.7" x2="77.4" y2="50.7" />
                          <line class="game-app-development-icon-2" x1="82" y1="50.7" x2="82" y2="50.7" />
                        </g>
                      </svg>
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <h3 class="text-white split-inner">Game Development</h3>
                  <!-- <div class="contents"><ul><li><a href="#">2D Game</a></li><li><a href="#">3D Game</a></li><li><a href="#">Isometric Game</a></li></ul></div> -->
                </a>
              </div>
              <!-- /.col-md-3 col-sm-6 -->
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <a href="web-development.html" class="hover-bxdmain iconbox-icon-animating iconbox-heading-sm iconbox-contents-show-onhover iconbox iconbox-semiround iconbox-shadow-hover bg-hover-secondary bg-transparent iconbox-xl iconbox-filled iconbox-filled-hover iconbox-light-onhover pt-5 pb-5" data-animate-icon="true" data-plugin-options='{"color":"rgb(245, 132, 49)"}' data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement": ".iconbox-icon-wrap, h3", "hiddenElement": ".contents", "alignMid": true }'>
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container text-white">
                      <svg version="1.1" id="elvn-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 116.6 116.6" style="enable-background:new 0 0 116.6 116.6" xml:space="preserve" class="game-development-icon">
                        <style type="text/css">
                          .game-development-icon-0 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.1586;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }
                        </style>
                        <path class="game-development-icon-0" d="M105.1,98.1H11.5c-1.7,0-2.9-1.4-2.9-2.9v-74c0-1.7,1.4-2.9,2.9-2.9h93.6c1.7,0,2.9,1.4,2.9,2.9V95 C108,96.7,106.7,98.1,105.1,98.1z" />
                        <line class="game-development-icon-0" x1="8.9" y1="35" x2="108" y2="35" />
                        <polyline class="game-development-icon-0" points="38.9,81.2 24.2,66.4 38.9,51.8 " />
                        <polyline class="game-development-icon-0" points="77.6,51.8 92.4,66.4 77.6,81.2 " />
                        <line class="game-development-icon-0" x1="68.6" y1="49.1" x2="48" y2="84.8" />
                        <circle class="game-development-icon-0" cx="16.9" cy="27" r="2.6" />
                        <circle class="game-development-icon-0" cx="26.1" cy="27" r="2.6" />
                        <circle class="game-development-icon-0" cx="35.3" cy="27" r="2.6" />
                      </svg>
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <h3 class="text-white split-inner">Web Development</h3>
                  <!-- <div class="contents"><ul><li><a href="#">Node.js</a></li><li><a href="#">React.js</a></li><li><a href="#">Vue.js</a></li><li><a href="#">Python</a></li><li><a href="#">Progressive Web Apps</a></li></ul></div> -->
                </a>
              </div>
              <!-- /.col-md-3 col-sm-6 -->
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <a href="blockchain-development.html" class="hover-bxdmain iconbox-icon-animating iconbox-heading-sm iconbox-contents-show-onhover iconbox iconbox-semiround iconbox-shadow-hover bg-hover-secondary bg-transparent iconbox-xl iconbox-filled iconbox-filled-hover iconbox-light-onhover pt-5 pb-5" data-animate-icon="true" data-animate-icon="true" data-plugin-options='{"color":"rgb(245, 132, 49)"}' data-slideelement-onhover="true" data-slideelement-options='{ "visibleElement": ".iconbox-icon-wrap, h3", "hiddenElement": ".contents", "alignMid": true }'>
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container text-white">
                      <svg version="1.1" id="elvn-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 116.6 116.6" style="enable-background:new 0 0 116.6 116.6" xml:space="preserve" class="blockchain-development-icon">
                        <style type="text/css">
                          .blockchain-development-icon-0 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.1475;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }

                          .blockchain-development-icon-1 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.2379;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }

                          .blockchain-development-icon-2 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.2365;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }

                          .blockchain-development-icon-3 {
                            fill: none;
                            stroke: #FFF;
                            stroke-width: 3.1488;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10
                          }
                        </style>
                        <polygon class="blockchain-development-icon-0" points="72.9,37.9 72.9,20.6 59,12 45.1,20.6 45.1,37.9 59,46.5 " />
                        <polygon class="blockchain-development-icon-1" points="73.6,95.9 73.6,78.7 59.7,70 45.8,78.7 45.8,95.9 59.7,104.6 " />
                        <polygon class="blockchain-development-icon-2" points="108,67.2 108,49.9 93.3,41.3 78.6,49.9 78.6,67.2 93.3,75.8 " />
                        <polygon class="blockchain-development-icon-2" points="41.5,67.2 41.5,49.9 26.8,41.3 12.1,49.9 12.1,67.2 26.8,75.8 " />
                        <line class="blockchain-development-icon-1" x1="72.9" y1="37.9" x2="86" y2="45.5" />
                        <line class="blockchain-development-icon-1" x1="34.2" y1="45.1" x2="45.1" y2="37.9" />
                        <line class="blockchain-development-icon-1" x1="78.6" y1="67.2" x2="67.9" y2="74.2" />
                        <line class="blockchain-development-icon-1" x1="52.2" y1="74.2" x2="41.5" y2="67.2" />
                        <polyline class="blockchain-development-icon-1" points="12.1,49.9 26.8,58.6 41.5,49.9 " />
                        <polyline class="blockchain-development-icon-1" points="78.6,49.9 93.3,58.6 108,49.9 " />
                        <polyline class="blockchain-development-icon-3" points="45.8,79.5 59.7,88.1 73.6,79.5 " />
                        <polyline class="blockchain-development-icon-3" points="45.1,20.6 59,29.3 72.9,20.6 " />
                      </svg>
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <h3 class="text-white split-inner">Blockchain Development</h3>
                  <!-- <div class="contents"><ul><li><a href="#">Ruby on Rails consulting</a></li><li><a href="#">Node.js</a></li><li><a href="#">React.js</a></li><li><a href="#">Vue.js</a></li></ul></div> -->
                </a>
              </div>
              <!-- /.col-md-3 col-sm-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </section>
        <section id="our-work" class="vc_row pt-100 pb-30 text-center-sm pt-sm-5-own pb-sm-0-own">
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-8 col-md-offset-2">
                <header class="fancy-title mb-10 text-center">
                  <h2>We love transforming product ideas to digital realities.</h2>
                </header>
                <!-- /.fancy-title -->
              </div>
              <!-- /.col-md-10 col-md-offset-1 -->
            </div>
            <!-- /.row -->
            <div class="row d-flex flex-wrap align-items-center animation-images-scroll left-off-mobile pt-5 pb-5 pt-sm-0-own">
              <div class="lqd-column col-md-6 col-sm-6 col-xxs-12 order-2-sm mt-sm-9-own" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"120","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-37,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                <div class="iconbox text-left iconbox-icon-shadow iconbox-circle iconbox-sm white-roundico" data-plugin-options='{"color": "#fd623c"}'>
                  <!-- -->
                  <div class="iconbox-icon-wrap ico-width-home-port">
                    <figure>
                      <img src="img/home/micropet-homeicon-top.png" class="" alt="NFT Icon">
                    </figure>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                </div>
                <!-- /.iconbox -->
                <header class="fancy-title pr-md-2 pb-2">
                  <h2 class="mb-20 heading3">MicroPets' Side-scrolling NFT Game</h2>
                  <p>MicroPets Runner is a classic side-scrolling runner game that allows users to proceed with their game character (a MicroPets NFT product) picking up coins (to earn rewards) on their way past monsters and obstacles.</p>
                </header>
                <!-- /.fancy-title -->
                <a href="work/micro-pets.html" class="btn btn-solid text-uppercase round btn-bordered border-thin font-size-14 lh-175 font-weight-semibold px-1">
                  <span>
                    <span class="btn-txt">View Case Study</span>
                  </span>
                </a>
              </div>
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12 order-1-sm animation-images-scroll mt-sm-3-own">
                <div class="lqd-parallax-images-3">
                  <div class="liquid-img-group-container mb-0">
                    <div class="liquid-img-group-inner">
                      <div class="liquid-img-group-single new-add-img-two" data-parallax-to='{ "translateY": 0 }'>
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner mbile-twelvth mobile-ninth-f" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 50 }' data-parallax-to='{ "translateY": -50 }'>
                            <figure>
                              <img src="img/home/top-images.png" class="section1-image-1-trans" alt="Foodly Mobile App - The Hub of Delicious Cuisines">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <div class="liquid-img-group-single new-add-img-one">
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner foodly-image-2-space" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 50 }' data-parallax-to='{ "translateY": -110 }'>
                            <figure>
                              <img src="img/home/bottom-img.png" class="section1-image-2-trans" alt="Foodly Mobile App with Order Tracking Feature">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                    </div>
                    <!-- /.liquid-img-group-inner -->
                  </div>
                  <!-- /.liquid-img-group-container -->
                </div>
                <!-- /.lqd-parallax-images-3 -->
              </div>
              <!-- /.col-md-7 hidden-sm-hidden-xs -->
              <!-- /.col-md-5 -->
            </div>
            <!-- /.row -->
            <div class="row d-flex flex-wrap align-items-center animation-images-scroll left-off-mobile pt-5 pb-5 pt-sm-0-own">
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12">
                <div class="lqd-parallax-images-3">
                  <div class="liquid-img-group-container mb-0">
                    <div class="liquid-img-group-inner">
                      <div class="liquid-img-group-single" data-parallax-to='{ "translateY": 0 }'>
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner mbile-twelvth mobile-ninth-f" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 50 }' data-parallax-to='{ "translateY": -50 }'>
                            <figure>
                              <img src="img/home/foodly-mobile-1-opt.png" class="section1-image-1-trans" alt="Foodly Mobile App - The Hub of Delicious Cuisines">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <div class="liquid-img-group-single">
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner foodly-image-2-space" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 50 }' data-parallax-to='{ "translateY": -110 }'>
                            <figure>
                              <img src="img/home/foodly-mobile-2-opt.png" class="section1-image-2-trans" alt="Foodly Mobile App with Order Tracking Feature">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <div class="liquid-img-group-single w-75 mobileimage-sc imgsmallmbl " data-shadow-style="3" data-roundness="8">
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner shaddow-nones image-rounds-sec" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{"translateX":100, "translateY":10, "scaleX":0.7, "scaleY":0.7}' data-parallax-to='{"translateX":100, "translateY":110, "scaleX":0.8, "scaleY":0.8}'>
                            <figure>
                              <img src="img/home/foodly-mobile-image-3.png" class="section1-image-3-trans" alt="Tazza Mobile App">
                              <!-- tdy-text-box-mobile.png -->
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                    </div>
                    <!-- /.liquid-img-group-inner -->
                  </div>
                  <!-- /.liquid-img-group-container -->
                </div>
                <!-- /.lqd-parallax-images-3 -->
              </div>
              <!-- /.col-md-7 hidden-sm-hidden-xs -->
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12 mt-sm-3-own" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"120","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-37,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                <div class="iconbox text-left iconbox-icon-shadow iconbox-circle iconbox-sm white-roundico" data-plugin-options='{"color": "#fd623c"}'>
                  <!-- -->
                  <div class="iconbox-icon-wrap ico-width-home-port">
                    <figure>
                      <img src="img/home/foodly-sec-icn.png" class="" alt="Foodly Icon">
                    </figure>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                </div>
                <!-- /.iconbox -->
                <header class="fancy-title pr-md-2 pb-2">
                  <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">Mobile App</h6>
                  <h2 class="mb-20 heading3">Foodly - the hub of delicious cuisines</h2>
                  <p>Order breakfast, lunch, or dinner, rate your favorite restaurants and track your order - one platform to curb your hunger.</p>
                </header>
                <!-- /.fancy-title -->
                <a href="work/foodly.html" class="btn btn-solid text-uppercase round btn-bordered border-thin font-size-14 lh-175 font-weight-semibold px-1">
                  <span>
                    <span class="btn-txt">View Case Study</span>
                  </span>
                </a>
              </div>
              <!-- /.col-md-5 -->
            </div>
            <!-- /.row -->
            <!-- own-row-reverse -->
            <div class="row d-flex flex-wrap align-items-center pt-5 pb-5 pt-sm-0-own home-reverse-mobile">
              <!-- home-reverse-mobile -->
              <div class="lqd-column col-md-6 col-sm-6 col-xxs-12 order-2-sm mt-sm-3-own" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"120","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-37,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                <div class="iconbox text-left iconbox-icon-shadow iconbox-circle iconbox-sm iconbox-color-pippin " data-plugin-options='{"color": "#fd623c"}'>
                  <div class="iconbox-icon-wrap ico-width-home-port">
                    <figure>
                      <img src="img/home/hictic-logo-icn.png" class="mt-sm-10-own" alt="HicTic Mobile App - Solution for Your Marketing Campaign">
                    </figure>
                  </div>
                </div>
                <!-- /.iconbox -->
                <header class="fancy-title pr-md-2 pb-2">
                  <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">Mobile App</h6>
                  <h2 class="mb-20 heading3">HicTic - revolutionizing traditional avertising & digital marketing</h2>
                  <p>Launch new adverts and engage with your customers - an all-in-one platform that promotes your brand and builds engagement.</p>
                </header>
                <!-- /.fancy-title -->
                <a href="work/hictic.html" class="btn btn-solid text-uppercase round btn-bordered border-thin font-size-14 lh-175 font-weight-semibold px-1">
                  <span>
                    <span class="btn-txt">View Case Study</span>
                  </span>
                </a>
              </div>
              <!-- /.col-md-5 -->
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12 order-1-sm animation-images-scroll mt-sm-3-own">
                <div class="lqd-parallax-images-04">
                  <div class="liquid-img-group-container mb-0">
                    <div class="liquid-img-group-inner">
                      <div class="liquid-img-group-single">
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner spaceing-1nd" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 0 }' data-parallax-to='{ "translateY": 0 }'>
                            <figure>
                              <img src="img/home/hictic-mobile-2-opt.png" class="section2-image-1-trans" alt="HicTic Mobile Application Development Project">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <div class="liquid-img-group-single single-mobile-left-off" data-parallax-to='{ "translateY": 0 }'>
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner spaceing-2nd" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": -100 }' data-parallax-to='{ "translateY": 20 }' data-parallax-from='{ "translateX": -200 }' data-parallax-from='{ "translateX": 200 }' data-parallax-from='{"translateX":60, "translateY":0, "scaleX":3, "scaleY":1}'>
                            <figure>
                              <img src="img/home/hictic-mobile-1-opt.png" class="section2-image-2-trans" alt="HicTic Mobile Application Interface">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <!-- /.liquid-img-group-single -->
                      <!-- /.liquid-img-group-single -->
                    </div>
                    <!-- /.liquid-img-group-inner -->
                  </div>
                  <!-- /.liquid-img-group-container -->
                </div>
                <!-- /.lqd-parallax-images-3 -->
              </div>
              <!-- /.col-md-7 hidden-sm-hidden-xs -->
            </div>
            <!-- /.row -->
            <div class="row d-flex flex-wrap align-items-center pt-5 pb-5 animation-images-scroll pt-5 pb-5 pt-sm-0-own mb-sm-4-own">
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12">
                <div class="lqd-parallax-images-3">
                  <div class="liquid-img-group-container mb-0">
                    <div class="liquid-img-group-inner image-width-1170c">
                      <div class="liquid-img-group-single" data-parallax-to='{ "translateY": 0 }'>
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner img-one-curious" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": 50 }' data-parallax-to='{ "translateY": -50 }'>
                            <figure>
                              <img src="img/home/curious-mobile-2-opt.png" class="section1-image-1-trans" alt="Curious Mobile Application Development Project">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <div class="liquid-img-group-single">
                        <div class="liquid-img-group-img-container">
                          <div class="liquid-img-container-inner img-second-sec-home img-c-res" data-parallax="true" data-parallax-options='{ "overflowHidden": false, "easing": "linear" }' data-parallax-from='{ "translateY": -110 }' data-parallax-to='{ "translateY": -110 }'>
                            <figure>
                              <img src="img/home/curious-mobile-1-opt.png" class="section1-image-2-trans" alt="Curious Mobile Application - Social Platform">
                            </figure>
                          </div>
                          <!-- /.liquid-img-group-inner -->
                        </div>
                        <!-- /.liquid-img-group-content -->
                      </div>
                      <!-- /.liquid-img-group-single -->
                      <!-- /.liquid-img-group-single -->
                    </div>
                    <!-- /.liquid-img-group-inner -->
                  </div>
                  <!-- /.liquid-img-group-container -->
                </div>
                <!-- /.lqd-parallax-images-3 -->
              </div>
              <!--  -->
              <div class="lqd-column col-md-6 col-sm-6 col-xs-12 col-xxs-12 mt-xs-3-own mt-sm-3-own" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"120","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-37,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                <div class="iconbox text-left iconbox-icon-shadow iconbox-circle iconbox-sm iconbox-color-pippin" data-plugin-options='{"color": "#fd623c"}'>
                  <div class="iconbox-icon-wrap ico-width-home-port">
                    <figure>
                      <img src="img/home/curious-logo-icn.png" class="mt-sm-7-own" alt="Curious Mobile App - Connect Globally">
                    </figure>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                </div>
                <!-- /.iconbox -->
                <header class="fancy-title pr-md-2 pb-2">
                  <h6 class="text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary">Mobile App</h6>
                  <h2 class="mb-20 heading3">Curious - a social platform to connect globally with complete anonymity</h2>
                  <p>Get insights into the latest happenings and connect with people of similar interests in your vicinity with complete anonymity.</p>
                </header>
                <!-- /.fancy-title -->
                <a href="work/curious.html" class="btn btn-solid text-uppercase round btn-bordered border-thin font-size-14 lh-175 font-weight-semibold px-1">
                  <span>
                    <span class="btn-txt">View Case Study</span>
                  </span>
                </a>
              </div>
              <!-- /.col-md-5 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </section>
        <!-- Testimonials Section -->
        <section class="vc_row pt-60 pb-100 bg-gradient-gray-transparent-bt pt-sm-0-own pb-sm-8-own" id="testimonials">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10">
                <h2 class="text-center mb-5 mt-0 pt-50 pt-sm-0-own"> We develop enterprise-grade software solutions for businesses. </h2>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="lqd-column col-md-10 col-md-offset-1 mb-40">
                  <div class="lqd-column-inner">
                    <div class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-md carousel-dots-style1">
                      <div class="carousel-items row " data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true,"pauseAutoPlayOnHover":false,"navArrow":"1","navOffsets":{"nav":{"top":"42%"}}}'>
                        <div class="carousel-item col-xs-12 text-center px-md-7">
                          <div class="testimonial-content font-size-23"> “The team stood out because of their swift response time and patience. Cubix provided one contact person, which helped streamline project management and coordination. Not only did Cubix follow the budget and timeline, the team even offered additional services at no extra charge.” </div>
                          <h5 class="mb-0 font-size-22">
                            <span class="uppers">K</span>aren <span class="uppers">A</span>gresti, <span class="uppers">f</span>ounder
                          </h5>
                          <p class="mb-0">Nomidate</p>
                        </div>
                        <!-- /.carousel-item col-xs-12 -->
                        <div class="carousel-item col-xs-12 text-center px-md-7">
                          <div class="testimonial-content font-size-23"> “Willing to accommodate nonprofit budgets, Cubix brought their robust experience to the project. They checked in consistently, and were communicative, easy to reach, and responsive. The Android app shows over 500 downloads to date.” </div>
                          <h5 class="mb-0 font-size-22">Melissa <span class="uppers">S</span>teward, <span class="uppers">VP</span> of <span class="uppers">M</span>arketing </h5>
                          <p class="mb-0">National <span class="uppers">F</span>atherhood <span class="uppers">I</span>nitiative </p>
                        </div>
                        <!-- /.carousel-item col-xs-12 -->
                        <div class="carousel-item col-xs-12 text-center px-md-7">
                          <div class="testimonial-content font-size-23"> “The app sparked interest in the market and attracted initial users, while receiving no complaints about its functionality or usability. Cubix excelled at addressing user experience concerns, communicating clearly, and investing in the project's potential.” </div>
                          <h5 class="mb-0 font-size-22">John <span class="uppers">Y</span>ates, <span class="uppers">F</span>ounder </h5>
                          <p class="mb-0">Pee <span class="uppers">S</span>pots </p>
                        </div>
                        <!-- /.carousel-item col-xs-12 -->
                        <div class="carousel-item col-xs-12 text-center px-md-7">
                          <div class="testimonial-content font-size-23"> “Thank you again for the successful launch of the 3M and Converse applications. Your dedication, hard-work, flexibility, patience and professionalism is recognized and appreciated. I would recommend Social Cubix to any company wishing to create their application!” </div>
                          <h5 class="mb-0 font-size-22">
                            <span class="uppers">M</span>ichael <span class="uppers">G</span>uzman, <span class="uppers">D</span>irector
                          </h5>
                          <p class="mb-0">Sapient</p>
                        </div>
                        <!-- /.carousel-item col-xs-12 -->
                      </div>
                      <!-- /.carousel-items row -->
                    </div>
                    <!-- /.carousel-container -->
                  </div>
                  <!-- /.lqd-column-inner -->
                </div>
                <!-- /.lqd-column col-md-12 -->
                <div class="lqd-column col-md-12 text-center d-flex justify-content-center clutch-rating">
                  <div class="col pr-3">
                    <a href="https://clutch.co/profile/cubix" target="_blank" class="d-flex align-items-center">
                      <span class="mr-2">
                        <img src="img/home/clutch-icon.svg" class="clutch-icon" width="30px" alt="Clutch Icon" />
                      </span>
                      <span class="btn-underlined"> 4.8 Rating on Clutch </span>
                    </a>
                  </div>
                  <div class="col pl-3 d-flex align-items-center">
                    <span>Top app developers </span>
                    <!-- in New York -->
                  </div>
                </div>
                <!-- /.col-md-12 text-center -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        
        
        
        
        
        <!--ther's a problem in the second row which contains Azure element together with some other element-->
        
        <section class="vc_row pt-100 pb-100" style="border-bottom:1px solid #e0e1eb">
            <div class="container">
                <div class="row d-flex d-flexnone-seven justify-content-center ournavtechnologies-home">
                    <div class="lqd-column tabs-inlineh5 col-lg-10">
                        <header class="fancy-title mb-5 text-center">
                            <h2>Technologies we work with</h2>
                        </header>
                        <!-- tabs-nav-underlined tabs-nav-active-underlined -->
                        <div class="tabs tabs-nav-centered tabs-nav-lg tabsli_style">
                            <ul class="nav tabs-nav" role="tablist">
                                <li role="presentation" class="h5 active">
                                    <a data-target="#mobile" aria-expanded="false" aria-controls="mobile" role="tab" data-toggle="tab">Mobile </a>
                                </li>
                                <li role="presentation" class="h5">
                                    <a data-target="#front-end" aria-expanded="false" aria-controls="front-end" role="tab" data-toggle="tab">Front End </a>
                                </li>
                                <li role="presentation" class="h5">
                                    <a data-target="#database" aria-expanded="false" aria-controls="database" role="tab" data-toggle="tab">Database </a>
                                </li>
                                <li role="presentation" class="h5">
                                    <a data-target="#backend" aria-expanded="false" aria-controls="backend" role="tab" data-toggle="tab">Backend </a>
                                </li>
                                <li role="presentation" class="h5">
                                    <a data-target="#CMS" aria-expanded="false" aria-controls="CMS" role="tab" data-toggle="tab">
                                        <span class="uppers">CMS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="h5">
                                    <a data-target="#infra-and-devOps" aria-expanded="false" aria-controls="infra-and-devOps" role="tab" data-toggle="tab">Infra and DevOps </a>
                                </li>
                            </ul>

                            <div class="tabs-content">
                                <div id="mobile" role="tabpanel" class="tabs-pane fade active in">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-ios2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="48px" viewBox="0 0 39 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-ios2x.svg" alt="ic-technology-ios2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-ios" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M32.5716099,25.5008908 C32.638918,32.7648937 38.9302972,35.1821425 39,35.212912 C38.9468035,35.3833013 37.9947409,38.6576394 35.6853988,42.0397993 C33.6889921,44.9639307 31.6171526,47.8771771 28.3532676,47.9375162 C25.1461711,47.996741 24.1149124,46.0316925 20.4482909,46.0316925 C16.7827812,46.0316925 15.6370048,47.8772628 12.6011291,47.9968267 C9.45065004,48.1163907 7.05150686,44.8349388 5.03867944,41.921521 C0.925532668,35.9621794 -2.21776226,25.0818599 2.00288924,17.7374621 C4.09961655,14.0902045 7.84663142,11.7806061 11.9136803,11.7213812 C15.0073708,11.662242 17.9273604,13.8071936 19.818657,13.8071936 C21.7087562,13.8071936 25.2571824,11.2276978 28.9876054,11.6065312 C30.5492892,11.67167 34.9330367,12.2387203 37.7478306,16.3678335 C37.5210187,16.5087389 32.5172161,19.4279849 32.5716099,25.5008908 M26.5442459,7.66392068 C28.2168554,5.63493329 29.3426191,2.81039566 29.0354993,0 C26.6245537,0.0971082123 23.7091825,1.61004216 21.97987,3.63791533 C20.4300741,5.43368874 19.0727947,8.30793755 19.4390121,11.0627081 C22.1262885,11.2710665 24.8715508,9.6941937 26.5442459,7.66392068"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>iOS</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-android2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44px" height="48px" viewBox="0 0 44 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-android2x.svg" alt="ic-technology-android2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-android" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M35.5579238,13.7036238 C35.5677476,13.8168104 35.5720188,13.9321008 35.5720188,14.0482328 L35.5720188,14.0482328 L35.5720188,33.5207431 C35.5720188,35.6146949 33.8893809,37.3019745 31.8003388,37.3019745 L31.8003388,37.3019745 L31.651,37.301 L31.6517011,45.0041321 C31.6517011,46.6588021 30.2900437,48 28.6103957,48 C26.9309613,48 25.5693038,46.6588021 25.5693038,45.0041321 L25.569,37.301 L17.93,37.301 L17.9309097,45.0041321 C17.9309097,46.6588021 16.5692523,48 14.8896043,48 C13.2101699,48 11.8485124,46.6588021 11.8485124,45.0041321 L11.848,37.301 L11.6992341,37.3019745 C9.67568141,37.3019745 8.03332922,35.7186996 7.93265834,33.7158391 L7.92776769,33.5207431 L7.92776769,14.0482328 C7.92776769,13.9321008 7.93652364,13.8172312 7.94656095,13.7036238 L7.94656095,13.7036238 Z M3.04130542,15.4365567 C4.72073985,15.4365567 6.08239727,16.777965 6.08239727,18.432635 L6.08239727,31.2849925 C6.08239727,32.9396626 4.72073985,34.2810708 3.04130542,34.2810708 C1.36165742,34.2810708 0,32.9396626 0,31.2852029 L0,18.4328454 C-0.000213559821,16.7781754 1.36144386,15.4365567 3.04130542,15.4365567 Z M40.4589081,15.4365567 C42.1383426,15.4365567 43.5,16.777965 43.5,18.432635 L43.5,31.2849925 C43.5,32.9396626 42.1383426,34.2810708 40.4589081,34.2810708 C38.7792602,34.2810708 37.4176027,32.9396626 37.4176027,31.2852029 L37.4176027,18.4328454 C37.4176027,16.7781754 38.7792602,15.4365567 40.4589081,15.4365567 Z M34.5672226,0.0423334364 C34.7204378,0.129478841 34.7729316,0.322482595 34.6844707,0.473419387 L32.1083311,4.86815089 C34.1651953,6.89640542 35.4233101,9.53479075 35.464171,12.4244892 L8.03540184,12.4244892 C8.07625612,9.53505804 9.33406752,6.89700545 11.3903916,4.86890271 L8.81573827,0.473411509 C8.72728178,0.322472205 8.7797812,0.129469942 8.93299899,0.0423288883 C9.08621679,-0.0448121655 9.28213251,0.0069065347 9.370589,0.157845838 L11.8680872,4.4214895 C14.0308653,2.49735261 16.9526574,1.20350598 20.2215524,0.892922324 L23.2780205,0.892922324 C26.5471208,1.20360708 29.4689208,2.49755482 31.6316518,4.42172276 L34.1296292,0.157837961 C34.2180901,0.00690116897 34.4140073,-0.0448119681 34.5672226,0.0423334364 Z M16.0866071,5.54618934 C15.2176322,5.54850949 14.5152339,6.22804975 14.5175772,7.06432609 L14.5175772,7.06432609 C14.5201458,7.9088074 15.2266017,8.58456075 16.0953631,8.58246181 C16.9645515,8.58014269 17.6669498,7.90039204 17.664394,7.06432609 L17.664394,7.06432609 C17.6618243,6.21942401 16.9553685,5.54388104 16.0866071,5.54618934 Z M27.831543,5.54618934 C26.9625681,5.54850949 26.2601699,6.22804975 26.2625131,7.06432609 L26.2625131,7.06432609 C26.2650817,7.9088074 26.9715376,8.58456075 27.840299,8.58246181 C28.7094875,8.58014269 29.4118857,7.90039204 29.40933,7.06432609 L29.40933,7.06432609 C29.4067603,6.21942401 28.7003044,5.54388104 27.831543,5.54618934 Z" id="Combined-Shape-Copy-5"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Android</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-react-native2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="43px" viewBox="0 0 48 43" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-react-native2x.svg" alt="ic-technology-react-native2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-react-native" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M25.2177312,4.20429955 C29.3535481,0.605090062 33.4486979,-0.9005081 35.9526945,0.543430621 C38.5641082,2.04934443 39.3288119,6.62328535 38.1592242,12.3005857 C38.0880216,12.646558 38.0086543,12.9980418 37.9213387,13.3545517 C38.4520569,13.5075203 38.9676509,13.6701068 39.4657953,13.8415997 C44.6499945,15.6263928 48,18.4216587 48,21.3122463 C48,24.3266959 44.4197907,27.2741295 38.9171726,29.0972779 C38.6263423,29.1936332 38.3288625,29.2867445 38.0250783,29.3765757 C38.1337997,29.8128134 38.2295952,30.2402257 38.3124936,30.6589769 C39.3987025,36.1463175 38.562086,40.656205 35.9875191,42.1465783 C33.494824,43.5896323 29.4657134,42.1720307 25.3864398,38.661625 C24.9557352,38.2910058 24.5227928,37.895998 24.0891554,37.4784701 C23.7546049,37.8018192 23.4203329,38.1096583 23.0872021,38.4008416 C18.8757737,42.0823005 14.55061,43.6098443 11.9739227,42.1238481 C9.47859461,40.685899 8.69455461,36.4867384 9.69854676,31.1990041 C9.80435954,30.6417197 9.93011488,30.0703597 10.0749686,29.4871825 C9.62847908,29.358404 9.19523548,29.2227804 8.77694494,29.0798428 C3.48389697,27.2706721 0,24.2870631 0,21.3122463 C0,18.4320406 3.24538223,15.6554196 8.32716999,13.8836624 C8.89522093,13.6856153 9.48818011,13.4990941 10.1032137,13.3245723 C9.96990283,12.7857066 9.8514539,12.2549497 9.74961112,11.7349249 C8.69679948,6.35413083 9.4375866,2.05425624 11.9392493,0.606163081 C14.5481032,-0.904180674 18.8927455,0.717611379 23.2273028,4.56638459 C23.491637,4.80108335 23.7566673,5.04560517 24.0220801,5.29951962 C24.3086788,5.02460406 24.5946526,4.75858234 24.8802632,4.50245917 L24.8802632,4.50245917 Z M36.0415294,29.8961188 L35.8242092,29.945917 C33.8939104,30.3802447 31.7763758,30.7002024 29.540027,30.8985887 C28.2210363,32.8085925 26.8696083,34.5275899 25.5175606,36.0064556 C25.9213263,36.3959337 26.3240403,36.7632638 26.7239193,37.1073577 C30.2125535,40.1094906 33.447526,41.2476828 34.9602039,40.3719738 C36.5543643,39.4491412 37.2354399,35.7777167 36.3010151,31.0571631 C36.2260354,30.6784127 36.1394331,30.2911745 36.0415294,29.8961188 Z M12.0640824,29.988568 L12.0313731,30.1178777 C11.9452324,30.4713498 11.8667374,30.8196901 11.796104,31.1623008 L11.796104,31.1623008 L11.7130668,31.5815051 C10.8544798,36.1034329 11.4839799,39.474909 12.9980218,40.3473856 C14.5936684,41.2676078 18.1147312,40.0240531 21.7377003,36.8570012 C22.0407489,36.5921123 22.3454805,36.3116687 22.6514199,36.0163647 C21.2504037,34.5110755 19.8599013,32.7935775 18.532119,30.9253711 C16.2063502,30.7361503 14.0304109,30.4231988 12.0640824,29.988568 Z M26.8976733,31.073697 L26.6730115,31.0833345 C25.7938064,31.1193912 24.9016956,31.1376146 24.0003845,31.1376146 C23.0479292,31.1376146 22.1104762,31.119494 21.1912711,31.0834028 C22.1384552,32.330947 23.1083103,33.4915544 24.080467,34.5404355 C25.0191263,33.5058834 25.9629227,32.3438916 26.8976733,31.073697 Z M24.0003845,13.6228276 C22.521233,13.6228276 21.0572836,13.6786342 19.6300054,13.7864045 C18.8233128,14.9667453 18.0434363,16.206859 17.3021469,17.4922306 L17.3021469,17.4922306 L17.0239065,17.97847 C16.3906858,19.1013808 15.8008816,20.2335502 15.2594384,21.3612712 C15.8800731,22.6497029 16.5650495,23.9448202 17.3084641,25.2287718 C18.0540605,26.51662 18.8408521,27.7628828 19.6544886,28.9505829 C21.0534267,29.0411685 22.5068437,29.0871029 24.0003845,29.0871029 C25.5004385,29.0871029 26.9724233,29.034942 28.3971202,28.9330058 C29.178216,27.7606338 29.9482457,26.5183112 30.6983593,25.2176257 C31.4479286,23.9178591 32.1382202,22.6165521 32.7617058,21.3314946 C32.1364792,20.068838 31.444524,18.7808599 30.6920372,17.4810537 C29.9479147,16.1956859 29.1733595,14.9597866 28.3797058,13.7883212 C26.9526772,13.6790545 25.4865128,13.6228276 24.0003845,13.6228276 Z M14.1725462,23.7726728 L14.1106548,23.9193808 C13.5272978,25.3155437 13.025949,26.6883121 12.6163676,28.0106326 C13.9865453,28.3086863 15.4688244,28.5462264 17.0406269,28.7215534 C16.5235349,27.9192365 16.0201515,27.0960458 15.5339197,26.2561909 C15.0566053,25.431821 14.6022908,24.6025521 14.1725462,23.7726728 Z M33.8676541,23.6989615 L33.7632855,23.8988895 C33.3551635,24.6787335 32.9251152,25.460908 32.4746538,26.2420162 C31.9912188,27.0802851 31.4993333,27.8957785 31.0008327,28.6856274 C32.5848956,28.4948588 34.087749,28.2391502 35.4796157,27.9215996 C35.0501166,26.5765075 34.5092518,25.1613944 33.8676541,23.6989615 Z M10.6549236,15.3001778 L10.440807,15.3610218 C9.94399085,15.5058657 9.46386313,15.6589227 9.00222105,15.8198711 C4.65624592,17.3350884 2.05051165,19.5644518 2.05051165,21.3122463 C2.05051165,23.1542517 4.88671232,25.5831736 9.44007032,27.1395174 C9.82086864,27.2696432 10.2159602,27.3934629 10.6245071,27.5109115 C11.2313913,25.5338598 12.0307388,23.458206 12.9937744,21.3617486 C12.0432696,19.2968856 11.2555557,17.2541049 10.6549236,15.3001778 Z M37.3723771,15.3300442 L37.3498491,15.4030948 C36.762059,17.2917611 35.9814701,19.2856869 35.0360177,21.3221597 C36.0393323,23.4351682 36.8585794,25.4797979 37.4660455,27.4028065 L37.812303,27.2984547 L37.812303,27.2984547 L38.2722766,27.1508178 C43.0233786,25.5766645 45.9494884,23.1677232 45.9494884,21.3122463 C45.9494884,19.5703437 43.2401336,17.3096409 38.7983148,15.7804312 C38.3391321,15.6223515 37.8633231,15.4721293 37.3723771,15.3300442 Z M24.000299,17.0260788 C26.3674839,17.0260788 28.2864664,18.9450614 28.2864664,21.3122463 C28.2864664,23.6794312 26.3674839,25.5984137 24.000299,25.5984137 C21.6331141,25.5984137 19.7141316,23.6794312 19.7141316,21.3122463 C19.7141316,18.9450614 21.6331141,17.0260788 24.000299,17.0260788 Z M31.0078622,14.0532331 L31.0805586,14.1678029 C31.5522711,14.9106594 32.0150236,15.673631 32.4666248,16.4537092 C32.951765,17.2917149 33.412927,18.1256904 33.8485372,18.9526012 C34.4547658,17.5310018 34.9706173,16.1445011 35.3843146,14.8185719 C34.0069544,14.5034276 32.5391451,14.2468767 31.0078622,14.0532331 Z M16.9974669,14.0484674 L16.4902822,14.1148588 C15.1508165,14.2955961 13.8625224,14.5239294 12.6459014,14.796189 C13.0622434,16.1403262 13.5736723,17.5331769 14.170456,18.9489803 C14.598369,18.1193177 15.0506009,17.2904693 15.5248476,16.4678674 L15.5248476,16.4678674 L15.8525227,15.8995003 L15.8575673,15.8995476 L16.1082033,15.4796797 C16.3996769,14.995598 16.696305,14.5182796 16.9974669,14.0484674 Z M34.8296176,2.26705386 C33.278379,1.50228269 30.0320126,2.73290957 26.5638355,5.75110313 C26.1972098,6.07015708 25.829082,6.4075708 25.4604403,6.76219118 C26.8322058,8.24121246 28.198866,9.94870142 29.5175584,11.826493 C31.7818066,12.0391523 33.9450054,12.3812808 35.9368747,12.8409195 C36.0146856,12.5184801 36.0864158,12.2001113 36.1508463,11.8870448 C37.1607313,6.98495792 36.5357394,3.24667864 34.9283586,2.31975659 L34.9283586,2.31975659 Z M21.6369591,5.89872982 C17.979164,2.72340888 14.5396534,1.47005935 12.9665553,2.38077303 C11.4590371,3.25340338 10.8599215,6.73095023 11.7619305,11.3410102 C11.8564498,11.8236403 11.9664511,12.3169576 12.0914111,12.8194766 C14.0779395,12.3692921 16.2393829,12.0330938 18.4972219,11.8238964 C19.8136938,9.96520189 21.1922665,8.25994688 22.5870739,6.76229938 C22.3455364,6.5337433 22.1052232,6.31223235 21.8658582,6.09970342 L21.8658582,6.09970342 Z M24.0242489,8.22984548 L23.8712963,8.39378086 C22.9619965,9.38609494 22.0582251,10.4733084 21.174881,11.6380367 C22.1080394,11.5944919 23.0514177,11.5723159 24.0003845,11.5723159 C24.9585031,11.5723159 25.9091438,11.5948849 26.8477492,11.6392264 C25.9169971,10.398561 24.969918,9.25447954 24.0242489,8.22984548 Z" id="Combined-Shape-Copy-22"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>React Native</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block mt-sm-4" aria-label="ic-technology-flutter2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="48px" viewBox="0 0 39 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-flutter2x.svg" alt="ic-technology-flutter2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-flutter" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M26.25,35.25 L38.413422,47.5634001 L23.7817001,47.5634001 L18.75,42.75 L26.25,35.25 Z M18.2947357,27.4380277 L25.611,34.7535 L18.2925,42.072 L10.977,34.7565 L18.2947357,27.4380277 Z M38.413422,21.9498726 L26.25,34.5 L18.75,27 L23.7817001,21.9498726 L38.413422,21.9498726 Z M38.413422,-7.67386155e-12 L7.31815072,31.0998508 L1.23243638e-11,23.7817001 L23.7817001,-7.67386155e-12 L38.413422,-7.67386155e-12 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Flutter</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-ionic2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-ionic2x.svg" alt="ic-technology-ionic2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-ionic" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M23.9983513,7.33233041e-05 C27.8278914,-0.00944551888 31.6028605,0.907972769 35.0008646,2.67405237 L35.0008646,2.67405237 L35.4481478,2.90585607 L35.0563669,3.23234014 C34.0910173,4.00302858 33.3307008,4.99996277 32.8428049,6.13478358 L32.8428049,6.13478358 L32.7089464,6.46126765 L32.4020514,6.31434982 C23.8606082,2.25865124 13.6414828,4.87253523 8.09641445,12.5313315 C2.55134608,20.1901278 3.25817171,30.7145427 9.77756097,37.5630833 C16.2969502,44.4116238 26.7738253,45.6355527 34.6962416,40.4741321 C42.6186579,35.3127114 45.7323094,25.2346121 42.1018933,16.5039178 L42.1018933,16.5039178 L41.9712997,16.1774338 L42.2977837,16.0598995 C43.455095,15.6277734 44.4879192,14.9167957 45.3047021,13.9899904 L45.3047021,13.9899904 L45.6311862,13.6112689 L45.840136,14.0683466 L45.8368711,14.0389631 C50.2568293,23.7277324 47.7635813,35.1704194 39.7134793,42.1420864 C31.6633774,49.1137533 19.9818848,49.9468822 11.0238521,44.1882426 C2.06581939,38.4296029 -2.02612679,27.4565746 0.97407382,17.2385965 C3.97427443,7.02061836 13.349019,0.00167701352 23.9983513,7.33233041e-05 Z M24.0016161,13.0725702 C30.0390908,13.0797662 34.9316366,17.972312 34.9388327,24.0097867 C34.9388327,30.0502446 30.042074,34.9470033 24.0016161,34.9470033 C17.9611582,34.9470033 13.0643996,30.0502446 13.0643996,24.0097867 C13.0643996,17.9693288 17.9611582,13.0725702 24.0016161,13.0725702 Z M39.7055002,4.0779339 C42.457064,4.0779339 44.6876472,6.30851709 44.6876472,9.0600809 C44.6876472,11.8116447 42.457064,14.0422279 39.7055002,14.0422279 C36.9539364,14.0422279 34.7233532,11.8116447 34.7233532,9.0600809 C34.7233532,6.30851709 36.9539364,4.0779339 39.7055002,4.0779339 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Ionic</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-swift2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-swift2x.svg" alt="ic-technology-swift2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-swift" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M36.101829,0 C37.1171333,0.0958641924 38.2399403,0.0958641924 39.2552445,0.306232837 C40.2787113,0.488897098 41.2737004,0.832740481 42.210377,1.32745278 C43.1707353,1.79079637 44.0427025,2.42989099 44.7952221,3.21544479 C46.2727884,4.71731713 47.2701754,6.67321295 47.6440463,8.80752268 C47.8459127,9.84738287 47.9474431,10.9058833 47.9474431,11.9670467 L47.9474431,11.9670467 L48,11.9670467 L48,36.0902055 C47.949195,37.1486314 47.8479197,38.2032959 47.6966032,39.2497295 C47.5269877,40.3255388 47.1829787,41.3614047 46.681299,42.3120579 C46.2178425,43.2667055 45.5967152,44.1294832 44.847779,44.8551219 C44.0455625,45.5943708 43.1581429,46.2105377 42.2091825,46.6871931 C41.2930198,47.1705084 40.3147443,47.5073646 39.3066069,47.6937672 C38.2674132,47.8961471 37.2103024,47.9986686 36.1531915,48 L36.1531915,48 L11.8050019,48 C10.7896976,47.9041358 9.66689063,47.9041358 8.65158641,47.6937672 C7.62811965,47.5111029 6.6331305,47.1672595 5.6964539,46.6725472 C4.75640164,46.2211867 3.89518477,45.5994008 3.15222098,44.840476 C1.67465472,43.3386036 0.677267637,41.3827078 0.30339679,39.2483981 C0.101530422,38.2085379 0,37.1500374 0,36.0888741 L0,36.0888741 L0,11.7167346 C0.0512261281,10.6627626 0.152500262,9.61255493 0.30339679,8.57052509 C0.473012318,7.49471582 0.817021277,6.45884996 1.31870101,5.50819672 C1.79550487,4.54168687 2.42563815,3.67959977 3.17849944,2.96380128 C3.37678238,2.76674711 3.58701008,2.67088292 3.78529302,2.46051427 C4.39570873,1.95575338 5.04436589,1.51114884 5.72392684,1.13173005 L5.72392684,1.13173005 L6.43583427,0.825497212 C7.1525196,0.51260714 7.90742814,0.303569943 8.67786487,0.210368644 C9.45150353,0.0853994928 10.2314626,0.0151361565 11.0130646,0 L11.0130646,0 Z M28.2178383,8.84210526 C31.7077895,13.4842105 33.2988139,19.0964211 31.9021309,24.0315789 C31.7753152,24.4828778 31.6240301,24.9257463 31.4490578,25.3578947 L31.4490578,25.3578947 L30.8028139,24.9865263 C24.7548139,21.1604211 19.1235944,16.6875789 13.9957895,11.6412632 C17.0677895,16.0307368 20.4699358,20.1688421 24.169448,24.0176842 C19.0931553,20.8698947 14.2580334,17.3204211 9.71559435,13.4046316 C10.2892529,14.3545263 10.95657,15.2437895 11.7058383,16.0572632 C16.0328626,21.6631579 21.0272041,26.6905263 26.5741309,31.0206316 C22.3723748,33.5545263 16.3864236,33.6732632 10.4133504,31.0206316 C8.95578947,30.3915789 7.58017972,29.5894737 6.31578947,28.6206316 C9.02720411,32.7574737 12.8882773,35.9658947 17.3955944,37.8265263 C23.1766675,40.2277895 28.9296431,39.9903158 33.1185212,37.6408421 L33.1185212,37.6408421 L33.1161797,37.6547368 C35.1462285,36.8058947 39.193448,35.5591579 41.3780334,39.6050526 C41.8826187,40.5738947 42.9807651,35.4530526 38.9862285,30.6113684 L38.9862285,30.6113684 L38.9218383,30.5317895 C38.9873992,30.3322105 39.0904236,30.1338947 39.0904236,29.9343158 C41.0818383,22.4791579 36.2982285,13.5789474 28.2178383,8.84210526 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Swift</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-kotlin2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-kotlin2x.svg" alt="ic-technology-kotlin2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-kotlin" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M24.7545,24.6 L47.2795047,47.2850657 L2.1135,47.2845 L24.7545,24.6 Z M47.2795047,-1.7079671e-12 L-4.60165239e-12,47.2795047 L-4.60165239e-12,27 L25.5,0.0111219724 L47.2795047,-1.7079671e-12 Z M23.7454111,0.0111219724 L-6.98907598e-12,24.9632671 L-6.98907598e-12,0.0111219724 L23.7454111,0.0111219724 Z"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Kotlin</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-objectivec2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-objectivec2x.svg" alt="ic-technology-objectivec2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-objectivec" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M23.9975251,9.38903939e-06 C30.3167857,-0.00560972977 36.3769345,2.51116104 40.8330587,6.99179077 C45.3636022,11.408177 47.9437477,17.4503759 48.0009714,23.777069 C48.0601511,37.0426241 37.3944503,47.8655036 24.1294454,48.0001352 L23.934706,48.0001352 C11.0379334,48.0001352 0.101118549,37.1072937 0.000607901191,24.1288563 C-0.0446957907,17.8049189 2.44384238,11.7260988 6.91071496,7.2493493 C11.3024853,2.7512912 17.276071,0.155635569 23.5489692,0.0064942571 L23.9975251,9.38903939e-06 Z M24.010089,1.25637235 C17.9111646,1.29213398 12.0807273,3.76956078 7.82159271,8.13509939 C3.58513649,12.3705 1.22099111,18.1258932 1.25658581,24.1162924 C1.35121974,36.416283 11.7163803,46.7311883 23.9284241,46.7311883 L24.0917539,46.7311883 C36.6702525,46.6172115 46.7932517,36.3622708 46.7445177,23.7833509 C46.6873841,17.7896175 44.2407427,12.0664665 39.9473086,7.88382277 C35.7341994,3.63340579 29.994756,1.24668415 24.010089,1.25637235 Z M8.79528961,16.9988822 L8.79528961,18.2552653 L6.98609794,18.2552653 L6.98609794,29.7888621 L8.79528961,29.7888621 L8.79528961,31.0452452 L5.38420949,31.0201176 L5.38420949,16.9988822 L8.79528961,16.9988822 Z M42.6171227,16.9611907 L42.6171227,31.0201176 L39.2060426,31.0201176 L39.2060426,29.7637345 L41.0152342,29.7637345 L41.0152342,18.2175738 L39.2060426,18.2175738 L39.2060426,16.9611907 L42.6171227,16.9611907 Z M27.5593712,20.1712495 L27.5593712,25.1276808 C27.5593712,27.2321225 26.5417009,27.9356971 25.046605,27.9356971 C24.646762,27.9323871 24.2500794,27.8645056 23.8718868,27.7346758 L24.0414985,26.6164948 C24.3202661,26.7035726 24.6101057,26.7501161 24.902121,26.754697 C25.6936423,26.754697 26.1585041,26.3903459 26.1585041,25.0711436 L26.1710679,20.1712495 L27.5593712,20.1712495 Z M36.4734093,20.0456112 C37.1188925,20.0188764 37.7623379,20.1346966 38.357984,20.3848346 L38.0501701,21.4904518 C37.5776914,21.2893565 37.0685278,21.1888073 36.5550742,21.1952017 C35.0034411,21.1952017 33.8852601,22.1688986 33.8852601,24.003218 C33.8852601,25.6742075 34.8715209,26.754697 36.5425104,26.754697 C37.0609431,26.7621779 37.5756515,26.6660706 38.056452,26.4720108 L38.2574733,27.5650641 C37.6329089,27.8140937 36.9631367,27.9296455 36.2912338,27.9042875 C33.8726963,27.9042875 32.4027281,26.3903459 32.4027281,24.072319 C32.3449125,22.9798947 32.7567538,21.9148432 33.5344848,21.1455136 C34.3122158,20.3761841 35.3816774,19.9759344 36.4734093,20.0456112 Z M13.4187794,20.0079197 C15.5671945,20.0079197 16.9617798,21.7291645 16.9617798,23.8712977 C16.9617798,26.4280373 15.4101466,27.8854417 13.3057049,27.8854417 C11.2012632,27.8854417 9.80039609,26.2458618 9.80039609,24.003218 C9.80039609,21.6600635 11.2703643,20.0079197 13.4187794,20.0079197 Z M22.3516633,20.5858559 C22.8548428,20.8822198 23.1578224,21.428064 23.1431846,22.0118507 C23.1258822,22.7249936 22.6835146,23.3527329 22.0299953,23.6137727 L21.8868015,23.6639945 C22.7827131,23.8462492 23.4262942,24.6343076 23.4258708,25.5485692 C23.435488,26.1572482 23.1644084,26.7364781 22.6908867,27.119048 C22.150642,27.5964736 21.2523281,27.8289045 19.8640247,27.8289045 C19.2929081,27.8317137 18.7221923,27.7981422 18.1553437,27.7283939 L18.1427799,20.2717601 C18.8108094,20.1563975 19.4876439,20.0996443 20.1655567,20.1021484 C20.9270982,20.0277688 21.6925873,20.1971442 22.3516633,20.5858559 Z M20.215812,24.3047499 L19.5248013,24.3047499 L19.5248013,26.7861065 C19.7689454,26.8112933 20.0143827,26.8217821 20.2597854,26.8175161 C21.1518174,26.8175161 21.9433388,26.4782927 21.9433388,25.561133 C21.9433388,24.6439733 21.1769451,24.3047499 20.215812,24.3047499 Z M13.3873698,21.1323826 C11.9927846,21.1323826 11.2578005,22.4453029 11.2578005,24.0157818 L11.2703643,23.9843722 C11.2703643,25.5360053 12.0493218,26.7672608 13.3873698,26.7672608 C14.7254178,26.7672608 15.4918115,25.5108777 15.4918115,23.927835 C15.4918115,22.4892763 14.7819551,21.1323826 13.3873698,21.1323826 Z M31.5106961,24.298468 L31.5106961,25.2596011 L28.6210149,25.2596011 L28.6210149,24.298468 L31.5106961,24.298468 Z M20.3100407,21.1386645 C20.0449459,21.1296065 19.7796355,21.1485573 19.5185194,21.1952017 L19.5248013,23.2807977 L20.2346577,23.2807977 C21.1957908,23.2807977 21.7360356,22.8284998 21.7360356,22.1814625 C21.7360356,21.5344252 21.1957908,21.1386645 20.3100407,21.1386645 Z" id="Combined-Shape-Copy-26"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>ObjectiveC</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- /.tab-pane -->
                                <div id="front-end" role="tabpanel" class="tabs-pane fade">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-angular-js2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45px" height="48px" viewBox="0 0 45 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-angular-js2x.svg" alt="ic-technology-angular-js2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-angular-js" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M18.2851532,24 L27.0963631,24 L22.4125692,14.1380252 L18.2851532,24 Z M22.4280872,0 L0,7.94766094 L3.5437869,37.5358719 L22.451932,48 L41.4573486,37.3944803 L45,7.80703147 L22.4280872,0 Z M16.4608391,28.1922063 L13.7111208,35.1192556 L8.57086985,35.1405977 L22.4265733,4.24060723 L22.4000791,4.18229746 L22.3758558,4.18229746 L22.3762343,4.13160987 L22.4000791,4.18229746 L22.4534459,4.18229746 L22.5,4.07787341 L22.5,4.18229746 L22.4530674,4.18229746 L22.4269517,4.24060723 L36.8810453,35.2694128 L31.9326879,35.1600343 L28.8888842,28.0790167 L22.3891029,28.1102677 L16.4608391,28.1922063 Z" id="Shape-Copy-11"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Angular .JS</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-react-native2x (1)" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="43px" viewBox="0 0 48 43" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-react-native2x-1.svg" alt="ic-technology-react-native2x (1)">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-react-native" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M25.2177312,4.20429955 C29.3535481,0.605090062 33.4486979,-0.9005081 35.9526945,0.543430621 C38.5641082,2.04934443 39.3288119,6.62328535 38.1592242,12.3005857 C38.0880216,12.646558 38.0086543,12.9980418 37.9213387,13.3545517 C38.4520569,13.5075203 38.9676509,13.6701068 39.4657953,13.8415997 C44.6499945,15.6263928 48,18.4216587 48,21.3122463 C48,24.3266959 44.4197907,27.2741295 38.9171726,29.0972779 C38.6263423,29.1936332 38.3288625,29.2867445 38.0250783,29.3765757 C38.1337997,29.8128134 38.2295952,30.2402257 38.3124936,30.6589769 C39.3987025,36.1463175 38.562086,40.656205 35.9875191,42.1465783 C33.494824,43.5896323 29.4657134,42.1720307 25.3864398,38.661625 C24.9557352,38.2910058 24.5227928,37.895998 24.0891554,37.4784701 C23.7546049,37.8018192 23.4203329,38.1096583 23.0872021,38.4008416 C18.8757737,42.0823005 14.55061,43.6098443 11.9739227,42.1238481 C9.47859461,40.685899 8.69455461,36.4867384 9.69854676,31.1990041 C9.80435954,30.6417197 9.93011488,30.0703597 10.0749686,29.4871825 C9.62847908,29.358404 9.19523548,29.2227804 8.77694494,29.0798428 C3.48389697,27.2706721 0,24.2870631 0,21.3122463 C0,18.4320406 3.24538223,15.6554196 8.32716999,13.8836624 C8.89522093,13.6856153 9.48818011,13.4990941 10.1032137,13.3245723 C9.96990283,12.7857066 9.8514539,12.2549497 9.74961112,11.7349249 C8.69679948,6.35413083 9.4375866,2.05425624 11.9392493,0.606163081 C14.5481032,-0.904180674 18.8927455,0.717611379 23.2273028,4.56638459 C23.491637,4.80108335 23.7566673,5.04560517 24.0220801,5.29951962 C24.3086788,5.02460406 24.5946526,4.75858234 24.8802632,4.50245917 L24.8802632,4.50245917 Z M36.0415294,29.8961188 L35.8242092,29.945917 C33.8939104,30.3802447 31.7763758,30.7002024 29.540027,30.8985887 C28.2210363,32.8085925 26.8696083,34.5275899 25.5175606,36.0064556 C25.9213263,36.3959337 26.3240403,36.7632638 26.7239193,37.1073577 C30.2125535,40.1094906 33.447526,41.2476828 34.9602039,40.3719738 C36.5543643,39.4491412 37.2354399,35.7777167 36.3010151,31.0571631 C36.2260354,30.6784127 36.1394331,30.2911745 36.0415294,29.8961188 Z M12.0640824,29.988568 L12.0313731,30.1178777 C11.9452324,30.4713498 11.8667374,30.8196901 11.796104,31.1623008 L11.796104,31.1623008 L11.7130668,31.5815051 C10.8544798,36.1034329 11.4839799,39.474909 12.9980218,40.3473856 C14.5936684,41.2676078 18.1147312,40.0240531 21.7377003,36.8570012 C22.0407489,36.5921123 22.3454805,36.3116687 22.6514199,36.0163647 C21.2504037,34.5110755 19.8599013,32.7935775 18.532119,30.9253711 C16.2063502,30.7361503 14.0304109,30.4231988 12.0640824,29.988568 Z M26.8976733,31.073697 L26.6730115,31.0833345 C25.7938064,31.1193912 24.9016956,31.1376146 24.0003845,31.1376146 C23.0479292,31.1376146 22.1104762,31.119494 21.1912711,31.0834028 C22.1384552,32.330947 23.1083103,33.4915544 24.080467,34.5404355 C25.0191263,33.5058834 25.9629227,32.3438916 26.8976733,31.073697 Z M24.0003845,13.6228276 C22.521233,13.6228276 21.0572836,13.6786342 19.6300054,13.7864045 C18.8233128,14.9667453 18.0434363,16.206859 17.3021469,17.4922306 L17.3021469,17.4922306 L17.0239065,17.97847 C16.3906858,19.1013808 15.8008816,20.2335502 15.2594384,21.3612712 C15.8800731,22.6497029 16.5650495,23.9448202 17.3084641,25.2287718 C18.0540605,26.51662 18.8408521,27.7628828 19.6544886,28.9505829 C21.0534267,29.0411685 22.5068437,29.0871029 24.0003845,29.0871029 C25.5004385,29.0871029 26.9724233,29.034942 28.3971202,28.9330058 C29.178216,27.7606338 29.9482457,26.5183112 30.6983593,25.2176257 C31.4479286,23.9178591 32.1382202,22.6165521 32.7617058,21.3314946 C32.1364792,20.068838 31.444524,18.7808599 30.6920372,17.4810537 C29.9479147,16.1956859 29.1733595,14.9597866 28.3797058,13.7883212 C26.9526772,13.6790545 25.4865128,13.6228276 24.0003845,13.6228276 Z M14.1725462,23.7726728 L14.1106548,23.9193808 C13.5272978,25.3155437 13.025949,26.6883121 12.6163676,28.0106326 C13.9865453,28.3086863 15.4688244,28.5462264 17.0406269,28.7215534 C16.5235349,27.9192365 16.0201515,27.0960458 15.5339197,26.2561909 C15.0566053,25.431821 14.6022908,24.6025521 14.1725462,23.7726728 Z M33.8676541,23.6989615 L33.7632855,23.8988895 C33.3551635,24.6787335 32.9251152,25.460908 32.4746538,26.2420162 C31.9912188,27.0802851 31.4993333,27.8957785 31.0008327,28.6856274 C32.5848956,28.4948588 34.087749,28.2391502 35.4796157,27.9215996 C35.0501166,26.5765075 34.5092518,25.1613944 33.8676541,23.6989615 Z M10.6549236,15.3001778 L10.440807,15.3610218 C9.94399085,15.5058657 9.46386313,15.6589227 9.00222105,15.8198711 C4.65624592,17.3350884 2.05051165,19.5644518 2.05051165,21.3122463 C2.05051165,23.1542517 4.88671232,25.5831736 9.44007032,27.1395174 C9.82086864,27.2696432 10.2159602,27.3934629 10.6245071,27.5109115 C11.2313913,25.5338598 12.0307388,23.458206 12.9937744,21.3617486 C12.0432696,19.2968856 11.2555557,17.2541049 10.6549236,15.3001778 Z M37.3723771,15.3300442 L37.3498491,15.4030948 C36.762059,17.2917611 35.9814701,19.2856869 35.0360177,21.3221597 C36.0393323,23.4351682 36.8585794,25.4797979 37.4660455,27.4028065 L37.812303,27.2984547 L37.812303,27.2984547 L38.2722766,27.1508178 C43.0233786,25.5766645 45.9494884,23.1677232 45.9494884,21.3122463 C45.9494884,19.5703437 43.2401336,17.3096409 38.7983148,15.7804312 C38.3391321,15.6223515 37.8633231,15.4721293 37.3723771,15.3300442 Z M24.000299,17.0260788 C26.3674839,17.0260788 28.2864664,18.9450614 28.2864664,21.3122463 C28.2864664,23.6794312 26.3674839,25.5984137 24.000299,25.5984137 C21.6331141,25.5984137 19.7141316,23.6794312 19.7141316,21.3122463 C19.7141316,18.9450614 21.6331141,17.0260788 24.000299,17.0260788 Z M31.0078622,14.0532331 L31.0805586,14.1678029 C31.5522711,14.9106594 32.0150236,15.673631 32.4666248,16.4537092 C32.951765,17.2917149 33.412927,18.1256904 33.8485372,18.9526012 C34.4547658,17.5310018 34.9706173,16.1445011 35.3843146,14.8185719 C34.0069544,14.5034276 32.5391451,14.2468767 31.0078622,14.0532331 Z M16.9974669,14.0484674 L16.4902822,14.1148588 C15.1508165,14.2955961 13.8625224,14.5239294 12.6459014,14.796189 C13.0622434,16.1403262 13.5736723,17.5331769 14.170456,18.9489803 C14.598369,18.1193177 15.0506009,17.2904693 15.5248476,16.4678674 L15.5248476,16.4678674 L15.8525227,15.8995003 L15.8575673,15.8995476 L16.1082033,15.4796797 C16.3996769,14.995598 16.696305,14.5182796 16.9974669,14.0484674 Z M34.8296176,2.26705386 C33.278379,1.50228269 30.0320126,2.73290957 26.5638355,5.75110313 C26.1972098,6.07015708 25.829082,6.4075708 25.4604403,6.76219118 C26.8322058,8.24121246 28.198866,9.94870142 29.5175584,11.826493 C31.7818066,12.0391523 33.9450054,12.3812808 35.9368747,12.8409195 C36.0146856,12.5184801 36.0864158,12.2001113 36.1508463,11.8870448 C37.1607313,6.98495792 36.5357394,3.24667864 34.9283586,2.31975659 L34.9283586,2.31975659 Z M21.6369591,5.89872982 C17.979164,2.72340888 14.5396534,1.47005935 12.9665553,2.38077303 C11.4590371,3.25340338 10.8599215,6.73095023 11.7619305,11.3410102 C11.8564498,11.8236403 11.9664511,12.3169576 12.0914111,12.8194766 C14.0779395,12.3692921 16.2393829,12.0330938 18.4972219,11.8238964 C19.8136938,9.96520189 21.1922665,8.25994688 22.5870739,6.76229938 C22.3455364,6.5337433 22.1052232,6.31223235 21.8658582,6.09970342 L21.8658582,6.09970342 Z M24.0242489,8.22984548 L23.8712963,8.39378086 C22.9619965,9.38609494 22.0582251,10.4733084 21.174881,11.6380367 C22.1080394,11.5944919 23.0514177,11.5723159 24.0003845,11.5723159 C24.9585031,11.5723159 25.9091438,11.5948849 26.8477492,11.6392264 C25.9169971,10.398561 24.969918,9.25447954 24.0242489,8.22984548 Z" id="Combined-Shape-Copy-22"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>React Js</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-typescript2x-2" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45px" height="45px" viewBox="0 0 45 45" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-typescript2x-2.svg" alt="ic-technology-typescript2x-2">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-typescript" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M45,0 L45,45 L0,45 L0,0 L45,0 Z M36.18,20.6775 C35.40375,20.475 33.5475,20.4075 32.76,20.565 C30.33,21.015 28.63125,22.59 28.1475,24.84 C27.99,25.48125 28.04625,27.07875 28.215,27.73125 C28.44,28.485 28.92375,29.39625 29.4525,29.98125 C30.375,30.94875 31.365,31.57875 33.69375,32.56875 C35.71875,33.46875 36.43875,33.87375 36.79875,34.36875 C37.0575,34.7625 37.13625,34.99875 37.13625,35.51625 C37.13625,36.07875 36.95625,36.48375 36.54,36.86625 C35.5725,37.74375 33.615,37.845 32.1525,37.09125 C31.66875,36.82125 30.83625,36.03375 30.465,35.44875 L30.465,35.44875 L30.1725,35.055 L28.90125,35.7975 L27.21375,36.77625 L26.78625,37.04625 C26.74125,37.125 27.54,38.32875 27.95625,38.77875 C29.01375,39.9375 30.735,40.8375 32.535,41.175 C33.37875,41.32125 35.17875,41.34375 35.96625,41.20875 C38.475,40.7925 40.23,39.52125 40.95,37.6425 C41.59125,35.92125 41.3775,33.62625 40.42125,32.16375 C39.5775,30.85875 38.1825,29.9475 34.965,28.56375 C33.22125,27.79875 32.65875,27.4275 32.355,26.80875 C32.22,26.51625 32.1525,26.31375 32.1525,25.95375 C32.1525,24.7725 33.0525,24.06375 34.4025,24.15375 C35.33625,24.22125 35.9325,24.58125 36.5175,25.41375 C36.6975,25.70625 36.8775,25.8975 36.9225,25.86375 C38.10375,25.1325 40.05,23.81625 40.05,23.74875 C40.005,23.54625 39.38625,22.75875 38.97,22.30875 C38.1825,21.4875 37.305,20.97 36.1575,20.7 L36.1575,20.7 Z M17.775,20.71125 L9.9,20.745 L9.9,22.59 L9.86625,22.57875 L9.86625,24.4125 L15.71625,24.4125 L15.71625,41.0625 L19.8675,41.0625 L19.8675,24.4125 L25.7175,24.4125 L25.7172034,22.0671442 C25.715918,21.3201123 25.7090625,20.7745313 25.6725,20.75625 C25.6725,20.7225 22.10625,20.71125 17.775,20.71125 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>TypeScript</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-vue2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="42px" viewBox="0 0 48 42" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-vue2x.svg" alt="ic-technology-vue2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-vue" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M40.1325,-2.04902761e-12 L48,0.0015 L24,41.4015 L0,0.0015 L7.743,-2.04902761e-12 L24.0053856,27.9538312 L40.1325,-2.04902761e-12 Z M18.36,0.0015 L24,9.6015 L29.52,0.0015 L38.3985,0.0015 L24,24.8415 L9.4815,0.0015 L18.36,0.0015 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Vue</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-wpf2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="57px" height="18px" viewBox="0 0 57 18" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-wpf2x.svg" alt="ic-technology-wpf2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-wpf" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M4.66502683,17.8125 L11.4713775,4.78726126 L11.8919946,17.8125 L15.779517,17.8125 L24.8164132,0 L21.0945886,0 L14.9382826,12.3326654 L14.5049195,0 L10.3369857,0 L3.92576029,12.4663199 L3.76006261,0 L0,0 L0.701028623,17.8125 L4.66502683,17.8125 Z M26.486136,17.8125 L27.977415,11.0204212 L30.5576902,11.0203489 C32.1491805,11.0184214 33.2392229,10.9779442 33.8278175,10.8989171 C34.8644902,10.7612125 35.6887299,10.5607307 36.3005367,10.2974719 C36.9123435,10.034213 37.483788,9.64742497 38.0148703,9.13710778 C38.5459526,8.62679059 38.994186,7.94636767 39.3595707,7.09583902 C39.7249553,6.24531037 39.9076476,5.3704809 39.9076476,4.47135061 C39.9076476,3.49931787 39.67822,2.6629647 39.2193649,1.9622911 C38.7605098,1.2616175 38.1380814,0.75940058 37.3520796,0.455640348 C36.5660778,0.151880116 35.4975403,0 34.1464669,0 L34.1464669,0 L26.5498658,0 L22.6368515,17.8125 L26.486136,17.8125 Z M29.9235837,8.06771994 L28.6147138,8.06787176 L29.7491055,2.92824864 L32.5022361,2.92824864 C33.7513417,2.92824864 34.5564624,2.99102575 34.9175984,3.11657998 C35.2787343,3.24213421 35.5591458,3.44261596 35.7588327,3.71802524 C35.9585197,3.99343452 36.0583631,4.34579638 36.0583631,4.77511085 C36.0583631,5.4150324 35.8629249,6.00230218 35.4720483,6.53692019 C35.0811717,7.0715382 34.5458408,7.4603513 33.8660555,7.70335948 C33.1862701,7.94636767 31.8309481,8.06787176 29.8000894,8.06787176 L29.9235837,8.06771994 Z M43.8588998,17.8125 L45.5158766,10.2306446 L54.5655188,10.2306446 L55.2155635,7.25379434 L46.1659213,7.25379434 L47.1091234,2.97685027 L56.3372093,2.97685027 L57,0 L43.9226297,0 L40.0096154,17.8125 L43.8588998,17.8125 Z" id="WPF"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>WPF</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-html52x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" height="48px" viewBox="0 0 42 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-html52x.svg" alt="ic-technology-html52x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-html5" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M33.7073864,14.07 L34.1846591,8.82 L7.81534091,8.82 L9.21732955,24.84 L27.4730114,24.84 L26.8167614,31.68 L20.9403409,33.27 L15.09375,31.68 L14.7059659,27.48 L9.48579545,27.48 L10.1420455,35.82 L20.9403409,38.82 L21.0596591,38.82 L21.0596591,38.79 L31.7684659,35.82 L33.2599432,19.5 L14.0497159,19.5 L13.6022727,14.07 L33.7073864,14.07 Z M0,0 L42,0 L38.1818182,43.14 L20.9403409,48 L3.81818182,43.14 L0,0 Z" id="Shape-Copy-9"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>HTML5</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.tab-pane -->
                                <div id="database" role="tabpanel" class="tabs-pane fade">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-mango-db" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="40px" viewBox="0 0 18 40" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-mango-db.svg" alt="ic-technology-mango-db">
                                                            <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                                                            <desc>Created with Sketch.</desc>
                                                            <defs></defs>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-mango-db" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M17.9245337,17.7397594 C17.7998862,16.1281857 17.4205536,14.5741442 16.8929917,13.0517285 C15.8001366,9.65228362 14.0463131,6.64378838 11.575935,4.05517705 C10.9513502,3.4004542 10.2566932,2.80057196 9.82110085,1.98570107 C9.54552889,1.47026663 9.28309544,0.947766843 9.01459806,0.428295063 L8.84447111,0 C8.81583588,0.0982420725 8.79764409,0.1332324 8.79663344,0.168559172 C8.77473591,1.01539238 8.29433784,1.58970477 7.69603,2.12566238 C7.02327057,2.72890908 6.39700128,3.38363193 5.75051888,4.01581294 C5.08752912,4.88653377 4.42487624,5.75725461 3.76256024,6.62763899 C3.22623926,7.61174195 2.69059204,8.5958449 2.15494482,9.57994785 L1.08028154,12.4790983 L1.04794057,12.524182 C0.456370436,14.4647994 0.164627989,16.4599209 0.0211149611,18.4752292 C-0.0327866458,19.2325679 0.028526432,20.0010093 0.0713108324,20.7623854 C0.132287025,21.8507864 0.321616419,22.920683 0.60561051,23.9737573 C1.63715251,27.799815 3.73055617,30.9735049 6.5923946,33.6697788 C7.12433609,34.1707461 7.67008985,34.6262932 8.2252764,35.1030364 C8.32027799,34.7783666 8.39607712,34.4536967 8.48231969,34.1290268 C8.56856226,33.8057028 8.65581549,33.4840609 8.7140966,33.1597275 C8.6554786,33.4840609 8.58978602,33.8057028 8.52476721,34.1290268 L8.24650016,35.1030364 L8.49512132,35.9444865 L8.72555069,37.2512406 L8.83537522,38.6148541 C8.83436456,38.8917487 8.82324736,39.1693162 8.84009161,39.4458743 C8.84413423,39.5165279 8.9371145,39.5817983 8.9889948,39.6497603 L9.45254861,39.8122634 L9.93564177,40 L9.85276805,38.787787 L9.84906231,37.5940786 L10.0158204,35.7755909 L10.1367621,35.3795946 L10.4827431,34.7672639 C10.9099133,34.4240895 11.3684139,34.112541 11.7575161,33.7306754 C12.4616058,33.0396165 13.1640111,32.3398099 13.7939862,31.5831441 C14.6116062,30.6017327 15.3150221,29.5304904 15.8796415,28.3815291 C16.2576265,27.6130877 16.6133771,26.8291698 16.9078146,26.0260745 C17.1672161,25.3181933 17.3279103,24.5743124 17.5323995,23.8462444 C17.5505913,23.7937589 17.574847,23.7422828 17.5863011,23.688788 C18.0087549,21.7236101 18.0798377,19.7385819 17.9245337,17.7397594 Z M9.97438355,34.3517537 L9.70319109,33.7586004 L9.97438355,34.3517537 L10.3729186,34.6915636 L9.97438355,34.3517537 Z" id="Shape-Copy-10"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Mongo DB</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-my-sql2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="98px" height="51px" viewBox="0 0 98 51" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-my-sql2x.svg" alt="ic-technology-my-sql2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-my-sql" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M40.4391196,35.6840096 C40.4640652,35.6840096 40.4391196,47.0858356 40.4391196,47.1357269 C40.4640652,49.95514 36.9517174,50.5488465 35.3441087,50.5981835 L25.154087,50.5981835 L25.154087,48.4218139 L25.4500549,48.4224981 C27.1231115,48.4262838 35.3222063,48.4437163 35.3441087,48.4218139 C37.4218043,48.2239117 37.1745652,47.1850639 37.1745652,46.8385965 L37.1745652,45.9976509 L30.3233804,45.9976509 C27.1325543,45.9483139 25.1041957,44.5629987 25.0798043,42.95539 C25.0798043,42.8073791 25.154087,35.7826835 25.0798043,35.7084009 L28.2950217,35.7084009 L28.2950217,42.7330965 C28.2706304,43.1289009 28.4186413,44.0191835 30.1997609,44.0435748 C31.0900435,44.0685204 37.1496196,44.0435748 37.1989565,44.0435748 L37.1989565,35.6840096 L40.4391196,35.6840096 Z M70.416587,31.2314878 C70.713163,31.2314878 70.9853478,31.2314878 71.3068696,31.2813791 C74.002663,31.6522378 75.3879783,32.8396509 75.3879783,34.7937269 L75.3879783,42.4609117 C75.3879783,44.0435748 74.7942717,44.8845204 73.4582935,45.42889 L76.6491196,48.2981943 L72.8895326,48.2981943 L70.3173587,45.9976509 L67.7202391,46.1462161 L64.2827283,46.1462161 C63.6890217,46.1462161 63.0703696,46.0719335 62.3779891,45.8740313 C60.3252391,45.3302161 59.3357283,44.2414769 59.3357283,42.4609117 L59.3357283,34.7937269 C59.3357283,32.8396509 60.6960978,31.6522378 63.416837,31.2813791 C63.6890217,31.2314878 64.0105435,31.2314878 64.2827283,31.2314878 L70.416587,31.2314878 Z M20.8750761,31.2070965 C21.8326504,31.5107559 22.3269113,32.0571975 22.3788737,33.1588403 L22.3834565,33.3590748 L22.3834565,46.0968791 L19.1682391,46.0968791 L19.1682391,33.3341291 L14.1719022,44.4643248 C13.57875,45.7997487 12.7871413,46.2698356 11.2039239,46.2698356 C9.6932001,46.2698356 8.90325101,45.8415126 8.318188,44.6411015 L8.23594565,44.4643248 L3.24016304,33.3341291 L3.24016304,46.0968791 L-1.42096962e-12,46.0968791 L-1.42096962e-12,33.3590748 C-1.42096962e-12,32.1223248 0.494478261,31.5286182 1.53332609,31.2070965 C3.90026196,30.4659889 5.5507938,31.064966 6.30615733,32.6029349 L6.38109783,32.7653682 L11.1301957,43.7226074 L16.0273043,32.7653682 C16.7690217,31.1078682 18.4265217,30.4404335 20.8750761,31.2070965 Z M57.4065978,31.1821509 L57.4065978,33.3341291 L48.1811413,33.3341291 C48.081913,33.3341291 47.9582935,33.3590748 47.8596196,33.3590748 C46.7215435,33.4577487 46.3756304,33.6556509 46.2270652,34.32364 C46.2104348,34.3894226 46.2048913,34.4443646 46.2030435,34.5030844 L46.2021196,34.5958248 L46.2021196,36.0548682 C46.2021196,36.1535422 46.2021196,36.2527704 46.2270652,36.3514443 C46.3673768,37.1692306 46.9264999,37.5677108 48.0926332,37.6094624 L48.3047609,37.61314 L52.2123587,37.61314 C53.1769239,37.61314 54.1664348,37.7617052 54.9824348,38.0832269 C56.4119519,38.622053 57.197664,39.4494471 57.2764106,40.3132395 L57.2829783,40.4574987 L57.2829783,42.8317704 C57.2829783,43.9698465 56.5900435,44.8351835 55.2052826,45.4782269 C54.4484315,45.8344509 53.5110737,46.05058 52.5378839,46.0902436 L52.2123587,46.0968791 L42.9375652,46.0968791 L42.9375652,43.9449009 L51.8415,43.9449009 C51.9651196,43.9449009 52.0643478,43.9199552 52.1879674,43.9199552 C52.8060652,43.8706182 53.2761522,43.7226074 53.548337,43.4748139 C53.8296685,43.2584797 53.9781557,43.0043718 54.0108818,42.7949344 L54.0178696,42.7081509 L54.0178696,40.8283574 C54.0178696,40.6060639 53.943587,40.432553 53.7706304,40.2346509 C53.4491087,39.8637922 53.0283587,39.6908356 51.9900652,39.5916074 C51.890837,39.5672161 51.7672174,39.5672161 51.6435978,39.5672161 L48.3047609,39.5672161 C47.9832391,39.5672161 47.6861087,39.5422704 47.364587,39.5422704 C44.7109609,39.2555802 43.073665,38.0903497 42.9674604,36.6945369 L42.9619565,36.5493465 L42.9619565,34.669553 C42.9619565,33.0126074 43.8029022,32.0729878 45.7320326,31.4543356 C46.3064953,31.2937332 46.9230206,31.1967025 48.0578508,31.1836604 L48.3291522,31.1821509 L57.4065978,31.1821509 Z M80.6315543,31.1821509 L80.6315543,42.3372922 C80.6315543,43.429313 81.2926421,43.906226 83.0302299,43.9426318 L83.2530652,43.9449009 L91.7118587,43.9449009 L91.7118587,46.0968791 L83.3024022,46.0968791 C83.0058261,46.0968791 82.6843043,46.0719335 82.3877283,46.0469878 C79.1495306,45.8072408 77.5162926,44.6370446 77.4202821,42.5369047 L77.4157826,42.3372922 L77.4157826,31.1821509 L80.6315543,31.1821509 Z M94.3089783,43.9449009 L94.3089783,44.3157596 L93.6659348,44.3157596 L93.6659348,46.0968791 L93.1958478,46.0968791 L93.1958478,44.3157596 L92.5528043,44.3157596 L92.5528043,43.9449009 L94.3089783,43.9449009 Z M95.4465,43.9449009 L96.0158152,45.42889 L96.5845761,43.9449009 L97.2276196,43.9449009 L97.2276196,46.0968791 L96.8068696,46.0968791 L96.8068696,44.4643248 L96.7824783,44.4643248 L96.1638261,46.0968791 L95.8423043,46.0968791 L95.2242065,44.4643248 L95.2242065,46.0968791 L94.7790652,46.0968791 L94.7790652,43.9449009 L95.4465,43.9449009 Z M70.0701196,33.3834661 L65.1730109,33.3834661 C63.7383587,33.3834661 62.8231304,34.0021182 62.8231304,34.9666835 L62.8231304,42.2630096 C62.8231304,42.3866291 62.8480761,42.4858574 62.8724674,42.6094769 C63.0703696,43.4997596 63.9113152,43.9942378 65.1730109,43.9942378 L68.1160435,43.9942378 L65.42025,41.5706291 L69.179837,41.5706291 L71.529163,43.6727161 C71.949913,43.4504226 72.2464891,43.1039552 72.3457174,42.6588139 C72.3701087,42.5351943 72.3701087,42.4359661 72.3701087,42.3372922 L72.3701087,34.9666835 C72.3701087,34.8924009 72.3701087,34.7937269 72.3457174,34.6944987 C72.1478152,33.853553 71.3068696,33.3834661 70.0701196,33.3834661 Z M67.3000435,1.5517052 C67.6709022,1.77399868 68.0667065,2.24408564 68.4375652,2.39265086 C69.0562174,2.44198781 69.6743152,2.46637912 70.2929674,2.51627042 C71.4554348,2.7884552 72.5436196,3.01074868 73.4582935,3.5301726 C77.7373043,6.0280639 80.4829891,8.57584651 83.055163,12.7805748 C83.574587,13.6708574 83.8717174,14.6354226 84.291913,15.5999878 C84.9100109,17.03464 85.6029457,18.5186291 86.3202717,19.9039443 C86.6661848,20.5469878 86.8890326,21.2643139 87.3341739,21.8081291 C87.5320761,22.0559226 88.0265543,22.1296509 88.2987391,22.2532704 C89.1396848,22.6740204 90.10425,22.9955422 90.8958587,23.5149661 C92.3055652,24.4052487 93.6908804,25.4690422 94.9520217,26.5572269 C95.3758602,26.8964878 95.6547085,27.3990663 96.0060519,27.8160587 L96.1887717,28.0162704 L96.1887717,28.2391182 L95.0013587,28.5850313 C94.1360217,28.8078791 93.3688043,28.7585422 92.528413,28.9808356 C92.0333804,29.1050096 91.390337,29.3023574 90.8459674,29.37664 C90.8459674,29.4015856 90.870913,29.4015856 90.8958587,29.4259769 C91.2173804,30.3168139 92.9486087,31.0834769 93.7152717,31.6278465 C94.572663,32.2432958 95.3910721,32.9761299 96.0661567,33.7913087 L96.3123913,34.1007922 L97.054663,34.8430639 C97.1730717,35.0408552 97.2283291,35.2861874 97.3345333,35.4905067 L97.4255217,35.6346726 L97.4255217,35.6840096 C97.104,35.56039 96.9060978,35.2632596 96.6588587,35.0653574 C96.1144891,34.669553 95.5701196,34.2244117 95.0013587,33.8784987 C94.0861304,33.2847922 92.9979457,32.9632704 92.0089891,32.3695639 C91.4646196,32.0230965 90.9451957,31.6278465 90.4507174,31.2314878 C89.9806304,30.8855748 89.4612065,30.2175856 89.1396848,29.7231074 C88.9911196,29.4509226 88.9417826,29.1294009 88.7438804,28.9314987 C88.818163,28.4614117 89.3869239,28.4614117 89.7577826,28.3134009 C91.0688152,27.74464 92.57775,27.5711291 94.5562174,27.6204661 C94.5068804,27.1010422 93.2701304,26.4829443 92.8743261,26.2107596 C92.0583261,25.6419987 91.2417717,25.0239009 90.3764348,24.5288682 C89.9312935,24.2566835 89.1640761,24.03439 88.6945435,23.8364878 C88.0265543,23.564303 86.5425652,23.2921182 86.1467609,22.7726943 C85.4294348,21.8081291 84.9100109,20.6212704 84.4155326,19.4338574 C83.8961087,18.27139 83.2281196,17.03464 82.70925,15.8228356 C82.4614565,15.2291291 82.337837,14.7097052 82.0412609,14.1409443 C80.2108043,10.6535422 77.5643478,7.73490086 74.2997935,5.68215086 C73.236,4.98921607 72.048587,4.37111825 70.7381087,3.9753139 C70.1018758,3.78430148 69.3569002,3.8482438 68.6585286,3.76114493 L68.3139457,3.70312912 L67.8194674,3.70312912 C67.3743261,3.57950955 67.002913,3.10997694 66.6320543,2.86218347 C65.8653913,2.34275955 65.0987283,1.99684651 64.2078913,1.60104216 C63.8619783,1.4774226 62.94675,1.1309552 62.6252283,1.37819433 C62.4273261,1.45247694 62.3530435,1.52675955 62.2787609,1.72466173 C62.1058043,2.02123781 62.2787609,2.46637912 62.4023804,2.7385639 C62.7737935,3.5301726 63.2932174,4.00025955 63.76275,4.66769433 C64.1835,5.23700955 64.6779783,5.90444433 64.9995,6.57243347 C65.6430978,7.95719433 65.9147283,9.49107477 66.5084348,10.8758356 C66.7556739,11.3952596 67.0771957,11.9889661 67.423663,12.4341074 C67.6958478,12.8055204 68.1653804,13.1020965 68.3139457,13.5721835 C68.6354674,14.0666617 67.8688043,15.6992161 67.6958478,16.21864 C67.05225,18.2464443 67.2008152,21.0664117 67.9181413,22.8225856 C68.2152717,23.5149661 68.4874565,24.3309661 69.2785109,24.5288682 C69.3278478,24.4795313 69.3034565,24.5044769 69.4021304,24.4545856 C69.5506957,23.1191617 69.6249783,21.8081291 70.0701196,20.74489 C70.3666957,20.0769009 70.8861196,19.6068139 71.2569783,19.038053 C71.529163,19.2115639 71.529163,19.6567052 71.653337,19.9532813 C71.9743043,20.7199443 72.3207717,21.56089 72.7165761,22.327553 C73.5575217,23.9107704 74.47275,25.4440965 75.4866522,26.8294117 C75.8575109,27.32389 76.3525435,27.8682596 76.7976848,28.3134009 C76.93605,28.4517661 77.1063457,28.5425904 77.2449947,28.6874836 L77.3420543,28.8078791 L77.4157826,28.8078791 L77.4157826,28.8572161 C76.6491196,28.6099769 76.1790326,27.8433139 75.6102717,27.3981726 C74.47275,26.5572269 73.1373261,25.27114 72.3950543,24.0587813 C72.1640761,23.6138248 71.9333442,23.1686219 71.7099215,22.7161098 L71.3811522,22.0309769 L71.3811522,21.98164 C71.232587,22.1795422 71.2819239,22.3774443 71.2076413,22.6490748 C70.8861196,23.9107704 71.1333587,25.2955313 70.0207826,25.7656182 C68.7346957,26.2850422 67.8194674,24.9246726 67.423663,24.3065748 C66.1375761,22.2288791 65.8160543,18.7908139 66.6813913,15.9957922 C66.8792935,15.3776943 66.9042391,14.6354226 67.2507065,14.1409443 C67.2008152,13.695803 66.8299565,13.5721835 66.6320543,13.2999987 C66.285587,12.8299117 65.9890109,12.2855422 65.7168261,11.7666726 C65.1974022,10.7522161 64.8514891,9.54041173 64.4307391,8.42728129 C64.2577826,7.98213999 64.232837,7.56194433 64.0349348,7.14119433 C63.7383587,6.49815086 63.2189348,5.85510738 62.7981848,5.28634651 C62.2050326,4.46979216 60.5475326,2.88712912 61.2155217,1.27952042 C62.2543696,-1.29265349 65.890337,0.660868248 67.3000435,1.5517052 Z M69.3278478,6.12729216 C69.5506957,6.32519433 69.8472717,6.4488139 70.0207826,6.69605303 C70.1444022,6.86900955 70.1687935,7.04252042 70.2929674,7.19053129 C70.2929674,7.74731825 70.1726296,8.12359847 69.8959873,8.35533858 L69.7979348,8.42728129 L69.7236522,8.5015639 C69.5506957,8.10575955 69.3527935,7.7099552 69.179837,7.31415086 C68.9820457,7.03742042 68.7207483,6.80787607 68.522815,6.52447573 L68.3882283,6.30024868 L68.3139457,6.30024868 L68.3139457,6.25091173 C68.6354674,6.17662912 68.9325978,6.12729216 69.3278478,6.12729216 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>MySQL</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-ms-sql2x1">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="54px" viewBox="0 0 50 54" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-ms-sql2x1.svg" alt="ic-technology-ms-sql2x1">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-ms-sql" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M20.0665873,0.00056943338 C20.1566706,0.00871118469 20.1730081,0.0413912698 20.3124443,0.59721657 C20.5667349,1.51274897 21.0260387,2.7877623 21.5098488,3.89127115 C22.1330951,5.31355218 23.199232,7.42245423 24.1670035,9.12268561 L24.1670035,9.12268561 L24.332805,9.41725751 C26.1038629,9.68696938 28.2841255,10.0627161 29.2760728,10.2589122 C34.5410293,11.2970232 38.6991185,12.6947659 41.9139426,14.4847827 C44.251381,15.7926646 46.1621151,17.3701666 47.7366062,19.3155929 C48.277938,19.985855 48.7291487,20.6151822 49.3851079,21.6287926 L49.3851079,21.6287926 L49.5,21.8086273 L48.7535793,21.9231395 C43.9240665,22.6593827 36.6371144,24.4226705 30.0473104,26.3735642 C30.0505246,26.4346117 30.0612475,26.5263676 30.0797883,26.6233424 C30.2846502,27.7922491 30.4158799,28.985581 30.4897391,30.4568634 C30.5389408,31.3560746 30.5144345,34.0126225 30.4569128,34.8055386 C30.235562,37.6418081 29.8993569,40.03684 29.4729173,41.8350362 C28.7594742,44.8021392 27.4473289,48.2761038 25.6266781,51.9790175 C25.0935151,53.0660921 24.6342491,53.9406142 24.5685587,53.9816245 C24.5358458,54.0061252 23.7320547,54.0061252 23.1334659,53.9816245 C20.1729324,53.8671123 14.7929325,53.106914 12.0128303,52.4038963 C10.3398602,51.9870839 8.11738954,51.2433199 6.79692421,50.6628431 C4.20545995,49.5266542 1.98291363,47.859216 0.867575006,46.2244956 C-0.00171746978,44.9410766 -0.223257334,43.5515511 0.227839884,42.1782713 C0.482092617,41.4179976 1.07255044,40.4289633 1.81889547,39.4971474 C2.31911872,38.8760373 3.30326551,37.8951824 3.96750692,37.3719995 C4.00884649,37.3392751 4.05104555,37.3056925 4.09406365,37.2712897 L4.00850201,37.2984976 C9.56061322,32.7537419 13.1609575,28.658554 14.8667917,24.9475362 C15.8262431,22.8794937 16.2118012,21.097581 16.1625995,19.0704357 C16.0805715,15.9152432 15.2029968,13.6265064 13.185615,11.305165 C12.7695663,10.8290222 9.52383608,7.66966419 9.13194243,7.28846063 L9.09325411,7.25083667 C8.74067369,6.92380966 8.42908834,6.60507517 8.32236497,6.3435968 C8.27895515,6.23643364 8.25795011,6.13809638 8.25081204,6.05094602 L8.22399946,6.02467385 C8.22399946,5.9265959 8.24048826,5.82851795 8.27327676,5.7467612 L8.27327676,5.7467612 L8.30106827,5.69319939 C8.31708384,5.65361235 8.33049592,5.63232436 8.33049592,5.63232436 C8.33140033,5.63580707 8.33232165,5.63927807 8.33325975,5.64273742 C8.50894788,5.38326234 8.98813042,4.92060703 9.38033317,4.64325235 C10.5941508,3.79334397 12.5622931,2.81241371 15.0965004,1.78236909 C16.9744837,1.02228384 19.8859668,-0.0239689004 20.0663982,0.000418660207 Z M26.1678965,48.3331715 C26.1023195,48.3413509 25.8890618,48.4312494 25.6348469,48.5457239 C24.0193228,49.2976675 22.4200229,49.9107489 20.8043475,50.4011763 C19.5250286,50.7935258 18.2620849,51.1122603 15.6376431,51.7007657 L15.6376431,51.7007657 L14.4158458,51.9788668 L14.6126525,52.0196886 C15.4737005,52.2157691 18.90182,52.812567 20.9437838,53.1231598 C22.1166819,53.2948527 24.043867,53.5646236 24.1833032,53.5726523 C24.2408249,53.5809825 24.2817065,53.5154716 24.3881652,53.2539178 C24.87224,52.0932659 26.2007228,48.4150036 26.1678965,48.3331715 L26.1678965,48.3331715 Z M17.3928681,45.9055349 C17.3928681,45.9137144 17.1631216,46.2488077 16.8925692,46.6576292 C15.916629,48.1453081 14.7437687,49.7146684 13.5628908,51.1206282 C13.3250135,51.3985785 13.1282068,51.6519528 13.1282068,51.6681987 C13.1282068,51.7008787 13.3989483,51.7745691 13.4808629,51.7581349 C13.5136514,51.7500308 14.0713585,51.5946967 14.7192624,51.4067203 C18.2292964,50.4012517 22.5348015,49.1343047 23.9455014,48.6929916 C24.8312449,48.415079 26.0366668,48.0145501 26.0941885,47.9818323 C26.1270148,47.9572939 26.0286115,47.9408597 25.8481802,47.9245762 C24.6589445,47.8265359 22.6415249,47.4832254 21.2473138,47.1316977 C20.1154486,46.845568 19.2708893,46.5922313 18.204601,46.1917778 C17.761786,46.0281135 17.4009234,45.8974309 17.3928681,45.9055349 Z M15.9494267,45.9465075 C15.9411731,45.938215 15.7361977,45.9954711 15.4983203,46.0690484 C14.1942303,46.4777191 12.2014304,47.0416485 8.60929276,48.0144747 C7.25619019,48.3822104 6.13260717,48.6847745 6.11623182,48.6929163 C6.05069263,48.7091621 6.87074562,49.232345 7.52674263,49.5838726 C8.05166126,49.8617853 8.75693557,50.1886615 9.43766578,50.4584324 C9.98716633,50.6790889 12.0619942,51.4066449 12.3573176,51.4884016 L12.3573176,51.4884016 L12.4803029,51.5211194 L12.7181803,51.1041939 C12.8575409,50.8753956 13.1035492,50.4666119 13.2675674,50.2050581 C13.4398299,49.9352872 13.9237157,49.1669471 14.3584754,48.4885055 C15.3752972,46.8864275 15.9575106,45.9546493 15.9494267,45.9465075 Z M10.84829,41.238276 L9.39678415,42.9793292 C7.28912997,45.5132608 6.32124507,46.7311311 5.55039375,47.8428194 L5.55039375,47.8428194 L5.31259199,48.1860545 L5.46012136,48.2923496 C5.5422628,48.3496057 5.61612203,48.3985693 5.62429079,48.3985693 C5.63238392,48.3985693 6.7068031,48.0307582 8.01070399,47.5730485 C10.331578,46.771953 15.3425843,44.9983704 15.3998413,44.9575486 C15.4163301,44.9492184 15.2195613,44.8185357 14.9570641,44.6713057 C13.497276,43.8213974 12.2917406,42.8485335 11.1106359,41.5325098 L11.1106359,41.5325098 L10.84829,41.238276 Z M9.79860407,40.837747 C9.7904353,40.837747 9.40487728,40.9275325 8.92916032,41.0421578 C8.45348117,41.1565946 7.13320494,41.4671874 5.99324656,41.7286657 C3.94284936,42.2028474 1.75312937,42.7178508 1.63014411,42.7505309 C1.54822958,42.7749185 1.54822958,42.9711874 1.63846415,43.3636123 C1.82710205,44.2054543 2.30266774,45.1291285 3.00801769,46.0036506 C3.3442606,46.4287178 4.09866094,47.1970202 4.533345,47.556765 L4.533345,47.556765 L4.90241422,47.8673577 L5.24701498,47.3360331 C5.43565289,47.0417616 5.77185797,46.5512964 5.9933222,46.240666 C6.21471079,45.9300733 6.80516861,45.096373 7.31359844,44.3852136 C8.77346219,42.3499266 9.81501723,40.8540306 9.79860407,40.837747 Z M28.5052971,40.2001273 C28.4806395,40.2001273 28.3575786,40.2491286 28.2018049,40.3472442 C26.8732842,41.1400096 23.0023876,42.9873579 19.2708893,44.6139742 C18.647643,44.8837451 18.1555506,45.112468 18.1718882,45.1289777 C18.2210898,45.1697995 19.0411428,45.5376484 19.6153009,45.7665974 C21.6655847,46.5839388 23.8470981,47.1969448 26.2827886,47.6384841 C26.3319903,47.6547299 26.3811919,47.6628716 26.3893607,47.6628716 C26.3976807,47.6628716 26.569792,47.1480566 26.7665987,46.5266827 C27.2175446,45.1126942 27.4637042,44.3115609 27.7507077,43.2898088 C28.095195,42.0720139 28.5134659,40.3881414 28.5052971,40.2001273 Z M20.4026032,37.3801036 C20.3944345,37.3801036 20.1319374,37.4864364 19.812032,37.6172698 C17.5566215,38.5817658 15.2850248,39.3664647 12.6114191,40.0938699 L12.6114191,40.0938699 L11.8651875,40.2982429 L12.0128682,40.4780776 C13.0215212,41.7450623 14.5632617,43.0528688 16.3019979,44.1155181 C16.5972079,44.2953151 16.8433297,44.4425451 16.851385,44.4425451 C16.8597051,44.4425451 17.1139956,44.0092984 17.4173744,43.4697566 C18.6146654,41.36093 19.5497239,39.4807885 20.263167,37.7560942 C20.3452328,37.5599383 20.4109233,37.3884338 20.4026032,37.3801036 Z M21.7065798,36.9549986 C21.6982597,36.9632535 21.6573781,37.1021532 21.591612,37.2574496 C21.066769,38.8759242 20.0333449,41.2054828 19.0082031,43.1181913 C18.8197164,43.4696059 18.671998,43.7556603 18.671998,43.7639528 C18.671998,43.7720945 18.7622325,43.7475185 18.8606359,43.7066967 C18.9591905,43.6658748 19.4839957,43.4696059 20.0171587,43.2735253 C23.6829665,41.9083873 27.2668598,40.4207838 28.3575408,39.8158442 L28.3575408,39.8158442 L28.620038,39.668878 L28.4312866,39.6279431 C26.3483278,39.1457328 23.9044307,38.2056998 22.149357,37.1920894 C21.9115552,37.0531896 21.7147485,36.9468569 21.7065798,36.9549986 Z M8.91282279,34.6744413 C8.90498622,34.6766185 8.90131045,34.6785443 8.89763515,34.6804703 C8.89337249,34.6836329 8.88920256,34.6852911 8.88394806,34.6875686 C8.49335897,34.8924429 8.11029162,35.0974131 7.73186933,35.3040324 L8.1693639,35.0671595 C7.71228372,35.3175257 7.12696403,35.6437531 6.67393895,35.9004534 C5.50939866,36.5626491 4.82866845,37.0775772 3.9757135,37.9603164 C2.69639453,39.2845572 1.77782475,40.8539929 1.58922466,42.0554666 C1.56464274,42.1945548 1.57288714,42.2026966 1.63018193,42.1862623 C1.66315953,42.1781959 2.10593671,42.055542 2.61436654,41.9166422 C4.32031426,41.4507908 9.74932676,39.8649585 9.80677283,39.8158442 C9.81509286,39.8077401 9.68378757,39.5298275 9.51976941,39.1946587 C8.92931159,37.9849679 8.73235365,37.1021155 8.79811975,35.9086705 C8.81441946,35.6390504 8.85537673,35.2467009 8.88820305,35.0341107 C8.93740472,34.7398392 8.9456113,34.6744413 8.91282279,34.6744413 L8.91282279,34.6744413 Z M29.2516043,32.2550973 L29.1203747,32.3531752 C28.9561674,32.5003675 28.2018049,33.0397586 27.701506,33.3749273 C26.3647031,34.2658837 24.8230383,35.1650195 23.2154183,35.9987198 C22.8136362,36.2112723 22.4691111,36.391107 22.4610558,36.399211 C22.4281916,36.4319288 23.5844497,37.1431635 24.380072,37.5764102 C25.5856831,38.2383799 26.9224859,38.8023846 28.1526032,39.1865923 C28.4314379,39.2684622 28.6692396,39.3337847 28.6692396,39.3337847 C28.6772949,39.3254921 28.7184413,39.0640138 28.767643,38.7452793 C29.0547977,36.9223939 29.2516043,34.4211801 29.2516043,32.5983701 L29.2516043,32.5983701 L29.2516043,32.2550973 Z M15.0895053,31.7397011 L14.6276589,31.9419674 C13.1515823,32.5878468 11.7555217,33.2385586 10.422358,33.9019413 C10.3673519,33.9745098 10.3440907,34.095343 10.2824898,34.3884623 C10.1430157,35.0750456 10.1183582,36.1866208 10.2414191,36.8242406 C10.3644043,37.4700021 10.594113,38.1730197 10.8729476,38.7207032 C11.0041394,38.9740399 11.0206282,38.9904741 11.0615855,38.933218 C11.0862431,38.9005379 11.2748053,38.606191 11.471612,38.2874565 C12.6361523,36.4401836 13.5054448,34.9197116 14.3009915,33.3748519 C14.6524752,32.6882309 15.0099882,31.9476362 15.0895053,31.7397011 Z M16.7780125,31.0277614 C16.671979,31.0715937 16.5663549,31.1154312 16.4611347,31.1592764 C16.4472886,31.1829793 16.4357652,31.2124122 16.4250966,31.2496287 C16.4004391,31.3313854 16.2610407,31.6909795 16.1216044,32.0506489 C15.301438,34.1268708 13.8416877,37.0612937 12.8821985,38.5571897 C12.6689786,38.8922454 12.6443211,38.9331803 12.7182559,38.9086043 C13.1797564,38.7574364 13.6416841,38.6075673 14.1040335,38.4589987 C16.0395386,37.8378132 17.7290732,37.2493079 19.2789068,36.6608025 C20.6157474,36.1539408 20.5993721,36.1621956 20.550057,36.1131189 C20.5255129,36.0885429 20.345195,35.9332842 20.1482749,35.7698084 C19.5415552,35.2548426 18.8115855,34.470219 18.2539162,33.7345213 C17.7452972,33.0642215 17.1549151,32.0179688 16.8925692,31.3068094 C16.8433675,31.1597302 16.7858458,31.0288968 16.7695083,31.0125379 Z M23.3656247,28.5082047 L23.1843753,28.5705998 C23.1726967,28.6708781 23.1706597,28.8747145 23.1663679,29.3042024 C23.1498791,30.9553572 22.8381803,33.0151448 22.2886797,35.0506204 C22.2231406,35.2958906 22.1740902,35.5001129 22.1904277,35.5001129 C22.1985964,35.5001129 22.5348015,35.3612131 22.9365836,35.1813784 C25.2165004,34.1759475 27.0782597,33.1787714 28.5708741,32.1652365 C29.2678284,31.6910548 29.2351155,31.7401692 28.9317368,31.6094112 C27.9476278,31.1843062 25.6512222,29.9091044 23.961839,28.8546722 C23.6608183,28.6691687 23.4767381,28.5601871 23.3656247,28.5082047 Z M22.118841,28.949294 L21.871939,29.0411278 L21.871939,29.0411278 L21.2718957,29.2633806 C20.0046647,29.7374969 18.7930489,30.2083797 17.6303288,30.6791057 C17.6797344,30.8505684 17.9198981,31.424555 18.0816914,31.7400561 C18.4507606,32.4593195 18.9509083,33.1949796 19.5906434,33.9306772 C19.9596748,34.3557068 21.08322,35.4509985 21.1161976,35.4101767 C21.1324217,35.3938932 21.2145631,35.1403304 21.3047977,34.8381056 C21.6819222,33.5873667 21.9115552,32.4757538 22.0591602,31.2823088 C22.1194769,30.8242612 22.1519906,29.2415149 22.118841,28.949294 Z M19.090458,25.4705684 L19.0739692,25.4706061 C19.0577073,25.4787478 18.90182,25.666762 18.7295575,25.8711727 C17.1385775,27.8165236 15.0145858,29.7620252 12.5622931,31.5356831 C12.2506699,31.7646322 11.9964928,31.9526463 11.9964928,31.9607881 C11.9964928,31.9689298 12.3245291,31.8135957 12.7264247,31.6093735 C13.1282068,31.4130668 13.7433222,31.1188707 14.0958648,30.9553195 C15.3507909,30.3832484 17.2041167,29.6148329 19.2135188,28.8383887 L19.2135188,28.8383887 L20.3369128,28.405142 L20.3206887,28.2415908 C20.2303407,27.4896096 19.869478,26.557643 19.4020055,25.8629933 C19.1806925,25.5359662 19.1313396,25.462502 19.090458,25.4705684 L19.090458,25.4705684 Z M17.8193077,25.7812365 C17.7864814,25.748481 15.0063793,27.6285094 13.8008061,28.4949651 C13.349671,28.8138881 13.2922249,28.8711442 12.9806018,29.2715978 C12.5131292,29.8763866 12.1031405,30.3668141 11.5618088,30.9471777 C10.7088538,31.8708519 10.6350702,31.9526463 10.6925163,31.9199662 C10.7171738,31.9035319 10.9385624,31.7646322 11.1845708,31.6093735 C13.1282824,30.3832484 14.6947183,29.1244054 16.2775295,27.5140349 C16.9172268,26.8683111 17.8521341,25.8139166 17.8193077,25.7812365 Z M28.8139345,26.7424998 L28.7143315,26.7736786 C27.1576438,27.2475013 25.6535542,27.7288573 24.2457876,28.2061112 C24.5096595,28.4120497 26.0510048,29.4307107 26.8651533,29.9419353 L27.0092249,30.0315001 C27.9370251,30.606144 29.1318582,31.3068848 29.1941204,31.3068848 C29.210458,31.3068848 29.218778,31.0861906 29.2022892,30.7510972 C29.1439303,29.3397844 28.9297353,27.1970941 28.8139345,26.7424998 Z M26.6928529,20.7787711 C26.6680441,20.7624122 25.0771776,21.5634324 24.0602423,22.1028988 C22.5512903,22.9120607 20.1648015,24.2689439 20.0090277,24.4079568 C19.9678814,24.4487786 20.0007077,24.5387148 20.1893456,24.9147054 C20.6322741,25.8137658 20.8864512,26.868198 20.8864512,27.8573454 C20.8864512,28.0453595 20.8946199,28.1679381 20.9192775,28.1597964 C20.9357663,28.1515792 21.2883467,27.751088 21.6982976,27.2687269 C22.6824065,26.1081127 24.109444,24.3262377 24.9131216,23.2635884 C25.5856831,22.3725943 26.7091904,20.7950546 26.6928529,20.7787711 Z M28.4069316,20.3537415 L28.1198147,20.7950169 C26.6927773,22.9284196 24.7738366,25.1191915 22.6086986,27.1052888 C21.8528034,27.8001032 21.8061754,27.8405614 21.8398686,27.8413802 L21.8540713,27.8410242 C21.8787289,27.8410242 22.1985964,27.7265874 22.5758344,27.5876876 C25.962921,26.3451659 28.8660841,25.4214917 32.6222399,24.3834938 L32.6222399,24.3834938 L33.2863679,24.195555 L33.1881158,24.0891846 C33.0075332,23.8930287 32.1054523,23.0836783 31.638131,22.6995836 C30.8096445,22.0048208 29.7271322,21.2120178 28.8088271,20.6152199 L28.8088271,20.6152199 L28.4069316,20.3537415 Z M16.3265799,23.3127027 C16.3102423,23.3127027 16.2281765,23.4925374 16.1625995,23.7295906 C15.9821682,24.2772741 15.7279911,24.9067144 15.473814,25.4379637 C15.1866593,26.0346108 14.9161447,26.5005376 14.3748129,27.3261338 C14.2928984,27.4487124 14.317329,27.4323912 15.0392056,26.860207 C15.7279911,26.3125235 16.9089067,25.4214917 17.6880403,24.8656664 C17.9668749,24.6614441 18.1800191,24.4897135 18.1636816,24.47343 C17.7454485,24.1300441 17.277976,23.8112719 16.753133,23.5252175 C16.5398753,23.4107053 16.3512374,23.3127027 16.3265799,23.3127027 Z M40.5854976,15.4575712 C40.5690088,15.4411369 39.5110406,15.7435879 38.5186872,16.054143 C36.6240637,16.6345443 34.0984034,17.5336424 32.2449263,18.285699 C31.1868068,18.7106532 29.792747,19.3074888 29.792747,19.3319517 C29.792747,19.3400935 29.8666062,19.4054914 29.9568408,19.4708515 C30.0470754,19.5362494 30.31759,19.7569436 30.5635983,19.9613544 C31.8675749,21.0402872 32.966576,22.241874 33.8851458,23.6151537 C34.0000379,23.7949507 34.1064965,23.9419923 34.1146653,23.9419923 C34.1229853,23.9419923 34.3934999,23.5987571 34.7216875,23.1900865 C35.0414038,22.7814158 36.0092887,21.5633947 36.8702234,20.4845373 C38.5022362,18.4410708 39.2241506,17.5090664 39.7161294,16.8061242 C40.0605411,16.3239139 40.6017216,15.473817 40.5854976,15.4575712 Z M41.2169126,15.620934 L41.207702,15.6376072 C41.1675117,15.7147431 41.0176251,16.0288621 40.8479191,16.3892363 C39.5030609,19.0867192 38.3630269,20.5988987 35.8699659,22.9938552 C35.4680326,23.3779875 35.1483163,23.696722 35.1645404,23.696722 C35.1810292,23.696722 35.4352063,23.6394659 35.7222097,23.5741434 C39.9704578,22.552429 44.3907416,21.8250615 47.8434052,21.5633947 C48.2861824,21.5307523 48.6634204,21.4980722 48.6634204,21.4980722 C48.6799092,21.4899305 47.6055656,20.3782799 47.1709572,19.9531749 C45.6290277,18.4491371 43.6772985,16.9859212 41.6843852,15.8497322 C41.4465456,15.7109078 41.2496255,15.6128299 41.2169126,15.620934 L41.2169126,15.620934 Z M21.8868976,17.680797 C21.8623535,17.6562964 20.2385094,18.9559234 19.4676581,19.6180438 C18.3933146,20.5335385 16.9909347,21.8004855 16.9909347,21.8658834 C16.9909347,21.8821292 17.1630838,21.9803202 17.3846615,22.094644 C17.9422174,22.3808114 18.3769771,22.6995836 18.9099888,23.2145871 L18.9099888,23.2145871 L19.3692548,23.6558625 L19.5742302,23.3289109 C19.6808401,23.1409344 19.877609,22.8057656 20.0089899,22.577005 C20.558377,21.5961125 21.1242151,20.2964854 21.4605714,19.2583744 C21.6327206,18.7106909 21.9115552,17.7053731 21.8868976,17.680797 Z M22.9530724,17.4847165 C22.9285283,17.4847165 22.8956642,17.5663602 22.8629891,17.6889388 C22.5266328,19.2502327 21.9362506,20.8523484 21.1981121,22.1927596 C20.9766479,22.5932508 20.9684791,22.6261194 21.0013055,22.6261194 C21.0094742,22.6261194 21.3375106,22.4298504 21.7311239,22.1927596 C23.1089975,21.358984 24.4293115,20.6315788 25.9712411,19.8632387 C26.4548999,19.6261479 26.8486267,19.4217749 26.8404579,19.4136331 C26.7830875,19.3646695 25.6758798,18.7760134 24.9377792,18.4083153 C24.1341015,18.0078994 23.0679646,17.5091041 22.9530724,17.4847165 Z M16.6473831,15.4317411 L16.6301099,15.4329952 C16.6219033,15.4411369 16.6464474,15.6372175 16.6711428,15.8661665 C16.9336021,17.6562587 16.9744837,19.4217749 16.7858837,20.7950546 C16.7778283,20.8604148 16.7858837,20.9095668 16.8023725,20.9095668 C16.81871,20.9095668 17.1302575,20.6235124 17.4993267,20.2719094 C18.7377641,19.0784643 19.7711882,18.1385821 20.8455317,17.2476257 C21.1078776,17.0186766 21.3292283,16.8306625 21.3292283,16.8225208 C21.3292283,16.7734064 19.344635,16.1113991 18.4097277,15.8497322 C17.7946502,15.6782278 16.654654,15.4084192 16.6301099,15.4329952 Z M30.8671284,11.9345299 C30.8343021,11.9017744 29.0301401,12.8990636 27.9229702,13.569288 C26.5287591,14.403026 23.8879419,16.1440792 23.9454636,16.1931935 C23.9536702,16.2094016 24.2407871,16.3239139 24.5687099,16.4628137 C25.749739,16.9533165 26.8322513,17.476424 27.783534,18.0322493 C28.0378245,18.1793662 28.2592888,18.3020202 28.2755128,18.2938784 C28.2920395,18.2857367 28.4478132,18.0405041 28.6201892,17.7380531 C29.596016,16.0379725 30.3914871,14.2314084 30.6866971,13.0134627 C30.7851004,12.6211886 30.8917859,11.9590305 30.8671284,11.9345299 Z M31.4903747,12.0325701 C31.4657171,12.0325701 31.4412865,12.155111 31.4329286,12.3104451 C31.2936437,13.9616752 30.7277678,15.898922 29.8502309,17.7543743 C29.743621,17.9833234 29.661593,18.1712999 29.6780818,18.1712999 C29.6943059,18.1712999 29.9075635,18.0895431 30.1454031,17.9914652 C33.0568484,16.8144544 36.0749036,15.8824877 39.6012751,15.0733258 L39.6012751,15.0733258 L40.0193948,14.9753232 L39.420806,14.7054769 C37.9773932,14.0515737 35.7631669,13.2424118 33.8358306,12.6701899 C33.0568484,12.4413162 31.5642339,12.0325701 31.4903747,12.0325701 Z M21.5835189,10.1362583 C21.5096597,10.1116822 19.2625692,11.8445183 18.4344231,12.5721119 C17.9998147,12.9562443 16.9828416,13.9697792 16.9828416,14.0188936 C16.9828416,14.0352148 17.5485662,14.2068701 18.2457852,14.3948842 C19.4676959,14.7381193 20.8946199,15.1550825 21.7721568,15.4329952 L21.7721568,15.4329952 L22.1985964,15.571895 L22.2231406,15.4902513 C22.2396294,15.4492787 22.2559669,15.1305442 22.2724557,14.7872337 C22.3216573,13.5529668 22.1822211,12.2288014 21.8787289,11.0434981 C21.7147485,10.4304921 21.6327206,10.1525418 21.5835189,10.1362583 Z M22.1628218,10.2174455 L22.1493948,10.2179019 C22.1411882,10.2261945 22.1903899,10.348773 22.2477603,10.4795688 C22.8219562,11.8037342 23.1336172,13.3731698 23.1336172,14.9261712 C23.1336172,15.212301 23.1418238,15.4492787 23.1499926,15.4492787 C23.1581613,15.4492787 23.5108552,15.2204427 23.9291261,14.9425301 C25.5281614,13.8798054 27.1356679,13.005321 29.3006925,12.0325324 C29.8501931,11.7873376 30.0224556,11.6892596 29.973254,11.6729761 C29.8748885,11.6320412 28.2183315,11.288693 27.0782975,11.0680365 C25.544688,10.7737272 22.1740523,10.1935144 22.1493948,10.2179019 Z M14.4814228,8.78755454 C14.4786495,8.78755454 14.4768006,8.78845918 14.475568,8.78906087 C14.4945396,8.84504527 14.5598526,8.99419994 14.6371966,9.15529031 C15.1948659,10.3404428 15.8100569,12.0243153 16.1051156,13.1605042 C16.1462998,13.3322726 16.1953502,13.4711724 16.1953502,13.4711724 C16.1953502,13.4711724 16.4004769,13.2750165 16.6382787,13.0379257 C17.2288121,12.4494203 18.0488273,11.795517 18.9592283,11.1906527 C19.3199775,10.9453825 20.4108098,10.2996964 20.6813245,10.1607966 C20.8043853,10.0953233 20.9029021,10.038218 20.9029021,10.0217837 C20.9029021,10.0055379 20.6896067,9.95638586 20.4189408,9.91556403 C18.8197921,9.64579313 16.3184111,9.17168689 14.9242,8.86109415 C14.702887,8.81209287 14.5224557,8.78755454 14.4814228,8.78755454 Z M10.446508,7.67590394 C10.446508,7.68404569 10.6187705,7.83120031 10.84829,7.99452534 C12.6033638,9.36780509 14.1205602,11.0761405 15.080125,12.760013 C15.1866971,12.9479895 15.2767804,13.08704 15.2852139,13.0787475 C15.2934205,13.0787475 15.2112412,12.7518713 15.1047826,12.3675881 C14.8259479,11.3539778 13.9976127,8.71397723 13.940091,8.65672112 C13.9319223,8.65672112 13.5219336,8.54224659 13.0298791,8.41970569 C12.6681638,8.3276856 12.3073109,8.23233005 11.9473668,8.13365129 C11.4715742,8.00278018 11.0697543,7.8801262 10.7581311,7.77398189 C10.5857929,7.71672577 10.4546011,7.66783757 10.446508,7.67590394 Z M21.5261485,6.29444474 C21.5179797,6.28630299 21.5014909,6.29444474 21.4933221,6.31076594 C21.4606093,6.33534197 21.2883845,6.48245889 21.0997466,6.63779295 C20.3287818,7.28355445 19.4595272,7.88849411 18.5983656,8.36248727 C18.4917557,8.41974338 18.4097277,8.4769995 18.4097277,8.48514125 L18.8374233,8.5438806 C20.1134471,8.75376908 21.4795508,8.97284696 23.0938145,9.22488254 C23.0904515,9.21313177 23.073902,9.19469613 23.0596445,9.1716492 C22.8466138,8.85291471 21.9771322,7.20168462 21.6982976,6.58867859 C21.5998942,6.36798436 21.5590126,6.29444474 21.5261485,6.29444474 Z M12.0292057,4.07932299 L12.4557966,4.46341765 C12.8904807,4.87220141 14.0222703,5.95113423 15.465683,7.34880154 L15.465683,7.34880154 L16.24577,8.11013678 C16.5093439,8.15494342 16.7719882,8.19940943 17.0352688,8.24377024 C17.1149532,8.2099916 17.3152132,8.09711562 17.5321531,7.96199603 C18.4178965,7.41431248 19.6973289,6.70315312 20.8617558,6.12278949 C21.1570792,5.9838897 21.3865609,5.86127342 21.3783922,5.85313167 C21.3703369,5.85313167 21.1405904,5.82855564 20.870038,5.80401731 C18.4587781,5.60786141 14.087696,4.77408577 12.3491867,4.1854673 L12.3491867,4.1854673 L12.0292057,4.07932299 Z M11.7012828,4.33265961 L11.5946729,4.40631231 C10.4137573,5.23997487 9.71657608,6.05731624 9.70840731,6.60499979 L9.70840731,6.60499979 L9.70843676,6.69303892 C9.79356814,6.72440492 9.87627002,6.7546941 9.95437783,6.78498526 C10.6924785,7.03835958 11.6355167,7.25901612 12.1275712,7.36538659 C12.7934955,7.50839494 13.6965794,7.67142447 14.5075884,7.81246949 C14.4796224,7.77112433 14.3820943,7.65263662 14.2682786,7.51227735 C14.1287289,7.34069748 13.4890316,6.56421564 12.8576165,5.77133722 L12.8576165,5.77133722 L11.7012828,4.33265961 Z M19.9434507,0.417419562 C19.7054977,0.458241398 16.6219033,1.74154726 15.4983581,2.25662611 C14.6208212,2.6652214 12.6280214,3.70340778 12.6608099,3.73608786 C12.6608099,3.74422961 13.0298791,3.80141034 13.4645631,3.85866645 C16.1791261,4.23465705 19.9269997,4.88041855 20.7635037,5.10921684 C21.1160841,5.21554962 21.1160841,5.2645509 20.8127054,4.36537739 C20.4109233,3.17193234 20.1564815,2.06861196 20.0171965,0.924092808 C19.9843324,0.654510376 19.951506,0.425485927 19.9434507,0.417419562 L19.9434507,0.417419562 Z" id="Combined-Shape-Copy-9"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>MsSQL</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-firebase2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="55px" viewBox="0 0 37 55" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-firebase2x.svg" alt="ic-technology-firebase2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-firebase" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M29.8556491,15.3267359 C30.5038352,14.6772659 31.4353176,15.0519985 31.5822436,15.9578044 L31.5822436,15.9578044 L36.2827345,44.9067917 L19.8238839,54.0855301 C18.7891255,54.662393 17.529556,54.6621077 16.4953681,54.0846742 L16.4953681,54.0846742 L0.185440586,44.9695562 Z M19.0858007,10.5357379 L19.1741287,10.6821286 L23.7442406,19.38457 L18.962869,24.5837535 L0.635918564,42.8425189 L0.137226034,43.0450771 L-1.73194792e-12,43.183159 L14.6231314,15.2396877 L17.2565304,10.5965407 C17.6590612,9.82116723 18.6108512,9.84767944 19.0858007,10.5357379 Z M6.25676537,0.982445559 C6.4297957,-0.118072996 7.75883412,-0.36870308 8.28234716,0.614417319 L8.28234716,0.614417319 L14.578483,12.5218426 L0.407683996,39.4131526 L0.178736196,39.8596365 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Firebase</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-dynamodb2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="48px" viewBox="0 0 43 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-dynamodb2x.svg" alt="ic-technology-dynamodb2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-dynamodb" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M37.02,36.468 L37.4121169,36.6383265 L37.5,36.5745 L37.5,43.011844 L37.3379908,43.2359541 L29.1036671,48 L28.50731,48 L28.5045,39.075 L37.02,36.468 Z M6,36.8835 L14.1047948,39.2608851 L14.994,39.2595 L14.9926154,48 L14.3956412,48 L6,43.833 L6,36.8835 Z M27,39.2595 L27,48 L16.5,48 L16.5,39.2595 L27,39.2595 Z M42.579,32.9925 L42.5790949,37.3812852 L39.093848,43.2222721 L39.093848,35.9204563 L39.1226221,35.9118074 L40.5555,34.419 L42.579,32.9925 Z M4.5,4.5 L4.5,11.6195142 L14.3201953,8.73976355 L27.6798047,8.73976355 L37.0825547,11.6195142 L37.2234844,11.5742723 L41.8487344,14.8432004 L42,15.1347592 L40.5391875,15.2927003 L40.5391875,16.4602326 L37.0825547,14.6442335 L27.6798047,12.4907851 L14.3201953,12.4907851 L4.5,14.6442335 L4.5,21.7467212 L14.3201953,21.3750568 L27.6798047,21.3750568 L37.0825547,21.7467212 L37.1498203,21.7136411 L41.6825391,22.1313582 L42,22.2009236 L40.5391875,22.2216798 L40.5391875,24.2984277 L42,24.3191839 L41.6900859,24.468855 L37.2966562,24.8427896 L37.0825547,24.7454953 L27.6798047,25.1249432 L14.3201953,25.1249432 L14.3201953,25.1158624 L4.5,24.75 L4.5,31.858361 L14.3201953,34.0109986 L27.6798047,34.0084041 L37.1102812,31.8674419 L37.2234844,31.6339354 L40.3477266,29.9693912 L40.5391875,30.0449565 L40.5391875,31.2261099 L42,31.3853483 L41.8000078,31.7062575 L37.235625,34.9270249 L37.1102812,34.8727022 L27.6798047,37.7608851 L14.3201953,37.7608851 L4.5,34.8811344 L4.5,42 L-2.55795385e-13,36.3053616 L-2.55795385e-13,31.333458 L0.0611953125,31.378862 L1.4608125,31.2261099 L1.4608125,30.020795 L-2.55795385e-13,29.2443861 L-2.55795385e-13,24.2945359 L0.233296875,24.3165893 L1.4608125,24.2984277 L1.4608125,22.2216798 L0.0380625,22.2009236 L-2.55795385e-13,22.2048154 L-2.55795385e-13,17.2569111 L1.4608125,16.4842318 L1.4608125,15.2927003 L0.0380625,15.1392996 L-2.55795385e-13,15.166542 L-2.55795385e-13,10.1938276 L4.5,4.5 Z M6,26.307 L12.819,26.5605 L12.8201953,26.6249432 L14.9955,26.6235 L14.9955,32.508 L14.475,32.5095 L6,30.651 L6,26.307 Z M27,26.6235 L27,32.5065 L16.5,32.508 L16.5,26.6235 L27,26.6235 Z M36.786,26.259 L37.0331116,26.3706438 L37.5,26.3295 L37.5,29.7855 L36.0869044,30.5398744 L36.0735,30.564 L28.5045,32.2815 L28.503,26.5905 L36.786,26.259 Z M42.579,25.704 L42.579,29.937 L42.039,29.88 L42.0391875,29.0243711 L40.2539105,28.3197629 L39.093,28.9365 L39.093,26.1945 L42.0931292,25.9399744 L42.579,25.704 Z M39.093,17.3955 L42.0391875,18.9426915 L42.039,17.4045 L42.5790949,17.8191849 L42.579,20.7915 L42.0036168,20.6661247 L41.8201897,20.6376874 L39.093,20.3865 L39.093,17.3955 Z M28.5015,14.2155 L36.5535,16.062 L37.5,16.5585 L37.5,20.2395 L36.8668814,20.1812105 L36.762,20.232 L28.503,19.905 L28.5015,14.2155 Z M14.9985,13.989 L14.997,19.875 L14.3201953,19.8750568 L6,20.1885 L6,15.8505 L14.4765,13.9905 L14.9985,13.989 Z M27,13.989 L27,19.875 L16.5,19.875 L16.5,13.989 L27,13.989 Z M39.093848,4.75854651 L42.5790949,10.6000324 L42.579,13.5225 L39.093,11.058 L39.093848,4.75854651 Z M29.1036671,0 L37.3379908,4.76005282 L37.5,4.98532761 L37.5,9.933 L37.477835,9.91722198 L37.071,10.047 L28.5015,7.422 L28.5,0 L29.1036671,0 Z M15,0 L14.9985,7.239 L14.1047948,7.23976355 L6,9.615 L6,4.161 L14.3956412,0 L15,0 Z M27,0 L27,7.239 L16.5,7.239 L16.5,0 L27,0 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>DynamoDB</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-redis2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="39px" viewBox="0 0 48 39" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-redis2x.svg" alt="ic-technology-redis2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-redis" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M47.9999645,22.5727736 C47.998778,22.5741776 47.9993894,22.5744014 48,22.574625 L47.998875,27.35775 C47.99925,27.837375 47.42325,28.3635 46.119375,29.043 C43.55775,30.3781875 30.288,35.83425 27.4629375,37.3070625 C24.637875,38.7800625 23.0685,38.7658125 20.8366875,37.6989375 C18.6050625,36.6320625 4.4836875,30.9279375 1.939875,29.712 C0.668625,29.1045 0,28.5915 0,28.107 L0,23.25525 L0.00297914188,23.3197205 C0.0514458284,23.7928712 0.699644817,24.2957973 1.9404375,24.8889375 C4.4840625,26.104125 18.604875,31.8091875 20.8366875,32.8753125 C23.0683125,33.9421875 24.6376875,33.956625 27.4625625,32.4834375 C30.287625,31.0108125 43.557,25.5545625 46.1184375,24.2199375 C47.3881314,23.5581836 48.0049008,23.0392972 47.9999645,22.5727736 Z M47.9999645,14.7222664 C47.9987781,14.723365 47.9993894,14.7235888 48,14.7238125 L47.998875,19.5075 C47.99925,19.9869375 47.42325,20.5130625 46.119375,21.1925625 C43.55775,22.5279375 30.288,27.9838125 27.4629375,29.4571875 C24.637875,30.929625 23.0685,30.915375 20.8366875,29.8485 C18.604875,28.7821875 4.4836875,23.0775 1.939875,21.8615625 C0.668625,21.2540625 0,20.7418125 0,20.257125 L0,15.4048125 L0.00297914188,15.4694737 C0.0514458284,15.9426657 0.699644817,16.4455427 1.9404375,17.0385 C4.4840625,18.253875 18.604875,23.95875 20.8366875,25.024875 C23.0683125,26.09175 24.6376875,26.1061875 27.4625625,24.6335625 C30.287625,23.160375 43.557,17.7045 46.1184375,16.3695 C47.3881314,15.7077461 48.0049008,15.1888136 47.9999645,14.7222664 Z M47.9999742,6.58184045 C47.9987781,6.58230252 47.9993894,6.58252631 48,6.58275 L47.998875,11.36625 C47.99925,11.8453125 47.42325,12.3714375 46.119375,13.051125 C43.55775,14.386125 30.288,19.842375 27.4629375,21.31575 C24.637875,22.788375 23.0685,22.7739375 20.8366875,21.7070625 C18.604875,20.64075 4.4836875,14.935875 1.939875,13.7205 C0.668625,13.1124375 0,12.6 0,12.115875 L0,7.263375 L0.00307289324,7.32794249 C0.0515396341,7.80113437 0.699740854,8.30400915 1.940625,8.896875 C4.4840625,10.1124375 18.6050625,15.8169375 20.8366875,16.8838125 C23.0683125,17.950125 24.6376875,17.9645625 27.4625625,16.4919375 C30.287625,15.0193125 43.557,9.5630625 46.1184375,8.2280625 C47.3872127,7.56678739 48.0040079,7.04808114 47.9999742,6.58184045 Z M27.9028125,9.40425 L24.5685,14.29275 L16.8665625,11.0983125 L27.9028125,9.40425 Z M34.7428125,4.1158125 L41.2745625,6.6969375 L34.7484375,9.275625 L34.039875,9.55275 L27.5165625,6.97425 L34.7428125,4.1158125 Z M13.890375,4.74375 C17.1481875,4.74375 19.789125,5.7675 19.789125,7.030125 C19.789125,8.293125 17.1481875,9.3166875 13.890375,9.3166875 C10.6325625,9.3166875 7.991625,8.2929375 7.991625,7.030125 C7.991625,5.7675 10.6325625,4.74375 13.890375,4.74375 Z M21.0463125,6.79456491e-13 L24.375375,1.302 L27.51375,0.2745 L26.6655,2.3098125 L29.8655625,3.508125 L25.7386875,3.9365625 L24.814875,6.1595625 L23.32275,3.6789375 L18.5574375,3.2506875 L22.1131875,1.968375 L21.0463125,6.79456491e-13 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Redis</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.tab-pane -->
                                <div id="backend" role="tabpanel" class="tabs-pane fade">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-php2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="29px" viewBox="0 0 60 29" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-php2x.svg" alt="ic-technology-php2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-php" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M15.0707888,5.86738459 C19.6204058,6.1468901 21.8953764,8.38197799 21.8953764,12.2940989 C21.8953764,19 16.4927265,22.9118022 11.6583327,22.6322967 L6.5404596,22.6322967 L5.40297426,28.5 L0,28.5 L4.54994135,5.86738459 L15.0707888,5.86738459 Z M12.7961424,10.0586923 L9.09955835,10.0586923 L7.67794494,18.4413077 L11.0900766,18.4413077 C13.6491753,18.1618022 15.924146,17.3236044 16.2082741,12.5732857 C16.2082741,10.8968901 14.7866607,10.0586923 12.7961424,10.0586923 L12.7961424,10.0586923 Z M20.8383292,22.6322967 L25.3879462,0 L30.7909204,0 L29.6534351,5.86738459 L34.7716326,5.86738459 C39.3215739,6.1468901 41.0276398,8.38197799 40.4590593,11.1763956 L38.468541,22.6322967 L32.7814387,22.6322967 L34.7719569,12.2940989 C35.056085,10.8968901 35.056085,10.0586923 33.0658911,10.0586923 L28.8004022,10.0586923 L26.2413034,22.6322967 L20.8383292,22.6322967 L20.8383292,22.6322967 Z M53.175088,5.86738459 C57.7250293,6.1468901 60,8.38197799 60,12.2940989 C60,19 54.5970257,22.9118022 49.7629563,22.6322967 L44.6444345,22.6322967 L43.5069491,28.5 L38.1042992,28.5 L42.6539162,5.86738459 L53.175088,5.86738459 Z M50.9004417,10.0586923 L47.2035332,10.0586923 L45.7819198,18.4413077 L49.1943758,18.4413077 C51.7534746,18.1618022 54.0284452,17.3236044 54.3125733,12.5732857 C54.3125733,10.8968901 52.8909599,10.0586923 50.9004417,10.0586923 L50.9004417,10.0586923 Z" id="Shape-Copy"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>PHP</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-java2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41px" height="54px" viewBox="0 0 41 54" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-java2x.svg" alt="ic-technology-java2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-java" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M40.0913773,48.815136 C39.735587,53.409888 24.7009419,54.376272 14.9130064,53.755488 C8.48003862,53.345088 7.2280225,52.316928 7.2280225,52.316496 C13.3391677,53.31744 23.6461999,53.499312 32.0013935,51.938928 C39.4072322,50.55696 40.0913773,48.815136 40.0913773,48.815136 Z M8.70997411,45.91944 C8.70997411,45.91944 8.02887733,45.872784 6.83608701,46.12896 C5.69207088,46.373904 2.05578056,47.534688 3.99411927,48.371904 C9.38889346,50.699952 28.813216,50.143536 34.9544096,48.298032 C38.1843935,47.326464 36.6475709,46.069344 36.6475709,46.069344 C42.274458,48.588336 24.4213612,53.648352 2.72511927,50.15952 C-5.23117105,48.87864 6.5530225,44.413056 8.70997411,45.91944 Z M14.3904257,43.304976 C18.6982322,43.793136 20.8996031,43.723152 25.6455064,42.833232 C25.6455064,42.833232 26.8957806,43.608672 28.638587,44.280864 C18.1022246,48.7586736 4.82142409,44.1134144 12.6668555,41.7724764 L12.911087,41.702256 C12.911087,41.702256 10.8351354,42.900624 14.3904257,43.304976 Z M11.6098612,35.798976 C11.6098612,35.798976 9.28089346,37.509264 12.8392322,37.874736 C17.4409902,38.346048 21.0742322,38.384496 27.3643612,37.183536 L27.3876594,37.2062414 C27.5342058,37.3465636 28.3624695,38.10384 29.5992644,38.536128 C16.7341999,42.268608 2.40503862,38.829888 11.6098612,35.798976 Z M31.4296031,39.774672 C31.4296031,39.773808 31.5859419,39.633408 31.6334096,39.508128 C41.8328773,34.251984 37.116587,29.200608 33.8247644,29.881008 C33.0199902,30.047328 32.6589741,30.192048 32.6589741,30.192048 C32.6589741,30.192048 32.958587,29.72592 33.5299419,29.525472 C40.0417322,27.255312 45.0489257,36.222768 31.4296031,39.774672 Z M13.9105225,29.681424 L13.8944543,29.685241 C13.4546125,29.7901588 4.18127999,32.0293847 10.4122806,32.85576 C13.1070548,33.213456 18.4765709,33.131376 23.481587,32.714928 C27.5707806,32.37408 31.6743451,31.64616 31.6743451,31.64616 C31.6743451,31.64616 30.2337644,32.259168 29.1903451,32.965056 C19.1559257,35.583408 -0.223977504,34.363872 5.35587733,31.6872 C10.0730386,29.423952 13.9105225,29.681424 13.9105225,29.681424 Z M32.2940386,11.014704 C20.4392967,17.83512 22.6289096,19.812384 25.4852483,23.793264 C28.5423451,28.064016 21.8842322,31.472928 21.8842322,31.472928 C21.8842322,31.472928 25.196087,28.779408 22.5722967,25.783488 C13.6853773,15.624144 32.2940386,11.015136 32.2940386,11.014704 Z M25.4852483,9.05941988e-14 L25.504221,0.0198988502 C25.9064051,0.448688524 30.6968007,5.94686932 20.1274902,14.222736 C11.3019741,21.137328 18.1151193,25.078896 20.1244419,29.584224 C14.9722322,24.973488 11.1931031,20.913984 13.7280548,17.136144 C17.4505709,11.591856 27.7632644,8.902656 25.4852483,9.05941988e-14 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Java</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-node-js2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="36px" viewBox="0 0 60 36" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-node-js2x.svg" alt="ic-technology-node-js2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-node-js" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M30.244139,21.6744734 L35.6554477,24.7442455 C36.0080734,24.9435082 36.2251641,25.3157029 36.2251641,25.7143432 L36.2251641,31.8405496 C36.2251641,32.23919 36.0080734,32.6113846 35.6554477,32.8106473 L30.244139,35.8804194 C30.0677675,35.9602165 29.8644063,36 29.67454,36 C29.4710614,36 29.2811951,35.9468786 29.1048235,35.8538587 L27.3010931,34.804079 C27.0297884,34.6578227 27.1654407,34.6047013 27.2468791,34.5781406 C27.6129996,34.45856 27.6808258,34.4318843 28.0605585,34.2193988 C28.1012777,34.1927231 28.1556091,34.206061 28.1962109,34.2326216 L29.5796068,35.0432402 C29.6338208,35.0698009 29.701647,35.0698009 29.7422488,35.0432402 L35.1536748,31.9734681 C35.2078888,31.9469074 35.2351132,31.893671 35.2351132,31.8273268 L35.2351132,25.7011203 C35.2351132,25.6345461 35.2078888,25.5815397 35.1536748,25.5548641 L29.7422488,22.4984298 C29.6880348,22.4717541 29.6202086,22.4717541 29.5796068,22.4984298 L24.1681808,25.5548641 C24.1139668,25.5814248 24.0867424,25.647884 24.0867424,25.7010054 L24.0867424,31.8272118 C24.0867424,31.8804481 24.1139668,31.9467924 24.1681808,31.9734681 L25.6465098,32.8106473 C26.4466945,33.2092876 26.9484674,32.7441881 26.9484674,32.2790885 L26.9484674,26.2325642 C26.9484674,26.1528821 27.0162935,26.073085 27.1112267,26.073085 L27.802866,26.073085 C27.8843043,26.073085 27.9656253,26.1395442 27.9656253,26.2325642 L27.9656253,32.2790885 C27.9656253,33.3288682 27.3824141,33.9402241 26.3652561,33.9402241 C26.0533496,33.9402241 25.8092692,33.9402241 25.1175126,33.607928 L23.6935149,32.8106473 C23.3408891,32.6113846 23.1239158,32.23919 23.1239158,31.8405496 L23.1239158,25.7143432 C23.1239158,25.3157029 23.3408891,24.9435082 23.6935149,24.7442455 L29.1048235,21.6744734 C29.4439544,21.4884336 29.9051255,21.4884336 30.244139,21.6744734 Z M31.1392568,25.8870452 C32.8751611,25.8870452 33.7296771,26.4718403 33.8382224,27.7474435 C33.8382224,27.787457 33.8246103,27.8272405 33.7975033,27.867139 C33.7702789,27.8936997 33.7296771,27.9202604 33.6889579,27.9202604 L32.9837065,27.9202604 C32.9158803,27.9202604 32.8480541,27.867139 32.8345593,27.8006798 C32.6717999,27.0698584 32.251348,26.8305822 31.1392568,26.8305822 C29.8915133,26.8305822 29.7422488,27.2558982 29.7422488,27.5747415 C29.7422488,27.960159 29.9186203,28.0797396 31.6003106,28.2923401 C33.268506,28.5050556 34.0551958,28.810676 34.0551958,29.9534757 C34.0415836,31.122951 33.0651448,31.7874282 31.342618,31.7874282 C28.9692885,31.7874282 28.4810104,30.7243107 28.4810104,29.8206722 C28.4810104,29.7408752 28.5488366,29.6611931 28.6437698,29.6611931 L29.3490212,29.6611931 C29.4303422,29.6611931 29.4981684,29.7143145 29.4981684,29.7941115 C29.6067138,30.4983723 29.9186203,30.8438913 31.3562302,30.8438913 C32.4954284,30.8438913 32.9838238,30.5913922 32.9838238,29.9933742 C32.9838238,29.6478552 32.8480541,29.3954712 31.0714307,29.2226542 C29.5931016,29.0763979 28.6708768,28.7575546 28.6708768,27.6014171 C28.6708768,26.5249617 29.5932189,25.8870452 31.1392568,25.8870452 Z M40.4566005,0.0143738187 L40.524499,0.0399272743 L43.9557057,1.91366338 C44.1416828,2.0162596 44.267914,2.19682725 44.3001845,2.40533235 L44.3083314,2.51168139 L44.3083314,18.7109441 C44.3083314,18.9160379 44.2086684,19.1113326 44.043557,19.2382499 L43.9557057,19.2957392 L38.2052661,22.5515512 C38.0214734,22.6540899 37.8020611,22.6687383 37.6080914,22.5954963 L37.5135095,22.5515512 L31.7630699,19.2957392 C31.5770928,19.1932416 31.4508616,19.012519 31.4185911,18.812367 L31.4104442,18.7109441 L31.4104442,12.212658 C31.4104442,12.0076627 31.5101072,11.8123821 31.6752186,11.6854668 L31.7630699,11.6279778 L37.5135095,8.37216589 C37.6973022,8.26962715 37.9167145,8.25497876 38.1106842,8.32822072 L38.2052661,8.37216589 L39.642876,9.18278442 C39.724197,9.22256796 39.8056354,9.22256796 39.8869564,9.18278442 C39.9480351,9.14285714 39.9861434,9.08805416 40.00138,9.02953224 L40.0089966,8.9701839 L40.0089966,0.33220987 C40.0089966,0.212629264 40.0768227,0.106386495 40.1852507,0.0399272743 C40.2612912,-0.00266181829 40.3633168,-0.0111796368 40.4566005,0.0143738187 Z M21.8083461,8.3190445 C22.0227408,8.19945962 22.2855906,8.19945962 22.4999853,8.3190445 L22.4999853,8.3190445 L28.2098231,11.5481808 C28.4131843,11.6677614 28.548954,11.8936997 28.548954,12.132861 L28.548954,12.132861 L28.548954,18.6045863 C28.548954,18.8437475 28.4267964,19.0696859 28.2098231,19.1892665 L28.2098231,19.1892665 L22.4999853,22.4185177 C22.2855906,22.5381026 22.0227408,22.5381026 21.8083461,22.4185177 L21.8083461,22.4185177 L16.0986257,19.1892665 C15.8951471,19.0696859 15.7594948,18.8437475 15.7594948,18.6045863 L15.7594948,18.6045863 L15.7594948,12.132746 C15.7594948,11.8935848 15.881535,11.6676464 16.0986257,11.5480658 L16.0986257,11.5480658 Z M53.2595095,8.29248381 C53.4739042,8.17289893 53.736754,8.17289893 53.9511487,8.29248381 L53.9511487,8.29248381 L59.6608691,11.5349579 C59.8643476,11.6545385 60,11.8804769 60,12.1196381 L60,12.1196381 L60,13.7009766 C60,13.9402528 59.8779598,14.1661912 59.6608691,14.2857718 L59.6608691,14.2857718 L56.2431572,16.2393049 C56.1346119,16.3057642 55.9990769,16.3057642 55.8905315,16.2393049 C55.7821035,16.1861836 55.7142773,16.0666029 55.7142773,15.9470223 L55.7142773,15.9470223 L55.7142773,14.352346 C55.7142773,14.2326504 55.6464512,14.1264076 55.5379058,14.0599484 L55.5379058,14.0599484 L53.7341754,13.0499522 C53.6264144,12.9835051 53.4893105,12.9835051 53.3815496,13.0499522 L53.3815496,13.0499522 L51.5777019,14.0599484 C51.4692738,14.1131848 51.4014477,14.2327654 51.4014477,14.352346 L51.4014477,14.352346 L51.4014477,16.3855612 C51.4014477,16.5051418 51.4692738,16.6114996 51.5777019,16.6778438 L51.5777019,16.6778438 L57.3552484,19.9336558 C57.4637938,19.9868921 57.5316199,20.1064727 57.5316199,20.2260533 C57.5316199,20.3456339 57.4637938,20.4652145 57.3552484,20.5184509 L57.3552484,20.5184509 L53.8969347,22.4052949 C53.6934562,22.5248755 53.435881,22.5248755 53.2187903,22.4052949 L53.2187903,22.4052949 L47.5090699,19.2159422 C47.2919792,19.0963616 47.1564442,18.8704232 47.1564442,18.631262 L47.1564442,18.631262 L47.1564442,12.1329759 C47.1564442,11.8936997 47.2919792,11.6677614 47.5090699,11.5481808 L47.5090699,11.5481808 Z M6.46930318,8.11955186 C6.57773119,8.1328897 6.6861592,8.15945039 6.78120972,8.21268675 L6.78120972,8.21268675 L12.5316493,11.4551609 C12.7486226,11.5747415 12.884275,11.8007948 12.884275,12.039956 L12.884275,12.039956 L12.8978872,20.7574971 C12.8978872,20.8770777 12.830061,20.9966584 12.7215156,21.0498947 C12.6129703,21.1163539 12.4774353,21.1163539 12.3688899,21.0498947 L12.3688899,21.0498947 L8.95117806,19.1362601 C8.7342047,19.0166795 8.59855234,18.7907411 8.59855234,18.5515799 L8.59855234,18.5515799 L8.59855234,14.4718116 C8.59855234,14.2325354 8.46301733,14.006712 8.24592662,13.8871314 L8.24592662,13.8871314 L6.7948219,13.0631751 C6.69977137,12.9967158 6.57773119,12.9700402 6.455691,12.9700402 C6.33365082,12.9700402 6.21161064,12.9967158 6.10306528,13.0631751 L6.10306528,13.0631751 L4.65196056,13.8871314 C4.43486985,14.006712 4.29933484,14.2326504 4.29933484,14.4718116 L4.29933484,14.4718116 L4.29933484,18.5515799 C4.29933484,18.7907411 4.16368248,19.0166795 3.94670912,19.1362601 L3.94670912,19.1362601 L0.528997256,21.0498947 C0.433946729,21.1163539 0.298411717,21.1163539 0.189866362,21.0498947 C0.0814383531,20.9966584 0.0136121743,20.8770777 0.0136121743,20.7574971 L0.0136121743,20.7574971 L-6.21724894e-14,12.039956 C-6.21724894e-14,11.8006798 0.135535011,11.5747415 0.352625722,11.4551609 L0.352625722,11.4551609 L6.10306528,8.21268675 C6.19799846,8.15945039 6.30654382,8.11955186 6.41497183,8.11955186 L6.41497183,8.11955186 Z M37.8292959,13.058662 L37.771202,13.0763979 L35.8047122,14.1927519 C35.7639637,14.2126724 35.7385289,14.2475333 35.7283583,14.2917562 L35.7232739,14.3388932 L35.7232739,16.5714861 C35.7232739,16.6113271 35.7385216,16.6586707 35.7690665,16.6910577 L35.8047122,16.7176274 L37.771202,17.8338663 C37.8083059,17.8516022 37.8495894,17.8575142 37.8894797,17.8516022 L37.9475736,17.8338663 L39.9140634,16.7176274 C39.9548119,16.6977068 39.9802467,16.6628459 39.9904173,16.618623 L39.9955017,16.5714861 L39.9955017,14.3388932 C39.9955017,14.2990521 39.980254,14.2516439 39.9497092,14.219273 L39.9140634,14.1927519 L37.9475736,13.0763979 C37.9104697,13.058662 37.8691862,13.0527501 37.8292959,13.058662 Z M53.652737,13.9801513 L54.7513333,14.60473 C54.7920525,14.6311758 54.8191595,14.6710743 54.8191595,14.7243107 L54.8191595,15.9734681 C54.8191595,16.0265894 54.7920525,16.066488 54.7513333,16.0930487 L53.652737,16.7176274 C53.6116166,16.7441615 53.5583224,16.7441615 53.517202,16.7176274 L52.4186057,16.0930487 C52.3778865,16.066488 52.3507795,16.0265894 52.3507795,15.9734681 L52.3507795,14.7243107 C52.3507795,14.6710743 52.3778865,14.6311758 52.4186057,14.60473 L53.517202,13.9801513 C53.5583224,13.9536172 53.6116166,13.9536172 53.652737,13.9801513 Z" id="Combined-Shape-Copy-8"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Node .JS</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div id="CMS" role="tabpanel" class="tabs-pane fade">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-wordpress2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-wordpress2x.svg" alt="ic-technology-wordpress2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-wordpress" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M24,0 C10.766,0 0,10.766 0,24 C0,37.234 10.766,48 24,48 C37.234,48 48,37.234 48,24 C48,10.766 37.234,0 24,0 Z M24,1.126 C36.626,1.126 46.876,11.376 46.876,24 C46.876,36.626 36.626,46.876 24,46.876 C11.374,46.876 1.124,36.626 1.124,24 C1.126,11.374 11.376,1.124 24,1.124 L24,1.126 Z M24,3.43793174 C17.0760333,3.42016254 10.6111177,6.89936132 6.812,12.688 C7.296,12.704 7.734,12.688 8.126,12.688 C10.282,12.688 13.626,12.438 13.626,12.438 C14.734,12.376 14.86,13.992 13.75,14.126 C13.75,14.126 12.618,14.312 11.374,14.374 L18.874,36.626 L23.374,23.126 L20.188,14.374 C19.078,14.314 18,14.126 18,14.126 C16.89,14.062 17.016,12.374 18.126,12.438 C18.126,12.438 21.54,12.688 23.562,12.688 C25.718,12.688 29.062,12.438 29.062,12.438 C30.172,12.376 30.296,13.992 29.188,14.126 C29.188,14.126 28.048,14.312 26.812,14.374 L34.25,36.5 L36.312,29.624 C37.352,26.954 37.876,24.704 37.876,22.938 C37.876,20.39 36.976,18.678 36.188,17.312 C35.148,15.618 34.188,14.132 34.188,12.438 C34.188,10.546 35.602,8.812 37.624,8.812 L37.874,8.812 C34.0902625,5.33900879 29.1359483,3.42070293 24,3.44 L24,3.43793174 Z M42.062,14.124 C42.156,14.782 42.188,15.492 42.188,16.25 C42.188,18.336 41.796,20.688 40.624,23.626 L34.374,41.812 C40.7032794,38.1159358 44.5857596,31.3294061 44.564091,24 C44.564091,20.42 43.674,17.054 42.064,14.124 L42.062,14.124 Z M5.188,15.624 C4.02139694,18.2616319 3.42504898,21.1159236 3.438,24 C3.438,32.148 8.132,39.164 15,42.5 L5.188,15.624 Z M24.374,25.812 L18.188,43.75 C20.032,44.29 21.976,44.562 24,44.562 C26.4,44.562 28.672,44.188 30.812,43.438 C30.758,43.352 30.726,43.226 30.688,43.124 L24.374,25.812 Z" id="surface1-copy"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Wordpress</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-magento2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41px" height="48px" viewBox="0 0 41 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-magento2x.svg" alt="ic-technology-magento2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-magento" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M22.9160391,14.397253 L22.9160391,41.7391719 L20.2371855,43.3824626 L17.5562754,41.7304386 L17.5562754,14.4183717 L10.6146387,18.7081719 L10.6146387,42.0904096 L20.2371855,48 L29.941207,42.0483309 L29.941207,18.6932459 L22.9160391,14.397253 Z M20.2371855,0 L0,12.3063406 L0,35.6915952 L5.25598242,38.7993821 L5.25598242,15.4119044 L20.2412988,6.2663857 L35.2405371,15.3985663 L35.3023945,15.4339759 L35.29575,38.7644488 L40.5,35.6915952 L40.5,12.3063406 L20.2371855,0 Z" id="Shape-Copy-8"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Magento</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-shopify-plus2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" height="48px" viewBox="0 0 42 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-shopify-plus2x.svg" alt="ic-technology-shopify-plus2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-shopify-plus" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M30.847,6.995 L32.525,8.668 C32.525,8.668 36.195,8.942 36.368,8.956 C36.580538,8.974187 36.7531439,9.13523084 36.786,9.346 C36.819,9.588 42,44.792 42,44.792 L29.287,47.555 L30.847,6.995 L30.847,6.995 Z M28.897,5.661 C28.8158324,5.67146527 28.735594,5.68818161 28.657,5.711 L27.229,6.153 C26.377,3.69 24.874,1.427 22.231,1.427 C22.158,1.427 22.081,1.429 22.007,1.434 C21.254,0.435 20.323,0 19.519,0 C13.359,0 10.415,7.74 9.493,11.672 C7.099,12.417 5.399,12.946 5.183,13.015 C3.845,13.437 3.803,13.479 3.628,14.744 C3.496,15.702 0,42.871 0,42.871 L27.24,48 L27.269,47.994 L28.897,5.661 L28.897,5.661 Z M21.805,7.572 L21.804,7.841 L17.042,9.322 C17.959,5.768 19.677,4.05 21.18,3.402 C21.557,4.356 21.805,5.725 21.805,7.572 Z M19.348,1.66 C19.616,1.66 19.883,1.752 20.14,1.929 C18.165,2.862 16.05,5.214 15.156,9.909 L11.393,11.081 C12.439,7.499 14.924,1.661 19.348,1.661 L19.348,1.66 Z M20.41,22.593 C20.41,22.593 18.816,21.738 16.862,21.738 C13.996,21.738 13.852,23.545 13.852,24 C13.852,26.486 20.296,27.438 20.296,33.258 C20.296,37.836 17.406,40.785 13.509,40.785 C8.833,40.785 6.442,37.86 6.442,37.86 L7.694,33.703 C7.694,33.703 10.153,35.824 12.227,35.824 C13.581,35.824 14.133,34.752 14.133,33.969 C14.133,30.727 8.845,30.582 8.845,25.255 C8.845,20.774 12.047,16.435 18.51,16.435 C21,16.435 22.23,17.153 22.23,17.153 L20.41,22.593 L20.41,22.593 Z M23.419,7.338 L23.42,6.838 C23.42,5.308 23.208,4.076 22.87,3.099 C24.232,3.27 25.14,4.829 25.723,6.621 L23.419,7.338 Z" id="Shopify-Copy"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Shopify</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div id="infra-and-devOps" role="tabpanel" class="tabs-pane fade">
                                    <div class="logosareatech">
                                        <div class=" row d-flex d-flex d-flexnone-seven justify-content-center mt-5">
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-aws2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="48px" viewBox="0 0 60 48" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-aws2x.svg" alt="ic-technology-aws2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-aws" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M17.5063775,30.1026993 L12.0118496,32.4628864 L17.1004377,34.6390217 L23.0009054,32.4628864 L17.5063775,30.1026993 Z M9.24566755,33.0529332 L9.06156061,43.6737751 L17.1003825,47.2140557 L17.1003825,36.1873292 L9.24566755,33.0529332 L9.24566755,33.0529332 Z M25.7670323,33.0529332 L18.502309,35.8190601 L18.502309,46.2181243 L25.7670323,43.2678904 L25.7670323,33.0529332 Z M34.433627,0.0102588054 L28.901318,2.37050105 L34.027632,4.54658119 L39.9280997,2.37050105 L34.433627,0.0102588054 L34.433627,0.0102588054 Z M26.7630189,3.14581302 L26.7630189,13.7666549 L33.6217473,15.7586281 L33.8435802,6.09599173 L26.7630189,3.14581302 L26.7630189,3.14581302 Z M42.1043453,3.73580464 L35.6137757,6.50198671 L35.6137757,16.9387768 L42.1043453,13.988543 L42.1043453,3.73580464 L42.1043453,3.73580464 Z M8.45265087,14.9585516 L2.95812297,17.3187387 L8.04671104,19.494874 L13.9471788,17.3187387 L8.45265087,14.9585516 L8.45265087,14.9585516 Z M0.191996057,17.9087855 L0.00788910956,28.5296825 L8.04671104,32.0699632 L8.04671104,21.0431263 L0.191996057,17.9087855 Z M16.7133608,17.9087855 L9.44869262,20.6749124 L9.44869262,31.0739214 L16.7133608,28.1236875 L16.7133608,17.9087855 Z M26.1541092,14.5667314 L20.6595813,16.9269185 L25.7481694,19.1030538 L31.6486371,16.9269185 L26.1541092,14.5667314 Z M17.8933992,17.5170204 L17.7092923,28.1378623 L25.7481142,31.678143 L25.7481142,20.6525195 L17.8933992,17.5170204 Z M34.414764,17.5170204 L27.1500958,20.2831474 L27.1500958,30.6821564 L34.414764,27.7319225 L34.414764,17.5170204 Z M51.7232439,0.0102588054 L46.2287712,2.37044589 L51.3173592,4.54652604 L57.2177718,2.37044589 L51.7232439,0.0102588054 Z M43.4625339,2.96049267 L43.2784821,13.5813346 L51.3173041,17.1216152 L51.3173041,6.09599173 L43.4625339,2.96049267 Z M59.9838987,2.96049267 L52.7192305,5.72661958 L52.7192305,16.1256286 L59.9838987,13.1753947 L59.9838987,2.96049267 Z" id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>AWS</h5>
                                                </a>
                                            </div>

                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-gradle2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="54px" height="39px" viewBox="0 0 54 39" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-gradle2x.svg" alt="ic-technology-gradle2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-gradle" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M39.1671866,2.25498574 C42.5405329,-0.828111952 47.8027502,-0.739006587 51.0651801,2.45645501 C54.2454614,5.58838632 57.856016,14.214934 44.118448,24.276187 C40.1524502,27.1822285 38.7618566,32.9821013 38.6745548,38.0310432 C38.6677411,38.4645975 38.3067843,38.8125 37.8638948,38.8125 L37.8638948,38.8125 L34.2034534,38.8125 C33.7943482,38.8125 33.4493807,38.5139993 33.3990293,38.116515 C33.0370573,35.3978755 30.671293,33.3640286 27.8709521,33.3640286 C25.0706113,33.3640286 22.704847,35.3978755 22.342875,38.116515 C22.2925236,38.5139993 21.9475561,38.8125 21.5384509,38.8125 L21.5384509,38.8125 L17.8343586,38.8125 C17.4239223,38.8125 17.0769612,38.5149499 17.0236986,38.116515 C16.6730001,35.390488 14.3051317,33.3459243 11.4987394,33.3459243 C8.69234703,33.3459243 6.32447863,35.390488 5.97378012,38.116515 C5.92342871,38.5139993 5.57846122,38.8125 5.16935603,38.8125 L5.16935603,38.8125 L1.36549017,38.8125 C0.976707493,38.8084175 0.643862381,38.5385581 0.567301929,38.165356 C-1.52170637,27.3287516 2.36946132,18.7876758 8.77991066,14.3553519 L8.77991066,14.3553519 L12.1160881,20.0025965 C12.9241082,21.3527331 14.4026897,22.1822494 16.0010199,22.1821276 C16.7614581,22.1851626 17.5095138,21.9936508 18.1710942,21.6265609 L18.1710942,21.6265609 L19.7362915,20.7718428 L19.7861783,20.7718428 C21.6270076,19.6652932 23.3651546,18.4027988 24.9806377,16.9988729 C25.155553,16.8426027 25.2532551,16.6201515 25.248779,16.38836 C25.2474202,16.1498683 25.1348954,15.9250397 24.9432226,15.777847 L24.9432226,15.777847 L24.8414875,15.7042244 C24.5242205,15.5078973 24.1067508,15.5324382 23.8145345,15.777847 C22.2807424,17.1143337 20.6325847,18.319434 18.8882165,19.3798733 L18.8882165,19.3798733 L17.3230192,20.2406965 L17.3916135,20.1918555 L17.3043117,20.2406965 C15.9697824,20.9687954 14.2854524,20.5151104 13.5191534,19.2211399 L13.5191534,19.2211399 L9.98966472,13.2442184 C9.60272393,12.5792092 9.51736907,11.7861078 9.75424555,11.0567476 C9.99112204,10.3273873 10.5286574,9.72819148 11.2368339,9.4040921 C31.8275962,-0.187065961 40.9007517,18.4579988 47.6978234,11.8034079 C49.1068453,10.4299795 49.5287819,8.35925129 48.7659007,6.56162991 C48.0030195,4.76400854 46.2064902,3.59570388 44.2182215,3.60421931 C43.1585458,3.60110624 42.126971,3.93775649 41.2811382,4.5627246 C40.956441,4.8009761 40.5023362,4.7697771 40.2148086,4.48946305 L40.2148086,4.48946305 L39.148479,3.40885517 C38.9936698,3.25371002 38.9064712,3.04575573 38.905281,2.82886789 C38.9110428,2.61106083 39.0053111,2.40450203 39.1671866,2.25498574 Z M37.5818007,15.7212159 C37.2629516,15.0272238 36.4917645,14.6461178 35.7321016,14.8071297 C34.9724386,14.9681417 34.4313016,15.6273972 34.4341683,16.38836 L34.4341683,16.38836 L37.0532349,17.6765422 C37.6802771,17.2329792 37.9006498,16.4152081 37.5818007,15.7212159 Z" id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Gradle</h5>
                                                </a>
                                            </div>




                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-jenkins2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="54px" viewBox="0 0 40 54" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-jenkins2x.svg" alt="ic-technology-jenkins2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-jenkins" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M27.8688945,1.81839795 C29.0300856,2.68932978 30.8788139,4.53805811 31.5358624,5.88264381 C32.2942754,7.40618332 32.6997156,9.37385115 32.8172808,11.4649019 C32.9942239,11.6333536 33.1681316,11.8045922 33.3388575,11.9790126 C36.868164,15.584849 39.0531927,20.5810042 39.0531927,26.0968544 C39.0531927,29.7999626 38.062777,33.2746261 36.3385167,36.2503172 C36.7734431,36.4378342 37.1383113,36.7741972 37.387705,37.3116415 C37.8003813,38.1824193 38.2738812,39.6340237 38.4725202,40.5354443 C38.7627795,41.7884097 38.1516182,44.4469383 36.8529196,44.8593066 C35.7069729,45.2260958 34.3777856,45.2108514 33.0027111,44.9358365 C32.8345609,44.7983291 32.6665647,44.5690474 32.5290572,44.3245212 C31.5512607,44.2940325 30.6191974,44.3705624 29.8551302,44.7830847 C29.9315062,45.5163551 29.4426079,45.6233738 28.968954,45.7762796 C28.6328076,47.1359557 29.6564913,48.9083081 29.4121191,50.1306307 C29.2439689,51.016807 28.1591537,51.1543144 27.3647518,51.3070662 C27.3341091,51.7961185 27.3952406,52.2086408 27.4563721,52.6211632 C27.2731315,53.293456 26.4631772,53.6753356 25.6840197,53.7671099 C23.1325097,54.0726135 19.2669029,54.210121 16.8222576,53.3239448 C16.1345664,51.6433666 15.599935,49.6112437 15.0345068,47.7013839 C12.6509931,47.9610004 10.7106444,46.6775462 8.89240486,45.8220128 C8.26599915,45.5317535 7.39506733,45.3636033 7.15054121,44.8594606 C6.92141346,44.3705624 7.01303376,43.438499 6.95190223,42.5675672 C6.92570445,42.1396602 6.89950666,41.7145255 6.87024528,41.2907893 C6.46989442,40.9438102 6.08463079,40.5792058 5.71433521,40.1992978 C2.18502874,36.5934615 -1.54187774e-12,31.5973063 -1.54187774e-12,26.0968544 C-1.54187774e-12,20.5964026 2.18502874,15.6000933 5.71433521,11.9790126 C6.1613429,11.5223319 6.6301627,11.0874633 7.11905661,10.6762071 C7.18494052,8.72795817 7.72130426,7.12074143 9.09104383,6.50904951 C9.73269392,3.95753955 12.0244334,3.11725049 14.1789733,1.84904071 C14.9887736,1.37538684 15.8749498,1.06988317 16.7916148,0.733582765 C20.0765492,-0.473341498 25.1339899,-0.244213748 27.8688945,1.81839795 Z M14.8358678,39.6187793 C15.3401644,44.2176566 16.0581905,48.0678651 17.3873778,52.1475093 C20.3363197,53.0489299 23.8810245,53.1253058 26.49382,52.3155055 C26.0201661,50.0237661 26.2188051,47.22773 25.9437902,44.7676863 C25.7297529,42.918958 25.8367715,41.0702297 25.5465122,39.1908586 C22.383687,38.5339641 17.9223172,39.0381067 14.8358678,39.6187793 Z M26.6313274,46.0970277 C26.5854403,47.2429744 26.7381921,49.0612139 26.7993237,50.2681382 C27.5633908,50.2681382 27.8841388,50.100142 28.449567,49.9167474 C28.5106985,48.5110302 28.0064019,47.2123316 27.8536501,45.9288774 C27.5479924,45.8220128 26.9979626,46.112272 26.6313274,46.0970277 Z M11.9023243,25.8216855 C9.50356617,26.7691472 7.25755988,28.4039922 5.25592573,29.9623073 C7.1657856,34.0724403 7.94509712,39.0992383 8.08260456,43.9426417 C10.2676333,44.9663253 12.1925836,46.4484185 15.1720142,46.6011703 C14.8206234,44.1719234 14.5151198,41.9868947 14.3164808,39.6950012 C13.567812,39.3742532 12.4982412,39.7103996 11.7954596,39.6033809 C11.7954596,38.7630919 12.8648764,39.2367457 12.9564967,38.6714715 C13.0177822,38.2435508 12.3605798,38.2130621 12.5746171,37.5407692 C13.1246469,37.7394082 13.4149062,38.1824193 13.9955788,38.3505695 C14.5303642,37.1893784 13.9955788,35.1267667 14.0719547,34.1488162 C14.087353,33.9655756 14.163575,33.1403769 14.5760973,33.2778844 C14.9428865,33.4001474 14.5608529,35.4934019 14.5914957,36.4100669 C14.6219845,37.2657543 14.484477,38.0755546 14.8358678,38.61034 C17.7084338,38.2130621 20.6267329,37.9685359 23.7435171,37.8769156 C23.0559798,37.5866564 22.2461795,37.3116415 21.3600033,36.8073448 C20.8711051,36.5323299 19.3585232,35.9670558 19.2210157,35.5086463 C18.991734,34.7752219 19.8015343,34.3933423 19.9390417,33.7667826 C18.4875913,34.5613386 18.2125764,33.0030235 17.8611856,31.9180543 C17.555528,30.9248594 17.3722874,30.1763446 17.2959115,29.6109165 C16.0277017,28.9692664 14.683116,28.3733495 13.6135452,27.6094363 C13.4149062,27.4719289 12.0857189,25.7453096 11.9023243,25.8216855 Z M27.8384057,39.0381067 C27.3036203,39.0535051 26.8298124,39.0381067 26.295181,39.2213474 C26.2645383,41.1924927 26.3868013,43.1480858 26.5397071,45.1190772 C27.3034663,45.0122125 27.8077629,44.9358365 28.5106985,44.7676863 C28.2814168,42.8730709 28.3120595,40.7188389 27.8384057,39.0381067 Z M34.713932,37.1587357 C33.6596056,37.8310285 31.8108772,38.0296675 31.0469641,38.8394678 C31.4288437,40.1229219 31.5511067,41.8647856 31.7038586,43.4842322 C33.0179555,43.5607621 34.6221577,43.117751 35.7223713,43.5912509 C34.9583041,43.835777 33.9805076,43.835777 33.3234592,44.2024122 C33.8734889,44.4621827 35.1264543,44.4164495 35.951499,44.2178105 C37.0822013,43.9426417 37.784983,42.5675672 37.4640809,41.1466056 C37.2501976,40.1992978 36.8835624,38.3964567 36.470886,37.7851414 C36.1806268,37.3421302 35.3708265,36.7462133 34.713932,37.1587357 Z M29.0148412,38.9005993 C29.1828374,40.5049555 29.564871,42.2773079 29.7023784,43.9732844 C30.2371638,43.9885288 30.5274231,43.7287583 30.9705882,43.6523824 C31.001077,42.1702892 30.8483251,40.1229219 30.1301451,38.9005993 C29.7635099,38.8242234 29.3509876,38.9005993 29.0148412,38.9005993 Z M35.951499,41.7884097 C34.9278154,41.803654 33.6596056,41.7884097 32.6818091,41.7118798 C33.2623276,41.0854741 35.2944506,41.482752 35.951499,41.7884097 Z M35.630597,40.2756738 C34.713932,40.3674481 33.6443612,40.5201999 32.7276962,40.443824 C33.1707073,39.7715311 34.8514394,40.0159033 35.630597,40.2756738 Z M35.1416987,38.5339641 C34.0263948,38.7630919 33.2470832,39.847907 32.1470237,39.7715311 C32.758185,38.9310881 33.797113,38.5644529 35.1416987,38.5339641 Z M7.21900089,12.1583809 L7.53217295,11.8737011 C7.19556855,12.1716386 6.86949965,12.4819767 6.55462428,12.8040573 C3.23920117,16.2112547 1.17643549,20.9020602 1.17643549,26.0968544 C1.17643549,31.2916486 3.23920117,35.9823002 6.55462428,39.3894976 L6.72556476,39.5605073 C6.60059921,38.3419624 6.41537049,37.1194592 6.09636878,35.8600371 C5.83659827,34.8211091 5.3629444,33.9196885 5.04204237,32.9266476 C4.7365387,32.0098286 4.21699769,30.8638819 4.07949024,29.9470629 C3.88085126,28.5873868 5.16430543,28.5108569 5.97410572,27.91494 C7.2423155,26.998275 8.2353564,26.4939784 9.61043086,25.6689337 C10.0231072,25.4245616 11.2452758,24.8134002 11.3827833,24.522987 C11.6579522,23.9578668 10.9092834,23.1633109 10.7106444,22.7201458 C10.3897424,22.0173642 10.2215922,21.4214472 10.175859,20.733756 C9.0299123,20.5505154 8.14373609,19.8629782 7.62434906,19.099065 C6.75326326,17.8156109 6.14210194,15.4473415 6.90616907,13.6597447 C6.9673006,13.5222373 7.25755988,13.231824 7.30344703,13.0179406 C7.35804352,12.7630347 7.28786247,12.4592457 7.21900089,12.1583809 Z M29.4883411,24.7675131 C29.167593,25.2718097 28.4341686,25.6078022 28.1591537,26.0204785 C30.1607879,25.0579264 30.5274231,29.6415592 29.7328672,31.1236524 C29.8551302,31.5666635 30.2676526,31.7348137 30.4358028,32.1319377 C29.3203448,34.1335718 28.0829318,35.9975445 26.9368311,37.9685359 C27.7772741,37.4337505 28.9995968,37.8769156 29.9926377,37.4796377 C30.3594269,37.3421302 30.6191974,36.5018412 30.8942123,35.8295483 C31.6579714,33.9960644 32.4525273,31.6735282 32.8040721,29.9319725 C32.880448,29.5346946 33.1095758,28.6636087 33.0484443,28.3122179 C32.956824,27.6705678 32.1011365,27.196914 31.6579714,26.8148804 C30.8483251,26.081456 30.3440285,25.4552043 29.4883411,24.7675131 Z M22.7809649,32.0709601 C21.6350182,32.8347193 20.3822068,33.5682977 20.0460604,34.9586165 C21.6961498,35.8906799 23.6061636,36.7921005 25.4701363,37.3573746 C24.6755804,35.4934019 23.9575544,33.5682977 22.7809649,32.0709601 Z M27.4258833,31.5971523 C27.3493534,33.461279 27.1354701,35.9059242 26.6465718,37.3573746 C27.8230073,35.8447927 28.7857134,34.1029291 29.7787543,32.3917082 C29.3509876,31.7041709 28.4648114,31.108254 27.4258833,31.5971523 Z M32.8511837,13.1765502 L32.8412024,13.5882634 C32.774988,15.6891958 32.4517014,17.8058866 31.9331403,19.6338504 C31.7649901,20.214369 31.5358624,21.0546581 31.1997159,21.7575937 C30.9705882,22.2464919 30.2524082,23.209044 30.3287841,23.6368108 C30.4205584,24.0799759 31.9790274,25.2564114 32.3151739,25.5773134 C32.9110908,26.1578319 34.0568835,26.9218991 34.1485038,27.6553235 C34.2555225,28.434481 33.8125114,29.5040518 33.5833836,30.2527206 C32.8498053,32.7584974 32.1165349,35.0656352 31.2760918,37.3116415 C32.2815765,36.8132609 33.7823663,36.1197432 35.0856196,36.0556775 L34.9842688,36.2216149 C36.8124841,33.2992696 37.8766033,29.8281078 37.8766033,26.0968544 C37.8766033,21.0887075 35.9596605,16.549242 32.8511837,13.1765502 Z M25.2103658,30.8179947 L25.2103658,30.8181487 C24.7672007,30.7721076 24.3853211,31.3375357 23.8046486,31.0930096 C23.6671412,31.2457615 23.5448781,31.3986673 23.4073706,31.5514191 C24.6908248,33.1097342 25.2867417,35.3101613 26.2799366,37.1282469 C26.814722,35.3712928 26.7535905,33.461279 26.8758536,31.5514191 C26.1424292,31.5819079 25.7299068,30.8638819 25.2103658,30.8179947 Z M25.9131474,33.8126698 C26.1424292,33.8126698 26.3104254,33.98082 26.3104254,34.2099477 C26.3104254,34.4239851 26.1271848,34.6072257 25.9131474,34.6072257 C25.6992641,34.6072257 25.5158695,34.4239851 25.5158695,34.2099477 C25.5158695,33.9959104 25.6992641,33.8126698 25.9131474,33.8126698 Z M17.9528059,30.0235928 C17.9986931,30.909615 18.4571026,31.8416784 18.6557415,32.4375953 C18.7473618,32.7126102 18.7778506,33.0028695 19.0071323,33.064001 C19.4196547,33.1557753 20.7947292,32.6209899 21.1767627,32.4069526 C22.0018074,31.9639415 22.6434575,31.2459154 23.3463931,30.7568632 L23.3768819,30.0540816 C22.9491151,29.8400442 22.4754613,29.7026908 21.8489016,29.672202 C22.2615779,29.4581647 22.8879836,29.4581647 23.2698632,29.2137925 C23.2698632,29.1220182 23.2698632,29.0303979 23.2852616,28.9386236 C22.582326,28.8622477 22.3225555,28.5567441 21.8489016,28.2969735 C21.1002328,27.8842972 19.9696845,27.4412861 18.991734,27.2580455 C17.7848097,27.0287638 17.9069188,28.9081349 17.9528059,30.0235928 Z M25.5158695,31.9639415 C25.7451512,31.9639415 25.9131474,32.1471821 25.9131474,32.3612194 C25.9131474,32.5751028 25.7299068,32.7584974 25.5158695,32.7584974 C25.3019861,32.7584974 25.1185915,32.5751028 25.1185915,32.3612194 C25.1185915,32.1471821 25.3019861,31.9639415 25.5158695,31.9639415 Z M18.9213975,27.6131428 C19.7969267,27.7773572 20.8883379,28.1830226 21.6669082,28.612021 L22.0588979,28.865582 L22.2541095,28.9869264 L22.4351569,29.0826752 L22.409187,29.0901674 C22.0553441,29.1695823 21.876757,29.2212507 21.6802515,29.3195035 L20.3954651,29.9618966 L21.8301168,30.0334485 L22.1264553,30.0594933 C22.3192864,30.0841068 22.5034631,30.1232134 22.6837935,30.1767664 L22.9887589,30.2818947 L22.9766913,30.53984 L22.7812844,30.6878991 L22.2291848,31.1442011 L22.096149,31.2572435 C21.6306268,31.6504959 21.3309883,31.8746674 20.9936518,32.0620346 C20.5159239,32.3193829 19.5029565,32.6736489 19.1737463,32.6884383 L19.1138917,32.684 C19.1198093,32.6798726 19.120287,32.6767338 19.1200433,32.6722976 L19.0135224,32.3031574 L18.7011677,31.4777631 C18.5320571,31.0252261 18.4247489,30.6681242 18.367796,30.328762 L18.3432437,30.1548328 L18.3216708,29.8045833 C18.3099589,29.5260214 18.303954,29.3328328 18.3031689,29.1500908 L18.3035513,29.0138223 C18.3086937,28.4916696 18.3627002,28.1024005 18.4741556,27.8555738 C18.5737923,27.6349205 18.6871442,27.5686711 18.9213975,27.6131428 Z M25.5465122,28.3428607 C25.6228882,28.5567441 25.7451512,28.7247403 25.7603956,28.9997552 C26.1730719,28.8928905 26.6618162,28.9692664 27.013207,29.1372626 C26.6006847,29.1831498 26.1576736,29.1831498 25.8826587,29.3817887 C25.7908844,29.672048 25.9131474,30.0540816 25.8367715,30.4513595 C26.7993237,30.7263744 27.9147816,30.8638819 29.1371042,30.909615 C29.366232,30.6041114 29.4578523,30.0234388 29.4273635,29.4276759 C29.3968747,28.7247403 29.2133262,27.2732899 28.770315,27.0135194 C27.8536501,26.478734 26.2340495,28.0983346 25.5465122,28.3428607 Z M28.5844089,27.3568692 C28.7808314,27.4720535 29.0110095,28.5265795 29.0505898,29.4589154 L29.0556703,29.6864558 C29.0531963,29.9836092 29.014479,30.2526643 28.9484961,30.4556638 L28.9139594,30.5383316 L28.6398695,30.5278182 C27.807706,30.4819833 27.0381098,30.3754447 26.3461277,30.2101863 L26.2304228,30.17932 L26.2142265,29.7013698 L26.2153383,29.6438194 L26.2930013,29.6219302 C26.3495641,29.6076951 26.4180869,29.5953867 26.5032307,29.5838946 L27.05476,29.5274778 L28.3662843,29.3820792 L27.1759884,28.8124897 L26.974928,28.7290397 C26.6972162,28.6298979 26.3851512,28.5801179 26.0887966,28.5900485 L26.050917,28.5924282 L26.0297986,28.5366155 L26.2487909,28.4016918 L26.8892019,27.9714537 L27.2199566,27.7587281 C27.3216058,27.6961252 27.4161597,27.641023 27.5081389,27.5910074 C28.0200368,27.3126516 28.3778434,27.2398281 28.5844089,27.3568692 Z M23.7894042,28.9386236 C23.7435171,29.473409 23.8657801,29.6415592 23.9726448,30.2527206 C25.7145085,30.8027503 25.4242492,27.8538085 23.7894042,28.9386236 Z M24.8050723,29.4560974 L24.8100316,29.5739903 C24.8012225,29.8356011 24.6500275,29.9992977 24.3623542,29.9893756 L24.3024186,29.9806399 L24.1856696,29.4654978 L24.1633202,29.308555 L24.156301,29.164287 L24.2419563,29.1244404 C24.5850449,28.9834738 24.7690175,29.1314874 24.8050723,29.4560974 Z M14.6678716,26.998275 C14.0414659,27.6399251 16.4248257,28.4956125 17.1736484,28.5414997 C17.1736484,28.1442217 17.4027761,27.7623421 17.356889,27.4719289 C16.4554684,27.319177 15.2790329,27.4260417 14.6678716,26.998275 Z M26.2188051,26.9676322 C25.0269712,27.0746509 23.5296337,27.8080753 22.3684426,27.2885343 C22.3685966,27.3496658 22.2920667,27.3344214 22.2768223,27.3803086 C23.0866226,28.0067143 23.6823855,28.1440677 24.7672007,28.0830902 C25.256253,27.7316994 25.6992641,27.3039326 26.2188051,26.9676322 Z M18.6709859,1.74202204 C16.7457277,2.70457416 14.1484846,4.29353199 13.2621544,6.29532013 C14.0871991,8.23551479 13.0177822,10.0078672 12.9412523,11.9788586 C12.9107636,13.033185 13.4303046,13.9347596 13.4760377,15.0807063 C13.1857785,15.5543602 12.330091,15.6000933 11.7343281,15.5696046 C11.5356891,14.5610113 11.1842983,13.430463 10.1452163,13.3081999 C8.67852149,13.1402037 7.59370631,14.3625263 7.53257478,15.6307361 C7.45619886,17.1280736 8.67852149,19.6032077 10.4202312,19.4352114 C11.092524,19.3740799 11.2606742,18.7017871 11.9939446,18.7017871 C12.3912226,19.496343 11.3829373,19.7407151 11.2759186,20.3059893 C11.2452758,20.4588951 11.3522945,21.0241693 11.4286704,21.2991842 C11.7495725,22.5978827 12.4523541,24.2938592 13.1398913,25.2870541 C14.0260675,26.5551099 15.7526868,26.7385045 17.6166595,26.8607676 C17.9528059,26.1425876 19.1751286,26.2037191 19.9695305,26.3871137 C19.0071323,26.0052341 18.1209561,25.0884151 17.3875318,24.2786148 C16.5470887,23.3465515 15.6915553,22.3535106 15.6456681,21.131188 C17.2500243,23.3465515 18.5639673,25.2870541 21.467022,26.2650046 C23.6671412,26.998275 26.2340495,25.9287042 27.930026,24.7370243 C28.6328076,24.2479721 29.0453299,23.4535702 29.5496266,22.7506346 C31.4135993,20.0616172 32.2845311,16.2417434 32.1011365,12.5290424 C32.0247606,11.0012161 32.0247606,9.47323579 31.5052196,8.44955213 C30.9705882,7.37998133 29.1523486,6.40218482 28.0827778,7.37998133 C27.8841388,6.3258089 28.968954,5.68400483 30.2370098,6.0660384 C29.3357432,4.88960291 28.3884355,3.49913007 27.0895829,2.76570569 C24.8437306,1.4976499 21.0544997,0.550342159 18.6709859,1.74202204 Z M21.3142702,20.6116469 C22.1698036,22.7506346 25.0881028,22.5062624 27.5479924,22.4451309 C27.4411277,22.7201458 27.211846,23.0562922 26.9063423,23.1631569 C26.1117864,23.4840589 23.942156,23.7285851 22.8420965,23.1479125 C22.1545592,22.7812773 21.6961498,21.9408343 21.3142702,21.451936 C21.14612,21.2228083 20.229455,20.6268913 21.3142702,20.6116469 Z M21.5433979,19.4198131 C22.7657206,20.0616172 25.0269712,20.1379931 26.7077033,20.0921059 C26.7993237,20.4588951 26.7993237,20.9171506 26.7993237,21.3603157 C24.6450916,21.451936 22.1086721,20.9171506 21.5433979,19.4198131 Z M30.7719492,18.6100128 C30.1149007,19.8629782 29.1828374,21.2380526 27.2577331,21.2839398 C27.211846,20.8866618 27.1813572,20.2602561 27.2577331,20.01573 C28.7398263,19.8629782 29.6564913,19.1143094 30.7719492,18.6100128 Z M26.4479328,11.2914754 C27.013207,12.6054183 28.4343226,14.3013948 29.4578523,15.4320971 C29.7176228,15.707112 30.1301451,15.9821269 30.1760323,16.1655215 C30.299789,16.6329698 29.9161571,17.1994512 29.882758,17.5643492 L29.885773,17.6779494 C28.4800558,18.579524 26.9061883,19.5727189 24.5839601,19.3434372 C24.0950619,18.9156704 23.8964229,17.9529643 24.3853211,17.3267126 C24.6296933,17.7544793 24.4769414,18.5490352 25.179877,18.6711443 C26.49382,18.900426 28.0216463,17.861344 28.968954,17.5101072 C29.5494726,16.5169123 28.9232209,16.1655215 28.3884355,15.5237174 C27.3036203,14.2250189 25.8674143,12.6054183 25.9131474,10.6650697 C26.3563125,10.3441676 26.3868013,11.1539679 26.4479328,11.2914754 Z M11.303013,16.5790071 L11.2757646,16.7307957 C10.8327535,16.4710252 10.7258888,15.3709656 10.2063478,15.3403228 C9.45767903,15.2945897 9.59518648,16.7766828 9.59518648,17.6474607 C9.09104383,17.1892052 8.99926955,15.7528452 9.36605873,15.0195748 C8.938292,14.8055374 8.75474343,15.2487025 8.51037129,15.4014544 C8.8242972,13.2342509 11.6385062,14.3275687 11.303013,16.5790071 Z M12.6051059,6.58557941 C11.1231668,6.70768849 9.91608851,7.30360542 9.04515669,8.28155591 C8.09784895,9.33572834 8.29648793,11.2914754 8.4035066,12.6970386 C10.1299719,11.6123774 12.4066209,12.7888129 12.3912226,14.6222968 C13.2162672,14.6068985 12.6968802,13.5986132 12.5441284,12.9415647 C12.0550761,10.8178215 13.3691731,8.52592805 12.6051059,6.58557941 Z M21.6504166,9.82478058 C22.0781833,10.6039381 22.2155368,11.4137384 22.8114537,11.994411 C23.0866226,12.2540275 23.6060096,12.5749295 23.3463931,13.3081999 C23.2852616,13.4763501 22.8420965,13.8583837 22.582326,13.9347596 C21.6504166,14.2097745 19.4653878,13.9958911 20.1988122,12.8193017 C20.9779698,12.8499444 22.0170518,13.3235983 22.5977243,12.7581701 C22.1545592,12.0553885 21.3600033,10.6496713 21.6504166,9.82478058 Z M30.3287841,9.79398384 C30.7719492,10.7108028 31.1538288,11.6887533 31.7192569,12.513798 C31.3373774,13.3999742 28.8773337,14.1638873 28.9078225,12.6054183 C29.4426079,12.3762905 30.3594269,12.5595311 30.8330807,12.2540275 C30.5580658,11.5053587 30.1760323,10.8635546 30.2371638,9.79413783 L30.2371638,9.79398384 L30.3287841,9.79398384 Z M19.8626658,6.41742921 C20.3515641,6.47856074 21.0238569,6.93697022 20.6572217,7.56337592 C18.6862303,7.10496644 17.7084338,8.3884206 17.1125169,9.71760793 C16.5777315,9.59549885 16.7916148,8.86207447 16.9292763,8.49543928 C17.2805131,7.53288715 18.7016287,6.23403462 19.8626658,6.41742921 Z M15.8595515,2.18518713 C13.7053195,2.79634845 10.9397722,4.37006189 10.053596,6.31041053 C10.7411332,6.20354584 11.2147871,5.86739942 11.8870799,5.82151228 C12.1468504,5.80626789 12.4829968,5.92853095 12.7732561,5.85215503 C13.3537747,5.6994032 13.8580713,4.38530628 14.3010824,3.89640802 C14.7290031,3.42275415 15.2483902,3.20887079 15.599935,2.78110406 C15.8290627,2.67408539 16.1650551,2.67408539 16.1804535,2.33793897 C16.0888332,2.23092029 15.9818145,2.15469836 15.8595515,2.18518713 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Jenkins</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-appium2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46px" height="46px" viewBox="0 0 46 46" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-appium2x.svg" alt="ic-technology-appium2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-appium" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M-1.61559655e-12,23.3404788 L0.0396073593,23.4146272 C2.99099036,28.9006445 9.5836536,31.6444244 18.4313813,29.5164575 L19.1094253,29.3533812 L19.53,29.2519788 C23.2807585,28.1513128 27.1342848,26.0271319 29.7644455,24.0714897 L30.042,23.8594788 L30.2790354,24.1245175 C36.2572452,30.9151007 36.1522525,37.7970872 31.6090257,42.4708247 L31.419,42.6589788 L31.0687222,42.8333537 C30.9663251,42.881934 30.8499395,42.9358457 30.7200776,42.9943345 C30.0629482,43.2903008 29.3117871,43.5870568 28.480553,43.8643497 C23.7050349,45.4574236 18.6987689,45.7143228 14.0417005,43.8017924 C13.6872889,43.6562453 13.336554,43.4983632 12.9896172,43.3279188 C5.04779004,39.9190301 0.158659093,31.3594075 0.00485811305,23.7234194 L-1.61559655e-12,23.3404788 Z M35.3775488,4.53456607 L35.67,4.57997881 L35.5514549,4.50086198 C36.7198465,5.25159022 38.4073511,6.64911456 40.101825,8.65758732 C42.8655663,11.9334707 44.6359017,15.7499334 44.9262251,20.0806898 L44.9782891,20.5715784 C45.7884221,29.2394335 40.8129258,37.640469 34.2828893,41.348461 L34.086,41.4559788 L34.1025974,41.4298917 C37.3037131,36.1187189 36.6696661,30.6224235 32.9582007,25.4304267 L32.6052375,24.9506654 C29.5925941,20.9686066 24.8279341,17.4022238 20.5665017,15.516518 L20.115,15.3229788 L20.1915942,15.080011 C22.6532266,7.49082887 27.6741316,3.41494988 35.3775488,4.53456607 Z M32.5562639,2.45863207 L32.853,2.62397881 L32.7055476,2.61823639 C26.5235089,2.48716671 20.9041065,6.82491795 18.3387989,15.4981681 L18.1406503,16.168104 L18.03,16.5019788 C17.0484853,20.2557423 16.9960498,24.175072 17.3292152,27.5076615 L17.3865,28.0219788 L17.135702,28.0789122 C9.32110598,29.7373437 3.28685217,27.4392886 0.416827289,20.2403788 L0.309,19.9624788 L0.333965626,19.682067 L0.399727833,19.0990311 C0.42649734,18.8921266 0.458271499,18.6729817 0.495517951,18.4425531 C0.709222091,17.120453 1.05523742,15.7080904 1.56281306,14.2665721 C3.00769402,10.1631003 5.4447102,6.65446005 9.10634227,4.1998628 C16.0577693,-0.994856384 25.8868484,-1.12441043 32.5562639,2.45863207 Z" id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Appium</h5>
                                                </a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                <a class="icon-block" aria-label="ic-technology-selenium2x" href="#.">
                                                    <div class="icon-box">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44px" height="45px" viewBox="0 0 44 45" version="1.1" class="svg-convert" src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-technology-selenium2x-1.svg" alt="ic-technology-selenium2x">
                                                            <!-- Generator: Sketch 61.2 (89653) - https://sketch.com -->
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="ic-technology-selenium" fill="#252B33" fill-rule="nonzero">
                                                                    <path d="M0.223997,0.0263110881 C0.132461016,0.0523957012 0.0580539352,0.140027067 0.0253235476,0.259886941 C-0.0242084389,0.441832507 0.00590351768,44.742883 0.0557628081,44.8328857 C0.0790013832,44.8749229 0.12689685,44.9280622 0.162245669,44.9509132 C0.266655605,45.0184961 43.2373995,45.0152624 43.3384273,44.9475718 C43.3753036,44.9229962 43.4236354,44.8698569 43.4460012,44.8295443 C43.5065524,44.7203554 43.5221539,6.75355435 43.4618209,6.59521429 C43.4094523,6.45810839 43.2533283,6.37920782 43.1152061,6.42016713 C43.0185423,6.44873086 43.0603281,6.40259774 31.5639977,19.1493505 C28.5186533,22.5259067 28.7184178,22.332859 28.4004966,22.2067474 C28.3105972,22.1710697 21.1287864,14.8927081 21.0251402,14.7322123 C20.9728807,14.6512638 20.9642617,14.4392455 21.0097569,14.3544166 C21.0794726,14.224748 23.4304964,11.2125142 23.5073037,11.15474 C23.6160777,11.0727136 23.7710015,11.0548208 23.9118513,11.1078523 C24.0054602,11.1432067 24.2573751,11.411598 26.0872219,13.424748 C27.2481688,14.7020318 28.1897129,15.7185772 28.231826,15.7400269 C28.3294717,15.7899326 28.5080705,15.7888547 28.6171718,15.7377634 C28.689506,15.7038103 39.455185,1.27600119 39.978653,0.511463334 C40.114375,0.313241832 40.0709527,0.113942454 39.8745704,0.0327783476 C39.7797614,-0.00634857201 0.360700919,-0.0128158314 0.223997,0.0263110881 M13.5058792,20.9525302 C15.4871586,21.2041066 17.2159777,21.8908218 18.7260487,23.0260414 C19.0843373,23.2954028 19.1626721,23.4387603 19.0755001,23.6651144 C19.0501886,23.7308649 17.3867212,25.9176609 17.2594,26.052611 C17.0250504,26.3010616 16.8774364,26.2781028 16.3834257,25.9167986 C14.0049085,24.176998 10.2458235,23.8156938 9.18623172,25.2249096 C8.77677457,25.7695606 8.75320869,26.4799891 9.12960815,26.9323739 C9.5564124,27.4454431 10.3524154,27.7415358 12.9311336,28.3466557 C15.7703856,29.0128912 17.1944847,29.6230772 18.2448029,30.6231311 C19.2152589,31.5473024 19.6350806,32.6100887 19.6347535,34.1428292 C19.6342078,38.1143732 16.3868079,40.3595901 11.0669198,40.0667311 C8.66843699,39.9346912 6.30530301,38.9939205 4.57211989,37.4812285 C4.33820672,37.2770787 4.28103764,37.0857556 4.3963577,36.8927079 C4.5309887,36.6672162 6.17241763,34.4284665 6.23078683,34.390633 C6.42367791,34.2658149 6.61395056,34.3186309 6.92259812,34.5828184 C8.89285835,36.268833 11.7483665,37.0118133 13.8989711,36.3979626 C15.6046607,35.9110857 16.1980626,34.3215412 15.0054764,33.4336942 C14.4551695,33.0241011 13.8364561,32.8139152 11.5687857,32.2662461 C10.1213389,31.9166907 9.78628883,31.8259335 9.10713328,31.5995794 C6.16630796,30.6193585 4.82861702,29.0471677 4.82239825,26.5634167 C4.81465206,23.4744381 7.38322377,21.1845971 11.1506005,20.9221341 C11.6134082,20.8899056 13.1706109,20.9099541 13.5058792,20.9525302 M29.2349033,25.5951602 C32.9251454,25.8314308 35.4454944,28.5215951 35.7055918,32.5018699 C35.7793443,33.6307301 35.7554511,33.8403771 35.5404125,33.9480569 L35.4342569,34.0011962 L30.447346,34.0011962 C25.930007,34.0011962 25.4573802,34.0046454 25.4289047,34.0384908 C25.3576616,34.1233197 25.5237138,34.706882 25.7416982,35.1377093 C26.1808309,36.0058311 26.941376,36.6605333 27.8882661,36.9857287 C29.2445042,37.4513714 31.3271388,37.0730367 32.7199259,36.1077982 C32.9209996,35.9684288 33.0772326,35.9462245 33.2164459,36.0373051 C33.3047088,36.0949715 34.4657648,37.7335594 34.5654833,37.9411585 C34.6920408,38.2048071 34.5558824,38.3596979 33.8042836,38.8066934 C32.19013,39.7666502 30.3487184,40.1773212 28.1551278,40.0665155 C25.0043916,39.9073131 22.30348,37.6093881 21.6449446,34.5276312 C21.4390705,33.5642251 21.4377613,32.1722553 21.6417807,31.188154 C22.2575484,28.2182806 24.8236108,25.9104391 27.8324062,25.6204903 C27.9770745,25.6064779 28.1276343,25.5914954 28.1670199,25.5869683 C28.3218346,25.569399 28.901708,25.573926 29.2349033,25.5951602 M28.3342722,28.5005765 C26.8708965,28.6218376 25.6129586,29.7690217 25.3671534,31.2063701 C25.3060567,31.5639017 24.857214,31.5219723 28.7459113,31.5219723 C31.1306474,31.5219723 32.0917206,31.514535 32.1270695,31.4958877 C32.2540634,31.428736 32.0725188,30.6704498 31.8126395,30.1828185 C31.1524676,28.9439071 29.9575903,28.3660575 28.3342722,28.5005765" id="path1"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h5>Selenium</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tabs-content -->
                        </div>
                        <!-- /.tabs -->
                        <!-- <hr class="mt-100"> -->
                    </div>
                    <!-- /.lqd-column col-lg-8 col-lg-offset-2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        
        
        
        
        <!-- Awards & Recognitions Section -->
        <section class="vc_row pt-90 pb-70 _pb-sm-5-own _pt-sm-5-own" id="awards-recognitions">
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-12 mb-4">
                <header class="fancy-title text-center">
                  <h2>Awards & recognitions</h2>
                </header>
              </div>
              <!-- /.lqd-column col-md-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-12">
                <div class="carousel-container _carousel-nav-left _carousel-nav-xl _carousel-nav-bordered carousel-nav-circle carousel-dots-style1 carousel-nav-border-transparent carousel-nav-hover-gray" id="casestudy-wrap">
                  <div class="carousel-items row" data-lqd-flickity='{ "groupCells": false, "contain": true, "cellAlign": "left" , "prevNextButtons":true,"buttonsAppendTo":"#awards-recognitions-nav" ,"navArrow":"6"}' data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"120","easing":"easeOutQuint","direction":"forward","initValues":{"translateX":-37,"opacity":0},"animations":{"translateX":0,"opacity":1}}'>
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Upcity.com names Cubix as a top mobile app company" class="div-c-box" href="https://upcity.com/mobile-app-development/washington-dc" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/cubix-a-leader-in-mobile-app-development1.jpg" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Upcity.com names Cubix as a top mobile app company</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Cubix - a leader in mobile app development</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Cubix among top 8 mobile app companies" class="div-c-box" href="https://www.expertise.com/FL/west-palm-beach/software-development" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/best-software-development-flo.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3 style="text-transform:initial!important;">Cubix among top 8 software development companies</h3>
                            </div>
                            <!-- /.fancy-box-header -->
                            <div class="fancy-box-info">
                              <p class="mb-0">Expertise lists cubix as top software development company</p>
                            </div>
                            <!-- /.fancy-box-info -->
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Cubix named among top mobile app development companies" class="div-c-box" href="https://topappfirms.co/developers/app-development-companies/" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/top-mobile-app-development-companies-worldwide.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Cubix named among top mobile app development companies</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">TopAppFirm listed Cubix in top mobile app development companies</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Top iOS app development company in the US" class="div-c-box" href="https://topfirms.co/companies/ios-app-development/usa#:~:text=cubix%20is%20a%20partner/" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/top-firms-mobile-app-development-company-badge.jpg" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3 style="text-transform:initial!important;">Top iOS app development company in the US</h3>
                            </div>
                            <!-- /.fancy-box-header -->
                            <div class="fancy-box-info">
                              <p class="mb-0">Cubix among 30 top iOS app developers in USA 2021</p>
                            </div>
                            <!-- /.fancy-box-info -->
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top Software Development Companies in Dubai" class="div-c-box" href="https://topsoftwarecompanies.co/united-arab-emirates/software-development/agencies/dubai" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/top-software-developers-in-dubai.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Cubix Named Among Top Software Companies</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">A leading software company in sept 2021</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Top mobile app development Company in California" class="div-c-box" href="https://www.itfirms.co/top-blockchain-development-companies/" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/app-developer-itfirms-2021-blockchain.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Cubix among top blockchain companies</h3>
                            </div>
                            <!-- /.fancy-box-header -->
                            <div class="fancy-box-info">
                              <p class="mb-0">ITFirms top-rates Cubix dApp developers</p>
                            </div>
                            <!-- /.fancy-box-info -->
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top wearable app developers for august 2021" class="div-c-box" href="https://www.designrush.com/agency/mobile-app-design-development/wearable#:~:text=welcome%20to%20cubix!%20" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/top-wearable-app-developers-for-august-2021.jpg" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top wearable app developers for august 2021</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top wearable app developers in 2021</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Top mobile app development Company in California" class="div-c-box" href="https://www.goodfirms.co/directory/platform/app-development" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/california-goodfirms.jpg" width="100px" alt="GoodFirms Badge" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top Mobile App Development Companies 2021</h3>
                            </div>
                            <!-- /.fancy-box-header -->
                            <div class="fancy-box-info">
                              <p class="mb-0">Top mobile app development company in California</p>
                            </div>
                            <!-- /.fancy-box-info -->
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top Mobile App Development Companies in Florida" class="div-c-box" href="https://appdevelopmentcompanies.co/local-agencies/us/app-developers/florida" rel="nofollow" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/app-development-company-2021.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>App Development <br>Companies 2021 </h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top mobile app development companies in Florida</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Top Mobile App Development Company in Saudi Arabia" class="div-c-box" href="https://www.topmobileappdevelopmentcompany.com/mobile-app-development-companies-in-saudi-arabia/" rel="noopener" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/companies-in-saudi%20arabia.png" width="100px" alt="" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top mobile app development Company 2021</h3>
                            </div>
                            <!-- /.fancy-box-header -->
                            <div class="fancy-box-info">
                              <p class="mb-0">Top mobile app development company in Saudi Arabia</p>
                            </div>
                            <!-- /.fancy-box-info -->
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top mobile app development company in 2021" class="div-c-box" href="https://www.topdevelopers.co/press-releases/leading-mobile-app-development-companies-march-2021" rel="noopener" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/mobile-app-2021.png" width="100px" alt="Clutch Icon" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top mobile app <br>developers </h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top mobile app development company in 2021</p>
                            </div>
                          </div>
                          <!-- /.fancy-box-contents -->
                        </div>
                        <!-- /.fancy-box -->
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/forbes-technologies-cource1.png" width="100px" alt="Clutch Icon" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Forbes technology <br>council </h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Recognised member of forbes technology council</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top hybrid app development company" class="div-c-box" href="https://www.topdevelopers.co/directory/mobile-app-developers/hybrid" rel="noopener" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/2020-hybrid-app-developers1.png" width="120px" alt="Cubix Awarded Forbes Technology Council Member" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top hybrid app developers june 2020</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top hybrid app development company</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <a title="Top mobile app development company in 2020" class="div-c-box" href="https://www.topdevelopers.co/directory/mobile-app-developers" rel="noopener" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/2020-hybrid-app-developers1.png" width="120px" alt="Cubix Awarded Top Hybrid App Developers" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top mobile app <br>developers </h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top mobile app development company in 2020</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <a title="Top rated app development companies in 2020" class="div-c-box" href="https://www.softwareworld.co/top-mobile-app-development-companies/" rel="noopener" target="_blank">
                        <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                          <div class="fancy-box-contents">
                            <figure>
                              <img src="img/home/webp/app_development_compay111.png" width="120px" alt="Cubix Awarded Top Hybrid App Development Company" />
                            </figure>
                            <div class="fancy-box-header">
                              <h3>Top mobile application developers</h3>
                            </div>
                            <div class="fancy-box-info">
                              <p class="mb-0">Top rated app development companies in 2020</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/mobile-appnew-2019.png" width="100px" alt="Cubix Awarded Top Mobile App Developers By Clutch" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Top mobile application developers</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Top mobile application developers 2019</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-goodfirms.png" width="120px" alt="Cubix Awarded Top Mobile App Developers By Clutch" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Top mobile app developer</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Top mobile app development companies in 2019</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-mobile-app-online.png" width="100px" alt="Cubix Awarded Top Mobile App Development Company By GoodFirms" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>E-commerce app developement</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Best E-commerce app development 2018</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-appfutura.png" width="100px" alt="Cubix Awarded Top Mobile App Development Company By Mobile App Daily" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Top app developers</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Top app developers in washington DC 2018</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-design-rush.png" width="100px" alt="Cubix Awarded Top Mobile App Development Company By AppFutura" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Top app design companies</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">The top app design companies of 2019</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center pt-7 pt-sm-0-own contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-top-developers-co.png" width="100px" alt="Cubix Awarded Top Mobile App Design Companies By DesignRush" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Top android app developers</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">Top android app developers for july 2019</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item col-md-3 col-xs-6 text-center contents-sm">
                      <div class="lqd-column-inner iconbox-shadow bg-white px-3 px-md-3 pt-40 pb-40">
                        <div class="fancy-box-contents">
                          <figure>
                            <img src="img/home/webp/badge-business.png" width="100px" alt="Cubix Awarded Top Android App Development Companies By TopDevelopers" />
                          </figure>
                          <div class="fancy-box-header">
                            <h3>Best app maker and development</h3>
                          </div>
                          <!-- /.fancy-box-header -->
                          <div class="fancy-box-info">
                            <p class="mb-0">The best app maker and development solutions of 2019</p>
                          </div>
                          <!-- /.fancy-box-info -->
                        </div>
                        <!-- /.fancy-box-contents -->
                      </div>
                      <!-- /.fancy-box -->
                    </div>
                    <!-- /.carousel-item -->
                  </div>
                  <!-- /.carousel-items row -->
                </div>
                <!-- /.carousel-container -->
              </div>
              <!-- /.lqd-column col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row pt-5 text-center-sm" id="awards-recognitions-footer">
              <div class="col-lg-6">
                <a class="btn-underlined" href="news.html">See all our awards</a>
              </div>
              <div class="col-lg-6 text-right mt-sm-0-own margin-0-nav" id="awards-recognitions-nav"></div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <section id="partners" class="vc_row pt-125 pb-100 pt-sm-0-own pb-sm-5-own bg-gradient-gray-transparent-tb">
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-8 col-md-offset-2">
                <header class="fancy-title mb-60 text-center">
                  <h2>We partner with the world’s technology leaders.</h2>
                </header>
                <!-- /.fancy-title -->
              </div>
              <!-- /.col-md-10 col-md-offset-1 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
          <div class="container">
            <div class="row">
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <div class="iconbox iconbox-heading-sm contents-sm-small h3-991">
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container">
                      <img src="img/home/Google-Developer-Certified-Agency.png" class="liquid-image-icon" alt="Google Developer Certificed Agency" width="150px">
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <div class="contents">
                    <h3 class="font-weight-semibold">Google Developer Certified Agency</h3>
                    <a href="#" class="btn-underlined"> Learn More </a>
                  </div>
                  <!-- /.contents -->
                </div>
              </div>
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <div class="iconbox iconbox-heading-sm contents-sm-small h3-991">
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container">
                      <img src="img/home/Adobe-Solution-Partner-Program.png" class="liquid-image-icon" alt="Adobe Solution Partner Program" width="150px">
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <div class="contents">
                    <h3 class="font-weight-semibold">Adobe Solution Partner Program</h3>
                    <a href="#" class="btn-underlined"> Learn More </a>
                  </div>
                  <!-- /.contents -->
                </div>
              </div>
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <div class="iconbox iconbox-heading-sm contents-sm-small h3-991">
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container">
                      <img src="img/home/Microsoft-Certified-Consulting-Partner.png" alt="Microsoft Certified Consulting Partner" width="150px">
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <div class="contents">
                    <h3 class="font-weight-semibold">Microsoft Certified Consulting Partner</h3>
                    <a href="#" class="btn-underlined"> Learn More </a>
                  </div>
                  <!-- /.contents -->
                </div>
              </div>
              <div class="lqd-column col-md-3 col-sm-3 col-xs-6 col-xxs-6">
                <div class="iconbox iconbox-heading-sm contents-sm-small h3-991">
                  <div class="iconbox-icon-wrap">
                    <span class="iconbox-icon-container">
                      <img src="img/home/Amazon-Web-Services-Partner.png" class="liquid-image-icon" alt="Amazon Web Services Partner" width="150px">
                    </span>
                  </div>
                  <!-- /.iconbox-icon-wrap -->
                  <div class="contents">
                    <h3 class="font-weight-semibold">Amazon Web Services Partner</h3>
                    <a href="#" class="btn-underlined"> Learn More </a>
                  </div>
                  <!-- /.contents -->
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
      </main>
      <!-- /#content.content -->
    </div>
    @endsection
            
            
            
 