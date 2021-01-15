@extends('layouts/base')

@section('title', 'Login')

@section('afternav')
@stop

@section('content')
    <div class="bg-primary-rgba-20 mb-0">
        <div class="container text-center">
            <div class="p-3">
                <h1 class="display-4 txt-secondary-rgb font-weight-bold mb-0">WELCOME TO</h1>
                <div class="row mt-0">
                    <div class="col-md-8 offset-md-2">
                        <img src="{{ asset('images/logo/dstorephlogo1.png') }}" alt="" class="img-fluid">
                    </div>
                </div> <!-- /.row -->
                <h1 class="display-5 txt-secondary-rgb font-weight-bold">PLEASE LOGIN.</h1>
            </div>
        </div>

        <div class="mt-0 bg-secondary-rgba-70 p-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="credentials p-4">
                            <label for="txtUsername" class="text-white">Phone Number or Email</label>
                            <input type="text" class="form-control rounded-0 mb-3">

                            <label for="txtPassword" class="text-white">Password</label>
                            <input type="password" class="form-control rounded-0">
                        </div>
                    </div> <!-- /.col-md-8 -->

                    <div class="col-md-4">
                        <div class="social-media py-5">
                            <label for="" class="text-white">Or login with:</label><br>
                            <a href="#" class="btn btn-primary btnfb"><i class="fas fa-facebook"></i>Facebook</a> <br><br>
                            <a href="#" class="btn btn-secondary btnfb"><i class="fas fa-google"></i>Google</a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->

                <div class="button-login text-center">
                    <button class="btn bg-primary-rgb txt-secondary font-weight-bold w-50">LOGIN</button>
                </div>
            </div>
            
        </div> <!-- /end -->

        <div class="container text-center mt-3 p-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="txt-secondary">CUSTOMER CARE</h3>

                    <a href="#" class="txt-secondary">HELP CENTER</a><br>
                    <a href="#" class="txt-secondary">HOW TO BUY</a><br>
                    <a href="#" class="txt-secondary">SHIPPING & DELIVERY</a><br>
                    <a href="#" class="txt-secondary">HOW TO RETURN</a><br>
                    <a href="#" class="txt-secondary">QUESTION</a><br>
                    <a href="#" class="txt-secondary">CONTACT US</a>
                </div>

                <div class="col-md-6">
                    <h6 class="txt-secondary mt-5 p-5">FOLLOW US ON</h6>
                </div>
            </div>
        </div>
    </div>

    
@endsection