@extends('frontend.layouts.app')

{{-- /testing --}}


@section('content')
@livewire('frontend.product-view',['slugs' => $slugs])
@endsection
