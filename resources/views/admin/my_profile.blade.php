@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">

                    
      <h3 class="pull-center">ملفى الشخصى </h3>
      <div class="panel panel-default" style="padding: 10px;">
        <center><img src="/img/{{$profile->img}}" style="border-radius: 50%;  height: 150px; width: 150px;"></center>
                        <label style="color: red;">الاسم  : </label>
                        {{$profile->name}}  <br>                     
                        <label style="color: red;">العنوان  : </label>
                        {{$profile->address}}  <br>
                        <label style="color: red;">البريد الالكترونى  : </label>
                        {{$profile->email}} <br>       


        </div>
      </div>
    </div>  
  </div>
</div>
</section>

@endsection