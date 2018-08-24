@extends('home')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    @section('content')
        <body>
            <div id="calendar" data-provide="calendar"></div>
        </body>
    @endsection
    <script type="text/javascript" src="{{ asset('jquery/js/jquery-3.3.1.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/bootstrap-year-calendar/js/bootstrap-year-calendar.min.js') }}" ></script>
    <script>
        $('#calendar').calendar({
            clickDay: function(e) { 
                console.log("funciona");
            }
        });    
        function editEvent(event) {

        }

        function deleteEvent(event) {
        
        }
        
        function saveEvent() {

        }

        $(function() {
            
        });
    </script>
</html>


