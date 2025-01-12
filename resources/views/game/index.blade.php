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
                <div class="col-md-12">

                    <form action="{{ route('game.index') }}" method="get">
                        <div class="form-group row">
                            <label class="col-md-4">タイトル</label>
                            <div class="col-md-8">
                                <input type="text" class="form-action" name="cond_title" value="{{ $cond_title }}">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4">ジャンル</label>
                            <div class="col-md-8">
                                <input type="text" class="form-action" name="cond_genre" value="{{ $cond_genre }}">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4">プレイスタイル</label>
                            <div class="col-md-8">
                                <input type="text" class="form-action" name="cond_playstyle" value="{{ $cond_playstyle }}">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-md-4">プラットフォーム</label>
                            <div class="col-md-8">
                                <input type="text" class="form-action" name="cond_platform" value="{{ $cond_platform }}">
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            @csrf
                            <div style="text-align: right">
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
                                    <th width="20%">修正</th>
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
                                        <td>
                                            <div>
                                                <a href="{{ route('game.detail', ['id' => $game->id]) }}">詳細</a>
                                            </div>
                                            {{-- <div>
                                                <a href="{{ route('game.edit', ['id' => $game->id]) }}">編集</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('game.delete', ['id' => $game->id]) }}">削除</a>
                                            </div> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection