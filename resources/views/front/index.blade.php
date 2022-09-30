@extends('layouts.main')

@section('content')

<div class="col-12 order-1 order-lg-0">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="section-title">
                @lang('contact.yangiliklar')
            </h2>
        </div>
        {{-- <div class="col-6 d-none d-lg-block">
            <div class="d-flex align-items-center justify-content-end sort">
                Saralash turi:
                <select class="form-select border-0 ms-2 w-50"
                    aria-label="Default select example">
                    <option selected>Yangiliklar</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div> --}}
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-12">
            <div class="card mb-4 news-card">
                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-lg-0">
                        <img src="{{ $post->img }}" class="img-fluid rounded-start w-100"
                            alt="News image">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card-body p-0">
                            <h5 class="card-title news-card-title">{{ $post->title }}</h5>
                            <p class="card-text news-card-text">
                                {{ $post->short }}
                            </p>
                            <p
                                class="card-text d-flex align-items-center justify-content-between news-card-time">
                                <small class="news-card-time">
                                    <i class="fas fa-calendar me-1"></i>
                                    {{ $post->created_at->setTimezone('Asia/Tashkent')->format('d/m/Y - H:i') }}
                                </small>

                                <a href="{{ route('category_post', [$post->category->slug, $post->slug]) }}" class="news-card-link">
                                    @lang('front.batafsil')
                                    <i class="fas fa-chevron-right ms-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-12 text-lg-end">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection
