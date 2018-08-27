@extends('home')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/bootstrap-year-calendar/css/bootstrap-year-calendar.min.css') }}" rel="stylesheet" type="text/css">
    </head>

    @section('content')
       
    <div id="calendar" data-provide="calendar"></div>
        
    @endsection
    <script type="text/javascript" src="{{ asset('jquery/js/jquery-3.3.1.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/bootstrap-year-calendar/js/bootstrap-year-calendar.min.js') }}" ></script>
    
    <script>
    function editEvent(event) {
   console.log("hola");
}

function deleteEvent(event) {
 
}

function saveEvent() {
  
}

$(function() {
    var currentYear = new Date().getFullYear();

    $('#calendar').calendar({ 
        enableContextMenu: true,
        enableRangeSelection: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],     
        clickDay: function(e) {
            editEvent(e);
        }          
    });
    
    $('#save-event').click(function() {
        saveEvent();
    });
});
    </script>
</html>


