@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                <h5 class="mb-3">
                    <a href="/categories">Kategori</a> /
                    <a href="/categories/{{ $category['id'] }}">{{ $category['name'] }}</a>
                </h5>
                <form action="/categories/{{ $category['id'] }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Cari tulisan..."
                            value={{ request('search') }}>
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="card mb-1">
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
                                        <small class="text-muted">
                                            <a href="/profile/{{ $post->user->username }}">{{ $post->user->name }}</a> -
                                        </small>
                                        <small class="text-muted">{{ $post->created_at->format('d M Y H:i') }} WIB -
                                        </small>
                                        <small><a href="/categories/{{ $post->category->id }}"
                                                class="text-primary">{{ $post->category->name }}</a></small>

                                        <div class="text-muted mt-1 text-justify">
                                            {!! $post->body !!}
                                        </div>

                                        {{-- <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                        data-feather="heart"></i> Like</a> --}}
                                        <a href="#" class="btn btn-sm btn-primary mt-1">
                                            <i class="bi bi-chat-dots"></i>
                                            {{ count($post->comments) }} Tanggapan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center mt-3">
                        {{ $posts->links() }}
                    </div>
                @else
                    <div class="card mb-2">
                        <div class="card-body h-100">
                            Data Kosong
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </div>
@endsection
