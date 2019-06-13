@extends('administrator.master_admin')
@section('title','List products')
@section('page-title')
<div class="page-title">
  <div class="title_left">
    <h3>List products</h3>
  </div>
  <form action="" method="get">
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="Search products...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search</button>
          </span>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="clearfix"></div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <a href="{{route('add.products')}}" class="btn btn-success">Thêm sản phẩm</a>
        @if(session('alert_success'))
        <div class="alert alert-success" style="margin-bottom: 0px" role="alert">
          {{session('alert_success')}}
        </div>
        @endif
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Unit Price</th>
              <th>Quantity</th>
              <th>Stars</th>
              <th>Views</th>
              <th>New</th>
              <th colspan="2">Tùy chọn</th>
            </tr>
          </thead>
          <tbody>
            @php
              $stt=0;
            @endphp
            @if(count($products)<0)
              {{'Empty products'}}
            @else
              @foreach($products as $items)
                <tr>
                  <th scope="row">{{$items->id}}</th>
                  <td>{{$items->name}}</td>
                  <td>${{$items->unit_price}}</td>
                  <td>{{$items->quantity}}</td>
                  <td>{{$items->stars}}</td>
                  <td>{{$items->views}}</td>
                  <td>
                    @if($items->is_new==1)
                      Có
                    @else
                      Không
                    @endif
                  </td>
                  <td>
                    <a href="{{route('edit.products',['id'=>$items->id])}}" class="btn btn-default btn-sm">
                      <i class="fa fa-wrench"></i>
                      Edit
                    </a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$items->id}}"><i class="fa fa-trash"></i>Delete</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal{{$items->id}}" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Warning</h4>
                          </div>
                          <div class="modal-body">
                            <h3>Do you want to delete it ? !</h3>
                          </div>
                          <div class="modal-footer text-center">
                            <a href="{{route('delete.products',['id'=>$items->id])}}" id="btn_delete" class="btn btn-danger btn-sm">
                              Delete
                            </a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
            @endif
            <tr>
              <td class="text-center" colspan="8">{{$products->links()}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
