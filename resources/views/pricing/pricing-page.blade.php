@extends('pricing.pricing-layout')
@section('content')
    <div class="card-deck">
        <div class="card">
            <img src="{{asset('img/core-img/white.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Free Plan</h5>
                <p class="card-text">Access to 5 templates</p>
                <p class="card-text">1 account</p>
                <p class="card-text">FREE</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">SELECT PLAN</a>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/core-img/white.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Basic Plan</h5>
                <p class="card-text">Access to 10 templates</p>
                <p class="card-text">Up to 5 account</p>
                <p class="card-text">7$/month</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">SELECT PLAN</a>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/core-img/white.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Premium Plan</h5>
                <p class="card-text">Unlimited Access to templates</p>
                <p class="card-text">Up to 10 account</p>
                <p class="card-text">15$/month</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">SELECT PLAN</a>
            </div>
        </div>
    </div>
@endsection
