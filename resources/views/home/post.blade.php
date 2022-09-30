@extends('layouts.main')

@section('content')
    <div class="col-12 order-1 order-lg-0">
        <div class="row mb-3">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('main') }}" class="breadcrumb-link">@lang('menu.main')</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('news') }}" class="breadcrumb-link">@lang('menu.news')</a></li>
                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">{{ $post->title }}</a></li>
                    </ol>
                  </nav>
            </div>
            <div class="col-12 col-lg-9">
                <h2 class="press-tur-title">
                    {{ $post->title }}
                </h2>
            </div>
            <div class="col-3 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-end sort news-card-time">
                    <small class=" me-4">
                        <i class="fas fa-calendar me-1"></i>
                        {{ $post->created_at->setTimezone('Asia/Tashkent')->format('d/m/Y - H:i') }}
                    </small>
                    <span>
                        <i class="fas fa-eye me-1"></i>
                        {{ $post->seen }}
                    </span>
                </div>
            </div>
        </div>
        <div class="row bg-white mx-1 py-4 rounded-3">
            <div class="col-12">
                <img src="{{ $post->img }}" alt="" class="img-fluid w-100 mb-4">
                <p class="primary-text mb-4">
                    {!! $post->text !!}
                </p>
            </div>
        </div>
    </div>

@endsection
