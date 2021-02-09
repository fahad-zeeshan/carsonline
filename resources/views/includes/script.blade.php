<script src="{{asset('asset/js/html5shiv.js')}} "></script>
<script src=" {{asset('asset/js/respond.min.js')}}"></script>
<script src="{{asset('asset/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('asset/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('asset/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('asset/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<!-- <script src="js/waves.js"></script> -->
<!--Menu sidebar -->
<script src="{{asset('asset/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('asset/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('asset/js/custom.min.js')}}"></script>
<script src="{{asset('asset/assets/plugins/slick/slick.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="{{asset('asset/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('asset/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('asset/assets/plugins/morrisjs/morris.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('asset/js/dashboard1.js')}}"></script>
<!-- This is data table -->
<script src="{{asset('asset/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="{{asset('asset/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('asset/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('asset/js/jszip.min.js')}}"></script>
<script src="{{asset('asset/js/pdfmake.min.js')}}"></script>
<script src="{{asset('asset/js/vfs_fonts.js')}}"></script>
<script src="{{asset('asset/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('asset/js/buttons.print.min.js')}}"></script>

<!-- Magnific popup JavaScript -->
<script src="{{asset('asset/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
<!-- Dropzone Plugin JavaScript -->
<script src="{{asset('asset/assets/plugins/dropzone-master/dist/dropzone.js')}}"></script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('asset/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        if ('{{\Illuminate\Support\Facades\Session::has('success')}}') {
            Swal.fire(
                'Success',
                '{{\Illuminate\Support\Facades\Session::get('success')}}',
                'success'
            )
        }
        if ('{{\Illuminate\Support\Facades\Session::has('error')}}') {
            Swal.fire(
                'Error',
                '{{\Illuminate\Support\Facades\Session::get('error')}}',
                'error'
            )
        }
        if ('{{\Illuminate\Support\Facades\Session::has('warning')}}') {
            Swal.fire(
                'Warning',
                '{{\Illuminate\Support\Facades\Session::get('warning')}}',
                'warning'
            )
        }
    });
</script>

