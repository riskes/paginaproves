@extends('home')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script type="text/javascript" src="{{ asset('bootstrap/bootbox/bootbox.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('bootstrap/bootstrap-year-calendar/js/bootstrap-year-calendar.min.js') }}" ></script>
    <!-- @include('menus.includes.modalCalendar') -->
    <script>
    function editEvent(event) {
        console.log(event);
    var date = ""+event.date.getDate()+"/"+(event.date.getMonth()+1)+"/"+event.date.getFullYear()+"";
    $.ajax({
        type: "GET",
        url: 'modalcalendar',
        success: function(data) {
            bootbox.dialog({
                message: data,
                title: "Custom title",
                buttons: {
                    success: {
                        label: "Success!",
                        className: "btn-success",
                        callback: function(){
                            saveEvent(date);
                        }
                    },
                }
            });
        }
    });
}

function deleteEvent(event) {
 
}

function saveEvent(date) {
    var datafi = date;
    var dataini = date;
    var color = "red";
    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "calendaris/store",
        data: {dataini: dataini, datafi: datafi, color: color},
        datatype: "json",
        success: function(){
            console.log("ok");
        },
        error: function(){
            console.log("error");
        }
    });
    
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

