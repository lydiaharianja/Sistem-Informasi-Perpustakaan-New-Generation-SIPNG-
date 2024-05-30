@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('book.store')}}" class="">
                @csrf

                <h4 class="mb-0">Tambah Buku</h4>
                <a href="{{route("books")}}">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <hr>

                <div class="form-group mb-3">
                    <label>ISBN</label>
                    <div class="input-group">
                        <input class="form-control" type="number" required="" name="isbn">
                    </div>
                    @error("isbn")
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Title</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="title">
                    </div>
                    @error("title")
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Tipe</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="type">
                    </div>
                    @error("type")
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Author</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="author">
                    </div>
                    @error("author")
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Publisher</label>
                    <div class="input-group">
                        <input class="form-control" type="text" required="" name="publisher">
                    </div>
                    @error("publisher")
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3 text-end">
                    <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
