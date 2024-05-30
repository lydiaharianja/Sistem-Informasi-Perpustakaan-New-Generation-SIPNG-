@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('borrow.update') }}" class="">
                @csrf

                <h4 class="mb-0">Pengembalian Buku</h4>
                <a href="{{ route('borrows') }}">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <hr>

                <h5>Judul Buku: {{$borrow->book->title ?? "-"}}</h5>
                <h5>Nama Peminjam: {{$borrow->user->name ?? "-"}}</h5>

                <input type="hidden" name="borrow_id" value="{{$borrow->id}}">

                <div class="form-group mb-3 text-end">
                    <button class="btn btn-primary btn-block" type="submit">Menerima Buku</button>
                </div>
            </form>
        </div>
    </div>
@endsection
