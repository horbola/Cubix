@extends('layout.page')


@section('title', 'Blog')

<!--header ends from 577 line-->
@section('content')
<div class="titlebar titlebar-smtext-center" data-parallax="true" data-parallax-options='{ "parallaxBG": true }'>
    <div class="titlebar-inner inner-title-height d-flex flex-wrap align-items-center text-center">
        <div class="container titlebar-container">
            <div class="row titlebar-container">
                <div class="titlebar-col col-md-8 m-auto float-none">
                    <h1 data-fittext="true" data-fittext-options='{ "maxFontSize": 50, "minFontSize": 32 }'>We Help Businesses</h1>
                    <p class="page-description">Empower people through technology and innovative solutions</p>
                    <a class="titlebar-scroll-link" href="#content" data-localscroll="true">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
                <!-- /.titlebar-col -->
            </div>
            <!-- /.titlebar-row -->
        </div>
        <!-- /.titlebar-container -->
    </div>
    <!-- /.titlebar-inner -->
</div>
<!-- /.titlebar -->
<!-- Content -->
<div id="content-wrapper">
    <style type="text/css">
      .titlebar-col.col-md-8.m-auto.float-none {
        padding-top: 100px
      }

      .page-blog #content {
        background-color: #FFF
      }

      .post-author {
        padding: 0;
        border-top: 0 solid #d8dbe2;
        border-bottom: 0 solid #d8dbe2
      }

      .figure-thumb {
        width: 150px;
        height: 75px;
        flex: 0 0 auto;
        position: relative;
        margin-right: 15px;
        border-radius: 3px;
        transition: all .5s ease;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50%;
        overflow: hidden
      }

      .popular-container:hover .article-title a {
        color: #4869e8
      }

      .popular-container:hover .figure-thumb .blog_post_image_overlay {
        opacity: .75
      }

      .figure-thumb:hover .blog_post_image_overlay {
        opacity: .75
      }

      .post-author figure {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        margin-right: 15px !important;
        float: left !important
      }

      .post-author .post-author-info {
        float: none !important;
        display: block;
        width: auto;
        margin-top: 20px !important;
        text-align: left
      }

      figure.liquid-lp-media {
        box-shadow: 0 36px 64px 0 rgba(0, 0, 0, .2);
        margin-bottom: 50px !important
      }

      figure.liquid-lp-media a {
        width: 100%;
        position: relative;
        overflow: hidden;
        margin-bottom: 50px;
        border-radius: 6px;
        box-shadow: 0 36px 64px 0 rgba(0, 0, 0, .2)
      }

      .titlebar-scroll-link {
        display: none
      }

      figure.liquid-lp-media:hover {
        box-shadow: 0 36px 64px 0 rgba(0, 0, 0, .2) !important
      }

      .post-author h6 {
        font-weight: 500;
        font-size: 14px;
        margin-bottom: 0;
        margin-top: 0;
        color: #333
      }

      .post-author time {
        color: #7f7f7f;
        padding-right: 5px;
        font-size: 12px
      }

      .in-cat {
        color: #7f7f7f;
        padding-left: 5px;
        display: none
      }

      .post-author .liquid-lp-category li {
        color: #4869e8;
        text-decoration: underline;
        padding: 0 5px;
        font-size: 12px
      }

      .liquid-blog-item-inner {
        padding: 0 !important
      }

      .iconbox-shadow-hover:hover {
        box-shadow: none
      }

      .liquid-lp-title.size-sm {
        font-size: 32px;
        font-weight: 600
      }

      .liquid-lp-media:hover .blog_post_image_overlay {
        opacity: .75
      }

      .blog_post_image_overlay {
        top: 0;
        left: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1000;
        opacity: 0;
        border-radius: 6px;
        background-color: #0072bb;
        transition: opacity .3s ease
      }

      .blog_post_image_overlay::after {
        top: 0;
        left: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        content: "";
        background: url(../cdn2.hubspot.net/hubfs/493098/images/shared/arrow_right_white.png) no-repeat 50%;
        background-size: auto;
        background-size: 33px 28px
      }

      .liquid-lp-title a:hover {
        color: #0072bb !important
      }

      .liquid-blog-scheme-dark .liquid-lp-title .split-inner::after {
        background-color: #4869e8
      }

      .liquid-blog-scheme-dark:hover .liquid-lp-title .split-txt {
        color: #4869e8
      }

      .liquid-lp-excerpt p {
        display: inline
      }

      .liquid-lp-footer {
        margin-top: 15px !important;
        display: block
      }

      .page-blog .inner-title-height {
        min-height: 50vh
      }

      .most-popular__articles {
        padding: 15px 0 0 !important;
        position: relative;
        list-style-type: none !important
      }

      .popular-container {
        display: flex;
        cursor: pointer;
        text-decoration: none
      }

      .most_popular_articles_details {
        display: flex;
        flex-direction: column;
        justify-content: start
      }

      .side-bar_author {
        color: #999;
        font-size: 14px;
        text-transform: capitalize
      }

      .widget.widget_categories li {
        margin-bottom: 20px
      }

      .article-title a {
        text-transform: capitalize;
        font-size: 13px
      }

      .widget.widget_categories {
        margin-top: 30px
      }

      .blog-top-bar {
        background: #fafafa;
        margin-bottom: 40px
      }

      .blog-top-bar nav {
        width: 100%;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: space-around
      }

      .blog-top-bar nav a {
        font-weight: 600;
        color: #7f7f7f;
        font-size: 14px
      }

      .blog-top-bar nav a:hover {
        color: #0072bb
      }

      .most_popular_articles_details .article-title {
        max-height: 60px;
        overflow: hidden
      }
    </style>

    <main id="content" class="content">
        <div class="post-list">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="liquid-lp-category"></ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="vc_row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul></ul>
                        </div>
                    </div>
                    <div class="row d-md-flex">
                        <div class="lqd-column col-md-7 _pt-85">
                            <div class="liquid-blog-posts">
                                <div class="liquid-blog-grid liquid-blog-style-classic row" data-liquid-masonry="true">
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up h3-size-change col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="agile-project-management-and-cubix-approach-to-software-development.html" class="liquid-overlay-link">Agile Project Management and Cubix&#039; Approach to Software Development</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="agile-project-management-and-cubix-approach-to-software-development.html" data-split-text="text" data-split-options='{ "type": "lines" }'>Agile Project Management and Cubix&#039; Approach to Software Development</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>                                    
                                                                <img src="video/siomimg/612/91a/9ca/61291a9ca1756198806125.jpg" alt="hiba-ali.jpg" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Hiba Ali</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Jan 18, 2022">Jan 18, 2022</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="agile-project-management-and-cubix-approach-to-software-development.html">
                                                    <img src="video/siomimg/61e/6cd/ee7/thumb_1015_700_300_0_0_auto.jpg" alt="Agile Project Management and Cubix&#039; Approach to Software Development" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>Every sustainable system in existence comprises a number of actions that are collectively called a process. Standardized processes are often a norm in many industries, even with software development.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="agile-project-management-and-cubix-approach-to-software-development.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up h3-size-change col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="nfts-a-conceptual-exploration-of-tangible-vs-digital-assets-copyright-ownership-and-scarcity-driven-value.html" class="liquid-overlay-link">NFTs | A Conceptual Exploration of Tangible Vs. Digital Assets, Copyright Ownership, and Scarcity-Driven Value</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="nfts-a-conceptual-exploration-of-tangible-vs-digital-assets-copyright-ownership-and-scarcity-driven-value.html" data-split-text="text" data-split-options='{ "type": "lines" }'>NFTs | A Conceptual Exploration of Tangible Vs. Digital Assets, Copyright Ownership, and Scarcity-Driven Value</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>                                    
                                                                <img src="video/siomimg/602/53f/8e3/60253f8e32a5a317687676.png" alt="cubix-opera-favicon160x160.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Siom</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Jan 14, 2022">Jan 14, 2022</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="nfts-a-conceptual-exploration-of-tangible-vs-digital-assets-copyright-ownership-and-scarcity-driven-value.html">
                                                    <img src="video/siomimg/61e/180/10e/thumb_1014_700_300_0_0_auto.png" alt="NFTs | A Conceptual Exploration of Tangible Vs. Digital Assets, Copyright Ownership, and Scarcity-Driven Value" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>NFTs (nonfungible tokens) have been around for quite a while, but a legal definition for them has not come forward to date.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="nfts-a-conceptual-exploration-of-tangible-vs-digital-assets-copyright-ownership-and-scarcity-driven-value.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="blankos-block-party-banks-monster-125b-valuation.html" class="liquid-overlay-link">Blankos Block Party Banks Monster $1.25B Valuation</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="blankos-block-party-banks-monster-125b-valuation.html" data-split-text="text" data-split-options='{ "type": "lines" }'>Blankos Block Party Banks Monster $1.25B Valuation</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>                                    
                                                                <img src="video/siomimg/604/f37/63a/604f3763aea6e956179214.png" alt="asma_arshad.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Asma Arshad</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Jan 11, 2022">Jan 11, 2022</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="blankos-block-party-banks-monster-125b-valuation.html">
                                                    <img src="video/siomimg/61d/d64/6db/thumb_1013_700_300_0_0_auto.png" alt="Blankos Block Party Banks Monster $1.25B Valuation" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>The NFT market has taken the gaming world by storm. Valuations are now in billions because of player interest, which is based on earning opportunities doing what they do best.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="blankos-block-party-banks-monster-125b-valuation.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="50-of-all-mobile-games-are-developed-on-cross-platform-engine-unity.html" class="liquid-overlay-link">50% of all Mobile Games are Developed on Cross-Platform Engine, Unity</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="50-of-all-mobile-games-are-developed-on-cross-platform-engine-unity.html" data-split-text="text" data-split-options='{ "type": "lines" }'>50% of all Mobile Games are Developed on Cross-Platform Engine, Unity</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/5fa/c0e/161/5fac0e161d65a537354067.jpg" alt="new.jpg" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Amit Kumar</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Jan 07, 2022">Jan 07, 2022</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="50-of-all-mobile-games-are-developed-on-cross-platform-engine-unity.html">
                                                    <img src="video/siomimg/61d/832/897/thumb_1011_700_300_0_0_auto.png" alt="50% of all Mobile Games are Developed on Cross-Platform Engine, Unity" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>Unity has been a remarkable technology framework for game development. Today, with 50% of games reliant on this gaming framework, it's no wonder why Mark Zuckerburg wanted to acquire Unity – in 2015, he said that Unity would be a pivotal consumer tec...</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="50-of-all-mobile-games-are-developed-on-cross-platform-engine-unity.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="core-concepts-driving-nfts-their-relevance-and-longevity.html" class="liquid-overlay-link">Core Concepts Driving NFTs, their Relevance, and Longevity</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="core-concepts-driving-nfts-their-relevance-and-longevity.html" data-split-text="text" data-split-options='{ "type": "lines" }'>Core Concepts Driving NFTs, their Relevance, and Longevity</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/602/53f/8e3/60253f8e32a5a317687676.png" alt="cubix-opera-favicon160x160.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Siom</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Jan 04, 2022">Jan 04, 2022</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="core-concepts-driving-nfts-their-relevance-and-longevity.html">
                                                    <img src="video/siomimg/61d/445/c16/thumb_1010_700_300_0_0_auto.png" alt="Core Concepts Driving NFTs, their Relevance, and Longevity" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>People are still exploring what NFTs are, and that’s a good thing. The key to any understanding and certainty of credibility is to question the why and wherefore of a subject and to revisit this practice for the benefit of all newcomers.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="core-concepts-driving-nfts-their-relevance-and-longevity.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up h3-size-change col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="roblox-to-include-nft-like-special-edition-game-items-for-avatar-realism.html" class="liquid-overlay-link">Roblox to Include NFT-like Special- edition Game Items for Avatar Realism</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="roblox-to-include-nft-like-special-edition-game-items-for-avatar-realism.html" data-split-text="text" data-split-options='{ "type": "lines" }'>Roblox to Include NFT-like Special- edition Game Items for Avatar Realism</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/5fa/c0e/161/5fac0e161d65a537354067.jpg" alt="new.jpg" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Amit Kumar</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Dec 31, 2021">Dec 31, 2021</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="roblox-to-include-nft-like-special-edition-game-items-for-avatar-realism.html">
                                                    <img src="video/siomimg/61c/ec9/3da/thumb_1009_700_300_0_0_auto.png" alt="Roblox to Include NFT-like Special- edition Game Items for Avatar Realism" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>The game development arena has been witnessing a steady flow of news concerning companies making strides toward harnessing the latest technologies, such as blockchain tech and NFT game development.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="roblox-to-include-nft-like-special-edition-game-items-for-avatar-realism.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up h3-size-change col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="wagmi-cubix-partnership-the-nft-game-developer-will-build-wagmis-mobile-pvp-game.html" class="liquid-overlay-link">WAGMI-Cubix Partnership - The NFT Game Developer will Build WAGMI&#039;s Mobile PVP Game</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="wagmi-cubix-partnership-the-nft-game-developer-will-build-wagmis-mobile-pvp-game.html" data-split-text="text" data-split-options='{ "type": "lines" }'>WAGMI-Cubix Partnership - The NFT Game Developer will Build WAGMI&#039;s Mobile PVP Game</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/602/53f/8e3/60253f8e32a5a317687676.png" alt="cubix-opera-favicon160x160.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Siom</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Dec 27, 2021">Dec 27, 2021</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="wagmi-cubix-partnership-the-nft-game-developer-will-build-wagmis-mobile-pvp-game.html">
                                                    <img src="video/siomimg/61c/9ad/d1a/thumb_1008_700_300_0_0_auto.jpg" alt="WAGMI-Cubix Partnership - The NFT Game Developer will Build WAGMI&#039;s Mobile PVP Game" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>Whether you’re a game enthusiast or a professional gamer with an appetite for destruction, ruthless gunfire, and battlefield action, there are loads of games out there for you.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="wagmi-cubix-partnership-the-nft-game-developer-will-build-wagmis-mobile-pvp-game.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="mythical-games-wins-150m-round-at-125b-valuation.html" class="liquid-overlay-link">Mythical Games wins $150M round at $1.25B Valuation</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="mythical-games-wins-150m-round-at-125b-valuation.html" data-split-text="text" data-split-options='{ "type": "lines" }'>Mythical Games wins $150M round at $1.25B Valuation</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/604/f37/63a/604f3763aea6e956179214.png" alt="asma_arshad.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Asma Arshad</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Dec 24, 2021">Dec 24, 2021</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="mythical-games-wins-150m-round-at-125b-valuation.html">
                                                    <img src="video/siomimg/61c/5cd/092/thumb_1007_700_300_0_0_auto.png" alt="Mythical Games wins $150M round at $1.25B Valuation" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>If there’s one thing that can solely be pointed out as a metric for the relationship between NFTs and gaming, it would be the massive investments.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="mythical-games-wins-150m-round-at-125b-valuation.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="lqd-column cst-transform-caps ourup my-newheading-up col-md-12 col-sm-4 col-xs-12 masonry-item">
                                        <article class="liquid-lp iconbox-round liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark mb-50">
                                            <div class="liquid-blog-item-inner iconbox-heading-sm iconbox-has-fill-element iconbox-shadow-hover ">
                                                <a href="nft-based-gaming-is-a-vital-part-of-the-future.html" class="liquid-overlay-link">NFT-based gaming is a &quot;vital part&quot; of the future</a>
                                                <header class="liquid-lp-header">
                                                    <h2 class="liquid-lp-title h2 size-sm">
                                                        <a href="nft-based-gaming-is-a-vital-part-of-the-future.html" data-split-text="text" data-split-options='{ "type": "lines" }'>NFT-based gaming is a &quot;vital part&quot; of the future</a>
                                                    </h2>
                                                    <div class="liquid-lp-details">
                                                        <div class="post-author">
                                                            <figure>
                                                                <img src="video/siomimg/604/f37/63a/604f3763aea6e956179214.png" alt="asma_arshad.png" />
                                                            </figure>
                                                            <div class="post-author-info clearfix">
                                                                <h6>
                                                                    <p>Asma Arshad</p>
                                                                </h6>
                                                                <time class="liquid-lp-date" datetime="Dec 20, 2021">Dec 20, 2021</time>
                                                                <span class="in-cat">in</span>
                                                                <ul class="liquid-lp-category">
                                                                    <li>
                                                                        <p>Blog</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.liquid-lp-details -->
                                                </header>
                                            </div>
                                            <!-- /.liquid-blog-item-inner -->
                                            <figure class="liquid-lp-media mb-0">
                                                <a href="nft-based-gaming-is-a-vital-part-of-the-future.html">
                                                    <img src="video/siomimg/61c/093/43c/thumb_1004_700_300_0_0_auto.png" alt="NFT-based gaming is a &quot;vital part&quot; of the future" />
                                                    <div class="blog_post_image_overlay"></div>
                                                </a>
                                            </figure>
                                            <div class="liquid-lp-excerpt">
                                                <p>The NFT and blockchain segments in gaming are gaining momentum and show no signs of slowing down. The NFT gaming industry is gaining popularity every day, even drawing in people unfamiliar with the idea of cryptocurrency.</p>
                                            </div>
                                            <!-- /.latest-post-excerptc -->
                                            <footer class="liquid-lp-footer">
                                                <a href="nft-based-gaming-is-a-vital-part-of-the-future.html" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
                                                    <span>
                                                        <span class="btn-line btn-line-before"></span>
                                                        <span class="btn-txt">Continue Reading</span>
                                                        <span class="btn-line btn-line-after"></span>
                                                    </span>
                                                </a>
                                            </footer>
                                        </article>
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.liquid-blog-grid row -->
                            </div>
                            <!-- /.liquid-blog-posts -->
                        </div>
                        <!-- /.col-md-8 -->
                        <div class="col-md-4 col-md-offset-1 sidebar-container sticky-wrapper">
                            <aside class="main-sidebar job-sidebar sticky-item">
                                <div class="widget widget_categories">
                                    <h3 class="widget-title"> MOST POPULAR </h3>
                                    <ul class="most-popular__articles">
                                        <li>
                                            <div class="popular-container">
                                                <div class="most_popular_articles_image">
                                                    <figure class="figure-thumb">
                                                        <img class="figure-img img-fluid" src="video/siomimg/61e/6cd/ee7/thumb_1015_500_300_0_0_auto.jpg" alt="Agile Project Management and Cubix&#039; Approach to Software Development" />
                                                        <div class="blog_post_image_overlay"></div>
                                                        <!-- <figcaption class="figure-caption"></figcaption> -->
                                                    </figure>
                                                </div>
                                                <div class="most_popular_articles_details">
                                                    <div class="blog-content">
                                                        <div class="article-title">
                                                            <a href="agile-project-management-and-cubix-approach-to-software-development.html">Agile Project Management and Cubix&#039; Approach to Software Development</a>
                                                        </div>
                                                        <div class="article-author">
                                                            <span class="side-bar_author">Hiba Ali</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular-container">
                                                <div class="most_popular_articles_image">
                                                    <figure class="figure-thumb">
                                                        <img class="figure-img img-fluid" src="video/siomimg/61e/180/10e/thumb_1014_500_300_0_0_auto.png" alt="NFTs | A Conceptual Exploration of Tangible Vs. Digital Assets, Copyright Ownership, and Scarcity-Driven Value" />
                                                        <div class="blog_post_image_overlay"></div>
                                                        <!-- <figcaption class="figure-caption"></figcaption> -->
                                                    </figure>
                                                </div>
                                                <div class="most_popular_articles_details">
                                                    <div class="blog-content">
                                                        <div class="article-title">
                                                            <a href="nfts-a-conceptual-exploration-of-tangible-vs-digital-assets-copyright-ownership-and-scarcity-driven-value.html">NFTs | A Conceptual Exploration of Tangible Vs. Digital Assets, Copyright Ownership, and Scarcity-Driven Value</a>
                                                        </div>
                                                        <div class="article-author">
                                                            <span class="side-bar_author">Siom</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular-container">
                                                <div class="most_popular_articles_image">
                                                    <figure class="figure-thumb">
                                                        <img class="figure-img img-fluid" src="video/siomimg/61d/d64/6db/thumb_1013_500_300_0_0_auto.png" alt="Blankos Block Party Banks Monster $1.25B Valuation" />
                                                        <div class="blog_post_image_overlay"></div>
                                                        <!-- <figcaption class="figure-caption"></figcaption> -->
                                                    </figure>
                                                </div>
                                                <div class="most_popular_articles_details">
                                                    <div class="blog-content">
                                                        <div class="article-title">
                                                            <a href="blankos-block-party-banks-monster-125b-valuation.html">Blankos Block Party Banks Monster $1.25B Valuation</a>
                                                        </div>
                                                        <div class="article-author">
                                                            <span class="side-bar_author">Asma Arshad</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="widget widget_media_image"><a href="#"><img src="./assets/demo/misc/sponsored-min.jpg" alt="Sponsoreds"></a></div> -->
                            </aside>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.vc_row -->
        </div>        
    </main>
    <!-- /#content.content -->
</div>

@endsection
<!--footer ends from  line-->           
