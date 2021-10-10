@include('admin.layouts/header')
@include('admin.layouts/siderbar')

yield('title')
@yield('main')

@include('admin.layouts/footer')