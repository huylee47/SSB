<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSB | Trang quản trị</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{ url('') }}/assets/css/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ url('') }}/assets/css/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/app.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/admin.css">

    {{-- <link rel="shortcut icon" href="{{ url('') }}/assets/images/favicon.svg" type="image/x-icon"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">

    <!-- Thêm CSS từ section 'styles' nếu có -->
    @yield('styles')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div >
                            <a href="{{route('index')}}"><img src="{{ url('') }}/assets/img/logo/logo.png"
                                    alt="Logo"class="lgA" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.index') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.blog.index') }}" class='sidebar-link'>
                                <i class="bi bi-newspaper"></i>
                                <span>Tin tức</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ request()->routeIs('admin.course.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.course.index') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Khoá học</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" class='sidebar-link'>
                                <i class="bi bi-envelope"></i>
                                <span>Danh sách liên hệ</span>
                            </a>
                        </li>

                        <li class="sidebar-item  {{ request()->routeIs('config.edit',"1") ? 'active' : '' }}">
                            <a href="{{ route('config.edit',"1") }}" class='sidebar-link'>
                                <i class="bi bi-gear"></i>
                                <span>Cấu hình hệ thống</span>
                            </a>
                        </li>



                        {{-- <li class="sidebar-item {{ request()->routeIs('admin.property.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.property.index') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Bất động sản</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('admin.contact.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.contact.index') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Liên hệ</span>
                            </a>
                        </li> --}}

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        @yield('main')
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2024 &copy; OuranSoft</p>
                </div>
                {{-- <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://ahmadsaugi.com">A. Saugi</a></p>
                </div> --}}
            </div>
        </footer>
    </div>
    </div>
    <script src="{{ url('') }}/assets/css/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/assets/css/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/css/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{ url('') }}/assets/css/vendors/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/css/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ url('') }}/assets/js/main.js"></script>

    <!-- Thêm script JS từ section 'scripts' nếu có -->
    @yield('scripts')
</body>

</html>
