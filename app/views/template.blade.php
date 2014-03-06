@extends('sitecore::template')

@section('style')
    @parent

    <style>
    body, nav {
    	background-color: #000;
    	color: #FFF;
    }

    nav a, .block h2 {
    	color: #FFF;
    }

    h1 {
    	color: #D3BC8D;
    }

    #content .block, #content+#reservations {
    	background-image: none;
    }
    </style>

@stop
