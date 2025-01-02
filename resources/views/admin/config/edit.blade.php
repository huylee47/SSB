@extends('admin.layouts.master')
@section('main')
    <div id="main">

        <head>
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
            <style>
                .form-container {
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                }

                body {
                    /*page background, blue looks weird*/
                    background-color: #f8f9fa;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h2 class="my-4">Cấu hình hệ thống</h2>
                <div class="form-container">
                    <form action="{{ route('config.update', ['config' => $config->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- ID (hidden) -->
                        <div class="row" style="display:none;">
                            <div class="col-md-6">
                                <label for="id">ID:</label>
                                <input readonly type="number" id="id" name="id" class="form-control" required
                                    value="{{ $config->id }}">
                            </div>
                        </div>

                        <!-- Title and Description -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="title">Tiêu đề trang</label>
                                <input type="text" id="title" name="title" class="form-control" required
                                    value="{{ $config->title }}">
                            </div>
                            <div class="col-md-6">
                                <label for="description">Từ khoá</label>
                                <input type="text" id="description" name="description" class="form-control"
                                    value="{{ $config->description ?? '' }}">
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="hotline">Liên hệ</label>
                                <input type="text" id="hotline" name="hotline" class="form-control" required
                                    value="{{ $config->hotline }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required
                                    value="{{ $config->email }}">
                            </div>
                        </div>

                        <!-- Address and Map -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="address">Trụ sở chính</label>
                                <textarea id="address" name="address" class="form-control">{{ $config->address ?? '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="map">Link bản đồ ( iframe )</label>
                                <textarea id="map" name="map" class="form-control">{{ $config->map ?? '' }}</textarea>
                            </div>
                        </div>

                        <!-- Logo and Favicon -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="logo">Logo</label>
                                <input accept=".jpg,.gif,.png,.heic" id="logo" type="file" class="form-control"
                                    name="logo" value="{{ $config->logo }}">
                                <div>
                                    <br>
                                    <label for="logo">Logo hiện tại : </label>
                                    <img src="{{ url('') }}/assets/img/logo/{{ $config->logo }}" width="40%"
                                        alt="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="favicon">Link Favicon</label>
                                <input accept=".ico,.icon" id="favicon" type="file" class="form-control" name="favicon"
                                    value="{{ $config->favicon }}">
                                    <br>
                                    <label for="logo">Favicon hiện tại : </label>
                                    <img src="{{ url('') }}/assets/img/icon/{{ $config->favicon }}" width="20%"
                                        alt="">
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="facebook">Link FACEBOOK</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" required
                                    value="{{ $config->facebook }}">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mt-4">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>

    </div>
@endsection
