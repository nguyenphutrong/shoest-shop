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
        <div class="col-xs-12 col-md-12 col-lg-12">              
            <div class="card">
                <div class="card-header">Sửa sản phẩm: <strong>{{$product->name}}</strong> </div>
                <div class="card-body">
                    
                    <form method="post" class="container mt-4" action="{{route('product.update',$product->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        @include('error.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col">
                                <div class="form-group" >
                                    <label>Tên sản phẩm</label>
                                    <input required type="text" name="name" class="form-control" value="{{$product->name}}">
                                </div>
                                <div class="form-group" >
                                    <label>Giá sản phẩm</label>
                                    <input required type="number" name="price" class="form-control" value="{{$product->price}}">
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh sản phẩm</label>                                                                        
                                    <p class="mb-2"><img id="avatar" class="thumbnail" width="300px" src="uploads/{{$product->pic}}"></p>
                                    <input  id="pic" type="file" name="pic" class="form-control hidden" onchange="changeImg(this)" >
                                </div>   
                                <div class="form-group" >
                                        <label>Miêu tả</label>
                                    <textarea  name="short_desc" class="d-block" style="width:100%">{{$product->short_desc}}</textarea>
                                    </div>             
                                <div class="form-group" >
                                    <label>Miêu tả chi tiết</label>
                                    <textarea name="desc" id="desc" >{{$product->desc}}</textarea>                                
                                </div>
                                <div class="form-group" >
                                    <label>Thông tin bổ sung</label>
                                    <textarea name="spec" id="spec" >{{$product->spec}}</textarea>    
                                </div>
                            
                                <div class="form-group" >
                                    <label>Danh mục</label>
                                    <select required name="cate" class="form-control">
                                        @foreach ($categories as $item)
                                            <option 
                                            @if ($product->category_id == $item->id)
                                                {{ "selected" }}
                                            @endif
                                            value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach                                     
                                    </select>
                                </div>
                                <button type="submit" name="submit"  class="btn btn-primary">Lưu</button>                                
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
