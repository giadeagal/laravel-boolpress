@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Codice post</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
                
            
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
                <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Visualizza</a>
                <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary">Modifica</a>
                <form action="" class="d-inline-block" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class=" btn btn-danger" value="Cancella">
                </form>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
</div>
    
@endsection