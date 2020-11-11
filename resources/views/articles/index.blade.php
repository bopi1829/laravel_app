@extends('layouts.app')

@section('title', 'Index Article')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Content</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->content}}</td>
                    <td><a class="btn btn-info" href="{{ route('articles.show', $article->id) }}">Voir</td>
                    <td><a class="btn btn-success" href="{{ route('articles.edit', $article->id) }}">Modifier</td>
                    <td>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection