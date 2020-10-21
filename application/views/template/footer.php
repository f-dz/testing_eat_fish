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
    <script src="<?= base_url('assets/template/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/template/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- Skycons -->
    <script src="<?= base_url('assets/template/vendors/skycons/skycons.js')?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('assets/template/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/template/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/template/vendors/DateJS/build/date.js')?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/template/vendors/jqvmap/dist/jquery.vmap.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/template/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <!-- Datatables -->
    <script src="<?= base_url('assets/template/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/template./vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?= base_url('assets/template/vendors/jszip/dist/jszip.min.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/template/build/js/custom.min.js')?>"></script>

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
