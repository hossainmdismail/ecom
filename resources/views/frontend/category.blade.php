@extends('frontend.layouts.app')

@section('content')
@livewire('frontend.categoryproduct',['slugs' => $slugs])
@endsection

@section('script')
    <!-- Add the following scripts for GTM data layer and Facebook Pixel -->
    <script>
        // Google Tag Manager Data Layer for Category View
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'viewCategory',
            'pageType': 'category',
            'pageTitle': 'Category: {{ $category->category_name }}',
            'contentName': 'Category: {{ $category->category_name }}',   // Additional: Category name
            'contentList': 'Category: {{ $category->category_name }}',   // Additional: Category name for the content list
            'currency': 'BDT',
            // Add other relevant information specific to your category view
        });

        // Facebook Pixel Event for View Category
        fbq('track', 'ViewCategory', {
            content_name: 'Category: {{ $category->category_name }}',
            content_category: 'Category: {{ $category->category_name }}',
            content_type: 'category',
            content_list: 'Category: {{ $category->category_name }}',
            currency: 'BDT',
        });
    </script>
@endsection
