@extends('layouts.admin')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <h1>Dashboard</h1>
            <div class="col-md-4 p-1">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">User</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="bi bi-person align-middle fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $users->count() }}</h1>
                        <div class="mb-0">
                            {{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                            <span class="text-muted">Since last week</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-1">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Tulisan</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="bi bi-chat-dots align-middle fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $posts->count() }}</h1>
                        <div class="mb-0">
                            {{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                            <span class="text-muted">Since last week</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-1">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Kategori</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="bi bi-tag align-middle fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $categories->count() }}</h1>
                        <div class="mb-0">
                            {{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                            <span class="text-muted">Since last week</span> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
