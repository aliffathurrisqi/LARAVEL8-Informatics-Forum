@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="card mb-2">
                    <div class="card-header">
                        <h3 class="mb-3">Kategori</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <h4><a href="categories/{{ $category['id'] }}">{{ $category->name }}
                                            ({{ count($category->posts) }})
                                        </a>
                                    </h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
