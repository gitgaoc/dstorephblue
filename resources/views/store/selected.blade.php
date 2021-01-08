@extends('layouts.base')
@section('title', 'Selected Product')


@section('content')

    <div class="selected-product bg-primary-rgb py-4 text-center mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 border-secondary-1">
                    <!-- CAROUSEL - https://bbbootstrap.com/snippets/bootstrap-simple-image-carousel-slider-thumbnails-95176939 -->
                    <div class="row">
                        <div class="col-sm-12">
                            <img src=" " alt="">
                            main pic
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            sub pic
                        </div>
                        <div class="col-sm-6">
                            sub pic
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h5>SELLER PROFILE</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h6><i class="fas fa-user"></i> JuanDelaCruz</h6>
                        </div>
                    </div>

                    
                    
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div id="product-info" class="border-primary-1">
                        <div class="product-title bg-secondary-rgb">
                            <h2>Product Title</h2>
                        </div>
                        <div class="product-price">
                            <h3 class="font-weight-bold txt-secondary">
                                &#8369;500.00
                            </h3>
                            <h5 class="font-weight-bold txt-secondary">
                                <s>&#8369;1000.00</s>
                            </h5>
                        </div>
                        <div class="product-quantity">
                            <h5>Quantity</h5>
                            <button><i class="fas fa-minus"></i></button>
                            <input type="text">
                            <button><i class="fas fa-plus"></i></button>

                            <h5>Stocks Left: <b>10</b></h5>

                            <button class="btn btn-primary">ADD TO CART</button>

                          
                        </div>
                        <div class="product-rating">
                            <input class="star star-5" id="star-5" type="radio" name="star" /> <label class="star star-5" for="star-5"></label> 
                            <input class="star star-4" id="star-4" type="radio" name="star" /> <label class="star star-4" for="star-4"></label> 
                            <input class="star star-3" id="star-3" type="radio" name="star" /> <label class="star star-3" for="star-3"></label> 
                            <input class="star star-2" id="star-2" type="radio" name="star" /> <label class="star star-2" for="star-2"></label> 
                            <input class="star star-1" id="star-1" type="radio" name="star" /> <label class="star star-1" for="star-1"></label>

                        </div>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->

            
        </div>
    </div> <!-- /.selected-product -->

    <div class="ratings">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>RATINGS AND REVIEWS</h5>
                </div>
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    Image
                </div>
                <div class="col-md-6">
                    <p></p>
                    <h5><i class="fas fa-user"></i> Buyer 01 <i class="fas fa-star"></i></h5> 
                </div>
            </div> <!-- /.row -->
        </div>
    </div>


@endsection