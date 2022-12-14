<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('logo.ico') }}" rel="icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GCYE-Membership</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}" >
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('fonts/flaticon.css') }}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


    <link rel="stylesheet" href="{{ URL::asset( 'css/jquery.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">

    {{-- <!-- Date Picker CSS --> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/datepicker.min.css')}}"> 
    
 <!-- Modernize js -->
    <script src="{{ URL::asset('js/modernizr-3.6.0.min.js') }}"></script>

    <script type="text/javascript">
        window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
        </script>
</head>
