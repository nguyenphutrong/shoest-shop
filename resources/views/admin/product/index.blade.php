@extends('layouts.admin.master')

@section('title','Product')

@section('content')
@include('layouts.admin.sidebar')
<div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
                @include('thongbao')
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <a class="" data-toggle="collapse" href="#createProduct" role="button" aria-expanded="false" aria-controls="createProduct">
                            Thêm sản phẩm
                        </a>
                    </div>
                    <div class="collapse" id="createProduct">
                        <div class="card-body">
                            <form method="post" class="container mt-4" action="{{route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                @include('error.note')
                                <div class="row" style="margin-bottom:40px">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input required type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input required type="number" name="price" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh sản phẩm</label>
                                            <input required id="pic" type="file" name="pic" class="form-control hidden" onchange="changeImg(this)">
                                        </div>
                                        <div class="form-group">
                                            <label>Miêu tả</label>
                                            <textarea name="short_desc" class="d-block" style="width:100%"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Miêu tả chi tiết</label>
                                            <textarea name="desc" id="desc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Thông tin bổ sung</label>
                                            <textarea name="spec" id="spec"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select required name="cate" class="form-control">
                                                @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" name="submit"  class="btn btn-primary">Thêm</button>
                                        <!-- <a href="{{route('product.index')}}" class="btn btn-danger">Hủy bỏ</a> -->
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <!-- <div class="my-3">
                    <a href="{{route('product.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
                </div> -->
                <div class="card">
                    <div class="card-header">
                        <a class="" data-toggle="collapse" href="#productList" role="button" aria-expanded="false" aria-controls="productList">
                            Danh sách sản phẩm
                        </a>
                    </div>
                    <div class="collapse show" id="productList">
                        <div class="card-body">
                            <div class="bootstrap-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr class="">
                                                <th>ID</th>
                                                <th>Tên Sản phẩm</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Danh mục</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{number_format($item->price, 0, '', '.') . ' đ'}}</td>
                                                <td>
                                                    <img width="200px" src="uploads/{{$item->pic}}" class="thumbnail">
                                                </td>
                                                <td>{{$item->category->name}}</td>
                                                <td>
                                                    <form method="POST" action="{{route('product.destroy',$item->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="field">
                                                            <div class="control">
                                                                <a href="{{route('product.edit',$item->id)}}" class="btn btn-warning my-1"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger my-1"><span class="glyphicon glyphicon-trash"></span> Xóa</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
</div>
<!--/.main-->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc', {
        language: 'vi',
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
    CKEDITOR.replace('spec', {
        language: 'vi',
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
</script>
@endsection