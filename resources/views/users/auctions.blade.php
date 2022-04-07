@extends('layouts.master')

@section('content')

<section class="all-compounds"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
              @foreach($auctions as $auction)
               <div class="col-md-4 col-sm-12 col-xs-12"> 
                   <a class=" project_block1 project_block2 project_block3" href="{{url('/auction/details',['id'=>$auction->id])}}">
                       <div class="project-img-0">
                           <img src="/img/{{$auction->img}}" class="img-responsive" alt=""/>
                       </div>
                       
                       <div class=" project_info_02">
                            <h3>{{$auction->name}} </h3>
                            <p><img src="/img/icons/location-G.png" class="img-responsive" alt=""/>{{$auction->address}} . </p>
                            <p style="float: left;"><img src="/img/icons/icon_user.png" class="img-responsive" alt=""> {{App\User::find($auction->user_id)->name}}</p>
                           <span class="price"> {{$auction->start_price}}$ </span>
                           
                                         
                               
                           @if($auction->date_to>date('Y-m-d H:i:s'))
                               <span class="p-label new_bg"> نشط </span>
                            @endif   
                            @if($auction->date_to < date('Y-m-d H:i:s'))
                               <span class="p-label des_bg"> منتهى </span>
                            @endif 

                       </div>
                   </a>
               </div>
               @endforeach
                <div class="clearfix"></div>
                <ul class="pagination">
                  {{$auctions}}
                </ul>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section>

@endsection