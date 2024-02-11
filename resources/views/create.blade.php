@extends('layouts.main')

@section('content')

<div class="container mt-5 mb-5">
    <div class="text-center">
        <h1 class="display-4 fw-bold text-dark">Add a Book</h1>
    </div>
</div>
<div class="container mt-5 mb-5">
    <form action="{{route('books.store')}}" method="post" class="mx-auto" style="width: 70%;">
        @csrf
        <div class="mb-3">
            <label for="form4Example1" class="form-label">Title</label>
            <input type="text" id="form4Example1" name="title" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="form4Example2" class="form-label">Author</label>
            <input type="text" id="form4Example2" name="author" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="form4Example3" class="form-label">description</label>
            <textarea name="description" class="form-control" id="form4Example3" rows="8"></textarea>
        </div>


        <button name="submit" type="submit" class="btn btn-dark float-end">Add Book</button>
    </form>
</div>

@endsection