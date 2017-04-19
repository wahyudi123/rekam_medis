<footer>
	<div class="pull-right">
		Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
	</div>
	<div class="clearfix"></div>
</footer>
	<!-- /footer content -->

<!-- jQuery -->
 	<script src="<?php echo (js.'jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo (js.'bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo (js.'fastclick/lib/fastclick.js');?>"></script>
    <!-- NProgress -->
    <script src="<?php echo (js.'nprogress/nprogress.js');?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo (js.'chartjs/Chart.min.js');?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo (js.'progressbar/bootstrap-progressbar.min.js');?>"></script>
    <!-- iCheck -->
    <script src="<?php echo (js.'iCheck/icheck.min.js');?>"></script>
    <!-- Skycons -->
    <script src="<?php echo (js.'skycons/skycons.min.js');?>"></script>
    <!-- Flot -->
    <script src="<?php echo (js.'Flot/jquery.flot.js');?>"></script>
    <script src="<?php echo (js.'Flot/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo (js.'Flot/jquery.flot.time.min.js');?>"></script>
    <script src="<?php echo (js.'Flot/jquery.flot.stack.js');?>"></script>
    <script src="<?php echo (js.'Flot/jquery.flot.resize.js');?>"></script>

    <!-- Select2 -->
    <script src="<?php echo (js.'select/select2.full.js');?>"></script>

   	<!-- jVectorMap -->
    <script src="<?php echo (js.'maps/jquery-jvectormap-2.0.3.min.js');?>"></script>

    <!-- bootstrap-datepicker -->    
    <script src="<?php echo (js.'jqueryUI/jquery-ui.min.js');?>"></script>
    <script src="<?php echo (js.'moment/moment.js');?>"></script>

    <!-- Datatables -->
    <script src="<?php echo (js.'datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo (js.'datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    
    <script src="<?php echo (js.'datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>

    <script src="<?php echo (js.'datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo (js.'datatables.net-buttons/js/buttons.print.min.js');?>"></script>
   <!--  <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script> -->
    <script src="<?php echo (js.'pdfmake/build/vfs_fonts.js');?>"></script>
    <script src="<?php echo (js.'pdfmake/build/vfs_fonts.js');?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo (js.'custom.min.js');?>"></script>

 <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    <script>
        $(document).ready(function() {

        $('.datepickerr').datepicker({
                dateFormat: 'dd-mm-yy'
            });

        $(".select_single").select2({
            placeholder:"Silahkan Pilih",
          allowClear: false
        });

        $(".select2_single").select2({
            placeholder:"Silahkan Pilih",
          allowClear: false
        });

        $(".select3_single").select2({
            placeholder:"Silahkan Pilih",
          allowClear: false
        });

        $(document).ready(function() {
            $("#clear").click(function(){
                  $("td").empty();
            });
        });

        var handleDataTableButtons = function() {
          if ($("#example").length) {
            $("#example").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };
      });



    </script>

    </body>
</html>