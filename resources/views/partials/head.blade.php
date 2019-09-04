<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <title>{{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/com_sobi2.css')}}" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/com_sobi2.css')}}">
    <link rel="stylesheet" href="{{asset('css/adsmanager.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    {{-- js --}}
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{asset('js/lightbox.min.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</head>
