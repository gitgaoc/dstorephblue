@extends('layouts.base')
@section('title', 'Be a seller')

@section('afternav')
@stop




@section('content')
    <div class="bg-gradient">
        <div class="seller-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 bg-secondary-rgb seller-container-1 text-white font-weight-bold">
                        <h1 class="font-weight-bold my-0">BE A</h1>
                        <h1 class="display-1 font-weight-bold my-0">SELLER</h1>
                        <div class="bg-primary-rgb seller-tagline">
                            <h5 class="font-weight-bold p-1">SELL ON THE LEADING DENTAL SHOP IN THE PHILIPPINES</h5>
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="mt-5">
                    <h1 class="display-4 font-weight-bold txt-secondary">3 EASY STEPS</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="seller-steps">
                            <img src="{{ asset('images/placeholders/placeholder1200x400.png') }}" alt="" class="img-fluid border-primary-1">
                            <h5 class="txt-secondary font-weight-bold mt-2">Sign up online to Register</h5>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="seller-steps">
                            <img src="{{ asset('images/placeholders/placeholder1200x400.png') }}" alt="" class="img-fluid border-primary-1">
                            <h5 class="txt-secondary font-weight-bold mt-2">Upload your Products</h5>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="seller-steps">
                            <img src="{{ asset('images/placeholders/placeholder1200x400.png') }}" alt="" class="img-fluid border-primary-1">
                            <h5 class="txt-secondary font-weight-bold mt-2">Sell and Earn Online</h5>
                        </div>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!-- <div class="bg-primary-rgb seller-tagline border-secondary-3-rgb mt-4">
                            <h4 class="font-weight-bold text-white">Click Here to Register</h4>
                        </div> -->

                        <a href="#" class="btn bg-primary-rgb seller-register border-secondary-3-rgb mt-4 text-white font-weight-bold w-100">Click Here to Register</a>
                    </div>
                </div> <!-- /.row -->

                <div class="mt-5 mb-3">
                    <h1 class="display-4 font-weight-bold txt-secondary">Why Sell on Dentalstore?</h1>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="seller-steps">
                                <img src="{{ asset('images/placeholders/placeholder1200x400.png') }}" alt="" class="img-fluid border-primary-1">
                                <h5 class="txt-secondary font-weight-bold mt-2">Lorem ipsum dolor kalam</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="seller-steps">
                                <img src="{{ asset('images/placeholders/placeholder1200x400.png') }}" alt="" class="img-fluid border-primary-1">
                                <h5 class="txt-secondary font-weight-bold mt-2">Lorem ipsum dolor kalam</h5>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> <!-- /.row -->

            </div>
        </div>
    </div>

@endsection