<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Property Tax Registration Management System for Uganda</title>

      <!-- Global stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
      <link href="{{ asset ('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset ('assets/css/core.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset ('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset ('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
      <!-- /global stylesheets -->

      <!-- Core JS files -->
      <script src="{{ asset ('assets/js/plugins/loaders/pace.min.js') }}"></script>
      <script src="{{ asset ('assets/js/core/libraries/jquery.min.js') }}"></script>
      <script src="{{ asset ('assets/js/core/libraries/bootstrap.min.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/loaders/blockui.min.js') }}"></script>
      <!-- /core JS files -->

      <!-- Theme JS files -->
      <script src="{{ asset ('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
      <script src="{{ asset ('assets/js/plugins/pickers/daterangepicker.js') }}"></script>

      <script src="{{ asset ('assets/js/app.js') }}"></script>
      <script src="{{ asset ('assets/js/demo_pages/dashboard.js') }}s"></script>
      <!-- /theme JS files -->

<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
