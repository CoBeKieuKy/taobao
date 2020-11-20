@extends('layouts.app')
@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="../themes/images/pageBanner.png" alt="New products" >
        <h4><span>Mô tả sản phẩm</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                        <a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="{{$product->image}}"></a>
                        
                    </div>
                    <div class="span5">
                        <h4><strong>{{$product->name}}</strong></h4>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>Thương Hiệu:</strong> <span>{{$product->brand}}</span><br>
                            <strong>Điểm đánh giá:</strong> <span>{{$product->star}}</span><br>
                            <strong><a href="{{$product->link}}">Taobao Link</a></strong> <br>
                        </address>
                        <h4><strong>Giá: {{$product->price}}</strong></h4>
                    </div>
                    <div class="span5">
                        <label>Số lượng:</label>
                        <input type="text" class="span1" placeholder="1">
                    </div>
                    <div class="span5">
                        <form class="form-inline">

                            <p>&nbsp;</p>

                            <button class="btn btn-inverse" type="submit">Mua ngay</button>
                            <button class="btn btn-inverse" type="submit">Giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Thông tin chi tiết</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <p>{{$product->description}} </p>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
                        <br>
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><strong>Sản Phần liên Quan</strong></span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        @foreach($listpro as $item)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}"></a><br/>
                                                    <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br/>
                                                    <p class="price">{{$item->price}}.000đ</p>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        
                                        @foreach($listpro as $item)
                                            <li class="span3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="{{ url("/product-detail/".$item->id) }}"><img alt="" src="{{$item->image}}"></a><br/>
                                                    <a href="{{ url("/product-detail/".$item->id) }}" class="title">{{$item->name}}</a><br/>
                                                    <p class="price">{{$item->price}}.000đ</p>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="span3 col">--}}
{{--                <div class="block">--}}
{{--                    <ul class="nav nav-list">--}}
{{--                        <li class="nav-header">SUB CATEGORIES</li>--}}
{{--                        <li><a href="products.html">Nullam semper elementum</a></li>--}}
{{--                        <li class="active"><a href="products.html">Phasellus ultricies</a></li>--}}
{{--                        <li><a href="products.html">Donec laoreet dui</a></li>--}}
{{--                        <li><a href="products.html">Nullam semper elementum</a></li>--}}
{{--                        <li><a href="products.html">Phasellus ultricies</a></li>--}}
{{--                        <li><a href="products.html">Donec laoreet dui</a></li>--}}
{{--                    </ul>--}}
{{--                    <br/>--}}
{{--                    <ul class="nav nav-list below">--}}
{{--                        <li class="nav-header">MANUFACTURES</li>--}}
{{--                        <li><a href="products.html">Adidas</a></li>--}}
{{--                        <li><a href="products.html">Nike</a></li>--}}
{{--                        <li><a href="products.html">Dunlop</a></li>--}}
{{--                        <li><a href="products.html">Yamaha</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="block">--}}
{{--                    <h4 class="title">--}}
{{--                        <span class="pull-left"><span class="text">Randomize</span></span>--}}
{{--                        <span class="pull-right">--}}
{{--									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>--}}
{{--								</span>--}}
{{--                    </h4>--}}
{{--                    <div id="myCarousel" class="carousel slide">--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="active item">--}}
{{--                                <ul class="thumbnails listing-products">--}}
{{--                                    <li class="span3">--}}
{{--                                        <div class="product-box">--}}
{{--                                            <span class="sale_tag"></span>--}}
{{--                                            <a href="/product_detail"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>--}}
{{--                                            <a href="/product_detail" class="title">Fusce id molestie massa</a><br/>--}}
{{--                                            <a href="#" class="category">Suspendisse aliquet</a>--}}
{{--                                            <p class="price">$261</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <ul class="thumbnails listing-products">--}}
{{--                                    <li class="span3">--}}
{{--                                        <div class="product-box">--}}
{{--                                            <a href="/product_detail"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>--}}
{{--                                            <a href="/product_detail" class="title">Tempor sem sodales</a><br/>--}}
{{--                                            <a href="#" class="category">Urna nec lectus mollis</a>--}}
{{--                                            <p class="price">$134</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="block">--}}
{{--                    <h4 class="title"><strong>Best</strong> Seller</h4>--}}
{{--                    <ul class="small-product">--}}
{{--                        <li>--}}
{{--                            <a href="#" title="Praesent tempor sem sodales">--}}
{{--                                <img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">--}}
{{--                            </a>--}}
{{--                            <a href="#">Praesent tempor sem</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" title="Luctus quam ultrices rutrum">--}}
{{--                                <img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">--}}
{{--                            </a>--}}
{{--                            <a href="#">Luctus quam ultrices rutrum</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" title="Fusce id molestie massa">--}}
{{--                                <img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">--}}
{{--                            </a>--}}
{{--                            <a href="#">Fusce id molestie massa</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
