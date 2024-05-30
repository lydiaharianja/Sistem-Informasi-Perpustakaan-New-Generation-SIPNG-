@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('borrow.store') }}" class="">
                @csrf

                <h4 class="mb-0">Tambah Peminjam Buku</h4>
                <a href="{{ route('borrows') }}">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <hr>

                <div class="form-group mb-3">
                    <label>Judul Buku</label>
                    <div class="input-group">
                        <input list="titleBook" name="book_id" class="form-control" required>
                        <datalist id="titleBook">
                            @foreach ($books as $b)
                                <option value="{{ $b->id }}">{{ $b->title }}</option>
                            @endforeach

                        </datalist>
                    </div>
                    @error('book_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Pengguna</label>
                    <div class="input-group">
                        <input list="userName" name="user_id" class="form-control" required>
                        <datalist id="userName">
                            @foreach ($users as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach

                        </datalist>
                    </div>
                    @error('user_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3 text-end">
                    <button class="btn btn-primary btn-block" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
