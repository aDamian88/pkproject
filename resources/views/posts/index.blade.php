@extends('layouts.app')

@section('content')
    <h1>Post page</h1>
        @if(count($posts)>1)
        <div class="card">
            <ul class="list-group list-group-flush">
            @foreach($posts as $posts)
                        <li class="list-group-item">
                            <h3><a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
                            <small>Writter on {{$posts->created_at}}</small>
                        </li>
            @endforeach
            </ul>
        </div>
        @else

        @endif
@endsection