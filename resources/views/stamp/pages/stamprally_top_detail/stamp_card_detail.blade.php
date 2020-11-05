@extends('stamp.layouts.main')
@section('class_app', 'background-gray')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/stamprally_top_detail/index.css') }}">
@endpush
@section('content')
    <div class="section-stamprally-top-detail">
        <div class="stamprally-top-detail-top">
            <a href="#" class="stamprally-top-detail-top-btn-back"></a>
            <div class="stamprally-top-detail-top-title">
                <div class="text-title">〇〇フェストラリー</div>
            </div>
        </div>
        <div class="stamprally-top-detail-banner">
        </div>
        <div class="stamprally-top-detail-content">
            <div class="stamprally-top-detail-content-text">
                〇〇フェスト会場内の各スポットを巡ってスタンプをGETしよ
                う！すべてのスタンプを集めると記念グッズがもらえる！
            </div>
            <div class="stamprally-top-detail-content-btn">
                <div class="btn-time-celebrate">
                    <a href="#" class="btn-time-celebrate-main">
                        開催期間
                    </a>
                    2020年10月10日 〜 2020年12月31
                </div>
                <div class="btn-area-target">
                    <a href="#" class="btn-area-target-main">
                        対象エリア
                    </a>
                    〇〇〇〇フェスト会場
                </div>
            </div>
        </div>
    </div>

@endsection
