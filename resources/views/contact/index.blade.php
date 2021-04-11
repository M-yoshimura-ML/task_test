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

                    <form method="GET" action="{{route('contact.create')}}">
                    	<button type="submit" class="btn btn-primary">
                    		新規登録
                    	</button>
                    </form>

                    <form method="GET" action="{{route('contact.index')}}" class="form-inline my-2 my-lg-6">
                      <input class="form-control mr-sm-2" type="" name="search" placeholder="名前 検索">
                      <button class="btn btn-outline-success my-2 mr-sm-0">検索</button>
                    </form>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">名前</th>
                          <th scope="col">件名</th>
                          <th scope="col">登録年月日</th>
                          <th scope="col">詳細</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contacts as $contact)
                            <tr>                            
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{$contact->your_name}}</th>
                                <td>{{$contact->title}}</th>
                                <td>{{$contact->created_at}}</th>
                                <td><a href="{{route('contact.show', ['id'=>$contact->id])}}">詳細をみる</a></th>
                            </tr>                                       
                        @endforeach
                      </tbody>
                    </table>

                    <div>
                      {{$contacts->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
