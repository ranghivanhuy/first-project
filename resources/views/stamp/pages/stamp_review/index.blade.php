@extends('stamp.layouts.main')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/stamp/index.css') }}">
@endpush
@section('content')
    <div class="section-stamprally-top">
        <div class="row">
            <div class="col-12 text-center text-stamp-title">
                {!! trans('master.stamp_card_review.title_1') !!}<br>{!! trans('master.stamp_card_review.title_2') !!}
            </div>
            <div class="col-12">
                <form action="">
                    <!-- textarea -->
                    <div class="text-area">
                        <textarea class="form-area" placeholder="{!! trans('master.stamp_card_review.textarea_placeholder') !!}"></textarea>
                    </div>
                    <!--button-->
                    <div class="text-center">
                        <button class="button-custom">{!! trans('master.stamp_card_review.send') !!}</button>
                    </div>
                    <!--button-->
                    <div class="text-center">
                        <button class="button-custom">{!! trans('master.stamp_card_review.send_later') !!}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
