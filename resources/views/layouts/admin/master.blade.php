<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - Responsive Education Template</title>

        <!-- Styles -->
        <link href="{{ asset('/dashboard/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		 <link href="{{ asset('/dashboard/admin/assets/css/chartist.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/dashboard/admin/assets/css/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('/dashboard/admin/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('/dashboard/admin/assets/css/style.css') }}" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ asset('/dashboard/admin/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">

    </head>
    <body>

        <!-- Header -->
        @include('layouts.admin.includes.topnav')
        <!-- End of Header-->

        <div class="parent-wrapper" id="outer-wrapper">
            <!-- SIDE MENU -->
            @include('layouts.admin.includes.leftnavadmin')
            <!-- End of Side -->

            <!-- Main COntent -->
            @yield('content')
            <!-- End of Main Content -->

		</div>

		<!-- Scripts -->
        <script src="{{ asset('/dashboard/admin/assets/js/jQuery_v3_2_0.min.js') }}"></script>
		<script src="{{ asset('/dashboard/admin/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/dashboard/admin/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/dashboard/admin/assets/plugins/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('/dashboard/admin/assets/plugins/Chart.min.js') }}"></script>
		<script src="{{ asset('/dashboard/admin/assets/plugins/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('/dashboard/admin/assets/plugins/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('/dashboard/admin/assets/js/js.js') }}"></script>

    </body>

</html>
</html>
