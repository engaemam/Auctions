
@extends('layouts.master')

@section('content')
  <section>
  <div class="container" >
  <div class="row">
    <div class="col-sm-5 col-sm-offset-3">

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
      <h3 class="pull-center">طلب مزاد</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{url('/auction/save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group" >
            	<label>اسم المنتج </label>
              <input type="text" name="name"  placeholder="الاسم" class="form-control">
            </div>  
            <div class="form-group" >
            	<label>السعر المبدئى</label>
              <input type="text" name="start_price"  placeholder="السعر المبدئى" class="form-control">
            </div>   
            <div class="form-group">
            	<label>النوع</label>
            	<select name="category_id" >
                @foreach(App\Category::all() as $cat)
            		<option value="{{$cat->id}}">{{$cat->name}}</option>
            		@endforeach
            	</select>
            </div>  
            <div class="form-group" >
            	<label>العنوان</label>
              <input type="text" name="address" placeholder="العنوان" class="form-control">
            </div> 

            <div class="form-group" >
              <label>تاريخ انتهاء المزاد</label>
              <input type="datetime-local" name="to"   class="form-control">
            </div> 
            <div class="form-group" >
            	<label>صوره</label>
              <span class="btn btn-info btn-file" style="margin-bottom: 10px;">
              <i class="fa fa-image"></i> اختار صوره <input type="file" name="img" style=" opacity:0; height: 15px; width: 150px;">
              </span>
            </div> 

            <div class="form-group" >
              <label>التفاصيل</label><br>
              <textarea name="description" rows="4" cols="50" placeholder="التفاصيل"></textarea>
            </div> 

            <button type="submit" class="btn btn-success pull-left">طلب</button>
        </form>
        </div>
      </div>
    </div>  
  </div>
</div>
</section>

@endsection