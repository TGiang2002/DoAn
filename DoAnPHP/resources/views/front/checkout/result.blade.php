@extends('front.layout.master')

@section('title','Result')

@section('body')
    <!------->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/index"><i class="fa fa-home"></i>Home</a>
                        <a href="./checkout">Check out</a>
                        <span>Result</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------>
    <div class="checkout-section spad">
        <div class="container">
           <div class="col-lg-12">
               <h4>
                   Đặt hàng thành công
                </h4>
                <a href="/shop" class="primary-btn mt-5">Continue Shopping</a>
           </div>
        </div>
    </div>
    <!----------->
   
@endsection