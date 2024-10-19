@extends('frontend.layouts.app')

@section('content')

<!-- page-title -->
<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Register</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="form-register-wrap">
            <div class="flat-title align-items-start gap-0 mb_30 px-0">
                <h5 class="mb_18">Register</h5>
                <p class="text_black-2">Sign up for early Sale access plus tailored new arrivals, trends and promotions.
                    To opt out, click unsubscribe in our emails</p>
            </div>
            <div>
                <form action="{{ route('register.submit') }}" method="POST">
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
                    <div class="mb_20">
                        <button type="submit"
                            class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Register</button>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="tf-btn btn-line">Already have an account? Log in here<i
                                class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection