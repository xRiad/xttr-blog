<script src="/assets/back/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/back/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/assets/back/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/assets/back/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/assets/back/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/assets/back/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/back/plugins/moment/moment.min.js"></script>
<script src="/assets/back/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/assets/back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/back/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="/assets/back/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/back/dist/js/pages/dashboard.js"></script>
{{-- Select2 --}}
<script src="/assets/back/plugins/select2/js/select2.min.js"></script>



<!-- DataTables  & Plugins -->
<script src="/assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/back/plugins/jszip/jszip.min.js"></script>
<script src="/assets/back/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/back/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
