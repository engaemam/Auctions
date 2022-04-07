
@extends('layouts.master')

@section('content')


	<!--  Map Section : START -->
    <section class="map-section"> <!-- section-->
        <div class="container-fluid"> <!-- container-->
            <div class="row"> <!-- row-->
              <div class="col-md-10 col-md-offset-1">
                <iframe src="https://maps.google.com/maps?q=jaddah&hl=es;z=14&amp;output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  Map Section : END --> 
<!--  ContactUs Message Section : START -->
    <section class="contactUs-message"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-12 col-sm-12 col-xs-12"> 
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
                   <div class="contactUs-message_form">
                        <h3 class="text-center"> ارسل لنا رساله الان </h3>
                        <form method="post" action="{{url('/send/message')}}">
                          {{csrf_field()}}
                        <div class="row">
                           <div class="col-md-6 col-sm-12 col-xs-12"> 
                               <div class="input-group">
                                    <label class="control-label"> الاسم </label>
                                    <input name="name"  placeholder=" الاسم" class="form-control" type="text">
                                </div>
                                <div class="input-group">
                                     <label class="control-label">البريد الالكترونى </label>
                                    <input name="email"  placeholder=" البريد الالكترونى " class="form-control" type="text">
                                </div>
                            </div>
                           <div class="col-md-6 col-sm-12 col-xs-12"> 
                                <div class="col-md-12">
                                    <div class="input-group form-group message_inbut_00">
                                        <label for="comment"> الرساله </label>
                                        <textarea name="content"  class="form-control" rows="5" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                                <input type="submit" value="ارسل الرساله " style="width: 150px; margin-left: 25px;" class="btn_search_col s_search pull-left">
                        </div>
                      </form>
                   </div>
               </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  ContactUs Message Section : END -->

@endsection