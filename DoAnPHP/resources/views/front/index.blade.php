@extends('front.layout.master')

@section('title','Home')

@section('body')
    <!------->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est veritatis rerum distinctio dolorum adipisci vel quisquam iure laudantium, culpa id et molestiae atque ducimus omnis quae obcaecati ex reiciendis!</p>
                            <a href="#" class="primary-btn">Shop Now</a>

                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-6.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est veritatis rerum distinctio dolorum adipisci vel quisquam iure laudantium, culpa id et molestiae atque ducimus omnis quae obcaecati ex reiciendis!</p>
                            <a href="#" class="primary-btn">Shop Now</a>

                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <!--------------->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">ALL</li>
                           <!-- <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>-->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($womenProducts as $womenProduct)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$womenProduct->productImages[0]->path}}" alt="">
                                @if($womenProduct->discount!=null)
                                <div class="sale">sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="./cart/add/{{$womenProduct->id}}"><i class="icon_bg_alt"></i></a></li>
                                    <li class="quick-view"><a href="./shop/product/{{$womenProduct->id}}">Chi Ti???t</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$womenProduct->tag}}</div>
                                <a href="">
                                    <h5>{{$womenProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($womenProduct->discount!=null)
                                     {{$womenProduct->discount}}
                                    <span>{{$womenProduct->price}}</span>
                                    @else
                                      {{$womenProduct->price}}  
                                    @endif  
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal of The Week</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum provident amet! Optio accusantium minima, rem assumenda omnis neque sed distinctio ab officia, fugiat voluptatibus aut molestias quia, reiciendis blanditiis!</p>
                    <div class="product-price">
                        #35.00
                        <span> /HandBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>56</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>56</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
<!---------------------------->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">ALL</li>
                         <!-- <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>-->
                    </ul>
                </div>
                <div class="product-slider owl-carousel">        
                    @foreach($menProducts as $menProduct)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$menProduct->productImages[0]->path}}" alt="">
                                @if($menProduct->discount!=null)
                                <div class="sale">sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="./cart/add/{{$menProduct->id}}">
                                        <i class="icon_bg_alt"></i>
                                    </a>
                                </li>
                                    <li class="quick-view"><a href="./shop/product/{{$menProduct->id}}">Chi Ti???t</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$menProduct->tag}}</div>
                                <a href="">
                                    <h5>{{$menProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($menProduct->discount!=null)
                                     {{$menProduct->discount}}
                                    <span>{{$menProduct->price}}</span>
                                    @else
                                      {{$menProduct->price}}  
                                    @endif  
                                </div>
                            </div>
                        </div>
                        @endforeach 
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                    <h2>Men's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------------------------->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Collection</a></h5>
        </div>
    </div>
</div>
<!-------------------->

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From the Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/blog/{{ $blog->image}}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                {{$blog->created_at}}
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                 {{count($blog->blogComments)}}
                            </div>
                        </div>
                        <a href="">
                           <h4>{{$blog->title}}</h4> 
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shiping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>It goood have prolems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure payment</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 