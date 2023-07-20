<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @include('admin.include.css')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    @include('admin.include.navbar')
    @include('admin.include.sidebar')
    @include('admin.include.leftsidebar')
    <div class="mobile-menu-overlay"></div>
    @yield('content')
    @include('admin.include.script')

</body>
<script>
    @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
    toastr.success("{!!Session::get('success')!!}");
    @endif
    @if(Session::has('msg'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
    toastr.success("{!!Session::get('success')!!}");
    @endif
</script>
</html>
