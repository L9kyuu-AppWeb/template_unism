<footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-block"><b>Version</b> 1.0</div>
    <strong>Copyright &copy; 2021 <a href="https://lsaa.unism.ac.id">SIMAWA UNISM</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $link_web ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $link_web ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo $link_web ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo $link_web ?>/plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo $link_web ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Select2 -->
<script src="<?php echo $link_web ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Diagram -->
<script src="<?php echo $link_web ?>/files/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $link_web ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $link_web ?>/dist/js/demo.js"></script>
<script src="<?php echo $link_web ?>/config/cekinput.js"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
</body>

</html>