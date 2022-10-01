@extends('layouts.auth')
@section('body')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-center fixed-top" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center mt-4">
                                        <h1 class="h2">Daftar</h1>
                                        <p class="lead">
                                            Bergabung bersama Forum Informatika.
                                        </p>
                                    </div>
                                    <form action="/register" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input
                                                class="form-control form-control-lg
                                            @error('username')is-invalid @enderror "
                                                type="text" name="username" placeholder="Masukkan username" required
                                                value="{{ old('username') }}" />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input class="form-control form-control-lg @error('name')is-invalid @enderror"
                                                type="text" name="name" placeholder="Masukkan nama" required
                                                value="{{ old('name') }}" />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input
                                                class="form-control form-control-lg @error('password')is-invalid @enderror"
                                                type="password" name="password" placeholder="Masukkan password" required />
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Ulangi Password</label>
                                            <input
                                                class="form-control form-control-lg @error('konfirmasi')is-invalid @enderror "
                                                type="password" name="konfirmasi" placeholder="Ulangi password" required />

                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-2">Daftar</button>
                                            <a href="/login" class="btn btn-lg btn-outline-primary w-100">Masuk</a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
