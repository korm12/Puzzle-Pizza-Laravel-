<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puzzle Pizza Shop</title>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
        <link href="{{ asset('css/font.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css2/bootstrap.min.css') }}">
        <script src="{{ asset('js/cart.js') }}" defer></script>
        <script src="{{ asset('js/menu.js') }}" defer></script>
        <script src="{{ asset('lib-ajax/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('css/bootstrap/js2/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    </head>
    <body class="antialiased custom-background mx-auto">
        <!---nav --->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark default-color">
        <a class="navbar-brand" href="#"><img src="{{ asset('pictures/pplogo.PNG') }}" width="70px" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"  style=" color:#8CC63F;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/menu') }}"  style=" color:#8CC63F;">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  style=" color:#8CC63F;">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cart') }}"  style=" color:#8CC63F;">CART</a>
                    </li>
                </ul>>
            </div>
        </nav>
        <!---end nav --->
        <div class="container">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!---Main content area --->

             
            @yield('homeContent')
            <!---Main content area --->

            
        </div>
        <?php 
        // @yield('homeContent') = Eto yung ginawa mong section sa views mo 
        //                         homeContent yung variable tapos yung @yield  ang command para 
        //                         i output dito
        //                                     ?>
        <!--- footer --->
        <div class="container-fluid footer-container shad" >
            <div class="container footer-wrapper">

                <div class="row ">
                    <div class="col-md-2">
                        <h5 class="foot-text-title">MENU</h5>
                        <br>
                        <ul class="foot-list">
                            <li style="color:white">Pizza</li>
                            <li style="color:white">Shake</li>
                            <li style="color:white">Lasagna</li>
                        </ul>  
                    </div>
                    <div class="col-md-2">
                        <h5 class="foot-text-title">INFORMATION</h5>
                        <br>
                        <ul class="foot-list">
                            <li style="color:white">About Us</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="foot-text-title">CONTACT US</h5>
                        <br>
                        <ul class="foot-list">
                            <li style="color:white">Email : ronwellbutial@gmail.com</li>
                            <li style="color:white">Phone : 09610342579</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <h5 class="foot-text-title">NEWSLETTER</h5>
                        <br>
                        <ul class="foot-list">
                            <li style="color:white">Subscribe to Newsletter</li>
                        </ul>
                        <form class="form-inline newsletter mt-2 " action="/action_page.php">
                            <br>
                            <label for="email" style="color:white; margin-right:2%" >Email address:</label>
                            <input  style="margin-right: 2%;" type="email" class="form-control" placeholder="Enter email" id="email">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <hr style="border: 1px solid #1e7500;">
                <div class="footer-socials text-center">
                    <i class="fab fa-facebook-square" style="font-size:40px;color:#1e7500; margin-right:2%;"></i>
                    <i class="fab fa-instagram" style="font-size:40px;color:#1e7500; margin-right:2%;"></i>
                    <i class="fab fa-linkedin" style="font-size: 40px;color:#1e7500; margin-right:2%;"></i>
                </div>
                <hr style="border: 1px solid #1e7500;"> 
                <div class="text-center">
                    <p style="color:white">Developed by Ronwell Butial For Project Only</p>
                </div>     
            </div>
        </div>
    </body>
</html>
