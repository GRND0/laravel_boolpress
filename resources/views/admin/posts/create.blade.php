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

<form action="{{ route('admin.posts.store') }}" method="POST"> 
    @method('POST')
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" > 
    </div>
    <div class="form-group">
        <label for="content">Contenuto</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}"> 
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection