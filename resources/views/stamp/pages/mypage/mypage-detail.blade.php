@extends('stamp.layouts.main')
@push('links')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/mypage/mypage-detail.css') }}">
@endpush
@section('content')
    <div class="section-mypage-detail">
        <div class="mypage-detail-top">
            <a href="#" class="mypage-detail-top-btn-back"></a>
            <div class="mypage-detail-top-title">
                <div class="text-title">ノーマルラリー</div>
            </div>
        </div>
        <div class="mypage-detail-banner">
        </div>
        <div class="mypage-detail-content">
            <div class="mypage-detail-content-text">
                〇〇フェスト会場内の各スポットを巡ってスタンプをGETしよ
                う！すべてのスタンプを集めると記念グッズがもらえる！
            </div>
            <div class="mypage-detail-content-btn">
                <div class="btn-time-celebrate">
                    <a href="#" class="btn-time-celebrate-main">開催期間</a>
                    2020年10月10日 〜 2020年12月31
                </div>
                <div class="btn-area-target">
                    <a href="#" class="btn-area-target-main">対象エリア</a>
                    〇〇〇〇フェスト会場
                </div>
            </div>
        </div>
    </div>

@endsection
