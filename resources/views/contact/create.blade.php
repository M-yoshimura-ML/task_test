@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                    	<ul>
                    		@foreach($errors->all() as $error)
                    		<li>{{ $error }}</li>
                    		@endforeach
                    	</ul>
                    </div>
                    @endif

                    {{ __('createです。') }}
                    <form method="POST" action="{{route('contact.store')}}">
                    <!-- laravel formを作る場合、csrfが必要 -->
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="your_name">氏名</label>
                                    <input type="text" class="form-control" id="your_name" name="your_name" value="">
                                </div>
                                <div class="form-group">
                                    <label for="title">件名</label>
                                    <input type="text" class="form-control" id="title" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="email" class="form-control" id="email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="url">ホームページ</label>
                                    <input type="url" class="form-control" id="url" name="url" value="">
                                </div>
                                <div class="form-group">
                                    <label for="gender">性別</label>
                                    <br>
                                    <input type="radio" id="gender1" name="gender" value="0">男性</input>
                                    <input type="radio" id="gender2" name="gender" value="1">女性</input>
                                </div>
                        
                                <div class="form-group">
                                <label for="age">年齢</label>
                                    <select class="form-control" id="age" name="age">
                                        <option value="">選択して下さい。</option>
                                        <option value="0">～19歳</option>
                                        <option value="1">20歳～29歳</option>
                                        <option value="2">30歳～39歳</option>
                                        <option value="3">40歳～49歳</option>
                                        <option value="4">50歳～59歳</option>
                                        <option value="5">60歳～</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="contact">お問い合わせ内容</label>
                                    <textarea class="form-control" id="contact" row="3" name="contact"></textarea>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="caution" name="caution" value="1">
                                    <label class="form-check-label" for="caution">注意事項のチェック</label>
                                </div>
                                <input type="submit" class="btn btn-info" name="btn_confirm" value="登録する">
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
