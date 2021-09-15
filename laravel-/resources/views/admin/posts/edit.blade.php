@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post" >
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="titolo" class="form-label">Modifica titolo</label>
              <input type="text" name="title" class="form-control" id="titolo" value="{{ $post->title }}" aria-describedby="emailHelp">
              
            </div>

            <div class="mb-3">
              <label for="content" class="form-label">Modifica contenuto</label>
              <textarea name="content" id="content" class="form-control" cols="30" rows="10">{{ $post->content }}</textarea>
              
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection