@extends('stamp.layouts.main')
@section('class_app', 'background-gray')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/stamprally_top_detail/index.css') }}">
@endpush
@section('content')
    <div class="section-stamprally-top-detail2">
        <div class="stamprally-top-detail2-content">
            <p>
            現在開催中のラリーは <br>
            ありません
            </p>
        </div>
    </div>

@endsection
