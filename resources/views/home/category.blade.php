@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1>Posts of category {{ $posts->first()->category->title }}</h1>
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <div class="card m-1">
                        <div class="card-header">
                                @if ($post->is_link)
                                    <a href="{{ $post->link }}">{{ $post->title }}</a>
                                @else
                                    <a href="{{ route('category_post', [$post->category->slug, $post->slug]) }}">{{ $post->title }}</a>
                                @endif
                        </div>

                        <div class="card-body">
                            @if ($post->is_link)
                                <a href="{{ $post->link }}">{{ $post->short }}</a>
                            @else
                                {{ $post->short }}
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
