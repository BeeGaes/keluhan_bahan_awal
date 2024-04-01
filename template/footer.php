</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2024 <span class="text-info">Keluhan Bahan Awal</span></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= $main_url ?>asset/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $main_url ?>asset/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= $main_url ?>asset/AdminLTE-3.2.0/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= $main_url ?>asset/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
</body>


<script>
    $(function() {
        let tema =sessionStorage.getItem('tema');
        if (tema) {
            $('body').addClass(tema);
            $('#cekDark').prop('checked', true);
        }
        $(document).on('click', "#cekDark", function(){
            if ($('#cekDark').is(':checked')) {
                $('body').addClass('dark-mode');
                sessionStorage.setItem('tema', 'dark-mode');
            } else {
                $('body').removeClass('dark-mode');
                sessionStorage.removeItem('tema');
            }
        })
    })
</script>
</html>