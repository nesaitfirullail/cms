@extends('layouts.app') 
@section('content') 
@if ($message = Session::get('success')) 
        <div class="alert alert-success"> 
            <p>{{ $message }}</p> 
        </div> 
@endif 
<table class="table table-bordered" style="width:95%;margin: 0 auto;"> 
        <tr> 
            <td><a href="{{ route('article'=>$article->id]) }}">{{ $article->title }}</a></td> 
            <td>{{ $article->content }}</td> 
            <td><img width="150px" src="{{asset{'storage/'.$article->featured_image)}}"></td> 
        </tr> 
        @foreach ($articles as $article) 
        <tr> 
            <td>{{ $article->title }}</td> 
            <td>{{ $article->content }}</td> 
            <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
        </tr> 
        @endforeach 
</table> 
@endsection 
