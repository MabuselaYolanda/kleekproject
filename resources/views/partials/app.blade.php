<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }} | Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css" >
    <link href="{{ asset('platform/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/css/main.css?version=4.5.0') }}" rel="stylesheet">
    @livewireStyles
</head>
    @yield('content')

<script src="{{ asset('platform/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('platform/bower_components/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('platform/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/dropzone/dist/dropzone.js') }}"></script>
<script src="{{ asset('platform/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
<script src="{{ asset('platform/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/util.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/alert.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/button.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/modal.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/tab.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
<script src="{{ asset('platform/bower_components/bootstrap/js/dist/popover.js') }}"></script>
<script src="{{ asset('platform/js/demo_customizer.js?version=4.5.0') }}"></script>
<script src="{{ asset('platform/js/main.js?version=4.5.0') }}"></script>
@livewireScripts
</body>
</html>
