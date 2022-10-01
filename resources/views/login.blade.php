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

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <div class="text-center mt-4">
                                            <h1 class="h2">Forum Diskusi Informatika</h1>
                                        </div>
                                        <img src="/img/logos/alfaristudio.png" alt="Charles Hall"
                                            class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg" type="text" name="username"
                                                placeholder="Masukkan username" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Masukkan password" />
                                            <small>
                                                <a href="">lupa password?</a>
                                            </small>
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
                                            <a href="" class="btn btn-lg btn-primary w-100 mb-2">Masuk</a>
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
