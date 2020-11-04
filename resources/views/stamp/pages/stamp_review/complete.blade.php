@extends('stamp.layouts.main')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/stamp/index.css') }}">
@endpush
@section('content')
    <div class="text-stamp card_review_complete">
        {!! trans('master.stamp_card_review.complete') !!}
    </div>
@endsection
