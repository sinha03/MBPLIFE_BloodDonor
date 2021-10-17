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
         <link rel="stylesheet" href="donnerstyle/js/style.css">
        {!! Html::style('donnerstyle/css/donor.css') !!}

    </head>
   
    <body>
 <div id="app">

 <div class="header clearfix">
    <nav class="nav-bar">
      <ul class="nav nav-pills pull-right">
       
        <li role="presentation" class="nav-li">
          <a href="#" @click="currentView='manage-posts'">Manage Posts</a>
        </li>
        <li role="presentation" class="nav-li">
          <a href="#" @click="currentView='create-post'">Create Post</a>
        </li>
       <li role="presentation" class="nav-li">
          <a href="#" @click="currentView='stock'">stock list </a>
        </li>
         <li role="presentation" class="nav-li">
          <a href="#" @click="currentView='create-form'">create form </a>
        </li>
      </ul>
    </nav>
    <h3 class="text-muted">Admin Panel</h3>
  </div>

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