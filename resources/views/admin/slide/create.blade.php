@extends('layouts.admin.master')

@section('title','Slide')

@section('content')
@include('layouts.admin.sidebar')
<div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Slide</h1>
            @include('thongbao')
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Thêm Slide</div>
                <div class="card-body">
                    
                    <form method="post" class="container mt-4" action="{{route('slide.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('error.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col">                                                              
                                <div class="form-group" >
                                    <label>Hình ảnh</label>
                                    <input required id="pic" type="file" name="pic" class="form-control hidden" onchange="changeImg(this)">                                                                  
                                </div>   
                                <div class="form-group" >
                                    <label>Tiêu đề</label>
                                    <input required type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Miêu tả</label>
                                    <textarea  name="desc" class="d-block" style="width:100%"></textarea>
                                </div>                                     
                               
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{route('slide.index')}}" class="btn btn-danger">Hủy bỏ</a>
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
@endsection
