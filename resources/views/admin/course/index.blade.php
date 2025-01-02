@extends('admin.layouts.master')
@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>khoá học</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách khoá học</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        {{-- Thông báo --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Nút thêm khoá học --}}
                        <a href="{{ route('admin.course.add') }}" class="btn btn-primary mb-3">Thêm khoá học</a>

                        {{-- Bảng danh sách khoá học --}}
                        <table class="table table-striped table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th class="col-1">#</th>
                                    <th class="col-2">Tên khoá học</th>
                                    <th class="col-2">Mô tả</th>
                                    <th class="col-3">Nội dung</th>
                                    <th class="col-2">ảnh</th>
                                    <th class="col-2">chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $index => $course)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->description }}</td>
                                        <td>{!! htmlspecialchars_decode($course->content) !!}</td>
                                        <td>
                                            <img
                                                src="{{ url('') }}/assets/img/thumbnails/{{ $course->thumbnail }}"style="width: 200px;">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.course.edit', ['id' => $course->id]) }}"
                                                class="btn btn-info">Chỉnh sửa</a>
                                            <a href="{{ route('admin.course.delete', ['id' => $course->id]) }}"
                                                class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    @endsection
