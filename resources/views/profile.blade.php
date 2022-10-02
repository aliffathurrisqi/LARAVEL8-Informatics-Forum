@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-4 p-1">
                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="/img/avatars/blank.png" alt="Christina Mason" class="img-fluid rounded-circle mb-2"
                            width="128" height="128" />
                        <h5 class="card-title mb-0">{{ $users->name }}</h5>
                        <div class="text-muted mb-2">{{ $users->username }}</div>
                        <div>
                            <a class="btn btn-primary btn-sm" href="#"><i class="bi bi-pencil"></i>
                                {{ count($users->posts) }} Tulisan</a>
                            <a class="btn btn-primary btn-sm" href="#"><i class="bi bi-chat-dots"></i>
                                {{ count($users->comments) }} Tanggapan</a>
                        </div>
                        @if ($users->username == auth()->user()->username)
                            <hr class="my-0 mt-2" />
                            <a class="btn btn-outline-primary btn-sm w-100 mt-2" href="/profile/user/edit">
                                Edit Profile</a>
                            <a class="btn btn-outline-primary btn-sm w-100 mt-2" href="/user/create/post">
                                Buat Tulisan</a>
                        @endif
                    </div>
                </div>


            </div>
            <div class="col-md-8 p-1">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="card mb-2">
                            <div class="card-body h-100">
                                <div class="d-flex align-items-start">
                                    <img src="/img/avatars/blank.png" width="36" height="36"
                                        class="rounded-circle me-2" alt="">
                                    <div class="flex-grow-1">
                                        <small class="float-end text-navy">{{ $post->created_at->diffForHumans() }}</small>
                                        <strong>
                                            <a class="text-dark" href="/post/{{ $post->id }}">{{ $post->judul }}</a>
                                        </strong>
                                        <br>
                                        <small class="text-muted"><a href="#">{{ $post->user->name }}</a> - </small>
                                        <small class="text-muted">{{ $post->created_at->format('d M Y H:i') }} WIB -
                                        </small>
                                        <small><a href="/categories/{{ $post->category->id }}"
                                                class="text-primary">{{ $post->category->name }}</a></small>

                                        <div class="text-muted mt-1 text-justify">
                                            {!! $post->body !!}
                                        </div>

                                        {{-- <a href="#" class="btn btn-sm btn-outline-danger mt-1 me-1">
                                    <i class="bi bi-heart"></i>
                                    0 Like</a> --}}
                                        <a href="#" class="btn btn-sm btn-primary mt-1">
                                            <i class="bi bi-chat-dots"></i>
                                            {{ count($post->comments) }} Tanggapan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @if ($users->username == auth()->user()->username)
                        <div class="card mb-2">
                            <div class="card-body h-100">
                                <a class="btn btn-primary btn-sm w-100 mt-2" href="/user/create/post">
                                    Buat Tulisan</a>
                            </div>
                        </div>
                    @else
                        <div class="card mb-2">
                            <div class="card-body h-100">
                                Pengguna belum membuat tulisan
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>

    </div>
@endsection
