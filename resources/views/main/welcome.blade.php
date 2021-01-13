@extends('layouts.layout')
@section('homeContent')
    <div>
    <?php
    //  @extends('layouts.layout')  eto yung pinaka standard format ng webpage mo 
    //         Dito naka lagay yung footer, nav, etc.
    //         Lahat ng paulit ulit lang sa page.
    //         --->
    // @section('homeContent') -  eto yung yung variable na gagamitin mo para icall sya dun
    //         sa loob layout. check mo yung views/layout/layout.blade.php
                
    //         wag kalimutan ang @endsection sa dulo nitong file.
    //         check  
                
                ?>
        <div class="row">
            <h3 class="text-center mx-auto page-title"> 
                <span class="custom-font-red">Puzzle</span>
                <span class="custom-font-green"> Pizza </span>
                <span class="custom-font-yellow"> Shop </span>
            </h3>
                
        </div>
        <div class="row  carousel-container" style="padding-bottom: 2%;padding-top: 2%;">
            <div id="demo" class="carousel slide shad" data-ride="carousel">

                <!-- Indicatorss -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('pictures/c1.PNG') }}" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('pictures/c2.PNG') }}" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('pictures/c3.PNG') }}" alt="New York" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('pictures/c4.PNG') }}" alt="New York" width="1100" height="500">
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
@endsection
