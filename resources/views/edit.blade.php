@extends('layouts.main')

@section('content')

<div class="container mt-5 mb-5">
    <div class="text-center">
        <h1 class="display-4 fw-bold text-dark">edit a Book</h1>
    </div>
</div>
<div class="container mt-5 mb-5">
    <form action="{{ route('books.update', $book->id) }}" method="post" class="mx-auto" style="width: 70%;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="form4Example1" class="form-label">Title</label>
            <input type="text" id="form4Example1" value="{{ $book->title }}" name="title" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="form4Example2" class="form-label">Author</label>
            <input type="text" id="form4Example2" value="{{ $book->author }}" name="author" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="form4Example3" class="form-label">description</label>
            <textarea name="description" class="form-control" id="form4Example3" rows="8">{{ $book->description }}</textarea>
        </div>


        <button name="submit" type="submit" class="btn btn-dark float-end">edit Book</button>
    </form>
</div>

@endsection