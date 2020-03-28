@extends('app')

@section('title', 'ユーザー登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">memo</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

            <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">
              <i class="fab fa-google mr-1"></i>Googleで登録
            </a>

            @include('error_card_list')

            <div class="card-text">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                  <label for="name"></label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ユーザー名" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  <small>英数字3〜16文字(登録後の変更はできません)</small>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="md-form">
                  <label for="email"></label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス"value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="md-form">
                  <label for="password"></label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="パスワード "name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="md-form">
                  <label for="password_confirmation"></label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="パスワード(確認)" required autocomplete="new-password">
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
              </form>

              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
