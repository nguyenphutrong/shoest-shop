@extends('layouts.admin.master')

@section('title','Category')

@section('content')
@include('layouts.admin.sidebar')
<div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="page-header">Danh mục sản phẩm</h1>
        @include('error.note')
        @include('thongbao')
      </div>
    
      <div class="col-12 mb-3">
        <div class="card">
          <div class="card-header">
            <a class="" data-toggle="collapse" href="#createCategory" role="button" aria-expanded="false" aria-controls="createCategory">
              Thêm danh mục
            </a>
          </div>
          <div class="collapse" id="createCategory">
            <div class="card-body">

              <form action="" method="post">
                @csrf                
                <div class="form-group">
                  <label>Tên danh mục:</label>
                  <input type="text" name="name" class="form-control" placeholder="Tên danh mục..." required>
                </div>
                <button type="submit" class="btn btn-primary my-3 px-4">Thêm</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="card">
          <div class="card-header">
            <a class="" data-toggle="collapse" href="#categoryList" role="button" aria-expanded="false" aria-controls="categoryList">
              Danh sách danh mục
            </a>
          </div>
          <div class="collapse show" id="categoryList">
            <div class="card-body" class="table-responsive">
              <table class="table table-bordered" id="myTable">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>Tên danh mục</th>
                    <th>Số lượng sản phẩm</th>
                    <th style="width:30%">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $item)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td align="center">{{$item->products_count}}</td>
                    <td align="center">
                      <form method="POST" action="{{route('category.destroy',$item->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="field">
                          <div class="control">
                            <a href="{{route('category.edit',$item->id)}}" class="btn btn-warning my-1"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger my-1"><span class="glyphicon glyphicon-trash"></span> Xóa</button>
                          </div>
                        </div>
                      </form>
                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      </div>
    <!--/.row-->
  </div>
</div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
@endsection