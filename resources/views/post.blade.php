@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="card">
                    <div class="card-body h-100">
                        <div class="d-flex align-items-start">
                            <img src="/img/avatars/blank.png" width="36" height="36" class="rounded-circle me-2"
                                alt="">
                            <div class="flex-grow-1">
                                {{-- <small class="float-end text-navy">30m ago</small> --}}
                                <strong>
                                    <a class="text-dark" href="/post/{{ $posts['id'] }}">{{ $posts['judul'] }}</a>
                                </strong>
                                <br>
                                <small class="text-muted"><a href="#">{{ $posts->user->name }}</a> - </small>
                                <small class="text-muted">{{ $posts['created_at'] }} WIB - </small>
                                <small><a href="/categories/{{ $posts->category->id }}"
                                        class="text-primary">{{ $posts->category->name }}</a></small>

                                <div class="text-muted mt-1 text-justify">
                                    {{ $posts['body'] }}
                                </div>

                                {{-- <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                        data-feather="heart"></i> Like</a> --}}
                                <a href="#" class="btn btn-sm btn-primary mt-1">
                                    <i class="bi bi-chat-dots"></i>
                                    0 Tanggapan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
