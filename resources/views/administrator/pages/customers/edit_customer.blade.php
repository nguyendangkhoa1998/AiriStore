@extends('administrator.master_admin')
@section('title','Edit Customer')
@section('page-title')
<div class="page-title">
    <div class="title_left">
        <h3>Edit customer</h3>
    </div>
</div>
<div class="clearfix"></div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:20px;">
                	<a href="{{route('index.category')}}" class="btn btn-danger">Back</a>
		          	<a href="{{route('delete.customer',['id'=>$customer->id])}}" class="btn btn-danger">Delete</a>
		        </div>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('alert_success'))
            <div class="alert alert-success" style="margin-bottom: 0px" role="alert">
              {{session('alert_success')}}
          </div>
          @endif
          <br />
          <form action="" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" required="required" value="{{$customer->name}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone number<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="phone_number" required="required" value="{{$customer->phone_number}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" name="email" required="required" value="{{$customer->email}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="address" required="required" value="{{$customer->address}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" value="{{$customer->password}}" class="form-control col-md-7 col-xs-12" disabled="disabled">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" name="new_password" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection