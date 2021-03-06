@extends('administrator.master_admin')
@section('title','Edit category')
@section('page-title')
<div class="page-title">
    <div class="title_left">
        <h3>Edit category</h3>
    </div>
</div>
<div class="clearfix"></div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <a href="{{route('index.category')}}" class="btn btn-danger">Back</a>
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
                <form action="" method="post" class="form-horizontal form-label-left">
                    @csrf
                    <input type="hidden" value="{{$category->id}}" name="id" >
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" value="{{$category->name}}" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="active" class="form-control col-md-7 col-xs-12">
                                <option value="1" @if($category->active==1) {{'selected'}} @endif>Yes</option>
                                <option value="0" @if($category->active==0) {{'selected'}} @endif >No</option>
                            </select>
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
