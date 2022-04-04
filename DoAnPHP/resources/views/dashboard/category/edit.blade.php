@extends('dashboard.layouts.admin')
@section('title','Sửa danh mục sản phẩm')
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
                    
                </div>
                <div class="col-md-6 text-right">
                    

                </div>
            </div>
         
        </div>
        <div class="card-body">
        <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm loại sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <!-- <a href="" class="btn btn-primary float-end">Danh sách loại sản phẩm</a> -->
                    </div>
                </div>
            </div>
            <div class="card-body">
            

                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Loại sản phẩm</strong>
                                <input type="text" value="{{$categorys->name}}" name="name" placeholder="Nhập tên loại sản phẩm" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Ngày tạo</strong>
                                <input type="datetime" value="{{$categorys->created_at}}" name="created_at" placeholder="Nhập ngày " class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Tạo</button>
                </form>
           

            </div>
        </div>
    </div>
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