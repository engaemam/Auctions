
@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
    <div class="row">
        <div class="col-sm-12">

           <h3 class="pull-center"> مزاداتى </h3>
           @if(empty($auctions->first()))
           <div class="panel panel-body" style="min-height: 350px;">
             <center><h3>لا يوجد مزادات لك الان</h3></center>
           </div>

           @endif

            @if(!empty($auctions->first()))

           <div class="panel panel-body">
               <div class="col-sm-3">
                  <center><h3>الصوره</h3></center>
               </div>
                <div class="col-sm-6">
                
                      <center><h3>التفاصيل</h3></center> 
                </div>
                
                <span><h3>الحاله </h3></span>
                
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
                        <label style="color: red;">نوع المزاد: </label>
                        {{App\Category::find($auction->category_id)->name}} <br>  
                        <label style="color: red;">السعر الاعلى : </label>
                        {{App\Bidding::where('auction_id',$auction->id)->max('price')}}  <br>
                        <label style="color: red;">التفاصيل: </label>
                        {{$auction->description}}  
                </div>
                @if($auction->admin_status==1)
                  <span class="btn-sm btn-success"><i class="fa fa-check"></i></span>
                  @endif
                  @if($auction->admin_status==2)
                  <span class="btn-sm btn-danger"><i class="fa fa-ban"></i></span>
                  @endif
                  @if($auction->admin_status==0)
                  <span class="btn-sm btn-info"><i class="fa fa-spinner fa-spin"></i></span>
                  @endif
                
           </div> 
          @endforeach 
           
      </div>
    </div>
</div>
</section>

@endsection