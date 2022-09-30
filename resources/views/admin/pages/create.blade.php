@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить страницу</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Cтраницы</a></li>
                        <li class="breadcrumb-item active">Добавить страницу</li>
                    </ol>
                </div>

            </div><!-- /.row -->
            @include('layouts.components.admin.message')
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <!-- form start -->
                        <form action="{{ route('pages.store') }}" method="POST">
                            @csrf
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">O'zbekcha</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="false">Русский</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-four-messages" role="tab"
                                            aria-controls="custom-tabs-four-messages" aria-selected="false">English</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                               

                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sarlavha o'zbekcha</label>
                                            <input type="text" name="title_uz" value="{{ old('title_uz') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название страницы" required>
                                        </div>
                                        @error('title_uz')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror

                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Pastki sarlavha o'zbekcha</label>
                                            <input type="text" name="sub_title_uz" value="{{ old('sub_title_uz') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        @error('sub_titile_uz')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matn o'zbekcha</label>
                                            <textarea name="text_uz" class="editor">{{ old('text_uz') }}</textarea>
                                        </div>
                                        @error('text_uz')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Заголовок русский</label>
                                            <input type="text" name="title_ru" value="{{ old('title_ru') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название страницы">
                                        </div>
                                        @error('titile_ru')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Подзаголовок русский</label>
                                            <input type="text" name="sub_title_ru" value="{{ old('sub_title_ru') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        @error('sub_title_ru')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст русский</label>
                                            <textarea name="text_ru" class="editor">{{ old('text_ru') }}</textarea>
                                        </div>
                                        @error('text_ru')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title english</label>
                                            <input type="text" name="title_en" value="{{ old('title_en') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название страницы">
                                        </div>
                                        @error('title_en')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Subtitle english</label>
                                            <input type="text" name="sub_title_en" value="{{ old('sub_title_en') }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        @error('sub_title_en')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content english</label>
                                            <textarea name="text_en" class="editor">{{ old('text_en') }}</textarea>
                                        </div>
                                        @error('text_en')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group hide-if-old">
                                    <label for="feature_image">Изображение страницы</label>
                                    <img src="{{ old('image') }}" alt="" class="img-uploaded"
                                        style="display: block; width: 300px">
                                    <input type="text" name="image" value="{{ old('image') }}"
                                        class="form-control @error('image') is-invalid @enderror" id="feature_image"
                                        name="feature_image" value="{{ old('feature_image') }}" value="" readonly>
                                    @error('image')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror

                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать
                                        изображение</a>
                                </div>
                            </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                    </form>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
