@extends('sitecore::template')

@section('style')
    @parent

    <style>
    body, nav {
    	background-color: #000;
    	color: #AAA;
    }

    nav a {
    	color: #FFF;
    }

    h1 {
    	color: #FFF;
    }

    #content .block, #content+#reservations {
    	background-image: none;
    }
    </style>

@stop
