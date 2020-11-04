@extends('stamp.layouts.main')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/checkpoint/index.css') }}">
@endpush
@section('content')
    <div class="section-checkpoint">
        <div class="checkpoint-top">
            <a href="#" class="checkpoint-top-btn-back"></a>
            <div class="checkpoint-top-title">
                <div class="text-title">{!! trans('master.checkpoint.title') !!}</div>
                <div class="text-title2">{!! trans('master.checkpoint.title2') !!}</div>
            </div>
        </div>
        <div class="checkpoint-banner">
        </div>
        <div class="checkpoint-content">
            <div class="checkpoint-content-text">
                {!! trans('master.checkpoint.content') !!}
            </div>
            <div class="checkpoint-content-text">
                {!! trans('master.checkpoint.content') !!}
            </div>
        </div>
        <div class="checkpoint-btn-camera">
            <a href="#" class="btn-camera">
                <img src="{{asset('assets/images/btn_qr-image.png')}}" class="image-camera" alt="">
                <p>{!! trans('master.checkpoint.qr-camera') !!}</p>
            </a>
        </div>
    </div>

@endsection
