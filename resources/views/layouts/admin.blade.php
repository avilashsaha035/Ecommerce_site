<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

      <!-- CSS Files -->
      <link href="../admin/css/custom.css" rel="stylesheet" />
      <link href="../admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  <div class="wrapper">
    @include('layouts.inc.sidebar')

    <div class="main-panel">
      @include('layouts.inc.adminnav')

      <div class="content">
        @yield('content')
      </div>
      
      @include('layouts.inc.adminfooter')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <script src="../admin/js/jquery.min.js"></script>
  <script src="../admin/js/popper.min.js"></script>
  <script src="../admin/js/bootstrap-material-design.min.js"></script>
  <script src="../admin/js/perfect-scrollbar.jquery.min.js"></script>

  {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @if(session('status'))
    <script>
      swal("{{session('status')}}","sucess");
    </script>   
   @endif
  
  @yield('scripts')
</body>
</html>
