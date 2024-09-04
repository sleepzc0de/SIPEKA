<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Informasi Penataan Kawasan | SIPEKA</title>

	<!-- Global stylesheets -->
	<link href="{{asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/core/assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    @yield('css')
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('assets/demo/demo_configurator.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>


	<script src="{{asset('assets/core/assets/js/app.js')}}"></script>
	<script src="{{asset('assets/demo/pages/dashboard.js')}}"></script>
    @yield('js')
	{{-- <script src="{{asset('assets/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/sparklines.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/lines.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/areas.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/donuts.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/bars.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/progress.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/pies.js')}}"></script>
	<script src="{{asset('assets/demo/charts/pages/dashboard/bullets.js')}}"></script> --}}
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	@include('layouts.SIPEKA.navbar')
	<!-- /main navbar -->


	<!-- Navigation -->
    @include('layouts.SIPEKA.navigation')
	<!-- /navigation -->


	<!-- Page header -->
    @include('layouts.SIPEKA.pageheader')
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

                @yield('content')

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
    @include('layouts.SIPEKA.footer')
	<!-- /footer -->


	<!-- Notifications -->
    @include('layouts.SIPEKA.notification')
	<!-- /notifications -->


	<!-- Demo config -->
    @include('layouts.SIPEKA.config')
	<!-- /demo config -->

</body>
</html>
