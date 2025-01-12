@extends('layouts.admin')
@section('title', 'ゲームの詳細画面')

<head>
<link href="{{ secure_asset('css/detail.css') }}" rel="stylesheet">
</head>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>{{ $game_form->title }}</h2>

                <div class="form-group row">
                    <label class="col-md-2" for="genre">ジャンル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="genre" value="{{ $game_form->genre }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="playstyle">プレイスタイル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="playstyle" value="{{ $game_form->playstyle }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="platform">プラットフォーム</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="platform" value="{{ $game_form->platform }}" readonly>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
@endsection
