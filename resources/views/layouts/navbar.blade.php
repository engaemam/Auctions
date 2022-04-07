


<!-- Top Bar Section : START    -->
    <section class="topBar_section"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-10 col-sm-12 col-xs-12"> 
                    <div class="contact_info">
                        <ul class="list-inline">
                            <li class="mrg_r"> <img src="/img/topBar/phone-call.png"/>  01026220967 </li>
                            <li> <img src="/img/topBar/mail.png"/> online-auction@gmail.com </li>
                        </ul>
                    </div>
                   <div class="social_info">
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
<!-- Top Bar Section : END    -->

<!-- Navbar  :  START -->
    <section class="nav_bar_section navbar-me">
        <nav class="navbar ">
          <div class="container"><!-- container -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-logo">
                        <a href="{{url('/')}}">
                        <img src="/img/logo.png"  class="img-responsive" alt="sahmalnour" /> 
                        </a>
                    </div>    
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><!-- navbar-collapse -->
                <div class="col-md-10">
                    <div class="nav_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('/')}}"> الرئيسيه </a></li>
                            <li><a href="{{url('/user/auctions')}}"> المزادات </a></li>
                            @if(auth()->guard('admin')->user())
                            <li><a href="{{url('/admin/requests')}}"> الطلبات المرسله </a></li>
                            <li><a href="{{url('/admin/messages')}}"> الرسائل  </a></li>
                            @endif
                            @if(auth()->guard('user')->user())
                            <li><a href="{{url('/auction/request')}}"> طلب  مزاد </a></li>
                            @endif
                            <li><a href="{{url('/about')}}"> من نحن </a></li>
                            @if(!auth()->guard('admin')->user())
                            <li><a href="{{url('/contact')}}"> تواصل معنا </a></li>
                            @endif
                            @if(auth()->guard('user')->user())
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-user"></span> {{auth()->guard('user')->user()->name}}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{url('/history/biddings')}}"> مناقصتى </a></li>
                                  <li><a href="{{url('/history/auctions')}}"> مزاداتى </a></li>
                                  <li><a href="{{url('/user/profile')}}"> ملفى الشخصى </a></li>
                                  <li><a href="{{url('/user/logout')}}"> تسجيل خروج </a></li>
                                </ul>
                            </li>
                            @endif

                            @if(auth()->guard('admin')->user())
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-user"></span> {{auth()->guard('admin')->user()->name}}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{url('/admin/profile')}}"> ملفى الشخصى </a></li>
                                  <li><a href="{{url('/admin/logout')}}"> تسجيل خروج </a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                        <div class="left-s_menu">
                                                        <div class="search">
                                <img src="/img/search.png" class="img-responsive" alt="sahalnour" id="search"/>
                                <input type="text" class="form-control input-sm" maxlength="64" placeholder=" search .. " id="search-input" />
                            </div>
                            @if(!auth()->guard('admin')->user()&&!auth()->guard('user')->user())
                            <div class="btn-register">
                                <a href="{{url('/user/login')}}"> تسجيل  الدخول</a>
                            </div>
                            <div class="btn-register">
                                <a href="{{url('/user/register')}}"> حساب جديد</a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div><!-- /navbar-collapse -->
          </div><!-- /container -->
        </nav>
    </section>
<!-- Navbar  :  END -->
    

    
     
<!--  Section : START -->
    <section class=""> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-12 col-sm-12 col-xs-12"> 

               </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  Section : END -->

