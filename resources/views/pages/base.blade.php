<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    
    <style>


        body {
            background-color: black;
        }
        h1 {
            color: white;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: red;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 10px;
            
        }

        li {
            display: inline-block;
            margin-right: 10px;
            padding: 7px;
            width: 80px;
            color: white;
            background-color: black;
            text-align: center;
            border-radius: 9px;
        
         }

         li:hover {
            background-color: yellow;
            border-radius: 9px;
            color: black;
         }

         img{
            width: 70px;
            height: 60px;
            margin-left: 10px;
         }
    </style>
</head>
<body>

    <nav>
        <img src="https://i.pinimg.com/originals/c7/c6/d4/c7c6d4e62a2f96134ee819240dd07390.jpg" alt="">
        
        <ul>
            
            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('rgms') ? 'active' : ''}}" href="{{url('/rgms')}}">Rgms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('managers') ? 'active' : ''}}" href="{{url('/managers')}}">Managers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('crews') ? 'active' : ''}}" href="{{url('/crews')}}">Crews</a>
            </li>

        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
    
</body>
</html>