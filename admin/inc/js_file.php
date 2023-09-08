<!--Jquery.min js-->
		<script src="../assets/jss/jquery.min.js"></script>

		<!--popper js-->
		<script src="../assets/jss/popper.js"></script>

		<!--Tooltip js-->
		<script src="../assets/jss/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="../assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="../assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Select2 js-->
		<script src="../assets/plugins/select2/select2.full.js"></script>

		<!--Inputmask js-->
		<script src="../assets/plugins/inputmask/jquery.inputmask.js"></script>

		<!--Moment js-->
		<script src="../assets/plugins/moment/moment.min.js"></script>

		<!--Bootstrap-daterangepicker js-->
		<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!--Bootstrap-datepicker js-->
		<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!--Bootstrap-colorpicker js-->
		<script src="../assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

		<!--Bootstrap-timepicker js-->
		<script src="../assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>

		<!--mCustomScrollbar js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Othercharts js-->
		<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--iCheck js-->
		<script src="../assets/plugins/iCheck/icheck.min.js"></script>

		<!--forms js-->
		<script src="../assets/jss/forms.js"></script>

		<!--Scripts js-->
		<script src="../assets/jss/scripts.js"></script>
		<!--DataTables js-->
		<script src="../assets/plugins/Datatable/js/jquery.dataTables.js"></script>
		<script src="../assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>

		<!--Jquery.knob js-->
		<script src="../assets/plugins/othercharts/jquery.knob.js"></script>

		<!--Jquery.sparkline js-->
		<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--othercharts js-->
		<script src="../assets/js/othercharts.js"></script>

		<!-- Chart.js -->
		<script src="../assets/plugins/Chart.js/dist/Chart.bundle.js"></script>

		<!--Morris js-->
		<script src="../assets/plugins/morris/morris.min.js"></script>
		<script src="../assets/plugins/morris/raphael.min.js"></script>

		<!-- ECharts -->
		<script src="../assets/plugins/echarts/echarts.js"></script>

		<!-- Chartist.js -->
		<script src="../assets/plugins/chartist/chartist.js"></script>

		<!--Scripts js-->
		<script src="../assets/jss/scripts.js"></script>
		<script src="../assets/jss/dashboard5.js"></script>
		<script src="../assets/jss/sparkline.js"></script>
        <script>
			$(function(e) {
				$('#example').DataTable();
				window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
$(function () {
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
});
			} );
		</script>