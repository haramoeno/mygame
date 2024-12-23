{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


@section('title', '検索画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ route('game.create') }}" method="get">
                <input type="search" name="freeword" placeholder="フリーワードを入力">
                
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all()  as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                
                <p>ジャンル</p>
                <select name="genre">
                    <option value="" disabled>選択してください</option>
                    <option value="RPG">RPG</option>
                    <option value="アクション">アクション</option>
                    <option value="パーティゲーム">パーティゲーム</option>
                    <option value="シミュレーションゲーム">シミュレーションゲーム</option>
                </select>
                
                <p>プラットフォーム</p>
                <select name="platform">
                    <option value="" disabled>選択してください</option>
                    <option value="PS5">PS5<ption>
                    <option value="PS4">PS4</option>
                    <option value="Switch">Switch</option>
                    <option value="pc">pc</option>
                    <option value="アプリ">アプリ</option>
                </select>
                
                <p>プレイスタイル</p>
                <select name="playstyle">
                    <option value="" disabled>選択してください</option>
                    <option value="ソロプレイ">ソロプレイ</option>
                    <option value="協力プレイ">協力プレイ</option>
                    <option value="対戦プレイ">対戦プレイ</option>
                </select>
                
                
                <input type="submit" name="submit" value="検索">
                </form>
            </div>
        </div>
    </div>
@endsection