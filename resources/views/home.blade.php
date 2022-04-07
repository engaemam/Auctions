
@extends('layouts.master')

@section('content')
@include('layouts.carousel')
<!--   : START -->
    <section class="newly_added_projects"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
                <div class="main_sec_title">
                    <h3> المزادات الجديده </h3>
                </div>
                @foreach($auctions as $auction)
                <div class="col-md-4 col-sm-6 col-xs-12"> 
                    <div class="m_realestate_block"> <!--  -->
                        <div class="m_realestate_block_img"> <!-- img block -->
                            <a href="{{url('/auction/details',['id'=>$auction->id])}}"> <img src="/img/{{$auction->img}}" class="img-responsive" alt="" /> </a>
                            <span class="m_price"> {{$auction->start_price}}$ </span>
                            @if($auction->date_to>date('Y-m-d H:i:s'))
                               <span class="p-label new_bg"> نشط </span>
                            @endif   
                            @if($auction->date_to < date('Y-m-d H:i:s'))
                               <span class="p-label des_bg"> منتهى </span>
                            @endif 

                        </div> <!-- / img block -->
                        <div class="m_realestate_details"> <!-- all details  -->
                           <div class="m_realestate_block_info"> <!--  title-->
                               <h3><a href="{{url('/auction/details',['id'=>$auction->id])}}"> {{$auction->name}}. </a></h3>
                                <p><img src="/img/icons/location-B.png" class="img-responsive" alt=""/> {{$auction->address}}. </p>
                            </div> <!-- / project title-->
                            
                            <div class="m_realestate_item_more_info_01 "> <!-- other info -->
                                <ul class="list-inline">
                                    <li>
                                        <img src="/img/icons/icon_user.png" class="img-responsive" alt=""> {{App\User::find($auction->user_id)->name}} 
                                    </li>                                    
                                    <li>
                                        <img src="/img/icons/icon_calendar.png" class="img-responsive" alt=""> {{$auction->date_to}}
                                    </li>
                                </ul>
                            </div> <!-- other info -->
                        </div> <!-- / all  block -->
                    </div> <!-- /  -->
                </div>
                @endforeach
                
                
                <div class="clearfix"></div>
                <div class="btn_site">
                    <a href="{{url('/user/auctions')}}" class="main_btn_1 ">  مشاهده الكل </a>
                </div>
            </div> <!-- /row-->
            </div> <!-- /container-->
    </section> <!-- /section  -->

@endsection