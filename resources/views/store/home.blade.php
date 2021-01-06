@extends('layouts.base')

@section('title', 'Home')


@section('content')

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="wrap2 mb-3">
                    <div class="border-primary-2 action-tabs">
                    <!-- https://www.geeksforgeeks.org/bootstrap-4-nav-pills/ -->
                        <nav class="nav nav-pills nav-fill">
                            <a href="#" class="nav-item nav-link p-0 active">SPECIAL PRODUCTS</a>
                            <a href="#" class="nav-item nav-link p-0">BEST SELLING</a>
                            <a href="#" class="nav-item nav-link p-0">PROMOS</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->
                
            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="{{ url('/selected') }}"><img src="{{ asset('images/others/alginmax.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    

            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    

            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    
        </div> <!-- /.row -->

        <div class="row">
            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->
                
            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    

            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    

            <div class="col-md-3">
                <div class="catalogue-image text-center">
                    <a href="#"><img src="{{ asset('images/others/honigum.png') }}" alt="" class="img-fluid border-primary-1 mb-2 catalogue-product"></a>
                </div>
                <div class="catalogue-text">
                    <p class="text-justify font-weight-bold txt-secondary">
                        Duis hendrerit diam et aliquet lacinia. Aliquam sapien magna, pellentesque non ex at, placerat faucibus libero. Integer euismod, 
                        augue consequat dignissim feugiat, libero metus posuere velit, at tincidunt neque orci sed nisi.
                    </p>
                    <h3 class="font-weight-bold txt-secondary">
                        &#8369;500.00
                    </h3>
                    <h5 class="font-weight-bold txt-primary">
                        <s>&#8369;1000.00</s>
                    </h5>
                </div>
            </div>  <!-- /.col-md-3 -->    
        </div> <!-- /.row -->
    </div>
</div> <!-- /.products -->




@endsection