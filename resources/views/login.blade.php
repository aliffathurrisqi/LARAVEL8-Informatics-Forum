@extends('layouts.auth')
@section('body')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        @if (session()->has('success'))
                            <div class="alert alert-primary alert-dismissible fade show text-center fixed-top" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show text-center fixed-top"
                                role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <div class="text-center mt-4">
                                            <h3>Forum Diskusi Mahasiswa Informatika</h3>
                                            <h5 class="text-muted">Universitas Teknologi Yogyakarta</h5>
                                        </div>
                                        <img src="/img/logos/UTY.png" class="img-fluid rounded-circle mb-2" width="132"
                                            height="132" />
                                    </div>
                                    <form action="/login/auth" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input
                                                class="form-control form-control-lg @error('username')is-invalid @enderror"
                                                type="text" name="username" placeholder="Masukkan username" required
                                                value="{{ old('username') }}" />
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-3">
                                                @if (request()->look)
                                                    <input
                                                        class="form-control form-control-lg @error('password')is-invalid @enderror"
                                                        type="text" name="password" placeholder="Masukkan password"
                                                        required />

                                                    <button class="btn btn-outline-secondary" name="look" type="button"
                                                        value="false"><i class="bi bi-eye-slash"></i></button>
                                                @else
                                                    <input
                                                        class="form-control form-control-lg @error('password')is-invalid @enderror"
                                                        type="password" name="password" placeholder="Masukkan password"
                                                        required />

                                                    <button class="btn btn-outline-secondary" name="look" type="button"
                                                        value="true"><i class="bi bi-eye"></i>
                                                    </button>
                                                @endif
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                {{-- <small>
                                                <a href="">lupa password?</a>
                                            </small> --}}
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me"
                                                    name="remember-me" checked>
                                                <span class="form-check-label">
                                                    Remember me next time
                                                </span>
                                            </label>
                                        </div> --}}
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-2">Masuk</button>
                                            <a href="/register" class="btn btn-lg btn-outline-primary w-100">Daftar</a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
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

    <script src="js/app.js"></script>
@endsection
