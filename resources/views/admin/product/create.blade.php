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
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Thêm sản phẩm</div>
                <div class="card-body">
                    
                    <form method="post" class="container mt-4" action="{{route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('error.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col">
                                <div class="form-group" >
                                    <label>Tên sản phẩm</label>
                                    <input required type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Giá sản phẩm</label>
                                    <input required type="number" name="price" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh sản phẩm</label>
                                    <input required id="pic" type="file" name="pic" class="form-control hidden" onchange="changeImg(this)">                                                                  
                                </div>   
                                <div class="form-group" >
                                        <label>Miêu tả</label>
                                        <textarea  name="short_desc" class="d-block" style="width:100%"></textarea>
                                    </div>             
                                <div class="form-group" >
                                    <label>Miêu tả chi tiết</label>
                                    <textarea name="desc" id="desc" ></textarea>                                
                                </div>
                                <div class="form-group" >
                                    <label>Thông tin bổ sung</label>
                                    <textarea name="spec" id="spec" ></textarea>    
                                </div>
                            
                                <div class="form-group" >
                                    <label>Danh mục</label>
                                    <select required name="cate" class="form-control">
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach                                     
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{route('product.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>
</div>	<!--/.main-->
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'desc',{
        language: 'vi',
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    } );
    CKEDITOR.replace( 'spec',{
        language: 'vi',
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    } );
</script>
@endsection
