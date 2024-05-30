@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Selamat Datang Di Sistem Informasi Perpustakaan New Generation</h3>
            <hr>
            <div class="cal-10">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body border">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <center> <h6 class="font-roboto">Users</h6> </center>
                                        <center><h4 class="mb-0 counter">{{$total->users}}</h4></center>
                                    </div>
                                </div>
                                <div class="progress-widget">
                                    <div class="progress sm-progress-bar progress-animate">
                                        <div class="progress-gradient-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body border">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <center><h6 class="font-roboto">Books</h6></center>
                                        <center><h4 class="mb-0 counter">{{$total->books}}</h4></center>
                                    </div>
                                </div>
                                <div class="progress-widget">
                                    <div class="progress sm-progress-bar progress-animate">
                                        <div class="progress-gradient-success" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body border">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <center><h6 class="font-roboto">Borrow</h6></center>
                                        <center><h4 class="mb-0 counter">{{$total->borrows}}</h4></center>
                                    </div>
                                </div>
                                <div class="progress-widget">
                                    <div class="progress sm-progress-bar progress-animate">
                                        <div class="progress-gradient-primary" role="progressbar" style="width: 48%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body border">
                                <div class="media static-widget">
                                    <div class="media-body">
                                        <center><h6 class="font-roboto">Return</h6></center>
                                        <center><h4 class="mb-0 counter">{{$total->returns}}</h4></center>
                                    </div>
                                </div>
                                <div class="progress-widget">
                                    <div class="progress sm-progress-bar progress-animate">
                                        <div class="progress-gradient-danger" role="progressbar" style="width: 48%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
