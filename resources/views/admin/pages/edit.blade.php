@extends('layouts.admin_layout')

@section('title', 'Редактировать страницу')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать страницу: {{ $page['title'] }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Cтраницы</a></li>
                        <li class="breadcrumb-item active">Редактировать страницу</li>
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
                        <form action="{{ route('pages.update', $page['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                            aria-selected="true">O'zbekcha</a>
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
                                            <input type="text" name="title_uz" value="{{ $page['title_uz'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи" required>
                                        </div>
                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Pastki sarlavha o'zbekcha</label>
                                            <input type="text" name="sub_title_uz" value="{{ $page['sub_title_uz'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matn o'zbekcha</label>
                                            <textarea name="text_uz"
                                                class="editor">{{ $page['text_uz'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Заголовок русский</label>
                                            <input type="text" name="title_ru" value="{{ $page['title_ru'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи">
                                        </div>
                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Подзаголовок русский</label>
                                            <input type="text" name="sub_title_ru" value="{{ $page['sub_title_ru'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст русский</label>
                                            <textarea name="text_ru"
                                                class="editor">{{ $page['text_ru'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title english</label>
                                            <input type="text" name="title_en" value="{{ $page['title_en'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи">
                                        </div>
                                        <div class="form-group hide-if-old">
                                            <label for="exampleInputEmail1">Subtitle english</label>
                                            <input type="text" name="sub_title_en" value="{{ $page['sub_title_en'] }}"
                                                class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите подзаголовок страницы">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content english</label>
                                            <textarea name="text_en"
                                                class="editor">{{ $page['text_en'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group hide-if-old">
                                    <label for="feature_image">Изображение страницы</label>
                                    <img src="{{ $page['image'] }}" alt="" class="img-uploaded"
                                        style="display: block; width: 300px">
                                    <input type="text" name="image"
                                        class="form-control @error('image') is-invalid @enderror" id="feature_image"
                                        name="feature_image" value="{{ $page['image'] }}" readonly>
                                    <div class="invalid-feedback">
                                        Please fill a valid data.
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">обновить</button>
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
