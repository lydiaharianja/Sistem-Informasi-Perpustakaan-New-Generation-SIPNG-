@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <h3>Daftar Peminjam Buku</h3>
                    </div>
                    <div>
                        @if($auth->role_id == 99)
                            <a href="{{route('borrow.create')}}" class="btn btn-primary">Tambah Data</a>
                        @endif
                    </div>
                </div>
                <hr>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengguna</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tenggang Pengembalian</th>
                        <th scope="col">Tanggal Dikembalikan</th>
                        <th scope="col" class="px-3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($borrows as $b)
                        <tr>
                            <th scope="row">{{$b->id}}</th>
                            <td>{{$b->book->title ?? "-"}}</td>
                            <td>{{$b->user->name ?? "-"}}</td>
                            <td>{{$b->start_date}}</td>
                            <td>{{$b->grace_date}}</td>
                            <td>{{$b->end_date}}</td>
                            <td>
                                @if($auth->role_id == 99)
                                <a href="{{route('borrow.edit', ['borrow_id'=>$b->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                <a onclick="return confirm('Yakin ingin menghapus data?');" href="{{route('borrow.destroy', ['borrow_id'=>$b->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                @else
                                Tidak mempunyai akses
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
