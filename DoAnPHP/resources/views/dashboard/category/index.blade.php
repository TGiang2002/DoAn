@extends('dashboard.layouts.admin')
@section('title','Danh mục sản phẩm')
@section('maincontent')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content my-2">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <strong class="text-danger">Danh mục sản phẩm</strong>
                </div>
                <div class="col-md-6 text-right">
                    <a href="/TrangAdmin/category/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Thêm </a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Thùng Rác </a>

                </div>
            </div>
         
        </div>
        <div class="card-body">
         <table class="table table-bordered table-striped">
             <thead>
                <tr class="bg-info">
                    <th class=text-center style="width:20px">#</th>
                    <th style="width:20px">Tên Loại Sản phẩm </th>
                    <th style="width:20px">Ngày tạo</th>
                    <th style="width:20px">Chức năng</th>

                </tr>
             </thead>
                <tbody>
                    @foreach($listcategory as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                             <a href="/TrangAdmin/category/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Thêm </a>
                             <a href="/TrangAdmin/category/delete/{{$category->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Xóa </a>
                             <a href="/TrangAdmin/category/edit/{{$category->id}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Sửa </a>
                             <a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Chi tiết </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
         </table>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection