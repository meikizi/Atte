@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">仮会員登録完了</div>

                <div class="card-body__text">
                    <p>この度は、ご登録いただき、誠にありがとうございます。</p>
                    <p>
                        ご本人様確認のため、ご登録いただいたメールアドレスに、<br>
                        本登録のご案内のメールが届きます。
                    </p>
                    <p>
                        そちらに記載されているURLにアクセスし、<br>
                        アカウントの本登録を完了させてください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
