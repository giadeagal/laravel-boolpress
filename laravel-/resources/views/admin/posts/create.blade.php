@extends('layouts.app')

@section('title', 'Scrivi un nuovo post')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post" >
            @csrf
            <div class="mb-3">
              <label for="titolo" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="titolo" aria-describedby="emailHelp">
              
            </div>

            <div class="mb-3">
              <label for="content" class="form-label">Contenuto</label>
              <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
              
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection