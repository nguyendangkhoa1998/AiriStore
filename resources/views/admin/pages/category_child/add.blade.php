@extends('admin.master_admin')
@section('title','Add category child')
@section('page-title')
<div class="page-title">
        <div class="title_left">
          <h3>Add category child</h3>
        </div>
</div>
      <div class="clearfix"></div>
@endsection
@section('content')
<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <a href="{{route('list.category_child')}}" class="btn btn-danger">Back</a>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if(count($errors)>0)
                    <br>

                        @foreach($errors->all() as $er)
                            <li class="alert alert-danger">{{$er}}</li></br>
                        @endforeach

                    </ul>
                @endif
              <br />
              <form action="" method="post" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Category <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="category" class="form-control" required="required">
                      @foreach($category as $cate)
                      <option value="{{$cate->id}}">{{$cate->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Name category child<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" id="" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>

              </form>

            </div>
          </div>
        </div>
</div>
@endsection
