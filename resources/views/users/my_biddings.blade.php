
@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
    <div class="row">
        <div class="col-sm-12">

           <h3 class="pull-center"> مناقصاتى </h3>
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
           @if(empty($biddings->first()))
           <div class="panel panel-body" style="min-height: 350px;">
             <center><h3>لا يوجد مناقصات لك الان</h3></center>
           </div>

           @endif
            @if(!empty($biddings->first()))

           <div class="panel panel-body">
               <div class="col-sm-3">
                  <center><h3>الصوره</h3></center>
               </div>
                <div class="col-sm-6">
                
                      <center><h3>التفاصيل</h3></center> 
                </div>
                
                <span><h3>الحاله   &emsp; الدفع</h3></span>
                
           </div> 
           @endif
         @foreach($biddings as $bidding)
           <div class="panel panel-body">
               <div class="col-sm-3">
                  <img src="/img/{{App\Auction::find($bidding->auction_id)->img}}" style="height: 120px; margin: 5px;">
               </div>
                <div class="col-sm-6">
                
                        <label style="color: red;">اسم المنتج : </label>
                        {{App\Auction::find($bidding->auction_id)->name}}  <br>
                        <label style="color: red;">نوع المزاد: </label>
                        {{App\Category::find(App\Auction::find($bidding->auction_id)->category_id)->name}} <br>  
                        <label style="color: red;">السعر الاعلى : </label>
                        {{$bidding->price}}  <br>
                        <label style="color: red;">التفاصيل: </label>
                        {{App\Auction::find($bidding->auction_id)->description}} 
                </div>
                @if($bidding->status==1)
                  <span class="btn-sm btn-success"><i class="fa fa-check"></i></span>
                  @if($bidding->pay_status==0)
                  <span>  
                        <a href="{{url('paypal',['id'=>$bidding->id])}}" id="paypalbtn" class="btn btn-primary">Paypal<i class="fab fa-paypal"></i></a>
                  </span> 
                  @endif
                  @if($bidding->pay_status==1)
                  <span class="btn-sm btn-success"><i class="fa fa-check"></i> تم دفع ثمن المنتج</span>
                  @endif


                  @endif
                  @if($bidding->status==2)
                  <span class="btn-sm btn-danger"><i class="fa fa-ban"></i></span>
                  @endif
                  @if($bidding->status==0)
                  <span class="btn-sm btn-info"><i class="fa fa-spinner fa-spin"></i></span>
                  @endif
                
           </div> 
          @endforeach 
           
      </div>
    </div>
</div>
</section>
@endsection