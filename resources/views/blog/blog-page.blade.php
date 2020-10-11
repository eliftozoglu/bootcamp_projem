<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Layouts</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="{{route('home-page')}}"><img src="{{asset('img/core-img/layouts.png')}}" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="#">Templates</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Presentation Templates</li>
                                    <li><a href="{{route('presentation-front-view')}}">Presentations</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Report Templates</li>
                                    <li><a href="{{route('report-front-view')}}">Reports</a></li>

                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">E-mail Templates</li>
                                    <li><a href="{{route('email-front-view')}}">E-mails</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="{{asset('img/bg-img/bg-6.jpg')}}" alt="">
                                </div>
                            </div>
                        </li>
                        {{--  <li><a href="#">Pages</a>
                             <ul class="dropdown">
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="shop.html">Shop</a></li>
                                 <li><a href="single-product-details.html">Product Details</a></li>
                                 <li><a href="checkout.html">Checkout</a></li>
                                 <li><a href="blog.html">Blog</a></li>
                                 <li><a href="single-blog.html">Single Blog</a></li>
                                 <li><a href="regular-page.html">Regular Page</a></li>
                                 <li><a href="contact.html">Contact</a></li>
                             </ul>
                         </li>
                         --}}
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('pricing')}}">Pricing</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a onclick="location.href='/register'" href="#">Register</a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a onclick="location.href='/login'" href="#">Login</a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="{{asset('img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>

            <!-- Single Cart Item -->
            <div class="single-cart-item">
                <a href="#" class="product-image">
                    <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                        <span class="badge">Mango</span>
                        <h6>Button Through Strap Mini Dress</h6>
                        <p class="size">Size: S</p>
                        <p class="color">Color: Red</p>
                        <p class="price">$45.00</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$274.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> <span>$232.00</span></li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="checkout.html" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Blog Wrapper Area Start ##### -->
<div class="single-blog-wrapper">

    <!-- Single Blog Post Thumb -->
    <div class="single-blog-post-thumb">
        <img src="img/bg-img/blog.jpg" alt style="padding-left: 40px">
    </div>

    <!-- Single Blog Content Wrap -->
    <div class="single-blog-content-wrapper d-flex">

        <!-- Blog Content -->
        <div class="single-blog--text">
            <h2>How to be a good presenter?</h2>
            <blockquote>
                <h6><i class="fa fa-quote-left" aria-hidden="true"></i> 1. Know the subject</h6>
            </blockquote>
            <p>It sounds elemental, but you do need to know what you're talking about.   Your audience is smarter than you perceive them to be.  They can smell a Presenter who is not well versed in the topic from a mile a way.
                You want to dig into the meat of your topic.  When giving a Presentation in front of an audience, if you are using visuals such as Visme, it should merely highlight the key points of your topic and it is you who needs to be able to get into the nuts and bolts of those points.

                Your audience is there to hear you and it starts with their full attention and depending on how well you present the topics will reflect on how many will still be listening for the remainder of it.
            </p>

            <blockquote>
                <h6><i class="fa fa-quote-left" aria-hidden="true"></i> 2. Practice makes perfect</h6>
            </blockquote>

            <p>This is not about memorizing a speech and practicing it in the mirror over and over again.

                You are presenting to an audience not to yourself; so nothing will prepare you better than getting in front of friends, family or colleagues and tell them to ask relevant questions and provide criticism which can help you to improve and refine your presentation.
                Additionally you want to recognize that there may be unexpected circumstances when giving your speech, so ask your test audience to interrupt, make noise and to improvise. This way you can prepare for any situation.

                It's not uncommon to have a bad apple in the audience who may be a distraction or there maybe technical issues,  if you are prepared and have the ability to adapt to those conditions you will have little to worry about.
            </p>
            <blockquote>
                <h6><i class="fa fa-quote-left" aria-hidden="true"></i>3. Don't forget the visual support</h6>
            </blockquote>
            <p>
                PowerPoint presentations were and continue to be a norm today, but normal can also be quite boring.

                Get out of the box and try new ways of communicating.  Create interesting visual content and add some oomph to your slides, which can help to draw more attention and use that to reel them to your main objective: Present, inform and engage.
            </p>
        </div>

        <!-- Related Blog Post -->
        <div class="related-blog-post">
            <!-- Single Related Blog Post -->
            <div class="single-related-blog-post">
                <img src="img/bg-img/rp1.jpg" alt="">
                <a href="#">
                    <h5>Cras lobortis nisl nec libero pulvinar lacinia. Nunc sed ullamcorper massa</h5>
                </a>
            </div>
            <!-- Single Related Blog Post -->
            <div class="single-related-blog-post">
                <img src="img/bg-img/rp2.jpg" alt="">
                <a href="#">
                    <h5>Fusce tincidunt nulla magna, ac euismod quam viverra id. Fusce eget metus feugiat</h5>
                </a>
            </div>
            <!-- Single Related Blog Post -->
            <div class="single-related-blog-post">
                <img src="img/bg-img/rp3.jpg" alt="">
                <a href="#">
                    <h5>Etiam leo nibh, consectetur nec orci et, tempus tempus ex</h5>
                </a>
            </div>
            <!-- Single Related Blog Post -->
            <div class="single-related-blog-post">
                <img src="img/bg-img/rp4.jpg" alt="">
                <a href="#">
                    <h5>Sed viverra pellentesque dictum. Aenean ligula justo, viverra in lacus porttitor</h5>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- ##### Blog Wrapper Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="#"><img src="{{asset('img/core-img/layouts-black.png')}}" alt=""></a>
                    </div>
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{asset('shop.html')}}">Shop</a></li>
                            <li><a href="{{asset('blog.html')}}">Blog</a></li>
                            <li><a href="{{asset('pricing.html')}}">Pricing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <ul class="footer_widget_menu">
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" placeholder="Your email here">
                            <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>

</html>
