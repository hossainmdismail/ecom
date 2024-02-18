@extends('frontend.layouts.app')

@section('content')
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="#" rel="nofollow">Home</a>
                <span></span> About us
            </div>
        </div>
    </div>

    <section id="work" class="mt-40 pt-50 pb-50 section-border">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 col-md-12 text-center">
                    <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">About us</h6>
                    <h2 class="mb-15 text-grey-1 wow fadeIn animated">Our main branches<br> around the world</h2>
                    <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Familly Bazar is now one of the leading e-commerce organizations in Bangladesh. It is indeed the biggest online hypermarket in Bangladesh that helps you save time and money.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-1.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Dhaka</h4>
                    <p class="text-grey-3 wow fadeIn animated">Zigatola Monesshor Road, Dhanmondi Dhaka - 1209</p>
                </div>
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-2.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Dhanmondi</h4>
                    <p class="text-grey-3 wow fadeIn animated">Zigatola Monesshor Road, Dhanmondi Dhaka - 1209</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
