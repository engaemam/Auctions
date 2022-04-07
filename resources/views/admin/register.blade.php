
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
      
      @if (session()->has('success'))
    
            <div class="alert alert-success">
              
                <i class="fa fa-check-circle-o"></i> {{session()->get('success')}}
              
          </div>
    @endif
      <h3 class="pull-center">تسجيل حساب ادمن</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{url('/admin/doregister')}}" method="post"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group" >
              <label>الاسم</label>
              <input type="text" name="name"  placeholder="الاسم" class="form-control">
            </div>  
            <div class="form-group" >
              <label>البريد الالكترونى</label>
              <input type="text" name="email"  placeholder="البريد الالكترونى" class="form-control">
            </div>  
            <div class="form-group">
              <label>كلمه المرور</label>
              <input type="password" name="password"  placeholder="كلمه المرور" class="form-control">
            </div>  
            <div class="form-group" >
              <label>العنوان</label>
              <input type="text" name="address"  placeholder="العنوان" class="form-control">
            </div> 
            <div class="form-group" >
              <label>الصوره</label>
              <span class="btn btn-warning btn-file" style="margin-bottom: 10px;">
              <i class="fa fa-image"></i> اختر صوره <input type="file" name="img" style=" opacity:0; height: 15px; width: 150px;">
              </span>
            </div> 

            <button type="submit" class="btn btn-success pull-left">سجل الاان</button>
        </form>
        </div>
      </div>
    </div>  
  </div>
</div>
</section>

@endsection