@extends('stamp.layouts.main')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/checkpoint/index.css') }}">
@endpush
@section('content')
    <div class="section-checkpoint-error">
        <div class="error-content">
            <p>
                {!! trans('master.checkpoint.checkpoint-error') !!} <br>
                {!! trans('master.checkpoint.checkpoint-error2') !!}
            </p>
        </div>
    </div>

@endsection
