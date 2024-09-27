<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Navbar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom Styles -->
         <link rel="stylesheet" href="style.css">
        <style>
                 .body{
    background-image: url('/resources/bgphoto.jpg'); /* Replace with your image URL */
    background-size: cover;  /* Make sure the background covers the whole page */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Ensure the image doesn't repeat */
     }
    /* Navbar link styles */
    .navbar-nav a {
        text-decoration: none;
        background-color: #00008B; /* Dark Blue */
        color: white;
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        margin-left: 10px;
    }
    
    .navbar-nav a:hover {
        background-color: #000066; /* Darker blue on hover */
        color: white;
    }

    /* Navbar brand logo style */
    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: #00008B; /* Dark Blue */
    }
          
        </style>
    </head>
    <body>
    @include('first_layout.navbar')  
    <!-- Navbar -->
    @yield('content')


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
