<!--  Footer Section : START -->
    <section class="footer"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-3 col-sm-12 col-xs-12"> 
                   <div class="footer_d_logo">
                        <img src="/img/footer-logo.png" class="img-responsive" alt="" />
                       <p>
                       يستخدم المزاد للمساكن والمعارض والمتعاملين قيمًا لتقليل العلاقات مع الملايين من العملاء حول العالم ، وربط الأشخاص بالأشياء التي يحبونها..
                       </p>
                   </div>
               </div>
               <div class="col-md-3 col-sm-12 col-xs-12"> 
                   <div class="contact-footer">
                        <h3 class="f_title">تواصل معنا</h3>
                       <ul> 
                          <li> <img src="/img/topBar/phone-call.png"/>  01026220967 </li>
                          <li> <img src="/img/topBar/phone-call.png"/>  01149741646 </li>
                          <li> <img src="/img/topBar/mail.png"/> online-auction@gmail.com </li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12"> 
                   <div class="form-group newsletter_form">
                       <h3 class="f_title">اشترك ليصلك كل جديد</h3>
                      <input type="text" class="form-control" placeholder="ادخل بريدك الالكترونى الان....">
                      <button type="button" class="btn ">
                               اشترك
                      </button>
                    </div>
                   
                   <div class="social_info social_footer">
                        <ul class="list-inline">
                            <li class="">
                                <a href="#" target="_blank"> <i class="fab fa-facebook-f fb"></i> </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank"> <i class="fab fa-twitter tw"></i> </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank"> <i class="fab fa-google-plus-g  g_plus"></i> </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank"> <i class="fab fa-youtube ytube"></i> </a>
                            </li>
                        </ul>
                    </div>
               </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  Footer Section : END -->  
     
<!-- copyRights Section : START -->
    <section class="copyRights-section"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
                <div class="col-md-12">
                    <div class="copyRights text-center">
                        <p> جميع الحقوق © 2018 محفوظه. <a title=" تصميم مواقع وبرمجة " href="http://www.arabnewtech.com/web-design/" target="_blank">مصطفى محمد</a> </p>
                    </div>
                </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!-- copyRights Section : END -->   

    
<script src="/js/jquery-1.11.3.min.js"></script>	
<script src="/js/bootstrap.min.js"></script>

<!--Script Navbar fixed : START-->
<script>
$(window).scroll(function() {
    if($(this).scrollTop()>50) {
        $( ".navbar-me" ).addClass("fixed-me");
    } else {
        $( ".navbar-me" ).removeClass("fixed-me");
    }
});
</script>
<!--Script Navbar fixed : END-->
<!-- Search script : Start -->
<script>
$(document).ready(function(){
    $("#search").click(function(){
        $("#search-input").toggle();
    });
});
</script>
<!-- Search script : End -->
<!-- MAIN SLIDER IN HOME PAGE -->
<script src="/js/lightslider.js"></script> 
<script> // Main slider in home page :: home page
     $(document).ready(function() {
        $("#content-slider_main_slider").lightSlider({
            loop:true,
            item:1,
            auto: true,
            keyPress:true,
            speed:900,
            pause:6000,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });
       
    });
</script>

<script> // real estate projects_slider :: home page
     $(document).ready(function() {
        $("#real_estate_projects_slider").lightSlider({
            loop:true,
            item:2,
            auto: true,
            keyPress:true,
            speed:900,
            pause:6000,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:2,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });
    });
</script>

<script> // our_partners slider :: home page
     $(document).ready(function() {
        $("#our_partners").lightSlider({
            loop:true,
            item:4,
            auto: true,
            keyPress:true,
            controls:false,
            speed:900,
            pause:6000,
            pager: true,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:2,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ]
        });
    });
</script>

<!--  - // - / Project Details PAGE  - // - // -->
<script> // content-slider-details :: Project Details PAGE 
     $(document).ready(function() {
        $("#content-slider-details").lightSlider({
            loop:true,
            item:1,
            auto: true,
            keyPress:true,
            speed:900,
            pause:6000,
            height: 508 ,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });
    });
</script>
<script> // featured_listings_slider :: Project Details PAGE 
     $(document).ready(function() {
        $("#featured_listings_slider").lightSlider({
            loop:true,
            item:3,
            auto: true,
            keyPress:true,
            speed:900,
            pause:6000,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });
    });
</script>