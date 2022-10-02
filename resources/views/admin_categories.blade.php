@extends('layouts.admin')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <h1>Dashboard</h1>
            <div class="col-md-12 p-1">
                <div class="card mb-2">
                    <div class="card-body">
                        <form action="/admin/categories/add" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Tambahkan Kategori"
                                    required>
                                <button class="btn btn-primary" type="submit">Tambah</button>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </form>
                        <table class="table table-hover border">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Jumlah Tulisan</th>
                                    <th scope="col" colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if (request('edit' . $category->id))
                                                <form action="/admin/categories/edit">
                                                    @csrf
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Ubah Nama Kategori" value="{{ $category->name }}"
                                                            required>
                                                        <button class="btn btn-primary" type="submit">Ubah</button>
                                                    </div>
                                                </form>
                                            @else
                                                {{ $category->name }}
                                            @endif
                                        </td>
                                        <td>{{ $category->posts->count() }}</td>
                                        <td class="text-end">
                                            <form action="/admin/categories">
                                                <button class="btn btn-warning" name="edit{{ $category->id }}"
                                                    value="true"><i class="bi bi-pencil"></i></button>
                                            </form>
                                        </td>
                                        <td class="text-start">
                                            <form action="/admin/categories/delete">
                                                <button name="del_category" class="btn btn-danger"
                                                    value="{{ $category->id }}"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h1 class="mt-1 mb-3"></h1>
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
