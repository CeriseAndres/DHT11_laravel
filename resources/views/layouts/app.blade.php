<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Thermometer</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
      
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="{{ asset('js/mdb.js') }}"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
  
  <!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  
  
	</body>
</html>
