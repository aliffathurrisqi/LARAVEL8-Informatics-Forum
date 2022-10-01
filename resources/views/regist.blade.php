@extends('layouts.auth')
@section('body')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center mt-4">
                                        <h1 class="h2">Daftar</h1>
                                        <p class="lead">
                                            Bergabung bersama Forum Informatika.
                                        </p>
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
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Ulangi Password</label>
                                            <input class="form-control form-control-lg" type="password" name="konfirmasi"
                                                placeholder="Ulangi password" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="" class="btn btn-lg btn-primary w-100 mb-2">Daftar</a>
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
