@extends('front.layout.master')

@section('title','Product')

@section('body')

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <a href="shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!---------------->

<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <form action="">
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <ul class="filter-catagories">
                        @foreach($brands as $brand)
                        <li><a href="shop/{{$brand->name}}">{{$brand->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">

                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>     
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div> -->
                <!-- <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">Green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size" name="size" value=35 onchange="this.form.submit();"
                                          {{ request('size') == 35 ?'checked' : ''}}>
                            <label for="s-size">35</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size" id="s-size" name="size" value="36" onchange="this.form.submit();">
                            <label for="m-size">36</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size" id="s-size" name="size" value="37" onchange="this.form.submit();">
                            <label for="l-size">37</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size" id="s-size" name="size" value="38" onchange="this.form.submit();">
                            <label for="xs-size">38</label>
            
                    </div>
                </div> -->
                </form>
            </div>
            
        
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="front/img/products/{{ $product->productImages[0]->path }}" alt="">
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach($product->productImages as $productImage )
                                <div class="pt active" data-imgbigurl="front/img/products/{{$productImage->path}}" alt="">
                                    <img src="front/img/products/{{$productImage->path}}" alt="">
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{$product->tag}}</span>
                                <h3>{{$product->name}}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <!-- <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                
                            </div> -->
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>
                                @if($product->discount!=null)
                                <h4>{{$product->discount}}<span>{{$product->price}}</span></h4>
                                @else
                                <h4>{{$product->price}}</h4>
                                @endif

                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                    <div class="cc-item">
                                        <input type="radio" id="cc-{{$productColor}}">
                                        <label for="cc-{{$productColor}}" class="cc-{{$productColor}}"></label>
                                    </div>
                                 @endforeach
                                    
                                </div>
                            </div>
                            <div class="pd-size-choose">
                            @foreach(array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)

                                <div class="sc-item">
                                    <input type="radio" id="sm-{{$productSize}}">
                                    <label for="sm-{{$productSize}}">{{$productSize}}</label>
                                </div>
                             @endforeach
                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">DESCRIPTION</a></li>
                            <li><a href="#tab-2" data-toggle="tab" role="tab">SPECIFICATIONS</a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">Customer Reviews(02)</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    {{$product->description}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <!-- <tr>
                                            <td class="p-catagory">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </td>
                                            
                                        </tr> -->
                                        <tr>
                                            <td class="p-catagory">Price</td>
                                            <td>
                                                <div class="p-price">
                                                {{$product->price}}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Add to Cart</td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Số lượng còn lại:</td>
                                            <td>
                                                <div class="p-stock"> {{$product->qty}} trong cửa hàng</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Weight</td>
                                            <td>
                                                <div class="p-weight"> {{$product->weight}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Size</td>
                                            <td>
                                                <div class="p-size"> 
                                                @foreach(array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)
                                                        {{$productSize}}
                                                @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Color</td>
                                            <td>
                                            @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                             <span class="cs-{{$productColor}}"></span>
                                             @endforeach
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                               <div class="customer-review-option">
                                <h4>({{count($product->productComments)}} Comments</h4>
                                <div class="comment-option">
                                    @foreach($product->productComments as $productComment)
                                    <div class="co-item">
                                        <div class="avatar-pic">
                                            <img src="front/img/product-single/avatar-1.png" alt="">
                                        </div>
                                        <div class="avatar-text">
                                            <!-- <div class="at-rating">
                                                <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                     <i class="fa fa-star-o"></i>
                                            </div> -->
                                            <h5>{{$productComment->name}}<span>{{$productComment->created_at}}</span></h5>
                                            <div class="at-reply">{{$productComment->message}}</div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>
                                <div class="personal-rating">
                                   
                                </div>
                                <div class="leave-comment">
                                    <h4>Leave A Comment</h4>
                                    <form action="" method="post" class="comment-form">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null}}"> 

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Name" name="name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Email" name="email">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="Message" name="message"></textarea>
                                                <button type="submit" class="site-btn">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------------->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct)
                <div class="col-lg-3 sol-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/{{ $relatedProduct->productImages[0]->path}}" alt="">

                            @if($relatedProduct->discount !=null)
                            <div class="sale pp-sale">Sale</div>
                            @endif
                            <div class="icon">
                                <i class="icon-heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="shop/product/{{$relatedProduct->id}}">quick-view</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>

                        </div>
                        <div class="pi-text">
                                <div class="catagory-name">{{$relatedProduct->tag}}</div>
                                <a href="shop/product/{{$relatedProduct->id}}">
                                    <h5>{{$relatedProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                @if($relatedProduct->discount !=null)
                                    ${{$relatedProduct->discount}}
                                    <span> ${{$relatedProduct->price}}</span>
                                @else
                                  ${{$relatedProduct->price}}
                                @endif
                                </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
@endsection 