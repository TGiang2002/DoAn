@extends('front.layout.master')

@section('title','Shop')

@section('body')
    <!------->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------>
    <section class="product-shop spad">
       <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <form action="">
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <ul class="filter-catagories">
                        @foreach($brands as $brand)
                        <li><a href="shop/{{$brand->name}}">{{$brand->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                </form>
            </div>    
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">

                         <form action="">
                            @csrf
                         <div class="select-option">
                                <!-- <select name="sort_by" class="sorting" onchange="this.form.submit();">
                                    <option {{request('sort_by') =='name-ascending' ? 'selected' : '' }} value="name-ascending">Sắp xếp: Từ A->Z</option>
                                    <option {{request('sort_by') =='name-descending' ? 'selected' : '' }} value="name-descending">Sắp xếp: Từ Z->A</option>
                                    <option {{request('sort_by') =='price-ascending' ? 'selected' : '' }} value="price-ascending">Sắp xếp: Từ thấp -> Cao nhất</option>
                                    <option {{request('sort_by') =='price-descending' ?'selected' : '' }} value="price-descending">Sắp xếp: Từ Cao ->Thấp</option>

                                </select> -->
                                <select name="show" class="p-show" onchange="this.form.submit();">
                                    <option {{request('show') == '3' ? 'selected' : '' }}  value="3">Show :3</option>
                                    <option {{request('show') == '6' ?'selected' : '' }} value="6">Show: 6</option>
                                    <option {{request('show') == '9' ?'selected' : '' }} value="9">Show: 9</option>

                                </select>
                            </div>
                         </form>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="product list">
                    <div class="row">

                       @foreach($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                    @if($product->discount!=null)
                                    <div class="sale pp-sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon-heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="./cart/add/{{$product->id}}"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="shop/product/{{$product->id}}">Chi Tiết</a></li>
                                        <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                    </ul>

                                </div>
                                <div class="pi-text">
                                        <div class="catagory-name">{{$product->tag}}</div>
                                        <a href="shop/product/{{$product->id}}">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                        @if($product->discount !=null)
                                          ${{$product->discount}}
                                            <span> ${{$product->price}}</span>
                                         @else
                                             ${{$product->price}}
                                         @endif
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach

                    </div>
                </div>
                {{$products->links()}}
            </div>
        </div>
       </div>
    </section>
    

    <!----------->
@endsection