@extends('frontend.layouts.app')

@section('content')
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
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
                    <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-1.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">New York, USA</h4>
                    <p class="text-grey-3 wow fadeIn animated">27 Division St, New York<br>NY 10002, USA</p>
                </div>
                <div class="col-md-4 text-center mb-md-0 mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-2.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Paris, France</h4>
                    <p class="text-grey-3 wow fadeIn animated">22 Rue des Carmes<br> 75005 Paris</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-3.jpg" alt="">
                    <h4 class="mt-30 mb-15 wow fadeIn animated">Jakarta, Indonesia</h4>
                    <p class="text-grey-3 wow fadeIn animated">2476 Raya Yogyakarta,<br>89090 Indonesia</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
