{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ゲームのtop画面'を埋め込む --}}
@section('title', 'ゲームのtop画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="button">新規登録</a>
                <a href="#" class="button">ログイン</a>
            </div>
        </div>
    </div>
@endsection