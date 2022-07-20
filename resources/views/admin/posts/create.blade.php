@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un nuovo post</h1>
        <form action="{{route('admin.posts.store')}}" method="Post">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is invalid @enderror" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea rows="5" class="form-control @error('content') is invalid @enderror" id="content" name="content" value="{{old('content')}}"></textarea>
                @error('content')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input @error('public') is invalid @enderror" id="public" name="public">
                <label class="form-check-label" for="public">Pubblica</label>
                @error('public')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea post</button>
        </form>
    </div>
    
@endsection