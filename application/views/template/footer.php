<!-- footer content -->
        <footer>
          <div class="pull-right">
            EAT FISH &copy; 2020 - Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= filter_var(base_url('assets/template/vendors/jquery/dist/jquery.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- Bootstrap -->
    <script src="<?= filter_var(base_url('assets/template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- FastClick -->
    <script src="<?= filter_var(base_url('assets/template/vendors/fastclick/lib/fastclick.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- Skycons -->
    <script src="<?= filter_var(base_url('assets/template/vendors/skycons/skycons.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- Flot -->
    <script src="<?= filter_var(base_url('assets/template/vendors/Flot/jquery.flot.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/Flot/jquery.flot.pie.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/Flot/jquery.flot.time.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/Flot/jquery.flot.stack.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/Flot/jquery.flot.resize.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- Flot plugins -->
    <script src="<?= filter_var(base_url('assets/template/vendors/flot.orderbars/js/jquery.flot.orderBars.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/flot-spline/js/jquery.flot.spline.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/flot.curvedlines/curvedLines.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- DateJS -->
    <script src="<?= filter_var(base_url('assets/template/vendors/DateJS/build/date.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- JQVMap -->
    <script src="<?= filter_var(base_url('assets/template/vendors/jqvmap/dist/jquery.vmap.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/jqvmap/dist/maps/jquery.vmap.world.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= filter_var(base_url('assets/template/vendors/moment/min/moment.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/bootstrap-daterangepicker/daterangepicker.js'), FILTER_SANITIZE_URL);?>"></script>
    <!-- Datatables -->
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net/js/jquery.dataTables.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template./vendors/datatables.net-buttons/js/buttons.flash.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-buttons/js/buttons.html5.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-buttons/js/buttons.print.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/jszip/dist/jszip.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/pdfmake/build/pdfmake.min.js'), FILTER_SANITIZE_URL);?>"></script>
    <script src="<?= filter_var(base_url('assets/template/vendors/pdfmake/build/vfs_fonts.js'), FILTER_SANITIZE_URL);?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= filter_var(base_url('assets/template/build/js/custom.min.js'), FILTER_SANITIZE_URL);?>"></script>

    <script>
      $(document).ready(function () {
        $('#dataTables-list-mhs').DataTable();
        $('.dataTables_length').addClass('bs-select');
      });
    </script>

    <script>
      $(function(){
        $("#image img").on("click",function(){
          var src = $(this).attr("src");
          $(".modal-img").prop("src",src);
        })
      })
    </script>

    <script>
      $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
	
  </body>
</html>
