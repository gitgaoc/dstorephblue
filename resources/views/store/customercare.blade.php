@extends('layouts/base')

@section('afternav')
@stop

@section('content')
    <div class="customercare-banner">
        <img src="{{ asset('images/placeholders/placeholder1200x200.png') }}" alt="" class="img-fluid w-100">

        <div class="container">
            <div class="mt-4">
                <h5 class="txt-secondary">TOP QUESTIONS</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="txt-secondary">What is Courier Delivery Lead Time?</li>
                            <li class="txt-secondary">FAQs Related TO Enhanced Quarantine Measures</li>
                            <li class="txt-secondary">How to Place an Order Using Cash on Delivery</li>
                            <li class="txt-secondary">Where Did My Refund Go?</li>
                            <li class="txt-secondary">Why Did I Noy Receive My Verificatin For Buyers</li>
                            <li class="txt-secondary">How Do I Change My Mobile Number?</li>
                            <li class="txt-secondary">How Do I Change My Password?</li>
                            <li class="txt-secondary">How To Register Using My Phone Number</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h5 class="txt-secondary">STILL NEED HELP?</h5>
                <button class="btn bg-primary-rgb text-white font-weight-bold rounded">CHAT NOW</button>
            </div>
        </div>
    </div>
@endsection