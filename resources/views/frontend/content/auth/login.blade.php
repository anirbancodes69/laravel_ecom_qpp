@extends('frontend.layouts.app')

@section('content')
<!-- page-title -->
<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Log in</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                @if (session()->has('error'))
                <section class="flat-spacing-10">
                    <div class="container">
                        <div class="tf-grid-layout lg-col-10 tf-login-wrap">
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                </section>
                @endif
                <div id="login">
                    <h5 class="mb_36">Log in</h5>
                    <div>
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="Enter email" type="email" id="email"
                                    name="email" required>
                                <label class="tf-field-label fw-4 text_black-2" for="email">Email
                                    *</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder="" type="password" id="password"
                                    name="password" required>
                                <label class="tf-field-label fw-4 text_black-2" for="password">Password
                                    *</label>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Log
                                    in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tf-login-content">
                <h5 class="mb_36">I'm new here</h5>
                <p class="mb_20">Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt
                    out, click unsubscribe in our emails.</p>
                <a href="{{ route('register') }}" class="tf-btn btn-line">Register<i
                        class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection