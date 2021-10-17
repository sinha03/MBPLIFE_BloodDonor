<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Blood Donor App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
         <meta name="csrf-token" content="{!! csrf_token() !!}">
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
         <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">
        {!! Html::style('donnerstyle/css/admin.css') !!}
            <link rel="stylesheet" href="donnerstyle/js/style.css">
    </head>
   
    <body>
 <div id="app">
 <div class="container-contact100">
  
         <!--<template slot="start">
            <b-navbar-item href="#">
                Home
            </b-navbar-item>
            <b-navbar-item href="#">
                Documentation
            </b-navbar-item>
        </template>

        <template slot="end">
            <b-navbar-item tag="div">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </b-navbar-item>
        </template>-->
   
       

        @yield('content')
           

     <script src="https://unpkg.com/vue"></script>
    <!-- Full bundle -->
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>

    <!-- Individual components -->
    <script src="https://unpkg.com/buefy/dist/components/table"></script>
    <script src="https://unpkg.com/buefy/dist/components/input"></script>

  
    <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
     <script src="donnerstyle/js/main.js"></script>
    </body>
</html>