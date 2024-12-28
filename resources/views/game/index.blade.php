@extends('layouts.admin')
@section('title', '登録済みのゲーム一覧')

@section('content')
        <div class="container">
            <div class="row">
                <h2>ゲーム一覧</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('game.add') }}" role="button" class="btn btn-primary">新規作成</a> 
                </div>
                <div class="col-md-8">
                    <form action="{{ route('game.index') }}" method="get">
                        <div class="form-group row">
                            <label class="col-md-2">タイトル</label>
                            <div class="col-md-8">
                                <input type="text" class="form-action" name="cond_title" value="{{ $cond_title }}">
                            </div>
                             <div class="col-md-2">
                                @csrf
                                <input type="submit" class="btn btn-primary" value="検索">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="list-game col-md-12 mx-auto">
                    <div class="row">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="20%">タイトル</th>
                                    <th width="20%">ジャンル</th>
                                    <th width="20%">プレイスタイル</th>
                                    <th width="20%">プラットフォーム</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $game)
                                <tr>
                                    <th>{{ $game->id }}</th>
                                    <td>{{ Str::limit($game->title, 100) }}</td>
                                    <td>{{ Str::limit($game->genre, 100) }}</td>
                                    <td>{{ Str::limit($game->playstyle, 100) }}</td>
                                    <td>{{ Str::limit($game->platform, 100) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection