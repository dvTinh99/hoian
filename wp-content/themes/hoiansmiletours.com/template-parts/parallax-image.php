<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/stylecss.css">
<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/assets/images/parallax-image/canh dep du lich 02.jpg" alt="">
        <div class="cover">
            <div class="container">
                <div class="header-content">
                    <div class="line"></div>
                    <h1>Tour trong nước</h1>
                    <h4>Khám phá những tour du lịch đa dạng và thú vị nhất tại Việt Nam.</h4>
                    <button>Xem thêm</button>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/assets/images/parallax-image/banner2.jpg" alt="">
        <div class="cover">
            <div class="container">
                <div class="header-content">
                    <div class="line animated bounceInLeft"></div>
                    <h1>Tour nước ngoài</h1>
                    <h4>Khám phá những vùng đất mới cùng VERATRAVEL thật đơn giản và thú vị.</h4>
                    <button>Xem thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        mouseDrag: false,
        autoplay: true,
        animateOut: 'slideOutUp',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>