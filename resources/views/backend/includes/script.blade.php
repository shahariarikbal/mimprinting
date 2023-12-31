<script src="{{ asset('/backend/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('/backend/') }}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('/backend/') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('/backend/') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('/backend/') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('/backend/') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('/backend/') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('/backend/') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('/backend/') }}/assets/js/misc.js"></script>
<script src="{{ asset('/backend/') }}/assets/js/settings.js"></script>
<script src="{{ asset('/backend/') }}/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('/backend/') }}/assets/js/dashboard.js"></script>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
