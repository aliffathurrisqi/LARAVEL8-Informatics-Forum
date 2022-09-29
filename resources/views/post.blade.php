@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="card mb-2">
                    <div class="card-body h-100">
                        <div class="d-flex align-items-start">
                            <img src="/img/avatars/blank.png" width="36" height="36" class="rounded-circle me-2"
                                alt="">
                            <div class="flex-grow-1">
                                <small class="float-end text-navy">{{ $posts->created_at->diffForHumans() }}</small>
                                <strong>
                                    <a class="text-dark" href="/post/{{ $posts->id }}">{{ $posts->judul }}</a>
                                </strong>
                                <br>
                                <small class="text-muted">
                                    <a href="/profile/{{ $posts->user->username }}">{{ $posts->user->name }}</a> -
                                </small>
                                <small class="text-muted">{{ $posts->created_at->format('d M Y H:i') }} WIB - </small>
                                <small><a href="/categories/{{ $posts->category->id }}"
                                        class="text-primary">{{ $posts->category->name }}</a></small>

                                <div class="text-muted mt-1 text-justify">
                                    {{ $posts['body'] }}
                                </div>

                                {{-- <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                        data-feather="heart"></i> Like</a> --}}
                                <a href="#" class="btn btn-sm btn-primary mt-1">
                                    <i class="bi bi-chat-dots"></i>
                                    {{ count($posts->comments) }} Tanggapan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2">Tanggapan</div>
                <div class="card mb-1">
                    <div class="card-body h-100">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tulis tanggapan....">
                            <button class="btn btn-primary" type="button">Kirim</button>
                        </div>
                    </div>
                </div>
                @foreach ($comments as $comment)
                    <div class="card mb-1">
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/blank.png" width="36" height="36" class="rounded-circle me-2"
                                    alt="">
                                <div class="flex-grow-1">
                                    {{-- <small class="float-end text-navy">30m ago</small> --}}
                                    <small class="text-muted">
                                        <a href="/profile/{{ $comment->user->username }}">{{ $comment->user->name }}</a> -
                                    </small>
                                    <small class="text-muted">{{ $comment->created_at->format('d M Y H:i') }} WIB</small>
                                    <div class="text-muted mt-1 text-justify">
                                        {{ $comment->body }}
                                    </div>

                                    {{-- <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                        data-feather="heart"></i> Like</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection
