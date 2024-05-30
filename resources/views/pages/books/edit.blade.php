@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('book.update')}}" class="">
                @csrf

                <h4 class="mb-0">Edit Buku</h4>
                <a href="{{route("books")}}">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <hr>

                <input type="hidden" name="book_id" value="{{$book->id}}">

                <div class="form-group mb-3">
                    <label>ISBN</label>
                    <div class="input-group">
                        <input class="form-control" type="number" required="" name="isbn" value="{{$book->isbn}}">
                        @error("isbn")
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Title</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="title" value="{{$book->title}}">
                        @error("title")
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Tipe</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="type" value="{{$book->type}}">
                        @error("type")
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Author</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="author" value="{{$book->author}}">
                        @error("author")
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Publisher</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="publisher" value="{{$book->publisher}}">
                        @error("publisher")
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3 text-end">
                    <button class="btn btn-primary btn-block" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
