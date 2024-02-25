@extends('frontend.layouts.app')

@section('style')
    <script src="https://use.fontawesome.com/b4564248e6.js"></script>
@endsection

@section('content')
    @livewire('frontend.checkout')
@endsection

@section('script')
    <!-- Add the following scripts for GTM data layer and Facebook Pixel -->
    <script>
        // Facebook Pixel Event for View Category
        fbq('track', 'InitiateCheckout', {
            content_ids: {{ $ids }},
            content_type: 'InitiateCheckout',
            num_items: {{ $data['total'] }},
            currency: 'BDT',
            value: {{ $data['price'] }}
        });
    </script>
@endsection
