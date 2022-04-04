@extends('front.layout.master')

@section('title','Checkout')

@section('body')
    <!------->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <a href="shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------>
    <div class="checkout-section spad">
        <div class="container">
            <form action="/checkout" method="POST" class="checkout-form">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.html" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" id="fir" name="frist_name">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span></span></label>
                                <input type="text" id="last" name="last_name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span></span></label>
                                <input type="text" id="cun" name="country">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Address<span></span></label>
                                <input type="text" id="street" class="street-first" name="street_address">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email<span></span></label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="Phone">Phone<span></span></label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label>
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter your coupon code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product<span>Total</span></li>
                                    @foreach($carts as $cart)
                                    <li class="fw-normal">{{$cart->name}} x {{$cart->qty}}
                                        <span>{{$cart->price * $cart->qty}}</span>
                                    </li>
                                    @endforeach
                        

                                    <li class="fw-normal">Subtotal<span>{{$subtotal}}</span></li>
                                    <li class="total-price">Total<span>{{$subtotal}}</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Khi nhan hang
                                            <input type="radio" id="pc-check" name="payment_type" value="pay_later" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Online payment
                                            <input type="radio" id="pc-paypal" name="payment_type" value="online_payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!----------->
   
@endsection