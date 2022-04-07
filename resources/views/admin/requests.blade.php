
@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
    <div class="row">
        <div class="col-sm-12">

           <h3 class="pull-center">طلبات المزادات </h3>

           @if(empty($auctions->first()))
           <div class="panel panel-body" style="min-height: 350px;">
             <center><h3 style="color: red;">لا يوجد  طلبات مرسله الان </h3></center>
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
           @foreach($auctions as $auction)
           <div class="panel panel-body">
               <div class="col-sm-3">
                  <img src="/img/{{$auction->img}}" style="height: 120px; margin: 5px;">
               </div>
                <div class="col-sm-6">
                
                        <label style="color: red;">اسم المنتج : </label>
                        {{$auction->name}}  <br>
                        <label style="color: red;">نوع المزاد:: </label>
                        {{App\Category::find($auction->category_id)->name}} <br>  
                        <label style="color: red;">السعر المبدئى : </label>
                        {{$auction->start_price}}  <br>
                        <label style="color: red;">التفاصيل: </label>
                        {{$auction->description}}  
                </div>
                <div class="col-sm-3">
                  <a href="{{url('/accept/request',['id'=>$auction->id])}}" class="btn btn-success"> <i class="fa fa-check"></i> موافقه</a> <br> <br>
                  <a href="{{url('/accept/request',['id'=>$auction->id])}}" class="btn btn-danger"> <i class="fa fa-ban"></i> رفض</a>
               </div>
           </div> 
           @endforeach
           
           
      </div>
    </div>
</div>
</section>

@endsection