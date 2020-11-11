@extends('layouts.app')

@section('title', 'Create Article')


@section('content')
    
    <form method="post" class="form" action="{{ route('articles.store') }}">
        @csrf
        <div class="form-group">
            <label for="first name">Content :</label>
            <input type="text" class="form-control" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

@endsection