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
                        <h3>Thêm mới tin tức</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sửa tin tức</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                {{-- Hiển thị thông báo lỗi --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- Form Sửa tin tức --}}
                                <form action="{{ route('admin.blog.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label for="">Ảnh bìa </label>
                                    <div class="mb-3">
                                        <input type="file" accept="image/*" class="form-control" id="customFile"
                                            name="avatar" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="title" name="title" required
                                           >
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            required >
                                    </div>
                                    <div class="mb-3">
                                        <label>Nội dung</label>
                                        <textarea id="my-editor" name="content" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm tin tức</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdn.ckeditor.com/4.5.11/full-all/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
        <script>
            $('#input_image').change(function() {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#holder_image').attr("src", e.target.result);
                    };

                    reader.readAsDataURL(this.files[0]);
                }
            })
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravelmy-edito-filemanager?type=Files',
                filebrowserUploadUrl: 'new/ck_editor',
                filebrowserUploadMethod: 'form'
            };
            CKEDITOR.replace('my-editor', options);
        </script>
    @endsection
