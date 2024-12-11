{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


@section('title', 'ゲームの検索結果画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2>検索結果</h2>
            <form action="{{ route('game.search') }}" method="get">
                
            </form>
            
            </div>
        </div>
    </div>
@endsection