{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


@section('title', '新規登録画面')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="" method="post">
                    <h2>新規登録</h2>
                    
                    <div>
                        <label for="username">アカウント名(必須)</label><br>
                        <input id="username" type="text" name="username" maxlength="8" placeholder="8文字以内で入力">
                    </div>
                    
                    <div>
                        <label for="e-mail">E-mail(必須)</label><br>
                        <input id="e-mail" type="e-mail" name="e-mail" placeholder="example@aaa.com">
                    </div>
                    
                    <div>
                        <label for="password">パスワード(必須)</label><br>
                        <input id="password" type="password" name="password" maxlength="10" placeholder="10文字以内で入力">
                    </div>
                    
                    <div>
                        <label for="Reenter password">パスワード(再入力)</label><br>
                        <input id="Reenter password" type="Reenter password" maxlength="10" placeholder="10文字以内で入力(再入力)">
                    </div>
                </form>
                
                
                <div>
                    <button type="submit">登録</button>
                </div>
                
            </div>
        </div>
    </div>
@endsection