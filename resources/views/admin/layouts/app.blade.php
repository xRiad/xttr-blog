<!DOCTYPE html>
<html lang="en">
<x-admin.head/>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <x-admin.header/>

    <!-- Main Sidebar Container -->
    <x-admin.side-bar/>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-admin.footer/>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<x-admin.foot/>
</body>
</html>