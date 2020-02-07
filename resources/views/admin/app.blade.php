<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/morris.js/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- datatable css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- select2 -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.inc.navbar')
<!-- Left side column. contains the logo and sidebar -->
@include('admin.inc.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @if(isset($header))
                <h3>
                    {{ $header['title'] }}
                    <small>{{ $header['pageTitle'] }}</small>
                </h3>
            @endif
            @if(isset($header['createUrl']))
                <ol class="breadcrumb">
                    <button type="button"
                            id="addSomething"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-action="{{ url($header['createUrl']) }}"
                            data-modal="{{ $header['modalSize'] }}"
                            data-title="{{ $header['modalTitle'] }}"
                            data-target="#myModal">Add New</button>
                </ol>
            @endif

        </section>

        @include('admin.inc.messages')
        @include('admin.modal.add')
        @yield('content')

    </div>
    <!-- /.content-wrapper -->

    @include('admin.inc.footer')


</div>
<!-- ./wrapper -->

<!-- footer script -->
<!-- jQuery 3 -->
<script src="{{ asset('assets/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('assets/admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
<!-- select2 -->


<!-- datatable -->
<script src="{{ asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
{{--add modal body by ajax--}}
<script>
    $(document).on('click','#addSomething', function () {
        var actionUrl  = $(this).attr('data-action');
        var modalTitle = $(this).attr('data-title');
        $('.modal-title').text(modalTitle);
        var modalSize  = $(this).attr('data-modal');
        removeModalSize(modalSize);

        $.ajax({
            type:'GET',
            url:actionUrl,
            success:function (data) {
                $('.modal-body').html(data);
            }

        });

    })

    // add user defined modal
    function removeModalSize(modalSize) {
        var thisClass = $('.modal-dialog');
        if (thisClass.hasClass('modal-xs')){
            thisClass.removeClass('modal-xs');
        }
        if(thisClass.hasClass('modal-sm')){
            thisClass.removeClass('modal-sm');
        }
        if(thisClass.hasClass('modal-md')){
            thisClass.removeClass('modal-md');
        }
        if(thisClass.hasClass('modal-lg')){
            thisClass.removeClass('modal-lg');
        }
        if(thisClass.hasClass('modal-xl')){
            thisClass.removeClass('modal-xl');
        }
        thisClass.addClass(modalSize);

    };

    // delete row

    $(document).on('click', '.deleteRow', function () {
        var url = $(this).attr('data-action');
        var del = confirm('Are you sure want to delete ?');

        if(del){
            $.ajax({
                type: 'GET',
                url: url,
                success:function(data) {
                    location.reload();
                }
            });
        }
    })

</script>

<!-- footer script -->

<!--fed out message-->
<script>
    setTimeout(function () {
        $('.alert').hide();
    },5000);

</script>
</body>
</html>
