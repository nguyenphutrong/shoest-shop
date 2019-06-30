@extends('layouts.admin.master')

@section('title','Slide')

@section('content')
@include('layouts.admin.sidebar')
<div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="page-header">Slide</h1>
        @include('thongbao')       
        @include('error.note')
      </div>
    </div>
    <!--/.row-->

    <div class="row">
      <div class="col-12 mb-3">
        <div class="card">
          <div class="card-header">
            <a class="" data-toggle="collapse" href="#createSlide" role="button" aria-expanded="false" aria-controls="createSlide">
              Thêm Slide
            </a>
          </div>
          <div class="collapse" id="createSlide">
            <div class="card-body">
              <form method="post" class="container mt-4" action="{{route('slide.store') }}" enctype="multipart/form-data">
                @csrf
                @include('error.note')
                <div class="row" style="margin-bottom:40px">
                  <div class="col">
                    <div class="form-group">
                      <label>Hình ảnh</label>
                      <input required id="pic" type="file" name="pic" class="form-control hidden" onchange="changeImg(this)">
                    </div>
                    <div class="form-group">
                      <label>Tiêu đề</label>
                      <input required type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Miêu tả</label>
                      <textarea name="desc" class="d-block" style="width:100%"></textarea>
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
      </div>
      <div class="col-12 mb-3">
        <!-- <div class="my-3">
          <a href="{{route('slide.create')}}" class="btn btn-primary">Thêm slide</a>
        </div> -->
        <div class="card">
          <div class="card-header">
            <a class="" data-toggle="collapse" href="#slideList" role="button" aria-expanded="false" aria-controls="slideList">
              Danh sách Slide
            </a>
          </div>
          <div class="collapse show" id="slideList">
            <div class="card-body">
              <div class="bootstrap-table">
                <div class="table-responsive">
                  <table class="table table-bordered " id="myTable">
                    <thead>
                      <tr class="">
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($slides as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>
                          <img width="200px" src="uploads/{{$item->pic}}" class="thumbnail">
                        </td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->desc}}</td>
                        <td>
                          <form method="POST" action="{{route('slide.destroy',$item->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="field">
                              <div class="control">
                                <a href="{{route('slide.edit',$item->id)}}" class="btn btn-warning my-1"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger  my-1"><span class="glyphicon glyphicon-trash"></span> Xóa</button>
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
@endsection