<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{env('APP_NAME')}} Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <!-- End plugin css for this page -->
        <link rel="stylesheet" href="{{asset('plugins/simple-notify/simple-notify.min.css')}}">
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />

        @stack('styles')

        <!-- plugins:js -->
        <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{asset('admin/js/off-canvas.js')}}"></script>
        <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('admin/js/template.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('admin/js/dashboard.js')}}"></script>
        <script src="{{asset('admin/js/data-table.js')}}"></script>
        <script src="{{asset('admin/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/js/dataTables.bootstrap4.js')}}"></script>
        <!-- End custom js for this page-->
        <script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/simple-notify/simple-notify.min.js')}}"></script>

        <script src="{{asset('plugins/form-repeater/jquery-repeater.min.js')}}"></script>
        <script src="{{asset('plugins/quill/quill.js')}}" ></script>

        @stack('scripts')

    </head>
    <body>
        <div class="container-scroller">
            @yield('content')
        </div>

        <x-toasts />
    </body>
</html>
