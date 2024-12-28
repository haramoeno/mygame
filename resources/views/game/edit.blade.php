@extends('layouts.admin')
@section('title', 'ゲームの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゲーム編集</h2>
                <form action="{{ route('game.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $game_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="genre">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="genre" value="{{ $game_form->genre }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="playstyle">プレイスタイル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="playstyle" value="{{ $game_form->playstyle }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="platform">プラットフォーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="platform" value="{{ $game_form->platform }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $game_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection