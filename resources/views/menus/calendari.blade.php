@extends('home')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('bootstrap/bootstrap-year-calendar/js/bootstrap-year-calendar.js') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('bootstrap/bootstrap-year-calendar/js/bootstrap-year-calendar.min.js') }}" rel="stylesheet" type="text/css">
</head>
@section('content')
<section class='content'>
    <body>
        <div data-provide="calendar"></div>
    </body>
</section>    
@endsection
</html>


