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

                    {{ __('editです。') }}
                    <form method="GET" action="{{route('contact.update',['id'=>$contact->id])}}">
                                <div class="form-group">
                                    <label for="your_name">氏名</label>
                                    <input type="text" class="form-control" id="your_name" name="your_name" value="{{$contact->your_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="title">件名</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$contact->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="url">ホームページ</label>
                                    <input type="url" class="form-control" id="url" name="url" value="{{$contact->url}}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">性別</label>
                                    <br>
                                    <input type="radio" id="gender" name="gender" value="0" @if($contact->gender === 0) checked @endif>男性</input>
                                    <input type="radio" id="gender" name="gender" value="1" @if($contact->gender === 1) checked @endif>女性</input>
                                </div>
                        
                                <div class="form-group">
                                <label for="age">年齢</label>
                                    <select class="form-control" id="age" name="age">
                                        <option value="">選択して下さい。</option>
                                        <option value="0" @if($contact->age === 0) selected @endif>～19歳</option>
                                        <option value="1" @if($contact->age === 1) selected @endif>20歳～29歳</option>
                                        <option value="2" @if($contact->age === 2) selected @endif>30歳～39歳</option>
                                        <option value="3" @if($contact->age === 3) selected @endif>40歳～49歳</option>
                                        <option value="4" @if($contact->age === 4) selected @endif>50歳～59歳</option>
                                        <option value="5" @if($contact->age === 5) selected @endif>60歳～</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="contact">お問い合わせ内容</label>
                                    <textarea class="form-control" id="contact" row="3" name="contact">{{$contact->contact}}</textarea>
                                </div>
                    
                    <!-- laravel formを作る場合、csrfが必要 -->
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">

                                    <input type="submit" class="btn btn-info" name="btn_confirm" value="更新する">
                                    
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
