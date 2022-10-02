@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-1">
                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="/img/avatars/blank.png" alt="Christina Mason" class="img-fluid rounded-circle" width="128"
                            height="128" />
                        <p class="fs-5 mt-2">Untuk saat ini foto profile belum bisa diubah</p>
                    </div>
                    <div class="card-body">
                        <hr class="my-0" />
                        <form action="/edit_profile" method="POST">
                            <div class="mb-2">
                                <label class="form-label mt-2">Username :</label>
                                <div class="form-control-lg p-0">{{ $users->username }}</div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama Lengkap :</label>
                                <input class="form-control form-control-lg @error('name')is-invalid @enderror"
                                    type="text" name="name" placeholder="Masukkan nama lengkap" required
                                    value="{{ $users->name }}" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary mt-2" type="submit">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
