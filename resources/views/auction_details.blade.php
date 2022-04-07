@extends('layouts.master')

@section('content')

     
<!--  Section : START -->
    <section class="project_all_details"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-8 col-sm-12 col-xs-12"> 

                @if ($errors->any())
                    <div class=" alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> <i class="fa fa-exclamation-triangle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                 @if (session()->has('error'))
                         
                                <div class=" alert alert-warning">
                                    <i class="fa fa-exclamation-triangle"></i> {{session()->get('error')}}
                                </div>
                    @endif
                    @if (session()->has('success'))
                         
                                <div class=" alert alert-success">
                                    <i class="fa fa-check"></i> {{session()->get('success')}}
                                </div>
                    @endif
                   <div class="left_side_details">
                      <div class="details_title">
                            <h3> {{$auction->name}} </h3>
							<ul class="list-inline">
								<li>
									<p><img src="/img/icons/location-G.png" class="img-responsive" alt=""/> {{$auction->address}} </p>
									<p><img src="/img/icons/phone-call-G2.png" class="img-responsive" alt=""/> {{App\User::find($auction->user_id)->phone}} </p>
								</li>	
								<li>
									<p><img src="/img/icons/icon_calendar.png" class="img-responsive" alt=""/> {{$auction->date_to}} </p>
									<p><img src="/img/icons/icon_user.png" class="img-responsive" alt=""/> {{App\User::find($auction->user_id)->name}} </p>
								</li>
								<li>
									<p><span class="btn btn-danger">{{$auction->start_price}} $ </span> </p>
									
								</li>
                <li>
                  <p><span class="btn btn-info">السعر الاعلى {{App\Bidding::where('auction_id',$auction->id)->max('price')}} $ </span> </p>
                  
                </li>
							</ul>

                      </div>
                      <div class="project_d_slider">
                           <div class="demo">
                            <div class="item">
                                        <img src="/img/{{$auction->img}}" class="img-responsive carousel_imgs" alt=""/>
										
										
                            </div>
                        </div>	  
                      </div>

                      <div class="listing-description margin-30">
                        <h3 class="p_d_title_0">التفاصيل </h3>
						<script>

                CountDownTimer('{{$auction->date_to}}', 'countdown');

                function CountDownTimer(dt, id)
                {
                    var end = new Date(dt);

                    var _second = 1000;
                    var _minute = _second * 60;
                    var _hour = _minute * 60;
                    var _day = _hour * 24;
                    var timer;

                    function showRemaining() {
                        var now = new Date();
                        var distance = end - now;
                        if (distance < 0) {

                            clearInterval(timer);
                            document.getElementById(id).innerHTML = 'انتهى المزاد!';

                            return;
                        }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);

                        document.getElementById(id).innerHTML = days + 'days ';
                        document.getElementById(id).innerHTML += hours + 'hrs ';
                        document.getElementById(id).innerHTML += minutes + 'mins ';
                        document.getElementById(id).innerHTML += seconds + 'secs';
                    }

                    timer = setInterval(showRemaining, 1000);
                }

      </script>
                               <center> <span  class="btn btn-info" id="countdown"></span></center>
							
							
                          <p>
                          {{$auction->description}}
                          </p>
                      </div>
                     
                   
                   </div>
                   
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12"> 
                @if(($auction->date_to>date('Y-m-d H:i:s')&&!auth()->guard('admin')->user())&&auth()->guard('user')->user()&&auth()->guard('user')->user()->id!=$auction->user_id)
			           <form method="post" action="{{url('/auction/bid')}}">
                  {{csrf_field()}}
                  
                  <input type="hidden" name="auction_id" value="{{$auction->id}}">
                  <input type="hidden" name="start_price" value="{{$auction->start_price}}">
                   <div class="right_side_details">
                       <div class="pos_fixed">
                            <div class="btn_search_col s_search">
                                <a  class="my_btn">
                                    دخول المناقصه الان </a>
                           </div>
                           <div class="send_email">
                                <Input class="form-control" rows="4"  name="price" id="comment">
                                <input type="submit" value="موافق" class="btn_search_col s_search">
                                                
                           </div>
                       </div>
                   </div>
				          </form>
                  @endif
               </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  Section : END -->   

@endsection