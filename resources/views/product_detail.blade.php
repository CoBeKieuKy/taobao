@extends('layouts.app')
@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Product Detail</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <div class="row">
                    <div class="span4">
                        <a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="themes/images/ladies/1.jpg"></a>
                        <ul class="thumbnails small">
                            <li class="span1">
                                <a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/ladies/2.jpg" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/ladies/3.jpg" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/ladies/4.jpg" alt=""></a>
                            </li>
                            <li class="span1">
                                <a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/ladies/5.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="span5">
                        <address>
                            <strong>Brand:</strong> <span>Nem Fashion</span><br>
                            <strong>Product Code:</strong> <span>Product 14</span><br>
                            <strong>Reward Points:</strong> <span>0</span><br>
                            <strong>Availability:</strong> <span>Out Of Stock</span><br>
                            <strong>Producer Link:</strong> <span>https://nemshop.vn/</span>
                        </address>
                        <h4><strong>Price: $587.50</strong></h4>
                    </div>
                    <div class="span5">
                        <form class="form-inline" action="/addToCart" method="post">
                            @csrf
                            <input type="hidden" name="productId" value="1"/>
                            <label>Qty:</label>
                            <input type="text" class="span1" placeholder="1" value="1" name="quality">
                            <button class="btn btn-inverse" type="submit">Add to cart</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">Description</a></li>
                            <li class=""><a href="#profile">Additional Information</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
                            <div class="tab-pane" id="profile">
                                <table class="table table-striped shop_attributes">
                                    <tbody>
                                    <tr class="">
                                        <th>Size</th>
                                        <td>Large, Medium, Small, X-Large</td>
                                    </tr>
                                    <tr class="alt">
                                        <th>Colour</th>
                                        <td>Orange, Yellow</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span9">
                        <br>
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
                            <span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
                        </h4>
                        <div id="myCarousel-1" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                                                <a href="#" class="category">Suspendisse aliquet</a>
                                                <p class="price">$341</p>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                <a href="#" class="category">Phasellus consequat</a>
                                                <p class="price">$341</p>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
                                                <a href="#" class="category">Erat gravida</a>
                                                <p class="price">$28</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                                                <a href="#" class="category">Phasellus consequat</a>
                                                <p class="price">$341</p>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="product-box">
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                                                <a href="product_detail.html">Praesent tempor sem</a><br/>
                                                <a href="#" class="category">Erat gravida</a>
                                                <p class="price">$28</p>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
                                                <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                                                <a href="#" class="category">Suspendisse aliquet</a>
                                                <p class="price">$341</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
