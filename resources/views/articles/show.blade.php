@extends('layouts.app')

@section('title', 'Create Article')


@section('content')

    <p>{{ $article->id }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ date('d-M-Y', strtotime($article->created_at)) }}</p>    

@endsection