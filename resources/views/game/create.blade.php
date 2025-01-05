@extends('layouts.admin')
@section('title', 'ゲーム登録画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ゲーム登録画面</h2>
                <form action="{{ route('game.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-4">ゲームタイトル</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">ジャンル</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="genre" value="{{ old('genre') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">プレイスタイル</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="playstyle" value="{{ old('playstyle') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">プラットフォーム</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="platform" value="{{ old('platform') }}">
                        </div>
                    </div>
                    @csrf
                    <div class="form-group row">
                            <input type="submit" class="btn btn-primary" value="登録">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection