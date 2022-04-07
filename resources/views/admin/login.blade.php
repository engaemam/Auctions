@extends('layouts.master')

@section('content')




<!--  Section : START -->
    <section class="register-sign-section"> <!-- section-->
        <div class="container"> <!-- container-->
            <div class="row"> <!-- row-->
               <div class="col-md-12 col-md-offset-2"> 
                   <div class="register-sign-form">
                       
                       <div class="s_style login_form">
                        @if (session()->has('error'))
                         
                                <div class=" alert alert-warning">
                                  
                                    
                                  
                                    <i class="fa fa-exclamation-triangle"></i> {{session()->get('error')}}
                                  
                                </div>
                        @endif
                              <h3>تسجيل الدخول </h3>
                          <form action="{{url('check/admin')}}" method="post">
                            {{csrf_field()}}
                            <fieldset>
                              <input type="text" name="email" required="">
                              <label>البري الالكترونى</label>
                              <div class="after"></div>
                            </fieldset>
                            <fieldset>
                              <input type="password" name="password" >
                              <label>كلمة المرور</label>
                              <div class="after"></div>
                            </fieldset> 
          
                            
                                <input type="submit" value="تسجيل دخول" class="btn_search_col s_search"> 
                                    
                             
                          </form>
                       </div>
                   </div>
               </div>
            </div> <!-- /row-->
        </div> <!-- /container-->
    </section> <!-- /section  -->
<!--  Section : END -->   


@endsection