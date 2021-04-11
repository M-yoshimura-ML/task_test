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

                    {{ __('お問い合わせ詳細') }}
                    <br>
                    
                    
                    
                    <!-- laravel formを作る場合、csrfが必要 -->
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="your_name">氏名</label>
                                    <label for="your_name" class="form-control">{{$contact->your_name}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="title">件名</label>
                                    <label for="title" class="form-control">{{$contact->title}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <label for="email" class="form-control">{{$contact->email}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="url">ホームページ</label>
                                    <textarea class="form-control" id="contact" row="3" name="url" disabled>{{$contact->url}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gender">性別</label>
                                    <br>
                                    <label for="gender" class="form-control">{{$gender}}</label>
                                </div>
                        
                                <div class="form-group">
                                    <label for="age">年齢</label>
                                    <label for="age" class="form-control">{{$age}}</label>
                                </div>

                                <div class="form-group">
                                    <label for="contact">お問い合わせ内容</label>                                   
                                    <textarea class="form-control" id="contact" row="3" name="contact" disabled>{{$contact->contact}}</textarea>
                                </div>
                                <form method="GET" action="{{route('contact.edit', ['id' => $contact->id])}}">
                                @csrf
                                    <input type="submit" class="btn btn-info" name="btn_confirm" value="変更する">
                                </form>
                                <br>

                                <form method="POST" action="{{route('contact.destroy', ['id'=>$contact->id])}}" id="delete_{{$contact->id}}">
                                @csrf
                                <a href="#" class="btn btn-danger" data-id="{{$contact->id}}" onclick="deletePost(this);">削除する</a>
                                
                                </form>                          
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deletePost(e){
        'use-strict';
        if(confirm('本当に削除してもいいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }

</script>
@endsection
