@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
        {{--=========SECTION NEWS-BANNER=========--}}
        <section class="section__news-banner">
            <div class="general__container">
                <div class="history">
                    <span class="history__name general__euclid-l">Новости/</span>
                    <span class="history__name general__euclid-r">Архитектор – это не просто профессия, а образ жизни.</span>
                </div>
                <h1 class="title general__corbel-b">Архитектор – это не просто профессия, а образ жизни.</h1>
            </div>
        </section>

        {{--=========SECTION NEWS-SINGLE=========--}}
        <section class="section__news-single">
            <div class="general__container">
                <div class="single">
                    <div class="pic">
                        <img src="/img/news/1.jpg" alt="">
                    </div>
                    <div class="single__description">
                        <h3>This article might be the second</h3>
<p>                        third, or even the tenth you’re reading for the same damn question. You can’t seem to find the correct answer. How much does branding cost? The obvious similar answer is “it DEPENDS.” Yes, I know… the same answer again? But wait. I want to share how you can determine the best solution suited for you and your business!</p>

                        <h5>The good news is if you’re reading this</h5>
                        you want to invest in the branding of your business, and I want to congratulate you. I’m gonna skip for you the fluff around what is branding and why we should do it. If you want to learn about branding in detail — I invite you to look here. I have many articles about it. At the moment of writing this, I don’t. But, I probably do now(in your present.)

                        ‍This article will explain what you can expect to receive depending on your budget and goals. The last thing you want to do is work with someone and be disappointed with WASTED money. Not only that, you’ll develop a brick wall of doubts and fear for working with designers. We want to avoid this at all costs (not to the point of bankruptcy, though.)‍

                        You will learn where to look for brand designers and how to choose the right fit for you. In the end, your investment will be well invested, and you’ll be proud of your brand.
                        <h4>The budget for a branding project</h4>
                        First thing first. You need to know what do you exactly need. I’m going to use a product-based business as an example. Let’s assume you want to rebrand your skincare brand, and you have a budget of $200,000. You want to spend a maximum of 15% of your budget on branding. After spending two minutes in my brain calculating, I know that you can spend a maximum of $30,000 on your branding.‍

                        Again, assuming that you’re rebranding your skincare brand. You’ll probably need (99% of the time):‍

                        Brand Strategy (Brand values, brand mission, target audience, brand personality, tone of voice, tagline)
                        Brand Naming (You might already have your brand’s name)
                        Brand Identity System (Logo, colour palette, typography, imagery style, etc.)
                        Packaging
                        Website Design & Development (You can start with a template-based theme)‍
                        Now, each one of these services. There are always freelancers or agencies specialized in every aspect of those services. But, you can find someone who offers all of the above with STUNNING results. Hint: You’re reading an article about this particular kind of designer.
                    </div>
                </div>
            </div>
        </section>

        {{--=========SECTION NEWS=========--}}
        <section class="section__news">
            <div class="general__container">
                <div class="general__top">
                    <h2 class="general__title" data-aos="fade-right">
                        <span class="line">Последние </span>
                        <span class="pl">новости</span>
                    </h2>
                    <div class="news__buttons general__carousel-buttons" data-aos="fade-left">
                        <button class="news__prev general__carousel-btn">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8528 3.36135L6.40993 8.80421L11.8528 14.2471" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="news__next general__carousel-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7185 3.36331L12.1614 8.80617L6.71851 14.249" stroke="white" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="news__carousel owl-carousel">
                <?php for ($i = 1; $i < 5; $i++):?>
                <div class="news__carousel-item">
                    <span class="date general__euclid-l">01.09.2022</span>
                    <div class="pic">
                        <img class="pic__banner" src="<?php echo '/img/news/'.$i.'.jpg'; ?>" alt="">
                    </div>
                    <div class="content">
                        <a href="/blog-single" class="title general__euclid-r">Архитектор – это не просто профессия, а образ жизни.</a>
                        <a href="/blog-single" class="link general__euclid-r">Подробнее</a>
                    </div>
                </div>
                <?php endfor ?>
            </div>
        </section>
    </div>

    {{--=========FOOTER=========--}}
    @include('layouts.footer')
@endsection

@section('script')
    <script>
        $(window).on('scroll load', () => {
            ($(window).scrollTop() > 80) ?
                $('.header').addClass('header__dark').removeClass('header__transparent') :
                $('.header').addClass('header__transparent')
        });
        $(window).on('load', function () {

            $('.header').addClass('header__dark header__transparent')

            $('.news__carousel').owlCarousel({
                dots: true,
                nav: false,
                mouseDrag: false,
                smartSpeed: 700,
                lazyLoad: true,
                autoplay: false,
                margin: 40,
                autoplayTimeout: 3000,
                loop: true,
                responsiveBaseElement: 'body',
                responsive: {
                    0: {
                        items: 1.15,
                        margin: 20,
                    },
                    600: {
                        items: 2.5,
                        slideBy: 1
                    },
                    1300: {
                        items: 3.5,
                    }
                }

            })
            $('.news__prev').click(() => {
                $('.news__carousel').trigger('prev.owl.carousel', [700]);
                $('.news__carousel').trigger('stop.owl.autoplay')
            })
            $('.news__next').click(() => {
                $('.news__carousel').trigger('next.owl.carousel', [700]);
                $('.news__carousel').trigger('stop.owl.autoplay')
            })
        });
    </script>
@endsection
