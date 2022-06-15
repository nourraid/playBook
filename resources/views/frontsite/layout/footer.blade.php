<!-- footer -->
<div class="footer">
    <div class="f-bg-w3l">
        <div class="container">
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Follow <span>Us</span></h2>
                <ul class="social_agileinfo">
                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-8 w3layouts_footer_grid">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email..." required="">
                    <input type="submit" value="">
                </form>
                <ul class="w3l_footer_nav">
                    <li><a href="{{--route('')--}}" class="active">Home</a></li>
                    <li><a href="{{--route('')--}}">Categories</a></li>
                    <li><a href="{{--route('')--}}">Books</a></li>
                    <li><a href="{{--route('')--}}">Mail Us</a></li>
                </ul>
                <p>© 2017 Mastering. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- //testimonials -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('js/JiSlider.js')}}"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
    })
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- stats -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- //footer -->
<!-- flexSlider -->
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->


<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
