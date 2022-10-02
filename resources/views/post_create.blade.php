@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-1">
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Buat Tulisan</h5>
                        <small class="text-muted">
                            <a class="mb-2">{{ auth()->user()->name }}</a> -
                        </small>
                        <small class="text-muted">{{ date('d M Y') }}</small>
                        <form action="/user/create/post" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="input-group mb-2 mt-2">
                                <input class="form-control form-control-lg @error('judul')is-invalid @enderror"
                                    type="text" name="judul" placeholder="Judul Tulisan" required />
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text">Kategori</label>
                                <select class="form-select" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <input id="body" type="hidden" name="body">
                                <trix-editor input="body"></trix-editor>
                            </div>
                            <div>
                                <button class="btn btn-primary mt-2" type="submit">Buat Tulisan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
