@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    YOUR FUTURE CAREER
                </p>
                <h2 class="primary-header">
                    Start Invest Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{ $camp->title }}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.store', $camp->id) }}" method="POST" class="basic-form">
                            @csrf
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ Auth::user()->name }}" required>
                                @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ Auth::user()->email }}" required>
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                <input type="text" name="occupation" class="form-control  {{ $errors->has('occupation') ? 'is-invalid' : ''}}" value="{{old('occupation') ?: Auth::user()->occupation }}" required>
                                @if($errors->has('occupation'))
                                    <span class="text-danger">{{ $errors->first('occupation') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                <input type="number" name="card_number" class="form-control {{ $errors->has('card_number') ? 'is-invalid' : ''}}" value="{{old('card_number') ?: ''}}" required>
                                @if($errors->has('card_number'))
                                    <span class="text-danger">{{ $errors->first('card_number') }}</span>
                                @endif
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Expired</label>
                                        <input type="month" name="expired" class="form-control {{ $errors->has('expired') ? 'is-invalid' : ''}}" value="{{ old('expired') ?: '' }}" required>
                                        @if($errors->has('expired'))
                                            <span class="text-danger">{{ $errors->first('expired') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">CVC</label>
                                        <input type="number" name="cvc" class="form-control {{ $errors->has('cvc') ? 'is-invalid' : ''}}" maxlength="3" value="{{ old('cvc') ?: '' }}" required>
                                        @if($errors->has('cvc'))
                                            <span class="text-danger">{{ $errors->first('cvc') }}</span>
                                         @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection