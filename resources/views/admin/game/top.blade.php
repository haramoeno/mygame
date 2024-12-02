{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ゲームのtop画面'を埋め込む --}}
@section('title', 'ゲームのtop画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規登録</h2>
                <h2>ログイン</h2>
            </div>
        </div>
    </div>
@endsection