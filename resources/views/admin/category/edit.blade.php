@extends('layouts.admin.master')

@section('title','Category')

@section('content')
@include('layouts.admin.sidebar')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-header">Danh mục sản phẩm</h1>
                @include('thongbao')
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Sửa danh mục: {{$cat->name}}
                    </div>
                    <div class="card-body">

                        <form action="{{route('category.update',$cat->id) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input type="text" name="name" class="form-control" placeholder="Tên danh mục..." required value="{{$cat['name']}}">
                            </div>
                            @include('error.note')
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary my-3 px-4">Lưu</button>                       
                                <button type="reset" class="btn btn-danger my-3 px-4">Hủy bỏ</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
</main>
@endsection