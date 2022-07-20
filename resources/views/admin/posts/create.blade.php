@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crea post</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input  id="title" name="title" value="{{old('title')}}" type="text" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea  id="content" name="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{old('content')}}</textarea>
                        @error('content')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input  id="published" name="published" type="checkbox" class="form-check-input @error('published') is-invalid @enderror" {{old('published') ? 'checked' : ''}}>
                        <label class="form-check-label" for="published">Pubblica</label>
                        @error('published')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection