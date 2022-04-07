
@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
    <div class="row">
        <div class="col-sm-12">

           <h3 class="pull-center"> مزاداتى </h3>
         @foreach($messages as $message)
           <div class="panel panel-body">
               <div class="col-sm-3">
                  <img src="/img/user.png" style="height: 120px; margin: 5px;">
               </div>
                <div class="col-sm-6">
                
                        <label style="color: red;"> الاسم : </label>
                        {{$message->name}}  <br>
                        <label style="color: red;"> البريد الالكترونى: </label>
                        {{$message->email}} <br>  
                      
                        <label style="color: red;">التفاصيل: </label>
                        {{$message->content}}  
                </div>
                
           </div> 
          @endforeach 
           
      </div>
    </div>
</div>
</section>

@endsection