@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <div>
                        <h3>Daftar Buku</h3>
                    </div>
                    <div>
                        @if($auth->role_id == 99)
                            <a href="{{route('book.create')}}" class="btn btn-primary">Tambah Data</a>
                        @endif
                    </div>
                </div>
                <hr>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="px-3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $b)
                        <tr>
                            <th scope="row">{{$b->id}}</th>
                            <td>{{$b->isbn}}</td>
                            <td>{{$b->title}}</td>
                            <td>{{$b->type}}</td>
                            <td>{{$b->author}}</td>
                            <td>{{$b->publisher}}</td>
                            <td>Borrow</td>
                            <td>
                                @if($auth->role_id == 99)
                                <a href="{{route('book.edit', ['book_id'=>$b->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                <a onclick="return confirm('Yakin ingin menghapus data?');" href="{{route('book.destroy', ['book_id'=>$b->id])}}" class="btn btn-sm btn-danger">Delete</a>
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
