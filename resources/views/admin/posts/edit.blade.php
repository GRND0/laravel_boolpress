@extends('layouts.dashboard')

@section('content')

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
        @method('PUT')
        @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $post->title }}"> 
    </div>
    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select class="form-control" id="category_id" name="category_id"> 
          <option value="">Nessuna</option>
          @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ $post->category &&  $post->category->id ==  $category->id ? 'selected' : '' }} > {{ $category->name }} </option>
              
          @endforeach
        </div>
    <div class="form-group">
        <label for="content">Contenuto</label>
        <textarea type="text" class="form-control" id="content" name="content" rows="10" value="{{ old('content') ? old('content') : $post->content }}"> 
      </div>
    </form>
 <h1>modifica post</h1>   
@endsection

