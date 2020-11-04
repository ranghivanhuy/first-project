<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('stamp.pages.top_page.index');
});
Route::get('/rally_top', function () {
    return view('stamp.pages.rally_top.index');
});
Route::get('/checkpoint', function () {
    return view('stamp.pages.check-point.index');
});
Route::get('/checkpoint-error', function () {
    return view('stamp.pages.check-point.checkpoint-error');
});
Route::get('/stamp-card-review', function () {
    return view('stamp.pages.stamp_review.index');
});
Route::get('/stamp-card-review/complete', function () {
    return view('stamp.pages.stamp_review.complete');
});

Route::get('/mypage-detail', function () {
    return view('stamp.pages.mypage.mypage-detail');
});

Route::get('/mypage-news-detail', function () {
    return view('stamp.pages.mypage.mypage-newsdetail');
});
