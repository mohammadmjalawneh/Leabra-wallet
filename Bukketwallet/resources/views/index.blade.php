@extends('included.layout')
@section('logstate')
<a class="topbar_login" href="#">
    LOGIN <span class="sf-sub-indicator"></span>
</a>
@section('navmenu')
<li>
    <a href="/Register">Register</a>
</li>
@endsection
<div id="fast-login" class="access-info-box">
    <form action="" method="post" name="loginform">
        @csrf
        <div class="form">
            <p>
                <label>
                    Email<br/>
                    <input type="text" tabindex="10" size="60" value="" name="email" class="input-text" required="required" />
                </label>
            </p>

            <p>
                <label>
                    Password<br/>
                    <input type="password" tabindex="20" size="60" value="" name="pwd" class="input-text" required="required" />
                </label>
            </p>
            <p class="align-left">
                <a tabindex="100" class="btn btn-success" href="/Register">Register</a>
            </p>
            <p class="align-right">
                <input type="submit" tabindex="100" value="Login" name="wp-submit" class="input-submit" />
            </p>
        </div>
    </form>
</div>
</div>
@endsection
@section('main')
<!-- BEGIN FLEXSLIDER SLIDER -->
<div id="slider-polaroid-0" class="slider slider-polaroid polaroid no-responsive" style="height:400px;">
    <div class="thumbs  container">
        <div class="thumb">
            <img src="style/images/slider/flexslider/001-150x150.png" alt="images/slider/flexslider/001.png" />
            <div class="slide-content container align-right" style="background-image:url('style/images/slider/flexslider/001.png');">
                <div class="text">
                    <h2>With Libra we will make you HAPPY.</h2>
                    <p>
                        Quisque nec mi eu nibh aliquam elementum. Ut cursus nisl sit amet sapien dignissim at adipiscing lectus ornare. Aenean id lorem orci.
                        Morbi lacinia nunc quis lectus condimentum rutrum.
                    </p>
                </div>
            </div>
        </div>

        <div class="thumb">
            <img src="style/images/slider/flexslider/0026.jpg" alt="images/slider/flexslider/0026.jpg" />
        </div>

        <div class="thumb">
            <img src="style/images/slider/flexslider/003-150x150.png" alt="images/slider/flexslider/003.png" />
            <div class="slide-content container align-right" style="background-image:url('style/images/slider/flexslider/003.png');">
                <div class="text">
                    <h2>Be nice. Be original.</h2>
                    <p>
                        Quisque nec mi eu nibh aliquam elementum. Ut cursus nisl sit amet sapien dignissim at adipiscing lectus ornare. Aenean id lorem orci.
                        Morbi lacinia nunc quis lectus condimentum rutrum.
                    </p>
                </div>
            </div>
        </div>

        <div class="thumb">
            <img src="style/images/slider/flexslider/0043-150x150.jpg" alt="images/slider/flexslider/0043.jpg" />
            <div class="slide-content container align-right full" style="background-image:url('style/images/slider/flexslider/0043.jpg');">
                <div class="container">
                    <div class="text">
                        <h2>
                            <span style="color: #0c243d;">Need a WordPress</span>
                            <span style="color: #919303;">solution?</span>
                        </h2>

                        <p>
                            <span style="color: #434f5b;">Check this theme.</span>
                            <br />
                            <span style="color: #8b8005;">Flexible, versatile, pixel perfect.</span>
                        </p>

                        <p>
                            <span style="color: #434f5b;">
                                A complete solution for your corporate/portfolio site.<br />
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="thumb">
            <img src="style/images/slider/flexslider/0052-150x150.jpg" alt="images/slider/flexslider/0052.jpg" />
            <div class="slide-content container align-right full" style="background-image:url('style/images/slider/flexslider/0052.jpg');">
                <div class="container"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#slider-polaroid-0').polaroid({
            animation: '',
            pause: 8000,
            animationSpeed: 800             });
    });
</script>

<div class="mobile-slider">
    <div class="slider fixed-image container">
        <img src="images/slider/flexslider/fixed-polaroid.jpg" alt="" />
    </div>
</div>
</div>
<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-home" class="span12 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="clear"></div>
                    <div class="row">

                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>

                    <div class="margin-bottom">
                        <div class="logos-slider wrapper">
                            <h2>
                                Our <span class="title-highlight">partners</span>
                            </h2>
                            <div class="list_carousel">
                                <ul class="logos-slides">

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/ugodno1.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/Tutti_1_01.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/tiecafe-011.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/Senza-titolo-1.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/nolt_400x4001.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/muffinstudio-011.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/logo-mix-1.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/ken.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/icecreammedia-011.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/garnise_011.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                            <img src="style/images/slider/capitan-cook1.png" style="max-height: 70px;" class="logo" />
                                        </a>
                                    </li>

                                    <li style="height: 70px;">
                                        <a href="#" class="bwWrapper" >
                                           <img src="style/images/slider/bread1.png" style="max-height: 70px;" class="logo" />
                                       </a>
                                   </li>

                                   <li style="height: 70px;">
                                    <a href="#" class="bwWrapper" >
                                        <img src="style/images/slider/Apuragreen2.png" style="max-height: 70px;" class="logo" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <div class="nav">
                            <a class="prev" href="#"></a>
                            <a class="next" href="#"></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>

                <script type="text/javascript">
                    jQuery(function($){

                        $('.logos-slides').imagesLoaded(function(){
                            $('.logos-slides').carouFredSel({
                                auto: true,
                                width: '100%',
                                prev: '.logos-slider .prev',
                                next: '.logos-slider .next',
                                swipe: {
                                    onTouch: true
                                },
                                scroll : {
                                    items     : 1,
                                    duration  : 500             }
                                });
                        });

                        $('.bwWrapper').BlackAndWhite({
                                    hoverEffect : true, // default true
                                    // set the path to BnWWorker.js for a superfast implementation
                                    webworkerPath : false,
                                    // for the images with a fluid width and height
                                    responsive:true,
                                    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                                        fadeIn: 200, // 200ms for fadeIn animations
                                        fadeOut: 300 // 800ms for fadeOut animations
                                    }
                                });

                        $("a.bwWrapper[href='#']").click(function(){ return false })

                    });
                </script>


            </div>
            <!-- START COMMENTS -->
            <div id="comments"></div>
            <!-- END COMMENTS -->
        </div>
        <!-- END CONTENT -->

        <!-- START EXTRA CONTENT -->
        <!-- END EXTRA CONTENT -->

    </div>
</div>
</div>
<!-- END PRIMARY -->
@endsection