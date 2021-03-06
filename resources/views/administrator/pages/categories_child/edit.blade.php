@extends('administrator.master_admin')
@section('title','Edit categories child')
@section('page-title')
<div class="page-title">
    <div class="title_left">
        <h3>Edit categories child</h3>
    </div>
</div>
<div class="clearfix"></div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{route('index.categories.child')}}" class="btn btn-danger">Back</a>
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
                <ul>
                    @foreach($errors->all() as $er)
                    <li class="alert alert-danger">{{$er}}</li></br>
                    @endforeach
                </ul>
                @endif
                @if(session('alert_success'))
                <div class="alert alert-success" style="margin-bottom: 0px" role="alert">
                    {{session('alert_success')}}
                </div>
                @endif
                <br />
                <form action="" method="post" class="form-horizontal form-label-left">
                    @csrf
                    <input type="hidden" value="{{$categories_child->id}}" name="id" >
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="category_id" class="form-control">
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}" @if($categories_child->category_id==$cate->id) {{'selected'}}  @endif >{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name categories child <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" value="{{$categories_child->name}}"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="active" class="form-control col-md-7 col-xs-12">
                        <option value="1" @if($categories_child->active==1) {{'selected'}} @endif>Yes</option>
                        <option value="0" @if($categories_child->active==0) {{'selected'}} @endif >No</option>
                    </select>
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
